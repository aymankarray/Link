 <div id="content-page" class="content-page">
    <div class="container">
        
        <?php foreach ($question as $key ) { ?>
        
        <div class="row">
	        <div class="iq-card">
		        <div class="iq-header-title">
		        	<h5><?php echo $key->Question ; ?> </h5>
		        </div>
		        <div class="iq-card-body">
		        		
		        		<?php if ($key->choice1) != '' { ?>
		        			<input type="radio" value="0" name="<?php echo $key->quizId ; ?>"> 
		        			<?php echo $key->choice1 ?> <br>
		        		<?php } ?>

		        		<?php if ($key->Answer2) != '' { ?>
		        			<input type="radio" value="1" name="<?php echo $key->quizId ; ?>"> 
		        			<?php echo $key->Answer2 ?> <br>
		        		<?php } ?>
		        		
		        		<?php if ($key->choice1) != '' { ?>
		        			<input type="radio" value="0" name="<?php echo $key->quizId ; ?>"> 
		        			<?php echo $key->choice2 ?> <br>
		        		<?php } ?>

		        		<?php if ($key->Answer1) != '' { ?>
		        			<input type="radio" value="1" name="<?php echo $key->quizId ; ?>"> 
		        			<?php echo $key->Answer1 ?> <br>
		        		<?php } ?>
		        		
		        		<?php if ($key->choice3) != '' { ?>
		        			<input type="radio" value="0" name="<?php echo $key->quizId ; ?>"> 
		        			<?php echo $key->choice2 ?> <br>
		        		<?php } ?>

		        		
		        		<?php if ($key->Answer3) != '' { ?>
		        			<input type="radio" value="1" name="<?php echo $key->quizId ; ?>"> 
		        			<?php echo $key->Answer3 ?> <br>
		        		<?php } ?>

		        		
		        		<?php if ($key->choice4) != '' { ?>
		        			<input type="radio" value="0" name="<?php echo $key->quizId ; ?>"> 
		        			<?php echo $key->choice4 ?> <br>
		        		<?php } ?>


		        		
		        		<?php if ($key->Answer4) != '' { ?>
		        			<input type="radio" value="1" name="<?php echo $key->quizId ; ?>"> 
		        			<?php echo $key->Answer4 ?> <br>
		        		<?php } ?>

		        		

		        </div>
	        </div>
	    </div>

		<?php } ?> 

    </div>
</div>