<?php

// test button component

use Illuminate\Support\Facades\View;

it('can render button component', function () {
    $this->assertTrue(View::exists('template-components::button'));
});
