// All Ready Function

$(document).ready(function(){



});


// Custom Function List
function findEndTime(){
	var start_time = $("#start_time").val();
	var slot_time = $("#slot_type").val();
	var futureTime = moment.utc(start_time,'HH:mm').add(slot_time,'minute').format('HH:mm');
	$("#end_time").val(futureTime);

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

