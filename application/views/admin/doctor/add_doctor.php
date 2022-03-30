<div class="content-wrapper">

  <!-- Main content -->
  <section class="content container">

    <div class="col-md-12">

      <div class="box add_area d-block">

        <div class="box-header with-border">
          <?php if (isset($page_title) && $page_title == "Edit"): ?>
            <h3 class="box-title"><?php echo trans('edit') ?></h3>
            <?php else: ?>
              <h3 class="box-title"><?php echo ('Add New Doctor') ?> </h3>
            <?php endif; ?>

            <div class="box-tools pull-right">
              <?php if (isset($page_title) && $page_title == "Edit"): ?>
                <a href="<?php echo base_url('admin/doctor') ?>" class="pull-right btn btn-light-primary mt-15 btn-sm"><i class="fa fa-angle-left"></i> <?php echo trans('back') ?></a>
                <?php else: ?>
                  <a href="<?php echo base_url('clinic-admin/doctor') ?>" class="text-right btn btn-light-secondary mt-10"><i class="fa fa-users"></i> <?php echo ('All Doctors') ?></a>
                <?php endif; ?>
              </div>
            </div>

            <div class="box-body">
              <form id="cat-form" method="post" enctype="multipart/form-data" class="check_email_validate validate-form" action="<?php echo base_url('clinic-admin/doctor/add')?>" role="form" novalidate>
                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">

                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group" style="margin-top: 20%;">
                      <div class="avatar-upload text-center">
                        <div class="avatar-edit">
                          <input type='file' name="photo" id="imageUpload" accept=".png, .jpg, .jpeg" />
                          <label for="imageUpload"></label>
                        </div>
                        <div class="avatar-preview">
                          <div id="imagePreview" style="background-image: url(<?php echo base_url($staff[0]['thumb']); ?>);">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-9">
                    <div class="row">
                      <div class="col-md-4">  
                        <div class="form-group">
                          <label><?php echo trans('name') ?> <span class="text-danger">*</span></label>
                          <input type="text" class="form-control" required name="name" id="name" value="<?php echo html_escape($staff[0]['name']); ?>" >
                          <span class="text-danger" id="name_error_message"></span>
                        </div>
                      </div>
                      <div class="col-md-4">  
                        <div class="form-group">
                          <label><?php echo trans('gender') ?> </label>
                          <select class="form-control"  name="gender" id="gender" value="<?php echo html_escape($staff[0]['gender']); ?>">
                            <option>Select</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-4">  
                        <div class="form-group">
                          <label><?php echo ('Date of Birth') ?> </label>
                          <input type="date" class="form-control"  name="dob" id="dob" value="<?php echo html_escape($staff[0]['gender']); ?>" >
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label><?php echo trans('age') ?> </label>
                          <input type="number" class="form-control" name="age" id="age" value="<?php echo html_escape($staff[0]['age']); ?>" >
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <label><?php echo ('Marital Status'); ?> </label>
                          <select class="form-control"  name="marital_status" id="marital_status" value="<?php echo html_escape($staff[0]['marital-status']); ?>" >
                            <option>Select</option>
                            <option value="">Select</option>
                            <option value="Single">Single</option>
                            <option value="Married">Married</option>
                            <option value="Widowed">Widowed</option>
                            <option value="Separated">Separated</option>
                            <option value="Not Specified">Not Specified</option>
                          </select>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <label><?php echo ('Blood Group') ?> </label>
                          <select class="form-control" name="blood_group" id="blood_group" value="<?php echo html_escape($staff[0]['blood-group']); ?>">
                            <option value="">Select</option>
                            <option value="O+">O+</option>           
                            <option value="A+">A+</option>           
                            <option value="B+">B+</option>           
                            <option value="AB+">AB+</option>           
                            <option value="O-">O-</option>           
                            <option value="A-">A-</option>           
                            <option value="B-">B-</option>           
                            <option value="AB-">AB-</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>





                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label><?php echo ('Qualification') ?> </label>
                      <input type="text" class="form-control" name="qualification" id="qualification" value="<?php echo html_escape($staff[0]['qualification']); ?>" >

                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label><?php echo ('Speciality') ?> </label>
                      <select class="form-control" name="speciality" id="speciality" value="<?php echo html_escape($staff[0]['speciality']); ?>">
                        <option>Select Speciality</option>
                        <?php  
                        foreach ($chamber_category as $key => $value) {
                          echo "<option value='".$value->user_id."'>".$value->name."</option>";
                        }
                        ?>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label><?php echo ('Phone 1') ?> <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" required name="phone1" id="phone" value="<?php echo html_escape($staff[0]['phone1']); ?>" maxlength="10" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" />
                      <span class="text-danger" id="number_error_message"></span>  
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-group">
                      <label><?php echo ('Phone 2'); ?> </label>
                      <input type="text" class="form-control" name="phone2" id="phone2" value="<?php echo html_escape($staff[0]['phone2']); ?>" >
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-group">
                      <label><?php echo ('Phone 3') ?> </label>
                      <input type="text" class="form-control" name="phone3" id="phone3" value="<?php echo html_escape($staff[0]['phone3']); ?>" >
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-group">
                      <label><?php echo ('Phone 4') ?> </label>
                      <input type="text" class="form-control" name="phone4" id="phone4" value="<?php echo html_escape($staff[0]['phone4']); ?>" >
                    </div>
                  </div>
                </div>


                <div class="row">

                  <div class="col-md-8">
                    <h3 class="border-bottom">Address Information</h3>
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label><?php echo ('Address (R)') ?></label>
                          <input type="text" name="address_r" id="address_r" class="form-control">
                        </div>
                      </div>

                      <div class="col-md-2">
                        <div class="form-group">
                          <label><?php echo ('City') ?> </label>
                          <input type="text" name="city_r" id="city_r"  class="form-control">
                        </div>
                      </div>

                      <div class="col-md-2">
                        <div class="form-group">
                          <label><?php echo ('Zip') ?> </label>
                          <input type="number" name="zip_r" id="zip_r"  class="form-control">
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="form-group">
                          <label><?php echo ('Country') ?> </label>
                          <input type="text" name="country_r" id="country_r"  class="form-control">
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <h3 class="border-bottom">Address Information</h3>
                    <div class="row">
                      <div class="col-md-12">
                        <label><?php echo ('Email'); ?> <span class="text-danger">*</span></label>
                        <input type="text" name="email" id="email" required onkeyup="checkEmailExist(this.value)"  class="form-control">
                        <span class="text-danger my-5" id="email_exist_error_message"></span>
                      </div>

                    </div>
                  </div>

                </div>

                <div class="row">

                  <div class="col-md-8">
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label><?php echo ('Address (0)') ?></label>
                          <input type="text" name="address_o" id="address_o" class="form-control">
                        </div>
                      </div>

                      <div class="col-md-2">
                        <div class="form-group">
                          <label><?php echo ('City') ?></label>
                          <input type="text" name="city_o" id="city_o" class="form-control">
                        </div>
                      </div>

                      <div class="col-md-2">
                        <div class="form-group">
                          <label><?php echo ('Zip') ?></label>
                          <input type="number" name="zip_o" id="zip_o" class="form-control">
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="form-group">
                          <label><?php echo ('Country') ?></label>
                          <input type="text" name="country_o" id="country_o" class="form-control">
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="row">
                      <div class="col-md-12">
                        <label><?php echo ('Email 2') ?></label>
                        <input type="text" name="email2" id="email2" class="form-control">
                      </div>

                    </div>
                  </div>

                </div>


                <div class="row">

                  <div class="col-md-8">
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label><?php echo ('Address (Other if living away from City)') ?></label>
                          <input type="text" name="address_other" id="address_other" class="form-control">
                        </div>
                      </div>

                      <div class="col-md-2">
                        <div class="form-group">
                          <label><?php echo ('City') ?></label>
                          <input type="text" name="city_other" id="city_other" class="form-control">
                        </div>
                      </div>

                      <div class="col-md-2">
                        <div class="form-group">
                          <label><?php echo ('Zip') ?></label>
                          <input type="number" name="zip_other" id="zip_other" class="form-control">
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="form-group">
                          <label><?php echo ('Country') ?></label>
                          <input type="text" name="country_other" id="country_other" class="form-control">
                        </div>
                      </div>
                    </div>
                  </div>

                </div>


                <div class="row">

                  <div class="col-md-12">
                    <h3 class="border-bottom">Vaccination Information</h3>
                    <div id="vaccination-container">
                      <div class="row">
                        <div class="col-md-2">
                          <div class="form-group">
                            <label><?php echo ('Vaccination Type') ?> </label>
                            <input type="text" name="vaccination_type[]" id="vaccination_type"  class="form-control">
                          </div>
                        </div>

                        <div class="col-md-2">
                          <div class="form-group">
                            <label><?php echo ('Vaccination Date') ?> </label>
                            <input type="date" name="vaccination_date[]" id="vaccination_date"  class="form-control">
                          </div>
                        </div>

                        <div class="col-md-3">
                          <div class="form-group">
                            <label><?php echo ('Reminder Date for Next') ?> </label>
                            <input type="date" name="reminder_date_for_next[]" id="reminder_date_for_next"  class="form-control">
                          </div>
                        </div>

                        <div class="col-md-2">
                          <div class="form-group">
                            <label><?php echo ('Remarks') ?></label>
                            <input type="text" name="vaccination_remarks[]" id="vaccination_remarks" class="form-control">
                          </div>
                        </div>

                        <div class="col-md-2">
                          <div class="form-group">
                            <label><?php echo ('Medical History') ?></label>
                            <input type="text" name="medical_history[]" id="medical_history" class="form-control">
                          </div>
                        </div>
                      </div>
                    </div>
                    <a href="#" class="btn btn-primary add-more-vaccination" style="position: relative;right: -90%;">+ Add More</a>
                  </div>
                </div>


                <div class="row">

                  <div class="col-md-12">
                    <h3 class="border-bottom">Others Information</h3>
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label><?php echo ('PAN Number') ?> </label>
                          <input type="text" name="pan_number" id="pan_number"  class="form-control">
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="form-group">
                          <label><?php echo ('GST Number') ?></label>
                          <input type="text" name="gst_number" id="gst_number" class="form-control">
                        </div>
                      </div>

                    </div>
                  </div>
                </div>



                <div class="row">

                  <div class="col-md-12">
                    <h3 class="border-bottom">Bank Information</h3>
                    <div id="bank-container">
                      <div class="row">
                        <div class="col-md-2">
                          <div class="form-group">
                            <label><?php echo ('Bank Name') ?> </label>
                            <input type="text" name="bank_name[]"  class="form-control">
                          </div>
                        </div>

                        <div class="col-md-3">
                          <div class="form-group">
                            <label><?php echo ('Bank Account Number') ?> </label>
                            <input type="number" name="bank_account_number[]"  class="form-control">
                          </div>
                        </div>

                        <div class="col-md-3">
                          <div class="form-group">
                            <label><?php echo ('IFSC Code') ?> </label>
                            <input type="text" name="ifsc_code[]"  class="form-control">
                          </div>
                        </div>

                        <div class="col-md-2">
                          <div class="form-group">
                            <label><?php echo ('Remarks') ?></label>
                            <input type="text" name="bank_remarks[]" class="form-control">
                          </div>
                        </div> 
                      </div>
                    </div>
                    <a href="#" class="btn btn-primary add-more-bank" style="position: relative;right: -90%;">+ Add More</a>
                  </div>
                </div>


                <div class="row">

                  <div class="col-md-12">
                    <h3 class="border-bottom">Insurance Information</h3>
                    <div id="insurance-container">
                      <div class="row">
                        <div class="col-md-2">
                          <div class="form-group">
                            <label><?php echo ('Insurance') ?> </label>
                            <input type="text" name="insurance[]"  class="form-control">
                          </div>
                        </div>

                        <div class="col-md-2">
                          <div class="form-group">
                            <label><?php echo ('Insurance Date') ?> </label>
                            <input type="date" name="insurance_date[]"  class="form-control">
                          </div>
                        </div>

                        <div class="col-md-2">
                          <div class="form-group">
                            <label><?php echo ('Renewal Date') ?> </label>
                            <input type="date" name="renewal_date[]"  class="form-control">
                          </div>
                        </div>

                        <div class="col-md-2">
                          <div class="form-group">
                            <label><?php echo ('Amount Insured') ?> </label>
                            <input type="number" name="amount_insured[]"  class="form-control">
                          </div>
                        </div> 
                        <div class="col-md-2">
                          <div class="form-group">
                            <label><?php echo ('Amount Paid') ?> </label>
                            <input type="number" name="amount_paid[]"  class="form-control">
                          </div>
                        </div> 

                        <div class="col-md-2">
                          <div class="form-group">
                            <label><?php echo ('Allow Notifications') ?></label>
                            <br>
                            <input id="notifications" type="checkbox" value="1" name="allow_notifications[]" class="">
                            <label for="notifications"><?php echo ('Yes') ?></label>
                          </div>
                        </div> 

                        <div class="col-md-4">
                          <div class="form-group">
                            <label><?php echo ('Remarks') ?></label>
                            <input id="notifications" type="text" name="insurance_remarks[]" class="form-control">
                          </div>
                        </div> 
                      </div>
                    </div>
                    <a href="#" class="btn btn-primary add-more-insurance" style="position: relative;right: -90%;">+ Add More</a>
                  </div>
                </div>

                <center>
                  <div class="mx-auto w-100">
                    <input type="submit" class="btn btn-primary btn-lg mr-5 ml-5" name="save" value="Save">
                    <a href="#" class="btn btn-danger btn-lg mr-5 ml-5">Cancel</a>
                  </div>
                </center>

                <!-- End -->

              </form>

            </div>

          </div>

        </div>
      </section>
    </div>
