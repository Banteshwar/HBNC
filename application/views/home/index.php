  
<!-- Slider 1 Area Start Here -->

<div id="skip_nav" class="slider-default slider-overlay">
    <div class="bend niceties preview-1">
        <div id="ensign-nivoslider-3" class="slides">
            <img src="<?= base_url('assets/img/banner/banner-1.png'); ?>" alt="slider"   title="#slider-direction-1" /> 
            <img src="<?= base_url('assets/img/banner/banner-hin-1.png'); ?>" alt="slider" title="#slider-direction-1" /> 
            <img src="<?= base_url('assets/img/banner/banner-2.png'); ?>" alt="slider" title="#slider-direction-2" />
            <img src="<?= base_url('assets/img/banner/banner-hin-2.png'); ?>" alt="slider" title="#slider-direction-2" />
            <img src="<?= base_url('assets/img/banner/banner-3.png'); ?>" alt="slider" title="#slider-direction-3" />
            <img src="<?= base_url('assets/img/banner/banner-hin-3.png'); ?>" alt="slider" title="#slider-direction-3" />
            <img src="<?= base_url('assets/img/banner/banner-4.png'); ?>" alt="slider" title="#slider-direction-3" />
            <img src="<?= base_url('assets/img/banner/banner-hin-4.png'); ?>" alt="slider" title="#slider-direction-3" />
        </div>
    </div>
</div>

<!-- Slider 1 Area End Here -->

<!--<marquee class="noting">Data is for demonstration only</marquee>-->


