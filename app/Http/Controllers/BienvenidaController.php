<?php namespace Inventario\Http\Controllers;

class BienvenidaController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}
	
	public function getIndex()
	{
		return view('bienvenida');
	}

	public function missingMethod($parameters = array())
	{
		abort(404);
	}

}
