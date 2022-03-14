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
			console.log(data);
			$("#phone").val(data);
		}
	});
}

// Change Appointment Status
  function changeAppointmentStatus(current_status,appointment_id){
    var post_data = {
      'id' :appointment_id,
      'status' :current_status,
      'csrf_test_name' : csrf_token
    };

    $.ajax({
      url: base_url+"clinic-admin/appointment/change-appointment-status",
      type: "Post",
      data: post_data,
      success: function (data) {
        location.reload();
      }
    });

  }


  $(document).on('hide.bs.modal', function(){
    $('#inlineRadio3').removeAttr("disabled");
    $('#inlineRadio4').removeAttr("disabled");

    $("#old_new_patient").show();
    

    // $('#doctors').select2('val','');
    $('#doctors').val(1).trigger('change.select2');
    $('#doctors').removeAttr("disabled");

    $('#date_field').val("");
    $('#date_field').removeAttr("disabled");

    $('#start_time').val("");
    $('#start_time').removeAttr("disabled");

    $('#slot_type').val("15");
    $('#slot_type').removeAttr("disabled");

    $('#end_time').val("");
    $('#end_time').removeAttr("disabled");


    $('#slot').val("1");
    $('#slot').removeAttr("disabled");

    $('#cause').val("");
    $('#cause').removeAttr("disabled");

    $('#chair_no').val("");
    $('#chair_no').removeAttr("disabled");

    $('#inlineRadio3').prop('checked', true);
    $('#inlineRadio3').removeAttr("disabled");
    $('#inlineRadio4').prop('checked', true);
    $('#inlineRadio4').removeAttr("disabled");

    // $('#patients').select2('val',"");
    $('#patients').val(1).trigger('change.select2');
    $('#patients').removeAttr("disabled");

    $('#phone').val("");
    $('#phone').removeAttr("disabled");

    $('#extra_notes').val("");
    $('#extra_notes').removeAttr("disabled");
    findEndTime();

    $('#add_more_button').html('<button type="submit" id="add_serial" class="btn btn-primary btn-lg ml-0 mt-10"><i class="fa fa-check"></i> <?php echo trans(add-serial) ?></button>');
  });