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
//ADMINISTRADOR
Route::get('/admin/afiliate-ya', 'adminController@afiliate_ya');
Route::get('/admin/boletines-generales', 'adminController@boletines_generales');
Route::get('/admin/capacitaciones', 'adminController@capacitaciones');
Route::get('/admin/comunicados-oficiales', 'adminController@comunicados_oficiales');

Route::get('/admin/contactanos', 'adminController@contactanos');
Route::post('/admin/contactanos_editar1', 'adminController@contactanos_editar1');
Route::post('/admin/contactanos_editar2', 'adminController@contactanos_editar2');

Route::get('/admin/contenidos-sindicales', 'adminController@contenidos_sindicales');
Route::get('/admin/documentos-oficiales', 'adminController@documentos_oficiales');

Route::get('/admin/enlaces-interes', 'adminController@enlaces_interes');
Route::post('/admin/enlaces_interes_editar', 'adminController@enlaces_interes_editar');

Route::get('/admin/galeria', 'adminController@galeria');
Route::get('/admin/inicio', 'adminController@inicio');
Route::get('/admin/nosotros', 'adminController@nosotros');
Route::get('/admin/nuestros-afiliados', 'adminController@nuestros_afiliados');

Route::get('/admin/preguntas-frecuentes', 'adminController@preguntas_frecuentes');
Route::post('/admin/preguntas_frecuentes_editar1', 'adminController@preguntas_frecuentes_editar1');
Route::post('/admin/preguntas_frecuentes_crear', 'adminController@preguntas_frecuentes_crear');
Route::post('/admin/preguntas_frecuentes_editar', 'adminController@preguntas_frecuentes_editar');
Route::get('/admin/preguntas_frecuentes_eliminar/{id?}', 'adminController@preguntas_frecuentes_eliminar');

Route::get('/admin/videos', 'adminController@videos');

//USUARIO
Route::get('contactanos', 'userController@contactanos');
Route::get('preguntas-frecuentes', 'userController@preguntas_frecuentes');
