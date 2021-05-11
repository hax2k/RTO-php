<?php

    ob_start();
    include("header.php");

    include('db.php');


        if(count($_POST)>0)
        {

          $vehical_registration_id=$_GET['vehical_registration_id'];
          $user_id = $_GET['category_id'];
          // $p = "SELECT * FROM category WHERE category_id='$category'";
          // $p1 = mysqli_query($con,$p);
          // $p2 = mysqli_fetch_assoc($p1);
          $vehical_id = $_POST['vehical_id'];
          $licence_register_id = $_POST['licence_register_id'];
          $vehical_no = $_POST['vehical_no'];
          // $area = $_POST['area_id'];
          $permanent_add = $_POST['permanent_add'];
          $temp_add = $_POST['temp_add'];
          $body = $_POST['body']; 
          $year_of_manufacture = $_POST['year_of_manufacture'];
          $no_of_cylinder = $_POST['no_of_cylinder'];
          $chassis_no = $_POST['chassis_no'];
          $engine_no = $_POST['engine_no'];
          $registration_date = $_POST['registration_date'];
          


          $q = "INSERT INTO vehical_registration(vehical_registration_id,user_id,vehical_id,licence_register_id,vehical_no,permanent_add,temp_add,body,year_of_manufacture,no_of_cylinder,chassis_no,engine_no,registration_date)VALUES('$vehical_registration_id','$user_id','$vehical_id','$licence_register_id','$vehical_no','permanent_add','$temp_add','$body','$year_of_manufacture','$no_of_cylinder','$chassis_no','$engine_no','$registration_date')";

      
          $q1 = mysqli_query($con,$q);
         $id = mysqli_insert_id($con);

        

         // foreach ($_FILES['id_proof_image'] as $key => $value) 
         // {
         //    if($key == "name")
         //    {
         //        foreach ($value as $k => $v) 
         //        {
         //         // echo $v;
         //         // die;
         //          $image = time()."_".$v;
         //          $m = "INSERT INTO proof_image (licence_register_id,proof_image_path) VALUES('$id','$image')";
         //          $m = mysqli_query($con,$m);
         //          move_uploaded_file($_FILES['id_proof_image']['tmp_name'][$k], "images/$image");
         //        }
         //    }
         //  }
        
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
  // $n = "SELECT * FROM licence_register WHERE user_id='".$_SESSION['id']."' AND licence_subcategory_id = '".$_GET['subcategory_id']."' AND licence_category_id = '".$_GET['category_id']."'";
  // $n1 = mysqli_query($con,$n);
  // $n2 = mysqli_fetch_assoc($n1);
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
                                    <form role="form" method="post" enctype="multipart/form-data">
                                        <div class="card-body">
                                            <h2>Vehicle Registration</h2>
                                             
                                        <input type="hidden" name="name" value="<?php  echo $_SESSION['id']; ?>">
                                          <div class="form-group">
                                            <label for="exampleInputName">Name</label>
                                            <input type="text" disabled  id="exampleInputName" placeholder="Enter Name" class="form-control" name="name" value="<?php echo $_SESSION['name']; ?>">
                                          </div>


                                          <input type="hidden" name="email" value="<?php  echo $_SESSION['id']; ?>">
                                          <div class="form-group">
                                            <label for="exampleInputName">E-Mail</label>
                                            <input type="text" disabled  id="exampleInputName" placeholder="Enter Name" class="form-control" name="email" value="<?php echo $_SESSION['email']; ?>">
                                          </div>

                                          <div class="form-group">
                                            <label for="exampleInputName">Vehicle No.</label>
                                            <input type="text" name="vehical_no" class="form-control">
                                          </div>

                                          <div class="form-group">
                                            <label for="exampleInputPassword1">Temporary Address</label>
                                            <textarea name="temp_address" class="form-control"></textarea>
                                          </div>

                                          <div class="form-group">
                                            <label for="exampleInputPassword1">Permanent Address</label>
                                            <textarea name="permanent_address" class="form-control"></textarea>
                                          </div>

                                          <div class="form-group">
                                            <label for="exampleInputPassword1">Type of Body</label>
                                            <input type="text" name="body" class="form-control"></input>
                                          </div>

                                          <div class="form-group">
                                            <label for="exampleInputPassword1">Year of Manufacture</label>
                                            <input type="date" name="year_of_manufacture" class="form-control"></input>
                                          </div>

                                          <div class="form-group">
                                            <label for="exampleInputPassword1">No. of Cylinder</label>
                                             <input type="text" name="year_of_manufacture" class="form-control"></input>
                                          </div>

                                          <div class="form-group">
                                            <label for="exampleInputPassword1">Chassis No.</label>
                                             <input type="text" name="no_of_cylinder" class="form-control"></input>
                                          </div>

                                          <div class="form-group">
                                            <label for="exampleInputPassword1">Engine No</label>
                                            <input type="text" name="engine_no" class="form-control"></input>
                                          </div>

                                          <div class="form-group">
                                            <label for="exampleInputContact">Registration Date</label>
                                            <input type="date" class="form-control" id="exampleInputContact" placeholder="" name="registration_date">
                                          </div>



                                          <!-- <?php 

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
                                            <input type="text" class="form-control" id="exampleInputContact" placeholder="Enter Vehical Name" name="vehical_name">
                                          </div> -->
                                         <!--  <div class="form-group">
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
                                          </div> -->

                                        <!--   <div class="form-group">
                                            <label for="exampleInputContact">Register Date:</label>
                                            <input type="date" class="form-control" id="exampleInputContact" placeholder="Enter Register Date" name="register_date">
                                          </div> -->
                                          
                                          <!-- <div class="form-group ml-3">
                                            <label for="exampleInputContact">Nominee Name :</label>
                                            <input type="text" class="form-control" id="exampleInputContact" placeholder="Enter Nominee Name" name="nominee_name">
                                          </div>
                                          <div class="form-group ml-3">
                                            <label for="exampleInputContact">Aadhar No:</label>
                                            <input type="text" class="form-control" id="exampleInputContact" placeholder="Enter Adhar No." name="aadhar_no">
                                          </div> -->
                                           <div action="#" class="form-group ml-3">
                                                <button class="btn btn-primary" name="submit" type="submit">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>


              <!-- <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                    aria-labelledby="v-pills-messages-tab">
                                    
                                   
                       

                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body p-0">
                                            <div class="row p-5">
                                                <div class="col-md-6">
                                                    <img src="http://via.placeholder.com/400x90?text=logo">
                                                </div>

                                                <div class="col-md-6 text-right">
                                                    <p class="font-weight-bold mb-1">Invoice #550</p>
                                                    <p class="text-muted">Due to: 4 Dec, 2019</p>
                                                </div>
                                            </div>

                                            <hr class="my-5">

                                            <div class="row pb-5 p-5">
                                                <div class="col-md-6">
                                                    <p class="font-weight-bold mb-4">Client Information</p>
                                                    <p class="mb-1">John Doe, Mrs Emma Downson</p>
                                                    <p>Acme Inc</p>
                                                    <p class="mb-1">Berlin, Germany</p>
                                                    <p class="mb-1">6781 45P</p>
                                                </div>

                                                <div class="col-md-6 text-right">
                                                    <p class="font-weight-bold mb-4">Payment Details</p>
                                                    <p class="mb-1"><span class="text-muted">VAT: </span> 1425782</p>
                                                    <p class="mb-1"><span class="text-muted">VAT ID: </span> 10253642</p>
                                                    <p class="mb-1"><span class="text-muted">Payment Type: </span> Root</p>
                                                    <p class="mb-1"><span class="text-muted">Name: </span> John Doe</p>
                                                </div>
                                            </div>

                                            <div class="row p-5">
                                                <div class="col-md-12">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th class="border-0 text-uppercase small font-weight-bold">ID</th>
                                                                <th class="border-0 text-uppercase small font-weight-bold">Item</th>
                                                                <th class="border-0 text-uppercase small font-weight-bold">Description</th>
                                                                <th class="border-0 text-uppercase small font-weight-bold">Quantity</th>
                                                                <th class="border-0 text-uppercase small font-weight-bold">Unit Cost</th>
                                                                <th class="border-0 text-uppercase small font-weight-bold">Total</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Software</td>
                                                                <td>LTS Versions</td>
                                                                <td>21</td>
                                                                <td>$321</td>
                                                                <td>$3452</td>
                                                            </tr>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Software</td>
                                                                <td>Support</td>
                                                                <td>234</td>
                                                                <td>$6356</td>
                                                                <td>$23423</td>
                                                            </tr>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Software</td>
                                                                <td>Sofware Collection</td>
                                                                <td>4534</td>
                                                                <td>$354</td>
                                                                <td>$23434</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                            <div class="d-flex flex-row-reverse bg-dark text-white p-4">
                                                <div class="py-3 px-5 text-right">
                                                    <div class="mb-2">Grand Total</div>
                                                    <div class="h2 font-weight-light">$234,234</div>
                                                </div>

                                                <div class="py-3 px-5 text-right">
                                                    <div class="mb-2">Discount</div>
                                                    <div class="h2 font-weight-light">10%</div>
                                                </div>

                                                <div class="py-3 px-5 text-right">
                                                    <div class="mb-2">Sub - Total amount</div>
                                                    <div class="h2 font-weight-light">$32,432</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                         
                        </div>

                    </div> -->

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