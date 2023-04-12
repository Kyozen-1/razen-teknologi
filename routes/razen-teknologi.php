<?php

Route::prefix('razen-teknologi')->group(function(){
    Route::prefix('dashboard')->group(function(){
        Route::get('/', 'RazenTeknologi\Admin\DashboardController@index')->name('razen-teknologi.admin.dashboard.index');
        Route::post('/change', 'RazenTeknologi\Admin\DashboardController@change')->name('razen-teknologi.admin.dashboard.change');
    });
});
