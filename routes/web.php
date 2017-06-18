<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('hospital', 'HospitalController@index');


//Route::get('/', function () {
//    return view('test');
//});

Route::group(['prefix' => 'admin'], function () {
    Route::group(['prefix' => 'users'], function () {
        Route::get('add', 'UserController@addUser');

        Route::get('edit', 'UserController@editUser');

        Route::get('list', 'UserController@getListUser');
    });
});

Route::group(['prefix' => 'patient'], function () {

    Route::get('profile', function () {
        return view('patient.profile.profile');
    });

    Route::get('medicalHistory', function () {
        return view('patient.medicalHistory.history');
    });
});

Route::group(['prefix' => 'manager'], function () {
    Route::group(['prefix' => 'hospital'], function () {
        Route::get('list', function () {
            return view('manager.hospital.list');
        });
        Route::get('add', function () {
            return view('manager.hospital.add');
        });
        Route::get('update', function () {
            return view('manager.hospital.update');
        });
    });
});

Route::group(['prefix' => 'hospital'], function () {
    Route::group(['prefix' => 'medicalRecord'], function () {
        Route::get('list', 'MedicalController@index');

        Route::post('them-{benh}', 'MedicalController@create');

        Route::post('sua-{id}', 'MedicalController@update');

        Route::get('xoa/{id}', 'MedicalController@delete');

        Route::get('suaBenhAn-{id}', 'MedicalController@suaBenhAn');

        Route::get('themBenhAn-{benh}', 'MedicalController@themBenhAn');

        Route::get('xoaBenhAn-{id}', 'MedicalController@xoaBenhAn');


//        Route::get('chonLoaiBenh', function () {
//            return view('hospital.medicalrecord.chonLoaiBenh');
//        });
//        Route::get('khamSoBoLaoPhoi-{id}', 'MedicalController@getInfo');
//
//        Route::get('chuanDoanLaoPhoi-{id}', 'MedicalController@chuanDoan');


    });
});
