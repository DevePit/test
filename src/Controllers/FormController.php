<?php

namespace DevePit\Form\Controllers;

use App\Http\Controllers\Controller;

class FormController extends Controller {

    public function index() {
        return View('Form::welcome');
    }
}