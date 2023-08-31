<form action="{{ $attributes->get('action') ?? route($attributes->get('route')) }}" {{ $attributes }}>
    @csrf
    {{ $slot }}
</form>