<!-- map -->
<div class="padding-top-bottom premium-feature-one">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <div class="filter_menu">
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="nav nav-pills ">
                                <li class="active" id="cover1"><a data-toggle="pill" href="#Children">Coverage</a></li>
                                <li id="cover2"><a data-toggle="pill" href="#Pregnant">ASHAs Trained</a></li>
                            </ul>
                        </div>


                        <div class="col-md-3 pull-right">
                            <select class="form-control" name='FYear' id="financial_year_change">
                                <option  value="2018-19" <?php if(isset($_GET['FYear']) && $_GET['FYear'] == '2018-19'){echo 'selected';}  ?> >2018-19</option>
                                <option value="2017-18"  <?php if(isset($_GET['FYear']) && $_GET['FYear'] == '2017-18'){echo 'selected';}  ?>>2017-18</option>
                                <option value="2016-17"  <?php if(isset($_GET['FYear']) && $_GET['FYear'] == '2016-17'){echo 'selected';}  ?>>2016-17</option>
                            </select>
                           <script type="text/javascript">
                                $('#financial_year_change').on('change',function(){
                                    window.location.href='<?php echo base_url();?>?FYear='+$(this).val();
                                });
                           </script>
                        </div>
                        <div class="col-md-2 pull-right"><div class="f_year">Financial Year :</div></div>
                    </div>
                </div>
                <div class="tab-content">
                    <div id="Children" class="tab-pane fade in active ">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                <div class="india_map">

                                    <div id="india_map_newborn" class="">
                                        <!-- Map html - add the below to your page -->
                                        <!-- End Map html -->
                                    </div>
                                </div>






                                <ul class="saturation">
                                    <li><span class="satu-1 sat-bg1"></span> <span class="satu2">Reports not Shared</span></li>
                                    <li><span class="satu-1 sat-bg2"></span> <span class="satu2"><40%</span></li>
                                    <li><span class="satu-1 sat-bg3"></span> <span class="satu2">40-60%</span></li>
                                    <li><span class="satu-1 sat-bg4"></span> <span class="satu2">>=60%</span></li>
                                </ul> 


                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                                <div class="row">
                                    <div class="col-md-6">

                                        <h3 class="performance_vacc">Newborns visited</h3>
                                        <div class="single-fact">
                                            <div class="icon-box img-icon1">
                                                <figure>
                                                    <img src="<?= base_url('assets/img/newborn.png'); ?>" alt="" title="" >
                                                </figure>
                                            </div>
                                            <div class="counter-position">
                                                <span class="timer counter-count"><?php echo $report_total['newborns_visited_total']; ?></span>
                                                <p></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h3 class="performance_vacc1">Newborns visited (%)</h3>
                                            </div>
                                        </div>
                                        <div class="nation-graph">
                                            <div class="box-inner detail_section">



                                                <?php
                                              //  $count = 1;
                                                foreach ($newborns_visited_percentage as $newborns_visited) {
                                                  //  if ($count++ == 6) {
                                                   //     break;
                                                   // }
                                                    ?>   

                                                    <div class="progress-group">
                                                        <span class="progress-text"><?php echo $newborns_visited['state']; ?></span>
                                                        <span class="progress-number"><b><?php echo $newborns_visited['newborns_visited']; ?>
                                                                <span class="progress_per bg-<?php echo newborn_percentage_color($newborns_visited['newborns_visited_percentage']); ?>">
                                                                    <?php echo $newborns_visited['newborns_visited_percentage']; ?>%</span></b></span>
                                                        <div class="progress sm">
                                                            <div class="progress-bar progress-bar-blue" style="width:<?php echo $newborns_visited['newborns_visited_percentage']; ?>%"></div>
                                                        </div>
                                                    </div>
                                                <?php } ?>   

                                                <ul class="saturation1">
                                                    <li><span class="satu-1 sat-bg1"></span> <span class="satu2">Number in thousand</span></li>

                                                </ul> 
                                                <div class="view_more"><a href="<?php echo base_url('report'); ?><?php if(isset($_GET['FYear'])){echo '?FYear='.$_GET['FYear'];} ?>">View More</a></div>	
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-md-6">

                                        <h3 class="performance_vacc">New Borns referred</h3>
                                        <div class="single-fact">
                                            <div class="icon-box img-icon">
                                                <figure>
                                                    <img src="<?= base_url('assets/img/referred.png'); ?>" alt="" title="">
                                                </figure>
                                            </div>
                                            <div class="counter-position blink">
                                                <span class="timer counter-count"><?php echo $report_total['new_borns_referred_total']; ?></span>
                                                <p></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h3 class="performance_vacc1">New Borns referred (%)</h3>
                                            </div>
                                        </div>
                                        <div class="nation-graph">
                                            <div class="box-inner detail_section">

                                                <?php foreach ($new_borns_referred_percentage as $newborns_referred_per) { ?>   

                                                    <div class="progress-group">
                                                        <span class="progress-text"><?php echo $newborns_referred_per['state']; ?></span>
                                                        <span class="progress-number"><b><?php echo $newborns_referred_per['new_borns_referred']; ?>
                                                                <span class="progress_per bg-<?php echo newborn_referred_percentage_color($newborns_referred_per['new_borns_referred_percentage']); ?>">
                                                                    <?php echo $newborns_referred_per['new_borns_referred_percentage']; ?>%</span></b></span>
                                                        <div class="progress sm">
                                                            <div class="progress-bar progress-bar-blue" style="width:<?php echo $newborns_referred_per['new_borns_referred_percentage']; ?>%"></div>
                                                        </div>
                                                    </div>
                                                <?php } ?>   

                                                <ul class="saturation1">
                                                    <li><span class="satu-1 sat-bg1"></span> <span class="satu2">Number in thousand</span></li>

                                                </ul> 
                                                <div class="view_more"><a href="<?php echo base_url('report'); ?><?php if(isset($_GET['FYear'])){echo '?FYear='.$_GET['FYear'];} ?>">View More</a></div>	

                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <ul class="saturation">
                                    <li><span class="satu-1 sat-bg1"></span> <span class="satu2">Reports not Shared</span></li>
                                    <li><span class="satu-1 sat-bg2"></span> <span class="satu2"><40%</span></li>
                                    <li><span class="satu-1 sat-bg3"></span> <span class="satu2">40-60%</span></li>
                                    <li><span class="satu-1 sat-bg4"></span> <span class="satu2">>=60%</span></li>
                                </ul> 

                            </div>
                        </div>
                    </div>
                    <div id="Pregnant" class="">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                <div class="india_map">
                                    <div id="india_map_asha" class="">
                                        <!-- Map html - add the below to your page -->
                                        <!-- End Map html -->
                                    </div>

                                </div>
                                <?php /*
                                  <div id="" >
                                  <!-- Map html - add the below to your page -->
                                  <img src="<?= base_url('assets/img/map.png'); ?>" alt="" />
                                  <!-- End Map html -->
                                  </div>
                                 */ ?>


                                <ul class="saturation">
                                    <li><span class="satu-1 sat-bg1"></span> <span class="satu2">Reports not Shared</span></li>
                                    <li><span class="satu-1 sat-bg2"></span> <span class="satu2"><75%</span></li>
                                    <li><span class="satu-1 sat-bg3"></span> <span class="satu2">75-90%</span></li>
                                    <li><span class="satu-1 sat-bg4"></span> <span class="satu2">>=90%</span></li>
                                </ul>


                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3 class="performance_vacc">ASHAs (in place)</h3>
                                        <div class="single-fact">
                                            <div class="icon-box img-icon1">
                                                <figure>
                                                    <img src="<?= base_url('assets/img/inplace.png'); ?>" alt="" title="" >
                                                </figure>
                                            </div>
                                            <div class="counter-position">
                                                <span class="timer counter-count"><?php echo $report_total['ASHAs_total']; ?></span>
                                                <p></p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <h3 class="performance_vacc1">ASHAs (in place)</h3>
                                            </div>
                                        </div>
                                        <div class="nation-graph">
                                            <div class="box-inner detail_section">

                                                <?php foreach ($ASHAs_in_place as $asha) { ?>   

                                                    <div class="progress-group">
                                                        <span class="progress-text"><?php echo $asha['state']; ?></span>
                                                        <span class="progress-number"><b><?php echo $asha['ASHAs']; ?> </b></span>
                                                        <div class="progress sm">
                                                            <div class="progress-bar progress-bar-blue" style="width:100%"></div>
                                                        </div>
                                                    </div>
                                                <?php } ?>                                                  
                                                <ul class="saturation1">
                                                    <li><span class="satu-1 sat-bg1"></span> <span class="satu2">Number in thousand</span></li>

                                                </ul> 
                                                <div class="view_more"><a href="<?php echo base_url('report'); ?>">View More</a></div>	
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <h3 class="performance_vacc">ASHA trained</h3>
                                        <div class="single-fact">
                                            <div class="icon-box img-icon">
                                                <figure>
                                                    <img src="<?= base_url('assets/img/traind.png'); ?>" alt="" title="">
                                                </figure>
                                            </div>
                                            <div class="counter-position blink">
                                                <span class="timer counter-count"><?php echo $report_total['ASHAs_trained_total']; ?></span>
                                                <p></p>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-12">
                                                <h3 class="performance_vacc1">ASHA trained (%)</h3>
                                            </div>
                                        </div>
                                        <div class="nation-graph">
                                            <div class="box-inner detail_section">
                                                <?php
                                                //$count = 1;
                                                foreach ($ASHA_trained_percentage as $asha_percent) {
                                                 //   if ($count++ == 6) {
                                                 //       break;
                                                  //  }
                                                    ?>   
                                                    <div class="progress-group"> 
                                                        <span class="progress-text"><?php echo $asha_percent['state']; ?></span>
                                                        <span class="progress-number"><b><?php echo $asha_percent['ASHAs_trained']; ?> 
                                                                <span class="progress_per bg-<?php echo ASHA_training_percentage_color($asha_percent['ASHA_trained_percentage']); ?>">
                                                                    <?php echo $asha_percent['ASHA_trained_percentage']; ?>% </span></b></span>
                                                        <div class="progress sm">
                                                            <div class="progress-bar progress-bar-blue" style="width:<?php echo $asha_percent['ASHA_trained_percentage']; ?>%"></div>
                                                        </div>
                                                    </div>
                                                <?php } ?>

                                                <ul class="saturation1">
                                                    <li><span class="satu-1 sat-bg1"></span> <span class="satu2">Number in thousand</span></li>

                                                </ul> 
                                                <div class="view_more"><a href="<?php echo base_url('report'); ?>">View More</a></div>	

                                            </div>

                                        </div>
                                    </div>

                                </div>

                                <ul class="saturation"> % Achieved
                                    <li><span class="satu-1 sat-bg1"></span> <span class="satu2">0-50%</span></li>
                                    <li><span class="satu-1 sat-bg2"></span> <span class="satu2">50-70%</span></li>
                                    <li><span class="satu-1 sat-bg3"></span> <span class="satu2">70-90%</span></li>
                                    <li><span class="satu-1 sat-bg4"></span> <span class="satu2">>90%</span></li>
                                </ul> 
                            </div>
                        </div>

                    </div>
                </div>
            </div>



            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">

                <div class="whats_new">
                    <h3>Events</h3>
                    <h4><!--<img src="<?= base_url('assets/img/new-gif-image.gif'); ?>" alt="" width="40px"/>--> HBNC-HBYC Events: December, 2019 to March, 2020</h4>
                    <?php //echo "<pre>";print_r($event); ?>
                    <marquee behavior="scroll" direction="up" onmouseout="this.start();" onmouseover="this.stop();" scrolldelay="150"> 
                        <ul>
                            <?php foreach ($event as $row) { ?>
                                <!--  <li><a href="">• <?php
                                // if (isset($row['title'])) {
                                //       echo $row['title'];
                                //     }
                                //   
                                ?><a/></li>-->

                            <?php } ?>

                            <li><a href="">• Universal Health Coverage Day 2019 Thursday 12 December</a></li>
                            <li><a href="">• National Newborn Week (NNW 2019)-15th to 21st November 2019</a></li>
                            <li><a href="">• World Prematurity Day- 17th November 2019</a></li>
                        </ul>
                    </marquee>
                </div>
            </div>

        </div>
    </div>
