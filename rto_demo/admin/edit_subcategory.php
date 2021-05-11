 <?php 

        include('header.php');

        include('db.php');

        if(isset($_GET['id']))
        {
          $id = $_GET['id'];
          $s = "SELECT * FROM subcategory WHERE subcategory_id='$id'";
          $s1 = mysqli_query($con,$s);
          $s2 = mysqli_fetch_assoc($s1);
         // echo "<pre>";
         //  print_r($m2['city_name']);
         //  die; 
        }


        if(count($_POST)>0)
        {
          // echo "<pre>";
          // print_r($_POST);
          // die;
         $subcategory_name=subcategory_name;
          

          echo $q = "UPDATE subcategory SET subcategory_name=$subcategory_name WHERE subcategory_id='$subcategory_id'";
          $q1 = mysqli_query($con,$q);
          if($q1)
          {
            echo "UPDATED...";
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
            <h1>City Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Subcategory SSSWWSSSForm</li>
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
                <h3 class="card-title">Subcategory</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post">
                <input type="hidden" name="city_id" value="<?php echo $s2['city_id']; ?>">
                <div class="card-body">
                  <?php 

                  $m = "SELECT * FROM subcategory";
                  $m1 = mysqli_query($con,$m);
                  $m2 = mysqli_fetch_all($m1,MYSQLI_ASSOC);
                  // echo "<pre>";
                  // print_r($m2);
                  // die;
                  ?>

                   <div class="form-group">
                    <label for="exampleInputName">Subcategory Name</label>
                    <select class="form-control" name="subcategory_name">
                      <option>---select category-----</option>
                      <?php  foreach($m2 as $value){ ?>
                      <option value="<?php echo $value['subcategory_id']; ?>" <?php if($value['subcategory_id']==$s2['sub_category_id']){ echo 'selected';} ?>><?php echo $value['subcategory_name']; ?></option>
                      <?php } ?>
                    </select>
                  </div>


                 <!--  <div class="form-group">
                    <label for="exampleInputName">City Name</label>
                    <input type="text"  id="exampleInputName" placeholder="Enter State Name" class="form-control" name="city_name" value="<?php echo $s2['city_name']; ?>">
                  </div> -->
  
                
            


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