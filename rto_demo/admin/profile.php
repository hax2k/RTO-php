<?php   

  ob_start();
  include('header.php'); 

  include('db.php');



          $id = $_SESSION['id'];
          $s = "SELECT * FROM admin WHERE admin_id='$id'";
          $s1 = mysqli_query($con,$s);
          $s2 = mysqli_fetch_assoc($s1);
          // echo "<pre>";
          // print_r($s2);
          // die; 
        
        if(isset($_POST['submit']))
        {
          // echo "<pre>";
          // print_r($_POST);
          // die;
          $opass  = $_POST['opass'];  
          $npass  = $_POST['npass'];
          $cpass  = $_POST['cpass'];

         $p = "SELECT * FROM admin WHERE admin_id='$id'";
         $p1 = mysqli_query($con,$p);
         $p2 = mysqli_fetch_assoc($p1);

         $var = $p2['admin_password'];
         // echo "<pre>";
         //  print_r($var);
         //  die;

         if($var == $opass)
         {
            if($opass != $npass)
            {
              if($npass == $cpass)
              {
                    $m = "UPDATE admin SET admin_password='$npass' WHERE admin_id='$id'";
                    $m1 = mysqli_query($con,$m);
                    if($m1)
                    {
                      header("location:logout.php");
                    }

              }
              else
              {
                  $msg = "New Password and Confirm Password not match";
              }
            }
            else
            {
                $msg = "Old Password and New Password is match";
            }
          }
          else
          {
            $msg = "Old Password is Not Correct";
          }


        }

        if((count($_POST)>0) && (isset($_POST['admin_name'])))
        {
          // echo "<pre>";
          // print_r($_POST);
          // die;
          $id = $_POST['admin_id'];

          $name = $_POST['admin_name'];
          $email = $_POST['admin_email'];
          $password = $_POST['admin_password'];
          $contact = $_POST['admin_contact'];
          $gender = $_POST['admin_gender'];
          $hobby = implode(',', $_POST['hobby']);
          $dob = $_POST['admin_date'];
          $address = $_POST['admin_address'];
          $img = time()."_".$_FILES['profile']['name'];
          move_uploaded_file($_FILES['profile']['tmp_name'], "images/".$img);

          $q = "UPDATE admin SET admin_name='$name',admin_email='$email',admin_password='$password',admin_contact='$contact',admin_gender='$gender',admin_hobby='$hobby',admin_dob='$dob',admin_address='$address',admin_profile='$img' WHERE admin_id='$id'";
          $q1 = mysqli_query($con,$q);
          if($q1)
          {
            header("location:profile.php");
          }

        }

?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="images/<?= $s2['admin_profile'] ?>" 
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center"><?= $s2['admin_name'] ?></h3>

                <p class="text-muted text-center"><?= $s2['admin_role'] ?></p>

                <p class="text-muted text-center"><?= $s2['admin_email'] ?></p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Followers</b> <a class="float-right">1,322</a>
                  </li>
                  <li class="laist-group-item">
                    <b>Following</b> <a class="float-right">543</a>
                  </li>
                  <li class="list-group-item">
                    <b>Friends</b> <a class="float-right">13,287</a>
                  </li>
                </ul>

                <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About Me</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Education</strong>

                <p class="text-muted">
                  B.S. in Computer Science from the University of Tennessee at Knoxville
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                <p class="text-muted">Malibu, California</p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                <p class="text-muted">
                  <span class="tag tag-danger">UI Design</span>
                  <span class="tag tag-success">Coding</span>
                  <span class="tag tag-info">Javascript</span>
                  <span class="tag tag-warning">PHP</span>
                  <span class="tag tag-primary">Node.js</span>
                </p>

                <hr>

                <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
  
                  <li class="nav-item"><a class="active nav-link" href="#settings" data-toggle="tab">Settings</a></li>
                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Change Password</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                 
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="timeline">
                    <?php if(isset($msg)){echo $msg;} ?>
                    <!-- The timeline -->
            <form  method="post">
                <div class="card-body">
                  
                  <div class="form-group">
                    <label for="exampleInputName">Old password</label>
                    <input type="text"  id="exampleInputName" placeholder="Enter Old Password" class="form-control" name="opass" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">New password</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter New Password" name="npass">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Confirm Password</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password" name="cpass">
                  </div>
                 
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" id="timeline" name="submit">Submit</button>
                </div>
              </form>
                  </div>
                  
                </div>
                  <!-- /.tab-pane -->

            <div class="active tab-pane" id="settings">
                      
              <form role="form" method="post">
                <div class="card-body">
                  <input type="hidden" name="admin_id" value="<?php  echo $s2['admin_id']; ?>">
                  <div class="form-group">
                    <label for="exampleInputName">Name</label>
                    <input type="text"  id="exampleInputName" placeholder="Enter Name" class="form-control" name="admin_name" value="<?php echo $s2['admin_name']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name=" admin_email" value="<?php echo $s2['admin_email']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="admin_password" value="<?php echo $s2['admin_password']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputContact">Contact</label>
                    <input type="text" class="form-control" id="exampleInputContact" placeholder="Contact" name="admin_contact" value="<?php echo $s2['admin_contact']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputGender">Gender</label><br>
                    <input type="radio"  id="exampleInputGender" name="admin_gender" value="male" <?php if($s2['admin_gender']=='male'){echo 'checked';}?>>&nbsp;&nbsp;Male&nbsp;&nbsp;
                    <input type="radio"  id="exampleInputGender" name="admin_gender" value="female" <?php if($s2['admin_gender']=='female'){echo 'checked';}?>>&nbsp;&nbsp;Female
                  </div>
                  <br>
                  <?php 
                  $hob = explode(',',$s2['admin_hobby']);
                  // print_r($hob);
                  ?>
                  <div class="form-check">
                    <label class="form-check-label" for="exampleCheck1"><b>Hobby</b></label><br>
                    <input type="checkbox" class="form-check-input" id="cricket" name="hobby[]" value="cricket" <?php if(in_array("cricket",$hob)){echo "checked";} ?>>Cricket &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="checkbox" class="form-check-input" id="music" name="hobby[]" value="music" <?php if(in_array("music",$hob)){echo "checked";} ?>>Music &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="checkbox" class="form-check-input" id="reading" name="hobby[]" value="reading" <?php if(in_array("reading",$hob)){echo "checked";} ?>>Reading 
                  </div>
                  <br>
                  <div class="form-group">
                    <label for="exampleDOB">Date Of Birth</label>
                    <input type="date" name="admin_date" id="date" class="form-control" value="<?php echo $s2['admin_dob']; ?>">
                  </div>
                  <br>
                  <div class="form-group">
                    <label class="exampleAddress" >Address</label>
                    <textarea class="form-control" name="admin_address"><?php echo $s2['admin_address']; ?></textarea>
                  </div>
              

                  <div class="form-group">
                    <label class="exampleAddress">File</label><br>
                    <input type="file" name="profile" value="<?php echo $s2['admin_profiles']; ?>">
                    <img src="images/<?= $s2['admin_profile']; ?>" width="100px">
                  </div>


                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
                   
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>



<?php include('footer.php'); ?>