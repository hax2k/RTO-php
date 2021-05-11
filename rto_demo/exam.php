<?php
  ob_start();
  include("header.php");

// print_r($_SESSION);
// die;






  $sid = $_GET['id'];
  $q = "SELECT * FROM slot_book WHERE slot_book_id='$sid' AND status=1";
  $q1 = mysqli_query($con,$q);
  $q2 = mysqli_fetch_assoc($q1);
  // echo "<pre>";
  // print_r($q2);
  // die;


   // $m = "SELECT exam_create.*,exam_create.create_state_id,exam_create.create_city_id,exam_create.create_office_id,exam_create.create_slot_id FROM exam_create,state,city,rto_office,slot WHERE exam_create.create_state_id=state.state_id AND exam_create.create_city_id=city.city_id AND exam_create.create_office_id=rto_office.office_id AND exam_create.create_slot_id=slot.slot_id ";



  $cat_id = $q2['book_category_id'];
  $sub_id = $q2['book_subcategory_id'];
  $sid = $q2['book_state_id'];
  $cid = $q2['book_city_id'];
  $oid = $q2['book_office_id'];
  $sno = $q2['slot_no'];
  $bdate = $q2['slot_book_date'];
  $rid = $q2['book_register_id'];


    $m = "SELECT * FROM exam_create WHERE create_state_id='$sid' AND create_city_id='$cid' AND create_office_id='$oid' AND create_slot_id='$sno' AND create_exam_date='$bdate'";
   $m1 = mysqli_query($con,$m);
   $m2 = mysqli_fetch_assoc($m1);




   $all = "SELECT * FROM exam WHERE exam_id='".$m2['create_exam_id']."'";
   $all1 = mysqli_query($con,$all);
   $all2 = mysqli_fetch_assoc($all1);
      // echo "<pre>";
      // print_r($all2);
      // die;

    $n = "SELECT * FROM exam_question WHERE exam_id='".$m2['create_exam_id']."'";
    // $n = "SELECT exam_question.* FROM exam_question,exam,exam_create WHERE exam_question.exam_id=exam.exam_id AND exam.exam_id=exam_create.create_exam_id AND exam_question.exam_id='".$m2['create_exam_id']."'";
    $n1 = mysqli_query($con,$n);
    $n2 = mysqli_fetch_all($n1,MYSQLI_ASSOC);
    // echo "<pre>";
    // print_r($n2);
    // die;
    // $_SESSION['exam_id'] = $n2[0]['exam_id'];


    if(count($_POST)>0)
    {
      // echo "<pre>";
      // print_r($_POST);
      // die;

    

      foreach ($_POST['question_id'] as $key => $value) 
      {
        
        $ans = $_POST['ans'.$key];
        $id = $_SESSION['id'];
        $e = "INSERT INTO result (user_id,question_id,ans,result_exam_id,result_category_id,result_subcategory_id) VALUES('$id','$value','$ans','".$m2['create_exam_id']."','".$cat_id."','".$sub_id."')";
        $e1 = mysqli_query($con,$e);
      // echo "<pre>";
      // print_r($m2['create_exam_id']);
      // die;
      }

      if($e1)
      { 



                   $q= "SELECT * FROM result WHERE user_id='".$_SESSION['id']."'";
                   $q1 = mysqli_query($con,$q);
                   $q2 = mysqli_fetch_all($q1,MYSQLI_ASSOC);

                   // echo "<pre>";
                   // print_r($q2);
                   // die;

                   foreach ($q2 as $key => $value) {
                    $d = "SELECT * FROM exam_question WHERE exam_question_id='".$value['question_id']."'";
                    $d1 = mysqli_query($con,$d);
                    $d2 = mysqli_fetch_assoc($d1);
                    if($d2['final_ans'] == $value['ans'] )
                    {
                      // $q2[$key]['ans'] = 1;  
                      $n = "UPDATE result SET ans_result='1' WHERE result_id='".$value['result_id']."'";


                    }
                    else
                    {
                      $n = "UPDATE result SET ans_result='0' WHERE result_id='".$value['result_id']."'";
                    }

                    $n1 = mysqli_query($con,$n);
                   }
                   

                   $t = "SELECT * FROM result WHERE result_exam_id = '".$m2['create_exam_id']."' AND user_id='".$_SESSION['id']."' AND result_category_id='".$cat_id."' AND result_subcategory_id='".$sub_id."'";
                   $t1 = mysqli_query($con,$t);
                   $t2 = mysqli_fetch_all($t1,MYSQLI_ASSOC);
                    // echo "<pre>";
                    //  print_r($t2);
                    //  die;

                   $p=0;
                   $f=0;
                   foreach ($t2 as $key => $value) {
                    
                    if($value['ans_result'] == 1)
                    {
                        $p++;
                    }
                    else
                    {
                        $f++;
                    }
                   }


                 if(($p)>=$all2['exam_final_mark'])
                 {  
                          $result="Pass"; 
                 }
                 else
                  {
                          $result="Fail"; 
                  }
                   $t_ans = $p+$f;
                   $i = "INSERT INTO final_result (result_exam_id,t_ans,f_ans,total_ans,result_type,user_id,final_category_id,final_subcategory_id,final_register_id) VALUES ('".$m2['create_exam_id']."','$p','$f','$t_ans','$result','$id','".$cat_id."','".$sub_id."','".$rid."')"; 
                    $i1 = mysqli_query($con,$i);

                    $i12  = mysqli_insert_id($con);
                    $i123 = "SELECT * FROM final_result WHERE final_result_id = '".$i12."'";
                    $i1234 = mysqli_query($con,$i123);
                    $i12345 = mysqli_fetch_assoc($i1234);

                    if($i12345['result_type'] == "Pass")
                    {

                          $u = "UPDATE slot_book SET status=2 WHERE slot_book_date='".$bdate."' AND slot_no='".$m2['create_slot_id']."'";
                          $n = "UPDATE licence_register SET status=2 WHERE licence_register_id='".$rid."' ";

                          $j = "SELECT * FROM licence_register WHERE licence_category_id='".$cat_id."' AND licence_subcategory_id='".$sub_id."' AND licence_register_id !='".$rid."'";
                          $j1 = mysqli_query($con,$j);
                          $j2 = mysqli_fetch_all($j1,MYSQLI_ASSOC);
                          foreach ($j2 as $key => $value) {
                                
                                $w = "UPDATE licence_register SET status=5 WHERE licence_register_id='".$value['licence_register_id']."'";
                                $w1 = mysqli_query($con,$w);
                                $x = "UPDATE slot_book SET status=5 WHERE book_register_id='".$value['licence_register_id']."'";
                                $x1 = mysqli_query($con,$x);
                          }
                    }
                    else
                    {
                       $u = "UPDATE slot_book SET status=3 WHERE slot_book_date='".$bdate."' AND slot_no='".$m2['create_slot_id']."'";
                        $n = "UPDATE licence_register SET status=3 WHERE licence_register_id='".$rid."' ";

                        $j = "SELECT * FROM licence_register WHERE licence_category_id='".$cat_id."' AND licence_subcategory_id='".$sub_id."' AND licence_register_id !='".$rid."'";
                          $j1 = mysqli_query($con,$j);
                          $j2 = mysqli_fetch_all($j1,MYSQLI_ASSOC);
                          foreach ($j2 as $key => $value) {
                                
                                $w = "UPDATE licence_register SET status=5 WHERE licence_register_id='".$value['licence_register_id']."'";
                                $w1 = mysqli_query($con,$w);
                                $x = "UPDATE slot_book SET status=5 WHERE book_register_id='".$value['licence_register_id']."'";
                                $x1 = mysqli_query($con,$x);
                          }
                    }
                                // echo $m2['create_exam_id'];
                                // die;
                   // die;
                    $u1 = mysqli_query($con,$u);
                    $n1 = mysqli_query($con,$n);
                  header("location:result.php?id=".$_GET['id']."&exam_id=".$m2['create_exam_id']."&category_id=".$cat_id."&subcategory_id=".$sub_id);
      }
    }

 

