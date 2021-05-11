 <?php 

        include('header.php');

        include('db.php');


        if(count($_POST)>0)
        {
          // echo "<pre>";
          // print_r($_POST);
          // print_r($_FILES);
          // die;

          $name = $_POST['proof_name'];

          $q = "INSERT INTO proof (proof_name)VALUES('$name')";
          $q1 = mysqli_query($con,$q);
          if($q1)
          {
            header('location:view_id_proof_type.php');
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

                  <div class="form-group">
                    <label for="exampleInputName">Name</label>
                    <input type="text"  id="exampleInputName" placeholder="Enter ID Proof Name" class="form-control" name="proof_name">
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