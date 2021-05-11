<?php 
	 ob_start();
  include("header.php");

	 $id = $_GET['id'];

	 $q= "SELECT * FROM result WHERE user_id='$id' AND result_category_id='".$_GET['category_id']."' AND result_subcategory_id='".$_GET['subcategory_id']."'";
	 $q1 = mysqli_query($con,$q);
	 $q2 = mysqli_fetch_all($q1,MYSQLI_ASSOC);


	 foreach ($q2 as $key => $value) {
	 	$m = "SELECT * FROM exam_question WHERE exam_question_id='".$value['question_id']."'";
	 	$m1 = mysqli_query($con,$m);
	 	$m2 = mysqli_fetch_assoc($m1);
	 	 // print_r($m2);
	 	 // die;
	 	if($m2['final_ans'] == $value['ans'] )
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
	 

	 $t = "SELECT * FROM result WHERE result_exam_id = '".$_GET['exam_id']."' AND user_id='".$_SESSION['id']."' AND result_category_id='".$_GET['category_id']."' AND result_subcategory_id='".$_GET['subcategory_id']."'";
	 $t1 = mysqli_query($con,$t);
	 $t2 = mysqli_fetch_all($t1,MYSQLI_ASSOC);

	 // echo "<pre>";print_r($t2);die;

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

// echo $f;

	 $ename = "SELECT * FROM exam WHERE exam_id='".$_GET['exam_id']."'";
	 $ename1 = mysqli_query($con,$ename);
	 $ename2 = mysqli_fetch_assoc($ename1);
	 $ename3 = $ename2['exam_name'];

	 // echo "<pre>";print_r($ename2);die;





?>
 

							 	<div class="container py-5">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body p-0">
                                        	<p class="text-center py-4 bg-light" style="color: #FF3414; font-size: 40px;">Result</p>
                                            <div class="row p-5">
                                                <div class="col-md-6">
                                                    <img src="img/eRTO.png" width="200">
                                                </div>


                                                <div class="col-md-6 text-right">
                                                    <p class="font-weight-bold mb-1">Exam Name &nbsp;&nbsp; <span class="font-weight-light text-muted"><?php echo $ename2['exam_name']; ?></span></p>
                                                    <p class="font-weight-bold">Date : &nbsp;&nbsp; <span class="font-weight-light"><?php echo $ename2['created_at']; ?></span></p>
                                                </div>
                                            </div>

                                            <hr class="my-5">

                                            <div class="row pb-5 p-5">
                                                <div class="col-md-6">
                                                    <p class="font-weight-bold mb-4">User Name : <span class="font-weight-light">&nbsp;&nbsp; <?php echo $_SESSION['name']; ?></span></p>
                                                    <p class="font-weight-bold mb-4">Contact : <span class="font-weight-light">&nbsp;&nbsp; <?php echo $_SESSION['contact']; ?></span></p>
                                                    <p class="font-weight-bold mb-4">E-mail : <span class="font-weight-light">&nbsp;&nbsp; <?php echo $_SESSION['email']; ?></span></p>
                                                    
                                                </div>

                                                <div class="col-md-6 text-right">
                                                    <p class="font-weight-bold mb-4">Exam No</p>
                                                    <p class="mb-1"><span class="text-muted"><?php echo $_GET['exam_id'] ?></span><br>
                                                  
                                                </div>
                                            </div>

                                            <div class="row p-5">
                                                <div class="col-md-12">
                                                    <table class="table">
                                                        <thead>
                                                            <tr class="bg-light">
                                                                
                                                                <th class="border-0 text-uppercase small font-weight-bold">Exam Name</th>
                                                                <th class="border-0 text-uppercase small font-weight-bold">Total Ans.</th>
                                                                <th class="border-0 text-uppercase small font-weight-bold">True Ans.</th>
                                                                <th class="border-0 text-uppercase small font-weight-bold">False Ans.</th>
                                                                
                                                            </tr>
                                                        </thead>
                                                        <tbody>


                                                            <tr>
                                                                
                                                                <td><?php echo $ename3; ?></td>
                                                                <td><?php echo $p+$f; ?></td>
                                                                <td><?php echo $p; ?></td>
                                                                <td><?php echo $f; ?></td>
                                                                
                                                            </tr>
                                                          
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                            <div class="d-flex flex-row-reverse bg-dark text-white p-4">
                                                <!-- <div class="py-3 px-5 text-right">
                                                    <div class="mb-2">Grand Total</div>
                                                    <div class="h2 font-weight-light">$234,234</div>
                                                </div>

                                                <div class="py-3 px-5 text-right">
                                                    <div class="mb-2">Discount</div>
                                                    <div class="h2 font-weight-light">10%</div>
                                                </div> -->

                                                <div class="py-1 px-5 text-right">
                                                    <div class="mb-1">Final Result</div>
                                                    <div class="h2 font-weight-light">
                                                    	<?php if(($p)>=$ename2['exam_final_mark']){  ?>
                                                    		<span style="color: green;"><?php echo $result="Pass"; ?></span>
                                                    	<?php  }else{ ?>
                                                    		<span style="color: red;"><?php echo $result="Fail"; ?></span>
                                                    	<?php }?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php if (isset($_GET['file'])) {
                                   $sfile = "result.php";
                                   $file = $_GET['file'];
                                   
                                    if (file_exists($sfile) && is_readable($sfile) && preg_match('/\.pdf$/',$file)) {
                                        // echo "hii";
                                        // die;
                                     header('Content-Type: application/pdf');
                                     header("Content-Disposition: attachment; filename=\"$file\"");
                                     readfile($sfile);
                                    }
                                    } 
                                    ?>
                                     
                                     <a href="result.php?id=<?php echo $_GET['id']; ?>&exam_id=<?php echo $_GET['exam_id']; ?>&file=example.pdf">Click here to download PDF</a>
                                </div>
                            </div>
                          

                            
                            
                          <!--   <div class="text-light mt-5 mb-5 text-center small">by : <a class="text-light" target="_blank" href="http://totoprayogo.com">totoprayogo.com</a></div> -->

                        </div>


<?php 
	include('footer.php');
?>