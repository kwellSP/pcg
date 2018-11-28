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
Auth::routes();
//rotas da pagina inicial
Route::get('/','HomeController@index');
Route::get('/home', 'HomeController@index');

//rota para pegar erros terrestre e aereo na pagina inicial
Route::get('/home/erros', 'HomeController@errosHmtl');

//rota para as paginas de prévias
Route::get('/previas/terrestre', 'PreviasController@terrestre');
Route::get('/previas/aereo', 'PreviasController@aereo');

//dados da datatable nas prévias
Route::get('/previas/terrestreTable', 'PreviasController@terrestreTable');
Route::get('/previas/aereoTable', 'PreviasController@aereoTable')->name('aereo');

/*//dados do ranking,
Route::get('/previas/ranking', 'PreviasController@ranking');
//dados da tabela de  ranking,
Route::get('/previas/getRanking', 'PreviasController@getRanking');*/


/*//dados do farol, porém ainda não funcional
Route::get('/previas/farol', 'PreviasController@farolGerencial');
*/

