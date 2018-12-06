<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"> 
<link rel="stylesheet" type="text/css" href="content.css">
<title>Fei Wang</title> 
</head>
<body>

<table style="width:100%">
<tr>
<td colspan="2" style="background-color:#FFA500;">
<h1 style = "text-align:center">Create User</h1>
<!-- <form method="get" action="login.php"> -->
<!--     <button type="submit">Login</button> -->
<!-- </form> -->
</td>
</tr>

<tr>
<td class="list">
<a href="index.php">Home</a><br>
<a href="about.php">About</a><br>
<a href="products.php">Services</a><br>
<a href="news.php">News</a><br>
<a href="contacts.php">Contacts</a><br>
<a href="alluser.php">All Users</a><br>
<b>User section</b><br>

</td>
<td class="content">
<br><br><br><br><br><br>

    <form action="#" method="post">
    first name : <input type="text" name="firstname"><br><br>
    last name : <input type="text" name="lastname"><br><br>
    email : <input type="text" name="email"><br><br>
    home address : <input type="text" name="homeaddress"><br><br>
    home phone : <input type="text" name="homephone"><br><br>
    cell phone : <input type="text" name="cellphone"><br><br>
    <input type="button" value="return" onclick="window.location.href='usersection.php'">
    <input type="submit" value="submit"></form>

<?php
include 'config.php';

if(isset($_POST["firstname"])&&isset($_POST["lastname"]) & isset($_POST["email"]) &
    isset($_POST["homeaddress"])&&isset($_POST["homephone"]) & isset($_POST["cellphone"]))
{
    $firstname=$_POST["firstname"];
    $lastname=$_POST["lastname"];
    $email = $_POST["email"];
    $homeaddress=$_POST["homeaddress"];
    $homephone=$_POST["homephone"];
    $cellphone = $_POST["cellphone"];
    
    $sql = "INSERT INTO usersection (firstname,lastname, email, homeaddress, homephone, cellphone) VALUES (
            '$firstname', '$lastname', '$email', '$homeaddress', '$homephone', '$cellphone')";
    
    if (mysqli_query($conn, $sql)) {
            echo "<br> Create user success!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
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

