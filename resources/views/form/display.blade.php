<div class="{{$viewClass['form-group']}} mt-5p">
    <label class="{{$viewClass['label']}} control-label">{!! $label !!}</label>
    <div class="{{$viewClass['field']}}">
        <div class="box box-solid box-default no-margin">
            <div class="box-body">
                <div class="{{$class}}">{!! $value !!}&nbsp;</div>
            </div>
        </div>

        @include('admin::form.help-block')

    </div>
</div>
