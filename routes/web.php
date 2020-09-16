<?php

use Illuminate\Support\Facades\Route;
use App\Exports\ToeicScaleExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Str;
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

// Auth::routes();
Route::group([
    'prefix' => 'student',
    'as'=>'student.',
    'middleware' => ['web','auth'],
    'namespace'=>'Student'
], function () {
    Route::get('/','StudentHomeController@index');
    
    Route::group(['prefix' => 'fulltest','as'=>'fulltest.'], function() {
        Route::get('/','StudentFullTestController@index')->name('index');
        Route::get('/{slug}','StudentFullTestController@show')->name('show');
        Route::post('/store','StudentFullTestController@store')->name('store');
    });
    
});
Route::group([
    'prefix' => 'admin',
    'as'=>'admin.',
    'middleware' => ['web','auth'],
    'namespace'=>'Admin'
], function () {
    Route::get('/','AdminHomeController@index');
    // Route::resource('/fulltest','AdminFullTestController');
    // Route::resource('/advisory','AdminAdvisoryController');
    // Route::resource('/toeicscale','AdminToeicScaleController');
    Route::resource('/blog','AdminBlogController');
    Route::resource('/category','AdminCategoryController');
    // Route::group(['prefix' => 'toeicscale'], function () {
    //     Route::post('import', 'AdminToeicScaleController@import');
    // });
    Route::group(['prefix' => 'blog','as'=>'blog.'], function() {
        Route::get('/{slug}','AdminBlogController@show')->name('show');
        Route::get('/{slug}/edit','AdminBlogController@edit')->name('edit');
    });
    
});
Route::group(['prefix' => '/','as'=>'user.'], function () {
    Route::get('','HomeController@index')->name('index');
    Route::get('ve-fast-track','HomeController@about')->name('about');
    
    Route::get('lien-he','HomeController@contact')->name('contact');
    Route::get('khoa-hoc','HomeController@course')->name('course');
    Route::get('tu-van','HomeController@course')->name('course');
    Route::get('dang-nhap','Auth\LoginController@getLogin');
    Route::post('dang-nhap','Auth\LoginController@postLogin')->name('login');
    Route::group(['prefix' => 'test'], function() {
        Route::get('/', 'UserTestController@index');
        Route::post('/submit', 'UserTestController@submit');
    });
    Route::group(['prefix' => 'blog','as'=>'blog.'], function() {
        Route::get('/', 'FrBlogController@index');
        Route::get('/{slug}','FrBlogController@show')->name('show');
        // Route::post('/submit', 'UserTestController@submit');
    });
    Route::get('category/{slug}','FrBlogController@category')->name('category');
    Route::get('/{slug}','FrProgramController@index')->name('program');
});
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/excel', function () {
    return Excel::download(new ToeicScaleExport(),'Book1.xlsx');
});
Route::get('file-manager', function () {
    return view('file-manager');
});
Route::get('slug', function () {
    echo Str::slug('Practice Full Test Toeic Reading-Listening 2');
});
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});


Route::get('/mail', function(){
    return view('mail');
});
Route::post('/mail', 'HomeController@sendMail');
Route::get('demo',function(){
echo "testtttt";
});