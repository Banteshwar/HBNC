  <script type="text/javascript">
     jQuery(document).ready(function() {  

       $('body').on('change', 'select[name="State_ID"]',function(e){  // $('select[name="State_ID"]').on('change', function() {
		if($('select[name="District_ID"]').length == 0){
			return;
		}
        var stateID = $(this).val();
        //alert(stateID);
        var url1 = '<?php echo base_url(); ?>';
        if (stateID) {
          $.ajax({

            url: url1 + 'StateDistrictBlock/districtlist_options/' + stateID,
            type: "GET",
            dataType: "html",
            success: function(data) {
               
                $('select[name="District_ID"]').append(data);
            },
            beforeSend: function() {
                 $('select[name="District_ID"]').find('option').not(':first').remove();
				 $('select[name="Block_ID"]').find('option').not(':first').remove();
            }
          });
        } else {
           $('select[name="District_ID"]').find('option').not(':first').remove();
		   $('select[name="Block_ID"]').find('option').not(':first').remove();
        }
      });
	  
	  
	  // $('select[name="District_ID"]').on('change', function() {
	 $('body').on('change', 'select[name="District_ID"]',function(e){
		if($('select[name="Block_ID"]').length == 0){
			return;
		}
        var stateID = $(this).val();
        //alert(stateID);
        var url1 = '<?php echo base_url(); ?>';
        if (stateID) {
          $.ajax({

            url: url1 + 'StateDistrictBlock/blocklist_options/' + stateID,
            type: "GET",
            dataType: "html",
            success: function(data) {
               
                $('select[name="Block_ID"]').append(data);
            },
            beforeSend: function() {
                 $('select[name="Block_ID"]').find('option').not(':first').remove();
            }
          });
        } else {
           $('select[name="Block_ID"]').find('option').not(':first').remove();
        }
      });
    });

  </script>