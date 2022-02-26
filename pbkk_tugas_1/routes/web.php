<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

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
    $data = App\Models\Student::all();
    return view("landing_page", ['data' => $data]);
})->name("index_page");
Route::get('/form', [FormController::class, "create"])->name("form_page.create");
Route::post('/form', [FormController::class, "store"])->name("form_page.store");
Route::post('/show-form', [FormController::class, "store"]);
