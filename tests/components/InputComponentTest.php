<?php

// test input component

use Illuminate\Support\Facades\View;

it('can render input component', function () {
    $this->assertTrue(View::exists('template-components::components.input'));
});
