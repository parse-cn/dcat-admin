<div class="filter-input col-sm-{{ $width }} ">
    <div class="form-group" >
        <div class="input-group input-group-sm">
            <div class="input-group-prepend">
                <span class="input-group-text text-capitalize bg-white"><b>{!! $label !!}</b></span>
            </div>

            <input type="text" class="form-control" placeholder="{{$label}}" name="{{$name['start']}}" value="{{ request($name['start'], \Illuminate\Support\Arr::get($value, 'start')) }}">
            <span class="input-group-addon bx-0">To</span>
            <input type="text" class="form-control" placeholder="{{$label}}" name="{{$name['end']}}" value="{{ request($name['end'], \Illuminate\Support\Arr::get($value, 'end')) }}">
        </div>
    </div>
</div>
<style nonce="{{csp_nonce()}}">
    .bx-0 {
        border-left: 0;
        border-right: 0;
    }
</style>