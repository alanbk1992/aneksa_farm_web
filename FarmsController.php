<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Config\config_type;
use App\Models\Users_Model;
use Illuminate\Support\Facades\Hash;
use Auth;
use Validator;


$rows = array();
$rows2 = array();

$current_app_version_code = "1"; //App Version Code
$current_app_version_name = "0.1.0"; //App Version Name

$token_header = ""; //Header Token
$version_code_header = ""; //Header Version Code
$version_name_header = ""; //Header Version Name
$version_name_header = ""; //Header Version Name
$userid_header = "";
$modeHeader = 1;


class FarmsController extends Controller
{
    //
    



    public function index()
    {

       
        return view('API/Users');

    }





}