<?php 
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class Reports extends Controller
{

    public function index()
	{
		return view('reports/reports');
	}



}