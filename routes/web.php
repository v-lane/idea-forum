<?php

use App\Http\Controllers\IdeaController;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use App\Models\Idea;
use Illuminate\Support\Facades\Route;

Route::get('/', [IdeaController::class, 'index'])->name('home');

Route::get('/idea/{id}', [IdeaController::class,'indexIdea'])->name('idea');


Route::middleware(['auth'])->group(function () {
    // 'Create' Page Routes
    Route::get('/create', [IdeaController::class, 'indexCreate'])->name('idea.indexCreate');
    Route::post('/create', [IdeaController::class, 'store'])->name('idea.store');
    // 'Edit' Page Routes
    Route::get('/edit/{id}', [IdeaController::class, 'indexEdit']);
    //Route::post('/edit/{id}', [IdeaController::class, 'store'])->name('idea.store');
});

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');


Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

require __DIR__.'/auth.php';
