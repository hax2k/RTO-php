 <?php 
        ob_start();
        include('header.php');

        include('db.php');


        if(isset($_GET['id']))
        {
          $id = $_GET['id'];
          $s = "SELECT * FROM rto_office WHERE office_id='$id'";
          $s1 = mysqli_query($con,$s);
          $s2 = mysqli_fetch_assoc($s1);
          // echo "<pre>";
          // print_r($s2);
          // die;
        }

        if(count($_POST)>0)
        {
          // echo "<pre>";
          // print_r($_POST);
          // die;
          $office_id = $_POST['office_id'];
          $state_id = $_POST['office_state_id'];
          $city_id = $_POST['office_city_id'];
          $area_name = $_POST['office_area_id'];
          $office_address = $_POST['office_address'];

          $q = "UPDATE rto_office SET office_state_id='$state_id',office_city_id='$city_id',area_name='$area_name',office_address='$office_address' WHERE office_id='$office_id'";
          $q1 = mysqli_query($con,$q);
          // if ($q1) 
          // {
          //   echo "Updated . . .";
          // }
        }



  ?>




  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Office Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Office Form</li>
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
                <h3 class="card-title">Office</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" id="myform">
                <input type="hidden" name="office_id" value="<?php echo $s2['office_id']; ?>">
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
                    <select class="form-control" name="office_state_id" id="state_id">
                      <option>-----select state-----</option>
                      <?php  foreach($m2 as $value){ ?>
                      <option value="<?php echo $value['state_id']; ?>" <?php if($value['state_id']==$s2['office_state_id']){ echo 'selected';} ?>><?php echo $value['state_name']; ?></option>
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
                    <label for="exampleInputName">City Name</label>
                    <select class="form-control" name="office_city_id" id="city_id">
                     
                      <?php  foreach($n2 as $value){ ?>
                      <option value="<?php echo $value['city_id']; ?>"><?php echo $value['city_name']; ?></option>
                      <?php } ?>
                    </select>
                  </div>


                  <?php 

                  $o = "SELECT * FROM area";
                  $o1 = mysqli_query($con,$o);
                  $o2 = mysqli_fetch_all($o1,MYSQLI_ASSOC);
                  // echo "<pre>";
                  // print_r($o2);
                  // die;
                  ?>

                  <div class="form-group">
                    <label for="exampleInputName">Area Name</label>
                    <select class="form-control" name="office_area_id" id="area_id">
                    
                      <?php  foreach($o2 as $value){ ?>
                      <option value="<?php echo $value['area_id']; ?>"><?php echo $value['area_name']; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                
                
            
                  <div class="form-group">
                    <label for="exampleInputName">Office Address</label> <br>
                    <textarea class="form-control" name="office_address" placeholder="Enter Address" rows="5" cols="40"></textarea>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputName">Image</label>
                    <input type="file" name="img" id="img">
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
        $('#state_id').change(function(){
            var s_id = $(this).val();
            var cid = $('#c_id').val();

            $.ajax({
              url:'all_city.php',
              type:'POST',
              data:{
                state_id:s_id,
                c_id:cid
              },
              success:function(res)
              {
                  $('#city_id').html(res);
              }
            });
        }).trigger('change');
    });

  </script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script>
  $( "#myform" ).validate({
  rules: {
    office_state_id: {
      required: true
    },
    office_city_id: {
      required: true
    },
    office_area_id: {
      required: true
    },
     office_address:
    {
      required:true
      
    }
    

  },
  messages:{
     office_state_id: {
      required:"<span style='color:red'>State name is required </span>"          
    },
     office_city_id: {
      required:"<span style='color:red'>City name is required </span>"          
    },
     office_area_id: {
      required:"<span style='color:red'>Area name is required </span>"          
    },
     office_address:
    {
      required:"<span style='color:red'>Office Address is required </span>"
      
    }
  }
});
</script>
  




















