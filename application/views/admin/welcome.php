
<?php
$admin_detail = get_admin_detail($_SESSION['ADMIN']['admin_id']);
?>
<!-- Start wrapper-->
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumb-->
        <div class="row pt-2 pb-2">
            <div class="col-sm-9">
                <h4 class="page-title">Welcome 
                    <span style='color:#6021d3;'><?php print_r($admin_detail['username']); ?></span></h4>
            </div>

        </div>


        <div class="row">
            <div class="col-lg-4">
                <div class="card profile-card-2">
                     <div class="card-header">My Profile</div>
                    <div class="card-img-block">
                    </div>
                    <div class="card-body pt-5">
                        <img src="<?php echo base_url();?>assets/images/avatars/avatar-15.png" alt="profile-image" class="profile">
                        <h5 class="card-title"><?php echo $admin_detail['fname']; ?></h5>
                    </div>

                    <div class="card-body border-top border-light">
                        <div class="media align-items-center">
                          <table class="table table-bordered">
                                   
                                    <?php if ($admin_detail['role_name'] != '') { ?>
                                        <tr>    
                                            <td>Role:</td> <td><?php echo $admin_detail['role_name']; ?></td>
                                        </tr>
                                    <?php } ?>
                                    <tr>
                                        <td>Email:</td> <td><?php echo $admin_detail['email']; ?> </td>
                                    </tr>
                                    <tr>
                                        <td>Contact:</td> <td><?php echo $admin_detail['mobile']; ?></td>
                                    </tr>
                                    <?php if ($admin_detail['State_Name'] != '') { ?>
                                        <tr>
                                            <td>State:</td> <td><?php echo $admin_detail['State_Name']; ?> </td>
                                        </tr>   
                                    <?php } ?>	
                                    <?php if ($admin_detail['District_Name'] != '') { ?>
                                        <tr>
                                            <td>District:</td> <td><?php echo $admin_detail['District_Name']; ?> </td>
                                        <?php } ?>
                                    </tr>
                                </table>
                        </div>
                        <hr>
                        
                    </div>
                </div>

            </div>
            
        </div>


    </div>
    <!-- End container-fluid-->

</div><!--End content-wrapper-->
<!--Start Back To Top Button-->
