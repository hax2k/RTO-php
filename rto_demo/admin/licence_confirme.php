 <?php 

        ob_start();

        include('header.php');

        include('db.php');


        $s = "SELECT licence_register.*,subcategory.subcategory_name,vehical.vehical_name FROM licence_register,subcategory,vehical WHERE licence_register_id='".$_GET['r_id']."' AND licence_register.licence_subcategory_id=subcategory.subcategory_id AND licence_register.vehical_id=vehical.vehical_id";
        $s1 = mysqli_query($con,$s);
        $s2 = mysqli_fetch_assoc($s1);
        // echo "<pre>";
        // print_r($s2);
        // die;

        if(count($_POST)>0)
        {
          // echo "<pre>";
          // print_r($_POST);
          // die;
          $l_no = $_POST['l_no'];  
          $v_date = $_POST['v_date'];
          

          $q = "INSERT INTO licence_confirm (confirm_user_id,licence_register_id,confirm_vehical_id,licence_type,validity_date,licence_subcategory_id,licence_num,status) values ('".$s2['user_id']."','".$s2['licence_register_id']."','".$s2['vehical_id']."','".$s2['subcategory_name']."','".$v_date."','".$s2['licence_subcategory_id']."','".$l_no."','1')";
          $q1 = mysqli_query($con,$q);
          $id =mysqli_insert_id($con);

          $m = "UPDATE licence_register SET status = 4 WHERE licence_register_id='".$s2['licence_register_id']."'";
          $m1 = mysqli_query($con,$m);
          $o = "UPDATE slot_book SET status = 4 WHERE book_register_id='".$s2['licence_register_id']."'";
          $o1 = mysqli_query($con,$o);



          $n = "UPDATE final_result SET status=1 WHERE final_result_id = '".$_GET['f_id']."'";
          $n1= mysqli_query($con,$n);

          if($q1)
          {

            header("location:licence_create_email.php?l_id=".$id);
           
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
            <h1>Licence Confirm</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Licence Confirm</li>
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
                <h3 class="card-title">Licence Confirme</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post">
                <div class="card-body">
                 <div class="form-group">
                    <label for="exampleInputName">User Name</label>
                    <input type="text"  id="exampleInputName" placeholder="Enter State Name" class="form-control" disabled="" value="<?php echo $s2['name']; ?>">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputName">Vehical Name</label>
                    <input type="text"  id="exampleInputName" placeholder="Enter State Name" class="form-control" disabled="" value="<?php echo $s2['vehical_name']; ?>">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputName">Licence Type</label>
                    <input type="text"  id="exampleInputName" placeholder="Enter State Name" class="form-control" disabled="" value="<?php echo $s2['subcategory_name']; ?>">
                  </div>


                  <div class="form-group">
                    <label for="exampleInputName">Licence No</label>
                    <input type="text"  readonly id="exampleInputName" placeholder="Enter State Name" class="form-control" name="l_no" value="<?php echo  rand(10000,1000000);echo  rand(1000000,9000000); ?>">
                  </div>

                  <?php 

                  $date = new DateTime('now');
                  $date->modify('+3 month'); // or you can use '-90 day' for deduct
                  $date = $date->format('Y-m-d');
                  
                  ?>
                    <div class="form-group">
                    <label for="exampleInputName">Validate Date</label>
                    <input type="text"  id="exampleInputName" placeholder="Enter State Name" class="form-control" name="v_date" readonly value="<?php echo $date; ?>">
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