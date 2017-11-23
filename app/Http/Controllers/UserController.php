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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    // TODO SOBRE CONTACTENOS
    public function contactanos(){
    	$contactanos = Contactenos::find(1);
    	$enlaces_interes = Enlaces_interes::find(1);
    	$enlaces_interes1s = Enlaces_interes1s::get();
    	return view('user.contactanos', compact('contactanos','enlaces_interes','enlaces_interes1s'));
    }
    // TODO SOBRE PREGUNTAS FRECUENTES
    public function preguntas_frecuentes(){
    	$contactanos = Contactenos::find(1);
    	$preguntas_frecuentes = Preguntas_frecuentes::find(1);
    	$preguntas_frecuentes1s = Preguntas_frecuentes1s::paginate(5);
    	$enlaces_interes = Enlaces_interes::find(1);
    	$enlaces_interes1s = Enlaces_interes1s::get();
    	return view('user.preguntas-frecuentes', compact('contactanos','preguntas_frecuentes','preguntas_frecuentes1s','enlaces_interes','enlaces_interes1s'));
    }
    // TODO SOBRE VIDEOS
    public function videos(){
    	$contactanos = Contactenos::find(1);
    	$enlaces_interes = Enlaces_interes::find(1);
    	$enlaces_interes1s = Enlaces_interes1s::get();
    	$videos = Videos::find('1');
    	$videos1s = Videos1s::paginate(6);
    	return view('user.videos', compact('contactanos','enlaces_interes','enlaces_interes1s','videos','videos1s'));
    }
    // TODO SOBRE GALERIAS
    public function galeria(){
    	$contactanos = Contactenos::find(1);
    	$enlaces_interes = Enlaces_interes::find(1);
    	$enlaces_interes1s = Enlaces_interes1s::get();
    	$galerias = Galerias::find('1');
    	$galerias1s = Galerias1s::paginate(9);
    	return view('user.galeria', compact('contactanos','enlaces_interes','enlaces_interes1s','galerias','galerias1s'));
    }
}
