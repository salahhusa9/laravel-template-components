<div class="{{ config('template-components.defult_classes.textarea.div') }} {{ $attributes->get('div-class') }}">

    <label class="{{ config('template-components.defult_classes.textarea.label') }} {{ $attributes->get('label-class') }}">
        {{ $attributes->get('label') }}
    </label>

    <textarea class="{{ config('template-components.defult_classes.textarea.textarea') }} {{ $attributes->get('class') }}
            @error($attributes->get('name') ?? $attributes->whereStartsWith('wire:model')->first())
                {{ config('template-components.defult_classes.textarea.textarea-error') }}
            @enderror"
        {{ $attributes }}>
        {{ $slot }}
    </textarea>

    @error($attributes->get('name') ?? $attributes->whereStartsWith('wire:model')->first())
        <div class="{{ config('template-components.defult_classes.textarea.error-div') }}">
            {{ $message }}
        </div>
    @enderror
</div>
