 <?php 
        ob_start();      
        include('header.php');

        include('db.php');


        if(count($_POST)>0)
        {
           // echo "<pre>";
           // print_r($_POST);
           // die;
         
          $category_name = $_POST['category_name'];
         

          $q = "INSERT INTO category (category_name) values ('$category_name')";
          $q1 = mysqli_query($con,$q);
          if($q1)
          {
              header('location:view_category.php');
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
            <h1>Category Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="add_category.php">Home</a></li>
              <li class="breadcrumb-item active">Category Form</li>
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
                <h3 class="card-title">Category</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post">
                <div class="card-body">
                 <!--  <?php 

                  $m = "SELECT * FROM category";
                  $m1 = mysqli_query($con,$m);
                  $m2 = mysqli_fetch_all($m1,MYSQLI_ASSOC);
                  // echo "<pre>";
                  // print_r($m2);
                  // die;
                  ?> -->

                   <div class="form-group">
                    <label for="exampleInputName">Category Name</label>
                      <input type="text" class="form-control" id="exampleInputCategory" placeholder="Enter category" name="category_name">
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