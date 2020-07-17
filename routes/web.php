<?php

use Illuminate\Support\Facades\Route;
use App\Model\Question;
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

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => 'admin'], function () {
    
});


Auth::routes();
Route::group([
    'prefix' => 'admin',
    'as'=>'admin.',
    'middleware' => ['web','auth'],
    'namespace'=>'Admin'
], function () {
    Route::get('/','AdminHomeController@index');
    Route::resource('test', 'AdminTestController')->except(['create']);
    Route::group(['prefix' => 'tests'], function () {
        Route::post('create/auto/content','AdminTestController@content_auto');
        Route::get('content/{id}','AdminTestController@content');
        Route::get('cancel_test/{id}','AdminTestController@cancelTest');
        Route::get('config/{id}','AdminTestController@config');
        Route::get('matrix','AdminTestController@matrix')->name('test.matrix');
        Route::post('created','AdminTestController@created')->name('test.created');
        Route::post('created/auto','AdminTestController@createdAuto')->name('test.created.auto');
        Route::post('created/getQuestion','AdminTestController@getQuestion')->name('test.created.auto');
    }); 
    Route::resource('matrix', 'AdminMatrixController');
    Route::group(['prefix' => 'matrix'], function () {
        Route::post('getTopic','AdminMatrixController@getTopic');
        Route::post('/edit/getTopic','AdminMatrixController@getTopic');
        Route::post('topic_matrix','AdminMatrixController@checkbox');
        Route::post('/destroy_some','AdminMatrixController@destroySome');
	    Route::post('/destroy_all','AdminMatrixController@destroyAll');
    // Route::group(['prefix' => 'matrix'], function() {
    });
});
Route::group(['prefix' => '/','as'=>'user.'], function () {
    Route::get('','HomeController@index');
    Route::group(['prefix' => 'test'], function() {
        Route::get('/', 'UserTestController@index');
        Route::post('/submit', 'UserTestController@submit');
    });
    

});
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('admin/test/vuong',function(){
    dd('pk');
});

?>
