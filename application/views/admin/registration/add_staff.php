
<div class="content-wrapper">

  <!-- Main content -->
  <section class="content">

    <div class="col-md-12">
      
      <div class="box add_area ">
        
        <div class="box-header with-border">
          <h3 class="box-title"><?php echo trans('add-new-staff') ?> </h3>
        </div>

        <div class="box-body">
          <form id="cat-form" action="<?php echo base_url('admin/registration/registrationController/add')?>" method="post" enctype="multipart/form-data" class="validate-form check_email_validate" role="form" novalidate>
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
                    <span class="text-danger" id="name_error_message"></span>
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
                    <label><?php echo trans('gender') ?> </label></label>
                    <select class="form-control"  name="gender" id="gender">
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
                    <label><?php echo ('Date of Birth') ?> </label>
                    <input type="date" class="form-control"  name="dob" id="dob" max="<?php echo date('Y-m-d'); ?>">
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
                <label><?php echo ('Phone') ?> <span class="text-danger">*</span></label>
                <input type="text" placeholder="Enter Your Phone" class="form-control" name="phone" id="phone" required maxlength="10" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" />
                <span class="text-danger" id="number_error_message"></span>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label><?php echo ('Email') ?> <span class="text-danger">*</span></label>
                <input type="email" class="form-control" placeholder="Enter Email"  name="email" id="email" onkeyup="checkEmailExist(this.value)" required>
                <span class="text-danger my-5" id="email_exist_error_message"></span>
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
                    <label for="exampleInputFile">Current Address <span class="text-danger"> * </span></label>
                    <div><textarea name="address" class="form-control" ></textarea>
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
                          <label><?php echo ('Vaccination Type') ?> </label>
                          <input type="text" name="vaccination[0][vaccination_type]" id="vaccination_type"  class="form-control">
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="form-group">
                          <label><?php echo ('Vaccination Date') ?> </label>
                          <input type="date" name="vaccination[0][vaccination_date]" id="vaccination_date"  class="form-control">
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="form-group">
                          <label><?php echo ('Reminder Date for Next') ?> </label>
                          <input type="date" name="vaccination[0][reminder_date_for_next]" id="reminder_date_for_next" class="form-control" min="<?php echo date('Y-m-d'); ?>">
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
                  <p class="btn btn-primary add-more-vaccine" style="position: relative;right: -90%;">+ Add More</p>
                </div>
              </div>


              <div class="row">

                <div class="col-md-12">
                  <h3 class="border-bottom pb-20">Others Information</h3>
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
                  <h3 class="border-bottom pb-20">Bank Information</h3>
                  <div id="bank-container">
                    <div class="row">
                      <div class="col-md-2">
                        <div class="form-group">
                          <label><?php echo ('Bank Name') ?> </label>
                          <input type="text" name="bank[0][bank_name]"  class="form-control">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label><?php echo ('Bank Account Number') ?> </label>
                          <input type="number" name="bank[0][bank_account_number]"  class="form-control">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label><?php echo ('IFSC Code') ?> </label>
                          <input type="text" name="bank[0][ifsc_code]"  class="form-control">
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
                  <p class="btn btn-primary add-more-banks" style="position: relative;right: -90%;">+ Add More</p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <h3 class="border-bottom pb-20">Insurance Information</h3>
                  <div id="insurance-container">
                    <div class="row">
                      <div class="col-md-2">
                        <div class="form-group">
                          <label><?php echo ('Insurance') ?> </label>
                          <input type="text" name="insurance[0][insurance]"  class="form-control">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label><?php echo ('Insurance Date') ?> </label>
                          <input type="date" name="insurance[0][insurance_date]"  class="form-control">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label><?php echo ('Renewal Date') ?> </label>
                          <input type="date" name="insurance[0][renewal_date]"  class="form-control" min="<?php echo date('Y-m-d'); ?>">
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="form-group">
                          <label><?php echo ('Amount Insured') ?> </label>
                          <input type="number" name="insurance[0][amount_insured]"  class="form-control">
                        </div>
                      </div> 
                      <div class="col-md-2">
                        <div class="form-group">
                          <label><?php echo ('Amount Paid') ?> </label>
                          <input type="number" name="insurance[0][amount_paid]"  class="form-control">
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
                  <p class="btn btn-primary add-more-insurances" style="position: relative;right: -90%;">+ Add More</p>
                </div>
              </div>
              <center>
                <div class="mx-auto w-100">
                  <input type="submit" class="btn btn-primary btn-lg mr-5 ml-5" name="save" value="Save">
                  <a href="<?php echo base_url('clinic-admin/staff'); ?>" class="btn btn-danger btn-lg mr-5 ml-5">Cancel</a>
                </div>
              </center>
              <!-- End -->
            </form>
        </div>

      </div>

    </div>
  </section>
