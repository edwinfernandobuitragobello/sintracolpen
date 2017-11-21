<?php

namespace App\Http\Controllers;
use App\Contactenos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    	return view('admin.admin-enlaces-interes');
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
    public function preguntas_frecuentes(){
    	return view('admin.admin-preguntas-frecuentes');
    }
    public function videos(){
    	return view('admin.admin-videos');
    }
}
