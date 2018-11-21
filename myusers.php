
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
<h1 style = "text-align:center">My Own Company Users</h1>
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
<a>All Users</a>

</td>
<td class="content">
<br><br><br><br>

<?php 
$conn = mysqli_connect("db-30bemv1qn.aliwebs.com", "30bemv1qn", "123456", "30bemv1qn");
// 检测连接
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, name, email FROM user";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0)
{
    while ($row = mysqli_fetch_assoc($result))
    {
        $user_name = $row["name"];
        $user_email = $row["email"];
        echo 'name: '.$user_name.'<br>'.'email: '.$user_email.'<br>';
    }
}
mysqli_close($conn);
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

