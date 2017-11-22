<?php

namespace App\Http\Controllers;
use App\Contactenos;
use App\Preguntas_frecuentes;
use App\Preguntas_frecuentes1s;
use App\Enlaces_interes;
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
    public function capacitaciones(){
    	return view('admin.admin-capacitaciones');
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
    public function documentos_oficiales(){
    	return view('admin.admin-documentos-oficiales');
    }
    public function enlaces_interes(){
    	$enlaces_interes = Enlaces_interes::find(1);
    	return view('admin.admin-enlaces-interes',compact('enlaces_interes'));
    }
    public function enlaces_interes_editar(Request $request){
    	$enlaces_interes = Enlaces_interes::find(1);
        $enlaces_interes->titulo_enlaces_interes = $request->titulo_enlaces_interes;
        $enlaces_interes->save();
    	return redirect()->back()->with('success', 'Actualizado con exito');
    }
    public function galeria(){
    	return view('admin.admin-galeria');
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
    	//eliminar categoria
        $preguntas_frecuentes = Preguntas_frecuentes1s::find($id);
		$preguntas_frecuentes->delete();
        return redirect()->back()->with('success', 'Creado con exito');
    }
    public function videos(){
    	return view('admin.admin-videos');
    }
}
