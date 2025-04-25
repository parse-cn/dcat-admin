<table {!! $attributes !!}>
    <thead>
    <tr>
        @foreach($headers as $header)
            <th>{{ $header }}</th>
        @endforeach
    </tr>
    </thead>
    <tbody>
    @foreach($rows as $row)
    <tr>
        @foreach($row as $item)
        <td>{!! $item !!}</td>
        @endforeach
    </tr>
    @endforeach
    @if (empty($rows))
        <tr>
            <td colspan="{!! count($headers) !!}">
                <div class="my-1"><span class="help-block"><i class="feather icon-alert-circle"></i>&nbsp;{{ trans('admin.no_data') }}</span></div>
            </td>
        </tr>
    @endif
    </tbody>
</table>
