<?php 

	ob_start();
	include("header.php");

	include ("db.php");
	//session_start();

	 // echo "<pre>";
	 // print_r($_SESSION);
	 // die;
	  $id = $_GET['book_id'];
	// die;
	 $q = "SELECT * FROM licence_register WHERE licence_register_id='$id'";
	 $q1 = mysqli_query($con,$q);
	 $q2 = mysqli_fetch_assoc($q1);
	

	$data = "SELECT * FROM slot_schedule WHERE schedule_state_id='".$q2['licence_state_id']."' AND schedule_city_id='".$q2['licence_city_id']."' AND schedule_office_id='".$q2['licence_office_id']."' AND status=1";

	 $data1 = mysqli_query($con,$data);
	 $all = mysqli_fetch_assoc($data1);
	 // print_r($all);
	 // die;
	 	 

	  function getDatesFromRange($start, $end, $format = 'Y-m-d') { 
      
    // Declare an empty array 
    $array = array(); 
      
    // Variable that store the date interval 
    // of period 1 day 
    $interval = new DateInterval('P1D'); 
  
    $realEnd = new DateTime($end); 
    $realEnd->add($interval); 
  
    $period = new DatePeriod(new DateTime($start), $interval, $realEnd); 
  
    // Use loop to store date into array 
    foreach($period as $date) {                  
        $array[] = $date->format($format);  
    } 
  
    // Return the array elements 
    return $array; 
} 
  
$s = new DateTime('now');
$s->modify('+3 month'); // or you can use '-90 day' for deduct
$s = $s->format('Y-m-d');
// Function call with passing the start date and end date 
$Date = getDatesFromRange(date('Y-m-d'), $s); 
  
//var_dump($Date);
// print_r($Date); 

// die;


 if(isset($_GET['id']))
  {

    // echo $_GET['id'];die;
    $id=$_GET['id'];

    $m = "DELETE FROM slot WHERE slot_id='$id'";
    $m1 = mysqli_query($con,$m);
    if($m1)
    {
      header("location:view_slot.php");
    }
  }

  $r = "SELECT * FROM slot";
  $r1 = mysqli_query($con,$r);
  $data = mysqli_fetch_all($r1,MYSQLI_ASSOC);



  			// echo $_SESSION['email'];
  			// die;
  if(isset($_POST['book']))
  {



  		$slot = $_POST['slot_no'];
  		$user_id = $_POST['book_user_id'];
  		$schedule_id = $_POST['book_schedule_id'];
  		$state_id = $_POST['book_state_id'];
  		$city_id = $_POST['book_city_id'];
  		$office_id = $_POST['book_office_id'];
  		$date =date('Y-m-d', strtotime($_POST['slot_book_date']));
  		$book_register_id = $_POST['book_register_id'];


  // 		echo "<pre>";
		// print_r($_POST);
	 // 	die;

  		  $d = "INSERT INTO slot_book (slot_no,book_user_id,book_register_id,book_schedule_id,book_state_id,book_city_id,book_office_id,slot_book_date,book_category_id,book_subcategory_id)VALUES('$slot','$user_id','$book_register_id','$schedule_id','$state_id','$city_id','$office_id','$date','".$q2['licence_category_id']."','".$q2['licence_subcategory_id']."')";
  		


  		
  		$d1 = mysqli_query($con,$d);
  		if($d1)
  		{

  			foreach ($data as $key => $value) {
  				# code...
  			if($value['slot_id'] == $slot)
  			{


  				$_SESSION['slot_time'] = $value['slot_time'];
  				echo $value['slot_time'];
  			}
  			}
  			// echo $slot;
  			// die;
  			$_SESSION['slot_no'] = $slot;
  			$_SESSION['date'] = $date;
  			// $_SESSION['user_id'] = $user_id;

  			header("location:book_email.php");
  		}

  }


// print_r($data[0]['slot_id']);
// die;
	
?>


<!DOCTYPE html>
<html>
<head>

	<title>Slot Booking</title>
	<style type="text/css">
		.my-custom-scrollbar {
			position: relative;
			height: 500px;
			overflow: auto;
			}
		.table-wrapper-scroll-y {
			display: block;
			}
	</style>

