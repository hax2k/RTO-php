<?php   


  ob_start();
  include('header.php'); 

  include('db.php');
  
  if(isset($_GET['id']))
  {
    $id=$_GET['id'];
    $m = "DELETE FROM exam_question WHERE exam_question_id='$id'";
    $m1 = mysqli_query($con,$m);
    if($m1)
    {
      header("location:view_question.php");
    }
  }

  $q = "SELECT * FROM exam_question";
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
                 $n = "UPDATE exam_question set status=1 WHERE  exam_question_id='$value'";
                 $n1 = mysqli_query($con,$n);
              }
              break;
        case 'deactive':
              foreach($_POST['all_id'] as $key => $value)
              {
                $n = "UPDATE exam_question set status=0 WHERE exam_question_id='$value'";
                $n1 = mysqli_query($con,$n);
              }
            break;
         case 'delete':
              foreach($_POST['all_id'] as $key => $value)
              {
                $n = "DELETE FROM exam_question WHERE exam_question_id='$value'";
                $n1 = mysqli_query($con,$n);
              }
            break;
      }

      if($n1)
      {
        header("location:view_question.php");
      }

      
  }




?>





  <div class="content-wrapper">

<div class="card">
    <div class="card-header">
      <h3 class="card-title">Question DataTable with default features</h3>
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
          <th>Question</th>
          <th>Answer 1</th>
          <th>Answer 2</th>
          <th>Answer 3</th>
          <th>Answer 4</th>
          <th>Final Answer</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
       
          <?php foreach($data as $key => $value) { ?>

            <tr>
              <td> <input type="checkbox" name="all_id[]" class="check" value="<?php echo $value['exam_question_id']; ?>"> </td>
              <td><?php echo $value['question']; ?></td>
              <td><?php echo $value['ans1']; ?></td>
              <td><?php echo $value['ans2']; ?></td>
              <td><?php echo $value['ans3']; ?></td>
              <td><?php echo $value['ans4']; ?></td>
              <td><?php echo $value['final_ans']; ?></td>
      
      
               <td class="text-nowrap">
                <a href="view_question.php?id=<?php echo $value['exam_question_id']; ?>">
                  <button class="btn btn-danger" type="button"><i class="fas fa-user-minus"></i> Delete</button>
                </a>

                <a href="edit_question.php?id=<?php echo $value['exam_question_id']; ?>">
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