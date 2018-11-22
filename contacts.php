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
<h1 style = "text-align:center">Contacts Us</h1>
</td>
</tr>

<tr>
<td class="list">
<a href="index.php">Home</a><br>
<a href="about.php">About</a><br>
<a href="products.php">Services</a><br>
<a href="news.php">News</a><br>
<b>Contacts</b><br>
<a href="alluser.php">All Users</a><br>
<a href="usersection.php">User section</a>
</td>
<td class="content">
<br><br><br><br><br>
<?php 
    $con = file("./contacts.txt");
    $arr = explode(" ", $con[0]);
    for($i=0; $i<count($arr); $i++)
    {
        echo $arr[$i]."<br>";
    }
//     foreach($con as $x=>$x_value)
//     {
//         echo $x + 1 . " ";
//         echo $x_value;
//         echo "<br><br>";
//     }
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

