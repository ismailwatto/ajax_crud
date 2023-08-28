<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

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
Route::get('/student',[StudentController::class,'index']);

Route::get('/student/create',[StudentController::class,'create']);
Route::post('/student/store',[StudentController::class,'store'])->name('store');

Route::get('/student/data', function () {
    return view('student.show');
});
Route::get('/student', [StudentController::class, 'show'])->name('show');

Route::get('/student/edituser/{id}', [StudentController::class, 'edit']);
Route::post('/student/update', [StudentController::class, 'update'])->name('update');
Route::get('/student/deleteuser/{id}', [StudentController::class, 'delete']);