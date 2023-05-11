<?php 
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class Contacts extends Controller
{

public function index()
	{
		// return view('contacts/index');
	}

	// employees
	public function employees()
	{
		return view('contacts/employees/employees');
	}

	public function add_employee()
	{
		return view('contacts/employees/add_employee');
	}

	// customers
	public function customers()
	{
		return view('contacts/customers/customers');
	}

	public function add_customer()
	{
		return view('contacts/customers/add_customer');
	}

	// suppliers
	public function suppliers()
	{
		return view('contacts/suppliers/suppliers');
	}
	public function add_supplier()
	{
		return view('contacts/suppliers/add_supplier');
	}

	// resellers
	public function resellers()
	{
		return view('contacts/resellers/resellers');
	}
	public function add_reseller()
	{
		return view('contacts/resellers/add_reseller');
	}


	// dropshipers
	public function dropshipers()
	{
		return view('contacts/dropshipers/dropshipers');
	}
	public function add_dropshiper()
	{
		return view('contacts/dropshipers/add_dropshiper');
	}
	
	





	//--------------------------------------------------------------------

}
