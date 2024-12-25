<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth']], function () {
  Route::get('/', function () {
    return redirect()->route('admin.dashboard');
  });
  Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');
  Route::get('permissions/changeStatus', [App\Http\Controllers\Admin\PermissionController::class, 'changeStatus'])->name('permissions.changeStatus');
  Route::resource('permissions', App\Http\Controllers\Admin\PermissionController::class)->except('create', 'update');
  Route::get('roles/changeStatus', [App\Http\Controllers\Admin\RoleController::class, 'changeStatus'])->name('roles.changeStatus');
  Route::resource('roles', App\Http\Controllers\Admin\RoleController::class)->except('create', 'update');
  Route::get('users/changeStatus', [App\Http\Controllers\Admin\UserController::class, 'changeStatus'])->name('users.changeStatus');
  Route::resource('users', App\Http\Controllers\Admin\UserController::class)->except('create', 'update');

  Route::get('generations/changeStatus', [App\Http\Controllers\Admin\UserController::class, 'changeStatus'])->name('generations.changeStatus');
  Route::resource('generations', App\Http\Controllers\Admin\UserController::class)->except('create', 'update');

    // Route for Category Blog
  Route::get('category-blogs/update/status', [App\Http\Controllers\Admin\CategoryBlogController::class, 'changeStatus'])->name('category_blogs.changeStatus');
  Route::resource('category-blogs', App\Http\Controllers\Admin\CategoryBlogController::class)->except('create', 'update');


  Route::get('books/changeStatus', [App\Http\Controllers\Admin\BookController::class, 'changeStatus'])->name('books.changeStatus');
  Route::resource('books', App\Http\Controllers\Admin\BookController::class)->except('create', 'update');
});