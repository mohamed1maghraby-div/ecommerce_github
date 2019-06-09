<?php include "files/header.php"; ?>
<?php

$username=$_POST['username'];
$password=$_POST['password'];

if(isset($_POST['login'])){
	if(empty($username) || empty($password)){
		echo'<script>alert("الرجاء وضع جميع البينات");</script>';
	}
	else{
		$select_c="SELECT * FROM customers WHERE username='$username' AND password='$password'";
		$run_c=mysqli_query($connect,$select_c);
		if(mysqli_num_rows($run_c)>0){
			$row_c=mysqli_fetch_array($run_c);
			$user=$row_c['username'];
			$pass=$row_c['password'];
			if($user != $username AND $pass !=$password){
				echo'<script>alert("البينات المدخلة غير صحيحة");</script>';
			}
			else{
				$_SESSION['user_session'] = $user;
				$_SESSION['login_session']=1;
				echo'<script>alert("مرحبا بك");</script>';
				echo'<meta http-equiv="refresh" content="2;url=\'checkout.php\'" />';
			}
		}
		else{
			echo'<script>alert("لا توجد بيانات متطابقة");</script>';
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
<div class="panle_title">تسجيل الدخول</div>
<div class="panle_body">
<div class="lable">اسم المستخدم</div>
<input type="text" name="username" />
<br />
<div class="lable">كليمة السر</div>
<input type="text" name="password" />
<input type="submit" name="login" value="تسجيل الدخول"/>
</div>
</div>
</form>
<?php include "files/footer.php"; ?>