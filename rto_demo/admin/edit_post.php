 <?php 

        include('header.php');

        include('db.php');


        if(count($_POST)>0)
        {
          // echo "<pre>";
          // print_r($_POST);
          // die;
          $category_id = $_POST['post_category_id'];
          $subcategory_id = $_POST['post_descriptionubcategory_id'];
          $post_title = $_POST['post_title'];
          $post_type = $_POST['post_type'];
          $post_image = $_POST['post_image'];
          $post_description = $_POST['post_description'];
          

          $q = "INSERT INTO post (post_category_id,post_subcategory_id,post_title,post_type,post_description) values ('$category_id','$subcategory_id','$post_title','$post_type','$post_description')";
          $q1 = mysqli_query($con,$q);
          // if($q1)
          // {
          //   echo "INSERTED...";
          // }

        }
         if(count($_POST)>0)
        {
          // echo "<pre>";
          // print_r($_POST);
          // die;
          $post_id = $_POST['post_id'];
          $post_category_id = $_POST['post_category_id'];
          $post_subcategory_id = $_POST['post_subcategory_id'];
          $post_title = $_POST['post_title'];
          $post_type = $_POST['post_type'];
          $post_image = $POST['post_image'];
          $post_description = $_POST['post_description'];

          $q = "UPDATE post SET post_category_id='$post_category_id',post_subcategory_id='$post_subcategory_id',post_title='$post_title',post_type='$post_type',post_des WHERE post.post_category_id=category.category_id AND post.post_subcategory_id=subcategory.subcategory_id";
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
            <h1>Post Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Post Form</li>
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
                <h3 class="card-title">Post</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post">
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
                    <label for="exampleInputName">Category</label>
                    <select class="form-control" name="post_category_id">
                      
                      <?php  foreach($m2 as $value){ ?>
                      <option value="<?php echo $value['category_id']; ?>"><?php echo $value['category_name']; ?></option>
                      <?php } ?>
                    </select>
                   </div>

                   <?php 

                    $n = "SELECT * FROM subcategory";
                    $n1 = mysqli_query($con,$n);
                    $n2 = mysqli_fetch_all($n1,MYSQLI_ASSOC);
                    // echo "<pre>";
                    // print_r($m2);
                    // die;
                  
                  ?>

                  <div class="form-group">
                    <label for="exampleInputName">Subcategory</label>
                    <select class="form-control" name="post_subcategory_id">
                      
                      <?php  foreach($n2 as $value){ ?>
                      <option value="<?php echo $value['subcategory_id']; ?>"><?php echo $value['subcategory_name']; ?></option>
                      <?php } ?>
                    </select>
                  </div>



                <div class="form-group">
                  <label for="exampleInputName">Post Title</label><br>
                  <input class="form-control" type="text" name="post_title">
                </div>

                <div class="form-group">
                  <label for="exampleInputName">Post Type</label>
                  <select class="form-control" name="post_type">
                    <option>--- Select Post---</option>
                    <option>News</option>
                    <option>Event</option>
                    <option>Rules</option>
                    <option>Inquiry</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="exampleInputName">Post Description</label>
                  <textarea class="form-control" name="post_description"></textarea>
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