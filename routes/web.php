<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Providers\RouteServiceProvider;
use App\Http\Controllers\PDFSignatureController;
use App\Http\Controllers\OrderController;

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

Route::get('/', function () {
    return view('welcome');
})->middleware('referral');

Route::get('/order', [OrderController::class, 'create'])->name('order.create');
Route::get('/order/website', [OrderController::class, 'createWebsiteOrderForm'])->name('order.website');
Route::post('/order/store', [OrderController::class, 'store'])->name('order.store');
Route::get('/order/success', [OrderController::class, 'success'])->name('order.success');


Route::middleware(['auth', 'role:Admin'])->group(function () {
    Route::get('/admin/dashboard',  [AdminController::class, 'dashboard'])->name('admin.dashboard');
});

Route::middleware(['auth', 'role:Client'])->group(function () {
    Route::get('/client/dashboard', [ClientController::class, 'dashboard'])->name('client.dashboard');
    Route::get('/orders/{id}', [OrderController::class, 'show'])->name('orders.show');
    Route::get('/client/affiliate', [ClientController::class, 'affiliate'])->name('client.affiliate');
});


Route::get('/dashboard', function () {
    if (auth()->user()->hasRole('Admin')) {
        return redirect()->intended(RouteServiceProvider::ADMIN);
    } elseif (auth()->user()->hasRole('Client')) {
        return redirect()->intended(RouteServiceProvider::CLIENT);
    }
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/generate-pdf', [PDFSignatureController::class, 'generatePDFWithSignature']);

require __DIR__.'/auth.php';
