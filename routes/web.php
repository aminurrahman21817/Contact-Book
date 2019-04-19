<?php


Route::get('/', function () {
    return view('welcome');
});





Route::get('all-contacts', 'AboutController@AllContact')->name('all.Contacts');
Route::get('/insert-data', 'AboutController@InsertData');
Route::get('/delete-data/{id}', 'AboutController@DeleteData');
Route::get('/edit-data/{id}', 'AboutController@EditData');
Route::post('/data-added', 'AboutController@dataAdded');
Route::post('/update-contact/{id}', 'AboutController@UpdateContact');