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



//$students = Student::latest()->paginate(5);
//private $db;

class UsersController extends Controller
{
    //
    



    public function index()
    {

       
        return view('API/Users');

    }


    public function login () 
    {
 
        $db = new Users_Model;
        $modeHeader = 0;
        $post = json_decode(file_get_contents("php://input"), true);



        if (isset($post['email']) && isset($post['password']) ) {

            if (isset($post['email']) ) {

                $email = $post['email'];
            }else {
                $email = "";
            }

            if (isset($post['password']) ) {

                $password = $post['password'];
            }else {
                $password = "";
            }

            if (isset($post['firebase_id']) ) {

                $firebase_id = $post['firebase_id'];
            }else {
                $firebase_id = "";
            }
          
            

            $user = $db->checkUserLogin($email, $password);
           //echo json_encode($user);die();
            if ($user = true) {

            

                $getData = $db->getUserByEmail($email);
                if ($getData != null) {

                    //echo Json_encode($getData);die;
                  // foreach ($results as $row) { 
                  //  echo $row['Amount']; }

                      foreach ($getData as $row) { 
                        $rows[] = $row;
                      //  $user_id =$row['UserID'] ;
                      //$token =$row['Token'] ;
                       // $FirstName =$row['FirstName'] ;
                       // $LastName =$row['LastName'] ;
                       // $Email =$row['Email'] ;
                        //$TokoID =$row['TokoID'] ;
                      //  $user_id =$row['UserID'] ;
                       // $user_id =$row['UserID'] ;
                    }

                   // $is_complete = $db->checkIsProfileComplete($email);
		
              //  session() -> set('Email' , $rows['email']);
                   // $_SESSION['HTTP_TOKEN']=$token;
                   // $_SESSION['HTTP_USER_ID']= $user_id;
                   // $_SESSION['FirstName']= $FirstName;
                   // $_SESSION['LastName']= $LastName;
                   // $_SESSION['Email']= $Email;
                   // $_SESSION['TokoID']= $TokoID;
              

                    $return = array(
                        "status" => 200,
                        "message" => "ok",
                        "is_forgot" => false,
                       // "profile_complete" => $is_complete,
                        "data" => $rows
                    );
                } else {
                    $return = array(
                        "status" => 404,
                        "message" => "Email belum terdaftar"
                    );
                }

            } else {
                //check forgot password
                // $check_forgot = $db->checkUserLoginByForgot($email, $password);
                // if ($check_forgot) {

                //     $db->updateFirebase($email, $firebase_id);

                //     $getData = $db->getUserByEmail($email);
                //     if ($getData != null) {

                //         while ($row = $getData->fetch_assoc()) {
                //             $rows[] = $row;
                //         }

                //         $is_complete = $db->checkIsProfileComplete($email);

                //         $return = array(
                //             "status" => 200,
                //             "message" => "ok",
                //             "is_forgot" => true,
                //             "profile_complete" => $is_complete,
                //             "data" => $rows
                //         );
                //     } else {
                //         $return = array(
                //             "status" => 404,
                //             "message" => "Data tidak ditemukan, mohon coba beberapa saat lagi!"
                //         );
                //     }
                // } else {
                    $return = array(
                        "status" => 404,
                        "message" => "email atau password salah"
                    );
                // }
            }
        } else {
            $return = array(
                "status" => 404,
                "message" => "Method not found!"
            );
        }
        echo json_encode($return);
    }


    public function logout () 
    {
 
 
        $db = new Users_Model;
        $modeHeader = 0;
        $post = json_decode(file_get_contents("php://input"), true);


                    if (isset($post['user_id'])) {

                        $user_id = $post['user_id'];

        
                        $process = $db->processLogout($user_id);
                        if ($process == true) {
                            $return = array(
                                "status" => 200,
                                "message" => "ok"
                            );
                        } else {
                            $return = array(
                                "status" => 404,
                                "message" => "Gagal keluar dari akun, mohon coba beberapa saat lagi!"
                            );
                        }
                    } else {
                        $return = array(
                            "status" => 404,
                            "message" => "Method not found!"
                        );
                    }
                    echo json_encode($return);
                }


