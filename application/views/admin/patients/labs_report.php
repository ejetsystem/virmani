 
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#uploadModal"><i class="fa fa-plus"></i> ADD LAB</button>
<table class="table table-bordered table-hover datatable">
    <thead class="table-primary">
        <tr>
            <th scope="col">Date</th>
            <th scope="col">Test Name</th>
            <th scope="col">Price</th>
            <th scope="col">Report</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
     
    <tbody>
        <?php
        
        if (!empty($patient_tests)) {
            foreach ($patient_tests as $patient_tests_key => $patient_tests_value) {
               
                ?>  
        <tr id="row_<?php echo $patient_tests_value['id']; ?>">
                    <td><?php echo date('d-m-Y', strtotime($patient_tests_value['report_date'])) ?></td>
                    <td><?php echo $patient_tests_value["test_name"] ?></td>
                    <td><?php echo $patient_tests_value["test_price"] ?></td>
                    <td>
                        <?php
                        if ($patient_tests_value['report_file'] != '') {
                            ?>
                            <button onclick="showOpdPatientScan('<?php echo $patient_tests_value['id']; ?>');" class="btn btn-primary">View Report</button>
                            <?php
                        }
                        ?>
                    </td>
                    <td class="text-right">
                        <a data-val="Category"  data-id="<?php echo $patient_tests_value['id']; ?>"  href="<?php echo base_url(); ?>admin/patients/deleteOpdPatientLab/<?php echo $patient_tests_value['patient_id']; ?>/<?php echo $patient_tests_value['id']; ?>" class="on-default remove-row delete_item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                        <a href="#" onclick="viewDetail_test('<?php echo $patient_tests_value['id'] ?>', '<?php echo $patient_tests_value["patient_id"]; ?>')" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Print" >
                            <i class="fa fa-print"></i></a>
                    </td>
                </tr>
            <?php
            }
        }
        ?> 
    </tbody> 
</table>


<!-- Modal -->
<div id="uploadModal" class="modal fade" role="dialog">
    <div class="modal-dialog  modal-xl">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">ADD LAB</h4>
            </div>
            <form id="form_lab" method='post' action='' enctype="multipart/form-data">
                <div class="modal-body">
                    <!-- Form -->

                    <div class="row">
                        <div class="col-md-12" style="color:red"><p id="error"></p></div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Date</label> 
                                <input type="text" name="report_date" class="form-control datepicker date" id="report_date" autocomplete="off">  
                                <input type="hidden" value="<?php echo $patients[0]['id'] ?>" name="patient" class="form-control" id="patient" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Test Name</label><small class="req"> *</small>
                                <select class="form-control" name="test_name" onchange="gettestprice(this.value)" required="">
                                    <option value="">Select Test Name</option>
                                    <?php
                                    foreach ($lab_tests as $lab) {
                                        ?>
                                        <option value="<?php echo $lab['test_name'] . "-" . $lab['price']; ?>"><?php echo $lab['test_name']; ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Price</label><small class="req"> *</small> 
                                <input type="text" name="test_price" class="form-control" id="test_price" />                                
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Upload Report (Format: jpg|jpeg|png)</label> 
                                <input type='file' multiple="" name='file[]' id='file' class='form-control' ><br>

                            </div>
                        </div>
                    </div>


                </div>
                <div class="modal-footer float-right">
                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="submit_btn" value='Save' id='btn_upload'>Save changes</button>
                </div>
            </form>
        </div>

    </div>
</div>

<script>
     
    $(document).ready(function () {
        $('#submit_btn').click(function () {

            var fd = new FormData($('#form_lab')[0]);
            var files= document.getElementById('file').files
            for (let i = 0; i < files.length; i++) {
                fd.append('file['+i+']', files[i]);
            }
            fd.append('csrf_test_name', csrf_token);

            // AJAX request
            $.ajax({
                url: '<?php echo base_url(); ?>admin/patients/add_lab',
                type: 'post',
                data:  fd, 
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
                        //toastr.error(message);
                       
                        errorMsg(message);
                    } else {
                        successMsg(data.message);
                       window.location.reload(true);
                    }
                },
                error: function () {
                    //  alert("Fail")
                }
            });
        });
    });

    function gettestprice(a)
    {

        var res = a.split("-");
        $("#test_price").val(res[1]);
    }
function showOpdPatientScan(id){
    event.preventDefault();
    var items = [];
    $.ajax({
             url: '<?php echo base_url(); ?>admin/patients/get_labReportImage',
            type:'POST',
            dataType: 'json',
            data: {
            postid : id,
            csrf_test_name: csrf_token,
        },
            success: function(response){
                console.log(response.data.length);
                for(var i =0;i < response.data.length;i++){
                    items.push({
                        src: response.data[i]['src'],
                        title: response.data[i]['title'],
                    });
                }
            },
            complete: function() {
              $.magnificPopup.open({
                items: items,
                type: 'image',
                gallery: { enabled: true }
            });
         }
    });    
}
</script>

