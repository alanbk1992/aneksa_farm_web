<?php 

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class Promo extends Controller
{
	public function index()
	{
		//return view('products/index');

	}

	public function discount()
	{
		
		
		return view('promo/discount');
		
    }
    
    public function combo()
	{
		
		
		return view('promo/combo');
		
	}

	//--------------------------------------------------------------------

}
