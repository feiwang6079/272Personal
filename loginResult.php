
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
<h1 style = "text-align:center">All user information</h1>

</td>
</tr>

<tr>
<td class="list">
<b>All Users</b><br>
</td>
<td class="content">
<br><br><br><br><br><br>
<?php 
$con = file("./password.txt");
$arr = explode(" ", $con[0]);
if ((strcmp($_POST["fname"],$arr[0]) == 0) && (strcmp($_POST["fpassword"],$arr[1])==0))
       {
           successLogin();
       }else {
          wrongPassaword();
       }
       function successLogin()
       {
           $con = file("./currentUser.txt");
           $arr = explode(", ", $con[0]);
           for($i=0; $i<count($arr); $i++)
           {
               echo $arr[$i]."<br>";
           }
       }
       function wrongPassaword()
       {
           echo "password is error"."<form method=\"get\" action=\"login.php\"><button type=\"submit\">Login</button></form>";
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

