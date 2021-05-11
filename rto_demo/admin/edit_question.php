 <?php 

        include('header.php');

        include('db.php');

        if(isset($_GET['id']))
        {
          $id = $_GET['id'];
          $s = "SELECT * FROM exam_question WHERE exam_question_id='$id'";
          $s1 = mysqli_query($con,$s);
          $s2 = mysqli_fetch_assoc($s1);
          // echo "<pre>";
          // print_r($s2);
          // die;
        }

        if(count($_POST)>0)
        {

          $data['mark'][] = $_POST['question'];
          $data['mark'][] = $_POST['ans1'];
          $data['mark'][] = $_POST['ans2'];
          $data['mark'][] = $_POST['ans3'];
          $data['mark'][] = $_POST['ans4'];
          $data['mark'][] = $_POST['ans'];
          
          foreach ($data['mark'] as $key => $value) {
            foreach ($value as $k => $v) {
              $total_q = count($value);
            }
          }
        //  echo $total_q;
          
          for($i=0;$i<$total_q;$i++)
          {
              foreach ($data['mark'] as $key => $value) {
                foreach ($value as $k => $v) {
                    if($i == $k)
                    {
                      $data['dd'][$k][] = $v;
                    }
                }
              }
          }

          // echo "<pre>";
          // print_r($data['mark']);
          // print_r($data['dd']);
          // die;
          foreach ($data['mark'] as $key => $value) {
            foreach ($value as $k => $v) {

              if($key == $k)
              {
                $m[]['qq'][$k]= $v; 
              }
            }
          }

          //  echo "<pre>";
          // print_r($m['qq']);
          // die;

      
          
          

        // $q = "INSERT INTO exam (exam_state_id,exam_city_id,exam_area_id,exam_name,exam_time,exam_mark,exam_final_mark) values ('$state_id','$city_id','$area_id','$exam_name','$exam_time','$exam_mark','$exam_final_mark')";
        //  // echo "<pre>";
        //  //  print_r($_POST);
        //  //  die;
        //   $q1 = mysqli_query($con,$q);
        //   $ins_id = mysqli_insert_id($con);
        //   // die;
          foreach ($data['dd'] as $key => $value) {
            $main = $key+1;
            $m = "UPDATE exam_question SET ('$ins_id','$main','$value[0]','$value[1]','$value[2]','$value[3]','$value[4]','$value[5]')";
            $m1 = mysqli_query($con,$m);

            $q = "UPDATE exam,state,city,area SET exam_state_id='$state_id',exam_city_id='$city_id',exam_area_id='area_id',exam_name='$exam_name',exam_time='$exam_time',exam_mark='$exam_mark',exam_final_mark='$exam_final_mark' WHERE exam_id='$exam_id'";
          }
          if($q1)
          {
            echo "UPDATED...";
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
                <h3 class="card-title">Question</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post">
                <div class="card-body">
                  <!-- <?php 

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
                      <option>---select state-----</option>
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
                      <option>---select City-----</option>
                     
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
                      <option>---select Area-----</option>
                     
                    </select>
                  </div>


                  <div class="form-group">
                    <label for="exampleInputName">Exam Name</label>
                    <input type="text" name="exam_name" id="exam_name" class="form-control">
                  </div>
                

                  <div class="form-group">
                    <label for="exampleInputName">Exam Time</label>
                    <input type="text" name="exam_time" id="exam_time" class="form-control">
                  </div>


                  <div class="form-group">
                    <label for="exampleInputName">Exam Marks</label>
                    <input type="text" name="exam_mark" id="exam_mark" class="form-control">
                  </div>


                  <div class="form-group">
                    <label for="exampleInputName">Exam Passing Marks</label>
                    <input type="text" name="exam_final_mark" id="exam_final_mark" class="form-control">
                  </div>

                   <div class="form-group">
                    <label for="exampleInputName">Enter Number Of Questions</label>
                    <input type="text" name="enter_question" id="enter_question" class="form-control" onkeyup="test(this.value);">
                   </div> -->

                   <div id="demo">
                   <div class="form-group">
                     <label for="exampleInputName">Question</label>
                     <textarea class="form-control" name="question[]" id="question"><?php echo $s2['question']; ?></textarea>
                   </div> 

                   <div class="form-group col-sm-6">
                     <label for="exampleInputName">Ans 1</label>
                     <input type="text" name="ans1[]" id="ans1" class="form-control" value="<?php echo $s2['ans1']; ?>">
                   </div>

                   <div class="form-group col-sm-6">
                     <label for="exampleInputName">Ans 2</label>
                     <input type="text" name="ans2[]" id="ans2" class="form-control" value="<?php echo $s2['ans2']; ?>">                   
                   </div>

                   <div class="form-group col-sm-6">
                     <label for="exampleInputName">Ans 3</label>
                     <input type="text" name="ans3[]" id="ans3" class="form-control" value="<?php echo $s2['ans3']; ?>">
                   </div>


                   <div class="form-group col-sm-6">
                     <label for="exampleInputName">Ans 4</label>
                     <input type="text" name="ans4[]" id="ans4" class="form-control" value="<?php echo $s2['ans4']; ?>">
                   </div>


                   <div class="form-group">
                     <label for="exampleInputName">Final Answer</label><br>
                     <input type="checkbox" name="ans[]" id="ans1" value="a" <?php if("a"==$s2['final_ans']){echo "checked";} ?>>&nbsp; A &nbsp;&nbsp;&nbsp;
                     <input type="checkbox" name="ans[]" id="ans1" value="b" <?php if("a"==$s2['final_ans']){echo "checked";} ?>>&nbsp; B &nbsp;&nbsp;&nbsp;
                     <input type="checkbox" name="ans[]" id="ans1" value="c" <?php if("a"==$s2['final_ans']){echo "checked";} ?>>&nbsp; C &nbsp;&nbsp;&nbsp;
                     <input type="checkbox" name="ans[]" id="ans1" value="d" <?php if("a"==$s2['final_ans']){echo "checked";} ?>>&nbsp; D &nbsp;&nbsp;&nbsp;

                   </div>

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



        function test(id)
        {
            $.ajax({
                url:'multi_task.php',
                type:'post',
                data:{
                  demo:id
                },
                success:function(res)
                {
                  $('#demo').html(res);
                }
            });
        }

  </script>




















