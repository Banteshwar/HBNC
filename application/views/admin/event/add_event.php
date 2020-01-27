<div class="content-wrapper">
    <div class="container-fluid">

        <!--Start Dashboard Content-->

        <!-- Breadcrumb-->
        <div class="row pt-2 pb-2">
            <div class="col-sm-9">
                <h4 class="page-title">Event Management</h4>

                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url() . 'admin/welcome'; ?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add Event</li>
                </ol>
                <?php //if($success) { echo '<p style="color:green;">'.$success.'</p>'; }?>
            </div>

        </div>
        <!-- End Breadcrumb-->
       
        <?php
        if ($this->input->get('action') == 'edit') {
            $action = base_url() . "admin/event/EventUpdate";
        } else {
            $action = base_url() . "admin/event/EventInsert";
        }
        $attr = array("id" => "myform");
        echo form_open_multipart($action, $attr);
        ?>


        <?php $this->load->view('common/messages.php');  ?>

        <div class="row">
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">Add Event</div>
                        <hr>  
                        <input type="hidden" name="id" value="<?php echo isset($row['id']) && $row['id'] != '' ? $row['id'] : ""; ?>">  
                       <div class="row">
                           
                            <div class="col-lg-6">
                             <?php  $state_required = true; ?>
                             <?php $this->load->view('common/state_select_box.php');  ?>
                            </div>
                            <div class="col-lg-6">
                              <?php  $district_required = true; ?>
                             <?php $this->load->view('common/district_select_box.php');  ?>
                                
                            </div>
                        </div>   

                       
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="input-1">Title </label>
                                    <input name="title" type="text" class="form-control" id="title" placeholder="Enter Title" value="<?php echo isset($row['title']) && $row['title'] != '' ? $row['title'] : ""; ?>" >
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="input-1">Date </label>
                                    <input name="event_date" type="date" class="form-control" id="event_date" placeholder="Enter Title" value="<?php echo isset($row['event_date']) && $row['event_date'] != '' ? $row['event_date'] : ""; ?>" >

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="input-1">Description </label>

                                    <textarea class="form-control col-md-12" id="editor1" name="description"><?php echo isset($row['description']) && $row['description'] != '' ? $row['description'] : ""; ?></textarea>

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 col-xs-12">
                                <div class="form-group">
                                    <label>Upload Photo</label>
                                    <div class="form-group">
                                        <input id="<?php
                                        if (empty($row)) {
                                            echo 'file-1';
                                        }
                                        ?>" name="image" type="file" class="file" data-overwrite-initial="false" data-min-file-count="<?php
                                               if (empty($row)) {
                                                   echo '1';
                                               }
                                               ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
<?php if (isset($row['image']) && $row['image'] != '') { ?><a href="<?php echo base_url('download/event/' . $row['image']); ?>" class="fancybox"><img src="<?php echo base_url('download/event/' . $row['image']); ?>" class="img-responsive" width="150"></a><?php } ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="input-1">Caption </label>
                                    <input name="caption" type="text" class="form-control" id="title" placeholder="Enter Title" value="<?php echo isset($row['caption']) && $row['caption'] != '' ? $row['caption'] : ""; ?>" >
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-lg-6">
                                <div class="form-group" style="padding: 37px 0px 0px;">
                                    <input type="checkbox" id="" name="check" value="1" <?php echo isset($row['status']) && $row['status'] == '1' ? "checked" : ""; ?>> Active?
                                </div>
                            </div>

                        </div>
                         <?php   if(has_admin_permission('STATE_APPROVE_EVENT')) { ?>
                                   <div class="row">
                                        
                                         <div class="col-lg-6">
                                             <div class="form-group" style="padding: 37px 0px 0px;">
                                                <input type="checkbox" id="" name="approve" value="1" <?php echo isset($row['approve'])&&$row['approve']=='1'?"checked":"";?>> Approve?
                                            </div>
                                        </div>

                                    </div>
                                   
                                <?php }  if(has_admin_permission('PUBLISH_EVENT')) {
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

                    <div class="card-body">
                        <hr>    
                        <div class="form-group">
                            <button type="submit" name="submitphcform" class="btn btn-primary px-5" value="submitphc"><i class="icon-lock"></i> Submit</button>

                            <span id="error_message" class="text-danger"></span>  
                            <span id="success_message" class="text-success"></span>                    
                        </div>
                    </div>
                </div>
            </div>
        </div><!--End Row-->
        </form>
        <!--End Dashboard Content-->

    </div>
    <!-- End container-fluid-->



<!-- Get CHC DROPDOWN VALUE BAsed On District Ended -->

<?php $this->load->view('common/footer'); ?>
<script type="text/javascript">
    $(document).ready(function () {
        $('select[name="statename"]').on('change', function () {
            var stateID = $(this).val();

            var url1 = '<?php echo base_url(); ?>';
            if (stateID) {
                $.ajax({
                    url: url1 + 'image/phcform_Ajax/' + stateID,
                    type: "GET",
                    dataType: "json",
                    success: function (data) {
                        $('select[name="districtname"]').empty();
                        $('select[name="districtname"]').append('<option value="">--Select District--</option>');
                        $.each(data, function (key, value) {
                            $('select[name="districtname"]').append('<option value="' + value.District_ID + '">' + value.District_Name + '</option>');
                        });
                    }
                });
            }
            else
            {
                $('select[name="districtname"]').empty();
            }
        });

           $('select[name="districtname"]').on('change', function () {
            
            var DID = $(this).val();

            var url1 = '<?php echo base_url(); ?>';
            //alert(url1);
            if (DID) {
                $.ajax({
                    url: url1 + 'image/getBlock/' +DID,
                    type: "POST",
                    dataType: "json",
                    success: function (data) {
                        $('select[name="blockname"]').empty();
                        $('select[name="blockname"]').append('<option value="">--Select Block--</option>');
                        $.each(data, function (key, value) {
                            $('select[name="blockname"]').append('<option value="' + value.Block_ID + '">' + value.Block_Name + '</option>');
                        });
                    }
                });
            }
            else
            {
                $('select[name="blockname"]').empty();
            }
        });
        $(document).ready(function () {
             $("form").submit(function() {
                        $(this).submit(function() {
                            return false;
                        });
                        return true;
                    }); 
        });
    });
</script>
</body>
</html>
