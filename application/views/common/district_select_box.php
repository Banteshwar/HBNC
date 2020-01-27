<?php 
$extra = array('class'=>'form-control error');
if(isset($district_required) ){
  $extra =array('required' => true);
} 
?>
<div class="form-group">

	<label >District</label>

	<?php   
	
if (isset($_SESSION['ADMIN']['District_ID'])&& $_SESSION['ADMIN']['District_ID'] != 0) {
				$district_name = getDistrictName($_SESSION['ADMIN']['District_ID']);
				?>
				<span class='state_name_label'>
					<?php echo $district_name; ?> 
				</span>
	<?php  } else { ?>
				<?php if(isset($district_required) ){
				$extra =array('required' => true);
				?>  
				<font color=red>*</font>
				<?php } 
		$use_State_ID	= 0;
		if(isset($State_ID)){ 
		    $use_State_ID = intval($State_ID);
		} 
		if(isset($_SESSION['ADMIN']['State_ID']) && $_SESSION['ADMIN']['State_ID']  != 0) {
			$use_State_ID = $_SESSION['ADMIN']['State_ID'] ;
		}	
		$districtList = getDistrictList($use_State_ID, true);

		$use_district_ID	= 0;
		if(isset($District_ID)){ 
		    $use_district_ID = intval($District_ID);
		} 
		if(isset($_SESSION['ADMIN']['District_ID']) && $_SESSION['ADMIN']['District_ID']  != 0) {
			$use_district_ID = $_SESSION['ADMIN']['District_ID'] ;
		}			

		
		echo form_dropdown('District_ID', $districtList, $use_district_ID , $extra);	
		?>		
		<span class="form_error"><?php echo form_error('District_ID'); ?></span>
	  <?php } ?>
	</div>