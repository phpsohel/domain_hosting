<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DomainController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Admin\CustomerController;

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
Route::get('/', function () {
    return redirect('/login');
});
Route::middleware(['auth'])->group(function () {
    Route::resource('customers', CustomerController::class);
    Route::get('admin/status-customer/{id}', [CustomerController::class,'status'])->name('admin.status-customer');
    Route::get('customers/details/{id}', [CustomerController::class, 'show'])->name('customers.details');
    Route::get('customers/delete/{id}', [CustomerController::class, 'destroy'])->name('customers.delete');

    //Domain Route
    Route::resource('domains', DomainController::class);
    Route::get('domains/details/{id}', [DomainController::class, 'show'])->name('domains.details');
    Route::get('domains/delete/{id}', [DomainController::class, 'destroy'])->name('domains.delete');
    //Report
    Route::controller(ReportController::class)->group(function(){
        Route::get('report/domain_expire', 'domain_expire')->name('report.domain_expire');
        Route::post('report/domain_expire/search', 'domain_expire_search')->name('report.domain_expire.search');
    });

    //User Route
    Route::controller(UserController::class)->group(function()
        {
            Route::get('user', 'index')->name('user');
            Route::post('user/store', 'store')->name('user.store');
            Route::post('user/update/{id}', 'update')->name('user.update');
            Route::get('user/delete/{id}', 'destroy')->name('user.destroy');
            Route::get('user/user_profile', 'user_profile')->name('user.profile');
            Route::post('user/update_profile/{id}', 'update_profile')->name('user.update_profile');
        }
    );
    Route::controller(AdminController::class)->group(function()
        {
            Route::get('/', 'index')->name('index');
            Route::get('admin/logout', 'Logout')->name('admin.logout');
            Route::get('admin/view-customer/pdf-generate/{id}', 'Generate')->name('generate-pdf.generate');
            Route::get('admin/view-domain/pdf/{id}', 'DomainPdf')->name('domain.pdf');
        }
    );
});

require __DIR__.'/auth.php';
