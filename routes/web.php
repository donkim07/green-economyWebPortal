<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MapController;
use App\Http\Controllers\VisualizationController;
use App\Http\Controllers\StakeholdersController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\ContactController;

// Home route
Route::get('/', function () {
    return view('map');
})->name('home');

// Map route
Route::get('/map', [MapController::class, 'index'])->name('map.index');

// Visualization route
Route::get('/visualization', [VisualizationController::class, 'index'])->name('visualization.index');

// Stakeholders directory route
Route::get('/stakeholders', [StakeholdersController::class, 'index'])->name('stakeholders.index');

// Information route (Public ads, best practices)
Route::get('/information', [InformationController::class, 'index'])->name('information.index');

// Reports and resources route
Route::get('/reports', [ReportsController::class, 'index'])->name('reports.index');

// Contact form submission route
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

// Additional Routes
Route::get('/about', function () { 
    return view('pages.about'); })->name('about');
Route::get('/contact', function () { 
    return view('pages.contact'); })->name('contact');
