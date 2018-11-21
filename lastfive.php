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
<h1 style = "text-align:center">The last five previously visited products</h1>
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
if (isset($_COOKIE["lastfive"]))
{
    $arr = $_COOKIE["lastfive"];
    $array = unserialize($arr);
    for($i = count($array) - 1; $i >= 0; $i--)
    {
        $con = $array[$i]+1;
        echo '<br><a href="productDescription.php?product='.$array[$i].'">'.'service'.$con.'</a>';
        echo '<br>';
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

