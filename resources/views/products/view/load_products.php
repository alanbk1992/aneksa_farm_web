    
<?php


$user_id = null;
$page = null;
$search = null;
$search_size = null;
$search_color = null;

if (isset($_POST['UserID'])) {
    $user_id = $_POST['UserID'];
}


if (isset($_POST['Page'])) {
    $page = $_POST['Page'];
}

if (isset($_POST['Search'])) {
    $search = $_POST['Search'];

}

if (isset($_POST['SearchSize'])) {
    $search_size = $_POST['SearchSize'];

}

if (isset($_POST['SearchColor'])) {
    $search_color = $_POST['SearchColor'];

}


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, base_url('public/api/products.php?request=get_products'));
$payload = json_encode( array( "Page"=> $page ,
    "UserID"=> 5 ,
    "Status"=> 1 ,
    "Search"=> $search,
    "SearchSize"=> $search_size,
    "SearchColor"=> $search_color) );
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

        echo '<tr class="pt-1 pb-1">';


        echo '<td>';
        echo $DataProduct['CategoryID'];
        echo '</td>';


      echo '<td>';
        echo $DataProduct['ProductName'];
        echo '</td>';

 echo '<td>';
        echo $DataProduct['BrandID'];
        echo '</td>';

        
 echo '<td>';
        echo $DataProduct['SupplierID'];
        echo '</td>';


   echo' </tr> ';

   
    }
	
	

}else{

   echo '<div class="card-body text-center" >'.$result['message'] .'</div>';

}





?>
