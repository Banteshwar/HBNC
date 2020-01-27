        <div class="content-wrapper">
            <div class="container-fluid">

                <!--Start Dashboard Content-->

                <!-- Breadcrumb-->
                <div class="row pt-2 pb-2">
                    <div class="col-sm-9">
                        <h4 class="page-title">Gallery Management</h4>

                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url() . 'admin/welcome'; ?>">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?php if(isset($page_title)){echo $page_title;}?></li>
                        </ol>
                    </div>

                </div>
 
            	<?php
                    if ($this->input->get('action') == 'edit') {
                        $required = '';
                        $action = base_url() . "admin/gallery/GalleryUpdate";
                    } else {
                        $required = 'required=""';
                        $action = base_url() . "admin/gallery/GalleryInsert";
                    }
                    $attr = array("id" => "myform");
                    echo form_open_multipart($action, $attr);
                    ?>
					
                   <?php $this->load->view('common/messages.php');  ?>
				   
                    <div class="row">
                        <div class="col-lg-10">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title"><?php echo $page_title;?></div>
                                    <hr>  
                                    <input type="hidden" name="id" value="<?php echo isset($row['id']) && $row['id'] != '' ? $row['id'] : ""; ?>">  
                                    <div class="row">
                                       
                                        <div class="col-lg-6">
										 <?php  $state_required = false; ?>
										 <?php $this->load->view('common/state_select_box.php');  ?>
                                        </div>
                                        <div class="col-lg-6">
                                          <?php  $district_required = false; ?>
										 <?php $this->load->view('common/district_select_box.php');  ?>
                                            
                                        </div>
                                    </div> 
                                                            
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="input-1">Title </label>
                                                <input name="title" type="text" class="form-control" id="title" placeholder="Enter Title" value=" <?php echo isset($row['title'])&&$row['title']!=''?$row['title']:"";?>" >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="input-1">Description </label>
                                                
                                                <textarea class="form-control col-md-12" id="editor1" name="description"><?php echo isset($row['description'])&&$row['description']!=''?$row['description']:"";?></textarea>
                  									
                                            </div>
                                        </div>
                                    </div>

                                       <div class="row">
			                            <div class="col-md-4 col-xs-12">
			                                <div class="form-group">
			                                    <label>Upload Photo</label>
			                                    <div class="form-group">
			                                        <input <?php echo $required; ?> id="<?php if(empty($row)){echo 'file-1';}?>" name="image" type="file" class="file" data-overwrite-initial="false" data-min-file-count="<?php if(empty($row)){echo '1';}?>">
			                                    </div>
			                                </div>
			                            </div>
			                            <div class="col-sm-4">
			                                <?php if (isset($row['image']) && $row['image'] != '') { ?><a href="<?php echo base_url('download/gallery/' . $row['image']); ?>" class="fancybox"><img src="<?php echo base_url('download/gallery/'.$row['image']); ?>" class="img-responsive" width="150"></a><?php } ?>
			                            </div>
			                        </div>

                                   
                                   
                                    <div class="row">
                                        
                                         <div class="col-lg-6">
                                             <div class="form-group" style="padding: 37px 0px 0px;">
                                                <input type="checkbox" id="" name="check" value="1" <?php echo isset($row['status'])&&$row['status']=='1'?"checked":"";?>> Active?
                                            </div>
                                        </div>

                                    </div>
                                <?php   if(has_admin_permission('STATE_APPROVE_PHOTO_GALLERY')) { ?>
                                   <div class="row">
                                        
                                         <div class="col-lg-6">
                                             <div class="form-group" style="padding: 37px 0px 0px;">
                                                <input type="checkbox" id="" name="approve" value="1" <?php echo isset($row['approve'])&&$row['approve']=='1'?"checked":"";?>> Approve?
                                            </div>
                                        </div>

                                    </div>
                                   
                                <?php }  if(has_admin_permission('PUBLISH_PHOTO_GALLERY')) {
                                ?>
                                     <div class="row">
                                        
                                         <div class="col-lg-6">
                                             <div class="form-group" style="padding: 37px 0px 0px;">
                                                <input type="checkbox" id="" name="publish" value="1" <?php echo isset($row['publish'])&&$row['publish']=='1'?"checked":"";?>> Publish?
                                            </div>
                                        </div>

                                    </div>
                                <?php } ?>
                                </div>
                                <input type="hidden" name="act" value=<?php echo $required; ?> />
                                <div class="card-body">
                                    <hr>    
                                    <div class="form-group">
                                        <button type="submit" name="submitphcform" id="submitphcform" class="btn btn-primary px-5" value="submitphc"><i class="icon-lock"></i> Submit</button>
                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--End Row-->
                </form>
                <!--End Dashboard Content-->

            </div>
            <!-- End container-fluid-->

        </div><!--End content-wrapper-->
       
       
    <!-- Get CHC DROPDOWN VALUE BAsed On District Ended -->

   <script type="text/javascript">

  $(function() {
             $("form").submit(function() {
                        $(this).submit(function() {
                            return false;
                        });
                        return true;
                    }); 
       });
</script>
     

