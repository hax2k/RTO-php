<?php

    ob_start();
    include("header.php");

    include('db.php');


        if(count($_POST)>0)
        {


          // echo "<pre>";
          // print_r($_POST);
          // print_r($_SESSION);
          // die;
          $subcategory=$_GET['subcategory_id'];
          $category = $_GET['category_id'];
          $p = "SELECT * FROM category WHERE category_id='$category'";
          $p1 = mysqli_query($con,$p);
          $p2 = mysqli_fetch_assoc($p1);
          $state = $_POST['state_id'];
          $city = $_POST['city_id'];
          $office = $_POST['office_id'];
          // $area = $_POST['area_id'];
          $name = $_POST['name'];
          $email = $_POST['email'];
          $address = $_POST['address']; 
          $contact = $_POST['contact_no'];
          $vehical = $_POST['vehical_id'];
          $dob = $_POST['dob'];
          $blood_group = $_POST['blood_group'];
          $qualification = $_POST['qualification'];
          $photo = time()."_".$_FILES['photo']['name'];
          move_uploaded_file($_FILES['photo']['tmp_name'], "images/".$photo);
          $id_proof_type = $_POST['id_proof_type'];
          $img = time();
          //move_uploaded_file($_FILES['id_proof_image']['tmp_name'], "images/".$img);
          // $register_date = $_POST['register_date'];
          $nominee_name = $_POST['nominee_name'];
          $aadhar_no = $_POST['aadhar_no'];
          // print_r($p2);
          // die;
          if($p2['category_name'] == "RC BOOK")
          {
            $rcbook = rand(100000,9000000);
          }
          else
          {
            $rcbook = " ";
          }


          $q = "INSERT INTO licence_register(licence_category_id,licence_subcategory_id,licence_state_id,licence_city_id,licence_office_id,user_id,name,email,address,contact_no,vehical_id,dob,blood_group,qualification,photo,id_proof_type,id_proof_image,nominee_name,aadhar_no,rcbook_no)VALUES('$category','$subcategory','$state','$city','$office','".$_SESSION['id']."','$name','$email','$address','$contact','$vehical','$dob','$blood_group','$qualification','$photo','$id_proof_type','$img','$nominee_name','$aadhar_no','$rcbook')";

      
          $q1 = mysqli_query($con,$q);
         $id = mysqli_insert_id($con);

         // echo "<pre>";
         // print_r($q);
         // die;
        

         foreach ($_FILES['id_proof_image'] as $key => $value) 
         {
            if($key == "name")
            {
                foreach ($value as $k => $v) 
                {
                 // echo $v;
                 // die;
                  $image = time()."_".$v;
                  $m = "INSERT INTO proof_image (licence_register_id,proof_image_path) VALUES('$id','$image')";
                  $m = mysqli_query($con,$m);
                  move_uploaded_file($_FILES['id_proof_image']['tmp_name'][$k], "images/$image");
                }
            }
          }
        
          if($q1)
          {
            header("location:payment.php?book_id=".$id );
            // header("location:slot_book.php?book_id=".$id );
          }
          // if($q1)
          // {
          //   echo "INSERTED...";
          // } 

        }
?>

