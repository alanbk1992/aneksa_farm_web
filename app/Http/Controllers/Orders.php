<?php 
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class Orders extends Controller
{

public function index()
	{
		return view('orders/index');

	}




public function load_pending()
	{
		
		
		return view('orders/view/load_pending');
		
	}

public function load_rts()
	{
		
		
		return view('orders/view/load_rts');
		
	}

	
	public function load_update()
{
	
	
	return view('orders/view/load_update');
	
}

	

public function load_ship()
{
	
	
	return view('orders/view/load_ship');
	
}



public function load_done()
	{
		
		
		return view('orders/view/load_done');
		
	}


	
public function load_filed()
{
	
	
	return view('orders/view/load_filed');
	
}


//Cashier
public function cashier()
	{
		
		
		return view('orders/cashier');
		
	}

//Return

public function return()
	{
		
		
		return view('orders/return');
		
	}

//label

	public function label()
	{
		
		
		return view('orders/label');
		
	}
	


	//--------------------------------------------------------------------

}
