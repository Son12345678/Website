<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;


/*
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
 
Auth::routes(['auth']);
Route::get('/',[ProductController::class,'main'])->name('main');

Route::get('/login',[UserController::class,'login'])->name('login');
Route::post('/login/process', [UserController::class, 'process']);
Route::get('/postregister', [UserController::class, 'register']);
Route::post('/register/process', [UserController::class, 'postregister'])->name('register');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');


 Route::prefix('/admin')->middleware('auth','isAdmin')->group(
  function(){
    Route::get('/dashboard', function(){
      return view('dashboard');
    });
    
  });
Route::middleware('auth')->group(function () {
  Route::get('/create', [ProductController::class, 'index']);


  // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

// Route::get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');



// require __DIR__.'/auth.php';
