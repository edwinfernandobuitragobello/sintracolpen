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
Route::get('/admin/afiliate-ya', 'adminController@afiliate_ya');
Route::get('/admin/boletines-generales', 'adminController@boletines_generales');
Route::get('/admin/capacitaciones', 'adminController@capacitaciones');
Route::get('/admin/comunicados-oficiales', 'adminController@comunicados_oficiales');
Route::get('/admin/contactanos', 'adminController@contactanos');
Route::get('/admin/contenidos-sindicales', 'adminController@contenidos_sindicales');
Route::get('/admin/documentos-oficiales', 'adminController@documentos_oficiales');
Route::get('/admin/enlaces-interes', 'adminController@enlaces_interes');
Route::get('/admin/galeria', 'adminController@galeria');
Route::get('/admin/inicio', 'adminController@inicio');
Route::get('/admin/nosotros', 'adminController@nosotros');
Route::get('/admin/nuestros-afiliados', 'adminController@nuestros_afiliados');
Route::get('/admin/preguntas-frecuentes', 'adminController@preguntas_frecuentes');
Route::get('/admin/videos', 'adminController@videos');
