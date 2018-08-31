<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hacker;

class HackersController extends Controller
{
    public function select() 
    {
    	$hackers = Hacker::all();
    	return view('home', compact("hackers"));
    }

    public function insert(Request $request) 
    {
    	$datos_hacker = $request->all();
    	$datos_hacker["edad"] = intval($datos_hacker["edad"]);
    	$datos_hacker["confirmado"] = boolval($datos_hacker["confirmado"]);
		
		$hacker = Hacker::create($datos_hacker);
		
		return $hacker->id;
    }

    public function delete($id) 
    {
    	$hacker = Hacker::find($id);
		$hacker->delete();
    }

    public function updateConfirmado($id, $value) 
    {
    	$hacker = Hacker::find($id);
    	$hacker->confirmado = $value;
		$hacker->save();
    }
}
