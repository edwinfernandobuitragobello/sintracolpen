<?php

namespace App\Http\Controllers;

use App\Contactenos;
use App\Preguntas_frecuentes;
use App\Preguntas_frecuentes1s;
use App\Enlaces_interes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    // TODO SOBRE CONTACTENOS
    public function contactanos(){
    	$contactanos = Contactenos::find(1);
    	$enlaces_interes = Enlaces_interes::find(1);
    	return view('user.contactanos', compact('contactanos','enlaces_interes'));
    }
    // TODO SOBRE PREGUNTAS FRECUENTES
    public function preguntas_frecuentes(){
    	$contactanos = Contactenos::find(1);
    	$preguntas_frecuentes = Preguntas_frecuentes::find(1);
    	$preguntas_frecuentes1s = Preguntas_frecuentes1s::paginate(5);
    	$enlaces_interes = Enlaces_interes::find(1);
    	return view('user.preguntas-frecuentes', compact('contactanos','preguntas_frecuentes','preguntas_frecuentes1s','enlaces_interes'));
    }
}
