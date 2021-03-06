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
use App\contenidos_sindicales;
use App\contenidos_sindicales1s;
use App\comunicados_oficiales;
use App\comunicados_oficiales1s;
use App\boletines_generales;
use App\boletines_generales1s;
use App\nuestros_afiliados;
use App\nuestros_afiliados1s;
use App\afiliate_yas;
use App\afiliate_yas1s;
use App\nosotros;
use App\nosotros1s;
use App\nosotros2s;
use App\nosotros3s;
use App\nosotros4s;
use App\nosotros5s;
use App\nosotros6s;
use App\nosotros7s;
use App\nosotros8s;
use App\nosotros9s;
use App\nosotros10s;
use App\nosotros11s;
use App\inicios;
use App\inicios1s;
use App\inicios2s;
use App\inicios3s;
use App\usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use File;

class AdminController extends Controller
{
    public function login(){
        return view('admin.admin_login');
    }
    public function logeo(Request $request){
        $posibles = usuarios::where('email',$request->email)->where('password',$request->password)->get();
        if (count($posibles)==0) {
            return redirect('/admin/login');
        }else{
            session_start();
            $_SESSION['id_login'] = $posibles[0]['id'];
            return redirect('/admin/inicio');
        }
    }
    public function logeo_fin(Request $request){
        session_start();
        session_destroy();
        return redirect('/admin/login');
    }
    //TODO SOBRE AFILIATE YA
    public function afiliate_ya(){
        session_start();
        if ((!isset($_SESSION['id_login']))) {
            return redirect('/admin/login');
        }
        $afiliate_yas = afiliate_yas::find(1);
        $afiliate_yas1s = afiliate_yas1s::find(1);
    	return view('admin.admin-afiliate-ya',compact('afiliate_yas','afiliate_yas1s'));
    }
    public function afiliate_ya_editar1(Request $request){
        $afiliate_ya = afiliate_yas::find(1);
        $afiliate_ya->titulo_afiliate_ya = $request->titulo_afiliate_ya;
        $afiliate_ya->descripcion_afiliate_ya = $request->descripcion_afiliate_ya;
        $afiliate_ya->save();
        return redirect()->back()->with('success', 'Actualizado con exito');
    }
    public function afiliate_ya_editar2(Request $request){
        $afiliate_ya = afiliate_yas1s::find(1);
        if($request->hasFile('imagen1_afiliate_ya')){
            $filename = 'imagen1_afiliate_ya'.str_random(40).".".$request->file('imagen1_afiliate_ya')->getClientOriginalExtension();
            $request->file('imagen1_afiliate_ya')->move('uploads/', $filename);
            File::delete('uploads/'.$afiliate_ya->imagen1_afiliate_ya);
            $afiliate_ya->imagen1_afiliate_ya = $filename;
        }
        if($request->hasFile('imagen2_afiliate_ya')){
            $filename = 'imagen2_afiliate_ya'.str_random(40).".".$request->file('imagen2_afiliate_ya')->getClientOriginalExtension();
            $request->file('imagen2_afiliate_ya')->move('uploads/', $filename);
            File::delete('uploads/'.$afiliate_ya->imagen2_afiliate_ya);
            $afiliate_ya->imagen2_afiliate_ya = $filename;
        }
        if($request->hasFile('pfd_afiliate_ya')){
            $filename = 'pfd_afiliate_ya'.str_random(30).".".$request->file('pfd_afiliate_ya')->getClientOriginalExtension();
            $request->file('pfd_afiliate_ya')->move('uploads/', $filename);
             File::delete('uploads/'.$afiliate_ya->pfd_afiliate_ya);
            $afiliate_ya->pfd_afiliate_ya = $filename;
        }
        $afiliate_ya->correo_afiliate_ya = $request->correo_afiliate_ya;
        $afiliate_ya->save();
        return redirect()->back()->with('success', 'Creado con exito');
    }
    //TODO SOBRE BOLETINES GENERALES
    public function boletines_generales(){
        session_start();
        if ((!isset($_SESSION['id_login']))) {
            return redirect('/admin/login');
        }
        $boletines_generales = boletines_generales::find(1);
        $boletines_generales1s = boletines_generales1s::get();
    	return view('admin.admin-boletines-generales',compact('boletines_generales','boletines_generales1s'));
    }
    public function boletines_generales_editar1(Request $request){
        $boletines_generales = boletines_generales::find(1);
        $boletines_generales->titulo_boletines_generales = $request->titulo_boletines_generales;
        $boletines_generales->descripcion_boletines_generales = $request->descripcion_boletines_generales;
        $boletines_generales->save();
        return redirect()->back()->with('success', 'Actualizado con exito');
    }
    public function boletines_generales_crear(Request $request){
        $boletines_generales = new boletines_generales1s();
        if($request->hasFile('imagen_boletines_generales')){
            $filename = 'imagen_boletines_generales'.str_random(40).".".$request->file('imagen_boletines_generales')->getClientOriginalExtension();
            $request->file('imagen_boletines_generales')->move('uploads/', $filename);
            File::delete('uploads/'.$boletines_generales->imagen_boletines_generales);
            $boletines_generales->imagen_boletines_generales = $filename;
        }else{
            return redirect()->back()->with('success', 'No fue creado con exito');
        }
        $boletines_generales->titulo_boletines_generales = $request->titulo_boletines_generales;
        $boletines_generales->descripcion_boletines_generales = $request->descripcion_boletines_generales;
        $boletines_generales->autor_boletines_generales = $request->autor_boletines_generales;
        $boletines_generales->ano_boletines_generales = $request->ano_boletines_generales;
        if($request->hasFile('pdf_boletines_generales')){
            $filename = 'pdf_boletines_generales'.str_random(30).".".$request->file('pdf_boletines_generales')->getClientOriginalExtension();
            $request->file('pdf_boletines_generales')->move('uploads/', $filename);
            $boletines_generales->pdf_boletines_generales = $filename;
        }
        $boletines_generales->save();
        return redirect()->back()->with('success', 'Creado con exito');
    }
    public function boletines_generales_editar2(Request $request){
        $boletines_generales = boletines_generales1s::find($request->id);
        if($request->hasFile('imagen_boletines_generales')){
            $filename = 'imagen_boletines_generales'.str_random(40).".".$request->file('imagen_boletines_generales')->getClientOriginalExtension();
            $request->file('imagen_boletines_generales')->move('uploads/', $filename);
            File::delete('uploads/'.$boletines_generales->imagen_boletines_generales);
            $boletines_generales->imagen_boletines_generales = $filename;
        }
        $boletines_generales->titulo_boletines_generales = $request->titulo_boletines_generales;
        $boletines_generales->descripcion_boletines_generales = $request->descripcion_boletines_generales;
        $boletines_generales->autor_boletines_generales = $request->autor_boletines_generales;
        $boletines_generales->ano_boletines_generales = $request->ano_boletines_generales;
        if($request->hasFile('pdf_boletines_generales')){
            $filename = 'pdf_boletines_generales'.str_random(30).".".$request->file('pdf_boletines_generales')->getClientOriginalExtension();
            $request->file('pdf_boletines_generales')->move('uploads/', $filename);
             File::delete('uploads/'.$boletines_generales->pdf_boletines_generales);
            $boletines_generales->pdf_boletines_generales = $filename;
        }
        $boletines_generales->save();
        return redirect()->back()->with('success', 'Creado con exito');
    }
    public function boletines_generales_eliminar($id){
        //eliminar categoria
        $boletines_generales1s = boletines_generales1s::find($id);
        File::delete('uploads/'.$boletines_generales1s->imagen_boletines_generales);
        File::delete('uploads/'.$boletines_generales1s->pdf_boletines_generales);
        $boletines_generales1s->delete();
        return redirect()->back()->with('success', 'Eliminado con exito');
    }
    //TODO SOBRE CAPACITACIONES
    public function capacitaciones(){
        session_start();
        if ((!isset($_SESSION['id_login']))) {
            return redirect('/admin/login');
        }
        $capacitaciones = capacitaciones::find('1');
    	return view('admin.admin-capacitaciones', compact('capacitaciones'));
    }
    public function capacitaciones_editar1(Request $request){
        $capacitaciones = capacitaciones::find('1');
        $capacitaciones->url_capacitaciones = $request->url_capacitaciones;
        $capacitaciones->save();
        return redirect()->back()->with('success', 'Actualizado con exito');
    }
    //TODO SOBRE COMUNICADOS OFICIALES
    public function comunicados_oficiales(){
        session_start();
        if ((!isset($_SESSION['id_login']))) {
            return redirect('/admin/login');
        }
        $comunicados_oficiales = comunicados_oficiales::find(1);
        $comunicados_oficiales1s = comunicados_oficiales1s::get();
    	return view('admin.admin-comunicados-oficiales',compact('comunicados_oficiales','comunicados_oficiales1s'));
    }
    public function comunicados_oficiales_editar1(Request $request){
        $comunicados_oficiales = comunicados_oficiales::find(1);
        $comunicados_oficiales->titulo_comunicados_oficiales = $request->titulo_comunicados_oficiales;
        $comunicados_oficiales->descripcion_comunicados_oficiales = $request->descripcion_comunicados_oficiales;
        $comunicados_oficiales->save();
        return redirect()->back()->with('success', 'Actualizado con exito');
    }
    public function comunicados_oficiales_crear(Request $request){
        $comunicados_oficiales = new comunicados_oficiales1s();
        if($request->hasFile('imagen_comunicados_oficiales')){
            $filename = 'imagen_comunicados_oficiales'.str_random(40).".".$request->file('imagen_comunicados_oficiales')->getClientOriginalExtension();
            $request->file('imagen_comunicados_oficiales')->move('uploads/', $filename);
            File::delete('uploads/'.$comunicados_oficiales->imagen_comunicados_oficiales);
            $comunicados_oficiales->imagen_comunicados_oficiales = $filename;
        }else{
            return redirect()->back()->with('success', 'No fue creado con exito');
        }
        $comunicados_oficiales->titulo_comunicados_oficiales = $request->titulo_comunicados_oficiales;
        $comunicados_oficiales->descripcion_comunicados_oficiales = $request->descripcion_comunicados_oficiales;
        $comunicados_oficiales->autor_comunicados_oficiales = $request->autor_comunicados_oficiales;
        $comunicados_oficiales->ano_comunicados_oficiales = $request->ano_comunicados_oficiales;
        if($request->hasFile('pdf_comunicados_oficiales')){
            $filename = 'pdf_comunicados_oficiales'.str_random(30).".".$request->file('pdf_comunicados_oficiales')->getClientOriginalExtension();
            $request->file('pdf_comunicados_oficiales')->move('uploads/', $filename);
            $comunicados_oficiales->pdf_comunicados_oficiales = $filename;
        }
        $comunicados_oficiales->save();
        return redirect()->back()->with('success', 'Creado con exito');
    }
    public function comunicados_oficiales_editar2(Request $request){
        $comunicados_oficiales = comunicados_oficiales1s::find($request->id);
        if($request->hasFile('imagen_comunicados_oficiales')){
            $filename = 'imagen_comunicados_oficiales'.str_random(40).".".$request->file('imagen_comunicados_oficiales')->getClientOriginalExtension();
            $request->file('imagen_comunicados_oficiales')->move('uploads/', $filename);
            File::delete('uploads/'.$comunicados_oficiales->imagen_comunicados_oficiales);
            $comunicados_oficiales->imagen_comunicados_oficiales = $filename;
        }
        $comunicados_oficiales->titulo_comunicados_oficiales = $request->titulo_comunicados_oficiales;
        $comunicados_oficiales->descripcion_comunicados_oficiales = $request->descripcion_comunicados_oficiales;
        $comunicados_oficiales->autor_comunicados_oficiales = $request->autor_comunicados_oficiales;
        $comunicados_oficiales->ano_comunicados_oficiales = $request->ano_comunicados_oficiales;
        if($request->hasFile('pdf_comunicados_oficiales')){
            $filename = 'pdf_comunicados_oficiales'.str_random(30).".".$request->file('pdf_comunicados_oficiales')->getClientOriginalExtension();
            $request->file('pdf_comunicados_oficiales')->move('uploads/', $filename);
             File::delete('uploads/'.$comunicados_oficiales->pdf_comunicados_oficiales);
            $comunicados_oficiales->pdf_comunicados_oficiales = $filename;
        }
        $comunicados_oficiales->save();
        return redirect()->back()->with('success', 'Creado con exito');
    }
    public function comunicados_oficiales_eliminar($id){
        //eliminar categoria
        $comunicados_oficiales1s = comunicados_oficiales1s::find($id);
        File::delete('uploads/'.$comunicados_oficiales1s->imagen_comunicados_oficiales);
        File::delete('uploads/'.$comunicados_oficiales1s->pdf_comunicados_oficiales);
        $comunicados_oficiales1s->delete();
        return redirect()->back()->with('success', 'Eliminado con exito');
    }
    // TODO SOBRE CONTACTENOS
    public function contactanos(){
        session_start();
        if ((!isset($_SESSION['id_login']))) {
            return redirect('/admin/login');
        }
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
        session_start();
        if ((!isset($_SESSION['id_login']))) {
            return redirect('/admin/login');
        }
        $contenidos_sindicales = contenidos_sindicales::find(1);
        $contenidos_sindicales1s = contenidos_sindicales1s::get();
    	return view('admin.admin-contenidos-sindicales',compact('contenidos_sindicales','contenidos_sindicales1s'));
    }
    public function contenidos_sindicales_editar1(Request $request){
        $contenidos_sindicales = contenidos_sindicales::find(1);
        $contenidos_sindicales->titulo_contenidos_sindicales = $request->titulo_contenidos_sindicales;
        $contenidos_sindicales->descripcion_contenidos_sindicales = $request->descripcion_contenidos_sindicales;
        $contenidos_sindicales->save();
        return redirect()->back()->with('success', 'Actualizado con exito');
    }
    public function contenidos_sindicales_crear(Request $request){
        $contenidos_sindicales = new contenidos_sindicales1s();
        if($request->hasFile('imagen_contenidos_sindicales')){
            $filename = 'imagen_contenidos_sindicales'.str_random(40).".".$request->file('imagen_contenidos_sindicales')->getClientOriginalExtension();
            $request->file('imagen_contenidos_sindicales')->move('uploads/', $filename);
            File::delete('uploads/'.$contenidos_sindicales->imagen_contenidos_sindicales);
            $contenidos_sindicales->imagen_contenidos_sindicales = $filename;
        }else{
            return redirect()->back()->with('success', 'No fue creado con exito');
        }
        $contenidos_sindicales->titulo_contenidos_sindicales = $request->titulo_contenidos_sindicales;
        $contenidos_sindicales->descripcion_contenidos_sindicales = $request->descripcion_contenidos_sindicales;
        $contenidos_sindicales->autor_contenidos_sindicales = $request->autor_contenidos_sindicales;
        $contenidos_sindicales->ano_contenidos_sindicales = $request->ano_contenidos_sindicales;
        if($request->hasFile('pdf_contenidos_sindicales')){
            $filename = 'pdf_contenidos_sindicales'.str_random(30).".".$request->file('pdf_contenidos_sindicales')->getClientOriginalExtension();
            $request->file('pdf_contenidos_sindicales')->move('uploads/', $filename);
            $contenidos_sindicales->pdf_contenidos_sindicales = $filename;
        }
        $contenidos_sindicales->save();
        return redirect()->back()->with('success', 'Creado con exito');
    }
    public function contenidos_sindicales_editar2(Request $request){
        $contenidos_sindicales = contenidos_sindicales1s::find($request->id);
        if($request->hasFile('imagen_contenidos_sindicales')){
            $filename = 'imagen_contenidos_sindicales'.str_random(40).".".$request->file('imagen_contenidos_sindicales')->getClientOriginalExtension();
            $request->file('imagen_contenidos_sindicales')->move('uploads/', $filename);
            File::delete('uploads/'.$contenidos_sindicales->imagen_contenidos_sindicales);
            $contenidos_sindicales->imagen_contenidos_sindicales = $filename;
        }
        $contenidos_sindicales->titulo_contenidos_sindicales = $request->titulo_contenidos_sindicales;
        $contenidos_sindicales->descripcion_contenidos_sindicales = $request->descripcion_contenidos_sindicales;
        $contenidos_sindicales->autor_contenidos_sindicales = $request->autor_contenidos_sindicales;
        $contenidos_sindicales->ano_contenidos_sindicales = $request->ano_contenidos_sindicales;
        if($request->hasFile('pdf_contenidos_sindicales')){
            $filename = 'pdf_contenidos_sindicales'.str_random(30).".".$request->file('pdf_contenidos_sindicales')->getClientOriginalExtension();
            $request->file('pdf_contenidos_sindicales')->move('uploads/', $filename);
             File::delete('uploads/'.$contenidos_sindicales->pdf_contenidos_sindicales);
            $contenidos_sindicales->pdf_contenidos_sindicales = $filename;
        }
        $contenidos_sindicales->save();
        return redirect()->back()->with('success', 'Creado con exito');
    }
    public function contenidos_sindicales_eliminar($id){
        //eliminar categoria
        $contenidos_sindicales1s = contenidos_sindicales1s::find($id);
        File::delete('uploads/'.$contenidos_sindicales1s->imagen_contenidos_sindicales);
        File::delete('uploads/'.$contenidos_sindicales1s->pdf_contenidos_sindicales);
        $contenidos_sindicales1s->delete();
        return redirect()->back()->with('success', 'Eliminado con exito');
    }
    //TODO SOBRE DOCUMENTOS OFICIALES
    public function documentos_oficiales(){
        session_start();
        if ((!isset($_SESSION['id_login']))) {
            return redirect('/admin/login');
        }
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
        session_start();
        if ((!isset($_SESSION['id_login']))) {
            return redirect('/admin/login');
        }
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
        session_start();
        if ((!isset($_SESSION['id_login']))) {
            return redirect('/admin/login');
        }
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
        session_start();
        if ((!isset($_SESSION['id_login']))) {
            return redirect('/admin/login');
        }
        $inicios = inicios::get();
        $inicios_item1 = inicios1s::find(1);
        $inicios_item2 = inicios1s::find(2);
        $inicios_item3 = inicios1s::find(3);
        $inicios_primera = inicios2s::find(1);
        $inicios_segunda = inicios3s::find(1);
    	return view('admin.admin-inicio',compact('inicios','inicios_item1','inicios_item2','inicios_item3','inicios_primera','inicios_segunda'));
    }
    public function inicio_editar1(Request $request){
        $inicio = inicios::find($request->id);
        $inicio->titulo_banners_inicio = $request->titulo_banners_inicio;
        $inicio->descripcion_banners_inicio = $request->descripcion_banners_inicio;
        $inicio->link_banners_inicio = $request->link_banners_inicio;
        if($request->hasFile('imagen_banners_inicio')){
            $filename = 'imagen_banners_inicio'.str_random(40).".".$request->file('imagen_banners_inicio')->getClientOriginalExtension();
            $request->file('imagen_banners_inicio')->move('uploads/', $filename);
            File::delete('uploads/'.$inicio->imagen_banners_inicio);
            $inicio->imagen_banners_inicio = $filename;
        }
        $inicio->save();
        return redirect()->back()->with('success', 'Actualizado con exito');
    }
    public function inicio_editar_item1(Request $request){
        $inicio = inicios1s::find($request->id);
        $inicio->titulo_items_inicio = $request->titulo_items_inicio;
        $inicio->descripcion_items_inicio = $request->descripcion_items_inicio;
        if($request->hasFile('imagen_items_inicio')){
            $filename = 'imagen_items_inicio'.str_random(40).".".$request->file('imagen_items_inicio')->getClientOriginalExtension();
            $request->file('imagen_items_inicio')->move('uploads/', $filename);
            File::delete('uploads/'.$inicio->imagen_items_inicio);
            $inicio->imagen_items_inicio = $filename;
        }
        $inicio->save();
        return redirect()->back()->with('success', 'Actualizado con exito');
    }
    public function inicio_primera1(Request $request){
        $inicio = inicios2s::find(1);
        $inicio->titulo_primera_inicio = $request->titulo_primera_inicio;
        $inicio->descripcion_primera_inicio = $request->descripcion_primera_inicio;
        if($request->hasFile('imagen_primera_inicio')){
            $filename = 'imagen_primera_inicio'.str_random(40).".".$request->file('imagen_primera_inicio')->getClientOriginalExtension();
            $request->file('imagen_primera_inicio')->move('uploads/', $filename);
            File::delete('uploads/'.$inicio->imagen_primera_inicio);
            $inicio->imagen_primera_inicio = $filename;
        }
        $inicio->save();
        return redirect()->back()->with('success', 'Actualizado con exito');
    }
    public function inicio_segunda1(Request $request){
        $inicio = inicios3s::find(1);
        $inicio->titulo_segunda_inicio = $request->titulo_segunda_inicio;
        $inicio->descripcion_segunda_inicio = $request->descripcion_segunda_inicio;
        $inicio->save();
        return redirect()->back()->with('success', 'Actualizado con exito');
    }
    //TODO SOBRE NOSOTROS
    public function nosotros(){
        session_start();
        if ((!isset($_SESSION['id_login']))) {
            return redirect('/admin/login');
        }
    	$nosotros = nosotros::find(1);
        $nosotros1s = nosotros1s::find(1);
        $nosotros2s = nosotros2s::find(1);
        $nosotros3s = nosotros3s::find(1);
        $nosotros4s = nosotros4s::find(1);
        $nosotros5s = nosotros5s::get();
        $nosotros6s = nosotros6s::find(1);
        $nosotros7s = nosotros7s::get();
        $nosotros8s = nosotros8s::find(1);
        $nosotros9s = nosotros9s::find(1);
        $nosotros10s = nosotros10s::find(1);
        $nosotros11s = nosotros11s::find(1);
        return view('admin.admin-nosotros',compact('nosotros','nosotros1s','nosotros2s','nosotros3s','nosotros4s','nosotros5s','nosotros6s','nosotros7s','nosotros8s','nosotros9s','nosotros10s','nosotros11s'));
    }
    public function nosotros_editar1(Request $request){
        $nosotros = nosotros::find(1);
        $nosotros->titulo_nosotros = $request->titulo_nosotros;
        $nosotros->descripcion_nosotros = $request->descripcion_nosotros;
        $nosotros->save();
        return redirect()->back()->with('success', 'Actualizado con exito');
    }
    public function nosotros_editar2(Request $request){
        $nosotros = nosotros1s::find(1);
        if($request->hasFile('imagen1_nosotros')){
            $filename = 'imagen1_nosotros'.str_random(40).".".$request->file('imagen1_nosotros')->getClientOriginalExtension();
            $request->file('imagen1_nosotros')->move('uploads/', $filename);
            File::delete('uploads/'.$nosotros->imagen1_nosotros);
            $nosotros->imagen1_nosotros = $filename;
        }
        if($request->hasFile('imagen2_nosotros')){
            $filename = 'imagen2_nosotros'.str_random(40).".".$request->file('imagen2_nosotros')->getClientOriginalExtension();
            $request->file('imagen2_nosotros')->move('uploads/', $filename);
            File::delete('uploads/'.$nosotros->imagen2_nosotros);
            $nosotros->imagen2_nosotros = $filename;
        }
        if($request->hasFile('imagen3_nosotros')){
            $filename = 'imagen3_nosotros'.str_random(40).".".$request->file('imagen3_nosotros')->getClientOriginalExtension();
            $request->file('imagen3_nosotros')->move('uploads/', $filename);
            File::delete('uploads/'.$nosotros->imagen3_nosotros);
            $nosotros->imagen3_nosotros = $filename;
        }
        $nosotros->descripcion1_nosotros = $request->descripcion1_nosotros;
        $nosotros->descripcion2_nosotros = $request->descripcion2_nosotros;
        $nosotros->save();
        return redirect()->back()->with('success', 'Actualizado con exito');
    }
    public function nosotros_editar3(Request $request){
        $nosotros = nosotros3s::find(1);
        $nosotros->mision_nosotros = $request->mision_nosotros;
        $nosotros->save();
        return redirect()->back()->with('success', 'Actualizado con exito');
    }
    public function nosotros_editar4(Request $request){
        $nosotros = nosotros3s::find(1);
        $nosotros->vision_nosotros = $request->vision_nosotros;
        $nosotros->save();
        return redirect()->back()->with('success', 'Actualizado con exito');
    }
    public function nosotros_editar5(Request $request){
        $nosotros = nosotros4s::find(1);
        $nosotros->principios_nosotros = $request->principios_nosotros;
        $nosotros->save();
        return redirect()->back()->with('success', 'Actualizado con exito');
    }
    public function nosotros_editar6(Request $request){
        $nosotros = nosotros5s::find($request->id);
        $nosotros->nombre_principios_nosotros = $request->nombre_principios_nosotros;
        $nosotros->descripcion_principios_nosotros = $request->descripcion_principios_nosotros;
        if($request->hasFile('icono_principios_nosotros')){
            $filename = 'icono_principios_nosotros'.str_random(40).".".$request->file('icono_principios_nosotros')->getClientOriginalExtension();
            $request->file('icono_principios_nosotros')->move('uploads/', $filename);
            File::delete('uploads/'.$nosotros->icono_principios_nosotros);
            $nosotros->icono_principios_nosotros = $filename;
        }
        $nosotros->save();
        return redirect()->back()->with('success', 'Actualizado con exito');
    }
    public function nosotros_editar7(Request $request){
        $nosotros = nosotros6s::find(1);
        $nosotros->valores_nosotros = $request->valores_nosotros;
        $nosotros->save();
        return redirect()->back()->with('success', 'Actualizado con exito');
    }
    public function nosotros_editar8(Request $request){
        $nosotros = nosotros7s::find($request->id);
        $nosotros->nombre_valores_nosotros = $request->nombre_valores_nosotros;
        $nosotros->descripcion_valores_nosotros = $request->descripcion_valores_nosotros;
        if($request->hasFile('icono_valores_nosotros')){
            $filename = 'icono_valores_nosotros'.str_random(40).".".$request->file('icono_valores_nosotros')->getClientOriginalExtension();
            $request->file('icono_valores_nosotros')->move('uploads/', $filename);
            File::delete('uploads/'.$nosotros->icono_valores_nosotros);
            $nosotros->icono_valores_nosotros = $filename;
        }
        $nosotros->save();
        return redirect()->back()->with('success', 'Actualizado con exito');
    }
    public function nosotros_editar9(Request $request){
        $nosotros = nosotros8s::find(1);
        $nosotros->titulo_organismos_nosotros = $request->titulo_organismos_nosotros;
        $nosotros->descripcion_organismos_nosotros = $request->descripcion_organismos_nosotros;
        if($request->hasFile('icono_organismos_nosotros')){
            $filename = 'icono_organismos_nosotros'.str_random(40).".".$request->file('icono_organismos_nosotros')->getClientOriginalExtension();
            $request->file('icono_organismos_nosotros')->move('uploads/', $filename);
            File::delete('uploads/'.$nosotros->icono_organismos_nosotros);
            $nosotros->icono_organismos_nosotros = $filename;
        }
        if($request->hasFile('imagen_organismos_nosotros')){
            $filename = 'imagen_organismos_nosotros'.str_random(40).".".$request->file('imagen_organismos_nosotros')->getClientOriginalExtension();
            $request->file('imagen_organismos_nosotros')->move('uploads/', $filename);
            File::delete('uploads/'.$nosotros->imagen_organismos_nosotros);
            $nosotros->imagen_organismos_nosotros = $filename;
        }
        $nosotros->save();
        return redirect()->back()->with('success', 'Actualizado con exito');
    }
    public function nosotros_editar10(Request $request){
        $nosotros = nosotros9s::find(1);
        $nosotros->titulo_junta_nosotros = $request->titulo_junta_nosotros;
        $nosotros->descripcion_junta_nosotros = $request->descripcion_junta_nosotros;
        if($request->hasFile('icono_junta_nosotros')){
            $filename = 'icono_junta_nosotros'.str_random(40).".".$request->file('icono_junta_nosotros')->getClientOriginalExtension();
            $request->file('icono_junta_nosotros')->move('uploads/', $filename);
            File::delete('uploads/'.$nosotros->icono_junta_nosotros);
            $nosotros->icono_junta_nosotros = $filename;
        }
        if($request->hasFile('imagen_junta_nosotros')){
            $filename = 'imagen_junta_nosotros'.str_random(40).".".$request->file('imagen_junta_nosotros')->getClientOriginalExtension();
            $request->file('imagen_junta_nosotros')->move('uploads/', $filename);
            File::delete('uploads/'.$nosotros->imagen_junta_nosotros);
            $nosotros->imagen_junta_nosotros = $filename;
        }
        $nosotros->save();
        return redirect()->back()->with('success', 'Actualizado con exito');
    }
    public function nosotros_editar11(Request $request){
        $nosotros = nosotros10s::find(1);
        $nosotros->titulo_comite_nosotros = $request->titulo_comite_nosotros;
        $nosotros->descripcion_comite_nosotros = $request->descripcion_comite_nosotros;
        if($request->hasFile('icono_comite_nosotros')){
            $filename = 'icono_comite_nosotros'.str_random(40).".".$request->file('icono_comite_nosotros')->getClientOriginalExtension();
            $request->file('icono_comite_nosotros')->move('uploads/', $filename);
            File::delete('uploads/'.$nosotros->icono_comite_nosotros);
            $nosotros->icono_comite_nosotros = $filename;
        }
        if($request->hasFile('imagen_comite_nosotros')){
            $filename = 'imagen_comite_nosotros'.str_random(40).".".$request->file('imagen_comite_nosotros')->getClientOriginalExtension();
            $request->file('imagen_comite_nosotros')->move('uploads/', $filename);
            File::delete('uploads/'.$nosotros->imagen_comite_nosotros);
            $nosotros->imagen_comite_nosotros = $filename;
        }
        $nosotros->save();
        return redirect()->back()->with('success', 'Actualizado con exito');
    }
    public function nosotros_editar12(Request $request){
        $nosotros = nosotros11s::find(1);
        $nosotros->titulo_bogota_nosotros = $request->titulo_bogota_nosotros;
        $nosotros->descripcion_bogota_nosotros = $request->descripcion_bogota_nosotros;
        if($request->hasFile('icono_bogota_nosotros')){
            $filename = 'icono_bogota_nosotros'.str_random(40).".".$request->file('icono_bogota_nosotros')->getClientOriginalExtension();
            $request->file('icono_bogota_nosotros')->move('uploads/', $filename);
            File::delete('uploads/'.$nosotros->icono_bogota_nosotros);
            $nosotros->icono_bogota_nosotros = $filename;
        }
        if($request->hasFile('imagen_bogota_nosotros')){
            $filename = 'imagen_bogota_nosotros'.str_random(40).".".$request->file('imagen_bogota_nosotros')->getClientOriginalExtension();
            $request->file('imagen_bogota_nosotros')->move('uploads/', $filename);
            File::delete('uploads/'.$nosotros->imagen_bogota_nosotros);
            $nosotros->imagen_bogota_nosotros = $filename;
        }
        $nosotros->save();
        return redirect()->back()->with('success', 'Actualizado con exito');
    }
    //TODO SOBRE NUESTROS AFILIADOS
    public function nuestros_afiliados(){
        session_start();
        if ((!isset($_SESSION['id_login']))) {
            return redirect('/admin/login');
        }
        $nuestros_afiliados = nuestros_afiliados::find('1');
        $nuestros_afiliados1s = nuestros_afiliados1s::get();
    	return view('admin.admin-nuestros-afiliados', compact('nuestros_afiliados','nuestros_afiliados1s'));
    }
    public function nuestros_afiliados_editar1(Request $request){
        $nuestros_afiliados = nuestros_afiliados::find(1);
        $nuestros_afiliados->titulo_nuestros_afiliados = $request->titulo_nuestros_afiliados;
        $nuestros_afiliados->descripcion_nuestros_afiliados = $request->descripcion_nuestros_afiliados;
        $nuestros_afiliados->save();
        return redirect()->back()->with('success', 'Actualizado con exito');
    }
    public function nuestros_afiliados_crear(Request $request){
        $nuestros_afiliados = new nuestros_afiliados1s();
        $nuestros_afiliados->afiliado_nuestros_afiliados = $request->afiliado_nuestros_afiliados;
        $nuestros_afiliados->cantidad_nuestros_afiliados = $request->cantidad_nuestros_afiliados;
        $nuestros_afiliados->latitud_nuestros_afiliados = $request->latitud_nuestros_afiliados;
        $nuestros_afiliados->longitud_nuestros_afiliados = $request->longitud_nuestros_afiliados;
        $nuestros_afiliados->save();
        return redirect()->back()->with('success', 'Creado con exito');
    }
    public function nuestros_afiliados_editar2(Request $request){
        $nuestros_afiliados = nuestros_afiliados1s::find($request->id);
        $nuestros_afiliados->afiliado_nuestros_afiliados = $request->afiliado_nuestros_afiliados;
        $nuestros_afiliados->cantidad_nuestros_afiliados = $request->cantidad_nuestros_afiliados;
        $nuestros_afiliados->latitud_nuestros_afiliados = $request->latitud_nuestros_afiliados;
        $nuestros_afiliados->longitud_nuestros_afiliados = $request->longitud_nuestros_afiliados;
        $nuestros_afiliados->save();
        return redirect()->back()->with('success', 'Creado con exito');
    }
    public function nuestros_afiliados_eliminar($id){
        $nuestros_afiliados = nuestros_afiliados1s::find($id);
        $nuestros_afiliados->delete();
        return redirect()->back()->with('success', 'Eliminado con exito');
    }
    //TODO SOBRE PREGUNTAS FRECUENTES
    public function preguntas_frecuentes(){
        session_start();
        if ((!isset($_SESSION['id_login']))) {
            return redirect('/admin/login');
        }
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
        session_start();
        if ((!isset($_SESSION['id_login']))) {
            return redirect('/admin/login');
        }
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
