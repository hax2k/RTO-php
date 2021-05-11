<?php   

  ob_start();
  include('header.php'); 

  include('db.php');

   $i = $_GET['l_id'];
   $m = "SELECT licence_confirm.*,user.*,licence_register.*,vehical.* FROM licence_register,licence_confirm,user,vehical WHERE licence_register.licence_register_id='".$i."' AND user.user_id=licence_register.user_id AND vehical.vehical_id=licence_register.vehical_id AND licence_register.licence_register_id=licence_confirm.licence_register_id";
   $m1 = mysqli_query($con,$m);
   $m2 = mysqli_fetch_assoc($m1);




?>


<div class="content-wrapper">
<div class="card">
    
       <a href="schedule.php"><h1>VIEW LICENCE</h1></a>
    <div class="card-body overflow-auto">



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