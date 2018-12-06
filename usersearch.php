
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
<h1 style = "text-align:center">Search User</h1>
<!-- <form method="get" action="login.php"> -->
<!--     <button type="submit">Login</button> -->
<!-- </form> -->
</td>
</tr>

<tr>
<td class="list">
<a href="index.php">Home</a><br>
<a href="about.php">About</a><br>
<a href="products.php">Products</a><br>
<a href="news.php">News</a><br>
<a href="contacts.php">Contacts</a><br>
<a href="alluser.php">All Users</a><br>
<b>User section</b><br>

</td>
<td class="content">
<br>

    <form action="#" method="post">
    first name : <input type="text" name="firstname"><br><br>
    last name : <input type="text" name="lastname"><br><br>
    email : <input type="text" name="email"><br><br>
    home phone : <input type="text" name="homephone"><br><br>
    cell phone : <input type="text" name="cellphone"><br><br>
    <input type="button" value="return" onclick="window.location.href='usersection.php'">
    <input type="submit" value="search"></form>

<?php
include 'config.php';

if(isset($_POST["firstname"]) || isset($_POST["lastname"]) || isset($_POST["email"]) &&
   isset($_POST["homephone"]) || isset($_POST["cellphone"]) )
{
    $firstname=$_POST["firstname"];
    $lastname=$_POST["lastname"];
    $email = $_POST["email"];
    $homephone=$_POST["homephone"];
    $cellphone = $_POST["cellphone"];
    
    $sql = "select * from usersection  where firstname like '%$firstname%' and lastname like '%$lastname%' and 
            email like '%$email%' and homephone like '%$homephone%' and cellphone like '%$cellphone%' ";
        
    $count = 0;
    $result = mysqli_query($conn, $sql);
    
    echo '<table width="800" border="1">';
    
    echo '<tr>';
    echo '<td>' . 'first name' . '</td>';
    echo '<td>' . 'last tname' . '</td>';
    echo '<td>' . 'email' . '</td>';
    echo '<td>' . 'home address' . '</td>';
    echo '<td>' . 'home phone' . '</td>';
    echo '<td>' . 'cell phone' . '</td>';
    echo '</tr>';
    
    while ($row = mysqli_fetch_assoc($result)) {
        $count ++;
        
        echo '<tr>';
        echo '<td>' . $row['firstname'] . '</td>';
        echo '<td>' . $row['lastname'] . '</td>';
        echo '<td>' . $row['email'] . '</td>';
        echo '<td>' . $row['homeaddress'] . '</td>';
        echo '<td>' . $row['homephone'] . '</td>';
        echo '<td>' . $row['cellphone'] . '</td>';
        echo '</tr>';

    }
    if($count == 0)
    {
        echo "<tr><td>There is no match result.</td></tr>";
    }

    echo '</table>';
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

