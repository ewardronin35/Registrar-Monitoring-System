<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\admincontrol;

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
Route::get('student-list',[StudentController::class,'index']);
Route::get('add-student',[StudentController::class,'addStudent']);
Route::post('save-student',[StudentController::class,'saveStudent']);
Route::get('edit-student/{id}',[StudentController::class,'editStudent']);
Route::post('update-student',[StudentController::class,'updateStudent']);
Route::get('delete-student/{id}',[StudentController::class,'deleteStudent']);
Route::post('log-registrars',[Admincontrol::class,'logregistrars']);
Route::get('login-registrar',[Admincontrol::class,'loginregistrar']);
Route::get('register-registrar',[Admincontrol::class,'regregister']);
Route::post('save-registrar',[Admincontrol::class,'saveregistrar']);
Route::get('admins-login',[Admincontrol::class,'loginadmin']);
Route::post('admin-log',[Admincontrol::class,'logadmin']);
Route::get('admin-list',[Admincontrol::class,'index2']);
Route::get('edit-registrar/{id}',[Admincontrol::class,'editregistrar']);
Route::post('update-registrar',[Admincontrol::class,'updateregistrar']);
Route::get('delete-registrar/{id}',[Admincontrol::class,'deleteregistrar']);