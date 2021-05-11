<?php 
include('db.php');
session_start();

if(count($_POST)>0)
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    $q = "SELECT * FROM admin WHERE admin_email='$email' AND admin_password='$password' AND admin_role='$role'";
    $q1 = mysqli_query($con,$q);
    $q2 = mysqli_num_rows($q1);
  // echo "<pre>";
  // print_r($_POST);
  // die;
    if($q2 == 1)
    {
        $q3 = mysqli_fetch_assoc($q1);
  //       echo "<pre>";
  // print_r($q3);
  // die;
        $_SESSION['id'] = $q3['admin_id'];
        $_SESSION['name'] = $q3['admin_name'];
        $_SESSION['role'] = $q3['admin_role'];
        $_SESSION['admin_profile'] = $q3['admin_profile'];
        header("location:dashboard.php");
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
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Gujarat RTO | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">

    <a href="../../index2.html"><b>Gujarat</b> RTO</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <span style="color: red;"><?php if(isset($msg)){echo $msg;} ?></span>
      <p class="login-box-msg">Sign in to start your session</p>

      <form  method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div>
          <input type="radio" class="ml-5" name="role" value="admin">&nbsp;&nbsp;Admin &nbsp;&nbsp;
          <input type="radio" class="ml-5" name="role" value="user">&nbsp;&nbsp;User &nbsp;&nbsp;
        </div><br>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block" style="align-items: center;">Sign In</button><br>
          </div>
        </div>
      </form>

      <p class="mb-1">
        <a href="forgot_password.php">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="pages/examples/register.html" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

</body>
</html>
