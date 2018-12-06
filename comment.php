<?php

$productId = $_GET['product'];
$message = $_GET['message'];
$rating = 0;
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
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
}