</head>
<body>


	<div class="container-fluid mt-5">
		<div class="container">
			<div class="row">
				<div class="col-6">

					<h5 class="font-weight-bold">Note :</h5>
					<p>* The Slot Timings are Displayed on the right side of the table.</p>
					<p>* Please check the date and slot no. before selecting the slot.</p>
					<br><br>
					<div class="table-wrapper-scroll-y my-custom-scrollbar">
					<table class="table table-hover">
					  <thead class="thead-light">
					    <tr>
					      <th scope="col">Date</th>
					      <th scope="col">Day</th>
					      <th scope="col">1</th>
					      <th scope="col">2</th>
					      <th scope="col">3</th>
					      <th scope="col">4</th>
					      <th scope="col">5</th>
					    </tr>
					  </thead>
					  <tbody>

					  	

					  	<?php  for($i=0;$i<count($Date);$i++){	 ?>
					    <tr>
					      <th scope="row" class="bg-light" id="demo_<?php echo $i+1; ?>"><?php echo date('d-m-Y',strtotime($Date[$i])); ?></th>
					      <td><?php echo date('D',strtotime($Date[$i])); ?></td>
					      <td class="bg-danger"><input type="radio" onclick="book(<?php echo $i+1; ?>,<?php echo $data[0]['slot_id']; ?>,1)" name="slot" class="mr-3"><?php echo $all['slot1'] ?>-</td>
					      <td class="bg-danger"><input type="radio" name="slot" class="mr-3" onclick="book(<?php echo $i+1; ?>,<?php echo $data[1]['slot_id']; ?>,2)"><?php echo $all['slot2'] ?>-</td>
					      <td class="bg-danger"><input type="radio" name="slot" class="mr-3" onclick="book(<?php echo $i+1; ?>,<?php echo $data[2]['slot_id']; ?>,3)"><?php echo $all['slot3'] ?>-</td>
					      <td class="bg-danger"><input type="radio" name="slot" class="mr-3" onclick="book(<?php echo $i+1; ?>,<?php echo $data[3]['slot_id']; ?>,4)"><?php echo $all['slot4'] ?>-</td>
					      <td class="bg-danger"><input type="radio" name="slot" class="mr-3" onclick="book(<?php echo $i+1; ?>,<?php echo $data[4]['slot_id']; ?>,5)"><?php echo $all['slot5'] ?>-</td>
					    </tr>
					<?php  } ?>
					  </tbody>
					</table>
				</div>
				</div>


				<div class="col-6">
					
					<h5>Celendar Indicator</h5>
					<ul>
						<li><button class="btn btn-secondary mr-3"></button>Slot Restricted</li>
						<li><button class="btn btn-info mr-3"></button>Holidays</li>
						<li><button class="btn btn-danger mr-3"></button>No Slots Available</li>
						<li><button class="btn btn-warning mr-3"></button>Quotas Not Opened</li>
					</ul>
					<br><br>

					<h4 class="text-weight-bold">Slot Timings</h4>

					<table class="table mt-2 table-secondary">
						<thead class="thead-light">

							<tr>
								<th scope="col">Slot No</th>
								<th scope="col">Timing</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($data as $key => $value) { ?>
							<tr>
								 <td><?php echo $key+1; ?></td>
              					 <td><?php echo $value['slot_time']; ?></td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
	<form method="post">
		<input type="text" name="slot_no" id="slot_no" hidden="">
		<input type="text" name="slot_book_date" id="slot_book_date" hidden="">
		<input type="text" name="book_register_id" id="book_register_id" hidden="" value="<?php echo $_GET['book_id'];?>" >
		<input type="text" name="book_user_id" id="book_user_id" hidden="" value="<?php echo $_SESSION['id'];?>" >
		<input type="text" name="book_schedule_id" id="book_schedule_id" hidden="" value="<?php echo $all['slot_schedule_id'];?>" >
		<input type="text" name="book_state_id" id="book_state_id" hidden="" value="<?php echo $all['schedule_state_id'];?>" >
		<input type="text" name="book_city_id" id="book_city_id" hidden="" value="<?php echo $all['schedule_city_id'];?>" >
		<input type="text" name="book_office_id" id="book_office_id" hidden="" value="<?php echo $all['schedule_office_id'];?>">
		<button type="submit" class="btn btn-success" name="book" >Book</button>
	</form>
		</div>
	</div>


</body>
</html>

<?php include ("footer.php"); ?>

<script type="text/javascript">
	
		function book(no,slot,slot_no)
		{
				// alert($('#demo_'+no).text());
				 // alert(slot);
				var d = $('#demo_'+no).text();
				$('#slot_no').val(slot);
				$('#slot_book_date').val(d);
		}


</script>