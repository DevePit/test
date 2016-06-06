<?php

namespace DevePit\Form;

class Form{

    public function input(){
        return '<input type="text" name="">';
    }
    public function checkbox(){
        return '<input type="checkbox" name="">';
    }
    public function textarea(){
        return '<textarea></textarea>';
    }
}