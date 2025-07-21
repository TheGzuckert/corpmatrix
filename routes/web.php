<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\UserForm;
use App\Livewire\Auth\Login;
use Illuminate\Support\Facades\Auth;

Route::middleware('guest')->group(function () {
    Route::get('/', Login::class)->name('login');
    Route::get('/register', UserForm::class)->name('register');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', \App\Livewire\Dashboard::class)->name('dashboard');


});

Route::post('/logout', function() {
    Auth::logout();
    session()->invalidate();
    session()->regenerateToken();
    return redirect()->route('login');
})->name('logout');
