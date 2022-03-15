 <aside class="main-sidebar">
  <section class="sidebar mt-10">
    <ul class="sidebar-menu" data-widget="tree">
      <!-- admin sections -->
      <?php if(get_user_info() == TRUE){$uval = 'd-block';}else{$uval = 'd-none';} ?>
      <?php if (is_admin()): ?>
        <li class="<?php if(isset($page_title) && $page_title == "Dashboard"){echo "active";} ?>">
          <a href="<?php echo base_url('superadmin/dashboard') ?>">
            <i class="flaticon-dashboard-2"></i> <span><?php echo trans('dashboard') ?></span>
          </a>
        </li>

        <li class="<?php if(isset($page_title) && $page_title == "Settings"){echo "active";} ?>">
          <a href="<?php echo base_url('superadmin/settings') ?>">
            <i class="flaticon-settings"></i> <span><?php echo trans('settings') ?></span>
          </a>
        </li>

        <li class="<?php if(isset($page_title) && $page_title == "Appearance"){echo "active";} ?>">
          <a href="<?php echo base_url('superadmin/settings/appearance') ?>">
            <i class="flaticon-theme"></i> <span><?php echo trans('appearance') ?></span>
          </a>
        </li>

        <li class="<?php if(isset($page_title) && $page_title == "Language"){echo "active";} ?>">
          <a href="<?php echo base_url('superadmin/language') ?>">
            <i class="flaticon-settings-1"></i> <span><?php echo trans('language') ?></span>
          </a>
        </li>

        <li class="<?php if(isset($page_title) && $page_title == "Payment Settings"){echo "active";} ?> <?= $uval; ?>">
          <a href="<?php echo base_url('superadmin/payment/settings') ?>">
            <i class="flaticon-settings-2"></i> <span><?php echo trans('payment-settings') ?></span>
          </a>
        </li>

        <li class="<?php if(isset($page_title) && $page_title == "Package"){echo "active";} ?>">
          <a href="<?php echo base_url('superadmin/package') ?>">
            <i class="flaticon-rocket"></i> <span><?php echo trans('plans') ?></span>
          </a>
        </li>

        <li class="<?php if(isset($page_title) && $page_title == "Transactions"){echo "active";} ?>">
          <a href="<?php echo base_url('superadmin/payment/transactions') ?>">
            <i class="flaticon-money"></i> <span><?php echo trans('transactions') ?></span>
          </a>
        </li>

        <li class="<?php if(isset($page_title) && $page_title == "Department"){echo "active";} ?>">
          <a href="<?php echo base_url('superadmin/department') ?>">
            <i class="flaticon-maintenance"></i> <span><?php echo trans('departments') ?></span>
          </a>
        </li>

        <li class="<?php if(isset($page_title) && $page_title == "Users"){echo "active";} ?>">
          <a href="<?php echo base_url('superadmin/users') ?>">
            <i class="flaticon-group-1"></i> <span><?php echo trans('users') ?></span>
          </a>
        </li>

        <li class="treeview <?php if(isset($page_title) && $page_title == "Blog " || isset($page) && $page == "Blog"){echo "active";} ?>">
          <a href="#"><i class="flaticon-writing-1"></i>
            <span><?php echo trans('blog') ?></span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('superadmin/blog_category') ?>"><i class="fa fa-long-arrow-right"></i><?php echo trans('add-category') ?> </a></li>
            <li><a href="<?php echo base_url('superadmin/blog') ?>"><i class="fa fa-long-arrow-right"></i><?php echo trans('blog-posts') ?></a></li>
          </ul>
        </li> 

        <li class="<?php if(isset($page_title) && $page_title == "Service"){echo "active";} ?>">
          <a href="<?php echo base_url('superadmin/services') ?>">
            <i class="flaticon-checklist"></i> <span><?php echo trans('services') ?></span>
          </a>
        </li>


        <li class="<?php if(isset($page_title) && $page_title == "Pages"){echo "active";} ?>">
          <a href="<?php echo base_url('superadmin/pages') ?>">
            <i class="flaticon-google-docs"></i> <span><?php echo trans('pages') ?></span>
          </a>
        </li>

        <li class="<?php if(isset($page_title) && $page_title == "Faqs"){echo "active";} ?>">
          <a href="<?php echo base_url('superadmin/faq') ?>">
            <i class="flaticon-help"></i> <span><?php echo trans('faqs') ?></span>
          </a>
        </li>

        <li class="<?php if(isset($page_title) && $page_title == "Contact"){echo "active";} ?>">
          <a href="<?php echo base_url('superadmin/contact') ?>">
            <i class="flaticon-envelope"></i> <span><?php echo trans('contact') ?></span>
          </a>
        </li>

      <?php endif; ?>


      <!-- user sections -->
      <?php if (is_user()): ?>

        <li class="<?php if(isset($page_title) && $page_title == "User Dashboard"){echo "active";} ?>">
          <a href="<?php echo base_url('clinic-admin/dashboard/user') ?>">
            <i class="flaticon-dashboard"></i> <span><?php echo trans('dashboard') ?></span>
          </a>
        </li>

        <li class="<?php if(isset($page_title) && $page_title == "Subscription"){echo "active";} ?>">
          <a href="<?php echo base_url('clinic-admin/subscription') ?>">
            <i class="flaticon-wall-clock"></i> <span><?php echo trans('subscription') ?></span>
          </a>
        </li>

        <li class="<?php if(isset($page_title) && $page_title == "Payment list"){echo "active";} ?> <?= $uval; ?>">
          <a href="<?php echo base_url('admin/payment/lists') ?>">
            <i class="flaticon-money"></i> <span><?php echo trans('payments') ?></span>
          </a>
        </li>

        <!-- Check payment status -->
        <?php if (check_my_payment_status() == TRUE): ?>

          <li class="<?php if(isset($page_title) && $page_title == "Ratings"){echo "active";} ?>">
            <a class="ml--8" href="<?php echo base_url('clinic-admin/profile/qr_code') ?>">
              <i class="fa fa-qrcode mr-0"></i> <span><?php echo trans('qr-code') ?></span>
            </a>
          </li>

          <li class="<?php if(isset($page_title) && $page_title == "Ratings"){echo "active";} ?>">
            <a href="<?php echo base_url('clinic-admin/dashboard/rating') ?>">
              <i class="flaticon-star"></i> <span><?php echo trans('rating-reviews') ?></span>
            </a>
          </li>

          <?php if (check_feature_access('chambers') == TRUE): ?>
            <li class="<?php if(isset($page_title) && $page_title == "Chambers"){echo "active";} ?>">
              <a href="<?php echo base_url('clinic-admin/chamber') ?>">
                <i class="flaticon-maintenance"></i> <span><?php echo trans('chambers') ?></span>
              </a>
            </li>
          <?php endif ?>

          <li class="<?php if(isset($page_title) && $page_title == "Department"){echo "active";} ?>">
            <a href="<?php echo base_url('clinic-admin/department') ?>">
              <i class="flaticon-list-1"></i> <span><?php echo trans('departments') ?></span>
            </a>
          </li>

          <?php if (check_feature_access('online-consultation') == TRUE): ?>
          <li class="<?php if(isset($page_title) && $page_title == "Payment Settings"){echo "active";} ?> <?= $uval; ?>">
            <a href="<?php echo base_url('admin/payment/user') ?>">
              <i class="flaticon-money-1"></i> <span><?php echo trans('payment-settings') ?></span>
            </a>
          </li>

          <li class="<?php if(isset($page_title) && $page_title == "Consultation Settings"){echo "active";} ?>">
            <a href="<?php echo base_url('clinic-admin/live_consults/settings') ?>">
              <i class="flaticon-settings-1"></i> <span><?php echo trans('consultation-settings') ?></span>
            </a>
          </li>
          
          <li class="<?php if(isset($page_title) && $page_title == "Consultations"){echo "active";} ?>">
            <a href="<?php echo base_url('clinic-admin/live_consults') ?>">
             <i class="flaticon-chat"></i> <span> <?php echo trans('consultations') ?> </span>
            </a>
          </li>
          <?php endif ?>

          <?php if (check_feature_access('staffs') == TRUE): ?>
            <li class="<?php if(isset($page_title) && $page_title == "Staff"){echo "active";} ?>">
              <a href="<?php echo base_url('clinic-admin/staff') ?>">
                <i class="flaticon-teamwork"></i> <span><?php echo trans('staffs') ?></span>
              </a>
            </li>
          <?php endif ?>
            
            <?php //if (check_feature_access('doctors') == TRUE): ?>
            <li class="<?php if(isset($page_title) && $page_title == "Doctor"){echo "active";} ?>">
              <a href="<?php echo base_url('clinic-admin/doctor') ?>">
                <i class="flaticon-teamwork"></i> <span><?php echo trans('doctors') ?></span>
              </a>
            </li>
          <?php //endif ?>


          <?php include'left_sideber_settings.php'; ?>


          <?php if (check_feature_access('prescription') == TRUE): ?>
            <li class="treeview <?php if(isset($page_title) && $page_title == "Prescription"){echo "active";} ?>">
              <a href="#"><i class="flaticon-prescription-2"></i>
                <span><?php echo trans('prescription') ?></span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-right pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <?php if (check_feature_access('prescription') == TRUE): ?>
                  <li><a href="<?php echo base_url('clinic-admin/prescription') ?>"><i class="fa fa-plus-circle"></i><?php echo trans('create-new') ?> </a></li>
                <?php endif; ?>

                <li><a href="<?php echo base_url('clinic-admin/prescription/all_prescription') ?>"><i class="fa fa-file-text-o"></i><?php echo trans('prescriptions') ?></a></li>
              </ul>
            </li> 
          <?php endif; ?>

        <?php endif; ?>
        <!-- end check payment status -->

      <?php endif; ?>
      <!-- end user sections -->


        
      <?php if (is_staff()): ?>
        <?php if (check_my_payment_status() == TRUE): ?>
          <?php include'left_sideber_settings.php'; ?>
        <?php endif; ?>
      <?php endif; ?>


      <?php if (is_staff() || is_user()): ?>
        <?php if (check_my_payment_status() == TRUE): ?>
          
          <?php if (check_feature_access('patients') == TRUE): ?>
            <li class="<?php if(isset($page_title) && $page_title == "Patients"){echo "active";} ?>">
              <a href="<?php echo base_url('admin/patients') ?>">
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
                <li class="<?php if(isset($page_title) && $page_title == "Appointments"){echo "active";} ?>"><a href="<?php echo base_url('admin/appointment') ?>"><i class="fa fa-long-arrow-right"></i><?php echo trans('lists') ?></a></li>
                <li class="<?php if(isset($page_title) && $page_title == "Chair View"){echo "active";} ?>"><a href="<?php echo base_url('admin/appointment/chairView') ?>"><i class="fa fa-long-arrow-right"></i><?php echo trans('chair-view') ?></a></li>
                <li class="<?php if(isset($page_title) && $page_title == "Appointment Calendar"){echo "active";} ?>"><a href="<?php echo base_url('admin/appointment/calendar') ?>"><i class="fa fa-long-arrow-right"></i><?php echo trans('callendar-view') ?></a></li>
                <li class="<?php if(isset($page_title) && $page_title == "Appointment Schedule"){echo "active";} ?>"><a href="<?php echo base_url('admin/appointment/assign') ?>"><i class="fa fa-long-arrow-right"></i><?php echo trans('set-schedule') ?></a></li>
              </ul>
            </li> 
          <?php endif; ?>
 
          <li class="<?php if(isset($page_title) && $page_title == "Drugs"){echo "active";} ?>">
            <a href="<?php echo base_url('clinic-admin/drugs') ?>">
              <i class="flaticon-medicine"></i> <span><?php echo trans('drugs') ?></span>
            </a>
          </li>


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


    <!-- patient sections -->
    <?php if (is_patient()): ?>
      <li class="<?php if(isset($page_title) && $page_title == "Patient Dashboard"){echo "active";} ?>">
        <a href="<?php echo base_url('admin/dashboard/patient') ?>">
          <i class="flaticon-dashboard-2"></i> <span><?php echo trans('dashboard') ?></span>
        </a>
      </li>

      <li class="<?php if(isset($page_title) && $page_title == "Doctors"){echo "active";} ?>">
        <a href="<?php echo base_url('admin/patients/doctors') ?>"><i class="flaticon-user"></i> <?php echo trans('rating-reviews') ?></a>
      </li>

      <li class="<?php if(isset($page_title) && $page_title == "Appointments"){echo "active";} ?>">
        <a href="<?php echo base_url('admin/patients/appointments') ?>"><i class="flaticon-calendar"></i> <?php echo trans('appointments') ?></a>
      </li>
      
      <li class="<?php if(isset($page_title) && $page_title == "Prescription"){echo "active";} ?>">
        <a href="<?php echo base_url('admin/patients/prescriptions') ?>"><i class="flaticon-prescription-1"></i> <?php echo trans('prescriptions') ?></a>
      </li>
    <?php endif; ?>
    <!-- end patient sections -->
    

    <li class="<?php if(isset($page_title) && $page_title == "Change Password"){echo "active";} ?>">
      <a href="<?php echo base_url('change_password') ?>">
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