 <?php 
  
        include('header.php');

        include('db.php');


        if(isset($_GET['id']))
        {
          $id = $_GET['id'];
          $s = "SELECT * FROM tutorial WHERE tutorial_id='$id'";
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
          $tutorial_id = $_POST['tutorial_id'];
          $category_id = $_POST['tutorial_category_id'];
          $subcategory_id = $_POST['tutorial_subcategory_id']; 
          $tutorial_type = $_POST['tutorial_type'];
          $tutorial_title = $_POST['tutorial_title'];
          $tutorial_description = $_POST['tutorial_description'];
          $img = time()."_".$_FILES['tutorial_image']['name'];
          move_uploaded_file($_FILES['tutorial_image']['tmp_name'], "images/".$img);
 
          $q = "UPDATE tutorial,category,subcategory SET tutorial_category_id='$category_id',tutorial_subcategory_id='$subcategory_id',tutorial_type='$tutorial_type',tutorial_title='$tutorial_title',tutorial_description='$tutorial_description',tutorial_image='$img' WHERE tutorial_id='$tutorial_id'"; 
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
            <h1>Tutorial</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tutorial</li>
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
                <h3 class="card-title">Tutorial</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" enctype="multipart/form-data">
                <input type="hidden" name="tutorial_id" value="<?php echo $s2['tutorial_id']; ?>">
                <div class="card-body">
                  <?php 

                    $m = "SELECT * FROM category";
                    $m1 = mysqli_query($con,$m);
                    $m2 = mysqli_fetch_all($m1,MYSQLI_ASSOC);
                    // echo "<pre>";
                    // print_r($m2);
                    // die;
                  
                  ?>

                   <div class="form-group">
                    <label for="exampleInputName">Category Name</label>
                    <select class="form-control" name="tutorial_category_id">
                      
                      <?php  foreach($m2 as $value){ ?>
                      <option value="<?php echo $value['category_id']; ?>"><?php echo $value['category_name']; ?></option>
                      <?php } ?>
                    </select>
                   </div>


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
                    <select class="form-control" name="tutorial_subcategory_id">
                      
                      <?php  foreach($m2 as $value){ ?>
                      <option value="<?php echo $value['subcategory_id']; ?>"><?php echo $value['subcategory_name']; ?></option>
                      <?php } ?>
                    </select>
                   </div>

                   <?php 

                    $m = "SELECT * FROM tutorial";
                    $m1 = mysqli_query($con,$m);
                    $m2 = mysqli_fetch_all($m1,MYSQLI_ASSOC);
                    // echo "<pre>";
                    // print_r($m2);
                    // die;
                  
                  ?>

                  <div class="form-group">
                    <label for="exampleInputName">Tutorial Type</label>
                    <select class="form-control" name="tutorial_type">
                      
                      <?php  foreach($m2 as $value){ ?>
                      <option value="<?php echo $value['tutorial_type']; ?>"><?php echo $value['tutorial_type']; ?></option>
                      <?php } ?>
                    </select>
                   </div>



                   <div class="form-group">
                     <label for="exampleInputName">Tutorial Name</label>
                     <input type="text" class="form-control" name="tutorial_title" value="<?php echo $value['tutorial_title']; ?>">
                   </div>



                   <div class="form-group">
                     <label for="exampleInputName">Tutorial Description</label>
                     <textarea class="form-control" name="tutorial_description"><?php echo $value['tutorial_description']; ?></textarea>
                   </div>
  
                
                  <div class="form-group">
                     <label for="exampleInputName">Tutorial Image</label><br>
                     <input type="file" name="tutorial_image">
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