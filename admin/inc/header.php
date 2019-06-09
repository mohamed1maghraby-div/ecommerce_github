<?php



//connect db
$db=mysqli_connect('localhost','root','1234','ecommerce');


?>
<!DOCTYPE html>
<html>
<head>
<title>لوحة التحكم</title>
<meta charset="utf-8"/>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<script src="inc/ckeditor/ckeditor.js"></script>
</head>
<body>
<div class="all">
<div class="adminMenu">
<!--admin menu start / by mohamed maghraby -->
 <ul>
  <li><a href="addcat.php">اضافة تصنيف</a></li>
  <li><a href="addpro.php">اضافة منتج</a></li>

 </ul>
</div>
<!--admin menu end / by mohamed maghraby -->
<br />
