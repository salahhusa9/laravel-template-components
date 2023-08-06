<div class="{{ config('template-components.defult_classes.input.div') }} {{ $attributes->get('div-class') }}">

    <label class="{{ config('template-components.defult_classes.input.label') }} {{ $attributes->get('label-class') }}">
        {{ $attributes->get('label') }}
    </label>

    <input type="{{ $attributes->get('type') }}" {{ $attributes->whereStartsWith('wire') }}
        placeholder="{{ $attributes->get('placeholder') }}"
        class="{{ config('template-components.defult_classes.input.input') }} {{ $attributes->get('class') }}
            @error($attributes->get('name') ?? $attributes->whereStartsWith('wire:model')->first()) 
                {{ config('template-components.defult_classes.input.input-error') }} 
            @enderror"
        {{ $attributes }} />

    @error($attributes->get('name') ?? $attributes->whereStartsWith('wire:model')->first())
        <div class="{{ config('template-components.defult_classes.input.error-div') }}">
            {{ $message }}
        </div>
    @enderror
</div>
