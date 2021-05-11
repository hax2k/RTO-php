<?php if($_POST['t'] == "fail"){ ?>
	<?php }else{ ?>
		  <div class="form-group">
                    <label for="exampleInputName">Licence No</label>
                    <input type="text"  readonly id="exampleInputName" placeholder="Enter State Name" class="form-control" name="l_no" value="<?php echo  rand(10000,1000000);echo  rand(1000000,9000000); ?>">
                  </div>

                  <?php 

                  $date = new DateTime('now');
                  $date->modify('+3 month'); // or you can use '-90 day' for deduct
                  $date = $date->format('Y-m-d');
                  
                  ?>
                    <div class="form-group">
                    <label for="exampleInputName">Validate Date</label>
                    <input type="text"  id="exampleInputName" placeholder="Enter State Name" class="form-control" name="v_date" readonly value="<?php echo $date; ?>">
                  </div>

		<?php } ?>