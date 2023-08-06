<div class="{{ config('template-components.defult_classes.input.div') }} {{ $attributes->get('div-class') }}">

    <label class="{{ config('template-components.defult_classes.input.label') }} {{ $attributes->get('label-class') }}">
        {{ $attributes->get('label') }}
    </label>

    <textarea class="{{ config('template-components.defult_classes.input.input') }} {{ $attributes->get('class') }}
            @error($attributes->get('name') ?? $attributes->whereStartsWith('wire:model')->first()) 
                {{ config('template-components.defult_classes.input.input-error') }} 
            @enderror"
        {{ $attributes }}>
        {{ $slot }}
    </textarea>

    @error($attributes->get('name') ?? $attributes->whereStartsWith('wire:model')->first())
        <div class="{{ config('template-components.defult_classes.input.error-div') }}">
            {{ $message }}
        </div>
    @enderror
</div>
