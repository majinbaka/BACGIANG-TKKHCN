<?php
Route::get('/','HomeController@tintucs');
Route::get('/gopy', function () {
    return view('transfer');
});
Route::get('/login', function () {
    return view('transfer');
});
Route::get('/reg', function () {
    return view('transfer');
});
Route::get('/tkth', function () {
    return view('thongketonghop');
});

//Admin login
Route::get('/admin/login', 'AdminLoginController@showLoginForm')->name('admin.login.show');
Route::post('/admin/login', 'AdminLoginController@login')->name('admin.login');
Route::get('/admin/logout', 'AdminLoginController@logout')->name('admin.logout');

//User login
Route::get('/thanhvien/login', 'ThanhvienLoginController@showLoginForm')->name('thanhvien.login.show');
Route::post('/thanhvien/login', 'ThanhvienLoginController@login')->name('thanhvien.login');
Route::get('/thanhvien/logout', 'ThanhvienLoginController@logout')->name('thanhvien.logout');

Route::get('/thongkekhcn/{id}', 'HomeController@tkkhcn');
Route::get('/thongke/khoahoccongnghe/doc', 'HomeController@tailieu');
Route::get('/thongke/khoahoccongnghe/doc/{id}', 'HomeController@tailieuchitiet');
Route::get('/uploads/{id}', 'VanbanController@download')->name('download');
Route::get('/tintuc/{id}', 'HomeController@tintuc');
Route::get('/talieu/danhsach/{cate}', 'HomeController@tailieudanhsach');
Route::get('/thongkecoso', 'HomeController@tkcsreport');
Route::get('/thongkecoso/donvi/{year}/{id}/{type}', 'HomeController@donvireport');
Route::get('/generate-docx', 'HomeController@generateDocx');




Route::group(['middleware' => 'auth:web'], function () {
    Route::group(['prefix' => 'thanhvien'], function () {
        Route::get('/', function () {
            return view('thanhvien.index');
        });

        Route::get('/bieumau/{type}/edit', 'ThanhvienDashboardController@bieumau');

        Route::get('/bieumau/baocao', 'ThanhvienDashboardController@createBieu');
        Route::patch('/bieumau/baocao', 'ThanhvienDashboardController@bieumauYear');
        Route::get('/doimatkhau', 'ThanhvienDashboardController@editPassword');
        Route::patch('/password', 'ThanhvienDashboardController@updatePassword');
        Route::patch('/bieumau1/{year}', 'ThanhvienDashboardController@bieumau1Update');
        Route::patch('/bieumau2/{year}', 'ThanhvienDashboardController@bieumau2Update');
        Route::patch('/bieumau3/{year}', 'ThanhvienDashboardController@bieumau3Update');
        Route::patch('/bieumau4/{year}', 'ThanhvienDashboardController@bieumau4Update');
        Route::patch('/bieumau5/{year}', 'ThanhvienDashboardController@bieumau5Update');
        Route::patch('/bieumau6/{year}', 'ThanhvienDashboardController@bieumau6Update');
    });
});


Route::group(['middleware' => 'auth:admin'], function () {

    Route::group(['prefix' => 'admin'], function () {
        Route::get('/', function () {
            return view('admin.index');
        });
        Route::get('/tintuc', 'TinTucController@index')->name('tintucs.index');
        Route::get('/tintuc/create', 'TinTucController@create')->name('tintucs.create');
        Route::post('/tintuc', 'TinTucController@store')->name('tintucs.store');
        Route::get('/tintuc/{id}/edit', 'TinTucController@edit')->name('tintucs.edit');
        Route::patch('/tintuc/{id}', 'TinTucController@update')->name('tintucs.update');
        Route::delete('/tintuc/{id}', 'TinTucController@destroy')->name('tintucs.destroy');

        Route::get('/thanhvien', 'ThanhVienController@index')->name('thanhviens.index');
        Route::get('/thanhvien/create', 'ThanhVienController@create')->name('thanhviens.create');
        Route::post('/thanhvien', 'ThanhVienController@store')->name('thanhviens.store');
        Route::get('/thanhvien/{id}/edit', 'ThanhVienController@edit')->name('thanhviens.edit');
        Route::patch('/thanhvien/{id}', 'ThanhVienController@update')->name('thanhviens.update');
        Route::delete('/thanhvien/{id}', 'ThanhVienController@destroy')->name('thanhviens.destroy');

        Route::get('/thongke/{id}/edit', 'ThongTinController@edit')->name('thongtins.edit');
        Route::patch('/thongke/{id}', 'ThongTinController@update')->name('thongtins.update');

        Route::get('/vanban', 'VanbanController@index')->name('vanbans.index');
        Route::get('/vanban/create', 'VanbanController@create')->name('vanbans.create');
        Route::post('/vanban', 'VanbanController@store')->name('vanbans.store');
        Route::get('/vanban/{id}/edit', 'VanbanController@edit')->name('vanbans.edit');
        Route::patch('/vanban/{id}', 'VanbanController@update')->name('vanbans.update');
        Route::delete('/vanban/{id}', 'VanbanController@destroy')->name('vanbans.destroy');

        Route::get('/lienket', 'LienketController@index')->name('lienkets.index');
        Route::get('/lienket/create', 'LienketController@create')->name('lienkets.create');
        Route::post('/lienket', 'LienketController@store')->name('lienkets.store');
        Route::get('/lienket/{id}/edit', 'LienketController@edit')->name('lienkets.edit');
        Route::patch('/lienket/{id}', 'LienketController@update')->name('lienkets.update');
        Route::delete('/lienket/{id}', 'LienketController@destroy')->name('lienkets.destroy');
    });
});
