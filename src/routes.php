<?php

Route::group(['namespace' => 'DevePit\Form\Controllers', 'prefix'=>'devepit'], function(){
    Route::get('/','FormController@index');
});