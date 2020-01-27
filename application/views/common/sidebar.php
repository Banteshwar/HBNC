<?php //get_instance()->load->helper('define_helper'); ?>
<div id="wrapper">
<div id="sidebar-wrapper" class="bg-theme bg-theme8" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="<?php echo base_url();?>">
       <h5 class="logo-text">HBNC-HBYC</h5>
     </a>
   </div>
  <ul class="sidebar-menu do-nicescrol">
      <li class="sidebar-header">MAIN NAVIGATION</li>
      <li><a href="<?php echo base_url('admin/welcome'); ?>" class="waves-effect"><i class="zmdi zmdi-view-welcome"></i> <span>Welcome</span></a></li>
	 
 <?php if ( has_admin_permission('EDIT_NEW_BORN') ) { ?>
       <li><a href="<?php echo base_url('admin/newbornweek'); ?>" class="waves-effect"><i class="zmdi zmdi-map"></i> <span>New Born Week</span></a></li>
	   	<?php } ?>

      <li><a href="<?php echo base_url('admin/HBNCReport'); ?>" class="waves-effect"><i class="zmdi zmdi-map"></i> <span>HBNC Report</span> (Demo)</a></li>

      <li><a href="javaScript:void();" class="waves-effect"><i class="zmdi zmdi-map"></i> <span>HBYC</span> (Demo)<i class="fa fa-angle-left pull-right"></i></a>

        <ul class="sidebar-submenu">
          <li><a href="<?php echo base_url('admin/HBYCReport'); ?>" class="waves-effect"><i class="zmdi zmdi-map"></i> <span>HBYC Report</span></a></li>
          <li><a href="<?php echo base_url('admin/HBYCTraining'); ?>" class="waves-effect"><i class="zmdi zmdi-map"></i> <span>HBYC Training</span></a></li>
        </ul>
      </li>   
  <?php if (has_admin_permission('VIEW_PHOTO_GALLERY') || has_admin_permission('ADD_PHOTO_GALLERY') || has_admin_permission('EDIT_PHOTO_GALLERY')) { ?>

        <li><a href="javaScript:void();" class="waves-effect"><i class="zmdi zmdi-map"></i> <span>Gallery</span> <i class="fa fa-angle-left pull-right"></i></a>
      	 
       <ul class="sidebar-submenu">
          <?php if (has_admin_permission('VIEW_PHOTO_GALLERY')) { ?>
        <li><a href="<?php echo base_url('admin/gallery'); ?>"><i class="zmdi zmdi-long-arrow-right"></i> <span>View Gallery</span></a></li>
      <?php } ?>

       <?php if (has_admin_permission('ADD_PHOTO_GALLERY')) { ?>
        <li><a href="<?php echo base_url('admin/gallery/add_gallery'); ?>"><i class="zmdi zmdi-long-arrow-right"></i> <span>Add Image</span></a></li>
      <?php } ?>
      </ul>

      </li>
  <?php } ?>



<?php /*
  <?php if (has_admin_permission('VIEW_EVENTS') || has_admin_permission('ADD_EVENT') || has_admin_permission('EDIT_EVENTS')) { ?>

       <li><a href="javaScript:void();" class="waves-effect"><i class="zmdi zmdi-map"></i> <span>Event</span> <i class="fa fa-angle-left pull-right"></i></a>
      	 
       <ul class="sidebar-submenu">
        <?php if (has_admin_permission('VIEW_EVENTS')) { ?>
        <li><a href="<?php echo base_url('admin/event'); ?>"><i class="zmdi zmdi-long-arrow-right"></i> <span>View Event</span></a></li>
      <?php } ?>

      <?php if (has_admin_permission('ADD_EVENT')) { ?>
        <li><a href="<?php echo base_url('admin/event/add_event'); ?>"><i class="zmdi zmdi-long-arrow-right"></i> <span>Add Event</span></a></li>
      <?php } ?>
      </ul>

      </li>

    <?php } ?>
*/ ?>

      <?php if (has_admin_permission('VIEW_USER') || has_admin_permission('ADD_USER') || has_admin_permission('ADD_USER') ) { ?>
        <li><a href="javaScript:void();" class="waves-effect"><i class="zmdi zmdi-map"></i> <span>Users</span> <i class="fa fa-angle-left pull-right"></i></a>          
           <ul class="sidebar-submenu">

            <?php if (has_admin_permission('VIEW_USER')) { ?>
               <li><a href="<?php echo base_url('admin/user'); ?>"><i class="zmdi zmdi-long-arrow-right"></i> <span>View User</span></a></li>
           <?php } ?>

            <?php if (has_admin_permission('ADD_USER')) { ?>
          <li><a href="<?php echo base_url('admin/user/add_edit_user'); ?>">
            <i class="zmdi zmdi-long-arrow-right"></i> <span>Add User</span></a></li>
          <?php } ?>

          <?php if (has_admin_permission('VIEW_ROLES')) { ?>
          <li><a href="<?php echo base_url('admin/user/roles'); ?>"><i class="zmdi zmdi-long-arrow-right"></i> <span>Roles</span></a></li>
          <?php } ?>
        </ul>

        </li>
      <?php } ?>


      <?php if (has_admin_permission('VIEW_NEW_BORN_REPORT') ) { ?>

        <li><a href="javaScript:void();" class="waves-effect"><i class="zmdi zmdi-map"></i> <span>Report</span> <i class="fa fa-angle-left pull-right"></i></a>
         
       <ul class="sidebar-submenu">
          <?php if (has_admin_permission('VIEW_NEW_BORN_REPORT')) { ?>
        <li><a href="<?php echo base_url('admin/report/newbornweek'); ?>"><i class="zmdi zmdi-long-arrow-right"></i> <span>New Born Week</span></a></li>
      <?php } ?>
      </ul>

      </li>
  <?php } ?>

  </ul>
   
   </div>

   