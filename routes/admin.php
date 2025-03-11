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
  Route::get('category_blogs/update/status', [App\Http\Controllers\Admin\CategoryBlogController::class, 'changeStatus'])->name('category_blogs.changeStatus');
  Route::resource('category-blogs', App\Http\Controllers\Admin\CategoryBlogController::class)->except('create', 'update');


  Route::get('issuebooks/changeStatus', [App\Http\Controllers\Admin\IssueBookController::class, 'changeStatus'])->name('issuebooks.changeStatus');
  Route::resource('issuebooks', App\Http\Controllers\Admin\IssueBookController::class)->except('create', 'update');

  Route::get('clubmembers/changeStatus', [App\Http\Controllers\Admin\ClubMemberController::class, 'changeStatus'])->name('clubmembers.changeStatus');
  Route::resource('clubmembers', App\Http\Controllers\Admin\ClubMemberController::class)->except('create', 'update');

  Route::get('returnbooks/changeStatus', [App\Http\Controllers\Admin\ReturnBookController::class, 'changeStatus'])->name('returnbooks.changeStatus');
  Route::resource('returnbooks', App\Http\Controllers\Admin\ReturnBookController::class)->except('create', 'update');

  Route::get('payments/changeStatus', [App\Http\Controllers\Admin\PaymentController::class, 'changeStatus'])->name('payments.changeStatus');
  Route::resource('payments', App\Http\Controllers\Admin\PaymentController::class)->except('create', 'update');

  Route::get('students/changeStatus', [App\Http\Controllers\Admin\StudentController::class, 'changeStatus'])->name('students.changeStatus');
  Route::resource('students', App\Http\Controllers\Admin\StudentController::class)->except('create', 'update');

  Route::get('addbooks/changeStatus', [App\Http\Controllers\Admin\BookController::class, 'changeStatus'])->name('addbooks.changeStatus');
  Route::resource('addbooks', App\Http\Controllers\Admin\BookController::class)->except('create', 'update');

  Route::get('borrowbooks/changeStatus', [App\Http\Controllers\Admin\BorrowBookController::class, 'changeStatus'])->name('borrowbooks.changeStatus');
  Route::resource('borrowbooks', App\Http\Controllers\Admin\BorrowBookController::class)->except('create', 'update');

  Route::get('managebooks/changeStatus', [App\Http\Controllers\Admin\ManageBookController::class, 'changeStatus'])->name('managebooks.changeStatus');
  Route::resource('managebooks', App\Http\Controllers\Admin\ManageBookController::class)->except('create', 'update');

  Route::get('reports/changeStatus', [App\Http\Controllers\Admin\ReportController::class, 'changeStatus'])->name('reports.changeStatus');
  Route::resource('reports', App\Http\Controllers\Admin\ReportController::class)->except('create', 'update');

  Route::get('profiles/changeStatus', [App\Http\Controllers\Admin\ProfileController::class, 'changeStatus'])->name('profiles.changeStatus');
  Route::resource('profiles', App\Http\Controllers\Admin\ProfileController::class)->except('create', 'update');

  Route::get('notifications/changeStatus', [App\Http\Controllers\Admin\NotificationController::class, 'changeStatus'])->name('notifications.changeStatus');
  Route::resource('notifications', App\Http\Controllers\Admin\NotificationController::class)->except('create', 'update');

  Route::get('abouts/changeStatus', [App\Http\Controllers\Admin\AboutController::class, 'changeStatus'])->name('abouts.changeStatus');
  Route::resource('abouts', App\Http\Controllers\Admin\AboutController::class)->except('create', 'update');

  Route::get('settings/changeStatus', [App\Http\Controllers\Admin\SettingController::class, 'changeStatus'])->name('settings.changeStatus');
  Route::resource('settings', App\Http\Controllers\Admin\SettingController::class)->except('create', 'update');

  Route::get('contects/changeStatus', [App\Http\Controllers\Admin\ContectController::class, 'changeStatus'])->name('contects.changeStatus');
  Route::resource('contects', App\Http\Controllers\Admin\ContectController::class)->except('create', 'update');
});
