 <?php 
      ob_start();

        include('header.php');

        include('db.php');


        if(isset($_GET['id']))
        {
            $id = $_GET['id'];
            $m = "SELECT * FROM admin WHERE admin_id='$id'";
            $m1 = mysqli_query($con,$m);
            $m2 = mysqli_fetch_assoc($m1);
            // echo "<pre>";
            // // print_r($m2);
            // // die;


        }

        if(count($_POST)>0)
        {
          //echo "<pre>";
          //print_r($_POST);
          //print_r($_FILES);
          //die;
          $id = $_POST['admin_id'];

          $name = $_POST['admin_name'];
          $email = $_POST['admin_email'];
          $password = $_POST['admin_password'];
          $contact = $_POST['admin_contact'];
          $gender = $_POST['admin_gender'];
          $hobby = implode(',', $_POST['hobby']);
          $dob = $_POST['admin_date'];
          $address = $_POST['admin_address'];
          
          $m = "SELECT * FROM admin WHERE admin_id='$id'";
          $m1 = mysqli_query($con,$m);
          $m2 = mysqli_fetch_assoc($m1);
          // print_r($m2['admin_profile']);
          // die;
          if($_FILES['profile']['error'] == 0)
          {
              unlink("images/".$m2['admin_profile']);
              $img = time()."_".$_FILES['profile']['name'];
              move_uploaded_file($_FILES['profile']['tmp_name'], "images/".$img);
          }
          else
          {
              $img = $m2['admin_profile'];
          }

          $q = "UPDATE admin SET admin_name='$name',admin_email='$email',admin_password='$password',admin_contact='$contact',admin_gender='$gender',admin_hobby='$hobby',admin_dob='$dob',admin_address='$address',admin_profile='$img' WHERE admin_id='$id'";
          $q1 = mysqli_query($con,$q);
          if($q1)
          {
            header("location:view_admin.php");
          }

        }



  ?>




  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Admin Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Admin Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Admin</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" id="myform" enctype="multipart/form-data">
                <div class="card-body">
                  <input type="hidden" name="admin_id" value="<?php  echo $m2['admin_id']; ?>">
                  <div class="form-group">
                    <label for="exampleInputName">Name</label>
                    <input type="text"  id="exampleInputName" placeholder="Enter Name" class="form-control" name="admin_name" value="<?php echo $m2['admin_name']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="admin_email" value="<?php echo $m2['admin_email']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="admin_password" value="<?php echo $m2['admin_password']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputContact">Contact</label>
                    <input type="text" class="form-control" id="exampleInputContact" placeholder="Contact" name="admin_contact" value="<?php echo $m2['admin_contact']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputGender">Gender</label><br>
                    <input type="radio"  id="exampleInputGender" name="admin_gender" value="male" <?php if($m2['admin_gender']=='male'){echo 'checked';}?>>&nbsp;&nbsp;Male&nbsp;&nbsp;
                    <input type="radio"  id="exampleInputGender" name="admin_gender" value="female" <?php if($m2['admin_gender']=='female'){echo 'checked';}?>>&nbsp;&nbsp;Female
                  </div>
                  <br>
                  <?php 
                  $hob = explode(',',$m2['admin_hobby']);
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
                    <input type="date" name="admin_date" id="date" class="form-control" value="<?php echo $m2['admin_dob']; ?>">
                  </div>
                  <br>
                  <div class="form-group">
                    <label class="exampleAddress" >Address</label>
                    <textarea class="form-control" name="admin_address"><?php echo $m2['admin_address']; ?></textarea>
                  </div>
                    <div class="form-group">
                    <label class="exampleAddress">File</label><br>
                    <input type="file" name="profile" >
                    <img src="images/<?= $m2['admin_profile']; ?>" width="100px">
                  </div>
                
            


                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

            <!-- Form Element sizes -->

                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <?php include('footer.php'); ?>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script>
  $( "#myform" ).validate({
  rules: {
    admin_name: {
      required: true
    },
     admin_email:
    {
      required:true,
      email:true
    },
     admin_password:
    {
      required:true,
      minlength:5
    },
    admin_contact:
    {
      required:true,
      minlength:10,
      maxlength:10
    },
      admin_gender:
    {
      required:true
    },
      'hobby[]':
    {
      required:true
    },
      admin_date:
    {
      required:true
    },
    admin_address:
    {
      required:true
    },
      profile:
    {
      required:true 
    }

  },
  messages:{
     admin_name: {
      required: "<span style='color:red'>Name Field is required</span>"
    },
    admin_email:
    {
      required:"<span style='color:red'>Email Field is requied</span>",
      email:"Valid Email address"
    },
     admin_password:
    {
      required:"<span style='color:red'>Password Field is requied</span>",
      minlength:"Enter minimum 5 length"
    },
     admin_contact:
    {
      required:"<span style='color:red'>Contact Field is requied</span>",
     
    },
          admin_gender:
    {
      required:"<span style='color:red'>Gender Field is requied</span>"
    },
     'hobby[]':
    {
      required:"<span style='color:red'>Hobby Field is requied</span>"
    },
      admin_date:
    {
      required:"<span style='color:red'>Date of birth Field is requied</span>"
    },
      admin_address:
    {
      required:"<span style='color:red'>Address Field is requied</span>"
    },
      profile:
    {
      required:"<span style='color:red'>Profile Photo Field is requied</span>"
    }
  }
});
</script>