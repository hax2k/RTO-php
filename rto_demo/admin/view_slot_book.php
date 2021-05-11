<?php   

  ob_start();
  include('header.php'); 

  include('db.php');



 

      $m = "SELECT slot_book.*,user.user_name,user.user_contact,rto_office.office_address,licence_register.licence_register_id,category.category_name,subcategory.subcategory_name,vehical.vehical_name,slot.slot_time FROM slot_book,user,rto_office,licence_register,category,subcategory,vehical,slot WHERE slot_book.book_user_id=user.user_id AND slot_book.book_office_id=rto_office.office_id AND licence_register.licence_register_id=slot_book.book_register_id AND licence_register.licence_category_id=category.category_id AND licence_register.licence_subcategory_id=subcategory.subcategory_id AND licence_register.vehical_id=vehical.vehical_id AND slot_book.slot_no=slot.slot_id";

      $m1 = mysqli_query($con,$m);
      $m2 = mysqli_fetch_all($m1,MYSQLI_ASSOC);

      // echo "<pre>";print_r($m2);die;





?>





  <div class="content-wrapper">

<div class="card">
    <div class="card-header">
      <h3 class="card-title">Slot Book Detail DataTable with default features</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body overflow-auto">
      <form method="post">
            
        
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th> <input type="checkbox" id="checkAll"> </th>
          <th scope="col">Name</th>
          <th scope="col">Contact</th>
          <th scope="col">Office Address</th>
          <th scope="col">Category</th>
          <th scope="col">Sub Category</th>
          <th scope="col">Vehical Type</th>
          <th scope="col">Slot No</th>
          <th scope="col">Slot Time</th>
        </tr>
        </thead>
        <tbody>
       
          <?php foreach($m2 as $k=>$v){ ?>

        <tr>
          <td> <input type="checkbox" name="all_id[]" class="check" value="<?php echo $value['slot_book_id']; ?>"> </td>
            <td><?php echo $v['user_name']; ?></td>
            <td><?php echo $v['user_contact']; ?></td>
            <td><?php echo $v['office_address']; ?></td>
            <td><?php echo $v['category_name']; ?></td>
            <td><?php echo $v['subcategory_name']; ?></td>
            <td><?php echo $v['vehical_name']; ?></td>
            <td><?php echo $v['slot_no']; ?></td>
            <td><?php echo $v['slot_time']; ?></td>
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