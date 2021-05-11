 <?php 
        ob_start();
        include('header.php');

        include('db.php');


        if(count($_POST)>0)
        {
            // echo "<pre>";
            // print_r($_POST);
            // die;
          
          $schedule_state_id = $_POST['schedule_state_id'];
          $schedule_city_id = $_POST['schedule_city_id'];
          $schedule_office_id = $_POST['schedule_office_id'];
          // $slot_start_date = $_POST['slot_start_date']; 
          // $slot_end_date = $_POST['slot_end_date'];
          $slot1 = $_POST['slot1'];
          $slot2 = $_POST['slot2'];
          $slot3 = $_POST['slot3'];
          $slot4 = $_POST['slot4'];
          $slot5 = $_POST['slot5'];

          $q = "INSERT INTO slot_schedule (schedule_state_id,schedule_city_id,schedule_office_id,slot1,slot2,slot3,slot4,slot5)VALUES('$schedule_state_id','$schedule_city_id','$schedule_office_id','$slot1','$slot2','$slot3','$slot4','$slot5')";
          $q1 = mysqli_query($con,$q);

          if($q1)
          {
            header('header:view_slot_schedule.php');
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
            <h1>Slot Schedule Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Slot Schedule Form</li>
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
                <h3 class="card-title">Slot schedule</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" enctype="multipart/form-data">
                <div class="card-body">

                  

                 
                  <?php 

                  $m = "SELECT * FROM state";
                  $m1 = mysqli_query($con,$m);
                  $m2 = mysqli_fetch_all($m1,MYSQLI_ASSOC);
                  // echo "<pre>";
                  // print_r($m2);
                  // die;
                  ?>

                   <div class="form-group">
                    <label for="exampleInputName">State Name</label>
                    <select class="form-control" name="schedule_state_id" id="state_id">
                      <option>---select state-----</option>
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
                  // print_r($m2);
                  // die;
                  ?>

                  <div class="form-group">
                    <label for="exampleInputName">City Name</label>
                    <select class="form-control" name="schedule_city_id" id="city_id">
                      <option>---select City-----</option>
                     
                    </select>
                  </div>

                  <?php 

                  $n = "SELECT * FROM rto_office";
                  $n1 = mysqli_query($con,$n);
                  $n2 = mysqli_fetch_all($n1,MYSQLI_ASSOC);
                  // echo "<pre>";
                  // print_r($m2);
                  // die;
                  ?>

                  <div class="form-group">
                    <label for="exampleInputName">Office </label>
                    <select class="form-control" name="schedule_office_id" id="office_id">
                      <option>---select Office-----</option>
                     
                    </select>
                  </div>
                

                  <!--  <div class="form-group">
                    <label for="exampleInputName">Slot Start Date</label>
                    <input type="date"  id="exampleInputName" placeholder="Enter Slot Start Date" class="form-control" name="slot_start_date">
                  </div> -->
              <!--     <div class="form-group">
                    <label for="exampleInputEmail1">Slot End Date</label>
                    <input type="date" class="form-control" id="exampleInputEmail1" placeholder="Enter Slot End Date" name="slot_end_date">
                  </div> -->


                  <div class="form-group">
                    <label for="exampleInputPassword1">Slot 1</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Slot 1" name="slot1">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputContact">Slot 2</label>
                    <input type="text" class="form-control" id="exampleInputContact" placeholder="Enter Slot 2" name="slot2">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputContact">Slot 3</label>
                    <input type="text" class="form-control" id="exampleInputContact" placeholder="Enter Slot 3" name="slot3">
                  </div>  
                  <div class="form-group">
                    <label for="exampleInputContact">Slot 4</label>
                    <input type="text" class="form-control" id="exampleInputContact" placeholder="Enter Slot 4" name="slot4">
                  </div> 
                  <div class="form-group">
                    <label for="exampleInputContact">Slot 5</label>
                    <input type="text" class="form-control" id="exampleInputContact" placeholder="Enter Slot 5" name="slot5">
                  </div>                
            


                <!-- /.card-body -->

                <div class="card-footer">
                  <button class="btn btn-primary" type="submit">Submit</button>
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
            var c_id = $(this).val();

            $.ajax({
              url:'all_office.php',
              type:'POST',
              data:{
                city_id:c_id
              },
              success:function(res)
              {
                  $('#office_id').html(res);
              }
            });
        });
    });


  </script>