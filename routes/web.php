<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\DomainController;
use App\Http\Controllers\Admin\ReportController;
use Illuminate\Support\Facades\Route;

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
Route::group(['middleware' => ['auth']], function() {

});
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

Route::controller(AdminController::class)->group(function()
    {
        Route::get('/', 'index')->name('index');
        Route::get('admin/logout', 'Logout')->name('admin.logout');
        // Route::get('admin/all-customer', 'AllCustomer')->name('admin.all-customer');
        // Route::get('admin/add-customer', 'Add_customer')->name('admin.add-customer');
        // Route::post('admin/store/add-customer', 'Store')->name('admin.store.add-customer');
        // Route::get('admin/edit-customer/{id}', 'Edit')->name('admin.edit-customer');
        // Route::post('admin/update-customer/{id}', 'Update')->name('admin.update-customer');
        Route::get('admin/status-customer/{id}', 'Status')->name('admin.status-customer');
        // Route::get('admin/delete-customer/{id}', 'Delete')->name('admin.delete-customer');
        // Route::get('admin/view-customer/{id}', 'View_Customer')->name('admin.view-customer');
        Route::get('admin/view-customer/pdf-generate/{id}', 'Generate')->name('generate-pdf.generate');

        // Add Domain & Hosting
        Route::get('admin/all-domain/', 'All_domain')->name('admin.all-domain');
        Route::get('admin/add-domain', 'Add_domain')->name('admin.add-domain');
        Route::post('admin/add-domain', 'StoreAdmin')->name('admin.store.add-domain');
        Route::get('admin/edit-domain/{id}', 'Edit_Domain')->name('admin.edit-domain');
        Route::post('admin/update-domain/{id}', 'Update_Domain')->name('admin.update-domain');
        Route::get('admin/delete-domain/{id}', 'Delete_Domain')->name('admin.delete-domain');
        Route::get('admin/view-domain/{id}', 'View_Domain')->name('admin.view-domain');
        Route::get('admin/view-domain/pdf/{id}', 'DomainPdf')->name('domain.pdf');

        // Expire Domain & Hosting
         Route::get('admin/all-expire', 'Expire')->name('admin.all-expire');
         Route::post('admin/all-expire/search', 'ExpireSearch')->name('admin.all-expire.search');
    }
);
Route::get('tables', function(){
    return view('admin.data-table');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
