
<div class="content-wrapper">

  <!-- Main content -->
  <section class="content container">

    <div class="col-md-10 offset-md-1">
      
      <div class="box add_area <?php if(isset($page_title) && $page_title == "Edit"){echo "d-block";}else{echo "hide";} ?>">
        
        <div class="box-header with-border">
          <?php if (isset($page_title) && $page_title == "Edit"): ?>
            <h3 class="box-title"><?php echo trans('edit') ?></h3>
          <?php else: ?>
            <h3 class="box-title"><?php echo trans('add-new-staff') ?> </h3>
          <?php endif; ?>

          <div class="box-tools pull-right">
            <?php if (isset($page_title) && $page_title == "Edit"): ?>
              <a href="<?php echo base_url('clinic-admin/staff') ?>" class="pull-right btn btn-light-primary mt-15 btn-sm"><i class="fa fa-angle-left"></i> <?php echo trans('back') ?></a>
            <?php else: ?>
              <a href="#" class="text-right btn btn-light-secondary cancel_btn"><i class="fa fa-users"></i> <?php echo trans('all-staffs') ?></a>
            <?php endif; ?>
          </div>
        </div>

        <div class="box-body">
          <form id="cat-form" method="post" enctype="multipart/form-data" class="validate-form" action="<?php echo base_url('admin/registration/registrationController/add')?>" role="form" novalidate>
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
                    <div id="imagePreview" style="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-9">
              <div class="row">
                <div class="col-md-4">  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Designation</label>
                    <select id="designation" name="designation" placeholder="" type="text" class="form-control" autocomplete="off">
                      <option value="select">Select</option>
                      <option value="1">Designation One</option>
                      <option value="2">Designation Two</option>
                    </select>
                    <span class="text-danger"></span>
                  </div>
                </div>

                <div class="col-md-4">  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Department</label>
                    <select id="department" name="department" class="form-control">
                      <option value="select">Select</option>
                      <option value="1">Department One</option>
                      <option value="2">Department Two</option>
                    </select> 
                    <span class="text-danger"></span>
                  </div>
                </div>
                <div class="col-md-4"> 
                  <div class="form-group">
                    <label><?php echo trans('name') ?> <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" required name="name" id="name">
                  </div>  
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label><?php echo trans('father') ?></label>
                    <input type="text" class="form-control" name="father_name" id="father_name">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label><?php echo trans('mother') ?></label>
                    <input type="text" class="form-control" name="mother_name" id="mother_name">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label><?php echo trans('gender') ?> <span class="text-danger">*</span></label></label>
                    <select class="form-control" required name="gender" id="gender">
                      <option>Select</option>
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                    </select>
                  </div>                  
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Marital Status</label>
                    <select class="form-control" name="marital_status">
                      <option value="">Select</option>
                      <option value="Single">Single</option>
                      <option value="Married">Married</option>
                      <option value="Widowed">Widowed</option>
                      <option value="Separated">Separated</option>
                      <option value="Not Specified">Not Specified</option>
                    </select>
                    <span class="text-danger"></span>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Blood Group</label>
                    <select class="form-control" name="blood_group">
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
                    <span class="text-danger"></span>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label><?php echo ('Date of Birth') ?> <span class="text-danger">*</span></label>
                    <input type="date" class="form-control" required name="dob" id="dob"  >
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <label><?php echo ('Date of Joining') ?></label>
                <input type="date" class="form-control" name="date_of_joining" id="date_of_joining"  >
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label><?php echo ('Phone') ?></label>
                <input type="number" placeholder="Enter Your Phone" class="form-control" name="phone" id="phone">
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label><?php echo ('Email') ?> <span class="text-danger">*</span></label>
                <input type="text" class="form-control" placeholder="Enter Email" required name="email" id="email">
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label><?php echo ('Password') ?> <span class="text-danger">*</span></label>
                <input type="text" class="form-control" required placeholder="Enter Password" required name="password" id="password">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label><?php echo ('Qualification') ?> </label>
                <input type="text" class="form-control" name="qualification" id="qualification">
              </div>
            </div>            
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputEmail1">Work Experience</label>
                <textarea id="work_exp" name="work_exp" placeholder="" class="form-control"></textarea>

              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputFile">Specialization</label>
                <div><textarea name="specialization" class="form-control"></textarea>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputFile">Note</label>
                <div><textarea name="note" class="form-control"></textarea>
                </div>
              </div>
            </div>
          </div>
          <h3 class="form_title mt-20 border-bottom pb-20">Address Information</h3>
          <div class="row">
            <div class="col-md-12">
              <div class="clear"></div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputFile">Current Address</label>
                    <div><textarea name="address" class="form-control" required=""></textarea>
                    </div>
                    <span class="text-danger"></span></div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputFile">Permanent Address</label>
                      <div><textarea name="permanent_address" class="form-control"></textarea>
                      </div>
                      <span class="text-danger"></span></div>
                    </div> 
                  </div>
                </div>
              </div>

              <div class="row">

                <div class="col-md-12">
                  <h3 class="border-bottom pb-20">Vaccination Information</h3>
                  <div id="vaccination-container">
                    <div class="row">
                      <div class="col-md-2">
                        <div class="form-group">
                          <label><?php echo ('Vaccination Type') ?> <span class="text-danger">*</span></label>
                          <input type="text" name="vaccination[0][vaccination_type]" id="vaccination_type" required class="form-control">
                        </div>
                      </div>

                      <div class="col-md-2">
                        <div class="form-group">
                          <label><?php echo ('Vaccination Date') ?> <span class="text-danger">*</span></label>
                          <input type="date" name="vaccination[0][vaccination_date]" id="vaccination_date" required class="form-control">
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="form-group">
                          <label><?php echo ('Reminder Date for Next') ?> <span class="text-danger">*</span></label>
                          <input type="date" name="vaccination[0][reminder_date_for_next]" id="reminder_date_for_next" required class="form-control">
                        </div>
                      </div>

                      <div class="col-md-2">
                        <div class="form-group">
                          <label><?php echo ('Remarks') ?></label>
                          <input type="text" name="vaccination[0][vaccination_remarks]" id="vaccination_remarks" class="form-control">
                        </div>
                      </div>

                      <div class="col-md-2">
                        <div class="form-group">
                          <label><?php echo ('Medical History') ?></label>
                          <input type="text" name="vaccination[0][medical_history]" id="medical_history" class="form-control">
                        </div>
                      </div>
                    </div>
                  </div>
                  <a href="#" class="btn btn-primary add-more-vaccine" style="position: relative;right: -90%;">+ Add More</a>
                </div>
              </div>


              <div class="row">

                <div class="col-md-12">
                  <h3 class="border-bottom pb-20">Others Information</h3>
                  <div class="row">
                    <div class="col-md-3">
                      <div class="form-group">
                        <label><?php echo ('PAN Number') ?> <span class="text-danger">*</span></label>
                        <input type="text" name="pan_number" id="pan_number" required class="form-control">
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
                  <h3 class="border-bottom pb-20">Bank Information</h3>
                  <div id="bank-container">
                    <div class="row">
                      <div class="col-md-2">
                        <div class="form-group">
                          <label><?php echo ('Bank Name') ?> <span class="text-danger">*</span></label>
                          <input type="text" name="bank[0][bank_name]" required class="form-control">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label><?php echo ('Bank Account Number') ?> <span class="text-danger">*</span></label>
                          <input type="text" name="bank[0][bank_account_number]" required class="form-control">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label><?php echo ('IFSC Code') ?> <span class="text-danger">*</span></label>
                          <input type="text" name="bank[0][ifsc_code]" required class="form-control">
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="form-group">
                          <label><?php echo ('Remarks') ?></label>
                          <input type="text" name="bank[0][bank_remarks]" class="form-control">
                        </div>
                      </div> 
                    </div>
                  </div>
                  <a href="#" class="btn btn-primary add-more-banks" style="position: relative;right: -90%;">+ Add More</a>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <h3 class="border-bottom pb-20">Insurance Information</h3>
                  <div id="insurance-container">
                    <div class="row">
                      <div class="col-md-2">
                        <div class="form-group">
                          <label><?php echo ('Insurance') ?> <span class="text-danger">*</span></label>
                          <input type="text" name="insurance[0][insurance]" required class="form-control">
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="form-group">
                          <label><?php echo ('Insurance Date') ?> <span class="text-danger">*</span></label>
                          <input type="date" name="insurance[0][insurance_date]" required class="form-control">
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="form-group">
                          <label><?php echo ('Renewal Date') ?> <span class="text-danger">*</span></label>
                          <input type="date" name="insurance[0][renewal_date]" required class="form-control">
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="form-group">
                          <label><?php echo ('Amount Insured') ?> <span class="text-danger">*</span></label>
                          <input type="text" name="insurance[0][amount_insured]" required class="form-control">
                        </div>
                      </div> 
                      <div class="col-md-2">
                        <div class="form-group">
                          <label><?php echo ('Amount Paid') ?> <span class="text-danger">*</span></label>
                          <input type="text" name="insurance[0][amount_paid]" required class="form-control">
                        </div>
                      </div> 

                      <div class="col-md-2">
                        <div class="form-group">
                          <label><?php echo ('Allow Notifications') ?></label>
                          <br>
                          <input id="notifications" type="checkbox" value="1" name="insurance[0][allow_notifications]" class="">
                          <label for="notifications"><?php echo ('Yes') ?></label>
                        </div>
                      </div> 

                      <div class="col-md-4">
                        <div class="form-group">
                          <label><?php echo ('Remarks') ?></label>
                          <input id="notifications" type="text" name="insurance[0][insurance_remarks]" class="form-control">
                        </div>
                      </div> 
                    </div>
                  </div>
                  <a href="#" class="btn btn-primary add-more-insurances" style="position: relative;right: -90%;">+ Add More</a>
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
          <!-- <form id="cat-form" method="post" enctype="multipart/form-data" class="validate-form" action="<?php echo base_url('clinic-admin/staff/add')?>" role="form" novalidate>

            <div class="form-group">
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

            <div class="form-group">
                <label><?php echo trans('chambers') ?></label>
                <select class="selectfield textfield--grey col-sm-12 select2 w-100" name="chamber_id" required>
                    <option value=""><?php echo trans('select') ?></option>
                    <option <?php if($staff[0]['chamber_id'] == '0'){echo "selected";} ?> value="all"><?php echo trans('all-chamber') ?></option>
                    <?php foreach ($chambers as $chamber): ?>
                        <option value="<?php echo html_escape($chamber->id); ?>" <?php if($chamber->id == $staff[0]['chamber_id']){echo "selected";} ?>>
                            <?php echo html_escape($chamber->name); ?>
                        </option>
                    <?php endforeach ?>
                </select>
            </div>

            <div class="form-group">
              <label><?php echo trans('name') ?> <span class="text-danger">*</span></label>
              <input type="text" class="form-control" required name="name" value="<?php echo html_escape($staff[0]['name']); ?>" >
            </div>

            <div class="form-group">
              <label><?php echo trans('designation') ?> <span class="text-danger">*</span></label>
              <input type="text" class="form-control" required name="designation" value="<?php echo html_escape($staff[0]['designation']); ?>" >
            </div>

            <div class="form-group">
              <label><?php echo trans('email').' ('.trans('username').')' ?> <span class="text-danger">*</span></label>
              <input type="text" class="form-control" required name="email" value="<?php echo html_escape($staff[0]['email']); ?>" >
            </div>

            <div class="form-group <?php if(isset($page_title) && $page_title == 'Edit'){echo 'hide';} ?>">
              <label><?php echo trans('password') ?> <span class="text-danger">*</span></label>
              <input type="text" class="form-control" <?php if(isset($page_title) && $page_title != 'Edit'){echo 'required';} ?> name="password" value="<?php echo html_escape($staff[0]['password']); ?>" >
            </div>
            

            <input type="hidden" name="id" value="<?php echo html_escape($staff['0']['id']); ?>">
            
            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">

            <div class="row m-t-30">
              <div class="col-sm-12">
                <?php if (isset($page_title) && $page_title == "Edit"): ?>
                  <button type="submit" class="btn btn-primary pull-left"><i class="ficon flaticon-check"></i> <?php echo trans('save-changes') ?></button>
                <?php else: ?>
                  <button type="submit" class="btn btn-primary btn-lg pull-left"><i class="ficon flaticon-check"></i> <?php echo trans('save') ?></button>
                <?php endif; ?>
              </div>
            </div>

          </form> -->

        </div>

      </div>


      <?php if (isset($page_title) && $page_title != "Edit"): ?>
        <div class="box list_area">
          <div class="box-header with-border">
            <?php if (isset($page_title) && $page_title == "Edit"): ?>
              <h3 class="box-title"><?php echo trans('edit') ?> <a href="<?php echo base_url('admin/staff') ?>" class="pull-right btn btn-primary btn-sm"><i class="fa fa-angle-left"></i> <?php echo trans('back') ?></a></h3>
            <?php else: ?>
              <h3 class="box-title"><?php echo trans('all-staffs') ?> </h3>
            <?php endif; ?>

            <div class="box-tools pull-right">
             <a href="#" class="pull-right btn btn-light-secondary add_btn"><i class="fa fa-plus"></i> <?php echo trans('add-new-staff') ?> </a>
            </div>
          </div>

          <div class="box-body">
            
            <div class="col-md-12 col-sm-12 col-xs-12 scroll table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th><?php echo trans('thumb') ?></th>
                            <th><?php echo trans('informations') ?></th>
                            <th></th>
                            <th><?php echo trans('action') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php $i=1; foreach ($staffs as $staff): ?>
                        <tr id="row_<?php echo html_escape($staff->id); ?>">
                            
                            <td><?= $i; ?></td>
                            <td>
                                <?php if (!empty($staff->thumb)): ?>
                                  <img width="120px" class="round min-w80 max-w80" src="<?php echo base_url($staff->thumb); ?>">
                                <?php endif ?>
                            </td>
                            <td>
                                <h3 class="mt-0 mb-0"><?php echo html_escape($staff->name); ?></h3>
                                <b>
                                  <?php if ($staff->chamber_id == 0): ?>
                                    <?php echo trans('all-chambers') ?>
                                  <?php else: ?>
                                    <?php echo get_by_id($staff->chamber_id, 'chamber')->name; ?>
                                  <?php endif ?>
                                </b>
                                <p class="mb-0"><?php echo html_escape($staff->email); ?></p>
                                <p class="mb-0"><?php echo html_escape($staff->designation); ?></p>
                            </td>

                            <td>
                              
                            </td>
                            
                            <td class="actions" width="12%">
                              <a href="<?php echo base_url('clinic-admin/staff/edit/'.html_escape($staff->id));?>" class="on-default edit-row" data-placement="top" title="<?php echo trans('edit') ?>"><i class="fa fa-pencil"></i></a> &nbsp; 

                              <a data-val="Category" data-id="<?php echo html_escape($staff->id); ?>" href="<?php echo base_url('clinic-admin/staff/delete/'.html_escape($staff->id));?>" class="on-default remove-row delete_item" data-toggle="tooltip" data-placement="top" title="<?php echo trans('delete') ?>"><i class="fa fa-trash-o"></i></a> &nbsp;
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



