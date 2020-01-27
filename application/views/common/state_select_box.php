<?php 
$extra = array('class'=>'form-control error');
if(isset($state_required) ){
  $extra =array('required' => true);
} 
?>
<div class="form-group">

	<label for="input-1">State</label>

	<?php   if(isset($_SESSION['ADMIN']['State_ID']) && $_SESSION['ADMIN']['State_ID']  != 0) {
	  $state_name = getStatesName($_SESSION['ADMIN']['State_ID']);
	  ?>
	  <span class='state_name_label'>
		<?php echo $state_name;   ?> 
	  </span>
	<?php  } else { ?>
				<?php if(isset($state_required) ){
				$extra =array('required' => true);
				?>  
				<font color=red>*</font>
				<?php } 
		$stateList = getStatesList(true);
		$use_State_ID = 0;
		if(isset($State_ID)) {$use_State_ID = $State_ID;}
		echo form_dropdown('State_ID', $stateList, $use_State_ID , $extra);	
		?>		
		<span class="form_error"><?php echo form_error('State_ID'); ?></span>
	  <?php } ?>
	</div>