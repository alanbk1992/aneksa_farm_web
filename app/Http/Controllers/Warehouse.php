<?php 

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class Warehouse extends Controller
{
	public function index()
	{
		return view('warehouse/index');

	}

	//overview
	public function overview()
	{
		
		
		return view('warehouse/overview');
		
	}
	
	//item in
	public function item_in()
	{
		
		
		return view('warehouse/item_in');
		
	}

	
	//item out
	public function item_out()
	{
		
		
		return view('warehouse/item_out');
		
	}

	//stock_opname
	public function stock_opname()
	{
		
		
		return view('warehouse/stock_opname');
		
	}

	//internal_transfer
	public function internal_transfer()
	{
		
		
		return view('warehouse/internal_transfer');
		
	}
	 
	


	
	//--------------------------------------------------------------------

}
