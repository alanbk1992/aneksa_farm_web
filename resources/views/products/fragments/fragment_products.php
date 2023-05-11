    
<?php



if (isset($post['UserID']) ) {

    $userid = $post['UserID'];
}else {
    $userid = "";
}

if (isset($post['Status']) ) {

    $status = $post['Status'];
}else {
    $status = "";
}


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, url('api/products/get'));
$payload = json_encode( array(
    "UserID"=> 1 ,
    "Status"=> 1,) );
curl_setopt( $ch, CURLOPT_POSTFIELDS, $payload );
curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$content = curl_exec($ch);
curl_close($ch);

//mengubah data json menjadi data array asosiatif
$result=json_decode($content,true);






if (!empty($result)) {


   
    foreach($result['data'] as $DataProduct)
    {

        echo '<tr class="pt-1 pb-1">';


        echo '<td>';
        echo $DataProduct['ProductID'];
        echo '</td>';


      echo '<td>';
        echo $DataProduct['ProductName'];
        echo '</td>';

        echo '<td>';
        echo $DataProduct['ProductName'];
        echo '</td>';

        echo '<td>';
        echo $DataProduct['Status'];
        echo '</td>';

 


   echo' </tr> ';
    
   
    }
	
	

}else{

   echo ' <div class="w-auto p-3">
   <p class="text-center font-weight-bold" >Produk belum ada</p></div>';


}





?>
