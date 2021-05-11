<?php 
 include('db.php');
$city_id = $_POST['office_id'];

// echo $area_id;die;

echo $q = "SELECT * FROM rto_office WHERE office_city_id='$city_id'";
$q1 = mysqli_query($con,$q);
$q2=mysqli_fetch_all($q1,MYSQLI_ASSOC);

// echo "<pre>";print_r($q2);die;	




echo "<option value='-1'>------select office-----</option>";
foreach ($q2 as $key => $value) {
	// echo "<option value='".$value['area_id']."'>".$value['area_name']."</option>";
	echo '<option value="'.$value['office_id'].'" >'.$value['office_address'].'</option>';
}
?>