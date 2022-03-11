<div class="box-body">
  <form id="cat-form" method="post" enctype="multipart/form-data" class="validate-form" action="<?php echo base_url('admin/patients/add')?>" role="form" novalidate>

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
              <label><?php echo ('Title') ?> <span class="text-danger">*</span></label>
              <input type="text" class="form-control" required name="title" value="<?php echo html_escape($patients[0]['email']); ?>">
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

      <!-- Phone -->
      <div class="row">
        <div class="col-md-3">
          <div class="form-group">
            <label><?php echo ('Phone 1') ?> <span class="text-danger">*</span></label>
            <input type="text" class="form-control" required name="phone1" id="phone1" value="<?php echo html_escape($staff[0]['phone1']); ?>" >

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
        <div class="col-md-6">
          <div class="form-group">
            <label><?php echo ('Email'); ?> </label>
            <input type="text" name="email" id="email" class="form-control">
          </div>
        </div>

        <div class="col-md-6">
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
            <select name="reffered_by" id="reffered_by" class="form-control">
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
            <label><?php echo ('Enter Doctor Name') ?></label>
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
          <input type="text" name="insurance_loan[0][amount]" id="" class="form-control">
        </div>
      </div>

      <div class="col-md-2">
        <div class="form-group">
          <label><?php echo ('Amount Spent') ?></label>
          <input type="text" name="insurance_loan[0][balance_spent]" id="" class="form-control">
        </div>
      </div>

      <div class="col-md-3">
        <div class="form-group">
          <label><?php echo ('Balance Amount') ?></label>
          <input type="text" name="insurance_loan[0][balance_amount]" id="" class="form-control">
        </div>
      </div>
    </div>
  </div>
  <span class="btn btn-primary add-more-insurance-loan" style="position: relative;right: -90%;"><i class="fa fa-plus" aria-hidden="true"></i> Add More</span>
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
                  count_insurance_loan++;
                });
              });

              function deleteInsuranceLoan(id){
                $("#del-insurance"+id).remove();
              }

            </script>