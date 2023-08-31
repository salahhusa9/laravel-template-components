@props(['header', 'footer'])

<div class="{{ $attributes->get('div-class') }} {{ config('template-components.defult_classes.card.div') }}">
    @isset($header)
    <h5 {{ $header->attributes->class([config('template-components.defult_classes.card.header')]) }}>
        {{ $header }}
    </h5>
    @endisset
    <div {{ $attributes->class([config('template-components.defult_classes.card.body')]) }}>
        {{ $slot }}
    </div>
    @isset($footer)
        <div {{ $footer->attributes->class([config('template-components.defult_classes.card.footer')]) }}>
            {{ $footer }}
        </div>
    @endisset
</div>
