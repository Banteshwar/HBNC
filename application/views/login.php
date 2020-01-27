<div class="wraper">
    <div class="loader-wrapper"><div class="lds-ring"><div></div><div></div><div></div><div></div></div></div>
    <div class="card card-authentication1 mx-auto my-5">
        <div class="card-body">
            <div class="card-content p-2">
                <div class="text-center">
                    <img src="<?= base_url('assets/img/ministry_logo.png'); ?>" alt="logo icon">
                </div>
                <div class="card-title text-uppercase text-center py-3">Login Page</div>
                <?php
                $action = base_url() . "login/getlogin";
                echo form_open($action);
                ?>
                <?php
                if ($this->session->flashdata('message') != '') {
                    $message = $this->session->flashdata('message');
                    if ($message != '') {
                        echo '<div class="alert alert-danger"><button type="button" class="btn btn-danger" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Oh snap!</strong> ' . $message . '.</div>';
                    }
                    $this->session->unset_userdata('message');
                }
                ?>
                <div class="form-group">
                    <label for="exampleInputUsername" class="sr-only">Username</label>
                    <div class="position-relative has-icon-right">
                        <input type="text" id="exampleInputUsername" name="username"  class="form-control input-shadow" placeholder="Enter Username" required autofocus>
                        <div class="form-control-position">
                            <i class="icon-user"></i>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword" class="sr-only">Password</label>
                    <div class="position-relative has-icon-right">
                        <input type="password" id="exampleInputPassword" class="form-control input-shadow" placeholder="Enter Password" required name="password">
                        <div class="form-control-position">
                            <i class="icon-lock"></i>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-6">
                        <div class="icheck-material-primary">
                            <input type="checkbox" id="user-checkbox" checked="">
                            <label for="user-checkbox">Remember me</label>
                        </div>
                    </div>

                </div>

                <input type="submit" class="btn btn-danger" value="Log In">
                <?php echo form_close(); ?>
            </div>
        </div>
        <div class="card-footer text-center py-3">
            <p class="text-dark mb-0">Go to <a href="<?= base_url(''); ?>"> Home</a></p>
        </div>
    </div>

    <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>


    <!--  model end --- >

    