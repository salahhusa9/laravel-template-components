<?php

// test form component

use Illuminate\Support\Facades\View;

it('can render form component', function () {
    $this->assertTrue(View::exists('template-components::form'));
});
