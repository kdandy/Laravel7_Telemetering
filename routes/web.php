<?php

use Illuminate\Support\Facades\Route;

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

Route::get('login', 'Login\IndexController@index')->name('login');
Route::post('login/submit', 'Login\IndexController@submit')->name('login.submit');
Route::get('logout', 'Login\IndexController@logout')->name('logout');

Route::middleware(['auth'])->group(function(){
    // Route::get('/', function () {
    //     return view('index');
    // });
    
    // Landing Page
    Route::get('admin', 'Index\IndexController@index')->name('index');

    // Forecast
    Route::get('forecast', 'Forecast\IndexController@index')->name('forecast');

    // Monitoring
    Route::get('node1', 'Node1\IndexController@index')->name('node1');
    Route::get('node1/cetak_pdf', 'Node1\IndexController@cetak_pdf')->name('node1.cetak_pdf');
    Route::get('node2', 'Node2\IndexController@index')->name('node2');
    Route::get('node2/cetak_pdf', 'Node2\IndexController@cetak_pdf')->name('node2.cetak_pdf');
    Route::get('node3', 'Node3\IndexController@index')->name('node3');
    Route::get('node3/cetak_pdf', 'Node3\IndexController@cetak_pdf')->name('node3.cetak_pdf');

    // Backup Data
    Route::get('tele1', 'Tele1History\IndexController@index')->name('tele1');
    Route::get('tele1/cetak_pdf', 'Tele1History\IndexController@cetak_pdf')->name('tele1.cetak_pdf');
    Route::get('tele2', 'Tele2History\IndexController@index')->name('tele2');
    Route::get('tele2/cetak_pdf', 'Tele2History\IndexController@cetak_pdf')->name('tele2.cetak_pdf');
    Route::get('tele3', 'Tele3History\IndexController@index')->name('tele3');
    Route::get('tele3/cetak_pdf', 'Tele3History\IndexController@cetak_pdf')->name('tele3.cetak_pdf');
    
    // Visualisasi Grafik Data
    Route::get('visual1', 'Visual1\IndexController@index')->name('visual1');
    Route::get('visual2', 'Visual2\IndexController@index')->name('visual2');
    
    // Admin CRUD
    Route::get('user', 'User\IndexController@index')->name('user');
    Route::get('user/tambah', 'User\CreateController@index')->name('user.create');
    Route::post('user/tambah', 'User\CreateController@submit')->name('user.submit');
    Route::get('user/sunting/{id}', 'User\UpdateController@index')->name('user.edit');
    Route::patch('user/sunting/{id}', 'User\UpdateController@update')->name('user.update');
    Route::get('user/hapus/{id}','User\DeleteController@delete')->name('user.delete');
    Route::get('user/cetak_pdf', 'User\IndexController@cetak_pdf')->name('user.cetak_pdf');
});

Route::get('/', 'Client_side\IndexController@index')->name('index');
Route::get('device1', 'Client_side\Device1Controller@index')->name('device1');
Route::get('device2', 'Client_side\Device2Controller@index')->name('device2');
Route::get('device3', 'Client_side\Device3Controller@index')->name('device3');
Route::get('monitoringCuaca', 'Client_side\MonitoringCuacaController@index')->name('monitoringCuaca');

// Node 1 Visual Data Client Side
Route::get('iklim1', 'Client_side\Iklim1Controller@index')->name('iklim1');
Route::get('kualitas1', 'Client_side\Kualitas1Controller@index')->name('kualitas1');
Route::get('angin1', 'Client_side\Angin1Controller@index')->name('angin1');

// Node 2 Visual Data Client Side
Route::get('iklim2', 'Client_side\Iklim2Controller@index')->name('iklim2');
Route::get('kualitas2', 'Client_side\Kualitas2Controller@index')->name('kualitas2');
Route::get('angin2', 'Client_side\Angin2Controller@index')->name('angin2');

// Ext
Route::get('biopori', 'Client_side\BioporiController@index')->name('biopori');
Route::get('hidroponik', 'Client_side\HidroponikController@index')->name('hidroponik');
Route::get('kewirausahaan', 'Client_side\KewirausahaanController@index')->name('kewirausahaan');
Route::get('matchingfund', 'Client_side\MatchingFundController@index')->name('matchingfund');
Route::get('tentangTele', 'Client_side\TentangController@index')->name('tentangTele');