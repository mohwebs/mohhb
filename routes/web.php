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
    return redirect('/entreprise');
});
Route::get('/entreprise', function () {
    return view('entreprise');
})->name('entreprise');

//route pour lentreprise
Route::get('entreprise/{id}/edit','Entreprise\EntrepriseController@edit');
Route::put('entreprise/{id}','Entreprise\EntrepriseController@update');
Route::get('entreprise/grid','FrontOffice\EntrepriseController@indexgrid');
Route::get('entreprise/list','FrontOffice\EntrepriseController@indexlist');

Route::get('ent/{slug}','FrontOffice\EntrepriseController@show');




//route pour les offres commerciale
Route::get('entreprise/{slug}/offre/commerciales/create','Entreprise\OffreCommercialeController@create');
Route::post('entreprise/{slug}/offre/commerciales','Entreprise\OffreCommercialeController@store');

//Route::post('entreprise/{slugent}/offre/commerciales/{slugoffre}','FrontOffice\OffreController@showOffreCommerciale');

Route::get('entreprise/{slugent}/offre/commerciales/{slugoffre}',[
    'as' => 'entHelp', 'uses' => 'FrontOffice\OffreController@showOffreCommerciale']);






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::prefix('admin')->group(function(){
    Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/admin', 'AdminController@index')->name('admin');

    Route::get('/logout','Auth\AdminLoginController@logout')->name('admin.logout');


});

Route::prefix('entreprise')->group(function(){
    Route::get('/login','Auth\EntrepriseLoginController@showLoginForm')->name('entreprise.login');
    Route::post('/login','Auth\EntrepriseLoginController@login')->name('entreprise.login.submit');
    //Route::get('/', 'Entreprise\EntrepriseController@index')->name('entreprise');
    Route::get('/logout','Auth\EntrepriseLoginController@logout')->name('entreprise.logout');


});
