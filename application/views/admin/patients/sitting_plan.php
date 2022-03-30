<style>
    .table{white-space: nowrap;}
</style>
<div style="border:solid 1px #ddd; padding:10px;" id="cont">
    <h4 class="form_title">Sitting Plan</h4>
    <div class="table-responsive">
        <table class="table table-bordered table-hover datatable">
            <thead>
                <tr class="success table-info">
                    <th scope="col">S.No</th>
                    <th scope="col">Date</th>
                    <th scope="col">Sitting</th>
                    <th >&nbsp;</th>
                    <th scope="col">Tooth No</th>
                    <th scope="col">Doctor Name</th>
                    <th scope="col">Notes & Diagnosis</th>
                    <th scope="col">Jobs</th>
                    <th scope="col">Estimate</th>
                    <th scope="col">Action</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
//        echo '<pre>'; 
//        print_r($sitting_plan_list);

                if (!empty($sitting_plan_list)) {
                    $count = 1;
                    foreach ($sitting_plan_list as $treat) {

                        if ($treat['type'] == 'chief_complaint') {
                            $cls = 'chief_complaint';
                            $clr = 'background-color:#ffeaf4;';
                        } else if ($treat['type'] == 'other_findings') {
                            $cls = 'other_findings';
                            $clr = 'background-color:#dbf3dc;';
                        } else {
                            $cls = 'existing';
                            $clr = 'background-color:#bed6e0;';
                        }
                        $dt = date('d F ,Y', strtotime($treat["date"]));
                        ?>
                        <tr class="<?php echo $cls; ?>" style="<?php echo $clr; ?>">
                            <td><?php echo $count; ?></td>
                            <td><?php echo $dt; ?></td>
                            <td class="doodleEdit_ editDescr" ondblclick="updateVal(this)" id="treat_id_<?php echo $treat["id"]; ?>" attr_treat_id="<?php echo $treat["id"]; ?>">
                                <?php echo ($treat['sitting']) ? $treat['sitting'] : ""; ?>
                            </td>
                            <td>
                                <?php if (empty($treat['app_treat_id'])) { ?>
                                    <a href="<?php echo base_url(); ?>clinic-admin/appointment/chairView?treatment_patient=<?php echo $patients[0]['id']; ?>&treatmentID=<?php echo $treat['id']; ?>" class="btn btn-purple btn-sm border_radius5 mb_5" >Appointments</a>
                                <?php } else { ?>
                                    <a href="javascript:void(0);" class="btn btn-purple btn-sm border_radius5 mb_5" >Booked</a>
                                <?php } ?>
                            </td>
                            <td><?php echo '(' . $treat['teeth_number'] . ') ' . $treat['teeth_note']; ?></td>
                            <td><?php echo $treat['doctor_name']; ?></td>
                            <td><p>  <?php echo $treat['toth_note']; ?></td>
                            <td><?php echo $treat['job']; ?></td>
                            <td><?php echo $treat['amount']; ?></td>
                            <td class="trplan_actions worktra"> 
                                <?php if ($treat["status"] == 0 || $treat["status"] == 2) { ?>


                                    <a href="javascript://" class="btn btn-purple btn-sm border_radius5 mb_5" onclick="workdoneselect(<?php echo $treat['id']; ?>, '<?php echo $tooth_numbers->teeth_number; ?>', '<?php echo $teethinfo->type; ?>');" >Work Done</a> 
                                    <a href="javascript://" class="btn btn-default1 btn-xs" onclick="treatment_edit('<?php echo $treat['id']; ?>', '<?php echo $teethinfo->type; ?>', '<?php echo $tooth_numbers->id; ?>', '<?php echo $teethinfo->toth_note; ?>', '<?php echo $teethinfo->id; ?>');"><i class="fa fa-edit"></i></a> 
                                    <a href="javascript://" class="btn btn-default1 btn-xs" onclick="deletetratmentjob(<?php echo $treat['id']; ?>);" ><i class="fa fa-trash"></i></a>
                                <?php } else { ?>
                                   <!--  <a href="javascript://" onclick="treatment_view(<?php echo $treat['id']; ?>);">View</a> -->
                                    <a href="javascript://" class="btn btn-default btn-xs" onclick="view_workdone(<?php echo $treat['workdone_id']; ?>);"><i class="fa fa-eye"></i></a>
                                    <a href="<?php echo base_url(); ?>admin/patient/viewprescription/<?php echo $treat['workdone_id']; ?>/<?php echo $id; ?>" class=""><i class="fa fa-print"></i></a>
                                <?php } ?>
                            </td>
                            <td><?php
                                if ($treat["status"] == 0) {
                                    echo "Observation";
                                } else if ($treat["status"] == 1) {
                                    echo "Completed";
                                } else {
                                    echo "Incompleted";
                                }
                                ?>
                            </td>
                        </tr>
                        <?php
                        $count++;
                    }
                }
                ?>
            </tbody> 
        </table>
    </div>

    <div class="row mb_2">
        <div class="col-md-3">
            <h5><strong>Completed Jobs : <?php echo $completed; ?></strong></h5>
        </div>
        <div class="col-md-3">
            <h5><strong>Pending Jobs : <?php echo $$pending; ?></strong></h5>
        </div>
    </div> 

