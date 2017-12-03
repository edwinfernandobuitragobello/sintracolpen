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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    // TODO SOBRE CONTACTENOS
    public function contactanos(){
    	$contactanos = Contactenos::find(1);
    	$enlaces_interes = Enlaces_interes::find(1);
    	$enlaces_interes1s = Enlaces_interes1s::get();
        $capacitaciones = capacitaciones::find('1');
    	return view('user.contactanos', compact('contactanos','enlaces_interes','enlaces_interes1s','capacitaciones'));
    }
    // TODO SOBRE PREGUNTAS FRECUENTES
    public function preguntas_frecuentes(){
    	$contactanos = Contactenos::find(1);
    	$preguntas_frecuentes = Preguntas_frecuentes::find(1);
    	$preguntas_frecuentes1s = Preguntas_frecuentes1s::paginate(5);
    	$enlaces_interes = Enlaces_interes::find(1);
    	$enlaces_interes1s = Enlaces_interes1s::get();
        $capacitaciones = capacitaciones::find('1');
    	return view('user.preguntas-frecuentes', compact('contactanos','preguntas_frecuentes','preguntas_frecuentes1s','enlaces_interes','enlaces_interes1s','capacitaciones'));
    }
    // TODO SOBRE VIDEOS
    public function videos(){
    	$contactanos = Contactenos::find(1);
    	$enlaces_interes = Enlaces_interes::find(1);
    	$enlaces_interes1s = Enlaces_interes1s::get();
    	$videos = Videos::find('1');
    	$videos1s = Videos1s::paginate(6);
        $capacitaciones = capacitaciones::find('1');
    	return view('user.videos', compact('contactanos','enlaces_interes','enlaces_interes1s','videos','videos1s','capacitaciones'));
    }
    // TODO SOBRE GALERIAS
    public function galeria(){
    	$contactanos = Contactenos::find(1);
    	$enlaces_interes = Enlaces_interes::find(1);
    	$enlaces_interes1s = Enlaces_interes1s::get();
    	$galerias = Galerias::find('1');
    	$galerias1s = Galerias1s::paginate(9);
        $capacitaciones = capacitaciones::find('1');
    	return view('user.galeria', compact('contactanos','enlaces_interes','enlaces_interes1s','galerias','galerias1s','capacitaciones'));
    }
    // TODO SOBRE documentos-oficiales
    public function documentos_oficiales(){
        $contactanos = Contactenos::find(1);
        $enlaces_interes = Enlaces_interes::find(1);
        $enlaces_interes1s = Enlaces_interes1s::get();
        $capacitaciones = capacitaciones::find(1);
        $documentos_oficiales = documentos_oficiales::find(1);
        $documentos_oficiales1s = documentos_oficiales1s::paginate(6);
        return view('user.documentos-oficiales', compact('contactanos','enlaces_interes','enlaces_interes1s','documentos_oficiales','documentos_oficiales1s','capacitaciones'));
    }
    // TODO SOBRE CONTENIDO SINDICAL
    public function contenido_sindical(){
        $contactanos = Contactenos::find(1);
        $enlaces_interes = Enlaces_interes::find(1);
        $enlaces_interes1s = Enlaces_interes1s::get();
        $capacitaciones = capacitaciones::find(1);
        $contenidos_sindicales = contenidos_sindicales::find(1);
        $contenidos_sindicales1s = contenidos_sindicales1s::paginate(6);
        return view('user.contenido-sindical', compact('contactanos','enlaces_interes','enlaces_interes1s','contenidos_sindicales','contenidos_sindicales1s','capacitaciones'));
    }
    // TODO SOBRE CONTENIDO SINDICAL
    public function comunicados_oficiales(){
        $contactanos = Contactenos::find(1);
        $enlaces_interes = Enlaces_interes::find(1);
        $enlaces_interes1s = Enlaces_interes1s::get();
        $capacitaciones = capacitaciones::find(1);
        $comunicados_oficiales = comunicados_oficiales::find(1);
        $comunicados_oficiales1s = comunicados_oficiales1s::paginate(6);
        return view('user.comunicados-oficiales', compact('contactanos','enlaces_interes','enlaces_interes1s','comunicados_oficiales','comunicados_oficiales1s','capacitaciones'));
    }
    // TODO SOBRE CONTENIDO SINDICAL
    public function boletines_generales(){
        $contactanos = Contactenos::find(1);
        $enlaces_interes = Enlaces_interes::find(1);
        $enlaces_interes1s = Enlaces_interes1s::get();
        $capacitaciones = capacitaciones::find(1);
        $boletines_generales = boletines_generales::find(1);
        $boletines_generales1s = boletines_generales1s::paginate(6);
        return view('user.boletines-generales', compact('contactanos','enlaces_interes','enlaces_interes1s','boletines_generales','boletines_generales1s','capacitaciones'));
    }
    // TODO SOBRE NUESTROS AFILIADOS
    public function nuestros_afiliados(){
        $contactanos = Contactenos::find(1);
        $enlaces_interes = Enlaces_interes::find(1);
        $enlaces_interes1s = Enlaces_interes1s::get();
        $capacitaciones = capacitaciones::find(1);
        $nuestros_afiliados = nuestros_afiliados::find(1);
        $nuestros_afiliados1s = nuestros_afiliados1s::get();
        return view('user.nuestros-afiliados', compact('contactanos','enlaces_interes','enlaces_interes1s','nuestros_afiliados','nuestros_afiliados1s','capacitaciones'));
    }
    // TODO SOBRE AFILIATE YA
    public function afiliate_ya(){
        $contactanos = Contactenos::find(1);
        $enlaces_interes = Enlaces_interes::find(1);
        $enlaces_interes1s = Enlaces_interes1s::get();
        $capacitaciones = capacitaciones::find(1);
        $afiliate_yas = afiliate_yas::find(1);
        $afiliate_yas1s = afiliate_yas1s::find(1);
        return view('user.afiliate-ya', compact('contactanos','enlaces_interes','enlaces_interes1s','afiliate_yas','afiliate_yas1s','capacitaciones'));
    }
    // TODO SOBRE AFILIATE YA
    public function nosotros(){
        $contactanos = Contactenos::find(1);
        $enlaces_interes = Enlaces_interes::find(1);
        $enlaces_interes1s = Enlaces_interes1s::get();
        $capacitaciones = capacitaciones::find(1);
        $nosotros = nosotros::find(1);
        $nosotros1s = nosotros1s::find(1);
        $nosotros2s = nosotros2s::find(1);
        $nosotros3s = nosotros3s::find(1);
        $nosotros4s = nosotros4s::find(1);
        $nosotros5s = nosotros5s::get();
        $nosotros6s = nosotros6s::find(1);
        $nosotros7s = nosotros7s::get();
        return view('user.nosotros', compact('contactanos','enlaces_interes','enlaces_interes1s','nosotros','nosotros1s','nosotros2s','nosotros3s','nosotros4s','nosotros5s','nosotros6s','nosotros7s','capacitaciones'));
    }
}
