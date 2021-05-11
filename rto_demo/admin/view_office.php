<?php   

  ob_start();
  include('header.php'); 

  include('db.php');



  if(isset($_GET['id']))
  {
    $id=$_GET['id'];
    $m = "DELETE FROM rto_office WHERE office_id='$id'";
    $m1 = mysqli_query($con,$m);
    if($m1)
    {
      header("location:view_office.php");
    }
  }

 
  // $q = "SELECT rto_office.*,state.state_name,city.city_name,area.area_name FROM rto_office,state,city,area WHERE rto_office.office_area_id=area.area_id AND rto_office.office_state_id=state.state_id AND rto_office.office_city_id=city.city_id";
  
   if(isset($_GET['office_address']))
  {
      $key = $_GET['area_name'];
      $skey = $_GET['state_name'];
      $ckey = $_GET['city_name'];
      $okey = $_GET['office_address'];
      $q = "SELECT rto_office.*,state.state_name,city.city_name,area.area_name FROM rto_office,state,city,area WHERE  rto_office.office_state_id=state.state_id AND rto_office.office_city_id=city.city_id AND rto_office.office_area_id=area.area_id AND office_address LIKE '%$okey%' AND area_name LIKE '%$key%' AND state_name LIKE '%$skey%' AND city_name LIKE '%$ckey%'";
      // die;
  }
  else
  {
     $q = "SELECT rto_office.*,state.state_name,city.city_name,area.area_name FROM rto_office,area,state,city WHERE rto_office.office_state_id=state.state_id AND rto_office.office_city_id=city.city_id AND rto_office.office_area_id=area.area_id";
  }
  $q1 = mysqli_query($con,$q);
  $data = mysqli_fetch_all($q1,MYSQLI_ASSOC);
//     echo "<pre>";
//     print_r($data);
//     die;


  if(count($_POST)>0)
  {
    // echo "<pre>";
    // print_r($data);
    // die;
      switch ($_POST['action'])
     {
        case 'active':
              foreach($_POST['all_id'] as $key => $value)
              {
                 $n = "UPDATE rto_office set status=1 WHERE  office_id='$value'";
                 $n1 = mysqli_query($con,$n);
              }
              break;
        case 'deactive':
              foreach($_POST['all_id'] as $key => $value)
              {
                $n = "UPDATE rto_office set status=0 WHERE office_id='$value'";
                $n1 = mysqli_query($con,$n);
              }
            break;
         case 'delete':
              foreach($_POST['all_id'] as $key => $value)
              {
                $n = "DELETE FROM rto_office WHERE office_id='$value'";
                $n1 = mysqli_query($con,$n);
              }
            break;
      }

      if($n1)
      {
        header("location:view_office.php");
      }

      
  }





?>





  <div class="content-wrapper">

<div class="card">
    <div class="card-header">
      <h3 class="card-title">Office DataTable with default features</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body overflow-auto">
      <form method="post">

        <div style="text-align: right;">
          <button type="submit" value="active" name="action" class="btn btn-success"> Active </button>
          <button type="submit" value="deactive" name="action" class="btn btn-secondary"> Deactive </button>
          <button type="submit" value="delete" name="action" class="btn btn-danger"> Delete </button>
          <a href="add_office.php" class="btn btn-primary">Add</a>
        </div>
        <br>

      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th> <input type="checkbox" id="checkAll"> </th>
          <th>Office ID</th>
          <th>State Name</th>
          <th>City Name</th>
          <th>Area Name</th>
          <th>Office Address</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
       
          <?php foreach($data as $key => $value) { ?>

            <tr>
              <td> <input type="checkbox" name="all_id[]" class="check" value="<?php echo $value['office_id']; ?>"></td>
              <td><?php echo $value['office_id']; ?></td>
              <td><?php echo $value['state_name']; ?></td>
              <td><?php echo $value['city_name']; ?></td>
              <td><?php echo $value['area_name']; ?></td>
              <td><?php echo $value['office_address']; ?></td>
      
              <td class="text-nowrap">
                <a href="view_office.php?id=<?php echo $value['office_id']; ?>">
                  <button class="btn btn-danger" type="button"><i class="fas fa-user-minus"></i> Delete</button>
                </a>

                <a href="edit_office.php?id=<?php echo $value['office_id'] ?>">
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