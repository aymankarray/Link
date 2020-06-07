 <div id="content-page" class="content-page">
    <div class="container">
        
        <?php foreach ($questions as $key ) { ?>
        
        <div class="row">
        	<div class="col-sm-12">
	        <div class="iq-card">
		        <div class="iq-card-header d-flex justify-content-between">
		        	<div class="iq-header-title">
		        	<h4 class="card-title" ><?php echo $key->Question ; ?> </h4>
		        	</div>
		        </div>
		        <div class="iq-card-body">
		        		
		        		<?php if ($key->choice1 != '') { ?>
		        			<input type="checkbox" value="0" name="<?php echo $key->quizId ; ?>"> 
		        			<?php echo $key->choice1 ?> <br>
		        		<?php } ?>

		        		<?php if ($key->Answer2 != '') { ?>
		        			<input type="checkbox" value="1" name="<?php echo $key->quizId ; ?>"> 
		        			<?php echo $key->Answer2 ?> <br>
		        		<?php } ?>
		        		
		        		<?php if ($key->choice2 != '') { ?>
		        			<input type="checkbox" value="0" name="<?php echo $key->quizId ; ?>"> 
		        			<?php echo $key->choice2 ?> <br>
		        		<?php } ?>

		        		<?php if ($key->Answer1 != '') { ?>
		        			<input type="checkbox" value="1" name="<?php echo $key->quizId ; ?>"> 
		        			<?php echo $key->Answer1 ?> <br>
		        		<?php } ?>
		        		
		        		<?php if ($key->choice3 != ''  ) { ?>
		        			<input type="checkbox" value="0" name="<?php echo $key->quizId ; ?>"> 
		        			<?php echo $key->choice3 ?> <br>
		        		<?php } ?>

		        		
		        		<?php if ($key->Answer3 != '')  { ?>
		        			<input type="checkbox" value="1" name="<?php echo $key->quizId ; ?>"> 
		        			<?php echo $key->Answer3 ?> <br>
		        		<?php } ?>

		        		
		        		<?php if ($key->choice4 != '')  { ?>
		        			<input type="checkbox" value="0" name="<?php echo $key->quizId ; ?>"> 
		        			<?php echo $key->choice4 ?> <br>
		        		<?php } ?>


		        		
		        		<?php if ($key->Answer4 != '' ) { ?>
		        			<input type="checkbox" value="1" name="<?php echo $key->quizId ; ?>"> 
		        			<?php echo $key->Answer4 ?> <br>
		        		<?php } ?>

		        		

		        </div>
		    </div>
	       </div>
	    </div>

		<?php } ?> 

    </div>
</div>