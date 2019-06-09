<?php
ob_start();
//connect db
$con=mysqli_connect('localhost','root','1234','ecommerce');
//post
$a_name=$_POST['a_name'];
$a_pass=$_POST['a_pass'];
if(isset($_POST['login'])){
if(empty ($a_name) or empty($a_pass)){
echo'<script>alert("يرجى ادخال البينات");</script>';
}
else{
//get admin name and pass
$m="SELECT * FROM admin WHERE a_name='$a_name' AND a_pass='$a_pass'";
$run_admin=mysqli_query($con,$m);
//admin isset
if(mysqli_num_rows($run_admin) == 1){
$row_admin=mysqli_fetch_array($run_admin);
//admin value isset
$aname=$row_admin['a_name'];
//cookie here
$_SESSION['aname']=$aname;
$_SESSION['adminlogin']=1;
echo'<script>alert("مرحبا بك");</script>';
header("location:ok.php");
}
else{
echo'<script>alert("كلمة المرور غير صحيحة");</script>';
}
}
}
ob_end_flush();
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
<meta charset="utf-8"/>
<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
<div class="loginAll">
<form action="login.php" method="post"> 
<input type="text" name="a_name" placeholder="كلمة المرور" />
<br />
<input type="password" name="a_pass" placeholder="الباسورد" />
<br />
<input type="submit" name="login" value="دخول"/>
</form>
</div>
</body>
</html>