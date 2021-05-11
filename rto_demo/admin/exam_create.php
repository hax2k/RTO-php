 <?php 

        include('header.php');

        include('db.php');


        


          if(count($_POST)>0)
          {
          //  echo "<pre>";
          // print_r($_POST);
          // die;
          $user_id = $_POST['user_id'];
          $state_id = $_POST['create_state_id'];
          $city_id = $_POST['create_city_id'];
          $office_id = $_POST['create_office_id'];
          $exam_id = $_POST['exam_name'];
          $slot_id = $_POST['slot_no'];
          $exam_date = $_POST['exam_date'];
          

      $q = "INSERT INTO exam_create (user_id,create_state_id,create_city_id,create_office_id,create_exam_id,create_slot_id,create_exam_date) values ('$user_id','$state_id','$city_id','$office_id','$exam_id','$slot_id','$exam_date')";
      // die;
         // echo "<pre>";
         //  print_r($_POST);
         //  die;
          $q1 = mysqli_query($con,$q);

          if($q1)
          {
            echo "INSERTED...";
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
            <h1>Exam Create Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Exam Form</li>
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
                <h3 class="card-title">Exam Create</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post">
                <div class="card-body">
                  
                  <?php 

                      $a = "SELECT * FROM user";
                      $a1 = mysqli_query($con,$a);
                      $a2 = mysqli_fetch_all($a1,MYSQLI_ASSOC);
                      // echo "<pre>";
                      // print_r($m2);
                      // die;

                ?>

                <div class="form-group">
                  <label for="exampleInputName">User Name</label><br>
                  <select class="form-control w-50" name="user_id" id="user_id">
                    <option>-select user-</option>
                    <?php  foreach($a2 as $value){ ?>
                    <option value="<?php echo $value['user_id']; ?>"><?php echo $value['user_name']; ?></option>
                    <?php } ?>
                  </select>
                </div>
                  <?php 

                      $m = "SELECT * FROM state";
                      $m1 = mysqli_query($con,$m);
                      $m2 = mysqli_fetch_all($m1,MYSQLI_ASSOC);
                      // echo "<pre>";
                      // print_r($m2);
                      // die;

                ?>

                <div class="form-group">
                  <label for="exampleInputName">State Name</label><br>
                  <select class="form-control w-50" name="create_state_id" id="create_state_id">
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
                  <label for="exampleInputName">City Name</label><br>
                  <select class="form-control w-50"  name="create_city_id" id="create_city_id">
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
                  <select class="form-control w-50"  name="create_office_id" id="create_office_id">
                  <option value="-1">-select Office-</option>
                  
                  </select>
              </div>


             <?php 

                      $b = "SELECT * FROM exam";
                      $b1 = mysqli_query($con,$b);
                      $b2 = mysqli_fetch_all($b1,MYSQLI_ASSOC);
                      // echo "<pre>";
                      // print_r($m2);
                      // die;

                ?>

                <div class="form-group">
                  <label for="exampleInputName">Exam Name</label><br>
                  <select class="form-control w-50" name="exam_name" id="exam_name">
                    <option>-select Exam-</option>
                    <?php  foreach($b2 as $value){ ?>
                    <option value="<?php echo $value['exam_id']; ?>"><?php echo $value['exam_name']; ?></option>
                    <?php } ?>
                  </select>
                </div>

              <?php 

                      $c = "SELECT * FROM slot";
                      $c1 = mysqli_query($con,$c);
                      $c2 = mysqli_fetch_all($c1,MYSQLI_ASSOC);
                      // echo "<pre>";
                      // print_r($m2);
                      // die;

                ?>

                <div class="form-group">
                  <label for="exampleInputName">Slot</label><br>
                  <select class="form-control w-50" name="slot_no" id="slot_no">
                    <option>-select Slot-</option>
                    <?php  foreach($c2 as $value){ ?>
                    <option value="<?php echo $value['slot_id']; ?>"><?php echo $value['slot_time']; ?></option>
                    <?php } ?>
                  </select>
                </div>

              <div class="form-group">
                <label for="exampleInputName">Exam Date</label>
                <input type="date" name="exam_date" id="exam_date" class="form-control">
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

  <script type="text/javascript">
    
    $(document).ready(function(){
        $('#create_state_id').change(function(){
            var s_id = $(this).val();

            $.ajax({
              url:'all_city.php',
              type:'POST',
              data:{
                state_id:s_id
              },
             success:function(res)
             {
                $('#create_city_id').html(res);
             }
            });
        });
    });
    
    $(document).ready(function(){
        $('#create_city_id').change(function(){
            var o_id = $(this).val();
            // alert(o_id);
            $.ajax({
              url:'all_office.php',
              type:'POST',
              data:{
                city_id:o_id
              },
              success:function(res)
              {
                  $('#create_office_id').html(res);
              }
            });
        });
    });
  </script>




















