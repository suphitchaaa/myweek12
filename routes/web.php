<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view ("index");
});

Route::get('/about', function () {
    return view ("about");
});

Route::get('/blog', function () {
    return view ("blog");
});

Route::get('/abouts', [AdminController::class, 'abouts'])->name("abouts");
Route::get('/blogs', [AdminController::class, 'blogs'])->name("blogs");
Route::get('/create', [AdminController::class, 'create'])->name("create");
Route::post('/insert', [AdminController::class, 'insert'])->name("insert");


Route::get('/test-db', function () {
    try {
        DB::connection()->getPdo();
        return "เชื่อมต่อฐานข้อมูลสำเร็จ! Database name: " . DB::connection()->getDatabaseName();
    } catch (\Exception $e) {
        return "ไม่สามารถเชื่อมต่อฐานข้อมูลได้: " . $e->getMessage();
    }
});

Route::get('/delete/{id}', [AdminController::class, 'delete'])->name("delete");
Route::get('/change/{id}', [AdminController::class, 'change'])->name("change");
Route::get('/edit/{id}', [AdminController::class, 'edit'])->name("edit");
Route::post('/update/{id}', [AdminController::class, 'update'])->name("update");

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
