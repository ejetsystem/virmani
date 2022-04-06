// All Ready Function

$(document).ready(function(){



});


// Custom Function List
function findEndTime(){
	var start_time = $("#start_time").val();
	var slot_time = $("#slot_type").val();
	var futureTime = moment.utc(start_time,'HH:mm').add(slot_time,'minute').format('HH:mm');
	$("#end_time").val(futureTime);

	show_to_user = moment.utc(start_time,'hh:mm').add(slot_time,'minute').format('hh:mm A');
	$("#show_end_time_to_user").val(show_to_user);

}

function getPatientPhone(id){
	var post_data = {
		'id' :id,
	  'csrf_test_name' : csrf_token
	};
	$.ajax({
		url: base_url+"clinic-admin/patients/get-phone/",
		type: "Post",
		data: post_data,
		success: function (data) {
			$("#phone").val(data);
		}
	});
}

// Change Appointment Status
  function changeAppointmentStatus(current_status,appointment_id,appointment_type=''){
    var post_data = {
      'id' :appointment_id,
      'status' :current_status,
      'appointment_type' :appointment_type,
      'csrf_test_name' : csrf_token
    };

    if(appointment_type=='shift_appointment'){
      date = $("#date_field").val();
      start_time = $("#start_time").val();
      end_time = $("#show_end_time_to_user").val();
      slot_type = $("#slot_type").val();
      var post_data = {
        'id' :appointment_id,
        'status' :current_status,
        'appointment_type' :appointment_type,
        'date' :date,
        'slot_type' :slot_type,
        'start_time' :moment(start_time, ["HH:mm"]).format("HH:mm:ss"),
        'end_time' :moment(end_time, ["hh:mm a"]).format("HH:mm:ss"),
        'csrf_test_name' : csrf_token
      }; 
      console.log(post_data);
      $.ajax({
        url: base_url+"clinic-admin/appointment/change-appointment-status",
        type: "Post",
        data: post_data,
        success: function (data) {
          location.reload();
        }
      });
    }
    else{
      $.ajax({
        url: base_url+"clinic-admin/appointment/change-appointment-status",
        type: "Post",
        data: post_data,
        success: function (data) {
          location.reload();
        }
      });
    }

  }

  // View Appointment
  function view_event(appointment_id){
     
    var post_data = {
      'id' :appointment_id,
      'csrf_test_name' : csrf_token
    };
    var more_buttons = '<center class="text-white"><a onclick="changeAppointmentStatus(1,'+appointment_id+',`shift_appointment`)" class="btn btn-primary btn-lg mr-30">Shift Appointment</a> <a onclick="changeAppointmentStatus(2,'+appointment_id+')" class="btn btn-success btn-lg mr-30">Complete Appointment</a> <a onclick="changeAppointmentStatus(3,'+appointment_id+')" class="btn btn-info btn-lg mr-30">Cancel Appointment</a> <a data-dismiss="modal" class="btn btn-danger btn-lg mr-30">Close</a></center>';

    $.ajax({
      url: base_url+"admin/appointment/fetch_particular_appointment",
      type: "POST",
      data: post_data,
      success: function (data) {
        console.log(data); 
        $('#inlineRadio3').removeAttr("checked");
        $('#inlineRadio4').removeAttr("checked");

        $('#inlineRadio3').attr('disabled', true);
        $('#inlineRadio4').attr('disabled', true);
        
        var timeStarting = moment(data['start_time'], ["HH:mm:ss"]).format("HH:mm");
        $("#old_new_patient").hide();
        $("#add_serial").hide();
        
        //$('#doctors').select2('val',data['doctor_id']);
        $('#doctors').val(data['doctor_id']).trigger('change');
        $('#doctors').attr('disabled', true);
        
        $('#date_field').val(data['date']);
        // $('#date_field').attr('disabled', true);
        
        $('#start_time option[value="'+timeStarting+'"]').attr("selected", "selected");
        $('#slot_type').val(data['slot_time']);
        $('#end_time').val(data['end_time']);
        
        $('#slot').val(data['number_of_slot']);
        $('#slot').attr('disabled', true);;
        
        $('#cause').val(data['cause']);
        $('#cause').attr('disabled', true);
        
        $('#chair_no').val(data['chair']);
        $('#chair_no').attr('disabled', true);

        if(data['type']=="online"){
          $('#inlineRadio3').prop('checked', true);
        }
        
        if(data['type']=="offline"){
          $('#inlineRadio4').prop('checked', true);
        }

        //$('#patients').select2('val',data['patient_id']);
        $('#patients').val(data['patient_id']).trigger('change');
        $('#patients').attr('disabled', true);

        $('#phone').val(data['patient_phone']);
        $('#phone').attr('disabled', true);

        $('#extra_notes').val(data['extra_notes']);
        $('#extra_notes').attr('disabled', true);
        findEndTime();
        
        $('#add_more_button').html(more_buttons);
        $('#add-appointment-modal').modal('show');
      }
    });
  }

  $(document).on('hide.bs.modal', function(){
    $('#inlineRadio3').removeAttr("disabled");
    $('#inlineRadio4').removeAttr("disabled");

    $("#old_new_patient").show();
    

    // $('#doctors').select2('val','');
    $('#doctors').val("select").trigger('change.select2');
    $('#doctors').removeAttr("disabled");

    // alert(moment().format("HH:mm"));
    $('#start_time').val("12:00");
    $('#start_time').removeAttr("disabled");

    $('#slot_type').val("15");
    $('#slot_type').removeAttr("disabled");

    $('#end_time').val("");
    $('#end_time').removeAttr("disabled");


    $('#slot').val("1");
    $('#slot').removeAttr("disabled");

    $('#cause').val("");
    $('#cause').removeAttr("disabled");

    $('#chair_no').val("1");
    $('#chair_no').removeAttr("disabled");

    $('#inlineRadio3').prop('checked', true);
    $('#inlineRadio3').removeAttr("disabled");
    $('#inlineRadio4').prop('checked', true);
    $('#inlineRadio4').removeAttr("disabled");

    // $('#patients').select2('val',"");
    $('#patients').val("select").trigger('change.select2');
    $('#patients').removeAttr("disabled");

    $('#phone').val("");
    $('#phone').removeAttr("disabled");

    $('#extra_notes').val("");
    $('#extra_notes').removeAttr("disabled");

    add_button = `<button type="submit" id="add_serial" class="btn btn-primary btn-lg ml-0 mt-10"><i class="fa fa-check"></i> Add Serial</button>`;
    $('#add_more_button').html(add_button);

    $('#date_field').val(moment().format('YYYY-MM-DD'));
    $('#date_field').removeAttr("disabled");
    findEndTime();
  });