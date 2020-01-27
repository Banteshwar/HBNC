<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumb-->
        <div class="row pt-2 pb-2">
            <div class="col-sm-9">
                <h4 class="page-title">New Born Week Status</h4>
                <!-- <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javaScript:void();">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Events</li>
     </ol> -->
            </div>

        </div>
        <!-- End Breadcrumb-->

       
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header"><i class="fa fa-table"></i> New Born summary   -
                       <?php echo  getStatesName($State_ID); ?></div>
                    <div class="col-xs-12 col-lg-12">                      
                         <a href="<?php echo base_url(); ?>admin/report/newbornweek?newbornweek_eventdate_id=<?php echo $newbornweek_eventdate_id;?>" > Back</a>                    
                     </div>  <div class="card-body">
                        <form method='GET' action="<?php echo base_url('admin/report/newbornweek'); ?>">
                            <div class="row">                                                              
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="input-1">Date</label>
                                        <input type="hidden" name='State_ID' value="<?php echo $State_ID;?>">
                                        <select class="form-control error find_change" name="newbornweek_eventdate_id" id="newbornweek_eventdate_id" > 
                                              <option value="" >-- Select Date -- </option>
                                            <?php
                                            foreach($newbornweek_eventdates as $date){ ?>
                                                 <option value="<?php echo $date['date_id'];?>" 
                                                     <?php if($newbornweek_eventdate_id == $date['date_id']){echo 'selected';} ?> ><?php echo $date['date_text'];?></option> 
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                    <div class="col-md-4">
                                        <div class="form-group" style="margin-top: 30px;">
                                            <button type="submit" name="srch" class="btn btn-primary px-5 active"><i aria-hidden="true" class="fa fa-search"></i> Search</button>
                                        </div>
                                    </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                           
                                    
                                <?php if (!empty($data_rows)) { ?>
                                          <div class="card-body">
                     <button class="btn btn-success pull-right " id="btnExport" value="Export" onclick="Export()"><i class="fa fa-file-excel-o"></i> Export to Excel</button> </div>                                

                                    <table id="" class="table table-bordered table_download">
                                        <thead>
										<tr>
											<th colspan=19 style='text-align:left;' >
											  Date: <?php echo get_newbornweek_date($newbornweek_eventdate_id);?>
											  </th>
										</tr>
                                            <tr>
                                                <th rowspan="2">S.No</th>
                                                <th rowspan="2">District</th>
                                                <th colspan="4">Following activities are done during NNW otherwise enter No</th>
                                                <th colspan="4">Numbers for the following activities done during NNW</th>
                                                <th rowspan="2">Remark</th>
                                            </tr>
                                             <tr>
                                                <th>Advocacy meetings/ Seminars conducted</th>
                                                <th width="200px">Social media activities carried out</th>
                                                <th>Mass media activities carried out </th>
                                                <th>IEC display in health facilities</th>
                                                <th>No. of newborns screened for birth defect at facilities at birth</th>
                                                <th>No. of newborns visited at home by ASHA</th>
                                                <th>No. of newborns visited at home by ANM</th>
                                                <th>No. of mothers counseled  during Mother's/ ANC meetings</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 1;
											$total_newborns_screened = 0;
											$total_newborns_visited_ASHA =0;
											$total_newborns_visited_ANM = 0;
											$total_mothers_counseled = 0;
                                            foreach ($data_rows as $dist) {
                                                //if (isset($District_ID['did']) && $dist['District_ID'] == $District_ID['did']) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $i++; ?>
                                                        
                                                    </td>
                                                    <td>  
                                                        
                                                        <?php echo $dist['District_Name']; ?> </td>
                                                    <td>
                                                         <?php echo $dist['advocacy_meetings']; ?>
                                                    </td>
                                                    <td>
                                                         <?php echo $dist['social_media']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $dist['mass_media']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $dist['iec_display']; ?>
                                                    </td>
                                                    <td>
													   <?php echo $dist['newborns_screened'];
														$total_newborns_screened  += $dist['newborns_screened'];
													   
													   ?>
                                                    </td>
                                                    <td>
                                                         <?php echo $dist['newborns_visited_ASHA'];
															$total_newborns_visited_ASHA += $dist['newborns_visited_ASHA'];
														 ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $dist['newborns_visited_ANM'];
															$total_newborns_visited_ANM += $dist['newborns_visited_ANM'];
														?>
                                                    </td>
                                                   <td>
                                                       <?php echo $dist['mothers_counseled'];
															 $total_mothers_counseled += $dist['mothers_counseled'];
													   ?>
                                                    </td>                                                    
                                                    
                                                    <td>
                                                       <?php echo $dist['remark']?>
                                                    </td>  
                                                </tr>
												<?php } ?>
												<tr>
													<th colspan=2 > Total</th>
													<th  ></th>
													<th  ></th>
													<th  ></th>
													<th  ></th>
													
													<th ><?php echo  $total_newborns_screened;?></th>
													<th ><?php echo  $total_newborns_visited_ASHA;?></th>
													<th ><?php echo  $total_newborns_visited_ANM;?></th>
													<th ><?php echo  $total_mothers_counseled;?></th>
													
													<th></th>
													
													
												</tr>
												
												
	
                                        </tbody>
                                    </table>
                            </div>
                        </div>

                        
<?php } ?>
                </div>
            </div>
        </div><!-- End Row-->
       
    </div>
    <!-- End container-fluid-->

</div><!--End content-wrapper-->


<script>
    $(document).ready(function () {
//Default data table
        $('#default-datatable').DataTable();

        var table = $('#example').DataTable({
            lengthChange: false,
            buttons: ['copy', 'excel', 'pdf', 'print', 'colvis']
        });

        table.buttons().container()
                .appendTo('#example_wrapper .col-md-6:eq(0)');

    });
</script>
<script>
    $(document).ready(function () {
//Default data table
        $(".find_change").change(function(){
            $("#change_val").val(this.value);
 
}); 

        

    });
</script>


<!-- Get District DROPDOWN VALUE Based On State end-->

<script>
    $(function () {
        var timeout = 4000; // in miliseconds (3*1000)
        $('.alert').delay(timeout).fadeOut(1000);
    });
</script>

<script type="text/javascript">
    $(document).ready(function () {

        $("#final_submit").on("click", function () {
            if (confirm('Are you confirmed and submit the data finally ? Once the data is freezed it cannot be modified')) {

            } else {
                return false;
            }

        });
    });
</script>
