# test
Package name: devepit/form

Add in /app/config.php in section 'providers' => [
 [...]
 DevePit\Form\FormServiceProvider::class,
]

and in section  'aliases' => [
    'Form' => DevePit\Form\Facade\Form::class
]

# example

Route::group(['namespace' => 'DevePit\Form\Controllers', 'prefix'=>'devepit'], function(){
      Route::get('/','DevePit\Form\Controllers\FormController@index');
});

