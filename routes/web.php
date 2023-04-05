<?php

use App\Http\Controllers\TransactionController;
use App\Models\Transaction;
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

// Route::get('/transaction', function () {
//     return view('transaction');
// });
Route::get('/transaction', [TransactionController::class, 'index'])->name('transaction');
Route::get('/transaction/detail/{id}', [TransactionController::class, 'detail'])->name('transaction_detail');
Route::view('/transaction/add', 'transaction_add')->name('add_transaction');
Route::post('/store', [TransactionController::class, 'transaction_store'])->name('store_transaction');

