 <?php 
      ob_start();

        include('header.php');

        include('db.php');


        if(isset($_GET['id']))
        {
            $id = $_GET['id'];
            $m = "SELECT * FROM proof WHERE proof_id='$id'";
            $m1 = mysqli_query($con,$m);
            $m2 = mysqli_fetch_assoc($m1);
            // echo "<pre>";
            // print_r($m2);
            // die;


        }

        if(count($_POST)>0)
        {
          // echo "<pre>";
          // print_r($_POST);
          // die;
          $id = $_POST['proof_id'];

          $name = $_POST['proof_name'];
          
          s$m =  "UPDATE proof SET proof_id='$id',proof_name='$name' WHERE proof_id='$id'";
          $m1 = mysqli_query($con,$m);
          // $m2 = mysqli_fetch_all($m1,MYSQLI_ASSOC);
          // print_r($m2['proof_name']);
          // die;
          if($m1)
          {
            header("location:view_id_proof_type.php");
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
            <h1>ID Proof Type Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">ID Proof Type Form</li>
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
                <h3 class="card-title">ID Proof Type</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <input type="hidden" name="proof_id" value="<?php  echo $m2['proof_id']; ?>">
                  <div class="form-group">
                    <label for="exampleInputName">Name</label>
                    <input type="text"  id="exampleInputName" placeholder="Enter Name" class="form-control" name="proof_name" value="<?php echo $m2['proof_name']; ?>">
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