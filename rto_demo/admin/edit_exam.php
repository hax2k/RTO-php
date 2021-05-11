 <?php 

        include('header.php');

        include('db.php');


        if(isset($_GET['id']))
        {
          $id = $_GET['id'];
          $s = "SELECT * FROM exam WHERE exam_id='$id'";
          $s1 = mysqli_query($con,$s);
          $s2 = mysqli_fetch_assoc($s1);
          // echo "<pre>";
          // print_r($s2);
          // die;
        }

        if(count($_POST)>0)
        {
          // echo "<pre>";
          // print_r($_POST);
          // die;
          $exam_id  = $_POST['exam_id'];
          $state_id = $_POST['exam_state_id'];
          $city_id = $_POST['exam_city_id'];
          $area_id = $_POST['exam_area_id'];
          $exam_name = $_POST['exam_name'];
          $exam_time = $_POST['exam_time'];
          $exam_mark = $_POST['exam_mark'];
          $exam_final_mark = $_POST['exam_final_mark'];


           $q = "UPDATE exam,state,city,area SET exam_state_id='$state_id',exam_city_id='$city_id',exam_area_id='area_id',exam_name='$exam_name',exam_time='$exam_time',exam_mark='$exam_mark',exam_final_mark='$exam_final_mark' WHERE exam_id='$exam_id'";

          $q1 = mysqli_query($con,$q);
          if($q1)
          {
            echo "Updated . . .";
          }

        }



  ?>




  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Exam Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Exam Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Exam</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post">
                <div class="card-body">

                   <input type="hidden" name="exam_id" value="<?php  echo $s2['exam_id']; ?>">

                  <?php 

                  $m = "SELECT * FROM state";
                  $m1 = mysqli_query($con,$m);
                  $m2 = mysqli_fetch_all($m1,MYSQLI_ASSOC);
                  // echo "<pre>";
                  // print_r($m2);
                  // die;
                  ?>

                   <div class="form-group">
                    <label for="exampleInputName">State Name</label>
                    <select class="form-control" name="exam_state_id" id="state_id">
                      <?php  foreach($m2 as $value){ ?>
                      <option value="<?php echo $value['state_id']; ?>"><?php echo $value['state_name']; ?></option>
                      <?php } ?>
                    </select>
                  </div>


                  <?php 

                  $n = "SELECT * FROM city";
                  $n1 = mysqli_query($con,$n);
                  $n2 = mysqli_fetch_all($n1,MYSQLI_ASSOC);
                  // echo "<pre>";
                  // print_r($m2);
                  // die;
                  ?>

                  <div class="form-group">
                    <label for="exampleInputName">City Name</label>
                    <select class="form-control" name="exam_city_id" id="city_id">
                     <?php  foreach($n2 as $value){ ?>
                      <option value="<?php echo $value['city_id']; ?>"><?php echo $value['city_name']; ?></option>
                      <?php } ?>
                     
                    </select>
                  </div>


                  <?php 

                  $o = "SELECT * FROM area";
                  $o1 = mysqli_query($con,$o);
                  $o2 = mysqli_fetch_all($o1,MYSQLI_ASSOC);
                  // echo "<pre>";
                  // print_r($o2);
                  // die;
                  ?>

                  <div class="form-group">
                    <label for="exampleInputName">Area Name</label>
                    <select class="form-control" name="exam_area_id" id="area_id">
                      <?php  foreach($o2 as $value){ ?>
                      <option value="<?php echo $value['area_id']; ?>"><?php echo $value['area_name']; ?></option>
                      <?php } ?>
                     
                    </select>
                  </div>


                  <div class="form-group">
                    <label for="exampleInputName">Exam Name</label>
                    <input type="text" name="exam_name" id="exam_name" class="form-control" value="<?php echo $s2['exam_name']; ?>">
                  </div>
                

                  <div class="form-group">
                    <label for="exampleInputName">Exam Time</label>
                    <input type="text" name="exam_time" id="exam_time" class="form-control" value="<?php echo $s2['exam_time']; ?>">
                  </div>


                  <div class="form-group">
                    <label for="exampleInputName">Exam Marks</label>
                    <input type="text" name="exam_mark" id="exam_mark" class="form-control" value="<?php echo $s2['exam_mark']; ?>">
                  </div>


                  <div class="form-group">
                    <label for="exampleInputName">Exam Passing Marks</label>
                    <input type="text" name="exam_final_mark" id="exam_final_mark" class="form-control" value="<?php echo $s2['exam_final_mark']; ?>">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputName">Enter Number Of Questions</label>
                    <input type="text" name="enter_question" id="enter_question" class="form-control">
                   </div>


                   <div class="form-group">
                     <label for="exampleInputName">Question</label>
                     <textarea class="form-control" name="question" id="question"></textarea>
                   </div> 

                   <div class="form-group col-sm-6">
                     <label for="exampleInputName">Ans 1</label>
                     <input type="text" name="ans1" id="ans1" class="form-control">
                   </div>

                   <div class="form-group col-sm-6">
                     <label for="exampleInputName">Ans 2</label>
                     <input type="text" name="ans2" id="ans2" class="form-control">
                   </div>

                   <div class="form-group col-sm-6">
                     <label for="exampleInputName">Ans 3</label>
                     <input type="text" name="ans3" id="ans3" class="form-control">
                   </div>


                   <div class="form-group col-sm-6">
                     <label for="exampleInputName">Ans 4</label>
                     <input type="text" name="ans4" id="ans4" class="form-control">
                   </div>


                   <div class="form-group">
                     <label for="exampleInputName">Final Answer</label><br>
                     <input type="radio" name="ans1" id="ans1">&nbsp; A &nbsp;&nbsp;&nbsp;
                     <input type="radio" name="ans1" id="ans2">&nbsp; B &nbsp;&nbsp;&nbsp;
                     <input type="radio" name="ans1" id="ans3">&nbsp; C &nbsp;&nbsp;&nbsp;
                     <input type="radio" name="ans1" id="ans4">&nbsp; D &nbsp;&nbsp;&nbsp;
                   </div>



            


                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            <!-- Form Element sizes -->

                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <?php include('footer.php'); ?>

  <script type="text/javascript">
    
    $(document).ready(function(){
        $('#state_id').change(function(){
            var s_id = $(this).val();
            
            $.ajax({
              url:'all_city.php',
      
              type:'POST',
              data:{
                state_id:s_id
           
              },
              success:function(res)
              {
                  $('#city_id').html(res);
              }
            });
        });
    });

  </script>

  <script type="text/javascript">

    $(document).ready(function(){
        $('#city_id').change(function(){
            var c_id = $(this).val();
            $.ajax({
              url:'all_area.php',
              type:'POST',
              data:{
                city_id:c_id
              },
              success:function(res)
              {
                  $('#area_id').html(res);
              }
            });
        });
    });

  </script>


  <script type="text/javascript">

    $(document).ready(function(){
        $('#city_id').change(function(){
            var c_id = $(this).val();
            $.ajax({
              url:'all_area.php',
              type:'POST',
              data:{
                city_id:c_id
              },
              success:function(res)
              {
                  $('#area_id').html(res);
              }
            });
        });
    });

  </script>




















