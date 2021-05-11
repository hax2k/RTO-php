<?php   


  ob_start();
  include('header.php'); 

  include('db.php');
  
  if(isset($_GET['id']))
  {
    $id=$_GET['id'];
    $m = "DELETE FROM proof WHERE proof_id='$id'";
    $m1 = mysqli_query($con,$m);
    if($m1)
    {
      header("location:view_id_proof_type.php");
    }
  }

  $q = "SELECT * FROM proof";
  $q1 = mysqli_query($con,$q);
  $data = mysqli_fetch_all($q1,MYSQLI_ASSOC);
  // echo "<pre>";
  // print_r($data);
  // die;


 

      




?>





  <div class="content-wrapper">

<div class="card">
    <div class="card-header">
      <h3 class="card-title">ID Proof Type DataTable with default features</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body overflow-auto">
        
        
   
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
         
          <th>ID</th>
          <th>Name</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
       
          <?php foreach($data as $key => $value) { ?>

            <tr>
              
              <td><?php echo $value['proof_id']; ?></td>
              <td><?php echo $value['proof_name']; ?></td>
               <td class="text-nowrap">
                <a href="view_id_proof_type.php?id=<?php echo $value['proof_id']; ?>"><button class="btn btn-danger">Delete</button></a>
                 <a href="edit_id_proof_type.php?id=<?php echo $value['proof_id']; ?>">
                <button class="btn btn-success">Update</button>
              </a>

              </td>
            </tr>


          <?php } ?>


       </tbody>

       
      
    </table>
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