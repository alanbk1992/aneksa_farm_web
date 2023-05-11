<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;



class Products_Model extends Model
{

    


     /**
     * Get Products
     */
    public function getProducts($user_id, $shop_id, $status_id , $page, $limit)
    {


            // $query_get = $this->conn->query("SELECT *, '' AS Password FROM master_users WHERE Phone = '".$phone."' AND Active=1 ");

            $filter = "";
            if ($shop_id != null)
            {
                $filter = " AND a.shop_id = '" . $shop_id . "' AND a.status_id = '" . $status_id . "'";
            }
    
            $condition = '';
            if ($page != '' && $limit != '')
            {
                if ($page == 1)
                {
                    $p = 0;
                }
                else
                {
                    $p = ($page - 1) * $limit;
                }
    
                $condition .= "LIMIT " . $limit . " OFFSET " . $p . " ";
            }

            $query_get = DB::select("SELECT 
            a.product_id,
            a.product_name,
            f.shop_name AS shop,
            b.warehouse_name AS warehouse,
            c.brand_name AS brand,
            d.unit_name AS unit,
            e.condition_name,
            a.description                                 
           FROM 
            products a 
            LEFT JOIN warehouse b ON a.warehouse_id = b.warehouse_id
            LEFT JOIN brand c ON a.brand_id = c.brand_id       
             LEFT JOIN unit d ON a.unit_id = d.unit_id    
             LEFT JOIN master_condition e ON a.condition_id = e.condition_id
             LEFT JOIN shop f ON a.shop_id = f.shop_id                           
           WHERE

            a.user_id = '" . $user_id . "' 
           " . $filter . "
            ORDER BY a.warehouse_id DESC " . $condition);
        
           // if (mysqli_num_rows($query_get) > 0)
           // {
            //    return $query_get;
           // }
           // else
          //  {
              //  return null;
          //  }

       if (!empty($query_get)) {
        return $query_get;
       } else {
            return null;
        }
    }

    /**
     * Check profile is complete
     */
    public function checkIsProfileComplete($email)
    {
        $check_pass = DB::select("SELECT TokoID FROM users WHERE Email='" . $email . "' AND Active=1");

        if (!empty($check_pass)) {
            //profile not complete
            return 0;
        } else {
            //profile complete
            return 1;
        }
    }

     /**
     * Check login by new generated pass (forgot pass)
     */
    public function checkUserLoginByForgot($email, $password)
    {

        $now = $this->get_chat_time();

        $check_pass =DB::select("SELECT * FROM users WHERE Email = '" . $email . "' AND ForgotPassword='" . $password . "' AND ForgotPasswordExpired > STR_TO_DATE('" . $now . "', '%Y-%m-%d %H:%i:%s') AND Active=1 ");

        if (!empty($check_pass)) {
            $new_token = $this->generateToken();
            $upd = DB::select("UPDATE users SET IsLogin=1, Token='" . $new_token . "' WHERE Email='" . $email . "' AND Active=1 ");
            if ($upd) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    /**
     * Update FirebaseID
     */
    public function updateFirebase($email, $firebase_id)
    {

        $update = DB::select("UPDATE master_users SET 
										FirebaseID 		= '" . $firebase_id . "'
									WHERE 
										Email = '" . $email . "'");

        if ($update) {
            return true;
        } else {
            return false;
        }
    }


 /**
     * Decrypting password
     * @param salt, password
     * returns hash string
     */
    public function checkhashSSHA($salt, $password)
    {
        $hash = base64_encode(sha1($password . $salt, true) . $salt);
        return $hash;
    }

   
	 /**
     * Function Generate API Token
     * @param : Num Digits (optional)
     * returns code
     */
    function generateToken($length = 15)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }	

																		 
	 /**
     * Check if user exist
     */
    public function checkUserRegister($email)
    {
        $query = DB::select("SELECT * FROM users WHERE Email = '" . $email . "' AND Active=1 ");

       if (!empty($query)) {
            return true;
        } else {
            return false;
        }
    }											 
		
			
			

    function get_chat_time()
    {
        // $myDateTime = new DateTime(date('Y-m-d H:i:s'), new DateTimeZone('GMT'));
        // $myDateTime->setTimezone(new DateTimeZone('Asia/Jakarta'));
        // $now = $myDateTime->format('Y-m-d H:i:s');

        $now = date("Y-m-d H:i:s");
        return $now;
    }
	
	
    public function get_detail_products($product_id)
    {

      
            $query_get = DB::select("SELECT
           a.product_id,
            a.sku,
	    a.barcode ,
	    a.price_sell AS price ,
	    a.quantity,
           b.product_variant_name,
           c.product_variant_option_name
           FROM 
            product_options	 a 
           LEFT JOIN product_variants b ON a.product_variant_id = b.product_variant_id
            LEFT JOIN product_variant_options c ON a.product_variant_id = c.product_variant_id
            WHERE a.product_id = '" . $product_id . "'");
            return $query_get;
       
    }
	
    public function get_product_variants($product_id)
    {

      
            $query_get = DB::select("SELECT product_variant_id , product_id , product_variant_name FROM product_variants
            WHERE product_id = '" . $product_id . "'");
            return $query_get;
       
    }

    public function get_product_variant_options($product_variant_id)
    {

      
            $query_get = DB::select("SELECT a.product_variant_option_id,
            a.product_variant_id,
            a.product_variant_option_name,
            b.product_option_id,
            b.product_id,
            b.sku,
            b.barcode,
            b.price_sell,
            b.quantity
            
            FROM product_variant_options a
            LEFT JOIN product_options b ON a.product_variant_id = b.product_variant_id
            WHERE b.product_variant_id = '" . $product_variant_id . "'");
            return $query_get;
       
    }

	
	}

?>