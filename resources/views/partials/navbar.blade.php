{!! admin_section(Dcat\Admin\Admin::SECTION['NAVBAR_BEFORE']) !!}

<style nonce="{{\Dcat\Admin\Admin::asset()->csp_nonce}}">
    .top-0 {
        top: 0;
    }

    .cursor-pointer {
        cursor: pointer;
    }
</style>
<nav class="header-navbar navbar-expand-lg navbar top-0
    navbar-with-menu {{ $configData['navbar_class'] }}
    {{ $configData['navbar_color'] }}
        navbar-light navbar-shadow ">

    <div class="navbar-wrapper">
        <div class="navbar-container content">
            @if(! $configData['horizontal_menu'])
                <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                    <ul class="nav navbar-nav">
                        <li class="nav-item mr-auto">
                            <a class="nav-link menu-toggle cursor-pointer" data-widget="pushmenu">
                                <i class="fa fa-bars font-md-2"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            @endif

            <div class="navbar-collapse d-flex justify-content-between">
                <div class="navbar-left d-flex align-items-center">
                    {!! Dcat\Admin\Admin::navbar()->render('left') !!}
                </div>

                @if($configData['horizontal_menu'])
                    <div class="d-md-block horizontal-navbar-brand justify-content-center text-center">
                        <ul class="nav navbar-nav flex-row">
                            <li class="nav-item mr-auto">
                                <a href="{{ admin_url('/') }}" class="waves-effect waves-light">
                                    <span class="logo-lg">{!! config('admin.logo') !!}</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                @endif

                <div class="navbar-right d-flex align-items-center">
                    {!! Dcat\Admin\Admin::navbar()->render() !!}

                    <ul class="nav navbar-nav">
                        {{--User Account Menu--}}
                        {!! admin_section(Dcat\Admin\Admin::SECTION['NAVBAR_USER_PANEL']) !!}

                        {!! admin_section(Dcat\Admin\Admin::SECTION['NAVBAR_AFTER_USER_PANEL']) !!}
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>

{!! admin_section(Dcat\Admin\Admin::SECTION['NAVBAR_AFTER']) !!}
