 <?php 

      ob_start();
        include('header.php');

        include('db.php');



    if(isset($_GET['id']))
  {
    $id=$_GET['id'];
    $m = "DELETE FROM slot_schedule WHERE slot_schedule_id='$id'";
    $m1 = mysqli_query($con,$m);
    if($m1)
    {
      header("location:view_slot_schedule.php");
    }
  }

  $q = "SELECT * FROM slot_schedule";
  $q1 = mysqli_query($con,$q);
  $data = mysqli_fetch_all($q1,MYSQLI_ASSOC);

      

    if(count($_POST)>0)
     {
   
      switch ($_POST['action'])
      {
        case 'active':
              foreach($_POST['all_id'] as $key => $value)
              {
                 $n = "UPDATE slot_schedule set status=1 WHERE  slot_schedule_id='$value'";
                 $n1 = mysqli_query($con,$n);
              }
              break;
        case 'deactive':
              foreach($_POST['all_id'] as $key => $value)
              {
                $n = "UPDATE slot_schedule set status=0 WHERE slot_schedule_id='$value'";
                $n1 = mysqli_query($con,$n);
              }
            break;
         case 'delete':
              foreach($_POST['all_id'] as $key => $value)
              {
                $n = "DELETE FROM slot_schedule WHERE slot_schedule_id='$value'";
                $n1 = mysqli_query($con,$n);
              }
            break;
       }

      if($n1)
      {
        header("location:view_slot_schedule.php");
      }

      
  }



  ?>




  <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">

  <div class="card">

    <div class="card-header">
      <h3 class="card-title">Slot Schedule DataTable with default features</h3>
    </div>
    <!-- /.card-header -->
       
    <div class="card-body overflow-auto">

      <form method="post">

        <div style="text-align: right;">
          <button type="submit" value="active" name="action" class="btn btn-success"> Active </button>
          <button type="submit" value="deactive" name="action" class="btn btn-secondary"> Deactive </button>
          <button type="submit" value="delete" name="action" class="btn btn-danger"> Delete </button>
          <a href="add_slot_schedule.php" class="btn btn-primary">Add</a>
        </div>
        <br>


      <table id="example1" class="table table-bordered table-striped">

        <thead>
        <tr>
          <th> <input type="checkbox" id="checkAll"> </th>
          <th> ID </th>
          <th> State ID </th>
          <th> City ID </th>
          <th> Office ID </th>
          <th> Slot 1 </th>
          <th> Slot 2 </th>
          <th> Slot 3 </th>
          <th> Slot 4 </th>
          <th> Slot 5 </th>
          <th> Action </th>
        </tr>
        </thead>

        <tbody>
       
          <?php foreach($data as $key => $value) { ?>

            <tr>
              <td> <input type="checkbox" name="all_id[]" class="check" value="<?php echo $value['slot_schedule_id']; ?>"> </td>
              <td><?php echo $value['slot_schedule_id']; ?></td>
              <td><?php echo $value['schedule_state_id']; ?></td>
              <td><?php echo $value['schedule_city_id']; ?></td>
              <td><?php echo $value['schedule_office_id']; ?></td>
          <!--     <td><?php //echo $value['slot_start_date']; ?></td>
              <td><?php //echo $value['slot_end_date']; ?></td> -->
              <td><?php echo $value['slot1']; ?></td>
              <td><?php echo $value['slot2']; ?></td>
              <td><?php echo $value['slot3']; ?></td>
              <td><?php echo $value['slot4']; ?></td>
              <td><?php echo $value['slot5']; ?></td>

              <td class="text-nowrap">
                <a href="view_slot_schedule.php?id=<?php echo $value['slot_schedule_id']; ?>">
                  <button class="btn btn-danger" type="button"><i class="fas fa-user-minus"></i> Delete</button>
                </a>
                <a href="edit_slot_schedule.php?id=<?php echo $value['slot_schedule_id']; ?>">
                  <button class="btn btn-success" type="button"><i class="fas fa-pen-alt"></i> Update</button>
                </a>
              </td>
            </tr>


          <?php } ?>

          
       </tbody>
      </table>
    </form>
  </div>

  </div>
  <!-- /.card-body -->
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