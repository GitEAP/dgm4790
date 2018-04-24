<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/generic', function () {
    return view('generic');
});

Route::get('/elements', function () {
    return view('elements');
});


Route::get('/emails', 'mass_contact_controller@index');

Route::get('/emails/create', 'mass_contact_controller@create');

Route::post('/thanks', 'mass_contact_controller@store');

Route::get('/emails/{email}', 'mass_contact_controller@show');

// Route::get('/emails/{email}/edit', 'mass_contact_controller@edit');

// Route::patch('/emails/{email}', 'mass_contact_controller@update');

// Route::delete('/emails/{email}', 'mass_contact_controller@destroy');







