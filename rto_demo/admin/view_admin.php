<?php   

  ob_start();
  include('header.php'); 

  include('db.php');



  if(isset($_GET['id']))
  {

    // echo $_GET['id'];die;
    $id=$_GET['id'];

    $m = "DELETE FROM admin WHERE admin_id='$id'";
    $m1 = mysqli_query($con,$m);
    if($m1)
    {
      header("location:view_admin.php");
    }
  }

  $q = "SELECT * FROM admin";
  $q1 = mysqli_query($con,$q);
  $data = mysqli_fetch_all($q1,MYSQLI_ASSOC);


  if(isset($_POST['admin_name']))
  {
    // echo "pre";
    // print_r($_POST);
    // die;
      $key = $_POST['admin_name'];
       $z = "SELECT * FROM admin WHERE admin_name LIKE '%$key%'";
      $z1 = mysqli_query($con,$z);
   $z2 = mysqli_fetch_all($z1,MYSQLI_ASSOC);
     
  }
  else
  {
     $q = "SELECT * FROM admin";
  }

   




  if(count($_POST)>0 && isset($_POST['all_id']))
  {
    // echo "<pre>";print_r($_POST['all_id']);die;
      switch ($_POST['action'])
     {
        case 'active':
              foreach($_POST['all_id'] as $key => $value)
              {
                 $n = "UPDATE admin set status=1 WHERE  admin_id='$value'";
                 $n1 = mysqli_query($con,$n);
              }
              break;
        case 'deactive':
              foreach($_POST['all_id'] as $key => $value)
              {
                $n = "UPDATE admin set status=0 WHERE admin_id='$value'";
                $n1 = mysqli_query($con,$n);
              }
            break;
         case 'delete':
              foreach($_POST['all_id'] as $key => $value)
              {
                $n = "DELETE FROM admin WHERE admin_id='$value'";
                $n1 = mysqli_query($con,$n);
              }
            break;
      }

      if($n1)
      {
        header("location:view_admin.php");
      }

      
  }
?>

  <div class="content-wrapper">

<div class="card">
    <div class="card-header">
      <h3 class="card-title">Admin DataTable with default features</h3>
    </div>
    <!-- /.card-header -->
       
    <div class="card-body overflow-auto">
     

      <div class="form-group">
       <form method="post" >
  

      <div style="text-align: right;">
        <button type="submit" value="active" name="action" class="btn btn-success"> Active </button>
        <button type="submit" value="deactive" name="action" class="btn btn-secondary"> Deactive </button>
        <button type="submit" value="delete" name="action" class="btn btn-danger"> Delete </button>
        <a href="add_admin.php" class="btn btn-primary">Add</a>
      </div>

      <br>    
     
      <table id="example1" class="table table-bordered table-hover">

        <thead>

         <tr> 
          <th> <input type="checkbox" id="checkAll"> </th>
          <th> ID</th>
          <th> Name</th>
          <th> Email</th>
          <th> Contact</th>
          <th> Password</th>
          <th> Gender</th>
          <th> Hobby</th>
          <th> DOB</th>
          <th> Address</th>
          <th>Image</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
       
          <?php foreach($data as $key => $value) { ?>

            <tr>
              <td> <input type="checkbox" name="all_id[]" class="check" value="<?php echo $value['admin_id']; ?>"> </td>

              <td><?php echo $value['admin_id']; ?></td>
              <td><?php echo $value['admin_name']; ?></td>
              <td><?php echo $value['admin_email']; ?></td>
              <td><?php echo $value['admin_contact']; ?></td>
              <td><?php echo $value['admin_password']; ?></td>
              <td><?php echo $value['admin_gender']; ?></td>
              <td><?php echo $value['admin_hobby']; ?></td>
              <td><?php echo $value['admin_dob']; ?></td>
              <td><?php echo $value['admin_address']; ?></td>

              <td><img src="images/<?php echo $value['admin_profile']; ?>" width="100px"></td>

     

              <td class="text-nowrap"><a href="view_admin.php?id=<?php echo $value['admin_id']; ?>">

                <button class="btn btn-danger"  type="button"><i class="fas fa-user-minus"></i> Delete</button></a>

                <a href="edit_admin.php?id=<?php echo $value['admin_id']; ?>">
                <button class="btn btn-success" type="button"><i class="fas fa-pen-alt"></i> Update</button>
                </a>
              </td>
            </tr>


          <?php } ?>


       </tbody>
      
    </table>
   </form>
    
  </div>
  <!-- /.card-body -->
</div>
</div>







<?php include('footer.php'); ?>

  
<script src="plugins/datatables/jquery.dataTables.js"></script>

<script type="text/javascript">
  $(document).ready(function(){
   $('#checkAll').click(function(){
    if($(this).is(':checked'))
    {
      $('.check').each(function(){
        $('.check').prop('checked',true);
      });
    }
    else
    {
      $('.check').each(function(){
        $('.check').prop('checked',false);
      });
    }
   });
  });
</script>


<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>