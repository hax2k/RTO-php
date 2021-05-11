 <?php 
        ob_start();

        include('header.php');

        include('db.php');


        if(count($_POST)>0)
        {
          // echo "<pre>";
          // print_r($_POST);
          // print_r($_FILES);
          // die;

          // $name = $_POST['admin_name'];
          // $email = $_POST['admin_email'];
          // $password = $_POST['admin_password'];
          // $contact = $_POST['admin_contact'];
          // $gender = $_POST['admin_gender'];
          // $hobby = implode(',', $_POST['hobby']);
          // $dob = $_POST['admin_date'];
          // $address = $_POST['admin_address'];
          // $img = time()."_".$_FILES['profile']['name'];
          // move_uploaded_file($_FILES['profile']['tmp_name'], "images/".$img);

         

        

            $q = "INSERT INTO admin (admin_name,admin_email,admin_password,admin_contact,admin_gender,admin_hobby,admin_dob,admin_address,admin_profile)VALUES('$name','$email','$password','$contact','$gender','$hobby','$dob','$address','$img')";
            $q1 = mysqli_query($con,$q);
            if($q1)
            {
              header("location:view_admin.php");
            }

            if (empty($name) && empty($email) && empty($password) && empty($contact) && empty($gender) && empty($hobby) && empty($dob) && empty($address) && empty($img)) 
            {
            // $a_email = $_POST['admin_email'];
            // $query = "SELECT * FROM `admin` WHERE `admin_email` = '$a_email'";
            // $run = mysqli_query($obj->con,$query);
            // $row = mysqli_num_rows($run);
            // if ($row == 0) 
            // {

            //     //  header('location:')
            //     // if($_FILES['admin_profile']['error'] == 0) 
            //     // {
            //     //     $img = $obj->upload_img("img",$_FILES['profile']);
            //     //     $_POST['profile'] = $img;
            //     // }
            //     // $_POST['hobby'] = implode(",", $_POST['hobby']);
            //     // $run = $obj->insert("admin",$_POST);
            //     if ($run) 
            //     {
            //         header('location: view_admin.php');
            //     }
            // }
            // else
            // {
            //     $email = "Email Address is Already in Use";
            // }
        }
        else
        {
            $form_valid = "Some Error In Form";
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
              <form role="form" method="post" enctype="multipart/form-data" id="myform">
                <div class="card-body">
                  <h6 style="color: red;"><?php echo @$form_valid; ?></h6>
                  <div class="form-group">
                    <label for="exampleInputName">Name</label>
                    <input type="text"  id="exampleInputName" placeholder="Enter Name" class="form-control" name="admin_name" value="<?php echo @$re_name; ?>">
                  </div>
                  <p style="color: red;"><?php echo @$name; ?></p>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="admin_email" value="<?php echo @$re_email; ?>">
                  </div>
                  <p style="color: red;"><?php echo @$email; ?></p>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="admin_password" value="<?php echo @$re_password; ?>">
                  </div>
                  <p style="color: red;"><?php echo @$password; ?></p>
                  <div class="form-group">
                    <label for="exampleInputContact">Contact</label>
                    <input type="text" class="form-control" id="exampleInputContact" placeholder="Contact" name="admin_contact" value="<?php echo @$re_contact; ?>">
                  </div>
                  <p style="color: red;"><?php echo @$contact; ?></p>
                  <div class="form-group">
                    <label for="exampleInputGender">Gender</label><br>
                    <input type="radio"  id="exampleInputGender" name="admin_gender" value="male" <?php echo (@$re_gender == "male") ? 'checked' : '' ; ?>>&nbsp;&nbsp;Male &nbsp;&nbsp;
                    <input type="radio"  id="exampleInputGender" name="admin_gender" value="female" <?php echo (@$re_gender == "female") ? 'checked' : '' ; ?>>&nbsp;&nbsp;Female
                  </div>
                  <p style="color: red;"><?php echo @$gender; ?></p>
                  <div class="form-check">
                    <label class="form-check-label" for="exampleCheck1"><b>Hobby</b></label><br>
                    <input type="checkbox" class="form-check-input" id="cricket" name="hobby[]" value="cricket" <?php echo (@in_array("cricket", @$re_hobby)) ? 'checked' : '' ; ?>>Cricket &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="checkbox" class="form-check-input" id="music" name="hobby[]" value="music" <?php echo (@in_array("music", @$re_hobby)) ? 'checked' : '' ; ?>>Music &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="checkbox" class="form-check-input" id="reading" name="hobby[]" value="reading" <?php echo (@in_array("reading", @$re_hobby)) ? 'checked' : '' ; ?>>Reading 
                  </div>
                  <p style="color: red;"><?php echo @$hobby; ?></p>
                  <br>
                  <div class="form-group">
                    <label for="exampleDOB">Date Of Birth</label>
                    <input type="date" name="admin_date" id="date" class="form-control" value="<?php echo @$re_dob; ?>">
                  </div>
                  <p style="color: red;"><?php echo @$dob; ?></p>
                  <br>
                  <div class="form-group">
                    <label class="exampleAddress">Address</label>
                    <textarea class="form-control" name="admin_address"><?php echo @$re_address; ?></textarea>
                  </div>
                  <p style="color: red;"><?php echo @$address; ?></p>
                <br>
                  <div class="form-group">
                    <label class="exampleAddress">File</label><br>
                    <input type="file" name="profile" value="<?php echo @$re_profile; ?>">
                  </div>
                  <p style="color: red;"><?php echo @$img; ?></p>


                <!-- /.card-body -->

                
                  <button type="submit" class="btn btn-primary">Submit</button>
                
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
 <!--  <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script> -->
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