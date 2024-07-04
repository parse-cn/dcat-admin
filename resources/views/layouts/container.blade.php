<body
    class="dcat-admin-body sidebar-mini layout-fixed {{ $configData['body_class']}} {{ $configData['sidebar_class'] }}
        {{ $configData['navbar_class'] === 'fixed-top' ? 'navbar-fixed-top' : '' }} ">

<script @if(\Dcat\Admin\Admin::asset()->csp_nonce) nonce="{{\Dcat\Admin\Admin::asset()->csp_nonce}}" @endif >
    var Dcat = CreateDcat({!! Dcat\Admin\Admin::jsVariables() !!});
</script>

{!! admin_section(Dcat\Admin\Admin::SECTION['BODY_INNER_BEFORE']) !!}

<div class="wrapper">
    @include('admin::partials.sidebar')

    @include('admin::partials.navbar')

    <div class="app-content content">
        <div class="content-wrapper top-0" id="{{ $pjaxContainerId }}">
            @yield('app')
        </div>
    </div>
</div>

<style nonce="{{\Dcat\Admin\Admin::asset()->csp_nonce}}">
    .arrow-up {
        position: fixed;
        bottom: 2%;
        right: 10px;
        display: none
    }
</style>
<footer class="main-footer pt-1">
    <p class="clearfix blue-grey lighten-2 mb-0 text-center">
            <span class="text-center d-block d-md-inline-block mt-25">
                Powered by
                <a target="_blank" href="https://github.com/jqhph/dcat-admin">Dcat Admin</a>
                <span>&nbsp;·&nbsp;</span>
                v{{ Dcat\Admin\Admin::VERSION }}
            </span>

        <button class="btn btn-primary btn-icon scroll-top pull-right arrow-up">
            <i class="feather icon-arrow-up"></i>
        </button>
    </p>
</footer>

{!! admin_section(Dcat\Admin\Admin::SECTION['BODY_INNER_AFTER']) !!}

{!! Dcat\Admin\Admin::asset()->jsToHtml() !!}

<script
    @if(\Dcat\Admin\Admin::asset()->csp_nonce) nonce="{{\Dcat\Admin\Admin::asset()->csp_nonce}}" @endif>Dcat.boot();</script>

</body>

</html>
