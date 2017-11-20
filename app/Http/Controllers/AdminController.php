<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function contactanos(){
    	return view('admin.admin-contactanos');
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