<?php  if(empty($_SESSION['id'])){ ?>
  <a href="login.php">
  <h1 style="text-align: center;color: red;margin-top: 15px;">..You are not Login..</h1>
  </a>
<?php }else{ ?>


<?php 
  $n = "SELECT * FROM licence_register WHERE user_id='".$_SESSION['id']."' AND licence_subcategory_id = '".$_GET['subcategory_id']."' AND licence_category_id = '".$_GET['category_id']."'";
  $n1 = mysqli_query($con,$n);
  $n2 = mysqli_fetch_assoc($n1);
  // echo "<pre>";
  // print_r($n2);
  // die;
  if(!empty($n2) && $n2['status']==0){ ?>
  <h1 style="text-align: center;color: red;margin-top: 15px;">..You are Apply..</h1>
<?php }else{ ?>
  <div class="service_details_area">
        <div class="container">
            <div class="row">
                    <div class="col-lg-4 col-md-4">
                            <div class="service_details_left">
                                <h3>Services</h3>
                                <div class="nav nav-pills" id="v-pills-tab" role="tablist"
                                    aria-orientation="vertical">
                                    <a class=" active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home"
                                        role="tab" aria-controls="v-pills-home" aria-selected="true">Registration</a>
                                   <!--  <a class="" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile"
                                        role="tab" aria-controls="v-pills-profile" aria-selected="false">Exam</a> -->
                                      <!-- <a class="" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages"
                                          role="tab" aria-controls="v-pills-messages" aria-selected="false">Result</a> -->
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-8 col-md-8">
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                    aria-labelledby="v-pills-home-tab">
                                    <form role="form" method="post" id="myform" enctype="multipart/form-data">
                                        <div class="card-body">
                                            <h2>Registration</h2>
                                             <?php 

                                                  $m = "SELECT * FROM state";
                                                  $m1 = mysqli_query($con,$m);
                                                  $m2 = mysqli_fetch_all($m1,MYSQLI_ASSOC);
                                                  // echo "<pre>";
                                                  // print_r($m2);
                                                  // die;

                                            ?>

                                            <div class="form-group">
                                              <label for="exampleInputName">Office State Name</label><br>
                                              <select class="form-control" name="state_id" id="state_id">
                                                <option>-select state-</option>
                                                <?php  foreach($m2 as $value){ ?>
                                                <option value="<?php echo $value['state_id']; ?>"><?php echo $value['state_name']; ?></option>
                                                <?php } ?>
                                              </select>
                                            </div>
                                          <?php 

                                              $n = "SELECT * FROM city";
                                              $n1 = mysqli_query($con,$n);
                                              $n2 = mysqli_fetch_all($n1,MYSQLI_ASSOC);
                                              // echo "<pre>";
                                              // print_r($n2);
                                              // die;
                                          ?>

                                          <div class="form-group">
                                              <label for="exampleInputName">Office City Name</label><br>
                                              <select class="form-control"  name="city_id" id="city_id">
                                              <option value="-1">-select City-</option>
                                              
                                              </select>
                                          </div>
                                      
                                          <?php 

                                              $n = "SELECT * FROM rto_office";
                                              $n1 = mysqli_query($con,$n);
                                              $n2 = mysqli_fetch_all($n1,MYSQLI_ASSOC);
                                              // echo "<pre>";
                                              // print_r($n2);
                                              // die;
                                          ?>

                                          <div class="form-group">
                                              <label for="exampleInputName">Office Name</label><br>
                                              <select class="form-control"  name="office_id" id="office_id">
                                              <option value="-1">-select Office-</option>
                                              
                                              </select>
                                          </div>

                                        <input type="hidden" name="name" value="<?php  echo $_SESSION['name']; ?>">
                                          <div class="form-group">
                                            <label for="exampleInputName">Name</label>
                                            <input type="text" disabled  id="exampleInputName" placeholder="Enter Name" class="form-control" name="name" value="<?php echo $_SESSION['name']; ?>">
                                          </div>


                                          <input type="hidden" name="email" value="<?php  echo $_SESSION['email']; ?>">
                                          <div class="form-group">
                                            <label for="exampleInputName">E-Mail</label>
                                            <input type="text" disabled  id="exampleInputName" placeholder="Enter Name" class="form-control" name="email" value="<?php echo $_SESSION['email']; ?>">
                                          </div>

                                          <div class="form-group">
                                            <label for="exampleInputPassword1">Address</label>
                                            <textarea name="address" class="form-control"></textarea>
                                          </div>
                                          <div class="form-group">
                                            <label for="exampleInputContact">Contact</label>
                                            <input type="text" class="form-control" id="exampleInputContact" placeholder="Contact" name="contact_no">
                                          </div>

                                          <?php 

                                                  $z = "SELECT * FROM vehical";
                                                  $z1 = mysqli_query($con,$z);
                                                  $z2 = mysqli_fetch_all($z1,MYSQLI_ASSOC);
                                                  // echo "<pre>";
                                                  // print_r($z2);
                                                  // die;

                                            ?>

                                          <div class="form-group">
                                            <label for="exampleInputContact">Vehicle Type:</label>
                                            <select class="form-control w-50" name="vehical_id" id="vehical_name">
                                                <option>-select vehical-</option>
                                                <?php  foreach($z2 as $value){ ?>
                                                <option value="<?php echo $value['vehical_id']; ?>"><?php echo $value['vehical_name']; ?></option>
                                                <?php } ?>
                                              </select>
                                            <!-- <input type="text" class="form-control" id="exampleInputContact" placeholder="Enter Vehical Name" name="vehical_name"> -->
                                          </div>
                                          <div class="form-group">
                                            <label for="exampleInputContact">Date Of Birth:</label>
                                            <input type="date" class="form-control" id="exampleInputContact" placeholder="Enter Date Of Birth" name="dob">
                                          </div>
                                          <div class="form-group">
                                            <label for="exampleInputContact">Blood Group:</label>
                                            <input type="text" class="form-control" id="exampleInputContact" placeholder="Enter Blood Group" name="blood_group">
                                          </div>
                                          <div class="form-group">
                                            <label for="exampleInputContact">Qualification:</label>
                                            <input type="text" class="form-control" id="exampleInputContact" placeholder="Enter Qualification" name="qualification">
                                          </div>
                                          <div class="form-group">
                                            <label for="exampleInputContact">Photo:</label><br>
                                            <input type="file" id="exampleInputContact" placeholder="" name="photo">
                                          </div>
                                         <?php 

                                             $r = "SELECT * FROM proof";
                                             $r1 = mysqli_query($con,$r);
                                             $r2 = mysqli_fetch_all($r1,MYSQLI_ASSOC);
                                             // echo "<pre>";
                                             // print_r($r2);
                                             // die;
                  
                                        ?>

                                        <div class="form-group">  
                                             <label for="exampleInputName"> ID Proof Type</label>
                                             <select class="form-control" name="id_proof_type">
                                                  <option>---select ID Proof Type-----</option>
                                                  <?php  foreach($r2 as $value){ ?>
                                                  <option value="<?php echo $value['proof_id']; ?>"> 
                                                    <?php echo $value['proof_name']; ?>
                                                  </option>
                                                  <?php } ?>
                                             </select>
                                        </div>
                                          </div>                           

                                          <div class="form-group ml-3">
                                             <label for="exampleInputName">ID Proof Image</label><br>
                                             <input type="file" name="id_proof_image[]" multiple>
                                          </div>

                                        <!--   <div class="form-group">
                                            <label for="exampleInputContact">Register Date:</label>
                                            <input type="date" class="form-control" id="exampleInputContact" placeholder="Enter Register Date" name="register_date">
                                          </div> -->
                                          
                                          <div class="form-group ml-3">
                                            <label for="exampleInputContact">Nominee Name :</label>
                                            <input type="text" class="form-control" id="exampleInputContact" placeholder="Enter Nominee Name" name="nominee_name">
                                          </div>
                                          <div class="form-group ml-3">
                                            <label for="exampleInputContact">Aadhar No:</label>
                                            <input type="text" class="form-control" id="exampleInputContact" placeholder="Enter Adhar No." name="aadhar_no">
                                          </div>
                                           <div action="#" class="form-group ml-3">
                                                <button class="btn btn-primary" name="submit" type="submit">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                </div>
                            </div>
                        </div>
<?php  } ?>

<?php  } ?>

    
 

