<?php   

  ob_start();
  include('header.php'); 

  include('db.php');



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
          <th> <input type="checkbox" id="checkAll"> </th>
          <th> ID </th>
          <th> Slot Time </th>
          <th> Action </th>
        </tr>
        </thead>
        <tbody>
       
          <?php foreach($data as $key => $value) { ?>

            <tr>
              <td> <input type="checkbox" name="all_id[]" class="check" value="<?php echo $value['slot_id']; ?>"> </td>
              <td><?php echo $value['slot_id']; ?></td>
              <td><?php echo $value['slot_time']; ?></td>
              <td class="text-nowrap"><a href="view_slot.php?id=<?php echo $value['slot_id']; ?>">

          

                <a>
                  <button class="btn btn-danger" type="button"><i class="fas fa-user-minus"></i> Delete</button>
                </a>
                <a href="edit_slot.php?id=<?php echo $value['slot_id']; ?>">
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