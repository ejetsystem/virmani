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


function getMilkvalue(a)
{
    if ($('#chkmilk').is(":checked"))
    {
        $.ajax({
            url: base_url + 'admin/patients/getteeth_edit',
            method: 'post',
            data: {csrf_test_name: csrf_token},
            success: function (response) {
                $("#loadteeeth_edit").html(response);
            }
        });
        $.ajax({
            url: base_url + 'admin/patients/getteethdata_edit',
            method: 'post',
            data: {csrf_test_name: csrf_token},
            success: function (response) {
                $("#container").html(response);
            }
        });

    } else
    {
        $.ajax({
            url: base_url + 'admin/patients/getteeth_per_edit',
            method: 'post',
            data: {csrf_test_name: csrf_token},
            success: function (response) {
                $("#loadteeeth_edit").html(response);
            }
        });
        $.ajax({
            url: base_url + 'admin/patients/getteethdata_per_edit',
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

function getvalue12(a, b, c)
{
    $("#job_name1_edit").val(a);
    $("#job_id1_edit").val(b);
    $("#treatment_amount1").val(c);
}

function getRecord_teechinfo(id, b, img1)
{
  
    $('#teeth_id').val(id);
    $('#teeth_nte').html(b);
    
    $('#teethsid').val(id);
    $.ajax({
        url: base_url + 'admin/patients/getteethnumber',
        type: "POST",
        data: {teethid: id,csrf_test_name: csrf_token},
        success: function (data) {

           // var tcode = data;
            document.getElementById('tooth_no_note_view').innerHTML = data;
            document.getElementById('tooth_no_note').value = data;
            
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
    var patient_id = $('#patient_id').val();
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
            location.replace(base_url +'clinic-admin/patients/view/'+patient_id+'#prescription');
            location.reload();
           // treatment_edit(data.trid,data.ttype);
        }
        },
        error: function () {
        }
    });
}));

// //Update New teeth
// $("#form_updatenotes_new").on('submit', (function (e) { 
//     // e.preventDefault();
//     var patient_id = $('#patient_id').val();
//     $.ajax({
//         url: base_url + 'admin/patients/update_note_new',
//         type: "POST",
//         data: new FormData(this),
//         dataType: 'json',
//         contentType: false,
//         cache: false,
//         processData: false,
//         success: function (data) {
//         if (data.status == "fail") {
//             var message = "";
//             $.each(data.error, function (index, value) {
//                 message += value;
//             });
//             errorMsg(message);
//         } else {
//             location.replace(base_url +'clinic-admin/patients/view/'+patient_id+'#prescription');
//             location.reload();
//            // treatment_edit(data.trid,data.ttype);
//         }
//         },
//         error: function () {
//         }
//     });
// }));

  function isNumberKey(evt)
    {
      var charCode = (evt.which) ? evt.which : event.keyCode;
      if (charCode != 46 && charCode != 189 && charCode > 31
        && (charCode < 48 || charCode > 57))
         return false;

      return true;
    }
    function discount(){

            var x=document.getElementById("treatment_amount").value;

            var y=document.getElementById("treatment_courtesy").value;

            var z=document.getElementById("disamt").value;
            
            if(y=='dispercentage'){
                var newval=z/100;
                var newx=x-newval;
                if(newx>=0){
                    $("#treatment_courtesy").val(newx); 
                }

            }else{
                var newy=x-y;
                if(newy>=0){
                $("#treatment_courtesy_total").val(newy);
                
                }
                else{                                       
                   alert("You can't give discount"); 
                    
                }
            }

        }
        function addcomp(id,complaint_type)
        {   
           
            $('select[id="treatment_type"] option[value="' + complaint_type + '"]').attr("selected", "selected");
            $('html, body').animate({
                        scrollTop: $("#disp_div").offset().top
                    }, 2000);
        }
        
        function tethdelete($teethdata,pid){
        //alert($teethdata);
        var did = $teethdata;

        if (confirm('Delete Confirm?')) {

            $.ajax({

                url: base_url + 'admin/patients/deleteteeth',

                type: "POST",

                data: {id: did,pid: pid,csrf_test_name: csrf_token},

                dataType: 'json',

                success: function (data) {
                    
                    //successMsg('Record Deleted Successfully');
                    $('body').append("<div class='alert alert-success'><i class='fa fa-check'></i> Order successfully added!</div>");
                    
                       
 
                }

            })

        }

    }
        
    function gettecchnumbers_treatment(a)
    { 
        $.ajax({
            url: base_url + 'admin/patients/getteethlist_treatment',
            type: "POST",
            data: {teeth_cat_id:a,csrf_test_name: csrf_token},
            success: function (data) {
        $("#container").html(data);

        } 
        })
    }

    function gettecchnumbers_treatment_edit(a)
    { 
        $.ajax({
            url: base_url + 'admin/patients/getteethlist_treatment_edit',
            type: "POST",
            data: {teeth_cat_id:a,csrf_test_name: csrf_token},
            success: function (data) {
        $("#teeth_category_edit").html(data);

        } 
        })
    }

     

 