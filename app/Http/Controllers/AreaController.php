<?php namespace Inventario\Http\Controllers;

class AreaController extends Controller
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
	public function getIndex()
	{
		return 'mostrando Area de Usuario';
	}

	public function getCrearArea()
	{
		return 'Formulario Agregar Area';
	}

	public function postCrearArea()
	{
		return 'almacenar Area';
	}


	public function getActualizarArea()
	{
		return 'Formulario Actualizar Area';
	}

	public function postActualizarArea()
	{
		return 'Actualizar Area';
	}


	public function getEliminarArea()
	{
		return 'Formulario Eliminar Area';
	}

	public function postEliminarArea()
	{
		return 'Eliminar Area';
	}
}
