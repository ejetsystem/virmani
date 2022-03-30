
<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">

    <div class="box add_area">
      <div class="box-header with-border">
        <h3 class="box-title"><?php echo trans('add-appointment') ?> </h3>
        <div class="box-tools pull-right">
            <a href="<?php echo base_url('clinic-admin/appointment') ?>" class="pull-right btn btn-light-secondary mt-15 btn-sm"><i class="fa fa-angle-left"></i> <?php echo trans('back') ?></a>
        </div>      
                    <form id="cat-form" method="post" enctype="multipart/form-data" class="validate-form" action="<?php echo base_url('clinic-admin/appointment/add')?>" role="form" novalidate>
                      <div class="modal-body">

                        <div class="row">
                          <div class="col-lg-6">
                            <div class="form-group plr-10">
                                  <div class="radio radio-info radio-inline mt-10">
                                    <input type="radio" id="inlineRadio2" checked value="2" class="patient_type" name="patient_type">
                                    <label for="inlineRadio2"> <?php echo trans('old-patient') ?></label>&emsp;

                                    <input type="radio" id="inlineRadio1" value="1" class="patient_type" name="patient_type">
                                    <label for="inlineRadio1"> <?php echo trans('new-patient') ?></label> 
                                  </div>
                                </div>
                          </div>

                          <div class="col-lg-6">
                            <div class="old_patient_area plr-10">
                              <div class="form-group">
                                <label><?php echo trans('patient') ?> <span class="text-danger">*</span></label>
                                <select name="patient_id" id="patients" class="form-control select2" onchange="getPatientPhone(this.value);">
                                  <option value=""><?php echo trans('select') ?> </option>
                                  <?php foreach ($patientses as $patient): ?>
                                    <option  value="<?php echo html_escape($patient->id); ?>"><?= '<b>'.$patient->name.'</b> - '.$patient->mr_number.' - '.$patient->mobile;?></option>
                                  <?php endforeach ?>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label><?php echo trans('phone'); ?></label>
                              <input type="number" name="phone" id="phone" class="form-control">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label><?php echo ('Dentist/Doctor Name') ?></label>
                              <!-- <input type="text" name="doctor_name" id="doctor_name" class="form-control"> -->
                                <select name="doctors_id" id="doctors" class="form-control select2">
                                  <option value=""><?php echo trans('select') ?> </option>
                                  <?php foreach ($doctors as $doctor): ?>
                                    <option  value="<?php echo html_escape($doctor['id']); ?>"><?= '<b>'.$doctor['name'].'</b>'?></option>
                                  <?php endforeach ?>
                                </select>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group plr-10">
                              <label><?php echo trans('date') ?></label>
                              <div class="input-group mb-3">
                                <input type="text" class="form-control datepicker" name="date"  value="<?php echo date('Y-m-d') ?>" autocomplete="off">
                                <div class="input-group-append">
                                  <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group plr-10">
                              <label><?php echo trans('appointment-type') ?></label>
                              <div class="radio radio-info radio-inline mt-10">
                                <input type="radio" id="inlineRadio3" value="online" name="type">
                                <label for="inlineRadio3"> <?php echo trans('online') ?></label>&emsp;

                                <input type="radio" id="inlineRadio4" checked value="offline" name="type">
                                <label for="inlineRadio4"> <?php echo trans('offline') ?></label> 
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-sm-6">
                            <div class="form-group plr-10">
                              <label><?php echo trans('start-time') ?></label>
                              <!-- <input type="text" class="form-control timepicker" name="start_time"  value="" autocomplete="off"> -->
                              <select class="form-control" name="start_time" id="start_time"  value="" onchange="findEndTime()">
                                <option>Select--</option>
                                <?php 
                                  $range=range(strtotime("10:00"),strtotime("19:45"),15*60);
                                  foreach($range as $time){
                                    echo "<option value='".date("H:m:i",$time)."'>".date("H:m A",$time)."</option>";
                                  }
                                ?>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group plr-10">
                              <label><?php echo trans('end-time') ?></label>
                              <input type="text" class="form-control" name="end_time" id="end_time"  value="" autocomplete="off">
                            </div>
                          </div>
                        </div>

                        

                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label><?php echo('Choose Chair') ?></label>
                              <select name="chair_no" id="chair_no" class="form-control" autocomplete="off">
                               <option value=""> Choose Chair</option>
                               <option value="1"> Chair-1</option>
                               <option value="2"> Chair-2</option>
                               <option value="3"> Chair-3</option>
                               <option value="4"> Chair-4</option>
                               <option value="5"> Chair-5</option> 
                             </select>
                           </div>
                         </div>

                         <div class="col-md-6">
                          <div class="form-group">
                            <label><?php echo('No of slot') ?></label>
                            <select name="slot" id="slot" class="form-control" autocomplete="off"> 
                              <option value="1"> 1</option>                               
                              <option value="2"> 2</option>
                              <option value="3"> 3</option>
                              <option value="4"> 4</option>
                              <option value="5"> 5</option>
                              <option value="6"> 6</option>
                              <option value="7"> 7</option>
                              <option value="8"> 8</option>
                              <option value="9"> 9</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      

                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label><?php echo('Cause') ?></label>
                            <input type="text" class="form-control" name="cause" id="cause">
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group">
                            <label><?php echo ('Slot Time') ?></label>
                            <select name="slot_type" onchange="findEndTime()" id="slot_type" class="form-control" autocomplete="off"> 
                              <option value="15">15 Mints</option>
                              <option value="30">30 Mints</option>
                              <option value="45">45 Mints</option>
                              <option value="60">60 Mints</option>
                            </select>
                          </div>
                        </div>
                      </div>

                      

                      

                      <h3>More Information</h3>
                      <div class="form-group">
                        <label><?php echo('Extra Notes') ?></label>
                        <textarea class="form-control" name="extra_notes" id="extra_notes"></textarea>
                      </div>

            <div class="new_patient_area plr-10 hide">
              <div class="form-group">
                <label><?php echo trans('name') ?> <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="name">
              </div>

              <div class="form-group">
                <label><?php echo trans('email') ?> <span class="text-danger">*</span></label>
                <input type="email" class="form-control" name="email">
              </div>

              <div class="form-group">
                <label><?php echo trans('phone') ?> <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="mobile">
              </div>

              <div class="form-group">
                <label><?php echo trans('age') ?> </label>
                <input type="text" class="form-control" name="age">
              </div>

              <div class="form-group">
                <label><?php echo trans('weight') ?></label>
                <input type="text" class="form-control" name="weight">
              </div>

              <div class="form-group">
                <label><?php echo trans('gender') ?> <span class="text-danger"></span></label>
                <div class="radio radio-info radio-inline mt-10">
                  <input type="radio" id="inlineRadio11" checked value="1" name="sex">
                  <label for="inlineRadio11"> <?php echo trans('male') ?> </label>
                  <input type="radio" id="inlineRadio22" value="2" name="sex">
                  <label for="inlineRadio22"> <?php echo trans('female') ?> </label>
                </div>
              </div>

            </div>

            <!-- csrf token -->
            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
            <button type="submit" class="btn btn-primary btn-lg ml-0 mt-10"><i class="fa fa-check"></i> Submit</button>
            
          </div>
        </div>
      </form>
    </div>    

</section>
</div>

<div id="patient-modal" class="modal fade " role="dialog">
    <div class="modal-dialog modal-dialog2 modal-xl" style="min-width:90%">
        <div class="modal-content">
            <div class="modal-header">
                <h3><?php echo trans('add-patient'); ?></h3>
                <button type="button" id="close-modal" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">&nbsp;</h4>
            </div>
            <div class="modal-body" id="render-patient-page">
              <?php echo $this->load->view('admin/user/add_patient_form',$data,TRUE);?>
                 
            </div>
        </div>
    </div>
</div>

