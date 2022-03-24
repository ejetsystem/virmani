<div class="content-wrapper">

  <!-- Main content -->
  <section class="content container">

    <div class="col-md-12">

      <div class="box add_area <?php if(isset($page_title) && $page_title == "Edit"){echo "d-block";}else{echo "hide";} ?>">

        <div class="box-header with-border">
          <?php if (isset($page_title) && $page_title == "Edit"): ?>
            <h3 class="box-title"><?php echo trans('edit') ?></h3>
            <?php else: ?>
              <h3 class="box-title"><?php echo ('Add New Doctor') ?> </h3>
            <?php endif; ?>

            <div class="box-tools pull-right">
              <?php if (isset($page_title) && $page_title == "Edit"): ?>
                <a href="<?php echo base_url('clinic-admin/doctor') ?>" class="pull-right btn btn-light-primary mt-15 btn-sm"><i class="fa fa-angle-left"></i> <?php echo trans('back') ?></a>
                <?php else: ?>
                  <a href="#" class="text-right btn btn-light-secondary cancel_btn"><i class="fa fa-users"></i> <?php echo ('All Doctors') ?></a>
                <?php endif; ?>
              </div>
            </div>

            <div class="box-body">
              <form id="cat-form" method="post" enctype="multipart/form-data" class="validate-form" action="<?php echo base_url('clinic-admin/doctor/update')?>" role="form" novalidate>
                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">

                <input type="hidden" name="id" value="<?php echo $doctors->id;?>">

                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group" style="margin-top: 20%;">
                      <div class="avatar-upload text-center">
                        <div class="avatar-edit">
                          <input type='file' name="photo" id="imageUpload" accept=".png, .jpg, .jpeg" />
                          <label for="imageUpload"></label>
                        </div>
                        <div class="avatar-preview">
                          <div id="imagePreview" style="background-image: url(<?php echo base_url($doctors->thumb); ?>);">
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
                          <input type="text" class="form-control" required name="name" id="name" value="<?php echo html_escape($doctors->name); ?>" >
                        </div>
                      </div>
                      <div class="col-md-4">  
                        <div class="form-group">
                          <label><?php echo trans('gender') ?> <span class="text-danger">*</span></label>
                          <select class="form-control" required name="gender" id="gender" value="<?php echo html_escape($staff[0]['gender']); ?>">
                            <option>Select</option>
                            <option <?php if($doctors->gender=='male'){ echo "selected"; } ?> value="male">Male</option>
                            <option <?php if($doctors->gender=='female'){ echo "selected"; } ?> value="female">Female</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-4">  
                        <div class="form-group">
                          <label><?php echo ('Date of Birth') ?> <span class="text-danger">*</span></label>
                          <input type="date" class="form-control" required name="dob" id="dob" value="<?php echo html_escape(date('Y-m-d',strtotime($doctors->dob))); ?>" >
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label><?php echo trans('age') ?> </label>
                          <input type="number" class="form-control" name="age" id="age" value="<?php echo html_escape(date_diff(date_create(date('Y-m-d',strtotime($doctors->dob))), date_create(date('Y-m-d')))->format('%y')); ?>" >
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <label><?php echo ('Marital Status'); ?> </label>
                          <select class="form-control" required name="marital_status" id="marital_status" value="<?php echo html_escape($staff[0]['marital-status']); ?>" >
                            <option <?php if($doctors->marital_status=='Select'){ echo "selected"; } ?> value="Select">Select</option>
                            <option <?php if($doctors->marital_status=='Single'){ echo "selected"; } ?> value="Single">Single</option>
                            <option <?php if($doctors->marital_status=='Married'){ echo "selected"; } ?> value="Married">Married</option>
                            <option <?php if($doctors->marital_status=='Widowed'){ echo "selected"; } ?> value="Widowed">Widowed</option>
                            <option <?php if($doctors->marital_status=='Separated'){ echo "selected"; } ?> value="Separated">Separated</option>
                            <option <?php if($doctors->marital_status=='Not Specified'){ echo "selected"; } ?> value="Not Specified">Not Specified</option>
                          </select>
                        </div>
                      </div>
                      
                      <div class="col-md-4">
                        <div class="form-group">
                          <label><?php echo ('Blood Group') ?> </label>
                          <select class="form-control" name="blood_group" id="blood_group" value="<?php echo html_escape($staff[0]['blood-group']); ?>">
                            <option value="">Select</option>
                            <option <?php if($doctors->blood_group=='O+'){echo"selected";}?> value="O+">O+</option>           
                            <option <?php if($doctors->blood_group=='A+'){echo"selected";}?> value="A+">A+</option>           
                            <option <?php if($doctors->blood_group=='B+'){echo"selected";}?> value="B+">B+</option>           
                            <option <?php if($doctors->blood_group=='AB+'){echo"selected";}?> value="AB+">AB+</option>           
                            <option <?php if($doctors->blood_group=='O-'){echo"selected";}?> value="O-">O-</option>           
                            <option <?php if($doctors->blood_group=='A-'){echo"selected";}?> value="A-">A-</option>           
                            <option <?php if($doctors->blood_group=='B-'){echo"selected";}?> value="B-">B-</option>           
                            <option <?php if($doctors->blood_group=='AB-'){echo"selected";}?> value="AB-">AB-</option>
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
                      <input type="text" class="form-control" name="qualification" id="qualification" value="<?php echo html_escape($doctors->qualification); ?>" >

                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label><?php echo ('Password'); ?> </label>
                      <input type="text" class="form-control" name="password" id="password" value="<?php echo html_escape($doctors->password); ?>" >
                    </div>
                  </div>
                  
                  <div class="col-md-4">
                    <div class="form-group">
                      <label><?php echo ('Speciality') ?> </label>
                      <select class="form-control" name="speciality" id="speciality" value="<?php echo html_escape($doctors->speciality); ?>">
                        <option>Select Speciality</option>
                        <?php  
                        foreach ($chamber_category as $key => $value) {
                          $selected = '';
                          if($doctors->speciality==$value->name){
                            $selected = 'selected';
                          }
                          echo "<option $selected value='".$value->user_id."'>".$value->name."</option>";
                        }
                        ?>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label><?php echo ('Phone 1') ?> </label>
                      <input type="text" class="form-control" name="phone1" id="phone1" value="<?php echo html_escape($doctors->phone1); ?>">

                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-group">
                      <label><?php echo ('Phone 2'); ?> </label>
                      <input type="text" class="form-control" name="phone2" id="phone2" value="<?php echo html_escape($doctors->phone2); ?>">
                    </div>
                  </div>
                  
                  <div class="col-md-3">
                    <div class="form-group">
                      <label><?php echo ('Phone 3') ?> </label>
                      <input type="text" class="form-control" name="phone3" id="phone3" value="<?php echo html_escape($doctors->phone3); ?>">
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-group">
                      <label><?php echo ('Phone 4') ?> </label>
                      <input type="text" class="form-control" name="phone4" id="phone4" value="<?php echo html_escape($doctors->phone4); ?>">
                    </div>
                  </div>
                </div>


                <div class="row">

                  <div class="col-md-8">
                    <h3 class="border-bottom">Address Information</h3>
                    <div class="row">
                      <input type="hidden" name="address_id" id="address_id" class="form-control" value="<?php echo html_escape($doctors->address_id); ?>">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label><?php echo ('Address (R)') ?></label>
                          <input type="text" name="address_r" id="address_r" class="form-control" value="<?php echo html_escape($doctors->address_r); ?>">
                        </div>
                      </div>

                      <div class="col-md-2">
                        <div class="form-group">
                          <label><?php echo ('City') ?> <span class="text-danger">*</span></label>
                          <input type="text" name="city_r" id="city_r" required class="form-control" value="<?php echo html_escape($doctors->city_r); ?>">
                        </div>
                      </div>

                      <div class="col-md-2">
                        <div class="form-group">
                          <label><?php echo ('Zip') ?> <span class="text-danger">*</span></label>
                          <input type="text" name="zip_r" id="zip_r" required class="form-control" value="<?php echo html_escape($doctors->zip_r); ?>">
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="form-group">
                          <label><?php echo ('Country') ?> <span class="text-danger">*</span></label>
                          <input type="text" name="country_r" id="country_r" required class="form-control" value="<?php echo html_escape($doctors->country_r); ?>">
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <h3 class="border-bottom">Address Information</h3>
                    <div class="row">
                      <div class="col-md-12">
                        <label><?php echo ('Email'); ?> <span class="text-danger">*</span></label>
                        <input type="text" name="email" id="email" required class="form-control" value="<?php echo html_escape($doctors->email); ?>">
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
                          <input type="text" name="address_o" id="address_o" class="form-control" value="<?php echo html_escape($doctors->address_o); ?>">
                        </div>
                      </div>

                      <div class="col-md-2">
                        <div class="form-group">
                          <label><?php echo ('City') ?></label>
                          <input type="text" name="city_o" id="city_o" class="form-control" value="<?php echo html_escape($doctors->city_o); ?>">
                        </div>
                      </div>

                      <div class="col-md-2">
                        <div class="form-group">
                          <label><?php echo ('Zip') ?></label>
                          <input type="text" name="zip_o" id="zip_o" class="form-control" value="<?php echo html_escape($doctors->zip_o); ?>">
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="form-group">
                          <label><?php echo ('Country') ?></label>
                          <input type="text" name="country_o" id="country_o" class="form-control" value="<?php echo html_escape($doctors->country_o); ?>">
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="row">
                      <div class="col-md-12">
                        <label><?php echo ('Email 2') ?></label>
                        <input type="text" name="email2" id="email2" class="form-control" value="<?php echo html_escape($doctors->email2); ?>">
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
                          <input type="text" value="<?php echo html_escape($doctors->address_other); ?>" name="address_other" id="address_other" class="form-control">
                        </div>
                      </div>

                      <div class="col-md-2">
                        <div class="form-group">
                          <label><?php echo ('City') ?></label>
                          <input type="text" value="<?php echo html_escape($doctors->city_other); ?>" name="city_other" id="city_other" class="form-control">
                        </div>
                      </div>

                      <div class="col-md-2">
                        <div class="form-group">
                          <label><?php echo ('Zip') ?></label>
                          <input type="text" value="<?php echo html_escape($doctors->zip_other); ?>" name="zip_other" id="zip_other" class="form-control">
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="form-group">
                          <label><?php echo ('Country') ?></label>
                          <input type="text" value="<?php echo html_escape($doctors->country_other); ?>" name="country_other" id="country_other" class="form-control">
                        </div>
                      </div>
                    </div>
                  </div>

                </div>


                <div class="row">

                  <div class="col-md-12">
                    <h3 class="border-bottom">Vaccination Information</h3>
                    <div id="vaccination-container">
                      <!-- Add PHP Code For Doctor Vaccination -->
                      <?php  
                      foreach ($vaccination as $key => $vaccine) {
                        ?>
                        <div class="row" id="del-vac<?php echo html_escape($vaccine->vaccination_id); ?>">
                          
                          <input type="hidden" value="<?php echo html_escape($vaccine->vaccination_id); ?>" name="vaccination_id[]" id="vaccination_id" required>

                          <div class="col-md-2">
                            <div class="form-group">
                              <label><?php echo ('Vaccination Type') ?> <span class="text-danger">*</span></label>
                              <input type="text" value="<?php echo html_escape($vaccine->vaccination_type); ?>" name="vaccination_type[]" id="vaccination_type" required class="form-control">
                            </div>
                          </div>

                          <div class="col-md-2">
                            <div class="form-group">
                              <label><?php echo ('Vaccination Date') ?> <span class="text-danger">*</span></label>
                              <input type="date" value="<?php echo html_escape($vaccine->vaccination_date); ?>" name="vaccination_date[]" id="vaccination_date" required class="form-control">
                            </div>
                          </div>

                          <div class="col-md-3">
                            <div class="form-group">
                              <label><?php echo ('Reminder Date for Next') ?> <span class="text-danger">*</span></label>
                              <input type="date" value="<?php echo html_escape($vaccine->reminder_date_for_next); ?>" name="reminder_date_for_next[]" id="reminder_date_for_next" required class="form-control">
                            </div>
                          </div>

                          <div class="col-md-2">
                            <div class="form-group">
                              <label><?php echo ('Remarks') ?></label>
                              <input type="text" value="<?php echo html_escape($vaccine->vaccination_remarks); ?>" name="vaccination_remarks[]" id="vaccination_remarks" class="form-control">
                            </div>
                          </div>

                          <div class="col-md-2">
                            <div class="form-group">
                              <label><?php echo ('Medical History') ?></label>
                              <input type="text" value="<?php echo html_escape($vaccine->medical_history); ?>" name="medical_history[]" id="medical_history" class="form-control">
                            </div>
                          </div>

                          <div class="col-md-1">
                            <div class="form-group mt-35">
                              <span class="btn btn-danger" onclick="deleteOneVaccine('<?php echo html_escape($vaccine->vaccination_id); ?>')">Delete</span>
                            </div>
                          </div>

                        </div>

                        <?php  
                      }
                      ?>

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
                          <label><?php echo ('PAN Number') ?> <span class="text-danger">*</span></label>
                          <input type="text" value="<?php echo html_escape($doctors->pan_number); ?>" name="pan_number" id="pan_number" required class="form-control">
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="form-group">
                          <label><?php echo ('GST Number') ?></label>
                          <input type="text" value="<?php echo html_escape($doctors->gst_number); ?>" name="gst_number" id="gst_number" class="form-control">
                        </div>
                      </div>

                    </div>
                  </div>
                </div>



                <div class="row">
                  <div class="col-md-12">
                    <h3 class="border-bottom">Bank Information</h3>
                    <div id="bank-container">
                      <!-- Add PHP Code For Doctor Bank Details -->
                      <?php  
                      foreach ($bank_details as $key => $bank) {
                        ?>
                        <div class="row" id="del-bank<?php echo html_escape($bank->bank_id); ?>">

                          <input type="hidden" value="<?php echo html_escape($bank->bank_id); ?>" name="bank_id[]" id="bank_id" required>

                          <div class="col-md-2">
                            <div class="form-group">
                              <label><?php echo ('Bank Name') ?> <span class="text-danger">*</span></label>
                              <input type="text" name="bank_name[]" value="<?php echo html_escape($bank->bank_name); ?>" required class="form-control">
                            </div>
                          </div>

                          <div class="col-md-3">
                            <div class="form-group">
                              <label><?php echo ('Bank Account Number') ?> <span class="text-danger">*</span></label>
                              <input type="number" name="bank_account_number[]" value="<?php echo html_escape($bank->bank_account_number); ?>" required class="form-control">
                            </div>
                          </div>

                          <div class="col-md-3">
                            <div class="form-group">
                              <label><?php echo ('IFSC Code') ?> <span class="text-danger">*</span></label>
                              <input type="text" name="ifsc_code[]" value="<?php echo html_escape($bank->ifsc_code); ?>" required class="form-control">
                            </div>
                          </div>

                          <div class="col-md-2">
                            <div class="form-group">
                              <label><?php echo ('Remarks') ?></label>
                              <input type="text" name="bank_remarks[]" value="<?php echo html_escape($bank->bank_remarks); ?>" class="form-control">
                            </div>
                          </div> 

                          <div class="col-md-1">
                            <div class="form-group mt-35">
                              <span class="btn btn-danger" onclick="deleteOneBank('<?php echo html_escape($bank->bank_id); ?>')">Delete</span>
                            </div>
                          </div>


                        </div>
                        <?php  
                      }
                      ?>
                    </div>
                    <a href="#" class="btn btn-primary add-more-bank" style="position: relative;right: -90%;">+ Add More</a>
                  </div>
                </div>


                <div class="row">
                  <div class="col-md-12">
                    <h3 class="border-bottom">Insurance Information</h3>
                    <div id="insurance-container">
                      <?php  
                      foreach ($insurance_details as $key => $insurance) {
                        ?>
                        <div class="row" id="del-insure<?php echo html_escape($insurance->insurance_id); ?>">

                          <input type="hidden" value="<?php echo html_escape($insurance->insurance_id); ?>" name="insurance_id[]" id="insurance_id" required>

                          <div class="col-md-2">
                            <div class="form-group">
                              <label><?php echo ('Insurance') ?> <span class="text-danger">*</span></label>
                              <input type="text" name="insurance[]" value="<?php echo html_escape($insurance->insurance); ?>" required class="form-control">
                            </div>
                          </div>

                          <div class="col-md-2">
                            <div class="form-group">
                              <label><?php echo ('Insurance Date') ?> <span class="text-danger">*</span></label>
                              <input type="date" name="insurance_date[]" value="<?php echo html_escape($insurance->insurance_date); ?>" required class="form-control">
                            </div>
                          </div>

                          <div class="col-md-2">
                            <div class="form-group">
                              <label><?php echo ('Renewal Date') ?> <span class="text-danger">*</span></label>
                              <input type="date" name="renewal_date[]" value="<?php echo html_escape($insurance->renewal_date); ?>" required class="form-control">
                            </div>
                          </div>

                          <div class="col-md-2">
                            <div class="form-group">
                              <label><?php echo ('Amount Insured') ?> <span class="text-danger">*</span></label>
                              <input type="number" name="amount_insured[]" value="<?php echo html_escape($insurance->amount_insured); ?>" required class="form-control">
                            </div>
                          </div> 
                          <div class="col-md-2">
                            <div class="form-group">
                              <label><?php echo ('Amount Paid') ?> <span class="text-danger">*</span></label>
                              <input type="number" name="amount_paid[]" value="<?php echo html_escape($insurance->amount_paid); ?>" required class="form-control">
                            </div>
                          </div> 

                          <div class="col-md-2">
                            <div class="form-group">
                              <label><?php echo ('Allow Notifications') ?></label>
                              <br>
                              <input id="notifications<?php echo $insurance->insurance_id?>" type="checkbox" value="1" name="allow_notifications[]" class="" <?= ($insurance->allow_notifications==1) ? 'checked' : '' ?>>
                              <label for="notifications<?php echo $insurance->insurance_id?>"><?php echo ('Yes') ?></label>
                            </div>
                          </div> 

                          <div class="col-md-4">
                            <div class="form-group">
                              <label><?php echo ('Remarks') ?></label>
                              <input id="notifications" type="text" name="insurance_remarks[]" value="<?php echo html_escape($insurance->insurance_remarks); ?>" class="form-control">
                            </div>
                          </div>


                          <div class="col-md-1">
                            <div class="form-group mt-35">
                              <span class="btn btn-danger" onclick="deleteOneInsurance('<?php echo html_escape($insurance->insurance_id); ?>')">Delete</span>
                            </div>
                          </div>


                        </div>
                        <?php  
                      }
                      ?>
                    </div>
                    <a href="#" class="btn btn-primary add-more-insurance" style="position: relative;right: -90%;">+ Add More</a>
                  </div>
                </div>

                <center>
                  <div class="mx-auto w-100">
                    <input type="submit" class="btn btn-primary btn-lg mr-5 ml-5" name="save" value="Update">
                  </div>
                </center>
                </form>

              </div>

            </div>


            <?php if (isset($page_title) && $page_title != "Edit"): ?>
              <div class="box list_area">
                <div class="box-header with-border">
                  <?php if (isset($page_title) && $page_title == "Edit"): ?>
                    <h3 class="box-title"><?php echo trans('edit') ?> <a href="<?php echo base_url('admin/doctor') ?>" class="pull-right btn btn-primary btn-sm"><i class="fa fa-angle-left"></i> <?php echo trans('back') ?></a></h3>
                    <?php else: ?>
                      <h3 class="box-title"><?php echo 'All Doctors' ?> </h3>
                    <?php endif; ?>

                    <div class="box-tools pull-right">
                     <a href="#" class="pull-right btn btn-light-secondary add_btn"><i class="fa fa-plus"></i> <?php echo 'Add New Doctor'; ?></a>
                   </div>
                 </div>

                 <div class="box-body">

                  <div class="col-md-12 col-sm-12 col-xs-12 scroll table-responsive">
                    <table class="datatable table table-hover">
                      <thead>
                        <tr class="success table-info">
                          <th>#</th>
                          <th><?php echo trans('thumb') ?></th>
                          <th><?php echo trans('informations') ?></th>
                          <th></th>
                          <th><?php echo trans('action') ?></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i=1; foreach ($doctors as $doctor): ?>
                        <tr id="row_<?php echo html_escape($doctor->id); ?>">

                          <td><?= $i; ?></td>
                          <td>
                            <?php if (!empty($doctor->thumb)): ?>
                              <img width="120px" class="round min-w80 max-w80" src="<?php echo base_url($doctor->thumb); ?>">
                            <?php endif ?>
                          </td>
                          <td>
                            <h3 class="mt-0 mb-0"><?php echo html_escape($doctor->name); ?></h3>
                            <!-- <b>
                              <?php if ($doctor->chamber_id == 0): ?>
                                <?php echo trans('all-chambers') ?>
                                <?php else: ?>
                                  <?php echo get_by_id($doctor->chamber_id, 'chamber')->name; ?>
                                <?php endif ?>
                              </b> -->
                              <p class="mb-0"><?php echo html_escape($doctor->email); ?></p>
                              <p class="mb-0 text-capitalize"><?php echo html_escape($doctor->gender); ?></p>
                            </td>

                            <td>

                            </td>
                            
                            <td class="actions" width="12%">
                              <a href="<?php echo base_url('admin/doctor/edit/'.html_escape($doctor->id));?>" class="on-default edit-row" data-placement="top" title="<?php echo trans('edit') ?>"><i class="fa fa-pencil"></i></a> &nbsp; 

                              <a data-val="Category" data-id="<?php echo html_escape($doctor->id); ?>" href="<?php echo base_url('clinic-admin/doctor/delete/'.html_escape($doctor->id));?>" class="on-default remove-row delete_item" data-toggle="tooltip" data-placement="top" title="<?php echo trans('delete') ?>"><i class="fa fa-trash-o"></i></a> &nbsp;
                            </td>
                          </tr>

                          <?php $i++; endforeach; ?>
                        </tbody>
                      </table>
                    </div>

                  </div>


                </div>
              <?php endif; ?>

            </div>
          </section>
        </div>


        <script>
          function deleteOneVaccine(id){          
            if(confirm("Are you sure you want to delete this ?") == true){
              $.ajax({
                type: "POST",
                data: {
                  'id' : id,
                  'table' : 'doctors_vaccination',
                  'csrf_test_name' : csrf_token,
                },
               // contentType: "application/json; charset=utf-8",
                url: base_url+'admin/doctor/delete',
                success: function (data) {
                  console.log(data);
                  $('#del-vac'+id).remove();
                }
              });
            }
          }

          function deleteOneBank(id){          
            if(confirm("Are you sure you want to delete this ?") == true){
              $.ajax({
                type: "POST",
                data: {
                  'id' : id,
                  'table' : 'doctor_bank_details',
                  'csrf_test_name' : csrf_token,
                },
               // contentType: "application/json; charset=utf-8",
                url: base_url+'admin/doctor/delete',
                success: function (data) {
                  console.log(data);
                  $('#del-bank'+id).remove();
                }
              });
            }
          }

          function deleteOneInsurance(id){          
            if(confirm("Are you sure you want to delete this ?") == true){
              $.ajax({
                type: "POST",
                data: {
                  'id' : id,
                  'table' : 'doctor_insurance_details',
                  'csrf_test_name' : csrf_token,
                },
               // contentType: "application/json; charset=utf-8",
                url: base_url+'admin/doctor/delete',
                success: function (data) {
                  console.log(data);
                  $('#del-insure'+id).remove();
                }
              });
            }
          }

          
        </script>