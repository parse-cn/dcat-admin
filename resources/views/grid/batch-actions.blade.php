@if(! $isHoldSelectAllCheckbox)
    <style nonce="{{Admin::asset()->csp_nonce}}">
        .btn-dropdown-hold {
            margin-right: 3px;
            z-index: 100;
        }
    </style>
    <div class="btn-group dropdown  {{$selectAllName}}-btn btn-dropdown-hold d-none">
        <button type="button" class="btn btn-white dropdown-toggle btn-mini" data-toggle="dropdown">
            <span class="d-none d-sm-inline selected"></span>
            <span class="caret"></span>
            <span class="sr-only"></span>
        </button>
        <ul class="dropdown-menu" role="menu">
            @foreach($actions as $action)
                @if ($action instanceof Dcat\Admin\Grid\Tools\ActionDivider)
                    <li class="dropdown-divider"></li>
                @else
                    <li class="dropdown-item">
                        {!! $action->render() !!}
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
@endif

<script>
    Dcat.init('.{{ $parent->getRowName() }}-checkbox', function ($this) {
        var btn = $('.{{ $selectAllName }}-btn');
        $this.on('change', function () {
            var btn = $('.{{ $selectAllName }}-btn'),
                selected = Dcat.grid.selectedRows('{{ $parent->getName() }}').length;
            if (selected) {
                btn.removeClass("d-none");
                btn.addClass("d-inline-block");
            } else {
                btn.addClass("d-none");
                btn.removeClass("d-inline-block");
            }
            setTimeout(function () {
                btn.find('.selected').html("{!! trans('admin.grid_items_selected') !!}".replace('{n}', selected));
            }, 50)
        })
    })
</script>
