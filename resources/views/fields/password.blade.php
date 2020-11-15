@php $meter = ($meter ?? false) @endphp
<div class="field">
    <label for="{{ $name }}" class="label">{{ __('validation.attributes.' . $name) }}</label>
    <div class="field has-addons">
        <div class="control is-expanded">
            <input
                id="{{ $name }}" type="password"
                class="input @error($name) is-danger @enderror {{ $meter ? 'password-with-meter' : '' }}"
                name="{{ $name }}" value="{{ old($name, ($default ?? '')) }}"
                autocomplete="{{ $name }}" {!! flatten_attributes($attributes ?? []) !!}
                autocomplete="{{ $meter ? 'new-password' : 'current-password' }}">
        </div>
        <div class="control">
            <button class="button is-compact is-grey-lightest password-toggle" type="button">
                <i class="icon fas fa-eye"></i>
            </button>
        </div>
    </div>
    @if($meter)<div class="password-meter"></div>@endif
    @error($name)
        <p class="help is-danger">{{ $message }}</p>
    @enderror
</div>
