<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\LeadController;
use App\Models\Lead;

Auth::routes();

Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/', function () {
    return redirect()->route('page.lead.register');
});

Route::get('l/register', [PageController::class, 'createLead'])->name('page.lead.register');

// EDIT AND UPDATE GENERAL LEADS
Route::get('leads/{lead}/edit', [LeadController::class, 'edit'])->name('leads.edit')->middleware('auth'); //falta
Route::put('leads/{lead}/update', [LeadController::class, 'update'])->name('leads.update')->middleware('auth');  //falta

// DELETE GENERAL LEADS
Route::delete('leads/{lead}', [LeadController::class, 'destroy'])->name('leads.destroy')->middleware('auth');

// INDEX LEADS
Route::get('leads/calificados', [LeadController::class, 'indexCalificados'])->name('leads.calificados')->middleware('auth');

Route::get('leads/perfiles-aceptados', [LeadController::class, 'indexAceptados'])->name('leads.aceptados')->middleware('auth');
Route::get('leads/perfiles-aceptados-enviado', [LeadController::class, 'indexAceptadosEnviado'])->name('leads.aceptados.enviado')->middleware('auth');
Route::get('leads/perfiles-aceptados-noenviado', [LeadController::class, 'indexAceptadosNoEnviado'])->name('leads.aceptados.noenviado')->middleware('auth');

Route::get('leads/edad', [LeadController::class, 'indexEdad'])->name('leads.edad')->middleware('auth');
Route::get('leads/ingles', [LeadController::class, 'indexIngles'])->name('leads.ingles')->middleware('auth');

// UPDATE LEADS
Route::put('leads/{lead}/updateQualifiedTable', [LeadController::class, 'updateQualifiedTable'])->name('leads.updateQualifiedTable')->middleware('auth');
Route::put('leads/{lead}/updateAceptedTable', [LeadController::class, 'updateAceptedTable'])->name('leads.updateAceptedTable')->middleware('auth');
Route::put('leads/{lead}/updateAgeTable', [LeadController::class, 'updateAgeTable'])->name('leads.updateAgeTable')->middleware('auth');
Route::put('leads/{lead}/updateEnglishTable', [LeadController::class, 'updateEnglishTable'])->name('leads.updateEnglishTable')->middleware('auth');

Route::put('leads/{lead}/{pPipe}/updatepipeline', [LeadController::class, 'updatePipeline'])->name('leads.update.pipeline')->middleware('auth');


// CREATE LEADS
Route::post('leads/store', [LeadController::class, 'store'])->name('leads.store');