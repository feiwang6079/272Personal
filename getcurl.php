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

//123123123
?>