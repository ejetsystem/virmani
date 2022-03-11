<style>
    .table>thead>tr>th {
        border-top: 1px solid #c1c1c1  !important;
        padding: 0.4rem !important;
        background: #015ba9;
        color: #fff;
    }
    .table>tbody>tr>td {
        border-top: 1px solid #c1c1c1  !important;
        padding: 0.4rem !important;

    }
    .modal-header{
        background: #007bff;
        color:#fff;
    }
    .app_filtersblock {
        display: block;
        clear: both;
        margin-bottom: 20px;
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
                    </div>
                    <div class="box-body">
                        <div class="app_filtersblock">
                            <div class="row">

                                <div class="col-md-3 calender_filter">
                                    <form action="" method="post">
                                        Date 
                                        <input type="date" name="sdate" id="sdate" required="" value="<?php echo date('Y-m-d'); ?>" autocomplete="off">
                                    </form> 
                                </div>
                                <div class="col-md-3 calender_filter">
                                    Doctor 

                                    <select name="doctor_id" id="doctor_id_top" class="select select-initialized form-control" multiple="multiple">
                                        <?php foreach($doctors as $doctor){?>
                                        <option value="<?php echo $doctor->id;?>"><?php echo $doctor->name;?></option>
                                        <?php }?>
                                         
                                    </select>

                                </div>    

                                <div class="col-md-3 calender_filter">
                                    Chairs 
                                    <select name="chair_id" id="chair_id_top" class="form-control" multiple="">
                                        <option value="1">Chair 1</option>
                                        <option value="2">Chair 2</option>
                                        <option value="3">Chair 3</option>
                                        <option value="4">Chair 4</option>
                                        <option value="5">Chair 5</option>
                                    </select>
                                </div>    

                                <div class="col-md-2 pull-right text-right">
                                    <a href="javascript://" onclick="window.print();" class="btn btn-dgrey border_radius30"><i class="fas fa-print"></i> Print</a>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="pptm_chview" id="pptm_chview_block">

                                <table class="table table-striped_ table-bordered table-hover" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th width="16%">Slot Time</th>
                                            <th width="16%">Chair 1</th>
                                            <th width="16%">Chair 2</th>
                                            <th width="16%">Chair 3</th>
                                            <th width="16%">Chair 4</th>
                                            <th width="16%">Chair 5</th>
                                        </tr>
                                    </thead>
                                    <tbody> 
                                        <?php
                                        $range = range(strtotime("10:00"), strtotime("19:45"), 15 * 60);
                                        $now = strtotime(date('h:i A'));
                                        $date = date('y-m-d');
                                        foreach ($range as $time) {
                                            $list_time = strtotime(date("h:i A", $time));
                                            ?>
                                            <tr>
                                                <td><strong><?php echo date("h:i A", $time); ?></strong></td> 

                                                <td style="<?php echo ($now > $list_time) ? 'background:#ddd;' : '' ?>" onclick="<?php echo ($now > $list_time) ? 'alert_function();' : 'add_application(\'' . $date . '\', \'' . date("h:i A", $time) . '\' , 2);' ?>">
                                                    <a href="javascript://">Allot</a>
                                                </td> 
                                                <td style="<?php echo ($now > $list_time) ? 'background:#ddd;' : '' ?>" onclick="<?php echo ($now > $list_time) ? 'alert_function();' : 'add_application(\'' . $date . '\', \'' . date("h:i A", $time) . '\' , 2);' ?>">
                                                    <a href="javascript://">Allot</a>
                                                </td> 
                                                <td style="<?php echo ($now > $list_time) ? 'background:#ddd;' : '' ?>" onclick="<?php echo ($now > $list_time) ? 'alert_function();' : 'add_application(\'' . $date . '\', \'' . date("h:i A", $time) . '\' , 2);' ?>">
                                                    <a href="javascript://">Allot</a>
                                                </td> 
                                                <td style="<?php echo ($now > $list_time) ? 'background:#ddd;' : '' ?>" onclick="<?php echo ($now > $list_time) ? 'alert_function();' : 'add_application(\'' . $date . '\', \'' . date("h:i A", $time) . '\' , 2);' ?>">
                                                    <a href="javascript://">Allot</a>
                                                </td> 
                                                <td style="<?php echo ($now > $list_time) ? 'background:#ddd;' : '' ?>" onclick="<?php echo ($now > $list_time) ? 'alert_function();' : 'add_application(\'' . $date . '\', \'' . date("h:i A", $time) . '\' , 2);' ?>">
                                                    <a href="javascript://">Allot</a>
                                                </td> 
                                            </tr> 
<?php } ?>

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
        // alert(dates);
        $('#chair_no').val(chair1);
        $('#date-field-starttime1').val(dates);
        $('#start_time').val(time);
        $('.bd-example-modal-xl').modal('show');
    }
    $(document).ready(function () {
        $('#doctor_id_top,#chair_id_top').multiselect();
    });
