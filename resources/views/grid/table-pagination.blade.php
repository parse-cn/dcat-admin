@if ($grid->allowPagination())
    <div class="box-footer d-block clearfix ">
        {!! $grid->paginator()->render() !!}
    </div>
@endif

<style nonce="{{csp_nonce()}}">
    .paginator-font{
        line-height:33px;
        color: "{{Admin::color()->dark80()}}"
    }
</style>
