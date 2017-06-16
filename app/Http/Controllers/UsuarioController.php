<?php namespace Inventario\Http\Controllers;

class UsuarioController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

	/** 
	*
	*
	* @return Response
	*/
	public function getEditarPerfil()
	{
		return 'mostrando formulario';
	}

	public function postEditaarPerfil()
	{
		return 'generando actualizacion de perfil';
	}
}
	
