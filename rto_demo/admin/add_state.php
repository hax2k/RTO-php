 <?php 
        ob_start();
        include('header.php');

        include('db.php');


        if(count($_POST)>0)
        {
          // echo "<pre>";
          // print_r($_POST);
          // die;

          $state_name = $_POST['state_name'];
          

          $q = "INSERT INTO state (state_name) values ('$state_name')";
          $q1 = mysqli_query($con,$q);
          if($q1)
          {
            header("location:view_state.php");
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
            <h1>State Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">State Form</li>
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
                <h3 class="card-title">State</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" id="myform">
                <div class="card-body">

                  <div class="form-group">
                    <label for="exampleInputName">State Name</label>
                    <input type="text"  id="exampleInputName" placeholder="Enter State Name" class="form-control" name="state_name">
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
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script>
  $( "#myform" ).validate({
  rules: {
     state_name:
    {
      required:true
      
    }
    

  },
  messages:{
     state_name:
    {
      required:"<span style='color:red'> State name is required</span>"
      
    }
  }
});
</script>