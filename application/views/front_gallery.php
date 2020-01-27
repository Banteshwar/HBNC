<div class="wraper">

    <!-- Header Area End Here -->
    <!-- Slider 1 Area Start Here -->



    <!-- Slider 2 Area End Here -->
    <div id="skip_con" class="alert_content">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

        </div>
        <!-- Slider 2 Area End Here -->
        <!-- Single service page Start Here -->
        <div class="padding-top-bottom60">
            <div class="container">
                <div class="row">
                    <!-- Main body Start Here -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="body-content">
                            <div class="media-body content">
                                <form method='GET' action="<?php echo base_url('gallery'); ?>">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <?php $this->load->view('common/state_select_box.php'); ?>
                                        </div>
                                        <div class="col-md-4">                           
                                            <?php $this->load->view('common/district_select_box.php'); ?>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group" style="margin-top: 30px;">
                                                <button type="submit" name="srch" class="btn btn-primary px-5 active"><i aria-hidden="true" class="fa fa-search"></i> Search</button>
                                            </div>
                                        </div>


                                    </div>
                                </form>
                                <?php if (count($result) > 0) { ?>
                                    <section class="video_gallery">
                                        <div class="container">
                                            <h3>Gallery</h3>
                                            <div class="row">

                                                <!-- Dynamic Code For PhotoGallery Start-->

                                                <?php foreach ($result as $rows) { ?>

                                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                        <div class="welfare-project">
                                                            <img itemprop="image" src="<?php echo base_url() . 'download/gallery/' . $rows['image']; ?>"  height="350" alt=" " />
                                                            <div class="project-info">
                                                                <h3 ><?php if (isset($rows['title'])) {
                                                echo $rows['title'];
                                            } ?></h3>
                                                                <div class="urgent-progress"></div>
                                                            </div>

                                                            <div class="project-hover">
                                                                <h3><a href="<?php echo base_url() . 'download/gallery/' . $rows['image']; ?>" data-group="Gallery"  class="html5lightbox"  data-thumbnail="<?php echo base_url() . 'download/gallery/' . $rows['image']; ?>" title="<?php if (isset($rows['description'])) {
                                                echo $rows['description'];
                                            } ?> "><i class="fa fa-search-plus" aria-hidden="true"></i>View  </a></h3>
                                                                <div class="goal raised"><?php if (isset($rows['description'])) {
                                                echo $rows['description'];
                                            } ?></div>
                                                            </div>
                                                        </div>
                                                    </div><!-- col-md-3 -->

    <?php } ?>










                                                <!-- Dynamic Code For PhotoGallery Ended-->
                                            </div><!-- Welfare Projects Carousel -->
                                            <!-- pagination box -->


                                            <!-- End Pagination box -->
                                        </div>

                                </div>
                                </section>
<?php } ?>
                        </div>
                    </div>
                    <!-- Main body End Here -->

                </div>
            </div>
        </div>
    </div>
    <!-- Single service page End Here -->

    <!-- Footer section Start Here -->

    <!-- Footer section End Here -->
</div>
