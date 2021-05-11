<?php   

  ob_start();
  include('header.php'); 

  include('db.php');



 

      $m = "SELECT final_result.*,user_name,exam_name,category.category_name,subcategory.subcategory_name FROM user,final_result,exam,category,subcategory WHERE final_result.user_id=user.user_id AND final_result.result_exam_id=exam.exam_id AND category.category_id=final_result.final_category_id AND subcategory.subcategory_id=final_result.final_subcategory_id";

      $m1 = mysqli_query($con,$m);
      $m2 = mysqli_fetch_all($m1,MYSQLI_ASSOC);

      // echo "<pre>";print_r($m2);die;





?>





  <div class="content-wrapper">

<div class="card">
    <div class="card-header">
      <h3 class="card-title">Result Detail DataTable with default features</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body overflow-auto">
      <form method="post">
            
        
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th> <input type="checkbox" id="checkAll"> </th>
          <th scope="col">Final Result Id</th>
          <th scope="col">Exam Name</th>
          <th scope="col">User Name</th>
         <!--  <th scope="col">Category Name</th> -->
          <th scope="col">Subcategory Name</th>
          <th scope="col">True Answer</th>
          <th scope="col">False Answer</th>
          <th scope="col">Total Answer</th>
          <th scope="col">Result Type</th>
          <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
       
          <?php foreach($m2 as $k=>$v){
            if($v['result_type'] == "Pass"){
           ?>

        <tr>
          <td> <input type="checkbox" name="all_id[]" class="check" value="<?php echo $value['final_result_id']; ?>"> </td>
            <td><?php echo $v['final_result_id']; ?></td>
            <td><?php echo $v['exam_name']; ?></td>
            <td><?php echo $v['user_name']; ?></td>
           <!--  <td><?php echo $v['category_name']; ?></td> -->
            <td><?php echo $v['subcategory_name']; ?></td>
            <td><?php echo $v['t_ans']; ?></td>
            <td><?php echo $v['f_ans']; ?></td>
            <td><?php echo $v['total_ans']; ?></td>
            <td><?php echo $v['result_type']; ?></td>
            <td>
            <?php  if($v['status'] == 0){ ?>
            <a href="licence_confirme.php?f_id=<?php echo $v['final_result_id']; ?>&r_id=<?php echo $v['final_register_id']; ?>">
             <button type="button" class="btn btn-danger">Unapprow</button>
             </a>
            <?php }else{ ?>
            <button class="btn btn-success">Confirme</button>
            <?php } ?>

            </td>

            
        </tr>
              
        
           
          <?php } } ?>


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


