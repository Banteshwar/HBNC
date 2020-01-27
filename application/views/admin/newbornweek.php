<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumb-->
        <div class="row pt-2 pb-2">
            <div class="col-sm-9">
                <h4 class="page-title"> National Newborn Week 2019(15th to 21st November)</h4>
                <!-- <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javaScript:void();">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Events</li>
     </ol> -->
            </div>

        </div>
        <!-- End Breadcrumb-->

        <?php $this->load->view('common/messages.php'); ?>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header"><i class="fa fa-table"></i> Reporting</div>
                    <div class="card-body">
                        <form method='GET' action="<?php echo base_url('admin/newbornweek'); ?>">
                            <div class="row">
                                <div class="col-md-4">
                                    <?php $state_required = true; ?>
                                    <?php $this->load->view('common/state_select_box.php'); ?>
                                </div>                                
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="input-1">Date</label>
                                        
                                        <select class="form-control error find_change" name="newbornweek_eventdate_id" id="newbornweek_eventdate_id" required=""> 
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
                           
                                    
                                <?php if (!empty($district_list)) { ?>
                                      <form method='POST' id='insertform' action="<?php echo base_url('admin/newbornweek/newbornweek_save'); ?>">
                                    <input type="hidden" name='State_ID' value="<?php echo $State_ID; ?>" >
                                     <input type="hidden" id="change_val" name='newbornweek_eventdate_id' value="<?php echo $newbornweek_eventdate_id; ?>" >

                                    <table id="" class="table table-bordered">
                                        <thead>

                                            <tr>
                                                <th rowspan="2">S.No</th>
                                                <th rowspan="2">District</th>
                                                <th colspan="4">Please enter Yes if following activities are done during NNW otherwise enter No</th>
                                                <th colspan="4">Please input numbers for the following activities done during NNW</th>
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
                                            foreach ($district_list as $dist) {
                                                //if (isset($District_ID['did']) && $dist['District_ID'] == $District_ID['did']) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $i++; ?>
                                                        
                                                    </td>
                                                    <td>  
                                                        <input type="hidden" id="distId<?php echo $dist['District_ID']; ?>" name="distId[]" value="<?php echo $dist['District_ID'] ?>"  <?php if (isset($dist['freeze']) && $dist['freeze'] == 1) echo "disabled"; ?>>
                                                        <?php echo $dist['District_Name']; ?> </td>

                                                    <td>
                                                        <select class="form-control" 
                                                                name="advocacy_meetings_<?php echo $dist['District_ID']; ?>" <?php if (isset($dist['freeze']) && $dist['freeze'] == 1) echo "disabled"; ?>>
                                                            <option value="">--Select--</option>
                                                            <option  value='Yes' 
                                                            <?php 
                                                            if ($dist['advocacy_meetings'] == 'Yes') {
                                                                echo 'selected';
                                                            }
                                                            ?> >Yes</option>
                                                            <option value='No' 
                                                                    <?php
                                                                     
                                                                    if ($dist['advocacy_meetings'] == 'No') {
                                                                        echo 'selected';
                                                                    }
                                                                    ?> >No</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select class="form-control"
                                                                name="social_media_<?php echo $dist['District_ID']; ?>" <?php if (isset($dist['freeze']) && $dist['freeze'] == 1) echo "disabled"; ?>>
                                                            <option  value="">--Select--</option>
                                                            <option value='Yes'  <?php
                                                            if ($dist['social_media'] == 'Yes') {
                                                                echo 'selected';
                                                            }
                                                            ?>
                                                                    >Yes</option>
                                                            <option value='No' 
                                                            <?php
                                                            if ($dist['social_media'] == 'No') {
                                                                echo 'selected';
                                                            }
                                                            ?>>No</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select class="form-control"
                                                                name="mass_media_<?php echo $dist['District_ID']; ?>" <?php if (isset($dist['freeze']) && $dist['freeze'] == 1) echo "disabled"; ?>>
                                                            <option  value="">--Select--</option>
                                                            <option value='Yes'  <?php
                                                    if ($dist['mass_media'] == 'Yes') {
                                                        echo 'selected';
                                                    }
                                                    ?>
                                                                    >Yes</option>
                                                            <option value='No' 
                                                            <?php
                                                            if ($dist['mass_media'] == 'No') {
                                                                echo 'selected';
                                                            }
                                                            ?>>No</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select class="form-control"
                                                                name="iec_display_<?php echo $dist['District_ID']; ?>" <?php if (isset($dist['freeze']) && $dist['freeze'] == 1) echo "disabled"; ?>>
                                                            <option  value="">--Select--</option>
                                                            <option value='Yes'  <?php
                                                            if ($dist['iec_display'] == 'Yes') {
                                                                echo 'selected';
                                                            }
                                                            ?>
                                                                    >Yes</option>
                                                            <option value='No' 
                                                            <?php
                                                            if ($dist['iec_display'] == 'No') {
                                                                echo 'selected';
                                                            }
                                                            ?>>No</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <input class="form-control"
                                                                name="newborns_screened_<?php echo $dist['District_ID']; ?>" value="<?php echo $dist['newborns_screened']; if($dist['freeze'] == 1)?>"
                                                                    <?php if($dist['freeze'] == 1) echo " readonly"; ?>
                                                                >
                                                    </td>
                                                    <td>
                                                        <input class="form-control"
                                                                name="newborns_visited_ASHA_<?php echo $dist['District_ID']; ?>" value="<?php echo $dist['newborns_visited_ASHA']?>"
                                                                 <?php if($dist['freeze'] == 1) echo " readonly"; ?>
                                                                >
                                                    </td>
                                                    <td>
                                                        <input class="form-control"
                                                                name="newborns_visited_ANM_<?php echo $dist['District_ID']; ?>" value="<?php echo $dist['newborns_visited_ANM']?>"
                                                                 <?php if($dist['freeze'] == 1) echo " readonly"; ?>
                                                                >
                                                    </td>
                                                   <td>
                                                        <input class="form-control"
                                                                name="mothers_counseled_<?php echo $dist['District_ID']; ?>" value="<?php echo $dist['mothers_counseled']?>"
                                                                 <?php if($dist['freeze'] == 1) echo " readonly"; ?>
                                                                >
                                                    </td>                                                    
                                                    <td>
                                                        <textarea name="remark_<?php echo $dist['District_ID']; ?>"
                                                                 <?php if($dist['freeze'] == 1) echo " readonly"; ?>
                                                                ><?php echo $dist['remark'];?></textarea>

                                                    </td>
                                                


                                                </tr>
    <?php } ?>
                                        </tbody>
                                    </table>
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="form-group">
                                <button type="submit" name="submit" class="btn btn-primary px-5"><i class="fa fa-paper-plane" aria-hidden="true"></i> Save and Update</button>
                                <span id="error_message" class="text-danger"></span>  
                                <span id="success_message" class="text-success"></span>
                                <button type="submit" name="final_submit" class="btn btn-success px-5"><i class="fa fa-paper-plane" aria-hidden="true"></i> Final Submit</button>
                            </div>
                        </div>	
<?php } ?>
                </div>
            </div>
        </div><!-- End Row-->
        </form>
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

		$("#insertform").on('submit',function(){
			if($("#change_val").val() == 0) {
				alert('Please select date and search');
				
				return false;
			}
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
