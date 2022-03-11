
<div class="content-wrapper">

  <!-- Main content -->
  <section class="content container">

    <div class="box add_area <?php if(isset($page_title) && $page_title == "Edit"){echo "d-block";}else{echo "hide";} ?>">
      <div class="box-header with-border">
        <?php if (isset($page_title) && $page_title == "Edit"): ?>
          <h3 class="box-title"><?php echo trans('edit') ?></h3>
          <?php else: ?>
            <h3 class="box-title"><?php echo trans('create-new') ?> </h3>
          <?php endif; ?>

          <div class="box-tools pull-right">
            <?php if (isset($page_title) && $page_title == "Edit"): ?>
              <a href="<?php echo base_url('admin/patients') ?>" class="pull-right btn btn-light-secondary mt-15 btn-sm"><i class="fa fa-angle-left"></i> <?php echo trans('back') ?></a>
              <?php else: ?>
                <a href="#" class="text-right btn btn-light-secondary btn-sm cancel_btn"><i class="fa fa-bars"></i> <?php echo trans('all-patients') ?></a>
              <?php endif; ?>
            </div>
          </div>

          <div class="box-body">
            <form id="cat-form" method="post" enctype="multipart/form-data" class="validate-form" action="<?php echo base_url('clinic-admin/patients/update')?>" role="form" novalidate>

              <input type="hidden" required name="patient_id" value="<?php echo html_escape($patients[0]['id']); ?>">

              <div class="row">
                <div class="col-md-3">
                  <div class="form-group" style="margin-top: 30%;">
                    <div class="avatar-upload text-center">
                      <div class="avatar-edit">
                        <input type='file' name="photo" id="imageUpload" accept=".png, .jpg, .jpeg" />
                        <label for="imageUpload"></label>
                      </div>
                      <div class="avatar-preview">
                        <div id="imagePreview" style="background-image: url('<?php echo base_url($patients[0][thumb]); ?>');">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label><?php echo ('Title') ?> <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" required name="title" value="<?php echo html_escape($patients[0]['title']); ?>">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label><?php echo trans('name') ?> <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" required name="name" value="<?php echo html_escape($patients[0]['name']); ?>" >
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label><?php echo ('Guardian Person') ?> </label>
                        <input type="text" class="form-control" name="guardian" value="<?php echo html_escape($patients[0]['guardian']); ?>">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label><?php echo ('Gender') ?> <span class="text-danger">*</span></label>
                        <select class="form-control" required name="sex" value="<?php echo html_escape($patients[0]['sex']); ?>">
                          <option>Select</option>
                          <option <?= (html_escape($patients[0]['sex'])=='male') ? 'selected' : '' ?> value="male">Male</option>
                          <option <?= (html_escape($patients[0]['sex'])=='female') ? 'selected' : '' ?> value="female">Female</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label><?php echo ('Date of Birth') ?></label>
                        <input type="date" class="form-control" name="dob" id="date" onchange="ageFind()" value="<?php echo html_escape(date('Y-m-d',strtotime($patients[0]['dob']))); ?>">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label><?php echo ('Age') ?></label>
                        <input type="number" class="form-control" id="age" name="age" value="<?php echo html_escape($patients[0]['age']); ?>">
                      </div>
                    </div>
                  </div>


                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label><?php echo trans('weight') ?> </label>
                        <input type="text" class="form-control" name="weight" value="<?php echo html_escape($patients[0]['weight']); ?>" >
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group">
                        <label><?php echo trans('present-address') ?></label>
                        <textarea class="form-control" name="present_address"><?php echo html_escape($patients[0]['present_address']); ?></textarea>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group">
                        <label><?php echo trans('permanent-address') ?></label>
                        <textarea class="form-control" name="permanent_address"><?php echo html_escape($patients[0]['permanent_address']); ?></textarea>
                      </div>
                    </div>
                  </div>

                  
                </div>
              </div>

              <div class="">
                <h3 class="border-bottom pb-20">Contact Information</h3>
                <input type="hidden" required name="contact_id" value="<?php echo html_escape($contact[0]['id']); ?>">
                <!-- Phone -->
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label><?php echo ('Phone 1') ?> <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" required name="phone1" id="phone1" value="<?php echo html_escape($contact[0]['phone1']); ?>" >

                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-group">
                      <label><?php echo ('Phone 2'); ?> </label>
                      <input type="text" class="form-control" name="phone2" id="phone2" value="<?php echo html_escape($contact[0]['phone2']); ?>" >
                    </div>
                  </div>
                  
                  <div class="col-md-3">
                    <div class="form-group">
                      <label><?php echo ('Phone 3') ?> </label>
                      <input type="text" class="form-control" name="phone3" id="phone3" value="<?php echo html_escape($contact[0]['phone3']); ?>" >
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-group">
                      <label><?php echo ('Phone 4') ?> </label>
                      <input type="text" class="form-control" name="phone4" id="phone4" value="<?php echo html_escape($contact[0]['phone4']); ?>" >
                    </div>
                  </div>
                </div>

                <!-- Email -->
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label><?php echo ('Email'); ?> </label>
                      <input type="text" name="email" id="email" class="form-control"value="<?php echo html_escape($contact[0]['email']); ?>">
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label><?php echo ('Email 2'); ?> </label>
                      <input type="text" name="email2" id="email2" class="form-control"value="<?php echo html_escape($contact[0]['email2']); ?>">
                    </div>
                  </div>
                </div>

                <!-- Address -->

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label><?php echo ('Address (R)') ?></label>
                      <input type="text" name="address_r" id="address_r" class="form-control"value="<?php echo html_escape($contact[0]['address_r']); ?>">
                    </div>
                  </div>

                  <div class="col-md-2">
                    <div class="form-group">
                      <label><?php echo ('City') ?></label>
                      <input type="text" name="city_r" id="city_r" class="form-control"value="<?php echo html_escape($contact[0]['city_r']); ?>">
                    </div>
                  </div>

                  <div class="col-md-2">
                    <div class="form-group">
                      <label><?php echo ('Zip') ?></label>
                      <input type="text" name="zip_r" id="zip_r" class="form-control"value="<?php echo html_escape($contact[0]['zip_r']); ?>">
                    </div>
                  </div>

                  <div class="col-md-2">
                    <div class="form-group">
                      <label><?php echo ('Country') ?></label>
                      <input type="text" name="country_r" id="country_r" class="form-control"value="<?php echo html_escape($contact[0]['country_r']); ?>">
                    </div>
                  </div>
                </div>


                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label><?php echo ('Address (0)') ?></label>
                      <input type="text" name="address_o" id="address_o" class="form-control"value="<?php echo html_escape($contact[0]['address_o']); ?>">
                    </div>
                  </div>

                  <div class="col-md-2">
                    <div class="form-group">
                      <label><?php echo ('City') ?></label>
                      <input type="text" name="city_o" id="city_o" class="form-control"value="<?php echo html_escape($contact[0]['city_o']); ?>">
                    </div>
                  </div>

                  <div class="col-md-2">
                    <div class="form-group">
                      <label><?php echo ('Zip') ?></label>
                      <input type="text" name="zip_o" id="zip_o" class="form-control"value="<?php echo html_escape($contact[0]['zip_o']); ?>">
                    </div>
                  </div>

                  <div class="col-md-2">
                    <div class="form-group">
                      <label><?php echo ('Country') ?></label>
                      <input type="text" name="country_o" id="country_o" class="form-control"value="<?php echo html_escape($contact[0]['country_o']); ?>">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label><?php echo ('Address (Other if living away from City)') ?></label>
                      <input type="text" name="address_other" id="address_other" class="form-control"value="<?php echo html_escape($contact[0]['address_other']); ?>">
                    </div>
                  </div>

                  <div class="col-md-2">
                    <div class="form-group">
                      <label><?php echo ('City') ?></label>
                      <input type="text" name="city_other" id="city_other" class="form-control"value="<?php echo html_escape($contact[0]['city_other']); ?>">
                    </div>
                  </div>

                  <div class="col-md-2">
                    <div class="form-group">
                      <label><?php echo ('Zip') ?></label>
                      <input type="text" name="zip_other" id="zip_other" class="form-control"value="<?php echo html_escape($contact[0]['zip_other']); ?>">
                    </div>
                  </div>

                  <div class="col-md-2">
                    <div class="form-group">
                      <label><?php echo ('Country') ?></label>
                      <input type="text" name="country_other" id="country_other" class="form-control"value="<?php echo html_escape($contact[0]['country_other']); ?>">
                    </div>
                  </div>
                </div>

                <!-- Physician -->
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label><?php echo ('Physician') ?></label>
                      <input type="text" name="physician" id="physician" class="form-control"value="<?php echo html_escape($contact[0]['physician']); ?>">
                    </div>
                  </div>

                  <div class="col-md-2">
                    <div class="form-group">
                      <label><?php echo ('Reffered By') ?></label>
                      <select name="reffered_by" id="reffered_by" class="form-control"value="<?php echo html_escape($contact[0]['reffered_by']); ?>">
                        <option value="">Select </option>
                        <option <?= (html_escape($contact[0]['reffered_by'])=='Doctor') ? 'selected' : '' ?> value="Doctor">Doctor</option>
                        <option <?= (html_escape($contact[0]['reffered_by'])=='Patient') ? 'selected' : '' ?> value="Patient">Patient</option>
                        <option <?= (html_escape($contact[0]['reffered_by'])=='Staff') ? 'selected' : '' ?> value="Staff">Staff</option>
                        <option <?= (html_escape($contact[0]['reffered_by'])=='Other') ? 'selected' : '' ?> value="Other">Other</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-group">
                      <label><?php echo ('Enter Doctor Name') ?></label>
                      <input type="text" name="doctor_name" id="doctor_name" class="form-control"value="<?php echo html_escape($contact[0]['doctor_name']); ?>">
                    </div>
                  </div>

                  <div class="col-md-2">
                    <div class="form-group">
                      <label><?php echo ('Phone') ?></label>
                      <input type="text" name="phone" id="phone" class="form-control"value="<?php echo html_escape($contact[0]['phone']); ?>">
                    </div>
                  </div>

                  <div class="col-md-2">
                    <div class="form-group">
                      <label><?php echo ('Relationship Type') ?></label>
                      <input type="text" name="relationship_type" id="relationship_type" class="form-control"value="<?php echo html_escape($contact[0]['relationship_type']); ?>">
                    </div>
                  </div>
                </div>

                <!-- Medical History -->
                <!-- Physician -->
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label><?php echo ('Medical History and Allergies') ?></label>
                      <textarea name="history_allergies" id="history_allergies" class="form-control"><?php echo html_escape($contact[0]['medical_history_allergies']); ?></textarea>
                      
                    </select>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label><?php echo ('Special Notes') ?></label>
                    <textarea name="special_notes" id="special_notes" class="form-control"><?php echo html_escape($contact[0]['special_notes']); ?></textarea>
                  </div>
                </div>
              </div>
            </div>



            <!-- Insurance/Loan Information Start -->
            <div class="insurance-loan-container">
              <h3 class="border-bottom pb-20">Insurance/Loan Information</h3>
              <?php
                foreach ($insurance as $key => $i) {
                
              ?>
                <div class="row delete-particular-insurance-<?= $i['id']?> ">
                <div class="col-md-2">
                  <div class="form-group">
                    
                    <input type="hidden" required name="insurance_loan[<?= $key ?>][id]" value="<?php echo $i['id'] ?>">

                    <label><?php echo ('Select Type') ?></label>
                    <select class="form-control" name="insurance_loan[<?= $key ?>][type]" id="insurance_type">
                      <option value="">Select Type</option>
                      <option <?= ($i['type']=='Insurance') ? 'selected' : ''; ?> value="Insurance">Insurance</option>
                      <option <?= ($i['type']=='Loan') ? 'selected' : ''; ?> value="Loan">Loan</option>
                    </select>
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="form-group">
                    <label><?php echo ('Name') ?></label>
                    <input type="text" value="<?php echo $i['name'] ?>" name="insurance_loan[<?= $key ?>][name]" id="name" class="form-control">
                  </div>
                </div>

                <div class="col-md-2">
                  <div class="form-group">
                    <label><?php echo ('Amount') ?></label>
                    <input type="text" value="<?php echo $i['amount'] ?>" name="insurance_loan[<?= $key ?>][amount]" id="" class="form-control">
                  </div>
                </div>

                <div class="col-md-2">
                  <div class="form-group">
                    <label><?php echo ('Amount Spent') ?></label>
                    <input type="text" value="<?php echo $i['balance_spent'] ?>" name="insurance_loan[<?= $key ?>][balance_spent]" id="" class="form-control">
                  </div>
                </div>

                <div class="col-md-2">
                  <div class="form-group">
                    <label><?php echo ('Balance Amount') ?></label>
                    <input type="text" value="<?php echo $i['balance_amount'] ?>" name="insurance_loan[<?= $key ?>][balance_amount]" id="" class="form-control">
                  </div>
                </div>

                <div class="col-md-1">
                  <div class="form-group">
                    <span class="btn btn-danger mt-35" onclick="deleteParticularInsurance('<?= $i[id]?>')">Delete</span>
                  </div>
                </div>
                
              </div>
              <?php 
                  $last_key = $i['id']; 
                }  
              ?>
            </div>
            <span class="btn btn-primary add-more-insurance-loan" style="position: relative;right: -90%;"><i class="fa fa-plus" aria-hidden="true"></i> Add More</span>
            <input type="hidden" id="last-key" value="<?= $last_key?>">
            <!-- Insurance/Loan Information End-->




              <!-- <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label><?php echo trans('age') ?></label>
                    <input type="text" class="form-control" name="age" value="<?php echo html_escape($patients[0]['age']); ?>" >
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label><?php echo trans('weight') ?> </label>
                    <input type="text" class="form-control" name="weight" value="<?php echo html_escape($patients[0]['weight']); ?>" >
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label><?php echo trans('present-address') ?></label>
                    <textarea class="form-control" name="present_address" rows="6"><?php echo html_escape($patients[0]['present_address']); ?></textarea>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label><?php echo trans('permanent-address') ?></label>
                    <textarea class="form-control" name="permanent_address" rows="6"><?php echo html_escape($patients[0]['permanent_address']); ?></textarea>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label><?php echo trans('gender') ?> <span class="text-danger"></span></label>
                    <div class="radio radio-info radio-inline mt-10">
                      <input type="radio" id="inlineRadio1" checked="" <?php if($patients[0]['sex']==2){echo "checked";} ?> value="1" name="sex">
                      <label for="inlineRadio1"> <?php echo trans('male') ?> </label>
                      <input type="radio" id="inlineRadio2" <?php if($patients[0]['sex']==2){echo "checked";} ?>  value="2" name="sex">
                      <label for="inlineRadio2"> <?php echo trans('female') ?> </label>
                    </div>
                  </div>
                </div>

              </div> -->
              

              <!-- <input type="hidden" name="id" value="<?php echo html_escape($patients['0']['id']); ?>"> -->
              <!-- csrf token -->
              <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">

              <div class="row m-t-30">
                <div class="col-sm-12">
                  <?php if (isset($page_title) && $page_title == "Edit"): ?>
                    <button type="submit" class="btn btn-primary pull-left"><i class="ficon flaticon-check"></i> <?php echo trans('save-changes') ?></button>
                    <?php else: ?>
                      <button type="submit" class="btn btn-primary pull-left"><i class="ficon flaticon-check"></i> <?php echo trans('save') ?></button>
                    <?php endif; ?>
                  </div>
                </div>

              </form>

            </div>

          </div>


          <?php if (isset($page_title) && $page_title != "Edit"): ?>

            <div class="box list_area">
              <div class="box-header with-border">
                <?php if (isset($page_title) && $page_title == "Edit"): ?>
                  <h3 class="box-title">Edit patients <a href="<?php echo base_url('admin/patients') ?>" class="pull-right btn btn-light-primary mt-15 btn-sm"><i class="fa fa-angle-left"></i> <?php echo trans('back') ?></a></h3>
                  <?php else: ?>
                    <h3 class="box-title"><?php echo trans('all-patients') ?> </h3>
                  <?php endif; ?>

                  <div class="box-tools pull-right">
                   <a href="#" class="pull-right btn btn-light-secondary btn-sm add_btn"><i class="fa fa-plus"></i> <?php echo trans('add-new-patients') ?></a>
                 </div>
               </div>

               <div class="box-body">

                <div class="col-md-12 col-sm-12 col-xs-12 scroll table-responsive">
                  <table class="table table-hover <?php if(count($patientses) > 10){echo "datatable";} ?>">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th><?php echo trans('mr.-no') ?></th>
                        <th><?php echo trans('name') ?></th>
                        <th><?php echo trans('age') ?></th>
                        <th><?php echo trans('phone') ?></th>
                        <th><?php echo trans('address') ?> </th>
                        <th><?php echo trans('prescriptions') ?></th>
                        <th><?php echo trans('action') ?></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i=1; foreach ($patientses as $patients): ?>
                      <tr id="row_<?php echo html_escape($patients->id); ?>">

                        <td><?= $i; ?></td>
                        <td><?php echo html_escape($patients->mr_number); ?></td>
                        <td><?php echo html_escape($patients->name); ?></td>
                        <td><?php echo html_escape($patients->age); ?></td>
                        <td><?php echo html_escape($patients->mobile); ?></td>
                        <td><?php echo character_limiter($patients->present_address); ?></td>

                        <td>
                          <a target="_blank" href="<?php echo base_url('admin/patients/all_prescriptions/'.html_escape($patients->id));?>" class="btn btn-light-primary btn-sm fs-12" data-placement="top" title=""><i class="fa fa-eye"></i> View</a>
                        </td>

                        <td class="actions" width="13%">
                          <a href="<?php echo base_url('clinic-admin/patients/edit/'.html_escape($patients->id));?>" class="on-default edit-row" data-placement="top" title="<?php echo trans('edit') ?>"><i class="fa fa-pencil"></i></a> &nbsp; 

                          <a data-val="Category" data-id="<?php echo html_escape($patients->id); ?>" href="<?php echo base_url('clinic-admin/patients/delete-patients/'.html_escape($patients->id));?>" class="on-default remove-row delete_item" data-toggle="tooltip" data-placement="top" title="<?php echo trans('delete') ?>"><i class="fa fa-trash-o"></i></a> &nbsp;
                        </td>
                      </tr>

                      <?php $i++; endforeach; ?>
                    </tbody>
                  </table>
                </div>

              </div>

            </div>
          <?php endif; ?>

        </section>
      </div>

      

      <!-- jQuery 3 -->
      <script src="http://localhost/project-doxe/assets/admin/js/jquery3.min.js"></script>

      <script>

        // Find Age Using Date of Birth
        function ageFind(){
          var dob = $('#date').val();
          if(dob != ''){
            var str=dob.split('-');    
            var firstdate=new Date(str[0],str[1],str[2]);
            var today = new Date();        
            var dayDiff = Math.ceil(today.getTime() - firstdate.getTime()) / (1000 * 60 * 60 * 24 * 365);
            var age = parseInt(dayDiff);
            if(!(age == '')){
              $("#age").val(age);
            }
          }
        }

        function deleteParticularInsurance(id){
          if(confirm("Are you sure you want to delete this ?") == true){
              $.ajax({
                type: "POST",
                data: {
                  'id' : id,
                  'csrf_test_name' : csrf_token,
                },
               // contentType: "application/json; charset=utf-8",
                url: base_url+'clinic-admin/patients/delete-insurance',
                success: function (data) {
                  $('.delete-particular-insurance-'+id).remove();
                }
              });
            }
        }

      </script>

      <script>
        var count_insurance_loan = $("#last-key").val();
        $(document).ready(function(){
          $(".add-more-insurance-loan").click(function(){
            count_insurance_loan++;
            add_insurance_loan = `
            <div class="row" id="del-insurance`+count_insurance_loan+`">
            <div class="col-md-2">
            <div class="form-group">
            <label><?php echo ('Select Type') ?></label>
            <select class="form-control" name="insurance_loan[`+count_insurance_loan+`][type]" id="insurance_type">
            <option value="">Select Type</option>
            <option value="Insurance">Insurance</option>
            <option value="Loan">Loan</option>
            </select>
            </div>
            </div>

            <div class="col-md-3">
            <div class="form-group">
            <label><?php echo ('Name') ?></label>
            <input type="text" name="insurance_loan[`+count_insurance_loan+`][name]" id="name" class="form-control">
            </div>
            </div>

            <div class="col-md-2">
            <div class="form-group">
            <label><?php echo ('Amount') ?></label>
            <input type="text" name="insurance_loan[`+count_insurance_loan+`][amount]" id="" class="form-control">
            </div>
            </div>

            <div class="col-md-2">
            <div class="form-group">
            <label><?php echo ('Amount Spent') ?></label>
            <input type="text" name="insurance_loan[`+count_insurance_loan+`][balance_spent]" id="" class="form-control">
            </div>
            </div>

            <div class="col-md-2">
            <div class="form-group">
            <label><?php echo ('Balance Amount') ?></label>
            <input type="text" name="insurance_loan[`+count_insurance_loan+`][balance_amount]" id="" class="form-control">
            </div>
            </div>

            <div class="col-md-1">
            <div class="form-group">
            <span class='btn btn-danger mt-35' onclick='deleteInsuranceLoan(`+count_insurance_loan+`)'>Delete</span>  
            </div>
            </div>

            </div>
            `;
            $('.insurance-loan-container').append(add_insurance_loan);
            // count_insurance_loan++;
          });
        });

        function deleteInsuranceLoan(id){
          $("#del-insurance"+id).remove();
        }

      </script>