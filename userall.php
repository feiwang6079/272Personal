
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
<h1 style = "text-align:center">Educational Resource Website</h1>
<form method="get" action="login.php">
    <button type="submit">Login</button>
</form>
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
<br>
    <input type="button" value="return" onclick="window.location.href='usersection.php'">
<br>
<br>

<?php

include 'config.php';
    
    
    $sql = "select * from usersection";
        
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

