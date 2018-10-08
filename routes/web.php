<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

// Route::match　を使う方がよい
// Route::redirect('/', 'index');

Route::get('emp_list','EmployeeController@select');
Route::post('emp_list','EmployeeController@postCtl');

Route::get('emp_add','EmpDetailAddController@index');
Route::post('emp_add','EmpDetailAddController@uplode');

Route::get('emp_detail/{id}','EmpDetailController@selectFromId');
Route::post('emp_detail','EmpDetailController@uplode');
// Route::get('emp_detail','EmpDetailController@index');

Route::get('delete/{id}','EmpDeleteController@deleteFromId');

// Route::post('emp_detail_add','EmpDetailAddController@insert');

Route::get('csv_upload','CsvUploadController@index');
Route::post('csv_upload','CsvUploadController@import');
