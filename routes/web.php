<?php

use App\Http\Controllers\Admin\announcController;
use App\Http\Controllers\galleryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\RouteController;
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

Route::get('/education-detail/{id}', [RouteController::class, 'eduDetail'])->name("eduDetail");

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [\App\Http\Controllers\AdminController::class, 'Dashboard'])->name('dashboard');
    Route::get('/teachers/create', [\App\Http\Controllers\Admin\TeachersController::class, 'create'])->name('teachers.create');
    Route::post('/teachers/store', [\App\Http\Controllers\Admin\TeachersController::class, 'store'])->name('teachers.store');
    Route::get('/teachers/edit/{id}', [\App\Http\Controllers\Admin\TeachersController::class, 'edit'])->name('teachers.edit');
    Route::put('/teacher/update/{id}', [\App\Http\Controllers\Admin\TeachersController::class, 'update'])->name('teachers.update');
    Route::delete('/teacher/{id}', [\App\Http\Controllers\Admin\TeachersController::class, 'destroy'])->name('teachers.destroy');

    Route::get('/circle/create', [\App\Http\Controllers\Admin\EduController::class, 'create'])->name('circle.create');
    Route::post('/circle/store', [\App\Http\Controllers\Admin\EduController::class, 'store'])->name('circle.store');
    Route::get('/circle/edit/{id}', [\App\Http\Controllers\Admin\EduController::class, 'edit'])->name('circle.edit');
    Route::put('/circle/update/{id}', [\App\Http\Controllers\Admin\EduController::class, 'update'])->name('circle.update');
    Route::delete('/circle/{id}', [\App\Http\Controllers\Admin\EduController::class, 'destroy'])->name('circle.destroy');


    Route::get('/position/create', [\App\Http\Controllers\Admin\PositionController::class, 'create'])->name('position.create');
    Route::post('/position/store', [\App\Http\Controllers\Admin\PositionController::class, 'store'])->name('position.store');
    Route::get('/position/edit/{id}', [\App\Http\Controllers\Admin\PositionController::class, 'edit'])->name('position.edit');
    Route::put('/position/update/{id}', [\App\Http\Controllers\Admin\PositionController::class, 'update'])->name('position.update');
    Route::delete('/position/delete/{id}', [\App\Http\Controllers\Admin\PositionController::class, 'destroy'])->name('position.destroy');

    Route::get('/info/edit/{id}', [schoolInfoController::class, 'edit'])->name('info.edit');

    Route::get('/news/add', [NewsController::class, 'create'])->name('news.create');
    Route::post('/news/create', [NewsController::class, 'store'])->name('news.store');
    Route::get('/news/edit/{id}', [NewsController::class, 'edit'])->name("news.edit");
    Route::put('/news/update/{id}', [NewsController::class, 'update'])->name("news.update");
    Route::delete('/news/delete/{id}', [NewsController::class, 'destroy'])->name('news.destroy');

    Route::get('/schoolinfo/edit', [schoolInfoController::class, 'edit'])->name("schoolinfo.edit");
    Route::put('/schoolinfo.update', [schoolInfoController::class, "update"])->name("schoolinfo.update");


    Route::get('/announcement/add', [announcController::class, 'create'])->name('ann.create');
    Route::post('/announcment/store', [announcController::class, 'store'])->name('ann.store');
    Route::get('/announcment/edit/{id}', [announcController::class, 'edit'])->name('ann.edit');
    Route::post('/announcment/update/{id}', [announcController::class, 'update'])->name('ann.update');
    Route::delete('/announcments/delete/{id}', [announcController::class, 'destroy'])->name('ann.destroy');

    Route::get('/galery/add', [galleryController::class, 'create'])->name('gallery.create');
    Route::post('/galery/store', [galleryController::class, 'store'])->name('gallery.store');
    Route::delete('/galery/delete/{id}', [galleryController::class, 'destroy'])->name('gallery.destroy');
});