</div>
<!--map-->
</div>
<!-- Preloader Start Here -->



<!-- Modal -->
<div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">State Map:</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="table-responsive"  id="comment">
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>

<?php
$asha_map_color = array();
foreach ($ASHA_trained_percentage as $asha_percent) {
    $asha_map_color[$asha_percent['State_Char_Code']] = ASHA_training_percentage_map_color($asha_percent['ASHA_trained_percentage']);
}
$newborns_color = array();
foreach ($newborns_visited_percentage as $newborns_visited) {
    $newborns_color[$newborns_visited['State_Char_Code']] = newborn_percentage_map_color($newborns_visited['newborns_visited_percentage']);
}
?>

<script>
    $(document).ready(function () {
        $('#Pregnant').css({'opacity': '0', 'height': '0px', 'overflow': 'hidden'});
        $('#cover2').click(function () {

            $('#Pregnant').css({'opacity': '1', 'height': 'auto'});
        });
        $('#cover1').click(function () {

            $('#Pregnant').css({'opacity': '0', 'height': '0px', 'overflow': 'hidden'});
        });

    });
</script>

<script type="text/javascript">

// console.log('old');
    //console.log(window.JSMaps.maps.india.paths);
    var newborns_color = <?php echo json_encode($newborns_color); ?>;
    //console.log(newborns_color);
    $.each(window.JSMaps.maps.india.paths, function (key, value) {
        if (newborns_color[value.abbreviation]) {
            this.color = newborns_color[value.abbreviation];
        }
    });