<?php
    include("footer.php");
?>  
<script type="text/javascript">
    
    $(document).ready(function(){
        $('#state_id').change(function(){
            var s_id = $(this).val();

            $.ajax({
              url:'all_city.php',
              type:'POST',
              data:{
                state_id:s_id
              },
             success:function(res)
             {
                $('#city_id').html(res);
             }
            });
        });
    });
    
    $(document).ready(function(){
        $('#city_id').change(function(){
            var o_id = $(this).val();
            $.ajax({
              url:'all_office.php',
              type:'POST',
              data:{
                office_id:o_id
              },
              success:function(res)
              {
                  $('#office_id').html(res);
              }
            });
        });
    });
  </script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script>
  $( "#myform" ).validate({
  rules: {
    state_id: {
      required: true
    },
     city_id:
    {
      required:true
    },
     office_id:
    {
      required:true
    },
     name:
    {
      required:true
    },
      email:
    {
      required:true,
      email:true
    },
      address:
    {
      required:true
    },
      contact:
    {
      required:true,
      minlength:10,
      maxlength:10
    },
    vehical_id:
    {
      required:true
    },
      dob:
    {
      required:true 
    },
    blood_group:
    {
      required:true
    },
    qualification:
    {
      required:true
    },
    photo:
    {
      required:true
    },
    id_proof_type:
    {
      required:true
    },
    id_proof_image:
    {
      required:true
    },
     nominee_name:
    {
      required:true
    },
     aadhar_no:
    {
      required:true
      maxlength:12
    }

    

  },
  messages:{
     state_id: {
      required: "<span style='color:red'>State name Field is required</span>"
    },
    city_id:
    {
      required:"<span style='color:red'>City name Field is requied</span>",
      email:"Valid Email address"
    },
     office_id:
    {
      required:"<span style='color:red'>Office nameField is requied</span>",
    },
     name:
    {
      required:"<span style='color:red'>Name Field is requied</span>",
     
    },
      address:
    {
      required:"<span style='color:red'>Address Field is requied</span>"
    },
     vehical_id:
    {
      required:"<span style='color:red'>Vehical Name Field is requied</span>"
    },
      dob:
    {
      required:"<span style='color:red'>Date of birth Field is requied</span>"
    },
      blood_group:
    {
      required:"<span style='color:red'>Blood Group Field is requied</span>"
    },
      qualification:
    {
      required:"<span style='color:red'>Qualification Field is requied</span>"
    },
      photo:
    {
      required:"<span style='color:red'>Photo is requied</span>"
    },
      id_proof_type:
    {
      required:"<span style='color:red'>ID Proof Type is requied</span>"
    }, 
      id_proof_image:
    {
      required:"<span style='color:red'>ID Proof Image is requied</span>"
    },
      nominee_name:
    {
      required:"<span style='color:red'>Nominee Name is requied</span>"
    },
      aadhar_no:
    {
      required:"<span style='color:red'>Aadhar No. is requied</span>"
    }
  }
});
</script>