<?php 
	$m =  $_POST['demo'];
?>

<?php  for($i=1;$i<=$m;$i++){ ?>
	 <div id="demo">
                   <div class="form-group">
                     <label for="exampleInputName">Question</label>
                     <textarea class="form-control" name="question[]" id="question"></textarea>
                   </div> 

                   <div class="form-group col-sm-6">
                     <label for="exampleInputName">Ans 1</label>
                     <input type="text" name="ans1[]" id="ans1" class="form-control">
                   </div>

                   <div class="form-group col-sm-6">
                     <label for="exampleInputName">Ans 2</label>
                     <input type="text" name="ans2[]" id="ans2" class="form-control">
                   </div>

                   <div class="form-group col-sm-6">
                     <label for="exampleInputName">Ans 3</label>
                     <input type="text" name="ans3[]" id="ans3" class="form-control">
                   </div>


                   <div class="form-group col-sm-6">
                     <label for="exampleInputName">Ans 4</label>
                     <input type="text" name="ans4[]" id="ans4" class="form-control">
                   </div>



                   <div class="form-group">
                     <label for="exampleInputName">Final Answer</label><br>
                     <input type="checkbox" name="ans[]" id="ans1" value="a">&nbsp; A &nbsp;&nbsp;&nbsp;
                     <input type="checkbox" name="ans[]" id="ans2" value="b">&nbsp; B &nbsp;&nbsp;&nbsp;
                     <input type="checkbox" name="ans[]" id="ans3" value="c">&nbsp; C &nbsp;&nbsp;&nbsp;
                     <input type="checkbox" name="ans[]" id="ans4" value="d">&nbsp; D &nbsp;&nbsp;&nbsp;
                   </div>

                 </div>

            
<?php  } ?>