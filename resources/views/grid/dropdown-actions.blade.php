@if (!empty($default) || !empty($custom))
<div class="grid-dropdown-actions dropdown">
    <a href="#" class="dropdown-padding" data-toggle="dropdown">
        <i class="feather icon-more-vertical"></i>
    </a>
    <ul class="dropdown-menu dropdown-menu-position" >

        @foreach($default as $action)
            <li class="dropdown-item">{!! Dcat\Admin\Support\Helper::render($action) !!}</li>
        @endforeach

        @if(!empty($custom))

            @if(!empty($default))
                <li class="dropdown-divider"></li>
            @endif

            @foreach($custom as $action)
                <li class="dropdown-item">{!! $action !!}</li>
            @endforeach
        @endif
    </ul>
</div>
@endif

<style nonce="{{csp_nonce()}}">
    .dropdown-padding {
        padding:0 10px;
    }
    .dropdown-menu-position {
        left: -65px;
    }
</style>