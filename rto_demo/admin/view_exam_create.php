<?php   


  ob_start();
  include('header.php'); 

  include('db.php');


  if(isset($_GET['e_id']))
  {
    $d  = $_GET['e_id'];
    if($_GET['s'] == 0)
    {

        $h = "SELECT * FROM exam_create WHERE exam_create_id='$d'";
        $h1 = mysqli_query($con,$h);
        $h2 = mysqli_fetch_assoc($h1);
        $date = date('Y-m-d',strtotime($h2['create_exam_date']));

        $e = "SELECT * FROM slot_book WHERE slot_book_date='$date'";
        $e1 = mysqli_query($con,$e);
        $e2 = mysqli_fetch_all($e1,MYSQLI_ASSOC);


        $y = "UPDATE exam_create SET status=1 WHERE exam_create_id='$d'";
        $y1 = mysqli_query($con,$y);
        // echo "<pre>";
        // print_r($e2);
        // die;
        foreach ($e2 as $key => $value) {
          $b_id = $value['slot_book_id'];

          $m = "UPDATE slot_book SET status=1 WHERE slot_book_id='$b_id'";
          $m1 = mysqli_query($con,$m);

        }
    }
    else if($_GET['s'] == 1)
    {
        //  $h = "SELECT * FROM exam_create WHERE exam_create_id='$d'";
        // $h1 = mysqli_query($con,$h);
        // $h2 = mysqli_fetch_assoc($h1);
        // $date = date('Y-m-d',strtotime($h2['create_exam_date']));

        // $e = "SELECT * FROM slot_book WHERE slot_book_date='$date'";
        // $e1 = mysqli_query($con,$e);
        // $e2 = mysqli_fetch_all($e1,MYSQLI_ASSOC);


        // $y = "UPDATE exam_create SET status=20 WHERE exam_create_id='$d'";
        // $y1 = mysqli_query($con,$y);
      
        // foreach ($e2 as $key => $value) {
        //   $b_id = $value['slot_book_id'];

        //   $m = "UPDATE slot_book SET status=1 WHERE slot_book_id='$b_id'";
        //   $m1 = mysqli_query($con,$m);

        // }
    }

  }
  
  // if(isset($_GET['exam_name']))
  // {
  //     // $key = $_GET['area_name'];
  //     // $skey = $_GET['state_name'];
  //     // $ckey = $_GET['city_name'];
  //     $ekey =$_GET['exam_name'];
  //      $q = "SELECT exam.exam_name FROM exam WHERE exam_name LIKE '%$ekey%'";
  //     // die;
  // }
  // else
  // {
  //    $q = "SELECT * FROM exam ";
  // }


  if(isset($_GET['id']))
  {
    $id=$_GET['id'];
    $m = "DELETE FROM exam_create WHERE exam_create_id='$id'";
    $m1 = mysqli_query($con,$m);
    if($m1)
    {
      header("location:view_exam_create.php");
    }
  }

 
  $q = "SELECT exam_create.*,user.user_name,state.state_name,city.city_name,rto_office.office_address,exam.exam_name,slot.slot_time FROM exam_create,user,state,city,rto_office,exam,slot WHERE  exam_create.user_id=user.user_id AND state.state_id=exam_create.create_state_id AND city.city_id=exam_create.create_city_id AND exam_create.create_office_id=rto_office.office_id AND exam.exam_id=exam_create.create_exam_id AND exam_create.create_slot_id=slot.slot_id";

  $q1 = mysqli_query($con,$q);
  $data = mysqli_fetch_all($q1,MYSQLI_ASSOC);
    // echo "<pre>";
    // print_r($data);
    // die;


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
                 $n = "UPDATE exam set status=1 WHERE  exam_id='$value'";
                 $n1 = mysqli_query($con,$n);
              }
              break;
        case 'deactive':
              foreach($_POST['all_id'] as $key => $value)
              {
                $n = "UPDATE exam set status=0 WHERE exam_id='$value'";
                $n1 = mysqli_query($con,$n);
              }
            break;
         case 'delete':
              foreach($_POST['all_id'] as $key => $value)
              {
                $n = "DELETE FROM exam WHERE exam_id='$value'";
                $n1 = mysqli_query($con,$n);
              }
            break;
      }

      if($n1)
      {
        header("location:view_exam_create.php");
      }

      
  }




?>





  <div class="content-wrapper">

<div class="card">
    <div class="card-header">
      <h3 class="card-title">Exam Create DataTable with default features</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body overflow-auto">
        <form method="post">

      <div style="text-align: right;">
        <button type="submit" value="active" name="action" class="btn btn-success"> Active </button>
        <button type="submit" value="deactive" name="action" class="btn btn-secondary"> Deactive </button>
        <button type="submit" value="delete" name="action" class="btn btn-danger"> Delete </button>
        <a href="add_exam.php" class="btn btn-primary">Add</a>
      </div>
      <br>

      
   
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th> <input type="checkbox" id="checkAll"> </th>
          <th>Exam Create</th>
          <th>User Name</th>
          <th>State Name</th>
          <th>City Name</th>
          <th>Office Name</th>
          <th>Exam Name</th>
          <th>Slot Time</th>
          <th>Exam Date</th>  
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
       
          <?php foreach($data as $key => $value) { ?>

            <tr>
              <td> <input type="checkbox" name="all_id[]" class="check" value="<?php echo $value['exam_id']; ?>"> </td>
              <td><?php echo $value['exam_create_id']; ?></td>
              <td><?php echo $value['user_name']; ?></td>
              <td><?php echo $value['state_name']; ?></td>
              <td><?php echo $value['city_name']; ?></td>
              <td><?php echo $value['create_office_id']; ?></td>
              <td><?php echo $value['exam_create_id']; ?></td>
              <td><?php echo $value['create_slot_id']; ?></td>
              <td><?php echo date('d-m-Y',strtotime($value['create_exam_date'])); ?></td>
      
      
              <td class="text-nowrap">
              <?php if($value['status'] == 0){ ?>
                 <a href="view_exam_create.php?e_id=<?php echo $value['exam_create_id']; ?>&s=0">
                  <button class="btn btn-primary" type="button"><i class="fas fa-play"></i> Start</button>
                </a>
              <?php }else if($value['status'] == 1){ ?>
                <a href="view_exam_create.php?e_id=<?php echo $value['exam_create_id']; ?>&s=1">
                  <button class="btn btn-primary" type="button"><i class="fas fa-play"></i>Proccess</button>
                </a>
              <?php }else{  ?>
                 
                  <button class="btn btn-danger" type="button"><i class="fas fa-play"></i>Stop</button>
                
              <?php } ?>
                
                <a href="view_exam_create.php?id=<?php echo $value['exam_create_id']; ?>">
                  <button class="btn btn-danger" type="button"><i class="fas fa-user-minus"></i> Delete</button>
                </a>
                <a href="edit_exam_create.php?id=<?php echo $value['exam_create_id']; ?>">
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