</div>



<!-- For Vaccination -->
  <script>
    $(document).ready(function(){
      count_vaccine = 1;
      $('.add-more-vaccine').click(function(){
        add_vaccination = `<div class="row" id="delete-vaccination`+count_vaccine+`">
            <div class="col-md-2">
            <div class="form-group">
            <label>Vaccination Type </label>
            <input type="text" name="vaccination[`+count_vaccine+`][vaccination_type]" id="vaccination_type"  class="form-control">
            </div>
            </div>

            <div class="col-md-3">
            <div class="form-group">
            <label>Vaccination Date </label>
            <input type="date" name="vaccination[`+count_vaccine+`][vaccination_date]" id="vaccination_date"  class="form-control">
            </div>
            </div>

            <div class="col-md-3">
            <div class="form-group">
            <label>Reminder Date for Next </label>
            <input type="date" name="vaccination[`+count_vaccine+`][reminder_date_for_next]" id="reminder_date_for_next" class="form-control" min="<?php echo date('Y-m-d'); ?>">
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
            <input type="text" name="vaccination[`+count_vaccine+`][medical_history]" id="medical_history" class="form-control w-100 d-inline-block">
            <p class="btn btn-danger w-100 d-inline-block" onclick="deleteVaccination(`+count_vaccine+`)"> Delete</p>
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
          <label>Bank Name </label>
          <input type="" name="bank[`+count_banks+`][bank_name]" class="form-control">
          </div>
          </div>

          <div class="col-md-3">
          <div class="form-group">
          <label>Bank Account Number </label>
          <input type="number" name="bank[`+count_banks+`][bank_account_number]" class="form-control">
          </div>
          </div>

          <div class="col-md-3">
          <div class="form-group">
          <label>IFSC Code </label>
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
          <label>Insurance </label>
          <input type="" name="insurance[`+count_insurances+`][insurance]" class="form-control">
          </div>
          </div>

          <div class="col-md-3">
          <div class="form-group">
          <label>Insurance Date </label>
          <input type="date" name="insurance[`+count_insurances+`][insurance_date]" class="form-control">
          </div>
          </div>

          <div class="col-md-3">
          <div class="form-group">
          <label>Renewal Date </label>
          <input type="date" name="insurance[`+count_insurances+`][renewal_date]" class="form-control" min="<?php echo date('Y-m-d'); ?>">
          </div>
          </div>

          <div class="col-md-2">
          <div class="form-group">
          <label>Amount Insured </label>
          <input type="number" name="insurance[`+count_insurances+`][amount_insured]" class="form-control">
          </div>
          </div> 
          <div class="col-md-2">
          <div class="form-group">
          <label>Amount Paid </label>
          <input type="number" name="insurance[`+count_insurances+`][amount_paid]" class="form-control">
          </div>
          </div> 
          
          <div class="col-md-2">
          <div class="form-group">
          <label>Allow Notifications</label>
          <br>
          <input id="notifications`+count_insurances+`" type="checkbox" value="1" name="insurance[`+count_insurances+`][allow_notifications]" class="">
          <label for="notifications`+count_insurances+`">Yes</label>
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