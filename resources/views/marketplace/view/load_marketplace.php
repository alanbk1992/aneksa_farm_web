    
<?php


$user_id = null;


if (isset($_POST['UserID'])) {
    $user_id = $_POST['UserID'];
}




$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, base_url('public/api/marketplace/get_marketplace'));
$payload = json_encode( array( "user_id"=> "5"
) );
curl_setopt( $ch, CURLOPT_POSTFIELDS, $payload );
curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$content = curl_exec($ch);
curl_close($ch);

//mengubah data json menjadi data array asosiatif
$result=json_decode($content,true);





if ($result['total_rows'] > 0) {


 
    foreach($result['data'] as $DataProduct)
    {
       
      

echo '<div class="card" p-2>';
echo '<div class="card-header">
 <h3 class="card-title">'.$DataProduct['MarketplaceName'].'</h3></div>';
echo '<div class="card-body">';
echo ' <a href="'.$DataProduct['BaseUrl'].'" data-toggle="lightbox" data-title="'.$DataProduct['MarketplaceName'].'">
      <img class="img-product" src='.$DataProduct['ImageMarketplace'].'>
      </a>';
echo' </div>';

    echo' </div>';    

 


   
    }
    
    

}else{

   echo '<div class="card-body text-center" >'.$result['message'] .'</div>';

}





?>
