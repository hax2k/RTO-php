<?php 
 include('db.php');
$city_id = $_POST['city_id'];



$q = "SELECT * FROM area WHERE area_city_id='$city_id'";
$q1 = mysqli_query($con,$q);
$q2=mysqli_fetch_all($q1,MYSQLI_ASSOC);

// echo "<pre>";print_r($q2);die;	




echo "<option value='-1'>------select area-----</option>";
foreach ($q2 as $key => $value) {
	// echo "<option value='".$value['area_id']."'>".$value['area_name']."</option>";
	echo '<option value="'.$value['area_id'].'" '.(($value['area_id']==$_POST['a_id'])?'selected="selected"':"").'>'.$value['area_name'].'</option>';
}
?>