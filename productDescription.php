<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"> 
<title>Fei Wang</title> 
<link rel="stylesheet" type="text/css" href="content.css">
</head>
<body>

<table style="width:100%">
<tr>
<td colspan="2" style="background-color:#FFA500;">
<h1 style = "text-align:center">Services</h1>
</td>
</tr>

<tr>
<td class="list">
<a href="index.php">Home</a><br>
<a href="about.php">About</a><br>
<b>Services</b><br>
<a href="news.php">News</a><br>
<a href="contacts.php">Contacts</a><br>
<a href="alluser.php">All Users</a>
</td>
<td class="content">
<br><br><br><br><br>
<?php 
$product = (int) $_GET['product'];

$expire=time()+60*60*24*30;
//Add recent browsing record cookie
if (isset($_COOKIE["lastfive"]))
{
    $arr = $_COOKIE["lastfive"];   //get cookie value
    $array = unserialize($arr);   //Convert to array
    
    //If the product currently viewed is in cookie, delete it.
    for($i = 0; $i < count($array); $i++)
    {
        if($product == $array[$i])
        {
            array_splice($array, $i, 1);
        }
    }
    
    //If the number of products exceeds 5, delete the first view
    if(count($array) >= 5)
    {
        array_splice($array, 0, 1);
    }
    
    $array[]= $product; //Add the latest browsing record
    $arrar_string = serialize($array);   //convert to strng
    setcookie("lastfive", $arrar_string, $expire);
}
else
{
    $array = array($product);
    $arrar_string = serialize($array);
    setcookie("lastfive", $arrar_string, $expire);
}

//add the most views cookie
if (isset($_COOKIE["mostfive"]))
{
    $arr = $_COOKIE["mostfive"];   //get cookie value
    $array = unserialize($arr);   //Convert to array
    
    if(array_key_exists(strval($product), $array))   //If the cookie of the product is available, increase the number of operations.
    {
        $value = $array[strval($product)];
        $value += 1;
        $array[strval($product)] = $value;
    }
    else //Create cookie record for the product
    {
        $array[strval($product)] = 1;
    }
    
    $arrar_string = serialize($array);
    setcookie("mostfive", $arrar_string, $expire);
}
else 
{
    $array=array();
    $array[strval($product)] = 1;
    $arrar_string = serialize($array);
    setcookie("mostfive", $arrar_string, $expire);
}


echo '<img src="image/'.$product.'.png"'.' alt="service image" width="244" height="112">';
echo '<br>';

$con = file("./serviceDescription.txt");
echo $con[$product].'<br>';
?>
</td>
</tr>

<tr>
<td class="bottle" colspan="2" >
feiwang.tech</td>
</tr>

</table>

</body>
</html>

