  <?php   

  ob_start();
  include('header.php'); 

  include('db.php');



  if(isset($_GET['id']))
  {
    $id=$_GET['id'];
    $m = "DELETE FROM post WHERE post_id='$id'";
    $m1 = mysqli_query($con,$m);
    if($m1)
    {
      header("location:view_post.php");
    }
  }
  $q = "SELECT post.*,category.category_name,subcategory.subcategory_name FROM post,category,subcategory WHERE post.post_category_id=category.category_id AND post.post_subcategory_id=subcategory.subcategory_id";
    $q1 = mysqli_query($con,$q);  
    // echo "<pre>";
    // print_r($data
    // die;
     $postarray = array();

     while($post = mysqli_fetch_assoc($q1))
     {
      $id = $post['post_id'];
      $p = "SELECT * FROM post_image WHERE post_id = '$id'";
      $p1 = mysqli_query($con,$p);
      $postarray[$id] = $post;
      $postarray[$id]['image']=mysqli_fetch_all($p1,MYSQLI_ASSOC);
     }



     if(count($_POST)>0)
     {
   
      switch ($_POST['action'])
      {
        case 'active':
              foreach($_POST['all_id'] as $key => $value)
              {
                 $n = "UPDATE post set status=1 WHERE  post_id='$value'";
                 $n1 = mysqli_query($con,$n);
              }
              break;
        case 'deactive':
              foreach($_POST['all_id'] as $key => $value)
              {
                $n = "UPDATE post set status=0 WHERE post_id='$value'";
                $n1 = mysqli_query($con,$n);
              }
            break;
         case 'delete':
              foreach($_POST['all_id'] as $key => $value)
              {
                $n = "DELETE FROM post WHERE post_id='$value'";
                $n1 = mysqli_query($con,$n);
              }
            break;
       }

      if($n1)
      {
        header("location:view_post.php");
      }

      
  }




?>





  <div class="content-wrapper">

<div class="card">
    <div class="card-header">
      <h3 class="card-title">Post DataTable with default features</h3>
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
          <th> ID</th>
          <th> Category</th>
          <th> Subcategory</th>
          <th> Post Title</th>
          <th> Post Type</th>
          <th> Post Image</th>
          <th> Post Description</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
       
          <?php foreach($postarray as $key => $value) { ?>

            <tr>
              <td> <input type="checkbox" name="all_id[]" class="check" value="<?php echo $value['post_id']; ?>"> </td>
              <td><?php echo $value['post_id']; ?></td>
              <td><?php echo $value['category_name']; ?></td>
              <td><?php echo $value['subcategory_name']; ?></td>
              <td><?php echo $value['post_title']; ?></td>
              <td><?php echo $value['post_type']; ?></td>
              <td>
                <?php foreach($value['image'] as $img) { ?>
                   <img src="images/<?php echo $img['post_image_path'];  ?>" width="100px"> 
                <?php } ?>
              </td>
              <td><?php echo $value['post_description']; ?></td>
              <td class="text-nowrap"><a href="view_post.php?id=<?php echo $value['post_id']; ?>">


        
                <button class="btn btn-danger" type="button"><i class="fas fa-user-minus"></i> Delete</button></a>

                <a href="edit_post.php?id=<?php echo $value['post_id']; ?>">
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