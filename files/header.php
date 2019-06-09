<?php 
include "inc/function.php";

$user_coo=$_COOKIE['user'];
$login_coo=$_COOKIE['login'];
 ?>
<!DOCTYPE html>
<head>

<title>ecommerce</title>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
</head>
<body>
<!-- header start by / by mohamed maghraby -->
<div class="headerTop">
<div class="logo w">
<a href="index.php"><img src="images/logo.png" width="200"  /></a>
</div>
</div>
<!-- header end by / mohamed maghraby -->

<!-- medu start by / by mohamed maghraby -->
<div class="menuBar">
<ul class="w">
<li><a href="index.php">home</a></li>
<?php get_cat(); ?>

<div class="c"></div>
</ul>
</div>
<!-- medu end by / by mohamed maghraby -->
<!-- search area start by / by mohamed maghraby -->
<div class="search">
<?php cart(); ?>

<div class="w">
<div class="cart r">welcome to you<?php echo $user_coo ;?>! all products-shoping basket:<?php total_item(); ?>total price:<?php total_price(); echo"$";?><a href="cart.php">go to cart</a></div>
<div class="searchForm l">
<form action="search.php" method="get">
<input type="text" name="searchArea"  placeholder="search here ..."/>
<input type="submit" name="search"  value="search"/>
</form>
</div>
<div class="sochil l">
<ul>
<li><a href="#"><i class="fa fa-facebook"></i></a></li>
<li><a href="#"><i class="fa fa-twitter"></i></a></li>
<li><a href="#"><i class="fa fa-youtube"></i></a></li>
<li><a href="#"><i class="fa fa-instagram"></i></a></li>
<li><a href="#"><i class="fa fa-behance"></i></a></li>
</ul>
</div>
<div class="c"></div>
</div>
</div>
<!-- search area end by / by mohamed maghraby -->

<br />
<br />

<!-- content start by / by mohamed maghraby -->
<div class="w content">