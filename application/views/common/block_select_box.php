<?php 
$extra = array('class'=>'form-control error');
if(isset($block_required) ){
  $extra =array('required' => true);
} 
?>
<div class="form-group">

	<label >Block</label>

				<?php if(isset($district_required) ){
				$extra =array('required' => true);
				?>  
				<font color=red>*</font>
				<?php } 
		$use_District_ID = 0;
		if(isset($District_ID)){ 
		    $use_District_ID = intval($District_ID);
		} 	
		if (isset($_SESSION['ADMIN']['District_ID']) && $_SESSION['ADMIN']['District_ID'] != 0)  {
		   $use_District_ID = $_SESSION['ADMIN']['District_ID'] ;
		}			
		$blockList = getblockList($use_District_ID, true);	

		$use_Block_ID = 0;
		if(isset($Block_ID)){ 
		    $use_Block_ID = intval($Block_ID);
		} 	
				
		echo form_dropdown('Block_ID', $blockList, $use_Block_ID , $extra);	
		?>		
		<span class="form_error"><?php echo form_error('Block_ID'); ?></span>

	</div>