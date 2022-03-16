<?php

Route::group(
[
	'prefix' => LaravelLocalization::setLocale(),'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
], function(){


   Route::get('/master', function () {
    return view('layouts/master');

//user routes
Route::resource('users', 'UserController')->except(['show']);
});
});
