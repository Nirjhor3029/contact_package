<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 5/2/2019
 * Time: 2:07 PM
 */

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['namespace'=>'Nirjhor\Contact\Http\Controllers'],function(){

    Route::get('contact','ContactController@index')->name('contact');
    Route::post('contact','ContactController@send')->name('contact_submit');
});



?>