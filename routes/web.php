<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IdoController;
use App\Http\Controllers\ApexController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SwapController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CryptoController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\StakingController;

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

// Admin
require __DIR__ . '/admin/admin.php';
require __DIR__ . '/account/account.php';

// Index
Route::get('/', [IndexController::class, 'index'])->name('index');

//Staking
Route::get('/staking', [StakingController::class, 'staking'])->name('staking');
Route::get('/staking/{stakingId}', [StakingController::class, 'stakingDetails'])->name('staking.details');

// Ido
Route::get('/ido', [IdoController::class, 'ido'])->name('ido');
Route::get('/ido/{idoId}', [IdoController::class, 'idoDetails'])->name('ido.details');

// swap
Route::get('/market', [SwapController::class, 'swap'])->name('swap');
Route::get('/swap/{swapId}', [SwapController::class, 'swapDetails'])->name('swap.checkout');

// Apex
Route::get('/apex', [ApexController::class, 'apex'])->name('apex');


// Buy Crypto
Route::get('/buycrypto', [CryptoController::class, 'buyCrypto'])->name('buycrypto');
Route::get('/pricing', [CryptoController::class, 'price'])->name('pricingplan');

// Blog
Route::get('/blog', [BlogsController::class, 'blogs'])->name('blog');
Route::get('/news/{blogId}', [BlogsController::class, 'blogsDetail'])->name('blog.details');
Route::get('/blog/{categoryId}', [BlogsController::class, 'blogsCategory'])->name('blog.category');

// Contact
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');

// Pages
Route::get('/rewards', [PageController::class, 'rewards'])->name('rewards');
Route::get('/terms-conditions', [PageController::class, 'terms'])->name('termsCondition');


//Authentication
Route::get("/login", [AuthController::class, 'showLoginPage'])->name("login");
Route::get("/register", [AuthController::class, 'showRegisterPage'])->name("register");
Route::put("/register", [AuthController::class, 'registerNewUser'])->name("register.new");
Route::post("/login", [AuthController::class, 'loginUser'])->name("login.user");

//Logout
Route::post("/logout", function () {
    Auth::logout();
    return redirect()->route("index");
})->name("logout");

//About
Route::get("/about", [AboutController::class, 'aboutUS'])->name("about");

