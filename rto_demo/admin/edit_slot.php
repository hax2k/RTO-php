 <?php 
      ob_start();

        include('header.php');

        include('db.php');


        if(isset($_GET['id']))
        {
            $id = $_GET['id'];
            $m = "SELECT * FROM Slot WHERE slot_id='$id'";
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
          $id = $_POST['slot_id'];
          $time = $_POST['slot_time'];
          
          
          $m = "SELECT * FROM slot WHERE slot_id='$id'";
          $m1 = mysqli_query($con,$m);
          $m2 = mysqli_fetch_assoc($m1);
          // print_r($m2['admin_profile']);
          // die;
          $q = "UPDATE slot SET slot_time='$time' WHERE slot_id='$id'";
          $q1 = mysqli_query($con,$q);
          if($q1)
          {
            header("location:view_slot.php");
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
            <h1>Slot Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Slot Form</li>
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
                <h3 class="card-title">Slot</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <input type="hidden" name="slot_id" value="<?php  echo $m2['slot_id']; ?>">
                  <div class="form-group">
                    <label for="exampleInputName">Slot Time</label>
                    <input type="text"  id="exampleInputName" placeholder="Enter Slot Time" class="form-control" name="slot_time" value="<?php echo $m2['slot_time']; ?>">
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