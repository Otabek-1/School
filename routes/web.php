<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\schoolInfoController;
Route::get('/', [schoolInfoController::class, 'index']);

Route::get('/schoolrules', [\App\Http\Controllers\RouteController::class, 'schoolRules'])->name('schoolrules');
Route::get('/FAQ', [\App\Http\Controllers\RouteController::class, 'FAQ'])->name('faq');
Route::get('/stateSymbols', [\App\Http\Controllers\RouteController::class, 'Symbols'])->name('symbols');
Route::get('/schooltasks', [\App\Http\Controllers\RouteController::class, 'schoolTasks'])->name('schoolTasks');
Route::get('/leadership', [\App\Http\Controllers\RouteController::class, 'leaderShip'])->name('leaderShip');
Route::get('/teachers', [\App\Http\Controllers\RouteController::class, 'teachers'])->name('teachers');
Route::get('/rekvizits', [\App\Http\Controllers\RouteController::class, 'Rekvizits'])->name('rekvizits');
Route::get('/education', [\App\Http\Controllers\RouteController::class, 'education'])->name('education');
Route::get('/schoolnews', [\App\Http\Controllers\RouteController::class, 'schoolNews'])->name('schoolNews');
Route::get('/gallery', [\App\Http\Controllers\RouteController::class, 'Gallery'])->name('gallery');
Route::get('/infographics', [\App\Http\Controllers\RouteController::class, 'Infographics'])->name('infographics');
Route::get('/usefulrecourses', [\App\Http\Controllers\RouteController::class, 'UsefulResources'])->name('UsefulResources');
Route::get('/connect', [\App\Http\Controllers\RouteController::class, 'Contact'])->name('contact');
Route::get('/news/{slug}', [\App\Http\Controllers\RouteController::class, 'NewsShow'])->name('NewsShow');
Route::get("/leadershipDetail/{id}", [\App\Http\Controllers\RouteController::class, 'leaderShipDetail'])->name('leaderShipDetail');
Route::post('/sendEmail', [\App\Http\Controllers\RouteController::class, 'sendEmail'])->name('sendEmail');

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [\App\Http\Controllers\AdminController::class, 'Dashboard'])->name('dashboard');
});