</script>

<script>

    $('#doctor_id_top').change(function () {
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

            data: {doctor_id: doctor_ids, chair_id: chair_ids, sdate: sdate},

            success: function (data) {

                $('#pptm_chview_block').html(data);

            }

        });



    });





    $('#chair_id_top').change(function () {



        var doctor_ids = '';

        var chair_ids = '';

        //var doctor_id = $("#doctor_id_top").val();

        //var chair_id = $("#chair_id_top").val();

        var sdate = $("#sdate").val();



        $("#doctor_id_top option:selected").each(function ()

        {

            // alert($(this).val());

            doctor_ids += $(this).val() + ',';

        });

        // doctor_ids = doctor_ids.slice(0,-1);

        doctor_ids = doctor_ids.substring(0, doctor_ids.length - 1);



        if (doctor_ids == '') {

            doctor_ids = 'all';

        }





        $("#chair_id_top option:selected").each(function ()

        {

            // alert($(this).val());

            chair_ids += $(this).val() + ',';

        });

        // doctor_ids = doctor_ids.slice(0,-1);

        chair_ids = chair_ids.substring(0, chair_ids.length - 1);



        if (chair_ids == '') {

            chair_ids = 'all';

        }

        $.ajax({

            type: "POST",

            url: "<?php echo base_url();?>admin/appointmentappointments_function",

            data: {doctor_id: doctor_ids, chair_id: chair_ids, sdate: sdate},

            success: function (data) {



                $('#pptm_chview_block').html(data);

            }

        });

    });



    $('#go_cal').click(function () {

        // var doctor_id = $("#doctor_id_top").val();

        //var chair_id = $("#chair_id_top").val();



        var sdate = $("#sdate").val();

        var doctor_ids = '';

        var chair_ids = '';



        $("#doctor_id_top option:selected").each(function ()

        {

            // alert($(this).val());

            doctor_ids += $(this).val() + ',';

        });

        // doctor_ids = doctor_ids.slice(0,-1);

        doctor_ids = doctor_ids.substring(0, doctor_ids.length - 1);



        if (doctor_ids == '') {

            doctor_ids = 'all';

        }



        $("#chair_id_top option:selected").each(function ()

        {

            // alert($(this).val());

            chair_ids += $(this).val() + ',';

        });

        // doctor_ids = doctor_ids.slice(0,-1);

        chair_ids = chair_ids.substring(0, chair_ids.length - 1);



        if (chair_ids == '') {

            chair_ids = 'all';

        }



        $.ajax({

            type: "POST",

            url: "<?php echo base_url();?>admin/appointment/appointments_function",

            data: {doctor_id: doctor_ids, chair_id: chair_ids, sdate: sdate},

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



                    } else {



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

        $('#sdate').change(function () {
            //alert("ok");



            // var doctor_id = $("#doctor_id_top").val();

            //var chair_id = $("#chair_id_top").val();



            var sdate = $("#sdate").val();

            var doctor_ids = '';

            var chair_ids = '';



            $("#doctor_id_top option:selected").each(function ()

            {

                // alert($(this).val());

                doctor_ids += $(this).val() + ',';

            });

            // doctor_ids = doctor_ids.slice(0,-1);

            doctor_ids = doctor_ids.substring(0, doctor_ids.length - 1);



            if (doctor_ids == '') {

                doctor_ids = 'all';

            }



            $("#chair_id_top option:selected").each(function ()

            {

                // alert($(this).val());

                chair_ids += $(this).val() + ',';

            });

            // doctor_ids = doctor_ids.slice(0,-1);

            chair_ids = chair_ids.substring(0, chair_ids.length - 1);



            if (chair_ids == '') {

                chair_ids = 'all';

            }



            $.ajax({

                type: "POST",

                url: "http://sonaai.co/dental/admin/calendar/appointments_function/",

                data: {doctor_id: doctor_ids, chair_id: chair_ids, sdate: sdate},

                success: function (data) {



                    $('#pptm_chview_block').html(data);

                }

            });



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



<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form id="cat-form" method="post" enctype="multipart/form-data" class="validate-form" action="<?php echo base_url('clinic-admin/appointment/add') ?>" role="form" novalidate>
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
                                            <option  value="<?php echo html_escape($patient->id); ?>"><?= '<b>' . $patient->name . '</b> - ' . $patient->mr_number . ' - ' . $patient->mobile; ?></option>
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
                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-lg ml-0 mt-10" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary btn-lg ml-0 mt-10"><i class="fa fa-check"></i> <?php echo trans('add-serial') ?></button>
                </div>
            </div>
        </form>
    </div>
</div>