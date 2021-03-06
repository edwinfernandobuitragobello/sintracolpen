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
Route::get('/admin/login', 'adminController@login');
Route::post('/admin/logeo', 'adminController@logeo');
Route::get('/admin/logeo_fin', 'adminController@logeo_fin');

Route::get('/admin/afiliate-ya', 'adminController@afiliate_ya');
Route::post('/admin/afiliate_ya_editar1', 'adminController@afiliate_ya_editar1');
Route::post('/admin/afiliate_ya_editar2', 'adminController@afiliate_ya_editar2');
Route::get('/admin/afiliate_ya_eliminar/{id?}', 'adminController@afiliate_ya_eliminar');

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
Route::post('/admin/inicio_editar1', 'adminController@inicio_editar1');
Route::post('/admin/inicio_editar_item1', 'adminController@inicio_editar_item1');
Route::post('/admin/inicio_primera1', 'adminController@inicio_primera1');
Route::post('/admin/inicio_segunda1', 'adminController@inicio_segunda1');

Route::get('/admin/nosotros', 'adminController@nosotros');
Route::post('/admin/nosotros_editar1', 'adminController@nosotros_editar1');
Route::post('/admin/nosotros_editar2', 'adminController@nosotros_editar2');
Route::post('/admin/nosotros_editar3', 'adminController@nosotros_editar3');
Route::post('/admin/nosotros_editar4', 'adminController@nosotros_editar4');
Route::post('/admin/nosotros_editar5', 'adminController@nosotros_editar5');
Route::post('/admin/nosotros_editar6', 'adminController@nosotros_editar6');
Route::post('/admin/nosotros_editar7', 'adminController@nosotros_editar7');
Route::post('/admin/nosotros_editar8', 'adminController@nosotros_editar8');
Route::post('/admin/nosotros_editar9', 'adminController@nosotros_editar9');
Route::post('/admin/nosotros_editar10', 'adminController@nosotros_editar10');
Route::post('/admin/nosotros_editar11', 'adminController@nosotros_editar11');
Route::post('/admin/nosotros_editar12', 'adminController@nosotros_editar12');

Route::get('/admin/nuestros-afiliados', 'adminController@nuestros_afiliados');
Route::post('/admin/nuestros_afiliados_editar1', 'adminController@nuestros_afiliados_editar1');
Route::post('/admin/nuestros_afiliados_crear', 'adminController@nuestros_afiliados_crear');
Route::post('/admin/nuestros_afiliados_editar2', 'adminController@nuestros_afiliados_editar2');
Route::get('/admin/nuestros_afiliados_eliminar/{id?}', 'adminController@nuestros_afiliados_eliminar');

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
Route::get('nuestros-afiliados', 'userController@nuestros_afiliados');
Route::get('afiliate-ya', 'userController@afiliate_ya');
Route::get('nosotros', 'userController@nosotros');
Route::get('/', 'userController@inicio');
Route::post('/enviar_email','userController@enviar_email');


