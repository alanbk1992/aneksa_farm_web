<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Config\config_type;


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
use App\Models\Products_Model;


//$students = Student::latest()->paginate(5);
//private $db;

class ProductsController extends Controller
{
    //
    
   

    public function index()
    {

       
        return view('API/Products');

    }


    public function get_products () 
    {
 
        $db = new Products_Model;
        $modeHeader = 0;
        $post = json_decode(file_get_contents("php://input"), true);



        if (isset($post['user_id']) ) {

            if (isset($post['user_id']) ) {

                $user_id = $post['user_id'];
            }else {
                $user_id = "";
            }

            if (isset($post['shop_id']) ) {

                $shop_id = $post['shop_id'];
            }else {
                $shop_id = "";
            }

            if (isset($post['status_id']) ) {

                $status_id = $post['status_id'];
            }else {
                $status_id = "";
            }
          



            $page = null;
            $limit = 5;
            if (isset($post['page'])) {
                $page = $post['page'];
            }

            $products = [];
            $productVariants = [];
            $productVariantOptions = [];
            $getData = $db->getProducts($user_id, $shop_id, $status_id , $page, $limit);
            if ($getData != null) {


                foreach($getData as $product)
                {
        
                //$rows [] = $product;
        
        
                   $product_id = $product->product_id;
                  $getProductVariants = $db->get_product_variants($product_id);
        
                  foreach($getProductVariants as $productVariant)
                  {
        
                    $product_variant_id = $productVariant->product_variant_id;
                    $getProductVariantOptions = $db->get_product_variant_options($product_variant_id);

                    foreach($getProductVariantOptions as $productVariantOption)
                    {

                        $productVariantOptions [] = $productVariantOption;
                       // echo json_encode($productVariantOptions);die;
                    }
                    
                    
        

                  }

                   $products[$product->product_id]['product_id'] = $product->product_id;
                   $products[$product->product_id]['product_name'] = $product->product_name;
                   $products[$product->product_id]['shop'] = $product->shop;
                   $products[$product->product_id]['warehouse'] = $product->warehouse;
                   $products[$product->product_id]['brand'] = $product->brand;
                   $products[$product->product_id]['unit'] = $product->unit;
                   $products[$product->product_id]['condition_name'] = $product->condition_name;
                   $products[$product->product_id]['description'] = $product->description;
                   $products[$product->product_id]['details'] = $getProductVariants;
                   $products[$product->product_id]['details'] = $productVariantOptions;
                }
        
        
                $result = array_values($products);

            
                
                
            

                $return = array(
                    "status" => 200,
                    "message" => "Success",  
                    "total_rows" => COUNT($result),   
                    "data" => $result
                );

   
                } else {
                    $return = array(
                        "status" => 404,
                        "message" => "Data tidak ditemukan, mohon coba beberapa saat lagi!"
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
}
