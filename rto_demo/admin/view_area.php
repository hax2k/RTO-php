<?php   

  ob_start();
  include('header.php'); 

  include('db.php');



  if(isset($_GET['id']))
  {
    $id=$_GET['id'];
    $m = "DELETE FROM area WHERE area_id='$id'";
    $m1 = mysqli_query($con,$m);
    if($m1)
    {
      header("location:view_area.php");
    }
  }

 
  if(isset($_GET['area_name']))
  {
      $key = $_GET['area_name'];
      $skey = $_GET['state_name'];
      $ckey = $_GET['city_name'];
       $q = "SELECT area.*,state.state_name,city.city_name FROM area,state,city WHERE  area.area_state_id=state.state_id AND area.area_city_id=city.city_id AND area_name LIKE '%$key%' AND state_name LIKE '%$skey%' AND city_name LIKE '%$ckey%'";
      // die;
  }
  else
  {
     $q = "SELECT area.*,state.state_name,city.city_name FROM area,state,city WHERE area.area_state_id=state.state_id AND area.area_city_id=city.city_id";
  }


 
  $q1 = mysqli_query($con,$q);
  $data = mysqli_fetch_all($q1,MYSQLI_ASSOC);
    // echo "<pre>";
    // print_r($data);
    // die;



  if(count($_POST)>0)
  {
   
      switch ($_POST['action'])
      {
        case 'active':
              foreach($_POST['all_id'] as $key => $value)
              {
                 $n = "UPDATE area set status=1 WHERE  area_id='$value'";
                 $n1 = mysqli_query($con,$n);
              }
              break;
        case 'deactive':
              foreach($_POST['all_id'] as $key => $value)
              {
                $n = "UPDATE area set status=0 WHERE area_id='$value'";
                $n1 = mysqli_query($con,$n);
              }
            break;
         case 'delete':
              foreach($_POST['all_id'] as $key => $value)
              {
                $n = "DELETE FROM area WHERE area_id='$value'";
                $n1 = mysqli_query($con,$n);
              }
            break;
       }

      if($n1)
      {
        header("location:view_area.php");
      }

      
  }





?>





  <div class="content-wrapper">

<div class="card">
    <div class="card-header">
      <h3 class="card-title">Area DataTable with default features</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body overflow-auto">
        <form method="post">


          


        <div style="text-align: right;">
          <button type="submit" value="active" name="action" class="btn btn-success"> Active </button>
          <button type="submit" value="deactive" name="action" class="btn btn-secondary"> Deactive </button>
          <button type="submit" value="delete" name="action" class="btn btn-danger"> Delete </button>
          <a href="add_state.php" class="btn btn-primary">Add</a>
        </div>
        <br>



      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th> <input type="checkbox" id="checkAll"> </th>
          <th>Area ID</th>
          <th>State Name</th>
          <th>City Name</th>
          <th>Area Name</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
       
          <?php foreach($data as $key => $value) { ?>

            <tr>
              <td> <input type="checkbox" name="all_id[]" class="check" value="<?php echo $value['area_id']; ?>"> </td>
              <td><?php echo $value['area_id']; ?></td>
              <td><?php echo $value['state_name']; ?></td>
              <td><?php echo $value['city_name']; ?></td>
              <td><?php echo $value['area_name']; ?></td>

        
        
        
      
              <td class="text-nowrap">
                <a href="view_area.php?id=<?php echo $value['area_id']; ?>">
                  <button class="btn btn-danger" type="button"><i class="fas fa-user-minus"></i> Delete</button>
                </a>

                <a href="edit_area.php?id=<?php echo $value['area_id']; ?>">
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