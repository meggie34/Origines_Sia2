<?php

use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome'); 
});

// Define routes for each function
Route::get('/users', [TransactionController::class, 'getUsers']);
Route::get('/products', [TransactionController::class, 'getProducts']);
Route::get('/transactions', [TransactionController::class, 'getTransactions']);
Route::get('/sales', [TransactionController::class, 'getSalesData']);
