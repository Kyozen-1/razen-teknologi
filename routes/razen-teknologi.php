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

        Route::prefix('testimoni')->group(function(){
            Route::get('/', 'RazenTeknologi\Admin\TestimoniController@index')->name('razen-teknologi.admin.testimoni.index');
            Route::get('/detail/{id}', 'RazenTeknologi\Admin\TestimoniController@show')->name('razen-teknologi.admin.testimoni.show');
            Route::post('/','RazenTeknologi\Admin\TestimoniController@store')->name('razen-teknologi.admin.testimoni.store');
            Route::get('/edit/{id}','RazenTeknologi\Admin\TestimoniController@edit')->name('razen-teknologi.admin.testimoni.edit');
            Route::post('/update','RazenTeknologi\Admin\TestimoniController@update')->name('razen-teknologi.admin.testimoni.update');
            Route::get('/destroy/{id}','RazenTeknologi\Admin\TestimoniController@destroy')->name('razen-teknologi.admin.testimoni.destroy');
        });

        Route::prefix('layanan-perusahaan')->group(function(){
            Route::get('/', 'RazenTeknologi\Admin\LayananPerusahaanController@index')->name('razen-teknologi.admin.layanan-perusahaan.index');
            Route::get('/detail/{id}', 'RazenTeknologi\Admin\LayananPerusahaanController@show')->name('razen-teknologi.admin.layanan-perusahaan.show');
            Route::post('/','RazenTeknologi\Admin\LayananPerusahaanController@store')->name('razen-teknologi.admin.layanan-perusahaan.store');
            Route::get('/edit/{id}','RazenTeknologi\Admin\LayananPerusahaanController@edit')->name('razen-teknologi.admin.layanan-perusahaan.edit');
            Route::post('/update','RazenTeknologi\Admin\LayananPerusahaanController@update')->name('razen-teknologi.admin.layanan-perusahaan.update');
            Route::get('/destroy/{id}','RazenTeknologi\Admin\LayananPerusahaanController@destroy')->name('razen-teknologi.admin.layanan-perusahaan.destroy');
        });

        Route::prefix('tim')->group(function(){
            Route::get('/', 'RazenTeknologi\Admin\TimController@index')->name('razen-teknologi.admin.tim.index');
            Route::get('/create', 'RazenTeknologi\Admin\TimController@create')->name('razen-teknologi.admin.tim.create');
            Route::get('/detail/{id}', 'RazenTeknologi\Admin\TimController@show')->name('razen-teknologi.admin.tim.show');
            Route::post('/','RazenTeknologi\Admin\TimController@store')->name('razen-teknologi.admin.tim.store');
            Route::get('/edit/{id}','RazenTeknologi\Admin\TimController@edit')->name('razen-teknologi.admin.tim.edit');
            Route::post('/update/{id}','RazenTeknologi\Admin\TimController@update')->name('razen-teknologi.admin.tim.update');
            Route::get('/destroy/{id}','RazenTeknologi\Admin\TimController@destroy')->name('razen-teknologi.admin.tim.destroy');
        });

        Route::prefix('layanan')->group(function(){
            Route::get('/', 'RazenTeknologi\Admin\LayananController@index')->name('razen-teknologi.admin.layanan.index');
            Route::get('/create', 'RazenTeknologi\Admin\LayananController@create')->name('razen-teknologi.admin.layanan.create');
            Route::get('/detail/{id}', 'RazenTeknologi\Admin\LayananController@show')->name('razen-teknologi.admin.layanan.show');
            Route::post('/','RazenTeknologi\Admin\LayananController@store')->name('razen-teknologi.admin.layanan.store');
            Route::get('/edit/{id}','RazenTeknologi\Admin\LayananController@edit')->name('razen-teknologi.admin.layanan.edit');
            Route::post('/update/{id}','RazenTeknologi\Admin\LayananController@update')->name('razen-teknologi.admin.layanan.update');
            Route::get('/destroy/{id}','RazenTeknologi\Admin\LayananController@destroy')->name('razen-teknologi.admin.layanan.destroy');
        });

        Route::prefix('fitur-layanan')->group(function(){
            Route::get('/', 'RazenTeknologi\Admin\FiturLayananController@index')->name('razen-teknologi.admin.fitur-layanan.index');
            Route::get('/create', 'RazenTeknologi\Admin\FiturLayananController@create')->name('razen-teknologi.admin.fitur-layanan.create');
            Route::get('/detail/{id}', 'RazenTeknologi\Admin\FiturLayananController@show')->name('razen-teknologi.admin.fitur-layanan.show');
            Route::post('/','RazenTeknologi\Admin\FiturLayananController@store')->name('razen-teknologi.admin.fitur-layanan.store');
            Route::get('/edit/{id}','RazenTeknologi\Admin\FiturLayananController@edit')->name('razen-teknologi.admin.fitur-layanan.edit');
            Route::post('/update/{id}','RazenTeknologi\Admin\FiturLayananController@update')->name('razen-teknologi.admin.fitur-layanan.update');
            Route::get('/destroy/{id}','RazenTeknologi\Admin\FiturLayananController@destroy')->name('razen-teknologi.admin.fitur-layanan.destroy');
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

    Route::prefix('master-data')->group(function(){
        Route::prefix('media-sosial')->group(function(){
            Route::get('/', 'RazenTeknologi\MasterData\MediaSosialController@index')->name('razen-teknologi.master-data.media-sosial.index');
            Route::get('/detail/{id}', 'RazenTeknologi\MasterData\MediaSosialController@show')->name('razen-teknologi.master-data.media-sosial.show');
            Route::post('/','RazenTeknologi\MasterData\MediaSosialController@store')->name('razen-teknologi.master-data.media-sosial.store');
            Route::get('/edit/{id}','RazenTeknologi\MasterData\MediaSosialController@edit')->name('razen-teknologi.master-data.media-sosial.edit');
            Route::post('/update','RazenTeknologi\MasterData\MediaSosialController@update')->name('razen-teknologi.master-data.media-sosial.update');
            Route::get('/destroy/{id}','RazenTeknologi\MasterData\MediaSosialController@destroy')->name('razen-teknologi.master-data.media-sosial.destroy');
        });
    });
});