?>  
<!DOCTYPE html>
<html>
<head>   
  <title></title>
</head>
<body>


                <div class="mt-4" style="margin-left: 600px;">
                                     <form role="form" method="post" enctype="multipart/form-data">
                                        <div class="card-body">

                                            <h2>Exam</h2><div class="countdown"></div><br />
                                            <span id="slot_id"><?php echo $_GET['id']; ?></span>

                                      <?php 


                                      // echo "<pre>";
                                      // print_r($n2);
                                      // die;
                                      foreach($n2 as $key => $value) { ?>

                                          <div class="form-group">

                                            <input type="hidden" name="question_id[]" value="<?php echo $value['exam_question_id']; ?>">
                                            <label for="exampleInputName"><?php echo $value['question']; ?></label> <br>
                                            A<input type="radio"  value="a" id="exampleInputGender" name="ans<?php echo $key; ?>">&nbsp;&nbsp;<?php echo $value['ans1']; ?> &nbsp;&nbsp; <br/>
                                            B<input type="radio" value="b" id="exampleInputGender" name="ans<?php echo $key; ?>">&nbsp;&nbsp;<?php echo $value['ans2']; ?> &nbsp;&nbsp; <br/>
                                            C<input type="radio" value="c" id="exampleInputGender" name="ans<?php echo $key; ?>">&nbsp;&nbsp;<?php echo $value['ans3']; ?> &nbsp;&nbsp; <br/>
                                            D<input type="radio" value="d" id="exampleInputGender" name="ans<?php echo $key; ?>">&nbsp;&nbsp;<?php echo $value['ans4']; ?> &nbsp;&nbsp; <br/>
                                            <br>

                                          </div>
                                      <?php } ?>
                                      
                                          <br /><br />
                                           <div action="#" class="form-group">
                                                <button class="btn btn-primary" type="submit">Submit</button>
                                            </div>
                                    
                                        </div>
                                    </form>

                                  </div>

</body>
</html>




<?php
  include("footer.php");
?>

<script type="text/javascript">
  var timer2 = "05:00";
var interval = setInterval(function() {


  var timer = timer2.split(':');
 console.log(timer2);

  if(timer2  == '0:01')
  {
    alert("Time is over... Try again..");
    var sid = $('#slot_id').text();
    $.ajax({
      url:'exam_again.php',
      type:'GET',
      data:{
        'id':sid
      },
      success:function(res)
      {

      }

    });
    window.location.assign("http://localhost/rto_demo/schedule.php");

  }
  //by parsing integer, I avoid all extra string processing
  var minutes = parseInt(timer[0], 10);
  var seconds = parseInt(timer[1], 10);
  --seconds;
  minutes = (seconds < 0) ? --minutes : minutes;
  seconds = (seconds < 0) ? 59 : seconds;
  seconds = (seconds < 10) ? '0' + seconds : seconds;
  //minutes = (minutes < 10) ?  minutes : minutes;
  $('.countdown').html(minutes + ':' + seconds);
  if (minutes < 0) clearInterval(interval);
  //check if both minutes and seconds are 0
  if ((seconds <= 0) && (minutes <= 0)) clearInterval(interval);
  timer2 = minutes + ':' + seconds;
  
}, 1000);
</script>