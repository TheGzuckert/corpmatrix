<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\UserForm;
use App\Livewire\Auth\Login;
use Illuminate\Support\Facades\Auth;

Route::get('/', Login::class)->name('login');
Route::get('/register', UserForm::class)->name('register');

Route::post('/logout', function() {
    Auth::logout();
    session()->invalidate();
    session()->regenerateToken();
    return redirect()->route('login');
})->name('logout');


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', UserForm::class)->name('dashboard');
});
