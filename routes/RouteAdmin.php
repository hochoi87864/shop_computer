<?php
Route::group(['namespace'=>'Admin','prefix'=>'/admin'],function(){
    Route::get('/','AdminController@index');
});