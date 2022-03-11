<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
<link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/css/bootstrap.min.css" />
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
<div class="content-wrapper ml-210">
  <!-- Main content -->
  <section class="content container">
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Appointment Calendar</h3>
          </div>

          <div class="box-body">
            <div class="container">
             
              <div id="calendar"></div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
</div>

<script>
  $(document).ready(function(){
    var calendar = $('#calendar').fullCalendar({
      editable:true,
      header:{
        left:'prev,next today',
        center:'doctor_name',
        right:'month,agendaWeek,agendaDay'
      },
      events:"<?php echo base_url(); ?>admin/appointment/load",
      selectable:true,
      selectHelper:true,
//      select:function(start, end, allDay)
//      {
//            $('#doctor_name').val('');
//            $("#patients").select2("val", '');
//            $('#chair_no option').removeAttr("selected", "");
//            $('#slot option').removeAttr("selected", "");
//            $('#cause').val('');
//            $('#slot_time option').removeAttr("selected", "");
//            $('#extra_notes').val('');
//             $('#appoint_id').val('');
//           $(".bd-example-modal-xl").modal('show');
// 
//      },
      editable:true,
      eventResize:function(event)
      {
        var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
        var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");

        var title = event.title;

        var id = event.id;

        $.ajax({
          url:"<?php echo base_url(); ?>fullcalendar/update",
          type:"POST",
          data:{title:title, start:start, end:end, id:id},
          success:function()
          {
            calendar.fullCalendar('refetchEvents');
            alert("Event Update");
          }
        })
      },
      eventRender: function (event, element) {
            element.find('.fc-title, .fc-list-item-title').html("<b>"+event.patient_name+"<br>"+event.cause+"<br>Doctor: "+event.doctor_name+"</b>");
        },
      eventDrop:function(event)
      {
        var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
                  //alert(start);
                  var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
                  //alert(end);
                  var title = event.title;
                  var id = event.id;
                  $.ajax({
                    url:"<?php echo base_url(); ?>fullcalendar/update",
                    type:"POST",
                    data:{title:title, start:start, end:end, id:id},
                    success:function()
                    {
                      calendar.fullCalendar('refetchEvents');
                      alert("Event Updated");
                    }
                  })
                },
                eventClick:function(event)
                {
                  var id = event.id;
                  
                  $.ajax({
                    url:"<?php echo base_url(); ?>clinic-admin/appointment/fetch",
                    type:"POST",
                    data:{
                      id:id,
                      'csrf_test_name' : csrf_token,
                    },
                    success:function(data)
                    {
                        console.log(data);
                        $('#doctor_name').val(data.doctor_name);
                        $("#patients").select2("val", data.patient_id);
                        $('#chair_no option[value="'+data.chair+'"]').attr("selected", "selected");
                        $('#slot option[value="'+data.number_of_slot+'"]').attr("selected", "selected");
                        $('#cause').val(data.cause);
                        $('#slot_time option[value="'+data.slot_time+'"]').attr("selected", "selected");
                        $('#extra_notes').val(data.extra_notes);
                        $('#appoint_id').val(data.id);
                      $(".bd-example-modal-xl").modal('show');
                    }
                  })
                }
              });

 
  });

</script>

<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <form id="cat-form" method="post" enctype="multipart/form-data" class="validate-form" action="<?php echo base_url('clinic-admin/appointment/add')?>" role="form" novalidate>
        <input type="hidden" name="appoint_id" id="appoint_id" value="">
        <div class="modal-content">
        <div class="modal-header">
          <h3 class="box-title"><?php echo trans('add-appointment') ?></h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <div class="row">
            <div class="col-md-6">
              <div class="old_patient_area plr-10">
                <div class="form-group">
                  <label><?php echo trans('patient') ?> <span class="text-danger">*</span></label>
                  <select name="patient_id" id="patients" class="form-control select2">
                    <option value=" "><?php echo trans('select') ?> </option>
                    <?php foreach ($patientses as $patient): ?>
                    <option  value="<?php echo html_escape($patient->id); ?>"><?= '<b>'.$patient->name.'</b> - '.$patient->mr_number.' - '.$patient->mobile;?></option>
                    <?php endforeach ?>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label><?php echo ('Dentist/Doctor Name') ?></label>
                <input type="text" name="doctor_name" id="doctor_name" class="form-control">
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
                <input type="text" class="form-control timepicker" name="start_time"  value="" autocomplete="off">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group plr-10">
                <label><?php echo trans('end-time') ?></label>
                <input type="text" class="form-control timepicker" name="end_time"  value="" autocomplete="off">
              </div>
            </div>
          </div>

          

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label><?php echo('Choose Chair') ?></label>
                <select name="chair_no" id="chair_no" class="form-control" autocomplete="off">
                 <option value=" "> Choose Chair</option>
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
                <option value=" ">Select Slot</option>
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
              <select name="slot_time" id="slot_time" class="form-control" autocomplete="off"> 
                <option value=" ">Select Slot Time</option>
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
            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary btn-lg ml-0 mt-10" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary btn-lg ml-0 mt-10"><i class="fa fa-check"></i> <?php echo trans('add-serial') ?></button>
          </div>
        </div>
      </form>
    </div>
  </div>