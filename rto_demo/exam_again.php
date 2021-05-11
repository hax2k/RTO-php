<?php
  ob_start();
 // include("header.php");
include('db.php');
// print_r($_SESSION);
// die;






   $sid = $_GET['id'];

  $q = "SELECT * FROM slot_book WHERE slot_book_id='$sid' AND status=1";
  $q1 = mysqli_query($con,$q);
  $q2 = mysqli_fetch_assoc($q1);



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


      // echo "<pre>";
      // print_r($_POST);
      // die;

    

      
             
                   $i = "INSERT INTO final_result (result_type,user_id,final_category_id,final_subcategory_id,final_register_id) VALUES ('Fail','$id','".$cat_id."','".$sub_id."','".$rid."')"; 
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
                  // header("location:result.php?id=".$_GET['id']."&exam_id=".$m2['create_exam_id']."&category_id=".$cat_id."&subcategory_id=".$sub_id);
                    header("location:schedule.php");
    
 

?>  