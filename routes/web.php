<?php

use App\Http\Controllers\BankAccountController;
use App\Http\Controllers\BrokerAccountController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('welcome');
});


Route::get('/register', [UserController::class, 'create'])->name('register');
Route::post('/register', [UserController::class, 'store'])->name('register.store');

Route::get('/bankaccounts', [BankAccountController::class, 'create'])->name('bank-accounts.create');
Route::post('/bank-accounts', [BankAccountController::class, 'store'])->name('bank-accounts.store');

Route::get('/brokeraccounts', [BrokerAccountController::class, 'create'])->name('broker-accounts.create');
Route::post('/broker-accounts', [BrokerAccountController::class, 'store'])->name('broker-accounts.store');
