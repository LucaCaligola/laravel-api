<?php

use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\ProjectController as AdminProjectController;
use Illuminate\Support\Facades\Auth;
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


Auth::routes();


Route::middleware('auth')->name('admin.')->prefix('admin')->group(function () {
    Route::resource('/projects', AdminProjectController::class);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware('auth')
    ->name('admin.')
    ->prefix('admin')
    ->group(function() {
        Route::get('/admin/dashboard', [AdminDashboardController::class,'index'])->name('admin.dashboard');
        Route::resource('/projects', AdminProjectController::class);
//         // Route::get('/projects/{project}', [AdminProjectController::class, 'show'])->name('admin.projects.show');
//         // Route::post('/admin/projects', [AdminProjectController::class, 'store'])->name('admin.project.store');
//         // Route::get('/admin/projects/create', [AdminProjectController::class, 'create'])->name('admin.projects.create');
//         // Route::get('/admin/projects/{project}/edit', [AdminProjectController::class, 'edit'])->name('admin.projects.edit');
       
       
        




    
    });