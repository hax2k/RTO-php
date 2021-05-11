<?php 
include('db.php');
$state_id =  $_POST['category_id'];

$q = "SELECT * FROM category WHERE sub_category_id='$state_id'";
$q1 = mysqli_query($con,$q);
$q2 = mysqli_fetch_all($q1,MYSQLI_ASSOC);

// print_r($q2);
// die;
echo "<option value='-1'>-------select category--------</option>";
foreach ($q2 as $key => $value) 
{
	echo "<option value=".$value['subcategory_id'].">".$value['subcategory_name']."</option>";
}
?>