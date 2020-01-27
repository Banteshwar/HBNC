
                <!-- Slider 2 Area End Here -->
                <!-- Single service page Start Here -->
                <div class="blog-layout-standard padding-top-bottom30 padding-top-bottom60">
                    <div class="container">
					<h3>Events</h3>
                        <div class="row">
                            <!-- Main body Start Here -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="body-content">

                                    <?php foreach($rows as $rows) { ?>

                                    <div class="single-category-blog">
                                <div class="row">
                                    <?php if(isset($rows['image'])){ ?>
                                    <div class="col-lg-5 col-md-5 col-sm-12">
                                        <div class="relatedcase">
                                            <img src="<?php echo base_url().'download/event/'.$rows['image']; ?>" alt="case">
                                        </div>
                                    </div>
                                <?php } ?>
                                    <div class="col-lg-7 col-md-7 col-sm-12">
                                        <div class="blog-content">
                                            <div class="date"><?php echo $rows['event_date']; ?></div>
                                            <h3><?php echo $rows['title']; ?></h3>
                                           
                                            <p><?php echo $rows['description']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php } ?>
							
							
                            </div>
                            <!-- Main body End Here -->

                        </div>
                    </div>
                </div>
                </div>
                <!-- Single service page End Here -->


       
            <!-- Preloader Start Here -->
          