//console.log('new');
//console.log(window.JSMaps.maps.india.paths);

    jQuery('#india_map_newborn').JSMaps({
        map: 'india',
        mapWidth: 60,
        mapHeight: 40,
        responsive: true,
        stateClickAction: 'none',
        displayAbbreviations: true,
        abbreviationColor: '#000',
        abbreviationFontSize: 14,
        autoPositionAbbreviations: false,
        disableTooltip: true,
        onReady: function () {

            // The map is fully rendered and ready for interactions
            var mapData = window.JSMaps.maps.india;
            $('#india_map_newborn').trigger('reDraw', mapData);

        },
        onStateClick: function (data) {

        },
    });

</script>


<script type="text/javascript">

    var asha_map_color = <?php echo json_encode($asha_map_color); ?>;
    // console.log(asha_map_color);

    $.each(window.JSMaps.maps.india2.paths, function (key, value) {
        if (asha_map_color[value.abbreviation]) {
            this.color = asha_map_color[value.abbreviation];
        }
    });
    //console.log(window.JSMaps.maps.india2.paths);
    jQuery('#india_map_asha').JSMaps({
        map: 'india',
        mapWidth: 60,
        mapHeight: 40,
        responsive: true,
        stateClickAction: 'none',
        displayAbbreviations: true,
        abbreviationColor: '#000',
        abbreviationFontSize: 14,
        autoPositionAbbreviations: false,
        disableTooltip: true,
        onReady: function () {
            // The map is fully rendered and ready for interactions

            var mapData = window.JSMaps.maps.india2;

            $('#india_map_asha').trigger('reDraw', mapData);

        },
        onStateClick: function (data) {

        },
    });

</script>
