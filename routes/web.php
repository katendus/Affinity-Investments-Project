<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GridController;
use App\Http\Controllers\Backend\AdminProfileController;


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
    return view('welcome');
});


Route::group(['prefix'=> 'admin', 'middleware'=>['admin:admin']], function(){
    Route::get('/login', [AdminController::class, 'loginForm']);
    Route::post('/login',[AdminController::class, 'store'])->name('admin.login');
});


Route::middleware(['auth:sanctum,admin', 'verified'])->get('/admin/dashboard', function () {
    // return view('data.grid_view');
    return view('data.add_record');
})->name('dashboard');


Route::middleware(['auth:sanctum,web', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });




// Admin All Routes 

Route::get('/admin/logout', [AdminController::class, 'destroy'])->name('admin.logout');

Route::get('/admin/profile', [AdminProfileController::class, 'AdminProfile'])->name('admin.profile');

Route::get('/admin/profile/edit', [AdminProfileController::class, 'AdminProfileEdit'])->name('admin.profile.edit');

Route::post('/admin/profile/store', [AdminProfileController::class, 'AdminProfileStore'])->name('admin.profile.store');

Route::get('/admin/change/password', [AdminProfileController::class, 'AdminChangePassword'])->name('admin.change.password');

Route::post('/update/change/password', [AdminProfileController::class, 'AdminUpdateChangePassword'])->name('update.change.password');


// Admin Brand All Routes 

Route::prefix('brand')->group(function(){

Route::get('/view', [BrandController::class, 'BrandView'])->name('all.brand');

Route::post('/store', [BrandController::class, 'BrandStore'])->name('brand.store');

Route::get('/edit/{id}', [BrandController::class, 'BrandEdit'])->name('brand.edit');

Route::post('/update', [BrandController::class, 'BrandUpdate'])->name('brand.update');

Route::get('/delete/{id}', [BrandController::class, 'BrandDelete'])->name('brand.delete');

});




// ------------------ GRID All Routes - ADDED BY KATO------------------------------------------------------- 

Route::prefix('grid')->group(function(){

Route::get('/view', [GridController::class, 'GridView'])->name('ppg.grid');

Route::get('/add', [GridController::class, 'AddGrid'])->name('add.grid');

Route::post('/gridstore', [GridController::class, 'GridStore'])->name('store.grid');

Route::get('/edit/{id}', [GridController::class, 'GridEdit'])->name('grid.edit');

Route::post('/update', [GridController::class, 'GridUpdate'])->name('grid.update');

Route::get('/delete/{id}', [GridController::class, 'GridDelete'])->name('grid.delete');

});

// ------------------ END ADDED BY KATO --------------------------------------------------------------------





// ------------------ INVEST All Routes - ADDED BY KATO---------------------------------------------------

Route::prefix('invest')->group(function(){

Route::get('/dashboard', [InvestController::class, 'home'])->name('invest.dashboard');

// Route::get('/add', [GridController::class, 'AddGrid'])->name('add.grid');

// Route::post('/gridstore', [GridController::class, 'GridStore'])->name('store.grid');

// Route::get('/edit/{id}', [GridController::class, 'GridEdit'])->name('grid.edit');

// Route::post('/update', [GridController::class, 'GridUpdate'])->name('grid.update');

// Route::get('/delete/{id}', [GridController::class, 'GridDelete'])->name('grid.delete');

});

// ------------------ END ADDED BY KATO --------------------------------------------------------------------