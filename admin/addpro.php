<?php include "inc/header.php";?>
<?php
/*CREATE TABLE  `products` (
 `p_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
 `p_title VARCHAR( 255 ) NOT NULL ,
 `p_category INT NOT NULL ,
 `p_img VARCHAR( 255 ) NOT NULL ,
 `p_price VARCHAR( 255 ) NOT NULL ,
 `p_desc TEXT NOT NULL ,
 `p_keyword VARCHAR( 255 ) NOT NULL
  */
  
  //post value
$p_title=$_POST['p_title'];
$p_category=$_POST['p_category'];
$p_img=$_FILES['p_img']['name'];
$p_img_tmp=$_FILES['p_img']['tmp_name'];
$p_price=$_POST['p_price'];
$p_desc=$_POST['p_desc'];
$p_keyword=$_POST['p_keyword'];
//move uplude img
move_uploaded_file($p_img_tmp,"images/$p_img");
// insert pro
if(isset($_POST['addpro'])){
	if(empty($p_title) or empty($p_category) or empty($p_img) or empty($p_price) or empty($p_desc) or empty($p_keyword)){
		echo'<script>alert("الرجاء ملئ جميع الحقول")</script>';
	}
	else{
		$insert_pro="INSERT INTO products(p_title,p_category,p_img,p_price,p_desc,p_keyword) VALUES
		 ('$p_title',
		 '$p_category',
		 '$p_img',
		 '$p_price',
		 '$p_desc',
		 '$p_keyword')
		";
		$run_pro=mysqli_query($db,$insert_pro);
		if(isset($run_pro)){
			header("location:addpro.php");
		}
	}
}
?>
<div class="adminBody">
<form action="addpro.php" method="post" enctype="multipart/form-data">
 <label>عنوان المنتج</label>
 <input type="text" name="p_title"/>
  <label>تصنيف المنتج</label>
  <br />

<select name="p_category" style="margin-top:5px;">
<?php

$get_c="SELECT * FROM category";
$run_c=mysqli_query($db,$get_c);
while($row_c=mysqli_fetch_array($run_c)){
	echo'<option value="'.$row_c['c_id'].'">'.$row_c['c_name'].'</option>';
}

?>
</select>
<br />
 <label>صورة المنتج</label>
 <input type="file" name="p_img"/>
  <label>سعر المنتج</label>
 <input type="text" name="p_price"/>
  <label>وصف المنتج</label>
  <textarea name="p_desc"></textarea>
     <script>
            CKEDITOR.replace( 'p_desc' );
        </script>
		<br />
    <label>كليمات مفتاحية</label>
 <input type="text" name="p_keyword"/>

 <input type="submit" name="addpro" value="اضافة منتج"/>
</form>
</div>
<?php include "inc/footer.php";?>