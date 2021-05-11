<?php

	ob_start();

	include("header.php");

	include ("db.php");

	$id = $_GET['book_id'];
	$u = "SELECT * FROM licence_register WHERE licence_register_id='$id'";
	$u1 = mysqli_query($con,$u);
	$u2 = mysqli_fetch_assoc($u1);

	$p = "SELECT * FROM category WHERE category_id='".$u2['licence_category_id']."'";
          $p1 = mysqli_query($con,$p);
          $p2 = mysqli_fetch_assoc($p1);

          echo "<pre>";
          print_r($p);
          die;
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php if($p2['category_name'] == "RC BOOK"){ ?>
<h1>RC BOOK NO:<?php echo $u2['rcbook_no']; ?></h1>
<?php }else{ ?>
<h1>Your vehical register</h1>
<h3> Collect Your RC Book from RTO Office </h3>
<?php } ?>
</body>
</html>