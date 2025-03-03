<div class="input-group input-group-sm">
    @php
        $checkbox = new \Dcat\Admin\Widgets\Checkbox($name.'[]', $options);
        if ($inline) $checkbox->inline();

        $checkbox->check(request($name, is_null($value) ? [] : $value))->circle(false);

    @endphp
    <style nonce="{{ csp_nonce() }}">
        .checkbox-label {
            margin-right: 15px;
        }
    </style>
    @if($showLabel)
        <div class="pull-left text-capitalize checkbox-label">
            <b>{{ $label }}</b>
        </div>
        <div class="pull-left">
            {!! $checkbox !!}
        </div>
    @else
        {!! $checkbox !!}
    @endif
</div>
