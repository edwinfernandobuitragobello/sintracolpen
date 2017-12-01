<?php

namespace App\Http\Controllers;
use App\Contactenos;
use App\Preguntas_frecuentes;
use App\Preguntas_frecuentes1s;
use App\Enlaces_interes;
use App\Enlaces_interes1s;
use App\Videos;
use App\Videos1s;
use App\Galerias;
use App\Galerias1s;
use App\capacitaciones;
use App\documentos_oficiales;
use App\documentos_oficiales1s;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use File;

class AdminController extends Controller
{
    public function afiliate_ya(){
    	return view('admin.admin-afiliate-ya');
    }
    public function boletines_generales(){
    	return view('admin.admin-boletines-generales');
    }
    //TODO SOBRE CAPACITACIONES
    public function capacitaciones(){
        $capacitaciones = capacitaciones::find('1');
    	return view('admin.admin-capacitaciones', compact('capacitaciones'));
    }
    public function capacitaciones_editar1(Request $request){
        $capacitaciones = capacitaciones::find('1');
        $capacitaciones->url_capacitaciones = $request->url_capacitaciones;
        $capacitaciones->save();
        return redirect()->back()->with('success', 'Actualizado con exito');
    }

    public function comunicados_oficiales(){
    	return view('admin.admin-comunicados-oficiales');
    }
    // TODO SOBRE CONTACTENOS
    public function contactanos(){
    	$contactanos = Contactenos::find('1');
    	return view('admin.admin-contactanos', compact('contactanos'));
    }
    public function contactanos_editar1(Request $request){
    	$contactanos = Contactenos::find('1');
        $contactanos->titulo_contactenos = $request->titulo_contactenos;
        $contactanos->descripcion_contactenos = $request->descripcion_contactenos;
        $contactanos->save();
        return redirect()->back()->with('success', 'Actualizado con exito');
    }
    public function contactanos_editar2(Request $request){
    	$contactanos = Contactenos::find('1');
        $contactanos->texto_descriptivo_contactenos = $request->texto_descriptivo_contactenos;
        $contactanos->domicilio_principal_contactenos = $request->domicilio_principal_contactenos;
        $contactanos->oficina1_contactenos = $request->oficina1_contactenos;
        $contactanos->Notificaciones_contactenos = $request->Notificaciones_contactenos;
        $contactanos->oficina2_contactenos = $request->oficina2_contactenos;
        $contactanos->correo_contactenos = $request->correo_contactenos;
        $contactanos->telefono_contactenos = $request->telefono_contactenos;
        $contactanos->twitter_contactenos = $request->twitter_contactenos;
        $contactanos->instagram_contactenos = $request->instagram_contactenos;
        $contactanos->youtube_contactenos = $request->youtube_contactenos;
        $contactanos->save();
        return redirect()->back()->with('success', 'Actualizado con exito');
    }
    public function contenidos_sindicales(){
    	return view('admin.admin-contenidos-sindicales');
    }
    //TODO SOBRE SOCUMENTOS OFICIALES
    public function documentos_oficiales(){
        $documentos_oficiales = documentos_oficiales::find(1);
        $documentos_oficiales1s = documentos_oficiales1s::get();
    	return view('admin.admin-documentos-oficiales',compact('documentos_oficiales','documentos_oficiales1s'));
    }
    public function documentos_oficiales_editar1(Request $request){
        $documentos_oficiales = documentos_oficiales::find(1);
        $documentos_oficiales->titulo_documentos_oficiales = $request->titulo_documentos_oficiales;
        $documentos_oficiales->descripcion_documentos_oficiales = $request->descripcion_documentos_oficiales;
        $documentos_oficiales->save();
        return redirect()->back()->with('success', 'Actualizado con exito');
    }
    public function documentos_oficiales_crear(Request $request){
        $documentos_oficiales = new documentos_oficiales1s();
        if($request->hasFile('imagen_documentos_oficiales')){
            $filename = 'imagen_documentos_oficiales'.str_random(40).".".$request->file('imagen_documentos_oficiales')->getClientOriginalExtension();
            $request->file('imagen_documentos_oficiales')->move('uploads/', $filename);
            File::delete('uploads/'.$documentos_oficiales->imagen_documentos_oficiales);
            $documentos_oficiales->imagen_documentos_oficiales = $filename;
        }else{
            return redirect()->back()->with('success', 'No fue creado con exito');
        }
        $documentos_oficiales->titulo_documentos_oficiales = $request->titulo_documentos_oficiales;
        $documentos_oficiales->descripcion_documentos_oficiales = $request->descripcion_documentos_oficiales;
        $documentos_oficiales->autor_documentos_oficiales = $request->autor_documentos_oficiales;
        $documentos_oficiales->ano_documentos_oficiales = $request->ano_documentos_oficiales;
        if($request->hasFile('pdf_documentos_oficiales')){
            $filename = 'pdf_documentos_oficiales'.str_random(30).".".$request->file('pdf_documentos_oficiales')->getClientOriginalExtension();
            $request->file('pdf_documentos_oficiales')->move('uploads/', $filename);
            $documentos_oficiales->pdf_documentos_oficiales = $filename;
        }
        $documentos_oficiales->save();
        return redirect()->back()->with('success', 'Creado con exito');
    }
    public function documentos_oficiales_editar2(Request $request){
        $documentos_oficiales = documentos_oficiales1s::find($request->id);
        if($request->hasFile('imagen_documentos_oficiales')){
            $filename = 'imagen_documentos_oficiales'.str_random(40).".".$request->file('imagen_documentos_oficiales')->getClientOriginalExtension();
            $request->file('imagen_documentos_oficiales')->move('uploads/', $filename);
            File::delete('uploads/'.$documentos_oficiales->imagen_documentos_oficiales);
            $documentos_oficiales->imagen_documentos_oficiales = $filename;
        }
        $documentos_oficiales->titulo_documentos_oficiales = $request->titulo_documentos_oficiales;
        $documentos_oficiales->descripcion_documentos_oficiales = $request->descripcion_documentos_oficiales;
        $documentos_oficiales->autor_documentos_oficiales = $request->autor_documentos_oficiales;
        $documentos_oficiales->ano_documentos_oficiales = $request->ano_documentos_oficiales;
        if($request->hasFile('pdf_documentos_oficiales')){
            $filename = 'pdf_documentos_oficiales'.str_random(30).".".$request->file('pdf_documentos_oficiales')->getClientOriginalExtension();
            $request->file('pdf_documentos_oficiales')->move('uploads/', $filename);
             File::delete('uploads/'.$documentos_oficiales->pdf_documentos_oficiales);
            $documentos_oficiales->pdf_documentos_oficiales = $filename;
        }
        $documentos_oficiales->save();
        return redirect()->back()->with('success', 'Creado con exito');
    }
    public function documentos_oficiales_eliminar($id){
        //eliminar categoria
        $documentos_oficiales1s = documentos_oficiales1s::find($id);
        File::delete('uploads/'.$documentos_oficiales1s->imagen_documentos_oficiales);
        File::delete('uploads/'.$documentos_oficiales1s->pdf_documentos_oficiales);
        $documentos_oficiales1s->delete();
        return redirect()->back()->with('success', 'Eliminado con exito');
    }
    //TODO SOBRE ENLACES DE INTERES
    public function enlaces_interes(){
    	$enlaces_interes = Enlaces_interes::find(1);
    	$enlaces_interes1s = Enlaces_interes1s::get();
    	return view('admin.admin-enlaces-interes',compact('enlaces_interes','enlaces_interes1s'));
    }
    public function enlaces_interes_editar(Request $request){
    	$enlaces_interes = Enlaces_interes::find(1);
        $enlaces_interes->titulo_enlaces_interes = $request->titulo_enlaces_interes;
        $enlaces_interes->save();
    	return redirect()->back()->with('success', 'Actualizado con exito');
    }
    public function enlaces_interes_crear(Request $request){
    	$enlaces_interes1 = new Enlaces_interes1s();
    	if($request->hasFile('imagen_enlaces_interes')){
            $filename = 'imagen_enlaces_interes'.str_random(40).".".$request->file('imagen_enlaces_interes')->getClientOriginalExtension();
            $request->file('imagen_enlaces_interes')->move('uploads/', $filename);
            File::delete('uploads/'.$enlaces_interes1->imagen_enlaces_interes);
            $enlaces_interes1->imagen_enlaces_interes = $filename;
        }else{
        	return redirect()->back()->with('success', 'No fue creado con exito');
        }
        $enlaces_interes1->nombre_enlaces_interes = $request->nombre_enlaces_interes;
        $enlaces_interes1->enlace_enlaces_interes = $request->enlace_enlaces_interes;
        $enlaces_interes1->save();
        return redirect()->back()->with('success', 'Creado con exito');
    }
    public function enlaces_interes_editar1(Request $request){
    	$enlaces_interes1 = Enlaces_interes1s::find($request->id);
    	if($request->hasFile('imagen_enlaces_interes')){
            $filename = 'imagen_enlaces_interes'.str_random(40).".".$request->file('imagen_enlaces_interes')->getClientOriginalExtension();
            $request->file('imagen_enlaces_interes')->move('uploads/', $filename);
            File::delete('uploads/'.$enlaces_interes1->imagen_enlaces_interes);
            $enlaces_interes1->imagen_enlaces_interes = $filename;
        }
        $enlaces_interes1->nombre_enlaces_interes = $request->nombre_enlaces_interes;
        $enlaces_interes1->enlace_enlaces_interes = $request->enlace_enlaces_interes;
        $enlaces_interes1->save();
        return redirect()->back()->with('success', 'Actualizado con exito');
    }
    public function enlaces_interes_eliminar($id){
    	//eliminar categoria
        $enlaces_interes1 = Enlaces_interes1s::find($id);
		$enlaces_interes1->delete();
        return redirect()->back()->with('success', 'Eliminado con exito');
    }
    //TODO SOBRE GALERIAS
    public function galerias(){
    	$galerias = Galerias::find('1');
    	$galerias1s = Galerias1s::paginate(10);
    	return view('admin.admin-galeria',compact('galerias','galerias1s'));
    }
    public function galerias_editar1(Request $request){
    	$galerias = Galerias::find('1');
        $galerias->titulo_galerias = $request->titulo_galerias;
        $galerias->descripcion_galerias = $request->descripcion_galerias;
        $galerias->save();
        return redirect()->back()->with('success', 'Actualizado con exito');
    }
    public function galerias_crear(Request $request){
    	$galerias1 = new Galerias1s();
    	if($request->hasFile('imagen_galerias')){
            $filename = 'imagen_galerias'.str_random(40).".".$request->file('imagen_galerias')->getClientOriginalExtension();
            $request->file('imagen_galerias')->move('uploads/', $filename);
            File::delete('uploads/'.$galerias1->imagen_galerias);
            $galerias1->imagen_galerias = $filename;
        }else{
        	return redirect()->back()->with('success', 'No fue creado con exito');
        }
        $galerias1->nombre_galerias = $request->nombre_galerias;
        $galerias1->save();
        return redirect()->back()->with('success', 'Se creo con exito');
    }
    public function galerias_editar(Request $request){
    	$galerias1 = Galerias1s::find($request->id);
    	if($request->hasFile('imagen_galerias')){
            $filename = 'imagen_galerias'.str_random(40).".".$request->file('imagen_galerias')->getClientOriginalExtension();
            $request->file('imagen_galerias')->move('uploads/', $filename);
            File::delete('uploads/'.$galerias1->imagen_galerias);
            $galerias1->imagen_galerias = $filename;
        }
        $galerias1->nombre_galerias = $request->nombre_galerias;
        $galerias1->save();
        return redirect()->back()->with('success', 'Se creo con exito');
    }
    public function galerias_eliminar($id){
        $galerias1 = Galerias1s::find($id);
		$galerias1->delete();
        return redirect()->back()->with('success', 'Eliminado con exito');
    }
    public function inicio(){
    	return view('admin.admin-inicio');
    }
    public function nosotros(){
    	return view('admin.admin-nosotros');
    }
    public function nuestros_afiliados(){
    	return view('admin.admin-nuestros-afiliados');
    }
    //TODO SOBRE PREGUNTAS FRECUENTES
    public function preguntas_frecuentes(){
    	$preguntas_frecuentes = Preguntas_frecuentes::find('1');
    	$preguntas_frecuentes1s = Preguntas_frecuentes1s::get();
    	return view('admin.admin-preguntas-frecuentes', compact('preguntas_frecuentes','preguntas_frecuentes1s'));
    }
    public function preguntas_frecuentes_editar1(Request $request){
    	$preguntas_frecuentes = Preguntas_frecuentes::find('1');
        $preguntas_frecuentes->titulo_preguntas = $request->titulo_preguntas;
        $preguntas_frecuentes->descripcion_preguntas = $request->descripcion_preguntas;
        if($request->hasFile('imagen_preguntas')){
            $filename = 'imagen_preguntas'.str_random(40).".".$request->file('imagen_preguntas')->getClientOriginalExtension();
            $request->file('imagen_preguntas')->move('uploads/', $filename);
            File::delete('uploads/'.$preguntas_frecuentes->imagen_preguntas);
            $preguntas_frecuentes->imagen_preguntas = $filename;
        }
        $preguntas_frecuentes->save();
        return redirect()->back()->with('success', 'Actualizado con exito');
    }
    public function preguntas_frecuentes_crear(Request $request){
    	$preguntas_frecuentes = new Preguntas_frecuentes1s();
        $preguntas_frecuentes->pregunta_preguntas = $request->pregunta_preguntas;
        $preguntas_frecuentes->respuesta_preguntas = $request->respuesta_preguntas;
        $preguntas_frecuentes->save();
        return redirect()->back()->with('success', 'Creado con exito');
    }
    public function preguntas_frecuentes_editar(Request $request){
    	$preguntas_frecuentes = Preguntas_frecuentes1s::find($request->id);
        $preguntas_frecuentes->pregunta_preguntas = $request->pregunta_preguntas;
        $preguntas_frecuentes->respuesta_preguntas = $request->respuesta_preguntas;
        $preguntas_frecuentes->save();
        return redirect()->back()->with('success', 'Creado con exito');
    }
    public function preguntas_frecuentes_eliminar($id){
        $preguntas_frecuentes = Preguntas_frecuentes1s::find($id);
		$preguntas_frecuentes->delete();
        return redirect()->back()->with('success', 'Eliminado con exito');
    }
    //TODO SOBRE VIDEOS
    public function videos(){
    	$videos = Videos::find('1');
    	$videos1s = Videos1s::get();
    	return view('admin.admin-videos', compact('videos','videos1s'));
    }
    public function videos_editar1(Request $request){
    	$videos = Videos::find('1');
        $videos->titulo_videos = $request->titulo_videos;
        $videos->descripcion_videos = $request->descripcion_videos;
        $videos->save();
        return redirect()->back()->with('success', 'Actualizado con exito');
    }
    public function videos_crear(Request $request){
    	$videos1 = new Videos1s();
        $videos1->nombre_videos = $request->nombre_videos;
        $videos1->url_videos = $request->url_videos;
        $videos1->save();
        return redirect()->back()->with('success', 'Se creo con exito');
    }
    public function videos_editar(Request $request){
    	$videos1 = Videos1s::find($request->id);
        $videos1->nombre_videos = $request->nombre_videos;
        $videos1->url_videos = $request->url_videos;
        $videos1->save();
        return redirect()->back()->with('success', 'Actualizado con exito');
    }
    public function videos_eliminar($id){
        $videos1 = Videos1s::find($id);
		$videos1->delete();
        return redirect()->back()->with('success', 'Eliminado con exito');
    }
}
