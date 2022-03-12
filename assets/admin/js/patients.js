var base_url = $('#base_url').val();


$(document).ready(function (e) {

        $("#formaddtreatment").on('submit', (function (e) { 

            e.preventDefault();
            $.ajax({
                url: base_url+'admin/patients/form_treatmentplan',
                type: "POST",
                data: new FormData(this),
                dataType: 'json',
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {
                    if (data.status == "fail") {
                        var message = "";
                        $.each(data.error, function (index, value) {
                            message += value;
                        });
                        errorMsg(message);
                    } else {
                        var type = data.type;
                        successMsg(data.message);
                     $.ajax({
                        url: base_url+'admin/patients/getteethinfo',
                        type: "POST",
                        data: {patientid:data.pid,workdone_id:0,treatmentplans_id:0},
                        success: function (data) {
                            //$("#teeth_data_div").show();
                            $("#loadtoothinfo").html(data);
                            $("#loadtoothinfo_treatment").html(data);
                            location.replace(base_url+'admin/patients/profile/120#prescription');
                            location.reload();
                            if(type=='chief_complaint')
                            {
                                $('html, body').animate({
                                    scrollTop: $("#show_tbl").offset().top
                                }, 2000);
                            }
                            else if(type=='other_findings')
                            {
                                $('html, body').animate({
                                    scrollTop: $("#show_tbl1").offset().top
                                }, 2000);
                            }
                            else if(type=='existing')
                            {
                                $('html, body').animate({
                                    scrollTop: $("#show_tbl2").offset().top
                                }, 2000);
                            }
                            
                        }
                    })

                    }
                },
                error: function () {
                   
                }
            });
        
        }));
    });


function getDatavalue(a)
{
    if ($('#chkdiv').is(":checked"))
    {
        $.ajax({
            url: base_url + 'admin/patients/getteeth',
            method: 'post',
            data: {csrf_test_name: csrf_token},
            success: function (response) {
                $("#loadteeeth").html(response);
            }
        });
        $.ajax({
            url: base_url + 'admin/patients/getteethdata',
            method: 'post',
            data: {csrf_test_name: csrf_token},
            success: function (response) {
                $("#container").html(response);
            }
        });

    } else
    {
        $.ajax({
            url: base_url + 'admin/patients/getteeth_per',
            method: 'post',
            data: {csrf_test_name: csrf_token},
            success: function (response) {
                $("#loadteeeth").html(response);
            }
        });
        $.ajax({
            url: base_url + 'admin/patients/getteethdata_per',
            method: 'post',
            data: {csrf_test_name: csrf_token},
            success: function (response) {
                $("#container").html(response);
            }
        });
    }
}


function getvalue1(a, b, c)
{
    $("#job_name1").val(a);
    $("#job_id1").val(b);
    $("#treatment_amount1").val(c);
}

function getRecord_teechinfo(id, b, img1)
{
 
    //var img1 = base_url + 'uploads/teeth_images/' + img1;
    //var doc = document.getElementById("treatment_doctor").value;
    //var pid = document.getElementById("patient_id").value;
    //var tcode = document.getElementById("treatmentcode").value;
    //alert(tcode);
    //$('#trcode').val(tcode);
//    if (tcode)
//    {
//        document.getElementById("shw").style.display = "block";
//    }
//    document.getElementById('trcode').innerHTML = tcode;

    //$('#tids1').val(tcode);
    $('#teeth_id').val(id);
    //$('#doc_id').val(doc);
    //$('#tooth_patient_id').val(pid);
    $('#teeth_nte').html(b);
    //$('#workteeth').html('<img src=' + img1 + '>');

    $('#teethsid').val(id);
    $.ajax({
        url: base_url + 'admin/patients/getteethnumber',
        type: "POST",
        data: {teethid: id,csrf_test_name: csrf_token},
        success: function (data) {

            var tcode = data;
            document.getElementById('shw_tooth_number').innerHTML = tcode;
        }
    })
    document.getElementById("show_toothnumber").style.display = "block";
    //holdModal('add_teethinfo');
}

function getDatavalue_wr(a)
{
    if ($('#chkdiv1').is(":checked"))
    {

        $.ajax({
            url: base_url + 'admin/patients/getteeth_new',
            method: 'post',
             data: {csrf_test_name: csrf_token},
            success: function (response) {
                $("#loadteeeth_wk").html(response);
            }
        });
        $.ajax({
            url: base_url + 'admin/patients/getteethdata_new',
            method: 'post',
             data: {csrf_test_name: csrf_token},
            success: function (response) {
                $("#container_new").html(response);
            }
        });

    } else
    {

        $.ajax({
            url: base_url + 'admin/patients/getteeth_per_new',
            method: 'post',
             data: {csrf_test_name: csrf_token},
            success: function (response) {
                $("#loadteeeth_wk").html(response);
            }
        });
        $.ajax({
            url: base_url + 'admin/patients/getteethdata_per_new',
            method: 'post',
             data: {csrf_test_name: csrf_token},
            success: function (response) {
                $("#container_new").html(response);
            }
        });


    }
}

//Add New teeth
$("#form_addnotes_new").on('submit', (function (e) { 
    e.preventDefault();
    $.ajax({
        url: base_url + 'admin/patients/add_note_new',
        type: "POST",
        data: new FormData(this),
        dataType: 'json',
        contentType: false,
        cache: false,
        processData: false,
        success: function (data) {
        if (data.status == "fail") {
            var message = "";
            $.each(data.error, function (index, value) {
                message += value;
            });
            errorMsg(message);
        } else {

            treatment_edit(data.trid,data.ttype);
        }
        },
        error: function () {
        }
    });
}));