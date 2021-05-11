<?php
	 session_start();
    include('db.php');
    ob_start();


        if(isset($_POST['register']))
        {
          // echo "<pre>";
          // print_r($_POST);
          // print_r($_FILES);
          // die;

          $name = $_POST['user_name'];
          $email = $_POST['user_email'];
          $password = $_POST['user_password'];
          $contact = $_POST['user_contact'];
          $gender = $_POST['user_gender'];
          //$hobby = implode(',', $_POST['user_hobby']);
          $dob = $_POST['user_date'];
          $address = $_POST['user_address'];
          $img = time()."_".$_FILES['user_profile']['name'];
          move_uploaded_file($_FILES['user_profile']['tmp_name'], "images/".$img);

          $q = "INSERT INTO user (user_name,user_email,user_password,user_contact,user_gender,user_dob,user_address,user_profile)VALUES('$name','$email','$password','$contact','$gender','$dob','$address','$img')";
          $q1 = mysqli_query($con,$q);
          if($q1)
          {
              $s = "You are registered...";
          } 

        }
       

	if(isset($_POST['submit']))
	{
    	$email = $_POST['email'];
    	$password = $_POST['password'];
    	 	$q = "SELECT * FROM user WHERE user_email='$email' AND user_password='$password'";
    	$q1 = mysqli_query($con,$q);
    	$q2 = mysqli_num_rows($q1);
  		// echo "<pre>";
  		// print_r($_POST);
  		// die;
    	if($q2 == 1)
    	{
        	$q3 = mysqli_fetch_assoc($q1);
  			// echo "<pre>";
  			// print_r($q3);
  			// die;
        	$_SESSION['id'] = $q3['user_id'];
        	$_SESSION['name'] = $q3['user_name'];
          $_SESSION['contact'] = $q3['user_contact'];
        	$_SESSION['user_profile'] = $q3['user_profile'];
            $_SESSION['email'] = $q3['user_email'];
        	header("location:index.php");
    	}
    	else
    	{
      		$msg = "INVALID EMAIL OR PASSWORD..";
    	}

	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link href="css/login.css" rel="stylesheet" id="bootstrap-css">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>

	<div class="login-reg-panel">
		<div class="login-info-box">
			<h2>Have an account?</h2>
		<!-- 	<p>Lorem ipsum dolor sit amet</p> -->
			<label id="label-register" for="log-reg-show">Login</label>
			<input type="radio" name="active-log-panel" id="log-reg-show"  checked="checked">
		</div>
							
		<div class="register-info-box">
			<h2>Don't have an account?</h2>
			<!-- <p>Lorem ipsum dolor sit amet</p> -->
			<label id="label-login" for="log-login-show">Register</label>
			<input type="radio" name="active-log-panel" id="log-login-show">
		</div>
							
		<div class="white-panel">
			<div class="login-show">
				<h2>LOGIN</h2>
				<form method="post">
				<input type="text" name="email" placeholder="Email">
				<input type="password" name="password" placeholder="Password">
				<input type="submit" name="submit" class="btn btn-success" value="Login">
				<a href="forgot_password.php">Forgot password?</a>
				</form>
			</div>
			<div class="register-show">
				<h2>REGISTER</h2>
        <span><?php if(isset($s)){echo $s;} ?></span>
				<form method="post" enctype="multipart/form-data">
				<input type="text" name="user_name" placeholder="Name">
				<input type="text" name="user_email" placeholder="Email">
				<input type="password" name="user_password" placeholder="Password">
				<input type="password" placeholder="Confirm Password">
				<input type="text" name="user_contact" placeholder="Contact">
				<label> <b>Gender: </b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="radio" class="form-check-input" name="user_gender" value="male" style="display: inline-block !important;">Male&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" name="user_gender" value="female" style="display: inline-block !important;">Female<br>
                <!-- <label class="form-check-label" for="exampleCheck1"><b>Hobby:</b></label><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="checkbox" class="form-check-input" id="cricket" name="user_hobby[]" value="cricket">Cricket &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="checkbox" class="form-check-input" id="music" name="user_hobby[]" value="music">Music &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="checkbox" class="form-check-input" id="reading" name="user_hobby[]" value="reading">Reading <br><br> -->
                <label for="exampleDOB"><b>Date Of Birth:</b></label>
                <input type="date" name="user_date" id="date" class="form-control"><br>
                <label class="exampleAddress"><b>Address:</b></label>
                <textarea class="form-control" name="user_address"></textarea><br>
                 <label class="exampleAddress"><b>Profile:</b></label><br>
                 <input type="file" name="user_profile"><br><br>
                <input type="submit" class="btn btn-success	" name="register" value="REGISTER"><br>
                </form>
		</div>
		</div>
	</div>
</body>

	<script type="text/javascript">
		
    $(document).ready(function(){
    $('.login-info-box').fadeOut();
    $('.login-show').addClass('show-log-panel');
});


$('.login-reg-panel input[type="radio"]').on('change', function() {
    if($('#log-login-show').is(':checked')) {
        $('.register-info-box').fadeOut(); 
        $('.login-info-box').fadeIn();
        
        $('.white-panel').addClass('right-log');
        $('.register-show').addClass('show-log-panel');
        $('.login-show').removeClass('show-log-panel');
        
    }
    else if($('#log-reg-show').is(':checked')) {
        $('.register-info-box').fadeIn();
        $('.login-info-box').fadeOut();
        
        $('.white-panel').removeClass('right-log');
        
        $('.login-show').addClass('show-log-panel');
        $('.register-show').removeClass('show-log-panel');
    }
});
  

	</script>

</html>
