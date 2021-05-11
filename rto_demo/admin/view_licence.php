<?php   


  ob_start();
  include('header.php'); 

  include('db.php');
  
  if(isset($_GET['id']))
  {
    $id=$_GET['id'];
    $m = "DELETE FROM licence_register WHERE licence_register_id='$id'";
    $m1 = mysqli_query($con,$m);
    if($m1)
    {
      header("location:view_licence.php");
    }
  }

  $q = "SELECT * FROM licence_register";
  $q1 = mysqli_query($con,$q);
  $data = mysqli_fetch_all($q1,MYSQLI_ASSOC);

  foreach ($data as $key => $value) {
      $p = "SELECT * FROM proof_image WHERE licence_register_id = '".$value['licence_register_id']."'";
      $p1 = mysqli_query($con,$p);
      $p2 = mysqli_fetch_all($p1,MYSQLI_ASSOC);
      $data[$key]['image'] = $p2;
  }
  // echo "<pre>";
  // print_r($data);
  // die;
  
  // $postarray = array();

  //    while($post = mysqli_fetch_assoc($q1))
  //    {
  //     $id = $post['licence_register_id'];
  //     $p = "SELECT * FROM proof_image WHERE licence_register_id = '$id'";
  //     $p1 = mysqli_query($con,$p);
  //     $postarray[$id] = $post;
  //     $postarray[$id]['image']=mysqli_fetch_all($p1,MYSQLI_ASSOC);
  //    }
 

      




?>





  <div class="content-wrapper">

<div class="card">
    <div class="card-header">
      <h3 class="card-title">Licence DataTable with default features</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body overflow-auto">
        
        
   
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
         
          <th>ID</th>
          <th>Category</th>
          <th>Sub Category</th>
          <th>State</th>
          <th>City</th>
          <th>Office</th>
          <th>Name</th>
          <th>E-mail</th>
          <th>Address</th>
          <th>Conatct</th>
          <th>Vehical Id</th>
          <th>Date Of Birth</th>
          <th>Blood Group</th>
          <th>Qualification</th>
          <th>Photo</th>
          <th>Id Type</th>
          <th>Id Image</th>
          <th>Reg. Date</th>
          <th>Nominee Name</th>
          <th>Aadhar No.</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
       
          <?php foreach($data as $key => $value) { ?>

            <!-- <?php echo "<pre>";print_r($value); ?> -->

            <tr>
              
              <td><?php echo $value['licence_register_id']; ?></td>
              <td><?php echo $value['licence_category_id']; ?></td>
              <td><?php echo $value['licence_subcategory_id']; ?></td>
              <td><?php echo $value['licence_state_id']; ?></td>
              <td><?php echo $value['licence_city_id']; ?></td>
              <td><?php echo $value['licence_office_id']; ?></td>
              <td><?php echo $value['name']; ?></td>
              <td><?php echo $value['email']; ?></td>
              <td><?php echo $value['address']; ?></td>
              <td><?php echo $value['contact_no']; ?></td>
              <td><?php echo $value['vehical_id']; ?></td>
              <td><?php echo $value['dob']; ?></td>
              <td><?php echo $value['blood_group']; ?></td>
              <td><?php echo $value['qualification']; ?></td>
              <td><?php echo $value['photo']; ?></td>
              <td><?php echo $value['id_proof_type']; ?></td>
              <td>
                <?php foreach($value['image'] as $img) { ?>
                   <img src="../images/<?php echo $img['proof_image_path']; ?>" width="100px"> 
                <?php } ?>
              </td>
              <td><?php echo $value['register_date']; ?></td>
              <td><?php echo $value['nominee_name']; ?></td>
              <td><?php echo $value['aadhar_no']; ?></td>
              
      
       
               <td class="text-nowrap">
                <a href="view_licence.php?id=<?php echo $value['licence_register_id']; ?>">
                  <button class="btn btn-danger"><i class="fas fa-user-minus"></i> Delete</button>
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