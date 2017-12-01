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
Route::post('/admin/boletines_generales_editar1', 'adminController@boletines_generales_editar1');
Route::post('/admin/boletines_generales_crear', 'adminController@boletines_generales_crear');
Route::post('/admin/boletines_generales_editar2', 'adminController@boletines_generales_editar2');
Route::get('/admin/boletines_generales_eliminar/{id?}', 'adminController@boletines_generales_eliminar');

Route::get('/admin/capacitaciones', 'adminController@capacitaciones');
Route::post('/admin/capacitaciones_editar1', 'adminController@capacitaciones_editar1');

Route::get('/admin/comunicados-oficiales', 'adminController@comunicados_oficiales');
Route::post('/admin/comunicados_oficiales_editar1', 'adminController@comunicados_oficiales_editar1');
Route::post('/admin/comunicados_oficiales_crear', 'adminController@comunicados_oficiales_crear');
Route::post('/admin/comunicados_oficiales_editar2', 'adminController@comunicados_oficiales_editar2');
Route::get('/admin/comunicados_oficiales_eliminar/{id?}', 'adminController@comunicados_oficiales_eliminar');

Route::get('/admin/contactanos', 'adminController@contactanos');
Route::post('/admin/contactanos_editar1', 'adminController@contactanos_editar1');
Route::post('/admin/contactanos_editar2', 'adminController@contactanos_editar2');

Route::get('/admin/contenidos-sindicales', 'adminController@contenidos_sindicales');
Route::post('/admin/contenidos_sindicales_editar1', 'adminController@contenidos_sindicales_editar1');
Route::post('/admin/contenidos_sindicales_crear', 'adminController@contenidos_sindicales_crear');
Route::post('/admin/contenidos_sindicales_editar2', 'adminController@contenidos_sindicales_editar2');
Route::get('/admin/contenidos_sindicales_eliminar/{id?}', 'adminController@contenidos_sindicales_eliminar');

Route::get('/admin/documentos-oficiales', 'adminController@documentos_oficiales');
Route::post('/admin/documentos_oficiales_editar1', 'adminController@documentos_oficiales_editar1');
Route::post('/admin/documentos_oficiales_crear', 'adminController@documentos_oficiales_crear');
Route::post('/admin/documentos_oficiales_editar2', 'adminController@documentos_oficiales_editar2');
Route::get('/admin/documentos_oficiales_eliminar/{id?}', 'adminController@documentos_oficiales_eliminar');


Route::get('/admin/enlaces-interes', 'adminController@enlaces_interes');
Route::post('/admin/enlaces_interes_editar', 'adminController@enlaces_interes_editar');
Route::post('/admin/enlaces_interes_crear', 'adminController@enlaces_interes_crear');
Route::post('/admin/enlaces_interes_editar1', 'adminController@enlaces_interes_editar1');
Route::get('/admin/enlaces_interes_eliminar/{id?}', 'adminController@enlaces_interes_eliminar');

Route::get('/admin/galeria', 'adminController@galerias');
Route::post('/admin/galerias_editar1', 'adminController@galerias_editar1');
Route::post('/admin/galerias_crear', 'adminController@galerias_crear');
Route::post('/admin/galerias_editar', 'adminController@galerias_editar');
Route::get('/admin/galerias_eliminar/{id?}', 'adminController@galerias_eliminar');

Route::get('/admin/inicio', 'adminController@inicio');
Route::get('/admin/nosotros', 'adminController@nosotros');
Route::get('/admin/nuestros-afiliados', 'adminController@nuestros_afiliados');

Route::get('/admin/preguntas-frecuentes', 'adminController@preguntas_frecuentes');
Route::post('/admin/preguntas_frecuentes_editar1', 'adminController@preguntas_frecuentes_editar1');
Route::post('/admin/preguntas_frecuentes_crear', 'adminController@preguntas_frecuentes_crear');
Route::post('/admin/preguntas_frecuentes_editar', 'adminController@preguntas_frecuentes_editar');
Route::get('/admin/preguntas_frecuentes_eliminar/{id?}', 'adminController@preguntas_frecuentes_eliminar');

Route::get('/admin/videos', 'adminController@videos');
Route::post('/admin/videos_editar1', 'adminController@videos_editar1');
Route::post('/admin/videos_crear', 'adminController@videos_crear');
Route::post('/admin/videos_editar', 'adminController@videos_editar');
Route::get('/admin/videos_eliminar/{id?}', 'adminController@videos_eliminar');

//USUARIO
Route::get('contactanos', 'userController@contactanos');
Route::get('preguntas-frecuentes', 'userController@preguntas_frecuentes');
Route::get('videos', 'userController@videos');
Route::get('galeria', 'userController@galeria');
Route::get('documentos-oficiales', 'userController@documentos_oficiales');
Route::get('contenido-sindical', 'userController@contenido_sindical');
Route::get('comunicados-oficiales', 'userController@comunicados_oficiales');
Route::get('boletines-generales', 'userController@boletines_generales');
