<?php   

  ob_start();
  include('header.php'); 

  include('db.php');

   $i = $_GET['l_id'];
   $m = "SELECT licence_confirm.*,user.*,licence_register.*,vehical.* FROM licence_confirm,user,licence_register,vehical WHERE confirm_id='".$i."' AND user.user_id=licence_confirm.confirm_user_id AND licence_register.licence_register_id=licence_confirm.licence_register_id AND vehical.vehical_id=licence_confirm.confirm_vehical_id";
   $m1 = mysqli_query($con,$m);
   $m2 = mysqli_fetch_assoc($m1);

   // echo "<pre>";
   // print_r($m2);
   // die;
 


  if(isset($_GET['id']))
  {
    $id=$_GET['id'];
    $m = "DELETE FROM slot WHERE slot_id='$id'";
    $m1 = mysqli_query($con,$m);
    if($m1)
    {
      header("location:view_slot.php");
    }
  }

  $q = "SELECT * FROM slot";
  $q1 = mysqli_query($con,$q);
  $data = mysqli_fetch_all($q1,MYSQLI_ASSOC);


  if(count($_POST)>0)
     {
   
      switch ($_POST['action'])
      {
        case 'active':
              foreach($_POST['all_id'] as $key => $value)
              {
                 $n = "UPDATE slot set status=1 WHERE  slot_id='$value'";
                 $n1 = mysqli_query($con,$n);
              }
              break;
        case 'deactive':
              foreach($_POST['all_id'] as $key => $value)
              {
                $n = "UPDATE slot set status=0 WHERE slot_id='$value'";
                $n1 = mysqli_query($con,$n);
              }
            break;
         case 'delete':
              foreach($_POST['all_id'] as $key => $value)
              {
                $n = "DELETE FROM slot WHERE slot_id='$value'";
                $n1 = mysqli_query($con,$n);
              }
            break;
       }

      if($n1)
      {
        header("location:view_slot.php");
      }

      
  }



?>


<div class="content-wrapper">
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Slot DataTable with default features</h3>
    </div>
    <!-- /.card-header -->
       <a href="view_result.php"><h1>VIEW LICENCE</h1></a>
    <div class="card-body overflow-auto">

      <form method="post">

        <div style="text-align: right;">
          <button type="submit" value="active" name="action" class="btn btn-success"> Active </button>
          <button type="submit" value="deactive" name="action" class="btn btn-secondary"> Deactive </button>
          <button type="submit" value="delete" name="action" class="btn btn-danger"> Delete </button>
          <a href="add_slot.php" class="btn btn-primary">Add</a>
        </div>
        <br>


      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          
          <th> Name</th>
          <th> Email </th>
          <th> Contact </th>
          <th> Address </th>
          <th> Profile </th>
          <th> Adhar no </th>
          <th> Vehical name </th>
          <th> Issue date </th>
          <th> Validate Date </th>
          <th> Licence No </th>
          <th> Licence Type</th>
        </tr>
        </thead>
        <tbody>
       
         

            <tr>
              <td><?php echo $m2['user_name']; ?></td>
              <td><?php echo $m2['user_email']; ?></td>
              <td><?php echo $m2['user_contact']; ?></td>
              <td><?php echo $m2['user_address']; ?></td>
              <td><?php echo $m2['user_profile']; ?></td>
              <td><?php echo $m2['aadhar_no']; ?></td>
              <td><?php echo $m2['vehical_name']; ?></td>
              <td><?php echo date('d-m-Y',strtotime($m2['issue_date'])); ?></td>
              <td><?php echo $m2['validity_date']; ?></td>
              <td><?php echo $m2['licence_num']; ?></td>
              <td><?php echo $m2['licence_type']; ?></td>

            </tr>


      


       </tbody>
      
    </table>
    </form>
  </div>
  <!-- /.card-body -->
</div>
</div>


<?php include('footer.php'); ?>


<script src="plugins/datatables/jquery.dataTables.js"></script>

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