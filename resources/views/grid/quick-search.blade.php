<style nonce="{{ csp_nonce() }}">
    ::-ms-clear, ::-ms-reveal {
        display: none;
    }

    .quick-search-form .table-filter label {
        width: {{ $width }}rem;
    }
</style>

<form pjax-container action="{!! $action !!}" class="input-no-border quick-search-form d-md-inline-block d-none">
    <div class="table-filter">
        <label>
            <input
                type="search"
                class="form-control form-control-sm quick-search-input"
                placeholder="{{ $placeholder }}"
                name="{{ $key }}"
                value="{{ $value }}"
                auto="{{ $auto ? '1' : '0' }}"
            >
        </label>
    </div>
</form>
