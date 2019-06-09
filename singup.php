<?php include "files/header.php"; ?>
<?php

$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
$country=$_POST['country'];
// ip add
$ip=getIp();
if(isset($_POST['singup'])){
	if(empty($username) || empty($password) || empty($email) || empty($country)){
		echo'<script>alert("الرجاء وضع جميع البينات");</script>';
	}
	else{
		$insert_c="INSERT INTO customers(username,password,email,country,ip) VALUE('$username','$password','$email','$country','$ip')";
		$run_c=mysqli_query($connect,$insert_c);
		
		if(isset($run_c)){
			echo'<script>alert("تم تسجيلك فى الموقع مرحبا بك");</script>';
		}
	}
}
?>
<?php
/*
CREATE TABLE  `customers` (
 id INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
 username VARCHAR( 255 ) NOT NULL ,
 password VARCHAR( 255 ) NOT NULL ,
 email VARCHAR( 255 ) NOT NULL ,
 country VARCHAR( 255 ) NOT NULL ,
 ip VARCHAR( 255 ) NOT NULL
) ENGINE = MYISAM ;
*/
?>
<form action="" method="post">
<div class="panle" style="width:500px; margin:0px auto;">
<div class="panle_title">تسجيل عضوية</div>
<div class="panle_body">
<div class="lable">اسم المستخدم</div>
<input type="text" name="username" />
<br />
<div class="lable">كليمة السر</div>
<input type="text" name="password" />
<br />
<div class="lable">البريد</div>
<input type="text" name="email" />
<br />
<div class="lable">الدولة</div>
<input type="text" name="country" />
<input type="submit" name="singup"  value="تسجيل"/>
</div>
</div>
</form>
<?php include "files/footer.php"; ?>