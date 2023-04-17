<?php

Route::prefix('razen-teknologi')->group(function(){
    Route::prefix('admin')->group(function(){
        Route::prefix('dashboard')->group(function(){
            Route::get('/', 'RazenTeknologi\Admin\DashboardController@index')->name('razen-teknologi.admin.dashboard.index');
            Route::post('/change', 'RazenTeknologi\Admin\DashboardController@change')->name('razen-teknologi.admin.dashboard.change');
        });

        Route::prefix('timeline')->group(function(){
            Route::get('/', 'RazenTeknologi\Admin\TimelineController@index')->name('razen-teknologi.admin.timeline.index');
            Route::get('/detail/{id}', 'RazenTeknologi\Admin\TimelineController@show')->name('razen-teknologi.admin.timeline.show');
            Route::post('/','RazenTeknologi\Admin\TimelineController@store')->name('razen-teknologi.admin.timeline.store');
            Route::get('/edit/{id}','RazenTeknologi\Admin\TimelineController@edit')->name('razen-teknologi.admin.timeline.edit');
            Route::post('/update','RazenTeknologi\Admin\TimelineController@update')->name('razen-teknologi.admin.timeline.update');
            Route::get('/destroy/{id}','RazenTeknologi\Admin\TimelineController@destroy')->name('razen-teknologi.admin.timeline.destroy');
        });
    });

    Route::prefix('landing-page')->group(function(){
        Route::prefix('beranda')->group(function(){
            Route::get('/', 'RazenTeknologi\LandingPage\BerandaController@index')->name('razen-teknologi.landing-page.beranda.index');

            Route::post('/store/section-1', 'RazenTeknologi\LandingPage\BerandaController@store_section_1')->name('razen-teknologi.landing-page.beranda.store.section-1');
            Route::post('/store/section-2', 'RazenTeknologi\LandingPage\BerandaController@store_section_2')->name('razen-teknologi.landing-page.beranda.store.section-2');
            Route::post('/store/section-3', 'RazenTeknologi\LandingPage\BerandaController@store_section_3')->name('razen-teknologi.landing-page.beranda.store.section-3');
            Route::post('/store/section-3/konten', 'RazenTeknologi\LandingPage\BerandaController@store_section_3_konten')->name('razen-teknologi.landing-page.beranda.store.section-3.konten');
            Route::post('/hapus/section-3/konten', 'RazenTeknologi\LandingPage\BerandaController@hapus_section_3_konten')->name('razen-teknologi.landing-page.beranda.hapus.section-3.konten');
            Route::post('/store/section-4', 'RazenTeknologi\LandingPage\BerandaController@store_section_4')->name('razen-teknologi.landing-page.beranda.store.section-4');
        });

        Route::prefix('perusahaan')->group(function(){
            Route::get('/', 'RazenTeknologi\LandingPage\PerusahaanController@index')->name('razen-teknologi.landing-page.perusahaan.index');

            Route::post('/store/section-1', 'RazenTeknologi\LandingPage\PerusahaanController@store_section_1')->name('razen-teknologi.landing-page.perusahaan.store.section-1');
            Route::post('/store/section-2', 'RazenTeknologi\LandingPage\PerusahaanController@store_section_2')->name('razen-teknologi.landing-page.perusahaan.store.section-2');
            Route::post('/store/section-3', 'RazenTeknologi\LandingPage\PerusahaanController@store_section_3')->name('razen-teknologi.landing-page.perusahaan.store.section-3');
            Route::post('/store/section-4', 'RazenTeknologi\LandingPage\PerusahaanController@store_section_4')->name('razen-teknologi.landing-page.perusahaan.store.section-4');
            Route::post('/store/section-5', 'RazenTeknologi\LandingPage\PerusahaanController@store_section_5')->name('razen-teknologi.landing-page.perusahaan.store.section-5');
        });

        Route::prefix('layanan')->group(function(){
            Route::get('/', 'RazenTeknologi\LandingPage\LayananController@index')->name('razen-teknologi.landing-page.layanan.index');

            Route::post('/store/section-1', 'RazenTeknologi\LandingPage\LayananController@store_section_1')->name('razen-teknologi.landing-page.layanan.store.section-1');
            Route::post('/store/section-2', 'RazenTeknologi\LandingPage\LayananController@store_section_2')->name('razen-teknologi.landing-page.layanan.store.section-2');
        });

        Route::prefix('aplikasi')->group(function(){
            Route::get('/', 'RazenTeknologi\LandingPage\AplikasiController@index')->name('razen-teknologi.landing-page.aplikasi.index');

            Route::post('/store/section-1', 'RazenTeknologi\LandingPage\AplikasiController@store_section_1')->name('razen-teknologi.landing-page.aplikasi.store.section-1');
        });

        Route::prefix('kontak')->group(function(){
            Route::get('/', 'RazenTeknologi\LandingPage\KontakController@index')->name('razen-teknologi.landing-page.kontak.index');

            Route::post('/store/section-1', 'RazenTeknologi\LandingPage\KontakController@store_section_1')->name('razen-teknologi.landing-page.kontak.store.section-1');
        });
    });
});
