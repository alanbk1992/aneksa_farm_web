<?php 
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class purchases extends Controller
{
	public function index()
	{
		return view('purchases/index');

	}

	
			


// purchase_invoice
public function purchase_invoice ()
{
		
		return view('purchases/purchase_invoice/purchase_invoice');	
				
}
public function add_purchase_invoice ()
{
		
		return view('purchases/purchase_invoice/add_purchase_invoice');	
				
}

// deliveres
public function deliveres ()
{
		
		return view('purchases/deliveres');	
				
}

// purchase-orders
public function purchase_orders ()
{
		
		return view('purchases/purchase_orders/purchase_orders');	
				
}

public function add_purchase_order ()
{
		
		return view('purchases/purchase_orders/add_purchase_order');	
				
}

// quotes
public function quotes ()
{
		
		return view('purchases/quotes');	
				
}

public function load_suppliers()
	{
		
		return view('purchases/suppliers/view/load_suppliers');
		
		
	}
		


	
	


	
	


	
	//--------------------------------------------------------------------

}


