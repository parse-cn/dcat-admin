@if($showHeader)
    <div class="box-header with-border mb-1 p-1">
        <h3 class="box-title line-height-30">{!! $form->title() !!}</h3>
        <div class="pull-right">{!! $form->renderTools() !!}</div>
    </div>
@endif
<div class="box-body {!! $tabObj->isEmpty() && !$form->hasRows() ? 'mt-1' : '' !!}" >
    @if(!$tabObj->isEmpty())
        @include('admin::form.tab', compact('tabObj', 'form'))
    @else
        <div class="fields-group">
            @include('admin::form.fields', ['rows' => $form->rows(), 'fields' => $form->fields(), 'layout' => $form->layout()])
        </div>
    @endif
</div>
{!! $form->renderFooter() !!}

{!! $form->renderHiddenFields() !!}
