 <aside class="main-sidebar">
  <section class="sidebar mt-10">
    <ul class="sidebar-menu" data-widget="tree">
      
        <li class="<?php if(isset($page_title) && $page_title == "User Dashboard"){echo "active";} ?>">
          <a href="<?php echo base_url('doctor/dashboard/user') ?>">
            <i class="flaticon-dashboard"></i> <span><?php echo trans('dashboard') ?></span>
          </a>
        </li>

      <?php if (is_doctor()): ?>
        <?php if (check_my_payment_status() == TRUE): ?>
          
          <?php if (check_feature_access('patients') == TRUE): ?>
            <li class="<?php if(isset($page_title) && $page_title == "Patients"){echo "active";} ?>">
              <a href="<?php echo base_url('doctor/patients') ?>">
                <i class="flaticon-medical"></i> <span><?php echo trans('patients') ?></span>
              </a>
            </li>
          <?php endif; ?>


          <?php if (check_feature_access('appointments') == TRUE): ?>
            <li class="treeview <?php if(isset($page) && $page == "Appointment"){echo "active";} ?>">
              <a href="#"><i class="flaticon-appointment"></i>
                <span><?php echo trans('appointments') ?></span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-right pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li class="<?php if(isset($page_title) && $page_title == "Appointments"){echo "active";} ?>"><a href="<?php echo base_url('doctor/appointment/list') ?>"><i class="fa fa-long-arrow-right"></i><?php echo trans('lists') ?></a></li>
                <li class="<?php if(isset($page_title) && $page_title == "Chair View"){echo "active";} ?>"><a href="<?php echo base_url('doctor/appointment/chairView') ?>"><i class="fa fa-long-arrow-right"></i><?php echo trans('chair-view') ?></a></li>
                <li class="<?php if(isset($page_title) && $page_title == "Appointment Calendar"){echo "active";} ?>"><a href="<?php echo base_url('doctor/appointment/calendar') ?>"><i class="fa fa-long-arrow-right"></i><?php echo trans('callendar-view') ?></a></li>
                <li class="<?php if(isset($page_title) && $page_title == "Appointment Schedule"){echo "active";} ?>"><a href="<?php echo base_url('doctor/appointment/assign') ?>"><i class="fa fa-long-arrow-right"></i><?php echo trans('set-schedule') ?></a></li> 
              </ul>
            </li> 
          <?php endif; ?>
            
            <?php if (check_feature_access('online-consultation') == TRUE): ?>
           

          <li class="<?php if(isset($page_title) && $page_title == "Consultation Settings"){echo "active";} ?>">
            <a href="<?php echo base_url('doctor/live_consults/settings') ?>">
              <i class="flaticon-settings-1"></i> <span><?php echo trans('consultation-settings') ?></span>
            </a>
          </li>
          
          <li class="<?php if(isset($page_title) && $page_title == "Consultations"){echo "active";} ?>">
            <a href="<?php echo base_url('doctor/live_consults') ?>">
             <i class="flaticon-chat"></i> <span> <?php echo trans('consultations') ?> </span>
            </a>
          </li>
          <?php endif ?>

  
          <?php if (check_feature_access('profile-page') == TRUE): ?>
            <li class="treeview <?php if(isset($page_title) && $page_title == "Profile" || isset($page_title) && $page_title == "Educations" || isset($page_title) && $page_title == "Experience"){echo "active";} ?>">
              <a href="#"><i class="flaticon-theme"></i>
                <span><?php echo trans('profile') ?></span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-right pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url('clinic-admin/profile') ?>"><i class="fa fa-user-o"></i> <?php echo trans('personal-info') ?> </a></li>
                <li><a href="<?php echo base_url('clinic-admin/educations') ?>"><i class="fa fa-graduation-cap"></i><?php echo trans('manage-education') ?></a></li>
                <li><a href="<?php echo base_url('clinic-admin/experiences') ?>"><i class="fa fa-lightbulb-o"></i><?php echo trans('manage-experiences') ?></a></li>
              </ul>
            </li> 
          <?php endif; ?>

        <?php endif ?>
      <?php endif ?>

    <li class="<?php if(isset($page_title) && $page_title == "Change Password"){echo "active";} ?>">
      <a href="<?php echo base_url('doctor/doctor/change_password') ?>">
        <i class="flaticon-unlock"></i> <span><?php echo trans('change-password') ?></span>
      </a>
    </li>

    <li class="">
      <a href="<?php echo base_url('auth/logout') ?>">
        <i class="flaticon-logout"></i> <span><?php echo trans('logout') ?></span>
      </a>
    </li>

  </ul>
</section>
</aside>