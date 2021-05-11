<?php

	include("header.php");

	include ("db.php");

	 
	  if(isset($_SESSION['id']))
	  {
	  	// echo "<pre>";
	  	// print_r($_SESSION);
	  	// die;

	    $id=$_SESSION['id'];

	     $m = "SELECT slot_book.*,user.user_name,user.user_contact,rto_office.office_address,licence_register.licence_register_id,category.category_name,subcategory.subcategory_name,vehical.vehical_name,slot.slot_time FROM slot_book,user,rto_office,licence_register,category,subcategory,vehical,slot WHERE book_user_id='$id' AND slot_book.book_user_id=user.user_id AND slot_book.book_office_id=rto_office.office_id AND licence_register.licence_register_id=slot_book.book_register_id AND licence_register.licence_category_id=category.category_id AND licence_register.licence_subcategory_id=subcategory.subcategory_id AND licence_register.vehical_id=vehical.vehical_id AND slot_book.slot_no=slot.slot_id";

	    $m1 = mysqli_query($con,$m);
    	$m2 = mysqli_fetch_all($m1,MYSQLI_ASSOC);


	    	


    	foreach ($m2 as $key => $value) 
    	{
			  $sid = $value['book_state_id'];
			  $cid = $value['book_city_id'];
			  $oid = $value['book_office_id'];
			  $sno = $value['slot_no'];
			  $bdate = $value['slot_book_date'];


			  $s = "SELECT * FROM exam_create WHERE create_state_id='$sid' AND create_city_id='$cid' AND create_office_id='$oid' AND create_slot_id='$sno' AND create_exam_date='$bdate'"; 
			
			   $s1 = mysqli_query($con,$s);
			   $s2 = mysqli_fetch_assoc($s1);
			   $m2[$key]['slot'] = $s2;
    	}
    
	  }

	  

?>






	<h1 class="my-5 text-center text-warning font-italic">Thanks for Regisration</h1>
	<br>

<div class="container-fluid">
	
		<table class="table">
		  <thead class="thead-light">
		    <tr>
		      <th scope="col">Name</th>
		      <th scope="col">Contact</th>
		      <th scope="col">Office Address</th>
		      <th scope="col">Category</th>
		      <th scope="col">Sub Category</th>
		      <th scope="col">Vehical Type</th>
		      <th scope="col">Slot No</th>
		      <th scope="col">Slot Time</th>
		      <th scope="col" colspan="2">Action</th>
		    </tr>
		  </thead>

		  <tbody>

		  	 
		  	

		  		<?php foreach($m2 as $k=>$v){ ?>
		  		<tr>
		  			<td><?php echo $v['user_name']; ?></td>
		  			<td><?php echo $v['user_contact']; ?></td>
		  			<td><?php echo $v['office_address']; ?></td>
		  			<td><?php echo $v['category_name']; ?></td>
		  			<td><?php echo $v['subcategory_name']; ?></td>
		  			<td><?php echo $v['vehical_name']; ?></td>
		  			<td><?php echo $v['slot_no']; ?></td>
		  			<td><?php echo $v['slot_time']; ?></td>
		  			<td><?php echo $v['status']; ?></td>

		  			<?php  if($v['status'] == 0){ ?>
		  				<td><button type="button" class="btn btn-warning">Process</button></td>
		  			<?php  }else if($v['status'] == 2){ ?>
		  				<td><button type="button" class="btn btn-success">Confirm</button></td>
		  			<?php  }else if($v['status'] == 3){ ?>
		  			
		  				<td>
		  				<a href="registration.php?subcategory_id=<?php echo $v['book_subcategory_id']; ?>&category_id=<?= $v['book_category_id']; ?>">
		  				<button type="button" class="btn btn-danger">Retrive</button>
		  				</a>
		  				</td>
		  				</a>

		  				<?php  }else if($v['status'] == 5){ ?>
		  			
		  				<td>
		  				
		  				<button type="button" class="btn btn-danger">Retrive</button>
		  				
		  				</td>
		  				</a>

		  				
		  			<?php } ?>




		  			<?php 

		  			$p = "SELECT * FROM licence_register WHERE licence_register_id='".$v['book_register_id']."'";
		  				$p1 = mysqli_query($con,$p);
		  				$p2 = mysqli_fetch_assoc($p1);
		  				// echo "<pre>";
		  				// print_r($p2);
		  				// die;
		  			 if($v['status'] == 0 && $v['subcategory_name'] == "Learning Licence"){ ?>
		  				<td><button type="button" class="btn btn-warning">Exam Proccess</button></td>
		  			<?php  }else{ ?>
		  				<td>


		  				<?php 
		  				if($v['status'] == 2 || $v['status'] == 3){

		  				$d = "SELECT * FROM exam_create WHERE create_exam_date='".$v['slot_book_date']."' AND create_slot_id='".$v['slot_no']."'";
		  				$d1 = mysqli_query($con,$d);
		  				$d2 = mysqli_fetch_assoc($d1);
		  				if(!empty($d2))
		  				{
				  				 $a = "SELECT * FROM final_result WHERE result_exam_id='".$d2['create_exam_id']."' AND user_id='".$_SESSION['id']."' AND final_category_id='".$v['book_category_id']."' AND final_subcategory_id='".$v['book_subcategory_id']."' AND final_register_id='".$v['book_register_id']."'";
				  				$a1 = mysqli_query($con,$a);
				  				$a2 = mysqli_fetch_assoc($a1);
				  				if(!empty($a2))
				  				{
				  					echo $a2['result_type'];
				  				}
		  				?>	
		  				<?php } }elseif($p2['status'] == 4){ ?>

		  				<a href="licence_create.php?l_id=<?php echo $p2['licence_register_id']; ?>">
		  					<button type="button" class="btn btn-warning">View Licence</button>
		  				</a>
		  				<?php } else if($v['status'] == 5){  ?>



		  				<?php }  else if($v['status'] == 20){ ?>
		  				
		  					<button type="button" class="btn btn-danger"> Stop</button>
		  				
		  				
		  				<?php } else{  ?>
		  					<?php if($v['subcategory_name'] == "Learning Licence") { ?>
		  				<a href="exam.php?id=<?php echo $v['slot_book_id']; ?>">
		  					<button type="button" class="btn btn-success">Exam start</button>
		  				</a>
		  			<?php } ?>
		  				</td>
		  			<?php } }  ?>


		  		</tr>
		  		<?php } ?>
		  		
		
		  </tbody>

		</table>
	
</div>

<?php
	include("footer.php");
?>