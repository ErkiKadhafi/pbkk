<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\FormController;

use Illuminate\Support\Facades\Route;

use App\Models\Category;

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

Route::get('/', [ArticleController::class, 'index']);

/* ======== START ::: TUGAS 1 ======== */
Route::get('/tugas_1', function () {
    $data = App\Models\Student::all();
    return view("landing_page", ['data' => $data]);
})->name("index_page");
Route::get('/tugas_1/form', [FormController::class, "create"])->name("form_page.create");
Route::post('/tugas_1/form', [FormController::class, "store"])->name("form_page.store");
Route::post('/tugas_1/show-form', [FormController::class, "store"]); 
/* ======== END ::: TUGAS 1 ======== */

/* ======== START ::: TUGAS 2 ======== */
Route::get("/article", [ArticleController::class, 'index'])->name('article.index');
Route::get('/article/{article:slug}', [ArticleController::class, 'content']);

Route::get('/categories', function(){
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all(),
    ]);
})->name('category.index');
Route::get('/categories/{category:slug}', function(Category $category){
    return view('category', [
        'title' => $category->name,
        'articles' => $category->articles,
        'category' => $category->name
    ]);
});
/* ======== END ::: TUGAS 2 ======== */
