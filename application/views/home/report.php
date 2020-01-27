<?php // print_r($report_total); ?>

<!-- Slider 2 Area End Here -->
<div id="skip_con" class="alert_content">

    <!-- Slider 2 Area End Here -->
    <!-- Single service page Start Here -->
    <div class="padding-top-bottom60">
        <div class="container">
<!--            <marquee class="noting">Data is for demonstration only</marquee>-->
            <div class="row">
                <!-- Main body Start Here -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="body-content">
                        <div class="media-body content ministry_head">
                            <h3>Progress of Home Based New Born Care in FY <?php echo $FYear;?></h3>
                            <div class="row">
                                <div class="col-md-2 text-right"><div class="f_year">Financial Year :</div></div>
                                <div class="col-md-2">
                            <select class="form-control" name='FYear' id="financial_year_change">
                                <option  value="2018-19" <?php if(isset($_GET['FYear']) && $_GET['FYear'] == '2018-19'){echo 'selected';}  ?> >2018-19</option>
                                <option value="2017-18"  <?php if(isset($_GET['FYear']) && $_GET['FYear'] == '2017-18'){echo 'selected';}  ?>>2017-18</option>
                                <option value="2016-17"  <?php if(isset($_GET['FYear']) && $_GET['FYear'] == '2016-17'){echo 'selected';}  ?>>2016-17</option>
                            </select>
                           <script type="text/javascript">
                                $('#financial_year_change').on('change',function(){
                                    window.location.href='<?php echo base_url('report');?>?FYear='+$(this).val();
                                });
                           </script>
                        </div>
                                <div class="col-xs-8 col-lg-8  text-right">
                                    <button class="btn btn-info" ng-click="onPrint('stateTable')"><i class="fa fa-print"></i> Print</button>
                                    <button class="btn btn-success" ng-click="exportFile('stateTable')"><i class="fa fa-file-excel-o"></i> Export to Excel</button>
                                </div>
                                 
                            </div>
                            <table id="" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th >S.No</th>
                                        <th >State Name</th>
                                        <th >ASHAs (in place)</th>
                                        <th >ASHA trained</th>
                                        <th>% ASHA trained</th>
                                        <th >Reported Live birth</th>
                                        <th >Newborns visited under HBNC</th>
                                        <th >Percentage newborns visited</th>
                                        <th >New Borns referred</th>
                                        <th >Percentage  referral - sick newborns</th>
                                    </tr>
                                   
                                </thead>
                                <tbody>
                                    <?php foreach($report_list as $report) { ?>
                                    <tr>
                                        <td><?php echo $report['id'];?>.</td>
                                        <td width="200px"><?php echo $report['state'];?></td>
                                        <td><?php echo $report['ASHAs'];?></td>
                                        <td><?php echo $report['ASHAs_trained'];?></td>
                                        <td>
                                        <?php if($report['ASHAs'] == '' || $report['ASHAs'] == 0) { 
                                            echo '';
                                        }else {
                                           echo round(($report['ASHAs_trained']/$report['ASHAs'])*100,2).'%';
                                        }?></td>
                                        <td><?php echo $report['Reported_live_birth'];?></td>
                                        <td><?php echo $report['newborns_visited'];?></td>
                                        <td> 
                                          <?php if($report['Reported_live_birth'] == '' || $report['Reported_live_birth'] == 0) { 
                                            echo '';
                                        }else {
                                          echo round(($report['newborns_visited']/$report['Reported_live_birth'])*100,2).'%';
                                        }?>
                                        </td>
                                        <td><?php echo $report['new_borns_referred'];?></td>
                                         <td> 
                                          <?php if($report['newborns_visited'] == '' || $report['newborns_visited'] == 0) { 
                                            echo '';
                                        }else {
                                          echo round(($report['new_borns_referred']/$report['newborns_visited'])*100,2) .'%';
                                        }?>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                    <tr>
                                       <tr>
                                        <td></td>
                                        <th width="200px">All India</th>
                                        <th><?php echo $report_total['ASHAs_total'];?></th>
                                        <th><?php echo $report_total['ASHAs_trained_total'];?></th>
                                        <th>
                                        <?php if($report_total['ASHAs_total'] == '' || $report_total['ASHAs_total'] == 0) { 
                                            echo '';
                                        }else {
                                           echo round(($report_total['ASHAs_trained_total']/$report_total['ASHAs_total'])*100,2).'%';
                                        }?></td>
                                        <th><?php echo $report_total['Reported_live_birth_total'];?></th>
                                        <th><?php echo $report_total['newborns_visited_total'];?></th>
                                        <th> 
                                          <?php if($report_total['Reported_live_birth_total'] == '' || $report_total['Reported_live_birth_total'] == 0) { 
                                            echo '';
                                        }else {
                                          echo round(($report_total['newborns_visited_total']/$report_total['Reported_live_birth_total'])*100,2).'%';
                                        }?>
                                        </th>
                                        <th><?php echo $report_total['new_borns_referred_total'];?></th>
                                         <th> 
                                          <?php if($report_total['newborns_visited_total'] == '' || $report_total['newborns_visited_total'] == 0) { 
                                            echo '';
                                        }else {
                                          echo round(($report_total['new_borns_referred_total']/$report_total['newborns_visited_total'])*100,2) .'%';
                                        }?>
                                        </th>
                                   
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                <!-- Main body End Here -->

            </div>




        </div>
    </div>
</div>
<!-- Single service page End Here -->
