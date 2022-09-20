<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/test', function(){
    return view('test');
});

Route::get('/', function(){
    return view('home');
});

Route::get('/', [StudentController::class, 'index'])->name('index');
Route::post('/', [StudentController::class, 'create'])->name('create');
Route::get('edit/{id}', [StudentController::class, 'edit'])->name('edit');
Route::put('edit/{id}', [StudentController::class, 'update'])->name('update');
Route::get('delete/{id}', [StudentController::class, 'destroy'])->name('destroy');

Route::get('/students/dashboard', [StudentController::class,'student_dashboard'])->name('stu_dashboard');

