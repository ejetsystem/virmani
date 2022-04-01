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
              <a href="<?php echo base_url('clinic-admin/patients') ?>" class="pull-right btn btn-light-secondary mt-15 btn-sm"><i class="fa fa-angle-left"></i> <?php echo trans('back') ?></a>
              <?php else: ?>
                <a href="#" class="text-right btn btn-light-secondary btn-sm cancel_btn"><i class="fa fa-bars"></i> <?php echo trans('all-patients') ?></a>
              <?php endif; ?>
            </div>
          </div>

          <div class="box-body">
            <form id="cat-form" method="post" enctype="multipart/form-data" class="check_form_validate validate-form" action="<?php echo base_url('admin/patients/add')?>" role="form" novalidate>

              <div class="row">
                <div class="col-md-3">
                  <div class="form-group" style="margin-top: 30%;">
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
                        <label><?php echo ('Title') ?> </label>
                        <input type="text" class="form-control"  name="title" value="<?php echo html_escape($patients[0]['email']); ?>">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label><?php echo trans('name') ?> <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" required name="name" id="name" value="<?php echo html_escape($patients[0]['name']); ?>" >
                        <span class="text-danger" id="name_error_message"></span>
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
                        <label><?php echo ('Gender') ?> </label>
                        <select class="form-control"  name="sex" value="">
                          <option>Select</option>
                          <option value="male">Male</option>
                          <option value="female">Female</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label><?php echo ('Date of Birth') ?></label>
                        <input type="date" class="form-control" name="dob" id="date" onchange="ageFind()" value="<?php echo html_escape($patients[0]['dob']); ?>">
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
                        <input type="number" class="form-control" name="weight" value="<?php echo html_escape($patients[0]['weight']); ?>" >
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

                <!-- Phone -->
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label><?php echo ('Phone 1') ?> <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" required name="phone1" id="phone" maxlength="10" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" />
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

                <!-- Email -->
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label><?php echo ('Email'); ?> </label>
                      <input type="text" name="email" id="email1" onkeyup="checkEmailExist(this.value)" class="form-control">
                      <span class="text-danger my-5" id="email_exist_error_message"></span>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label><?php echo ('Email 2'); ?> </label>
                      <input type="text" name="email2" id="email2" class="form-control">
                    </div>
                  </div>

                </div>

                <!-- Address -->

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label><?php echo ('Address (R)') ?></label>
                      <input type="text" name="address_r" id="address_r" class="form-control">
                    </div>
                  </div>

                  <div class="col-md-2">
                    <div class="form-group">
                      <label><?php echo ('City') ?></label>
                      <input type="text" name="city_r" id="city_r" class="form-control">
                    </div>
                  </div>

                  <div class="col-md-2">
                    <div class="form-group">
                      <label><?php echo ('Zip') ?></label>
                      <input type="text" name="zip_r" id="zip_r" class="form-control">
                    </div>
                  </div>

                  <div class="col-md-2">
                    <div class="form-group">
                      <label><?php echo ('Country') ?></label>
                      <input type="text" name="country_r" id="country_r" class="form-control">
                    </div>
                  </div>
                </div>


                <div class="row">
                  <div class="col-md-6">
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
                      <input type="text" name="zip_o" id="zip_o" class="form-control">
                    </div>
                  </div>

                  <div class="col-md-2">
                    <div class="form-group">
                      <label><?php echo ('Country') ?></label>
                      <input type="text" name="country_o" id="country_o" class="form-control">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
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
                      <input type="text" name="zip_other" id="zip_other" class="form-control">
                    </div>
                  </div>

                  <div class="col-md-2">
                    <div class="form-group">
                      <label><?php echo ('Country') ?></label>
                      <input type="text" name="country_other" id="country_other" class="form-control">
                    </div>
                  </div>
                </div>

                <!-- Physician -->
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label><?php echo ('Physician') ?></label>
                      <input type="text" name="physician" id="physician" class="form-control">
                    </div>
                  </div>

                  <div class="col-md-2">
                    <div class="form-group">
                      <label><?php echo ('Reffered By') ?></label>
                      <select onchange="getrefname(this.value)" name="reffered_by" id="reffered_by" class="form-control">
                        <option value="">Select </option>
                        <option value="Doctor">Doctor</option>
                        <option value="Patient">Patient</option>
                        <option value="Staff">Staff</option>
                        <option value="Other">Other</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-group">
                      <label id="reffered_change"><?php echo ('Enter Name') ?></label>
                      <input type="text" name="doctor_name" id="doctor_name" class="form-control">
                    </div>
                  </div>

                  <div class="col-md-2">
                    <div class="form-group">
                      <label><?php echo ('Phone') ?></label>
                      <input type="text" name="phone" id="phone" class="form-control">
                    </div>
                  </div>

                  <div class="col-md-2">
                    <div class="form-group">
                      <label><?php echo ('Relationship Type') ?></label>
                      <input type="text" name="relationship_type" id="relationship_type" class="form-control">
                    </div>
                  </div>
                </div>

                <!-- Medical History -->
                <!-- Physician -->
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label><?php echo ('Medical History and Allergies') ?></label>
                      <textarea name="history_allergies" id="history_allergies" class="form-control"></textarea>
                      
                    </select>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label><?php echo ('Special Notes') ?></label>
                    <textarea name="special_notes" id="special_notes" class="form-control"></textarea>
                  </div>
                </div>
              </div>
            </div>



            <!-- Insurance/Loan Information Start -->
            <div class="insurance-loan-container">
              <h3 class="border-bottom pb-20">Insurance/Loan Information</h3>
              <div class="row">
                <div class="col-md-2">
                  <div class="form-group">
                    <label><?php echo ('Select Type') ?></label>
                    <select class="form-control" name="insurance_loan[0][type]" id="insurance_type">
                      <option value="">Select Type</option>
                      <option value="Insurance">Insurance</option>
                      <option value="Loan">Loan</option>
                    </select>
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="form-group">
                    <label><?php echo ('Name') ?></label>
                    <input type="text" name="insurance_loan[0][name]" id="name" class="form-control">
                  </div>
                </div>

                <div class="col-md-2">
                  <div class="form-group">
                    <label><?php echo ('Amount') ?></label>
                    <input type="number" name="insurance_loan[0][amount]" id="amount0" class="form-control">
                  </div>
                </div>

                <div class="col-md-2">
                  <div class="form-group">
                    <label><?php echo ('Amount Spent') ?></label>
                    <input type="number" onkeyup="getBalanceAmount(0,this.value)" name="insurance_loan[0][balance_spent]" id="balance_spent0" class="form-control">
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="form-group">
                    <label><?php echo ('Balance Amount') ?></label>
                    <input type="number" name="insurance_loan[0][balance_amount]" id="balance_amount0" class="form-control">
                  </div>
                </div>
              </div>
            </div>
            <span class="btn btn-primary add-more-insurance-loan" style="position: relative;right: -90%;"><i class="fa fa-plus" aria-hidden="true"></i> Add More</span>
            <!-- Insurance/Loan Information End-->

              <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">

              <div class="row m-t-30">
                <div class="col-sm-12">
                  <?php if (isset($page_title) && $page_title == "Edit"): ?>
                    <button type="submit" class="btn btn-primary pull-left"><i class="ficon flaticon-check"></i> <?php echo trans('save-changes') ?></button>
                    <?php else: ?>
                      <center><button type="submit" class="btn btn-primary btn-lg"><i class="ficon flaticon-check"></i> <?php echo trans('save') ?></button></center>
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
                  <table class="table datatable table-hover">
                    
                    <thead>
                      <tr class="success table-info">
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
                        <td>
                          <a target="_blank" href="<?php echo base_url('clinic-admin/patients/view/'.html_escape($patients->id));?>" class="fs-12" data-placement="top" title=""><?php echo html_escape($patients->name); ?></a>
                        </td>
                        <td><?php echo html_escape($patients->age); ?></td>
                        <td><?php echo html_escape($patients->mobile); ?></td>
                        <td><?php echo character_limiter($patients->present_address); ?></td>

                        <td>
                          <a target="_blank" href="<?php echo base_url('clinic-admin/patients/all_prescriptions/'.html_escape($patients->id));?>" class="btn btn-light-primary btn-sm fs-12" data-placement="top" title=""><i class="fa fa-eye"></i> View</a>
                        </td>

                        <td class="actions" width="13%">
                          <a href="<?php echo base_url('clinic-admin/patients/view/'.html_escape($patients->id));?>" class="on-default view-row" data-placement="top" title="<?php echo trans('edit') ?>"><i class="fa fa-eye"></i></a> &nbsp; 

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
 
      <script>
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

      </script>

      <script>
        var count_insurance_loan = 1;
        $(document).ready(function(){
          $(".add-more-insurance-loan").click(function(){
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
            <input type="number" name="insurance_loan[`+count_insurance_loan+`][amount]" id="amount`+count_insurance_loan+`" class="form-control">
            </div>
            </div>

            <div class="col-md-2">
            <div class="form-group">
            <label><?php echo ('Amount Spent') ?></label>
            <input type="number" name="insurance_loan[`+count_insurance_loan+`][balance_spent]" id="balance_spent`+count_insurance_loan+`" onkeyup="getBalanceAmount('`+count_insurance_loan+`',this.value)" class="form-control">
            </div>
            </div>

            <div class="col-md-2">
            <div class="form-group">
            <label><?php echo ('Balance Amount') ?></label>
            <input type="number" name="insurance_loan[`+count_insurance_loan+`][balance_amount]" id="balance_amount`+count_insurance_loan+`" class="form-control">
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
            count_insurance_loan++;
          });
        });

        function deleteInsuranceLoan(id){
          $("#del-insurance"+id).remove();
        }

        function getrefname(reffered_by){
          if(reffered_by =='Doctor'){
            $("#reffered_change").text("Enter Doctor Name");
          }
          if(reffered_by =='Patient'){
            $("#reffered_change").text("Enter Patient Name");
          }
          if(reffered_by =='Staff'){
            $("#reffered_change").text("Enter Staff Name");
          }
          if(reffered_by =='Other'){
            $("#reffered_change").text("Enter Name");
          }
          
        }

        function getBalanceAmount(id,amount_spent){
          var amount = $("#amount"+id).val();
          var balance_amount = amount - amount_spent;
          $("#balance_amount"+id).val(balance_amount);
        }


        $(".check_form_validate").submit(function(e){
          
          if($("#email1").val()==''){
            
          }
          else{
            if(validateEmail($("#email1").val()) !='true'){
              $("#email").focus();
              $("#email_exist_error_message").text('Enter Valid Email');
              e.preventDefault();
              return false;
              
            }
          }

          if($("#phone").val().length ==0){
            $("#phone").focus();
            $("#number_error_message").text('Phone is required');
            e.preventDefault();
            
          }
          else if($("#phone").val().length !=10){
            $("#phone").focus();
            $("#number_error_message").text('Enter only 10 digits');
            e.preventDefault();
            return false;
          }
          else{
            $("#number_error_message").text('');
          }

          if($("#name").val() ==''){
            $("#name").focus();
            $("#name_error_message").text('Enter Name');
            e.preventDefault();
            return false;
          }
          else{
            $("#name_error_message").text('');
          }
          
        });

      </script>