<?php 
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class Accounting extends Controller
{


public function index()
	{
		

	}




public function fragments_accounts()
	{
		
		
		return view('accounting/fragments/get_accounts');
		
	}


//kas & bank
	public function banks()
	{
		
		
		return view('accounting/banks/banks');
		
	}

	public function add_account_bank()
	{
		
		
		return view('accounting/banks/add_account_bank');
		
	}

	public function add_bank_transfers()
	{
		
		
		return view('accounting/banks/add_bank_transfers');
		
	}

	public function add_bank_deposits()
	{
		
		
		return view('accounting/banks/add_bank_deposits');
		
	}

	public function add_bank_withdrawals()
	{
		
		
		return view('accounting/banks/add_bank_withdrawals');
		
	}
	
	public function bank_rules()
	{
		
		
		return view('accounting/banks/bank_rules/bank_rules');
		
	}

	public function add_bank_rules()
	{
		
		
		return view('accounting/banks/bank_rules/add_bank_rules');
		
	}


	//accounts
	public function accounts()
	{
		
		
		return view('accounting/accounts/accounts');
		
	}
	//accounts
	public function journal_entries()
	{
		
		
		return view('accounting/accounts/journal_entries/journal_entries');
		
	}

	

public function add_journal_entries()
	{
			
			
		return view('accounting/accounts/journal_entries/add_journal_entries');
			
	}

	

	public function add_account()
	{
		
		
		return view('accounting/accounts/add_account');
		
	}

	//fixed_assets
	public function fixed_assets()
	{
		
		
		return view('accounting/fixed_assets/fixed_assets');
		
	}

	public function add_fixed_asset()
	{
		
		
		return view('accounting/fixed_assets/add_fixed_asset');
		
	}



	//expenses
	public function expenses()
	{
		
		
		return view('accounting/expenses/expenses');
		
	}

	public function add_expenses()
	{
		
		
		return view('accounting/expenses/add_expenses');
		
	}





	//--------------------------------------------------------------------

}
