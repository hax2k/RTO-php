<?php 
include('db.php');
$id =  $_POST['proof_id'];




$q = "SELECT * FROM proof WHERE proof_id='$id'";
$q1 = mysqli_query($con,$q);
$q2 = mysqli_fetch_all($q1,MYSQLI_ASSOC);

// print_r($q2);
// die;
echo "<option value='-1'>-------select ID Proof Type--------</option>";
foreach ($q2 as $key => $value) {
	//'.(($value['city_id']==$_POST['c_id'])?'selected="selected"':"").'

	echo '<option value="'.$value['proof_id'].'" >'.$value['proof_name'].'</option>';
}
?>