<?php include "inc/header.php"; ?>
<?php
//post value
$c_name=$_POST['c_name'];
//insert category

if(isset($_POST['addCat'])){
	$insert_cat="INSERT INTO category(c_name) VALUES('$c_name')";
	$run_cat=mysqli_query($db,$insert_cat);
	if(isset($run_cat)){

		header("location:addcat.php");

	}
}



?>
<div class="adminBody">
<form action="addcat.php" method="post">
 <label>اسم التصنيف</label>
 <input type="text" name="c_name"/>
 <input type="submit" name="addCat" value="اضف تصنيف"/>
</form>
</div>
<?php include"inc/footer.php"; ?>