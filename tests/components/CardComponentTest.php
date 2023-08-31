<?php

// test card component

use Illuminate\Support\Facades\View;

it('can render card component', function () {
    $this->assertTrue(View::exists('template-components::components.card'));
});
