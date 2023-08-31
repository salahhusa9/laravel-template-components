<?php

// test select component

use Illuminate\Support\Facades\View;

it('can render select component', function () {
    $this->assertTrue(View::exists('template-components::components.select'));
});
