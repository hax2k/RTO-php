<?php   

  ob_start();
  include('header.php'); 

  include('db.php');

?>




            <form role="form" method="post">
               <div class="card-body">
                  <input type="hidden" name="admin_id" value="<?php  echo $s2['admin_id']; ?>">
                  <div class="form-group">
                    <label for="exampleInputName">Name</label>
                    <input type="text"  id="exampleInputName" placeholder="Enter Name" class="form-control" name="admin_name" value="<?php echo $s2['admin_name']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="admin_email" value="<?php echo $s2['admin_email']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="admin_password" value="<?php echo $s2['admin_password']; ?>">
                  </div>


                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>

<?php include('footer.php'); ?>