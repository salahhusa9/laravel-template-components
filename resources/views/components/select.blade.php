<div class="{{ config('template-components.defult_classes.select.div') }} {{ $attributes->get('div-class') }}">

    <label class="{{ config('template-components.defult_classes.select.label') }} {{ $attributes->get('label-class') }}">
        {{ $attributes->get('label') }}
    </label>

    <select class="{{ config('template-components.defult_classes.select.select') }} {{ $attributes->get('class') }}
            @error($attributes->get('name') ?? $attributes->whereStartsWith('wire:model')->first()) 
                {{ config('template-components.defult_classes.select.select-error') }} 
            @enderror"
        {{ $attributes }} >
        {{ $slot }}
    </select>

    @error($attributes->get('name') ?? $attributes->whereStartsWith('wire:model')->first())
        <div class="{{ config('template-components.defult_classes.select.error-div') }}">
            {{ $message }}
        </div>
    @enderror
</div>
