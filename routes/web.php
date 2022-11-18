<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProjectsController;

Route::get('/example', [Controller::class, 'index']);

Route::group(['prefix' => 'web', 'as' => 'web.'], function () {

    Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.'], function () {
        Route::get('/', [DashboardController::class, 'index'])->name('index');
    });

    Route::group(['prefix' => 'projetos', 'as' => 'projects.'], function () {
        Route::get('/', [ProjectsController::class, 'index'])->name('index');
        Route::get('kanban', [ProjectsController::class, 'kanban'])->name('kanban');
    });
});
