<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumb-->
        <div class="row pt-2 pb-2">
            <div class="col-sm-9">

                <h4 class="page-title">New Born Week Status</h4>
                
            </div>
        </div>
       

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header"><i class="fa fa-table"></i>
					  New Born summary 	-
					   <?php echo  getStatesName($State_ID); ?>
					 </div>
					
					   <div class="card-body">
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
                    <div class="row">    
                    <div class="col-xs-6 col-lg-6">
                            <a class="btn btn-warning" href="<?php echo base_url(); ?>admin/report/newbornweek?newbornweek_eventdate_id=<?php echo $newbornweek_eventdate_id; ?>"> < Back</a>
                        </div>
                        <div class="col-xs-6 col-lg-6">
                            <button class="btn btn-success pull-right " id="btnExport" value="Export" onclick="Export()"><i class="fa fa-file-excel-o"></i> Export to Excel</button>
                        </div>
                        </div>  
						<div class="table-responsive">
							<table class="table table-bordered table_download" cellpadding="7">
								<thead>
								 <?php if($newbornweek_eventdate_id) { ?>
									<tr>
										 <th colspan=19 style='text-align:left;' >
										  Date: <?php echo get_newbornweek_date($newbornweek_eventdate_id);?>
										  </th>
									</tr>
								  <?php }else { ?>
									<tr>
										 <th colspan=7 style='text-align:left;' >										 
										  Date: All Days ?>
										  </th>
									</tr>
									<?php } ?>
                                     <tr>
									   
                                        <th rowspan="2">S.No</th>
                                        <th rowspan="2">State Name</th>
										<th rowspan="2">District Name</th>
										<?php if($newbornweek_eventdate_id) { ?>
                                        <th colspan="3">Advocacy meetings/ Seminars conducted</th>
                                        <th colspan="3">Social media activities carried out</th> 
                                        <th colspan="3">Mass media activities carried out</th>
                                        <th colspan="3">IEC display in health facilities</th>
										<?php } ?>
                                        <th rowspan="2">No. of newborns screened for birth defect at facilities at birth</th>
                                        <th rowspan="2">No. of newborns visited at home by ASHA</th>
                                        <th rowspan="2">No. of newborns visited at home by ANM</th>
                                        <th rowspan="2">No. of mothers counseled during Mother's/ ANC meetings</th>
                                        
                                    </tr>
                                    <tr>
                                        <?php if($newbornweek_eventdate_id) { ?>
                                        <th>Count Yes</th>
                                        <th>Count No</th>
                                        <th>Count No fill</th>
                                        
                                        <th>Count Yes</th>
                                        <th>Count No</th>
                                        <th>Count No fill</th>
                                        
                                        <th>Count Yes</th>
                                        <th>Count No</th>
                                        <th>Count No fill</th>
                                                                                                
                                        <th>Count Yes</th>
                                        <th>Count No</th>
                                        <th>Count No fill</th>
										<?php } ?>
                                        
                                    </tr>
                                  
                                </thead>
								<tbody>
								<?php
									$i = 1;
									$total_advocacy_yes = 0;
									$total_advocacy_no = 0;
									$total_advocacy_not_fill = 0;

									$total_social_media_yes = 0;
									$total_social_media_no = 0;
									$total_social_media_not_fill = 0;

									$total_mass_media_yes = 0;
									$total_mass_media_no = 0;
									$total_mass_media_not_fill = 0;

									$total_iec_display_yes = 0;
									$total_iec_display_no = 0;
									$total_iec_display_not_fill = 0;

                                    $total_newborns_screened = 0;
                                    $total_newborns_visited_ASHA =0;
                                    $total_newborns_visited_ANM = 0;
                                    $total_mothers_counseled = 0;

								foreach ($data_rows as $rows) { ?>
									<tr>
										<td><?php echo $i++; ?></td>
										<td>
											 <?php echo $rows['State_Name']; ?> 
										</td>
										<td><?php echo $rows['District_Name']; ?></td>
										<?php if($newbornweek_eventdate_id) { ?>
										<td><?php echo $rows['advocacy_yes']; $total_advocacy_yes += $rows['advocacy_yes']; ?></td>
                                        <td><?php echo $rows['advocacy_no']; $total_advocacy_no += $rows['advocacy_no'];?></td>
                                        <td><?php echo $rows['advocacy_not_fill']; $total_advocacy_not_fill += $rows['advocacy_not_fill']; ?></td>
                                        <td><?php echo $rows['social_media_yes']; $total_social_media_yes += $rows['social_media_yes']; ?></td>
                                        <td><?php echo $rows['social_media_no']; $total_social_media_no += $rows['social_media_no'];?></td>
                                        <td><?php echo $rows['social_media_not_fill'];$total_social_media_not_fill += $rows['social_media_not_fill']; ?></td>
                                        <td><?php echo $rows['mass_media_yes']; $total_mass_media_yes += $rows['mass_media_yes']; ?></td>
                                        <td><?php echo $rows['mass_media_no']; $total_mass_media_no += $rows['mass_media_no']; ?></td>
                                        <td><?php echo $rows['mass_media_not_fill']; $total_mass_media_not_fill += $rows['mass_media_not_fill'];?></td>
                                        <td><?php echo $rows['iec_display_yes']; $total_iec_display_yes += $rows['iec_display_yes'];?></td>
                                        <td><?php echo $rows['iec_display_no']; $total_iec_display_no += $rows['iec_display_no'];?></td>
                                        <td><?php echo $rows['iec_display_not_fill']; $total_iec_display_not_fill += $rows['iec_display_not_fill'];?></td>	
										<?php } ?>

                                        <td><?php echo $rows['newborns_screened']; $total_newborns_screened += $rows['newborns_screened'];?></td>
                                        <td><?php echo $rows['newborns_visited_ASHA']; $total_newborns_visited_ASHA += $rows['newborns_visited_ASHA'];?></td>
                                        <td><?php echo $rows['newborns_visited_ANM']; $total_newborns_visited_ANM += $rows['newborns_visited_ANM'];?></td>
                                        <td><?php echo $rows['mothers_counseled']; $total_mothers_counseled += $rows['mothers_counseled'];?></td>						 
									</tr>
								<?php } ?>
									<tr>
										<td colspan="3"></b>Grand Total</b></td>
										<?php if($newbornweek_eventdate_id) { ?>
										<td><b><?php echo $total_advocacy_yes; ?></b></td>
										<td><b><?php echo $total_advocacy_no; ?></b></td>
										<td><b><?php echo $total_advocacy_not_fill; ?></b></td>
										<td><b><?php echo $total_social_media_yes; ?></b></td>
										<td><b><?php echo $total_social_media_no; ?></b></td>
										<td><b><?php echo $total_social_media_not_fill; ?></b></td>
										<td><b><?php echo $total_mass_media_yes; ?></b></td>
										<td><b><?php echo $total_mass_media_no; ?></b></td>
										<td><b><?php echo $total_mass_media_not_fill; ?></b></td>
										<td><b><?php echo $total_iec_display_yes; ?></b></td>
										<td><b><?php echo $total_iec_display_no; ?></b></td>
										<td><b><?php echo $total_iec_display_not_fill; ?></b></td>
										<?php  } ?>
                                        <td><b><?php echo $total_newborns_screened; ?></b></td>
                                        <td><b><?php echo $total_newborns_visited_ASHA; ?></b></td>
                                        <td><b><?php echo $total_newborns_visited_ANM; ?></b></td>
                                        <td><b><?php echo $total_mothers_counseled; ?></b></td>
										

									</tr>
									
								</tbody>
							</table>
						</div>
					</div>
                       
                       
                   
                </div>
            </div>
        </div><!-- End Row-->
    </div>
    <!-- End container-fluid-->

</div>

