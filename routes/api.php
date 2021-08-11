<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\StudentController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "Api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:Api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::namespace('Api')->group(function (){
    Route::resource('students','StudentController');
//    Route::get('students', 'StudentController@index')->name('student.index');
});

