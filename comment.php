<?php

$productId = $_GET['product'];
$message = $_GET['message'];
$rating = 0;
$productName=$_GET['product_name'];
if(isset($_GET['rating']))
{
    $rating = $_GET['rating'];
    
}
if(($message == null) && ($rating == null))
{
    
    header("Location: productDescription.php?product=$productId");
    
}
else 
{
    include 'config.php';
    
    $sql = "insert into comments (product_id,comment, rating) VALUES (
            $productId, '$message', $rating)";
            if (mysqli_query($conn, $sql)) {
                header("Location: productDescription.php?product=$productId");
                
                $rating_sql = "SELECT AVG(rating) AS average FROM comments where 
                                product_id = $productId";
                $rating_sql_result = mysqli_query($conn, $rating_sql);
                $rating_row =  mysqli_fetch_assoc($rating_sql_result);
                
                $curl = curl_init();
                curl_setopt($curl, CURLOPT_URL, "http://master.feiwang.tech/RestHandleRating.php");
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                $data = array("product_name"=>$productName, "product_rating" => $rating_row['average'],
                    "product_url"=>"http://www.feiwang.tech/productDescription.php?product=$productId", "company_name" => "Computer Products");
                curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
                $res = curl_exec($curl);
                curl_close($curl);
                
                
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
}


