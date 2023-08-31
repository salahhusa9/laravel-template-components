@props(['header', 'footer'])

<div {{ $header->attributes->class([config('template-components.defult_classes.card.div')]) }}>
    <h5 {{ $header->attributes->class([config('template-components.defult_classes.card.header')]) }}>
        {{ $header }}
    </h5>
    <div {{ $attributes->class([config('template-components.defult_classes.card.body')]) }}>
        {{ $slot }}
    </div>
    <div {{ $footer->attributes->class([config('template-components.defult_classes.card.footer')]) }}>
        {{ $footer }}
    </div>
</div>
