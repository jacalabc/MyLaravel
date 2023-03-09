<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentController;

use App\Http\Controllers\IkeaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/new', function () {
    dd('hello new project');
});


// 自訂放上面
// resource放下面
// StudentController
Route::get('/student_excel', [StudentController::class, 'excel'])->name('excel');
Route::get('/student_child', [StudentController::class, 'child'])->name('child');

Route::resource('/students',StudentController::class);

// IkeaController
Route::get('f1', [IkeaController::class, 'f1'])->name('ikea.1');
Route::get('f2', [IkeaController::class, 'f2'])->name('ikea.2');
Route::get('f3', [IkeaController::class, 'f3'])->name('ikea.3');

Route::resource('/ikeas',IkeaController::class);