</div>

<script>
    $(function () {
        $(".doodleEdit").dblclick(function (e) {
            e.stopPropagation();
            var currentEle = $(this);
            var value = $(this).html().trim();
            //alert(value);
            updateVal(currentEle, value);
        });
    });

    function updateVal(currentEle) {
        var value = $(currentEle).html().trim();
        $(currentEle).html('<input  class="thVal" type="text" value="' + value + '" />');
        //var mode = $(currentEle).attr('class').split(' ')[1];
        var trtid = $(currentEle).attr('attr_treat_id');

        $(".thVal").focus();

        $(".thVal").keyup(function (event) {
            var org_val = $(".thVal").val();
            if (event.keyCode == 13) {
                $('#treat_id_' + trtid).html($(".thVal").val().trim());

                $.ajax({
                    url: '<?php echo base_url(); ?>admin/patients/add_sitting',
                    type: "POST",
                    data: {patient_id: '<?php echo $patients[0]['id'];?>',trtid: trtid, sitting: org_val, csrf_test_name: csrf_token},
                    success: function (data) {
                        if (data.status == "fail") {
                            var message = "";
                            $.each(data.error, function (index, value) {
                                message += value;
                            });
                            
                        } else {
                            location.reload();
                            //successMsg(data.message);
                            $.ajax({
                                url: '<?php echo base_url(); ?>admin/patients/changestatus',
                                type: "POST",
                                data: {patient_id: trtid, csrf_test_name: csrf_token},
                                success: function (data) {
                                    //  $('#tratmenthistory').html(data); 
                                    
                                }
                            });
                            $.ajax({
                                url: '<?php echo base_url(); ?>admin/patients/getteethinfo',
                                type: "POST",
                                data: {patientid: trtid, workdone_id: 0, treatmentplans_id: 0},
                                success: function (data) {
                                    // $("#loadtoothinfo").html(data);
                                    // $("#loadtoothinfo_treatment").html(data);
                                    // location.replace('<?php echo base_url(); ?>admin/patient/profile/<?php echo $id ?>#prescription');
                                    /*location.reload();*/

                                    document.getElementById("cont").style.display = "block";

//                        $('html, body').animate({
//                            scrollTop: $("#tratmenthistory").offset().top
//                        }, 2000);
                                }
                            })
                        }
                    },
                    error: function () {
                    }
                });
            }
        });

        $(document).click(function () {
            var id = $(".thVal").parent().attr('id');
            $('#' + id).html($(".thVal").val());

        });
    }
</script>