    public function register (Request $request) 
    {
 
        $db = new Users_Model;
        $modeHeader = 0;
        $post = json_decode(file_get_contents("php://input"), true);

  
        $data = json_decode($request->payload, true);
        $rules = [
            'name' => 'digits:8', //Must be a number and length of value is 8
        'age' => 'digits:8'
        ];
    
        // $validator = Validator::make($data, $rules);
        // if ($validator->passes()) {
        //     //TODO Handle your data
        // } else {
        //     //TODO Handle your error
        //     dd($validator->errors()->all());
        // }

            $validator = Validator::make($request->all(),[
               'name' => ['required', 'string', 'max:255'],
                'email' => [ 'required', 'string', 'email', 'max:255'],
                'password' => ['required','min:8'],
            ]);
    
           if($validator->fails()){
              return response()->json($validator->errors());       
           }
    
        //   $user = Users_Model::create([
        //         'name' => $request->name,
        //         'email' => $request->email,
        //         'password' => Hash::make($request->password)
        //      ]);
    
           // $token = $user->createToken('auth_token')->plainTextToken;
    
           // return response()
                //->json(['data' => $user,'access_token' => $token, 'token_type' => 'Bearer', ]);
        


        if (isset($post['firstname']) == "" && isset($post['username']) == "" && isset($post['email']) == "" && isset($post['password']) == "" && isset($post['password_confirmation']) == "" && isset($post['phone']) == "") {

            if (isset($post['firstname']) ) {

                $firstname = $post['firstname'];
            }else {
                $firstname = "";
            }

            if (isset($post['lastname']) ) {

                $lastname = $post['lastname'];
            }else {
                $lastname = "";
            }

            if (isset($post['username']) ) {

                $username = $post['username'];
            }else {
                $username = "";
            }

            if (isset($post['email']) ) {

                $email = $post['email'];
            }else {
                $email = "";
            }
          
		    if (isset($post['password']) ) {

			$password = $post['password'];
            }else {
                $password = "";
            }
			
			if (isset($post['password_confirmation']) ) {
				$password_confirmation = $post['password_confirmation'];
            }else {
                $password_confirmation = "";
            }
            
			if (isset($post['phone']) ) {
				$phone = $post['phone'];
            }else {
                $phone = "";
            }
			
			if (isset($post['reff']) ) {
				$reff = $post['reff'];
            }else {
                $reff = "";
            }
			
		if ($password == $password_confirmation) {
	
  
                $getData = $db->checkUserRegister($email);
				
                if (!$getData) {

                    $create = $db->createUser($firstname, $lastname, $username, $email, $password, $phone , $reff);
                    if ($create) {
                        $return = array(
                            "status" => 200,
                            "message" => "Pendaftaran berhasil"
                        );
                    } else {
                        $return = array(
                            "status" => 404,
                            "message" => "Registrasi gagal, mohon coba beberapa saat lagi!"
                        );
                    }

                } else {
                    $return = array(
                        "status" => 404,
                        "message" => "Email yang anda masukan sudah ada"
                    );
                }
		
		}else{


			$return = array(
                "status" => 404,
                "message" => "Password tidak sama"
            );
		}
		
        } else {
            $return = array(
                "status" => 404,
                "message" => "Data tidak lengkap"
            );
        }
        echo json_encode($return);
    }

    public function get_users () 
    {
 
        $db = new Users_Model;
        $modeHeader = 0;
        $post = json_decode(file_get_contents("php://input"), true);

        $users = [];

     $getDataUsers = $db->getUsers();
      if ($getDataUsers != null) {

              
        foreach($getDataUsers as $user)
        {

        $rows [] = $user;


            $user_id = $user->user_id;
           $getDataUsers = $db->getShop($user_id);


            $users[$user->user_id]['user_id'] = $user->user_id;
           $users[$user->user_id]['role_id'] = $user->role_id;
           $users[$user->user_id]['first_name'] = $user->first_name;
           $users[$user->user_id]['last_name'] = $user->last_name;
           $users[$user->user_id]['username'] = $user->username;
           $users[$user->user_id]['email'] = $user->email;
           $users[$user->user_id]['phone'] = $user->phone;
           $users[$user->user_id]['active'] = $user->active;
           $users[$user->user_id]['shop'] = $getDataUsers;

        }


        $resultUsers = array_values($users);



                    $return = array(
                        "status" => 200,
                        "message" => "success",
                      // "user_id" => $user_id,
                        "data" => $resultUsers
                    );
                } else {
                    $return = array(
                        "status" => 404,
                        "message" => "Data tidak ditemukan, mohon coba beberapa saat lagi!"
                    );
                }

           
          
     
        echo json_encode($return);
    }


    public function home () 
    {
 
        $db = new Users_Model;
        $modeHeader = 0;
        $post = json_decode(file_get_contents("php://input"), true);

        if (isset($post['user_id']) ) {

            $user_id = $post['user_id'];
            $users = [];

            $getDataUsers = $db->getUser($user_id);
             if ($getDataUsers != null) {
       
                     
               foreach($getDataUsers as $user)
               {
       
               $rows [] = $user;
       
       
                   $user_id = $user->user_id;
                  $getDataFarm = $db->getFarm($user_id);
       
       
                   $users[$user->user_id]['user_id'] = $user->user_id;
                  $users[$user->user_id]['role_id'] = $user->role_id;
                  $users[$user->user_id]['first_name'] = $user->first_name;
                  $users[$user->user_id]['last_name'] = $user->last_name;
                  $users[$user->user_id]['username'] = $user->username;
                  $users[$user->user_id]['email'] = $user->email;
                  $users[$user->user_id]['phone'] = $user->phone;
                  $users[$user->user_id]['active'] = $user->active;
                  $users[$user->user_id]['farm'] = $getDataFarm;
       
               }
       
       
               $resultUsers = array_values($users);
       
       
       
                           $return = array(
                               "status" => 200,
                               "message" => "success",
                             // "user_id" => $user_id,
                               "data" => $resultUsers
                           );
                       } else {
                           $return = array(
                               "status" => 404,
                               "message" => "Data tidak ditemukan, mohon coba beberapa saat lagi!"
                           );
                       }

        }else {

            $return = array(
                               "status" => 404,
                               "message" => "Ada yang salah"
                           );
        }


       

           
          
     
        echo json_encode($return);
    }

}
