<?php

namespace App\Http\Controllers;

use App\Contactenos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    // TODO SOBRE CONTACTENOS
    public function contactanos(){
    	$contactanos = Contactenos::find('1');
    	return view('user.contactanos', compact('contactanos'));
    }
}
