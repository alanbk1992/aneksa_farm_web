<?php 
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class Settings extends Controller
{

    public function index()
	{
		return view('settings/settings');
	}

	public function fragment_company()
	{
		return view('settings/fragments/fragment_company');
	}



}