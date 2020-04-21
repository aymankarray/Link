
<?php if($autos->cin != '' ){ ?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<div class="row">
	<div class="col-md-2"></div>

	<div class="col-md-8" >
<br><br><br>
			<!-- ######## This is a comment, visible only in the source editor  ######## -->
			<p><img src="https://tunivisions-foundation.org/wp-content/uploads/2017/12/logo-foundation.png" alt="" width="25%"  /></p>
			<p>&nbsp;</p>
			<h3>&nbsp;</h3>


			<h3 style="text-align: right;">الموضوع : مطلب ترخيص جولان للمشاركة في حملة تبرعات</h3>
<br>

			<br>

			<h4 style="text-align: right;">

			تشهد  جمعية  تونيفيسيون أن  العضو <?php echo $autos->nom ?> 

			صاحب بطاقة التعريف الوطنية عدد <?php echo $autos->cin ?>   
			الصاردرة  ب<?php echo $autos->region ?>   
			في <?php echo $autos->datecin ?>  و  القاطن ب<?php echo $autos->adresse ?>  <?php echo $autos->gov ?>  
<br>
<br>
<?php if ($autos->moto !='' ){?>

السيارة رقم<?php echo $autos->moto ?>

<?php } ?>
<br>
<br>
			أنه مشارك في حملة جمع و توزيع التبرعات التي ننظمها بمناسبة شهر رمضان تحت شعار  رمضان المحبة

<style type="text/css">
	.right {
  position: absolute;
  right: 0px;
  width: 1000px;

  padding: 40px;
}

</style>




			</h4>
			<br>
			
			<h4 style="text-align: right;">
			نرجوا منكم تمكين عضونا المذكور أعلاه ترخيص جولان داخل ولايتكم .
			</h4>
			
			<br>
		
			<h3 style="text-align: right;">&nbsp;</h3>
			<h4 style="text-align: right;">مع كل شكر و التقدير</h4>
			<h3 style="text-align: right;">&nbsp;</h3>		

			
	
			
			
			<img src="<?php echo base_url() ?>image/signature.JPG" width="1000px" class="right"  alt="Your text" />





				<br><br><br><br><br><br><br><br>





		


			<br>
			<p>&nbsp;</p>
		
				<br><br><br><br><br><br><br><br>
				<br><br><br><br><br><br><br><br>
			<p><strong>Association Tunivisions</strong><br />association soumise &agrave; la loi tunisienne<br />JORT n&deg; 44 du 13 avril 2017 &ndash; 2017402672 APSF1 p,2553<br /><br /><strong>Phone :</strong>&nbsp;58 642 584 |&nbsp;<strong>Mail :</strong>&nbsp;tunivisionsfoundation@gmail.com<br /><strong>Si&egrave;ge social :</strong>&nbsp;Association Tunivisions , 32 B (2eme &eacute;tage) centre Millenium route de la Marsa, Tunisie.</p>
		
			</div>

</div>
<div class="col-md-2" ></div>
</div>

<?php } else{ ?>

	<?php echo "CIN INTROUVABLE  !!!! ";  } ?>
