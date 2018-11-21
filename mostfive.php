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
<h1 style = "text-align:center">The five most visited products</h1>
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

<br><br><br>

<?php 

if (isset($_COOKIE["mostfive"]))
{
    $arr = $_COOKIE["mostfive"];
    $array = unserialize($arr);
    arsort($array);    //Sort the arrays and sort them according to the number of browsing times.
    $i = 0;
    foreach($array as $key => $value)
    {
        if($i == 5)
        {
            break;
        }
        else 
        {
            echo '<br><a href="productDescription.php?product='.$key.'">'.'service'.((int)$key+1).'</a>';
            echo '<br>';
            $i++;
        }
    }
}
else
{
    echo "You haven't seen any service yet.";
}
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

