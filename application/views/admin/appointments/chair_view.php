<?php  
// helper 
get_instance()->load->helper('custom_helper');
?>
<style>
  /*.table>thead>tr>th {
    border-top: 1px solid #c1c1c1  !important;
    padding: 0.4rem !important;
    background: #015ba9;
    color: #fff;
  }
 .table>tbody>tr>td {border-top: 1px solid #c1c1c1  !important;
    padding: 0.4rem !important;

  }*/
  .modal-header{
    background: #007bff;
    color:#fff;
  }
  .app_filtersblock {
    display: block;
    clear: both;
    margin-bottom: 20px;
  }
  .chr_default {
    display: block;
    background: #1c8f09;
    border-radius: 5px;
    padding: 5px 20px 10px 10px;
    overflow: hidden;
    position: relative;
  }
  .chair_green{ background: #1c8f09;}
  .chair_blue{ background: #015baa;}
  .chair_purple{ background: #9129bc;}
  .chair_dbrown{ background: #aa5101;}
  .chair_mgreen{ background: #aa9001;}
  .chair_dlgrey{ background: #9e9e9e;}
  .chr_default p {
    margin: 0px 0px 3px 0px;
    font-size: 12px;
    color: #fff;
    line-height: 12px;
    text-transform: capitalize;
  }
  input.largerCheckbox {
    width: 16px;
    height: 16px;
    position: relative;
    top: 3px;
  }
</style>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/1.1.1/css/bootstrap-multiselect.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/1.1.1/js/bootstrap-multiselect.min.js"></script>
<div class="content-wrapper ml-210">
  <!-- Main content -->
  <section class="content container">
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Chair View</h3>
            <div class="pull-right">
              <a class="btn btn-primary active" href="<?php echo base_url('clinic-admin/appointment/chairView'); ?>" title="">Chair View</a>
              <a class="btn btn-primary" href="<?php echo base_url('clinic-admin/appointment/calendar'); ?>" title="">Calendar View</a>
              <a class="btn btn-primary" href="<?php echo base_url('clinic-admin/appointment/waiting-room'); ?>" title="">Waiting Room</a>
            </div>
          </div>
          <div class="box-body">
            <div class="app_filtersblock">
              <div class="row">
                <?php

                $sdate = date("Y-m-d");
                if(isset($_REQUEST['sdate']) && $_REQUEST['sdate'] != ''){
                 $sdate = $_REQUEST['sdate'];
               }
               $field_date = date("Y-m-d",strtotime($sdate));
               $dtype = 'all';
               $splitimes = SplitTime($sdate." 10:00", $sdate." 20:00", "15");
               $ci =& get_instance(); 
               $appintment_info=array();

              // $chairs_list = array(1,2,3,4,5); 
               $chairs = $chairs_list;
               $chair_id = 'all';
               $doctor_id = '';
               if(isset($_REQUEST['chair_id']) && $_REQUEST['chair_id'] != ''){
                 $chairs = $chairs_search_list;
               }
               if(isset($_REQUEST['doctor_id']) && $_REQUEST['doctor_id'] != ''){
                 $doctor_id = 'AND a.doctor_id IN('.implode(',',$_REQUEST['doctor_id']).')';
               }
               $chair_colors = array('chair_green','chair_blue','chair_purple','chair_dbrown','chair_mgreen');
               foreach($splitimes as $stime){
                $start_time = $stime.':00';
                foreach($chairs as  $chair){
                  $sql = "SELECT a.*,patientses.name FROM appointments a inner join patientses on patientses.id = a.patient_id WHERE a.appointment_status IN(1,4) AND date = '".$sdate."' AND chair = '".$chair->id."' AND ('".$start_time."' BETWEEN `start_time` AND `end_time`) ".$doctor_id;
                  $query_check = $this->db->query($sql);
                  $res_check = $query_check->result();

                  if(count($res_check) > 0){
                   foreach($res_check as $rcheck){ 
                     $rcheck = (array) $rcheck;  
                     if(multi_array_search($rcheck['id'], $appintment_info)){ 
                     } else { 
                       $appintment_info[$stime][$chair->id][] = $rcheck; 
                     }  
                   }  
                 } else {
                   $appintment_info[$stime][$chair->id][] = 'Allot';
                 }  
               }   
             }
              
             ?>
             <div class="col-md-10 calender_filter">
              <form id="submit_form" action="" method="POST">
                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                Date 
                <input type="date" name="sdate" class="col-md-2" id="sdate" required="" value="<?php echo $sdate; ?>" autocomplete="off">

                 <center class="col-md-4 d-inline-block">
                   <div>
                     Doctor 

                     <select name="doctor_id[]"  id="doctor_id_top" class="select select-initialized form-control" multiple="multiple">
                       <?php foreach($doctors_list as $key=>$doctor){
                        if(isset($_REQUEST['doctor_id']) && $_REQUEST['doctor_id'][$key]==$doctor->id){
                          $doctor_selected = "selected='true'";
                        }
                        else{
                          $doctor_selected = "";
                        }
                       ?>
                         <option <?php echo $doctor_selected; ?> value="<?php echo $doctor->id;?>"><?php echo $doctor->name;?></option>
                       <?php }?>
                     </select>
                   </div>
                 </center> 

                 <div class="col-md-3 d-inline-block">
                   Chairs 
                   <select name="chair_id[]"  id="chair_id_top" class="form-control" multiple="multiple">
                     <?php 
                     foreach($chairs_list as $key=>$ch){
                         $found = false;
                            foreach ($chairs_search_list as $array) {
                              if($ch->id == $array->id) {
                                 $found = true; 
                                 break;
                               }
                            } 
                         ?>
                      <option <?php echo ($found === true) ? 'selected' : '';  ?>  value="<?php echo $ch->id; ?>"><?php echo $ch->name; ?></option>
                    <?php } ?>
                  </select>
                </div>
                <button type="submit" class="btn btn-primary px-40 mt-0">Filter</button>
              </form> 
            </div>
                
           <div class="col-md-2 pull-right text-right">
            <a href="javascript://" onclick="window.print();" class="btn btn-dark"><i class="fa fa-print"></i> Print</a>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="pptm_chview" id="pptm_chview_block">
          <table class="table table-striped_ table-bordered table-hover" cellspacing="0" width="100%">
            <thead>
              <tr class="success table-info">
                <th width="16%">Slot Time</th>
                <?php foreach($chairs as $ch){ ?>
                  <th width="16%"><?php echo $ch->name; ?></th>
                <?php } ?> 
              </tr>
            </thead>
            <tbody> 
              <?php
              foreach($appintment_info as $val => $ainfo_data){ 
                $date_now = strtotime(date("Y-m-d H:i:s"));
                $cdate_now = strtotime($sdate.' '.$val) ;
                if ($date_now > $cdate_now) {
                  $che_v =  'style="background:#ddd;"';
                  $che_c = 0;
                } else {
                  $che_v =  '';
                  $che_c = 1;
                } 
                ?>
                <tr>
                  <td><strong><?php  echo date("h:i A",strtotime($val)); ?></strong></td> 
                  <?php foreach($ainfo_data as $chair_no => $ainfo){
                   ?>
                   <?php 
                   if($ainfo[0] != 'Allot'){ 
                    $row_s = 'rowspan="'.(($ainfo[0]['slot_time']/15)+1).'"';
                  } else {
                    $row_s = '';
                  }
                  ?> 
                  <?php if($ainfo[0] == 'Allot'){ ?>
                    <td  <?php echo $che_v;  ?>  <?php if($che_c > 0){ ?>onclick="add_application('<?php echo $field_date; ?>','<?php echo date("H:i",strtotime($val)); ?>',<?php echo $chair_no; ?>);" <?php } else { ?> onclick="alert_function();"<?php } ?> style="cursor: pointer;">
                      <a href="javascript://"><?php echo $ainfo[0]; ?></a>
                    <?php  } else { ?>
                     <td <?php echo $row_s; ?> <?php echo $che_v;  ?> style="background-color: #f7f2f2;">
                      <?php 
                      $doctor_data=$this->db->get_where("doctors", array('id' => $ainfo[0]['doctor_id']))->row();
                      $doctor_d = $doctor_data->name;
                      ?>

                      <div class="chr_default <?php echo $chair_colors[($ainfo[0]['chair']-1)]; ?>">
                        <?php if($che_c > 0 && $ainfo[0]['appointment_status']=='approve'){ ?>
                         <span style="color: #fff;" class="ar_int"><b>Arrived:</b>&nbsp;&nbsp;&nbsp;<input type="checkbox" id="arrivedstat<?php echo $ainfo[0]['id']; ?>" <?php if($ainfo[0]['appointment_status']=='Arrived'){ echo "checked='checked'"; } ?> name="" onclick="getreadystat('Arrived','<?php echo $ainfo[0]['appointment_no']; ?>',<?php echo $ainfo[0]['patient_id'];?>,<?php echo $ainfo[0]['id'];?>)"></span>
                         <?php
                       }
                       ?>
                       <span class="text-white">
                         <label style="font-size: 14px;"><strong>Arrived : </strong></label> &nbsp;<input <?php echo ($ainfo[0]['appointment_status']==4) ? 'checked' : '' ?> type="checkbox" value="4" name="appointment_status" class='largerCheckbox' id="appointment_status" onchange="changeAppointmentStatus(this.value,'<?php echo $ainfo[0]['id'] ?>')">
                       </span>
                       <a href="javascript://" onclick="view_event(<?php echo $ainfo[0]['id']; ?>);">                        
                        <p><?php echo $ainfo[0]['name'];?></p>
                        <p><?php echo $ainfo[0]['cause'];?></p>
                        <p><strong>Doctor:</strong> <?php echo $doctor_d;?></p>
                      </a>
                    </div>
                    <?php
                  }  ?>
                </td> 
              <?php } ?>
            </tr>  
            <?php 
          } 
          ?> 
        </tbody>
      </table>
    </div>
  </div>
</div>

</div>
</div>
</div>
</section>
</div>

<script>
  function alert_function() {
    $('#appointment_closed').modal('show');
  }

  function add_application(dates, time, chair1) {
    // alert(time);
    $('#chair_no').val(chair1);
    $('#date_field').val(dates);
    $('#start_time').val(time);
    $('#page').val("chair_view_page");
    findEndTime();
    $('#add-appointment-modal').modal('show');
  }

  

  // function closeModal(){
    
  //   $('#add-appointment-modal').modal('hide');
  // }

  

  $(document).ready(function () {
    $('#doctor_id_top,#chair_id_top').multiselect();
  });


  


</script>

<script>
  $('#doctor_id_top_').change(function () {
    var doctor_ids = '';
    var chair_ids = '';
    var sdate = $("#sdate").val();
    $("#doctor_id_top option:selected").each(function ()
    {
      doctor_ids += $(this).val() + ',';
    });
    doctor_ids = doctor_ids.substring(0, doctor_ids.length - 1);
    if (doctor_ids == '') {
      doctor_ids = 'all';
    }
    $("#chair_id_top option:selected").each(function ()
    {
      chair_ids += $(this).val() + ',';
    });
    chair_ids = chair_ids.substring(0, chair_ids.length - 1);        
    if (chair_ids == '') {
      chair_ids = 'all';
    }
    $.ajax({
      type: "POST",
      url: "<?php echo base_url();?>admin/appointment/appointments_function",
      data: {doctor_id: doctor_ids, chair_id: chair_ids, sdate: sdate,'csrf_test_name' : csrf_token},
      success: function (data) {
        $('#pptm_chview_block').html(data);
      }
    });
  });

  $('#chair_id_top_').change(function () {
    var doctor_ids = '';
    var chair_ids = '';
    var sdate = $("#sdate").val();
    $("#doctor_id_top option:selected").each(function ()
    {
      doctor_ids += $(this).val() + ',';
    });
    doctor_ids = doctor_ids.substring(0, doctor_ids.length - 1);
    if (doctor_ids == '') {
      doctor_ids = 'all';
    }
    $("#chair_id_top option:selected").each(function ()
    {
      chair_ids += $(this).val() + ',';
    });
    chair_ids = chair_ids.substring(0, chair_ids.length - 1);

    if (chair_ids == '') {
      chair_ids = 'all';
    }
    $.ajax({
      type: "POST",
      url: "<?php echo base_url();?>admin/appointment/appointments_function",
      data: {doctor_id: doctor_ids, chair_id: chair_ids, sdate: sdate,'csrf_test_name' : csrf_token},
      success: function (data) {
        $('#pptm_chview_block').html(data);
      }
    });
  });

  $('#go_cal').click(function () {
    var sdate = $("#sdate").val();
    var doctor_ids = '';
    var chair_ids = '';
    $("#doctor_id_top option:selected").each(function ()
    {
      doctor_ids += $(this).val() + ',';
    });
    doctor_ids = doctor_ids.substring(0, doctor_ids.length - 1);
    if (doctor_ids == '') {
      doctor_ids = 'all';
    }
    $("#chair_id_top option:selected").each(function ()
    {
      chair_ids += $(this).val() + ',';
    });
    chair_ids = chair_ids.substring(0, chair_ids.length - 1);
    if (chair_ids == '') {
      chair_ids = 'all';
    }

    $.ajax({
      type: "POST",
      url: "<?php echo base_url();?>admin/appointment/appointments_function",
      data: {doctor_id: doctor_ids, chair_id: chair_ids, sdate: sdate,'csrf_test_name' : csrf_token},
      success: function (data) {
        $('#pptm_chview_block').html(data);
      }
    });

  });

  function add_task() {
    $("#modal-title").html("Add Task");
    $("#task-title").val('');
    $("#taskid").val('');
    $('#newTask').modal('show');
    $('#task-date').datepicker({autoclose: true});
    $("#task-date").val('03/09/2022');
  }

  function edit_todo_task(eventid) {
    $.ajax({
      url: "http://sonaai.co/dental/admin/calendar/gettaskbyid/" + eventid,
      type: "POST",
      data: {eventid: eventid},
      dataType: 'json',
      contentType: false,
      cache: false,
      processData: false,
      success: function (res)
      {
        $("#modal-title").html("Edit Task");
        $("#task-title").val(res.event_title);
        $("#taskid").val(eventid);
        $("#task-date").val(new Date(res.start_date).toString("MM/dd/yyyy"));
        $('#task-date').datepicker({autoclose: true});
        $('#newTask').modal('show');
        $('#permission').html('<input type="submit" class="btn btn-primary submit_addtask pull-right" value="Save">');
      }
    });
  }

  $(document).ready(function (e) {
    $("#addtodo_form").on('submit', (function (e) {
      e.preventDefault();
      $.ajax({
        url: "http://sonaai.co/dental/admin/calendar/addtodo",
        type: "POST",
        data: new FormData(this),
        dataType: 'json',
        contentType: false,
        cache: false,
        processData: false,
        success: function (res)
        {
          if (res.status == "fail") {
            var message = "";
            $.each(res.error, function (index, value) {
              message += value;
            });

            errorMsg(message);
          } 
          else {
            successMsg(res.message);
            window.location.reload(true);
          }
        }
      });
    }));
  });

  function complete_event(id, status) {
    $.ajax({
      url: "http://sonaai.co/dental/admin/calendar/markcomplete/" + id,
      type: "POST",
      data: {id: id, active: status},
      dataType: 'json',
      success: function (res)
      {
        if (res.status == "fail") {
          var message = "";
          $.each(res.error, function (index, value) {
            message += value;
          });
          errorMsg(message);
        } else {
          successMsg(res.message);
          window.location.reload(true);
        }
      }
    });
  }

  function holdModal(modalId) {

    $('#' + modalId).modal({
      backdrop: 'static',
      keyboard: false,
      show: true
    });
  }

  function markcomplete(id) {

    $('#check' + id).change(function () {

      if (this.checked) {

        complete_event(id, 'yes');

      } else {

        complete_event(id, 'no');

      }

    });

  }


  $(function () {
    //$('#popupDatepicker').datepick();
    // $('#popupDatepicker').datepick({onSelect: showDate_add});

    $('#doctor_add').change(function () {
        // alert("ok");
        var date = $("#date-field-starttime1").val();
        //alert(date);
        var doctor = $("#doctor_id_add").val();
        var start_time = $("#start_time").val();
        var chair_no = $("#chair_no").val();
        var slot = $("#slot").val();
        var slot_type = $("#slot_type").val();

        if (date == '') {
          alert("Choose date");
        } else {
          $.ajax({
            url: 'http://sonaai.co/dental/index.php/admin/Admin/Checkdoctor',
            method: 'post',
            data: {date: date, doctor: doctor, start_time: start_time, chair_no: chair_no, slot: slot, slot_type: slot_type},
            success: function (response) {
              $("#avail_msg").html(response);
            }
          });
        }



      });

    $('#start_time').change(function () {
        //alert("ok");
        var date = $("#date-field-starttime1").val();
        var doctor = $("#doctor_id_add").val();
        var start_time = $("#start_time").val();
        var chair_no = $("#chair_no").val();
        var slot = $("#slot").val();
        var slot_type = $("#slot_type").val();

        if (doctor == '') {
          alert("Assign doctor");
        } else {
          $.ajax({
            url: 'http://sonaai.co/dental/index.php/admin/Admin/Checkdoctor',
            method: 'post',
            data: {date: date, doctor: doctor, start_time: start_time, chair_no: chair_no, slot: slot, slot_type: slot_type},
            success: function (response) {
              $("#avail_msg").html(response);
            }
          });
        }

      });

    $('#chair_no').change(function () {
        //alert("ok");
        var date = $("#date-field-starttime1").val();
        var doctor = $("#doctor_id_add").val();
        var start_time = $("#start_time").val();
        var chair_no = $("#chair_no").val();
        var slot = $("#slot").val();
        var slot_type = $("#slot_type").val();

        if (doctor == '') {
          alert("Assign doctor");
        } else {
          $.ajax({
            url: 'http://sonaai.co/dental/index.php/admin/Admin/Checkdoctor',
            method: 'post',
            data: {date: date, doctor: doctor, start_time: start_time, chair_no: chair_no, slot: slot, slot_type: slot_type},
            success: function (response) {
              $("#avail_msg").html(response);
            }
          });
        }
      });

    $('#slot').change(function () {
        //alert("ok");
        var date = $("#date-field-starttime1").val();
        var doctor = $("#doctor_id_add").val();
        var start_time = $("#start_time").val();
        var chair_no = $("#chair_no").val();
        var slot = $("#slot").val();
        var slot_type = $("#slot_type").val();

        if (doctor == '') {
          alert("Assign doctor");
        } else {
          $.ajax({
            url: 'http://sonaai.co/dental/index.php/admin/Admin/Checkdoctor',
            method: 'post',
            data: {date: date, doctor: doctor, start_time: start_time, chair_no: chair_no, slot: slot, slot_type: slot_type},
            success: function (response) {
              $("#avail_msg").html(response);
            }
          });
        }

      });

    $('#slot_type').change(function () {
        //alert("ok");
        var date = $("#date-field-starttime1").val();
        var doctor = $("#doctor_id_add").val();
        var start_time = $("#start_time").val();
        var chair_no = $("#chair_no").val();
        var slot = $("#slot").val();
        var slot_type = $("#slot_type").val();

        if (doctor == '') {
          alert("Assign doctor");
        } else {
          $.ajax({
            url: 'http://sonaai.co/dental/index.php/admin/Admin/Checkdoctor',
            method: 'post',
            data: {date: date, doctor: doctor, start_time: start_time, chair_no: chair_no, slot: slot, slot_type: slot_type},
            success: function (response) {
              $("#avail_msg").html(response);
            }
          });
        }

      });


    $('#date-field-starttime1').change(function () {
        //alert("ok");
        var date = $(this).val();
        var doctor = $("#doctor_id_add").val();
        var start_time = $("#start_time").val();
        var chair_no = $("#chair_no").val();
        var slot = $("#slot").val();
        var slot_type = $("#slot_type").val();

        if (doctor == '') {
          alert("Assign doctor");
        } else {
          $.ajax({
            url: 'http://sonaai.co/dental/index.php/admin/Admin/Checkdoctor',
            method: 'post',
            data: {date: date, doctor: doctor, start_time: start_time, chair_no: chair_no, slot: slot, slot_type: slot_type},
            success: function (response) {
              $("#avail_msg").html(response);
            }
          });
        }

      });


    $('#date-field-starttime_e').change(function () {
      var date = $(this).val();
      var doctor = $("#doctor_id_e").val();
      var start_time = $("#start_time_e").val();
      var chair_no = $("#chair_no_e").val();
      var slot = $("#slot_e").val();
      var slot_type = $("#slot_type_e").val();

      $.ajax({
        url: 'http://sonaai.co/dental/index.php/admin/Admin/Checkdoctoredit',
        method: 'post',
        data: {date: date, doctor: doctor, start_time: start_time, chair_no: chair_no, slot: slot, slot_type: slot_type},
        success: function (response) {
          $("#avail_msg_edit").html(response);
        }
      });

    });

    $('#date-field-starttime_e').change(function () {
      var date = $(this).val();
      var doctor = $("#doctor_id_e").val();
      var start_time = $("#start_time_e").val();
      var chair_no = $("#chair_no_e").val();
      var slot = $("#slot_e").val();
      var slot_type = $("#slot_type_e").val();
      $.ajax({
        url: 'http://sonaai.co/dental/index.php/admin/Admin/Checkdoctoredit',
        method: 'post',
        data: {date: date, doctor: doctor, start_time: start_time, chair_no: chair_no, slot: slot, slot_type: slot_type},
        success: function (response) {
          $("#avail_msg_edit").html(response);
        }
      });
    });

    $('#start_time_e').change(function () {
      var date = $("#date-field-starttime_e").val();
      var doctor = $("#doctor_id_e").val();
      var start_time = $("#start_time_e").val();
      var chair_no = $("#chair_no_e").val();
      var slot = $("#slot_e").val();
      var slot_type = $("#slot_type_e").val();
      $.ajax({
        url: 'http://sonaai.co/dental/index.php/admin/Admin/Checkdoctoredit',
        method: 'post',
        data: {date: date, doctor: doctor, start_time: start_time, chair_no: chair_no, slot: slot, slot_type: slot_type},
        success: function (response) {
          $("#avail_msg_edit").html(response);
        }
      });
    });

    $('#chair_no_e').change(function () {
      var date = $("#date-field-starttime_e").val();
      var doctor = $("#doctor_id_e").val();
      var start_time = $("#start_time_e").val();
      var chair_no = $("#chair_no_e").val();
      var slot = $("#slot_e").val();
      var slot_type = $("#slot_type_e").val();
      $.ajax({
        url: 'http://sonaai.co/dental/index.php/admin/Admin/Checkdoctoredit',
        method: 'post',
        data: {date: date, doctor: doctor, start_time: start_time, chair_no: chair_no, slot: slot, slot_type: slot_type},
        success: function (response) {
          $("#avail_msg_edit").html(response);
        }
      });
    });

    $('#slot_e').change(function () {
      var date = $("#date-field-starttime_e").val();
      var doctor = $("#doctor_id_e").val();
      var start_time = $("#start_time_e").val();
      var chair_no = $("#chair_no_e").val();
      var slot = $("#slot_e").val();
      var slot_type = $("#slot_type_e").val();
      $.ajax({
        url: 'http://sonaai.co/dental/index.php/admin/Admin/Checkdoctoredit',
        method: 'post',
        data: {date: date, doctor: doctor, start_time: start_time, chair_no: chair_no, slot: slot, slot_type: slot_type},
        success: function (response) {
          $("#avail_msg_edit").html(response);
        }
      });
    });

    $('#slot_type_e').change(function () {
      var date = $("#date-field-starttime_e").val();
      var doctor = $("#doctor_id_e").val();
      var start_time = $("#start_time_e").val();
      var chair_no = $("#chair_no_e").val();
      var slot = $("#slot_e").val();
      var slot_type = $("#slot_type_e").val();
      $.ajax({
        url: 'http://sonaai.co/dental/index.php/admin/Admin/Checkdoctoredit',
        method: 'post',
        data: {date: date, doctor: doctor, start_time: start_time, chair_no: chair_no, slot: slot, slot_type: slot_type},
        success: function (response) {
          $("#avail_msg_edit").html(response);
        }
      });
    });

    $("#sdate").change(function(){
      $('#submit_form').submit();
    });

  });


</script><!-- Add patient popup code start-->

<div id="appointment_closed" class="modal fade " role="dialog">
  <div class="modal-dialog modal-dialog2 modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">&nbsp;</h4>
      </div>
      <div class="modal-body">
        <h4 class="modal-title"><center>Appointment closed in this slot </center></h4> 
      </div>
    </div>
  </div>
</div>