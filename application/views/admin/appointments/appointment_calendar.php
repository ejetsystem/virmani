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
                  var more_buttons = '<center class="text-white"><a onclick="changeAppointmentStatus(1,'+id+')" class="btn btn-primary btn-lg mr-30">Missed Appointment</a> <a onclick="changeAppointmentStatus(2,'+id+')" class="btn btn-success btn-lg mr-30">Complete Appointment</a> <a onclick="changeAppointmentStatus(3,'+id+')" class="btn btn-info btn-lg mr-30">Cancel Appointment</a> <a data-dismiss="modal" class="btn btn-danger btn-lg mr-30">Close</a></center>';
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
                        $('#inlineRadio3').removeAttr("checked");
                        $('#inlineRadio4').removeAttr("checked");

                        $('#inlineRadio3').attr('disabled', true);
                        $('#inlineRadio4').attr('disabled', true);
                        
                        var timeStarting = moment(data.start_time, ["HH:mm:ss"]).format("HH:mm");
                        $("#old_new_patient").hide();
                        $("#add_serial").hide();
                        
                        $("#doctors").select2("val", '');
                        $('#doctors').val(data.doctor_id).trigger("change");;
                       // $('#doctors').select2('val',data.doctor_id);
                        $('#doctors').attr('disabled', true);
                        
                        $('#date_field').val(data.date);
                        $('#date_field').attr('disabled', true);
                        
                        $('#start_time option[value="'+timeStarting+'"]').attr("selected", "selected");
                        $('#slot_type').val(data.slot_time);
                        $('#end_time').val(data.end_time);
                        
                        $('#slot').val(data.number_of_slot);
                        $('#slot').attr('disabled', true);;
                        
                        $('#cause').val(data.cause);
                        $('#cause').attr('disabled', true);
                        
                        $('#chair_no').val(data.chair);
                        $('#chair_no').attr('disabled', true);

                        if(data.type=="online"){
                          $('#inlineRadio3').prop('checked', true);
                        }
                        
                        if(data.type=="offline"){
                          $('#inlineRadio4').prop('checked', true);
                        }
                        $("#patients").select2("val", '');
                        $('#patients').val(data.patient_id).trigger("change");;
                        $('#patients').attr('disabled', true);

                        $('#phone').val(data.patient_phone);
                        $('#phone').attr('disabled', true);

                        $('#extra_notes').val(data.extra_notes);
                        $('#extra_notes').attr('disabled', true);
                        findEndTime();
                        
                        $('#add_more_button').html(more_buttons);
                        $('#add-appointment-modal').modal('show');
                      //   $('#doctor_name').val(data.doctor_name);
                      //   $("#patients").select2("val", data.patient_id);
                      //   $('#chair_no option[value="'+data.chair+'"]').attr("selected", "selected");
                      //   $('#slot option[value="'+data.number_of_slot+'"]').attr("selected", "selected");
                      //   $('#cause').val(data.cause);
                      //   $('#slot_time option[value="'+data.slot_time+'"]').attr("selected", "selected");
                      //   $('#extra_notes').val(data.extra_notes);
                      //   $('#appoint_id').val(data.id);
                      // $("#add-appointment-modal").modal('show');
                    }
                  })
                }
              });

 
  });

</script>