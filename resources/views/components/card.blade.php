@props(['heading', 'footer'])

<div {{ $heading->attributes->class(['card', 'mb-4']) }}>
    <h5 {{ $heading->attributes->class(['card-header']) }}>
        {{ $heading }}
    </h5>
    <div {{ $attributes->class(['card-body']) }}>
        {{ $slot }}
    </div>
    <div {{ $footer->attributes->class(['card-footer']) }}>
        {{ $footer }}
    </div>
</div>
