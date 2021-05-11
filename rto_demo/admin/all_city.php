<?php 
include('db.php');
$state_id =  $_POST['state_id'];




$q = "SELECT * FROM city WHERE city_state_id='$state_id'";
$q1 = mysqli_query($con,$q);
$q2 = mysqli_fetch_all($q1,MYSQLI_ASSOC);

// print_r($q2);
// die;
echo "<option value='-1'>-------select city--------</option>";
foreach ($q2 as $key => $value) {

	echo '<option value="'.$value['city_id'].'" '.(($value['city_id']==$_POST['c_id'])?'selected="selected"':"").'>'.$value['city_name'].'</option>';
}
?>