<!-- For Vaccination -->
  <script>
    $(document).ready(function(){
      count_vaccine = 1;
      $('.add-more-vaccine').click(function(){
        add_vaccination = `<div class="row" id="delete-vaccination`+count_vaccination+`">
            <div class="col-md-2">
            <div class="form-group">
            <label>Vaccination Type <span class="text-danger">*</span></label>
            <input type="text" name="vaccination[`+count_vaccine+`][vaccination_type]" id="vaccination_type" required class="form-control">
            </div>
            </div>

            <div class="col-md-2">
            <div class="form-group">
            <label>Vaccination Date <span class="text-danger">*</span></label>
            <input type="date" name="vaccination[`+count_vaccine+`][vaccination_date]" id="vaccination_date" required class="form-control">
            </div>
            </div>

            <div class="col-md-3">
            <div class="form-group">
            <label>Reminder Date for Next <span class="text-danger">*</span></label>
            <input type="text" name="vaccination[`+count_vaccine+`][reminder_date_for_next]" id="reminder_date_for_next" required class="form-control">
            </div>
            </div>

            <div class="col-md-2">
            <div class="form-group">
            <label>Remarks</label>
            <input type="text" name="vaccination[`+count_vaccine+`][vaccination_remarks]" id="vaccination_remarks" class="form-control">
            </div>
            </div>

            <div class="col-md-2">
            <div class="form-group">
            <label>Medical History</label>
            <input type="text" name="vaccination[`+count_vaccine+`][medical_history]" id="medical_history" class="form-control">
            </div>
            </div>
            
            <div class="col-md-1" style="margin-top: 13px;">
            <div class="form-group">
            <label></label>
            <p class="btn btn-danger" onclick="deleteVaccination(`+count_vaccine+`)"> Delete</p>
            </div>
            </div>

            </div>`;
            $("#vaccination-container").append(add_vaccination);
            count_vaccine++;
      });
    });
  </script>

  <!-- For Bank -->
  <script>
    $(document).ready(function(){
      count_banks = 1;
      $('.add-more-banks').click(function(){
        add_bank = `<div class="row" id="delete-bank`+count_bank+`">
          <div class="col-md-2">
          <div class="form-group">
          <label>Bank Name <span class="text-danger">*</span></label>
          <input type="" name="bank[`+count_banks+`][bank_name]" class="form-control">
          </div>
          </div>

          <div class="col-md-3">
          <div class="form-group">
          <label>Bank Account Number <span class="text-danger">*</span></label>
          <input type="" name="bank[`+count_banks+`][bank_account_number]" class="form-control">
          </div>
          </div>

          <div class="col-md-3">
          <div class="form-group">
          <label>IFSC Code <span class="text-danger">*</span></label>
          <input type="" name="bank[`+count_banks+`][ifsc_code]" class="form-control">
          </div>
          </div>

          <div class="col-md-2">
          <div class="form-group">
          <label>Remarks</label>
          <input type="" name="bank[`+count_banks+`][bank_remarks]" class="form-control">
          </div>
          </div> 

          <div class="col-md-1" style="margin-top: 13px;">
          <div class="form-group">
          <label></label>
          <p class="btn btn-danger" onclick="deleteBank(`+count_bank+`)"> Delete</p>
          </div>
          </div>
          </div>`;

          $("#bank-container").append(add_bank);
          count_banks++;  
      });
    });
  </script>

  <!-- For Insurance -->
  <script>
    $(document).ready(function(){
      count_banks = 1;
      // Start for Insurance  Information  
        count_insurances = 1;
        $(".add-more-insurances").click(function(){
          add_insurance = `<div class="row" id="insurance-bank`+count_insurances+`">
          <div class="col-md-2">
          <div class="form-group">
          <label>Insurance <span class="text-danger">*</span></label>
          <input type="" name="insurance[`+count_insurances+`][insurance]" class="form-control">
          </div>
          </div>

          <div class="col-md-2">
          <div class="form-group">
          <label>Insurance Date <span class="text-danger">*</span></label>
          <input type="" name="insurance[`+count_insurances+`][insurance_date]" class="form-control">
          </div>
          </div>

          <div class="col-md-2">
          <div class="form-group">
          <label>Renewal Date <span class="text-danger">*</span></label>
          <input type="" name="insurance[`+count_insurances+`][renewal_date]" class="form-control">
          </div>
          </div>

          <div class="col-md-2">
          <div class="form-group">
          <label>Amount Insured <span class="text-danger">*</span></label>
          <input type="" name="insurance[`+count_insurances+`][amount_insured]" class="form-control">
          </div>
          </div> 
          <div class="col-md-2">
          <div class="form-group">
          <label>Amount Paid <span class="text-danger">*</span></label>
          <input type="" name="insurance[`+count_insurances+`][amount_paid]" class="form-control">
          </div>
          </div> 
          
          <div class="col-md-2">
          <div class="form-group">
          <label>Allow Notifications</label>
          <br>
          <input id="notifications" type="checkbox" value="1" name="insurance[`+count_insurances+`][allow_notifications]" class="">
          <label for="notifications">Yes</label>
          </div>
          </div> 
          
          <div class="col-md-4">
          <div class="form-group">
          <label>Remarks</label>
          <input id="notifications" type="text" name="insurance[`+count_insurances+`][insurance_remarks]" class="form-control">
          </div>
          </div> 

          <div class="col-md-1" style="margin-top: 13px;">
          <div class="form-group">
          <label></label>
          <p class="btn btn-danger" onclick="deleteInsurance(`+count_insurances+`)"> Delete</p>
          </div>
          </div>
          </div>`;
          $("#insurance-container").append(add_insurance);
          count_insurances++;
        });
    });
  </script>