<?php

// test textarea component

use Illuminate\Support\Facades\View;

it('can render textarea component', function () {
    $this->assertTrue(View::exists('template-components::components.textarea'));
});
