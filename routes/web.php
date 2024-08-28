<?php

use App\Http\Controllers\Model_has_PermissionsController;
use App\Http\Controllers\Model_has_RolesController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use League\CommonMark\Extension\HeadingPermalink\HeadingPermalinkProcessor;

Route::get('/', function () {
    return view('welcome');
});

// Permissions Routes

Route::get('/permission/index',[PermissionController::class,'index'])->name('permissions.index');

Route::get('/permission/create',[PermissionController::class,'create'])->name('permissions.create');

Route::post('/permission/store',[PermissionController::class,'store'])->name('permissions.store');

Route::get('/permission/show/{id}',[PermissionController::class,'show'])->name('permissions.show');

Route::get('/permission/edit/{id}',[PermissionController::class,'edit'])->name('permissions.edit');

Route::put('/permission/update/{permission}',[PermissionController::class,'update'])->name('permissions.update');

Route::delete('/permission/destroy/{id}',[PermissionController::class,'destroy'])->name('permissions.destroy');

//Roles Route

Route::get('/role/index',[RoleController::class,'index'])->name('roles.index');

Route::get('/role/create',[RoleController::class,'create'])->name('roles.create');

Route::post('/role/store',[RoleController::class,'store'])->name('roles.store');

Route::get('/role/show/{id}',[RoleController::class,'show'])->name('roles.show');

Route::get('/role/edit/{id}',[RoleController::class,'edit'])->name('roles.edit');

Route::put('/role/update/{role}',[RoleController::class,'update'])->name('roles.update');

Route::delete('/role/destroy/{id}',[RoleController::class,'destroy'])->name('roles.destroy');

//User Route

Route::get('/user/index',[UserController::class,'index'])->name('users.index');

Route::get('/user/create',[UserController::class,'create'])->name('users.create');

Route::post('/user/store',[UserController::class,'store'])->name('users.store');

Route::get('/user/show/{id}',[UserController::class,'show'])->name('users.show');

Route::get('/user/edit/{id}',[UserController::class,'edit'])->name('users.edit');

Route::put('/user/update/{user}',[UserController::class,'update'])->name('users.update');

Route::delete('/user/destroy/{id}',[UserController::class,'destroy'])->name('users.destroy');

// Model_has_Roles Route

Route::get('/model_has_role/index',[Model_has_RolesController::class,'index'])->name('model_has_roles.index');

Route::get('/model_has_role/create',[Model_has_RolesController::class,'create'])->name('model_has_roles.create');

Route::post('/model_has_role/store',[Model_has_RolesController::class,'store'])->name('model_has_roles.store');

// Model_has_Permissions

Route::get('/model_has_permissions/index',[Model_has_PermissionsController::class,'index'])->name('model_has_permissions.index');

Route::get('/model_has_permissions/create',[Model_has_PermissionsController::class,'create'])->name('model_has_permissions.create');

Route::post('/model_has_permissions/store',[Model_has_PermissionsController::class,'store'])->name('model_has_permissions.store');