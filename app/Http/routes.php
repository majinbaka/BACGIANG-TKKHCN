<?php
Route::get('/','HomeController@tintucs');
Route::get('/gopy', 'HomeController@transfer');
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
Route::get('/generate/donvi/bieu1/{id}', 'HomeController@generateBieu1');
Route::get('/generate/donvi/bieu2/{id}', 'HomeController@generateBieu2');
Route::get('/generate/donvi/bieu3/{id}', 'HomeController@generateBieu3');
Route::get('/generate/donvi/bieu4/{id}', 'HomeController@generateBieu4');
Route::get('/generate/donvi/bieu5/{id}', 'HomeController@generateBieu5');
Route::get('/generate/donvi/bieu6/{id}', 'HomeController@generateBieu6');
Route::post('/thongkecoso/donvi/{year}/{id}/{type}', 'HomeController@donvireportX');
Route::post('/thongketonghop/{year}', 'HomeController@thongketonghop');
Route::post('/bieutonghop{type}/year', 'HomeController@thongketonghopBieu');
Route::get('/thongketonghop/', 'HomeController@thongketonghop');
Route::post('/generate/tonghop/bieu/{type}/{id}', 'HomeController@generateBieuTH');
Route::get('/generate/tonghop/bieu{type}/{year}', 'HomeController@generateBieuTHY');
Route::post('/search', 'HomeController@search');
// Route::get('/fx', 'HomeController@fx');
Route::get('/dangky', 'ThanhvienDashboardController@register');
Route::post('/dangky', 'ThanhvienDashboardController@registerUpdate');

Route::group(['middleware' => 'auth:web'], function () {
    Route::group(['prefix' => 'thanhvien'], function () {
        Route::get('/', function () {
            return view('thanhvien.index');
        });

        Route::get('/{year}/bieumau/{type}/edit', 'ThanhvienDashboardController@bieumau');
        Route::get('/{year}/bieumau/{type}/show', 'ThanhvienDashboardController@bieumauShow');
        Route::get('/{year}/bieumau/{type}/word', 'ThanhvienDashboardController@bieumauWord');
        Route::get('/{year}/bieumau/send', 'ThanhvienDashboardController@bieumauSend');
        Route::get('/{year}/bieumau/delete', 'ThanhvienDashboardController@bieumauDelete');
        Route::get('/{year}/bieumau/{type}/print', 'ThanhvienDashboardController@bieumauPrint');

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

        Route::get('/pheduyet', 'ThanhvienController@pheduyet');
        Route::get('/pheduyet/{id}/show', 'ThanhvienDashboardController@showPheDuyet');
        Route::get('/pheduyet/{id}/accept', 'ThanhvienDashboardController@acceptPheDuyet');
        Route::delete('/pheduyet/{id}/delete', 'ThanhvienDashboardController@deletePheDuyet');

        Route::get('/tintuc', 'TinTucController@index')->name('tintucs.index');
        Route::get('/tintuc/create', 'TinTucController@create')->name('tintucs.create');
        Route::post('/tintuc', 'TinTucController@store')->name('tintucs.store');
        Route::get('/tintuc/{id}/edit', 'TinTucController@edit')->name('tintucs.edit');
        Route::patch('/tintuc/{id}', 'TinTucController@update')->name('tintucs.update');
        Route::delete('/tintuc/{id}', 'TinTucController@destroy')->name('tintucs.destroy');

        Route::get('/thanhvien', 'ThanhVienController@index')->name('thanhviens.index');
        Route::get('/thanhvien/nhom-quyen', 'ThanhVienController@index')->name('thanhviens.nhomquyen');
        Route::get('/thanhvien/create', 'ThanhVienController@create')->name('thanhviens.create');
        Route::post('/thanhvien', 'ThanhVienController@store')->name('thanhviens.store');
        Route::get('/thanhvien/{id}/edit', 'ThanhVienController@edit')->name('thanhviens.edit');
        Route::get('/thanhvien/{id}/show', 'ThanhVienController@show')->name('thanhviens.show');
        Route::patch('/thanhvien/{id}', 'ThanhVienController@update')->name('thanhviens.update');
        Route::delete('/thanhvien/{id}', 'ThanhVienController@destroy')->name('thanhviens.destroy');
        Route::get('/thanhvien/{year}/{id}/bieu/{type}', 'ThanhVienController@editBieu');
        Route::get('/thanhvien/{year}/{id}/bieu/{type}/show', 'ThanhVienController@showBieu');
        Route::post('/thanhviencheck/{year}/{id}/bieushow/{check}', 'ThanhVienController@showStatus');
        Route::patch('/thanhvien/{year}/{id}/bieu/1', 'ThanhVienController@bieumau1Update');
        Route::patch('/thanhvien/{year}/{id}/bieu/2', 'ThanhVienController@bieumau2Update');
        Route::patch('/thanhvien/{year}/{id}/bieu/3', 'ThanhVienController@bieumau3Update');
        Route::patch('/thanhvien/{year}/{id}/bieu/4', 'ThanhVienController@bieumau4Update');
        Route::patch('/thanhvien/{year}/{id}/bieu/5', 'ThanhVienController@bieumau5Update');
        Route::patch('/thanhvien/{year}/{id}/bieu/6', 'ThanhVienController@bieumau6Update');

        Route::get('/tkkhth', 'TkkhthController@index')->name('tkkhth.index');
        Route::get('/tkkhth/{year}/bieu/{id}', 'TkkhthController@edit')->name('tkkhth.edit');
        Route::get('/tkkhth/show/{year}/bieu/{id}', 'TkkhthController@show')->name('tkkhth.show');
        Route::patch('/tkkhth/{year}/bieu/{id}', 'TkkhthController@update')->name('tkkhth.update');
        Route::get('/generate/tonghopbieu{type}/{year}', 'TkkhthController@printBieu');
        Route::post('/tkkhth/{year}/{type}/bieushow/{check}', 'TkkhthController@checkBieu');
        Route::get('/tkcs', 'TkcsController@index')->name('tkcs.index');
        Route::get('/tkcs/{year}', 'TkcsController@year')->name('tkcs.donvi');
        Route::get('/tkcs/duyet/{id}/{year}', 'TkcsController@bieumauDuyet')->name('tkcs.duyet');
        Route::get('/tkcs/boduyet/{id}/{year}', 'TkcsController@bieumauboDuyet')->name('tkcs.boduyet');
        Route::get('/tkcs/donvis', 'TkcsController@donviIndex')->name('tkcs.donviIndex');

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

        Route::get('/category','CategoryController@index')->name('category.danhsach');
        Route::get('/category/create', 'CategoryController@create')->name('category.create');
        Route::post('/category', 'CategoryController@store')->name('category.store');
        Route::get('/category/{id}/edit', 'CategoryController@edit')->name('category.edit');
        Route::patch('/category/{id}', 'CategoryController@update')->name('category.update');
        Route::delete('/category/{id}', 'CategoryController@destroy')->name('category.destroy');

        Route::get('/banner','BannerController@index')->name('banner.danhsach');
        Route::get('/banner/create', 'BannerController@create')->name('banner.create');
        Route::post('/banner', 'BannerController@store')->name('banner.store');
        Route::get('/banner/{id}/edit', 'BannerController@edit')->name('banner.edit');
        Route::patch('/banner/{id}', 'BannerController@update')->name('banner.update');
        Route::delete('/banner/{id}', 'BannerController@destroy')->name('banner.destroy');
    });
});
