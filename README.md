# test
##Package name: devepit/form
Add in /app/config.php in section 
```php
'providers' => [
 [...]
 DevePit\Form\FormServiceProvider::class,
]
```

and in section  
```php
'aliases' => [
    'Form' => DevePit\Form\Facade\Form::class
]
```
## example
```php
Route::group(['namespace' => 'DevePit\Form\Controllers', 'prefix'=>'devepit'], function(){
      Route::get('/','DevePit\Form\Controllers\FormController@index');
});
```
