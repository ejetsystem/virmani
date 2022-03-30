
<div class="content-wrapper">

  <!-- Main content -->
  <section class="content">

    <div class="col-md-12">

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
              <form id="cat-form" method="post" enctype="multipart/form-data" class="validate-form check_email_validate" action="<?php echo base_url('admin/Staff/update_staff')?>" role="form" novalidate>
                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">

                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group" style="margin-top: 20%;">
                      <div class="avatar-upload text-center">
                        <input type="hidden" name="staff_id" value='<?php echo $staff[0][id]; ?>'>
                        <div class="avatar-edit">
                          <input type='file' name="photo" id="imageUpload" accept=".png, .jpg, .jpeg" />
                          <label for="imageUpload"></label>
                        </div>
                        <div class="avatar-preview">
                          <div id="imagePreview" style="background-image: url('<?php echo base_url($staff[0][thumb]); ?>');">
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
                          <label><?php echo trans('name') ?> <span class="text-danger"> * </span></label>
                          <input required type="text" class="form-control" value="<?php echo $staff[0]['name'] ?>"  name="name" id="name">
                          <span class="text-danger" id="name_error_message"></span>
                        </div>  
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <label><?php echo trans('father') ?></label>
                          <input type="text" class="form-control" name="father_name" id="father_name" value="<?php echo $staff[0]['father'] ?>">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label><?php echo trans('mother') ?></label>
                          <input type="text" class="form-control" name="mother_name" id="mother_name" value="<?php echo $staff[0]['mother'] ?>">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label><?php echo trans('gender') ?> </label></label>
                          <select class="form-control"  name="gender" id="gender">
                            <option>Select</option>
                            <option <?php echo ($staff[0]['gender']=="male") ? 'selected' : '' ?> value="male">Male</option>
                            <option <?php echo ($staff[0]['gender']=="female") ? 'selected' : '' ?> value="female">Female</option>
                          </select>
                        </div>                  
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Marital Status</label>
                          <select class="form-control" name="marital_status">
                            <option value="">Select</option>
                            <option <?php echo ($staff[0]['marital_status']=="Single") ? 'selected' : '' ?> value="Single">Single</option>
                            <option <?php echo ($staff[0]['marital_status']=="Married") ? 'selected' : '' ?> value="Married">Married</option>
                            <option <?php echo ($staff[0]['marital_status']=="Widowed") ? 'selected' : '' ?> value="Widowed">Widowed</option>
                            <option <?php echo ($staff[0]['marital_status']=="Separated") ? 'selected' : '' ?> value="Separated">Separated</option>
                            <option <?php echo ($staff[0]['marital_status']=="Not") ? 'selected' : '' ?> value="Not Specified">Not Specified</option>
                          </select>
                          <span class="text-danger"></span>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Blood Group</label>
                          <select class="form-control" name="blood_group">
                            <option value="">Select</option>
                            <option <?php echo ($staff[0]['blood_group']=="O+") ? 'selected' : '' ?> value="O+">O+</option>           
                            <option <?php echo ($staff[0]['blood_group']=="A+") ? 'selected' : '' ?> value="A+">A+</option>           
                            <option <?php echo ($staff[0]['blood_group']=="B+") ? 'selected' : '' ?> value="B+">B+</option>           
                            <option <?php echo ($staff[0]['blood_group']=="AB+") ? 'selected' : '' ?> value="AB+">AB+</option>           
                            <option <?php echo ($staff[0]['blood_group']=="O-") ? 'selected' : '' ?> value="O-">O-</option>           
                            <option <?php echo ($staff[0]['blood_group']=="A-") ? 'selected' : '' ?> value="A-">A-</option>           
                            <option <?php echo ($staff[0]['blood_group']=="B-") ? 'selected' : '' ?> value="B-">B-</option>           
                            <option <?php echo ($staff[0]['blood_group']=="AB-") ? 'selected' : '' ?> value="AB-">AB-</option>           
                          </select>
                          <span class="text-danger"></span>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label><?php echo ('Date of Birth') ?> </label>
                          <input type="date" class="form-control"  name="dob" id="dob" value="<?php echo $staff[0]['dob']?>" max="<?php echo date('Y-m-d'); ?>">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label><?php echo ('Date of Joining') ?></label>
                      <input type="date" class="form-control" name="date_of_joining" id="date_of_joining" value="<?php echo $staff[0]['date_of_joining']?>">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label><?php echo ('Phone') ?> <span class="text-danger"> * </span></label>
                      <input type="text" require placeholder="Enter Your Phone" class="form-control" name="phone" id="phone" value="<?php echo $staff[0]['phone']?>" minlength="10"  maxlength="10" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" />
                      <span class="text-danger" id="number_error_message"></span>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label><?php echo ('Email') ?> <span class="text-danger"> * </span></label>
                      <input type="text" require class="form-control" placeholder="Enter Email"  name="email" id="email" value="<?php echo $staff[0]['email']?>">
                    </div>
                  </div>
                  
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label><?php echo ('Qualification') ?> </label>
                      <input type="text" class="form-control" name="qualification" id="qualification" value="<?php echo $staff[0]['qualification']?>">
                    </div>
                  </div>            
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Work Experience</label>
                      <textarea id="work_exp" name="work_exp" placeholder="" class="form-control"><?php echo $staff[0]['work_experience']?></textarea>

                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="exampleInputFile">Specialization</label>
                      <div><textarea name="specialization" class="form-control"><?php echo $staff[0]['specialization']?></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="exampleInputFile">Note</label>
                      <div><textarea name="note" class="form-control"><?php echo $staff[0]['note']?></textarea>
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
                          <label for="exampleInputFile">Current Address </label>
                          <div><textarea name="address" class="form-control" =""><?php echo $staff[0]['current_address']?></textarea>
                          </div>
                          <span class="text-danger"></span></div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="exampleInputFile">Permanent Address</label>
                            <div><textarea name="permanent_address" class="form-control"><?php echo $staff[0]['permanent_address']?></textarea>
                            </div>
                            <span class="text-danger"></span></div>
                          </div> 
                        </div>
                      </div>
                    </div>

                    <?php
                    if(count($vaccination)>0){
                      ?>

                      <!-- Start Vaccination -->
                      <div class="row">

                        <div class="col-md-12">
                          <h3 class="border-bottom pb-20">Vaccination Information</h3>
                          <?php
                          foreach ($vaccination as $k => $v) {
                            ?>
                            <div id="vaccination-container">
                              <div class="row delete-particular-vaccination-<?php echo $v->id?>">
                                <div class="col-md-2">
                                  <input type="hidden" name="vaccination[<?php echo $k?>][id]" value="<?php echo $v->id?>">
                                  <div class="form-group">
                                    <label><?php echo ('Vaccination Type') ?> </label>
                                    <input type="text" value="<?php echo $v->vaccination_type?>" name="vaccination[<?php echo $k?>][vaccination_type]" id="vaccination_type"  class="form-control">
                                  </div>
                                </div>

                                <div class="col-md-2">
                                  <div class="form-group">
                                    <label><?php echo ('Vaccination Date') ?> </label>
                                    <input type="date" value="<?php echo $v->vaccination_date?>" name="vaccination[<?php echo $k?>][vaccination_date]" id="vaccination_date"  class="form-control">
                                  </div>
                                </div>

                                <div class="col-md-3">
                                  <div class="form-group">
                                    <label><?php echo ('Reminder Date for Next') ?></label>
                                    <input type="date" value="<?php echo $v->reminder_date_for_next?>" name="vaccination[<?php echo $k?>][reminder_date_for_next]" id="reminder_date_for_next" class="form-control">
                                  </div>
                                </div>

                                <div class="col-md-2">
                                  <div class="form-group">
                                    <label><?php echo ('Remarks') ?></label>
                                    <input type="text" value="<?php echo $v->remarks?>" name="vaccination[<?php echo $k?>][vaccination_remarks]" id="vaccination_remarks" class="form-control">
                                  </div>
                                </div>

                                <div class="col-md-2">
                                  <div class="form-group">
                                    <label><?php echo ('Medical History') ?></label>
                                    <input type="text" value="<?php echo $v->medical_history?>" name="vaccination[<?php echo $k?>][medical_history]" id="medical_history" class="form-control">
                                  </div>
                                </div>
                                <div class="col-md-1" style="margin-top: 13px;">
                                  <div class="form-group">
                                    <label></label>
                                    <p class="btn btn-danger" onclick="deleteParticularVaccination('<?php echo $v->id ?>')"> Delete</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <?php
                            $last_key_vaccination = $k;
                          }
                          ?>
                          <a href="#" class="btn btn-primary add-more-vaccine" style="position: relative;right: -90%;">+ Add More</a>
                          <input type="hidden" id="last-key-vaccination" value="<?= $last_key_vaccination?>">
                        </div>
                      </div>
                      <!-- End Vaccination -->
                      <?php  
                    }  
                    ?>


                    <div class="row">

                      <div class="col-md-12">
                        <h3 class="border-bottom pb-20">Others Information</h3>
                        <div class="row">
                          <div class="col-md-3">
                            <div class="form-group">
                              <label><?php echo ('PAN Number') ?> </label>
                              <input type="text" value="<?php echo $staff[0]['pan'] ?>" name="pan_number" id="pan_number"  class="form-control">
                            </div>
                          </div>

                          <div class="col-md-3">
                            <div class="form-group">
                              <label><?php echo ('GST Number') ?></label>
                              <input type="text" value="<?php echo $staff[0]['gst'] ?>" name="gst_number" id="gst_number" class="form-control">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <?php
                    if(count($bank_details)>0){
                    ?>
                    <div class="row">
                      <div class="col-md-12">
                        <h3 class="border-bottom pb-20">Bank Information</h3>
                        <div id="bank-container">
                          <?php
                          foreach ($bank_details as $k=>$b){
                          ?>
                            <div class="row delete-particular-bank-<?php echo $b->id?>">
                            <div class="col-md-2">
                              <input type="hidden" name="bank[<?php echo $k?>][id]" value="<?php echo $b->id?>">
                              <div class="form-group">
                                <label><?php echo ('Bank Name') ?> </label>
                                <input type="text" value="<?php echo $b->bank_name ?>" name="bank[<?php echo $k?>][bank_name]"  class="form-control">
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label><?php echo ('Bank Account Number') ?> </label>
                                <input type="text" value="<?php echo $b->bank_account_number ?>" name="bank[<?php echo $k?>][bank_account_number]"  class="form-control">
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label><?php echo ('IFSC Code') ?> </label>
                                <input type="text" value="<?php echo $b->ifsc_code ?>" name="bank[<?php echo $k?>][ifsc_code]"  class="form-control">
                              </div>
                            </div>
                            <div class="col-md-2">
                              <div class="form-group">
                                <label><?php echo ('Remarks') ?></label>
                                <input type="text" value="<?php echo $b->remarks ?>" name="bank[<?php echo $k?>][bank_remarks]" class="form-control">
                              </div>
                            </div> 
                            <div class="col-md-1" style="margin-top: 13px;">
                            <div class="form-group">
                            <label></label>
                            <p class="btn btn-danger" onclick="deleteParticularBank('<?php echo $b->id ?>')"> Delete</p>
                            </div>
                            </div>
                          </div>
                          <?php
                          $last_key_bank = $k;
                          } 
                          ?>
                        </div>
                        <a href="#" class="btn btn-primary add-more-banks" style="position: relative;right: -90%;">+ Add More</a>
                        <input type="hidden" id="last-key-bank" value="<?= $last_key_bank?>">
                      </div>
                    </div>
                    <?php
                    }  
                    ?>
                    
                    <?php
                    if(count($insurance_details)>0){
                    ?>
                      <div class="row">
                      <div class="col-md-12">
                        <h3 class="border-bottom pb-20">Insurance Information</h3>
                        <div id="insurance-container">
                          <?php
                          foreach($insurance_details as $k=>$in){
                          ?>
                          <div class="row delete-particular-insurance-<?php echo $in->id?>">
                            <div class="col-md-2">
                              <input type="hidden" value="<?php echo $in->id?>" name="insurance[<?php echo $k?>][id]">
                              <div class="form-group">
                                <label><?php echo ('Insurance') ?> </label>
                                <input type="text" value="<?php echo $in->insurance?>" name="insurance[<?php echo $k?>][insurance]"  class="form-control">
                              </div>
                            </div>
                            <div class="col-md-2">
                              <div class="form-group">
                                <label><?php echo ('Insurance Date') ?> </label>
                                <input type="date" value="<?php echo $in->insurance_date?>" name="insurance[<?php echo $k?>][insurance_date]"  class="form-control">
                              </div>
                            </div>
                            <div class="col-md-2">
                              <div class="form-group">
                                <label><?php echo ('Renewal Date') ?> </label>
                                <input type="date" value="<?php echo $in->renewal_date?>" name="insurance[<?php echo $k?>][renewal_date]"  class="form-control" min="<?php echo date('Y-m-d'); ?>">
                              </div>
                            </div>
                            <div class="col-md-2">
                              <div class="form-group">
                                <label><?php echo ('Amount Insured') ?> </label>
                                <input type="number" value="<?php echo $in->amount_insured?>" name="insurance[<?php echo $k?>][amount_insured]"  class="form-control">
                              </div>
                            </div> 
                            <div class="col-md-2">
                              <div class="form-group">
                                <label><?php echo ('Amount Paid') ?> </label>
                                <input type="text" value="<?php echo $in->amount_paid?>" name="insurance[<?php echo $k?>][amount_paid]"  class="form-control">
                              </div>
                            </div> 

                            <div class="col-md-2">
                              <div class="form-group">
                                <label><?php echo ('Allow Notifications') ?></label>
                                <br>
                                <input id="notifications" type="checkbox" value="1" <?php echo ($in->allow_notifications==1) ? 'checked' : ''?> name="insurance[<?php echo $k?>][allow_notifications]" class="">
                                <label for="notifications"><?php echo ('Yes') ?></label>
                              </div>
                            </div> 

                            <div class="col-md-4">
                              <div class="form-group">
                                <label><?php echo ('Remarks') ?></label>
                                <input id="notifications" type="text" value="<?php echo $in->remarks?>" name="insurance[<?php echo $k?>][insurance_remarks]" class="form-control">
                              </div>
                            </div>

                            <div class="col-md-1" style="margin-top: 13px;">
                            <div class="form-group">
                            <label></label>
                            <p class="btn btn-danger" onclick="deleteParticularInsurance('<?php echo $in->id ?>')"> Delete</p>
                            </div>
                            </div>

                          </div>
                          <?php
                          $last_key_insurance = $k;
                          }
                          ?>
                        </div>
                        <a href="#" class="btn btn-primary add-more-insurances" style="position: relative;right: -90%;">+ Add More</a>
                        <input type="hidden" id="last-key-insurance" value="<?= $last_key_insurance?>">
                      </div>
                    </div>
                    <?php
                    }
                    ?>
                    
                    <center>
                      <div class="mx-auto w-100">
                        <input type="submit" class="btn btn-primary btn-lg mr-5 ml-5" name="save" value="Update">
                      </div>
                    </center>
                    <!-- End -->
                  </form>

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
              <table class="table table-hover datatable">
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
      count_vaccine = $("#last-key-vaccination").val();
      $('.add-more-vaccine').click(function(){
        count_vaccine++;
        add_vaccination = `<div class="row" id="delete-vaccination`+count_vaccine+`">
        <div class="col-md-2">
        <div class="form-group">
        <label>Vaccination Type </label>
        <input type="text" name="vaccination[`+count_vaccine+`][vaccination_type]" id="vaccination_type"  class="form-control">
        </div>
        </div>

        <div class="col-md-2">
        <div class="form-group">
        <label>Vaccination Date </label>
        <input type="date" name="vaccination[`+count_vaccine+`][vaccination_date]" id="vaccination_date"  class="form-control">
        </div>
        </div>

        <div class="col-md-3">
        <div class="form-group">
        <label>Reminder Date for Next </label>
        <input type="date" name="vaccination[`+count_vaccine+`][reminder_date_for_next]" id="reminder_date_for_next" class="form-control">
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
      });
      });
    </script>

    <!-- For Bank -->
    <script>
      $(document).ready(function(){
        count_banks = $("#last-key-vaccination").val();
        $('.add-more-banks').click(function(){
          count_banks++;
          add_bank = `<div class="row" id="delete-bank`+count_banks+`">
          <div class="col-md-2">
          <div class="form-group">
          <label>Bank Name </label>
          <input type="" name="bank[`+count_banks+`][bank_name]" class="form-control">
          </div>
          </div>

          <div class="col-md-3">
          <div class="form-group">
          <label>Bank Account Number </label>
          <input type="" name="bank[`+count_banks+`][bank_account_number]" class="form-control">
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
        });
        });
      </script>

      <!-- For Insurance -->
      <script>
        $(document).ready(function(){
      count_insurances = $("#last-key-insurance").val();
      $(".add-more-insurances").click(function(){
        count_insurances++;
        add_insurance = `<div class="row" id="insurance-bank`+count_insurances+`">
        <div class="col-md-2">
        <div class="form-group">
        <label>Insurance </label>
        <input type="" name="insurance[`+count_insurances+`][insurance]" class="form-control">
        </div>
        </div>

        <div class="col-md-2">
        <div class="form-group">
        <label>Insurance Date </label>
        <input type="date" name="insurance[`+count_insurances+`][insurance_date]" class="form-control">
        </div>
        </div>

        <div class="col-md-2">
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
      });
      });
    </script>


    <script>
      function deleteParticularVaccination(id){
          swal({
                 title: "Are you sure?",
                 text: "You will not be able to recover this data !",
                 type: "warning",
                 showCancelButton: true,
                 confirmButtonColor: "#DD6B55",
                 confirmButtonText: "Yes, delete it!",
                 cancelButtonText: "No, cancel plx!",
                 closeOnConfirm: false,
                 closeOnCancel: false 
             },
             function(isConfirm) {
                 if (isConfirm) {
                     $.ajax({
                       type: "POST",
                       data: {
                         'id' : id,
                         'csrf_test_name' : csrf_token,
                       },
                      // contentType: "application/json; charset=utf-8",
                       url: base_url+'admin/Staff/deleteParticularVaccination',
                       success: function (data) {
                         $('.delete-particular-vaccination-'+id).remove();
                         swal("Deleted!", "Data Successfully has been deleted.", "success");
                       }
                     });
                 } else {
                     swal("Cancelled", "Your Data is safe :)", "error");
                 }
             }
         );
        }

      function deleteParticularBank(id){
        swal({
               title: "Are you sure?",
               text: "You will not be able to recover this data !",
               type: "warning",
               showCancelButton: true,
               confirmButtonColor: "#DD6B55",
               confirmButtonText: "Yes, delete it!",
               cancelButtonText: "No, cancel plx!",
               closeOnConfirm: false,
               closeOnCancel: false 
           },
           function(isConfirm) {
               if (isConfirm) {
                   // swal("Deleted!", "Your imaginary file has been deleted.", "success");
                   alert();
                   $.ajax({
                     type: "POST",
                     data: {
                       'id' : id,
                       'csrf_test_name' : csrf_token,
                     },
                    // contentType: "application/json; charset=utf-8",
                     url: base_url+'admin/Staff/deleteParticularBank',
                     success: function (data) {
                       $('.delete-particular-bank-'+id).remove();
                       swal("Deleted!", "Data Successfully has been deleted.", "success");
                     }
                   });
               } else {
                   swal("Cancelled", "Your Data is safe :)", "error");
               }
           }
       );
        }
      
      function deleteParticularInsurance(id){
        swal({
               title: "Are you sure?",
               text: "You will not be able to recover this data !",
               type: "warning",
               showCancelButton: true,
               confirmButtonColor: "#DD6B55",
               confirmButtonText: "Yes, delete it!",
               cancelButtonText: "No, cancel plx!",
               closeOnConfirm: false,
               closeOnCancel: false 
           },
           function(isConfirm) {
               if (isConfirm) {
                   $.ajax({
                     type: "POST",
                     data: {
                       'id' : id,
                       'csrf_test_name' : csrf_token,
                     },
                    // contentType: "application/json; charset=utf-8",
                     url: base_url+'admin/Staff/deleteParticularInsurance',
                     success: function (data) {
                       $('.delete-particular-insurance-'+id).remove();
                       swal("Deleted!", "Data Successfully has been deleted.", "success");
                     }
                   });
               } else {
                   swal("Cancelled", "Your Data is safe :)", "error");
               }
           }
       );
        }   
      
    </script>