<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
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

Route::get('generate', function (){
    \Illuminate\Support\Facades\Artisan::call('storage:link');
      // \Illuminate\Support\Facades\Artisan::call('cache:clear');
      // \Illuminate\Support\Facades\Artisan::call('config:clear');
      // echo 'ok';exit;
  });
  
// Route::get('/admin', function () { 
//     return view('auth.login');
// });

Route::get('/lock_screen', [HomeController::class, 'lockscreen'])->name('lockscreen');

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
