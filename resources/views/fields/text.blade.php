<div class="field">
    <label for="{{ $name }}" class="label">{{ __('validation.attributes.' . $name) }}</label>
    <div class="control">
        <input
            id="{{ $name }}" type="{{ $type ?? 'text' }}"
            class="input @error($name) is-danger @enderror"
            name="{{ $name }}" value="{{ old($name, ($default ?? '')) }}"
            autocomplete="{{ $name }}" {!! flatten_attributes($attributes ?? []) !!}>
    </div>
    @error($name)
        <p class="help is-danger">{{ $message }}</p>
    @enderror
</div>
