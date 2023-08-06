<div class="{{ $attributes->get('div-class') }}">

    <label class="form-label {{ $attributes->get('label-class') }}">
        {{ $attributes->get('label') }}
    </label>

    <input type="{{ $attributes->get('type') }}" {{ $attributes->whereStartsWith('wire') }}
        placeholder="{{ $attributes->get('placeholder') }}"
        class="
            form-control 
            {{ $attributes->get('class') }}
            @error($attributes->get('name') ?? $attributes->whereStartsWith('wire:model')->first()) is-invalid @enderror
        "
        {{ $attributes }} />

    @error($attributes->get('name') ?? $attributes->whereStartsWith('wire:model')->first())
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
