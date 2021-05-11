 <?php 

        include('header.php');

        include('db.php');


        if(isset($_GET['id']))
        {
          $id = $_GET['id'];
          $s = "SELECT * FROM area WHERE area_id='$id'";
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
          $area_id = $_POST['area_id'];
          $state_id = $_POST['area_state_id'];
          $city_id = $_POST['area_city_id'];
          $area_name = $_POST['area_name'];

           $q = "UPDATE area,state,city SET area_state_id='$state_id',area_city_id='$city_id',area_name='$area_name' WHERE area_id='$area_id'";
          $q1 = mysqli_query($con,$q);
          if ($q1) 
          {
            echo "Updated . . .";
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
              <form role="form" method="post">
                <input type="hidden" name="area_id" value="<?php echo $s2['area_id']; ?>">
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
                      <?php  foreach($m2 as $value){ ?>
                      <option value="<?php echo $value['state_id']; ?>" <?php if($value['state_id']==$s2['area_state_id']){ echo 'selected';} ?>><?php echo $value['state_name']; ?></option>
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
                    <select class="form-control" name="area_city_id" id="city_id">
                      <option>---select city-----</option>
                      
                    </select>
                  </div>


                  <div class="form-group">
                    <label for="exampleInputName">Area Name</label>
                    <input type="text"  id="exampleInputName" placeholder="Enter Area Name" class="form-control" name="area_name" value="<?php echo $s2['area_name']; ?>">
                  </div>
  
                <input type="hidden" name="c_id" id="c_id" value="<?php echo $s2['area_city_id'] ?>">
            


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




















