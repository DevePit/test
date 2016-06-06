<?php

namespace DevePit\Form\Facade;

use Illuminate\Support\Facades\Facade;

class Form extends Facade {

    protected static function getFacadeAccessor() {
        return 'Form';
    }

}