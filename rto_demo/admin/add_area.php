     <?php 
        ob_start();

        include('header.php');

        include('db.php');


        if(count($_POST)>0)
        {
          // echo "<pre>";
          // print_r($_POST);
          // die;
          $state_id = $_POST['area_state_id'];
          $city_id = $_POST['area_city_id'];
          $area_name = $_POST['area_name'];
          

         $q = "INSERT INTO area (area_state_id,area_city_id,area_name) values ('$state_id','$city_id','$area_name')";
          $q1 = mysqli_query($con,$q);
          if($q1)
          {
            header("location:view_area.php");
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
            <h1>Area Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Area Form</li>
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
                <h3 class="card-title">Area</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" id="myform">
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
                    <select class="form-control" name="area_state_id" id="state_id">
                      <option value="">---select state-----</option>
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
                    <select class="form-control" name="area_city_id" id="city_id">
                      <option value="">---select City-----</option>
                     
                    </select>
                  </div>


                  <div class="form-group">
                    <label for="exampleInputName">Area Name</label>
                    <input type="text"  id="exampleInputName" placeholder="Enter Area Name" class="form-control" name="area_name">
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
  </script>
   <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
   
<script>

  $( "#myform" ).validate({
  rules:{
    area_state_id: {
      required: true
    },

    {
    area_city_id: {
      required: true
    },
     area_name:
    {
      required:true
      
    }
    

  },
  messages:{
    area_state_id: {
      required:"<span style='color:red'>State name is required </span>"          
    },
     area_city_id: {
      required:"<span style='color:red'>City name is required </span>"          
    },
     area_name:
    {
      required:"<span style='color:red'>Area name is required </span>"
      
    }
  }
});
</script>




















