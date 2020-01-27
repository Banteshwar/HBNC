
    <!-- Start wrapper-->
     <div class="content-wrapper">
            <div class="container-fluid">

                <?php //echo "<pre>"; print_r($_SESSION); die; ?>

                <!--Start Dashboard Content-->
                <!-- Breadcrumb-->
                <div class="row pt-2 pb-2">
                    <div class="col-sm-9">
                        <h4 class="page-title">User Management</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('admin/welcome'); ?>">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">View User</li>
                        </ol>
                    </div>

                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header"><i class="fa fa-table"></i> User List</div>
                            
                          <div class="card-body">
                            	<form method='GET' action="<?php echo base_url('admin/user'); ?>">
                            	<div class="row">
									 <div class="col-md-3">
										<?php $state_required = true; ?>
										<?php $this->load->view('common/state_select_box.php'); ?>
								   </div>
								 <div class="col-md-3">
									 <?php $district_required = true; ?>
                                     <?php $this->load->view('common/district_select_box.php'); ?>
								   </div>
								  <?php /*
								    <div class="col-md-3">
									  <div class="form-group">
									 <label>Username</label>
									   <input type="text" class="form-control no-error" name="searchtxt" placeholder="Type here for search" 
								value="<?php if(isset($searchtxt)){print($searchtxt);}; ?>" />
									 
									 </div>
								   </div>
								<?php */ ?>
								
								    <div class="col-md-3">
						           <div class="form-group" style="margin-top: 30px;">
						            <button type="submit" class="btn btn-primary px-5"><i aria-hidden="true" class="fa fa-search"></i>Search</button>
						          </div>
						          </div>
          
            					</div>
            				</form>

                                <div class="table-responsive">
                                    <table id="default-datatable" class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>UserName</th>
                                                <th>Full Name</th>
                                                <th>Role</th>
                                                <th>Mobile</th>
                                                <th>Email</th>
                                                <th>State</th>
                                                <th>District</th>
                                                <th>Status</th> 
												<th>Action</th>												
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php $i = 1;

                                           
                                            foreach ($user_list as $ulist) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $i; ?>.</td>
                                                     <td><?php echo $ulist['username']; ?></td>
                                                    <td><?php echo $ulist['fname']; ?></td>
                                                    <td><?php echo $ulist['role_name']; ?></td>
                                                    <td><?php echo $ulist['mobile']; ?></td>
                                                    <td><?php echo $ulist['email']; ?></td>            
                                                    <td><?php echo $ulist['State_Name']; ?></td>
                                                    <td><?php echo $ulist['District_Name']; ?></td>
                                                    <?php
                                                    if ($ulist['status'] == 1) {
                                                        $status_value ='<span class="label text-success">Active</span>';
                                                    } else 
                                                    {
                                                        $status_value = '<span class="label text-danger" >In-Active</ span>';
                                                    }
                                                    ?>
                                                    <td><?php echo $status_value; ?></td>
													<td>
                                                        <button type="button" class="btn btn-primary btn-sm waves-effect waves-light m-1 viewUser" data-toggle="modal" data-target="#largesizemodal" value="<?php echo $ulist['admin_id']; ?>">View</button>
														<?php if(has_admin_permission_layout('EDIT_USER')) { ?>
                                                        <a class="btn btn-warning btn-sm waves-effect waves-light m-1 edituser" data-toggle="modal" data-target="#largesizemodal" value="<?php echo $ulist['admin_id']; ?>" 
														href="<?php echo base_url() . 'admin/user/add_edit_user/'. $ulist['admin_id'] ;?>"
														>Edit</a>
														<?php } ?>
                                                      
                                                    </td>                                              
                                                   
                                                   
                                                </tr>
												<?php $i++;
												}
											?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Row-->
            </div>
            </div>
            <!-- End container-fluid-->


        <!-- Modal -->
        <div class="modal fade" id="largesizemodal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">User Detail</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" id='model_data_ajax'></div>
				</div>
			</div>
		</div>
        <!-- Modal -->




<script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript">

    $(document).ready(function () {

  
        //$(".getUserId").click(function () {

		 $('body').on('click', '.viewUser',function(e){
		    e.preventDefault();
			console.log('user view');
            var uId = $(this).val();
            var url = "<?php echo base_url() . 'admin/user/getUserDetail/' ?>"+uId;
            $.ajax({
                type: "POST",
                url: url,
                data: {'layout_type':'popup'},
                success: function (data) {
                    $("#model_data_ajax").html(data);
                },
                 beforeSend: function () {
                    $("#model_data_ajax").html('Please wait...');
                 },
                failure: function (data) {
                    alert('Failure!');
                }
            });

        });

       $('body').on('click', '.edituser',function(e){
			e.preventDefault();
            var uId = $(this).attr('value');
            url = "<?php echo base_url() . 'admin/user/add_edit_user/' ?>"+uId;
            $.ajax({
                type: "GET",
                url: url,
                data: {'layout_type':'popup'},
                success: function (data) {
                    $("#model_data_ajax").html(data);
                },
                 beforeSend: function () {
                    $("#model_data_ajax").html('Please wait...');
                 },
                failure: function (data) {
                    alert('Failure!');
                }
            });

        });
      
    });
	
	$('body').on('submit', '#add_edit_user_form',function(e){
		    e.preventDefault();
				console.log( 'xyz' );
            var form = $('#add_edit_user_form');
		    var url = form.attr('action')+ '?layout_type=popup';
			console.log( url );
            $.ajax({
                type: "POST",
                url: url,
                data: form.serialize() ,
                success: function (data) {
                    $("#model_data_ajax").html(data);
                },
                 beforeSend: function () {
                    $("#model_data_ajax").html('Please wait...');
                 },
                failure: function (data) {
                    alert('Failure!');
                }
            });

        });
	//}
	
    /* Get District List Based On State ID code ended */

    </script>


 