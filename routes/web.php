<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\StudentController;
/*use
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
    return view('welcome');
});
Route::view('zabola','welcome');
//required pararmter
Route::get("about/{id}",function ($id){
    return $id;
});
//optional pararmter
Route::get('contact/{name?}',function ($name = null){
   return "the name is  " . $name;
});

Route::get('home/{id}',[HomeController::class ,'index']);
Route::get('zzz',[HomeController::class,'about']);
Route::view('about','about');


Route::get('students',[StudentController::class,'index'])->name('student.index');
Route::get('students/create',[StudentController::class,'create'])->name('student.create');

Route::post('students/store',[StudentController::class,'store'])->name('student.store');
Route::get('students/edit/{id}',[StudentController::class,'edit'])->name('student.edit');
Route::get('students/show/{id}',[StudentController::class,'show'])->name('student.show');
Route::post('students/update/{id}',[StudentController::class,'update'])->name('student.update');
Route::get('students/delete/{id}',[StudentController::class,'destory'])->name('student.delete');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
