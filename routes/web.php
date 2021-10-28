<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleInsertController;
use App\Http\Controllers\ExampleViewController;
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



/*Route::get('/example.php', function () {
    return view('example');
});*/
Route::view('add', 'Example');
Route::view('view', 'ExampleView');
Route::post('add',[ExampleInsertController::class,'addData']);
Route::get('view',[ExampleViewController::class,'index']);


//insert data
//Route::post('example','ExampleInsertController@insert');
//Route::get('example','ExampleInsertController@insertform');

?>
