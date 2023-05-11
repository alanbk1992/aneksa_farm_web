<?php 

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class Products extends Controller
{

	public function index()
	{
		
		return view('products/index');

	}

	public function fragment_products()
	{
		
		
		return view('products/fragments/fragment_products');
		
	}

	public function load_products_lazada()
	{
		
		
		return view('products/view/load_products_lazada');
		
	}
	 
		public function add_product()
	{
		
		return view('products/add_product');
		//return view('products/add_product');
		
	}


	
	//--------------------------------------------------------------------

}
