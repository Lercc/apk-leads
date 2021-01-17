<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\LeadController;

Auth::routes();

Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/', function () {
    return redirect()->route('page.lead.register');
});

Route::get('l/register', [PageController::class, 'createLead'])->name('page.lead.register');

Route::get('lead/calificados', [LeadController::class, 'indexCalificados'])->name('lead.calificados')->middleware('auth');
