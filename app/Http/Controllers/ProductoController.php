<?php namespace Inventario\Http\Controllers;

class ProductoController extends Controller
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
		return 'mostrando productos de Area';
	}
	
	public function getCrearProducto()
	{
		return 'Formulario Agregar producto';
	}

	public function postCrearProducto()
	{
		return 'almacenar producto';
	}


	public function getActualizarProducto()
	{
		return 'Formulario Actualizar producto';
	}

	public function postActualizarProducto()
	{
		return 'Actualizar producto';
	}


	public function getEliminarProducto()
	{
		return 'Formulario Eliminar producto';
	}

	public function postEliminarProducto()
	{
		return 'Eliminar producto';
	}
}
