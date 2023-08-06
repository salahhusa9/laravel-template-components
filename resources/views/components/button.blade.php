<button {{ $attributes->merge(['class' => config('template-components.defult_classes.button.button')]) }} {{ $attributes }} wire:loading.attr="disabled">
    <span wire:loading.remove wire:target="{{ $attributes->get('wire:target') }}" class="{{ $attributes->get('span-text') }}">
        {{ $slot }}
    </span>

    <div wire:loading wire:target="{{ $attributes->get('wire:target') }}">
        <span class="{{ $attributes->get('indicator-progress-class') }}">
            {{ $attributes->get('loading-text') ?? 'Please wait...' }}
            <span class="{{ $attributes->get('spinner-class') ?? 'spinner-border spinner-border-sm align-middle ms-2' }} {{ config('template-components.defult_classes.button.spinner-class') }}"></span>
        </span>
    </div>
</button>
