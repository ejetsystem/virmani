 
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#uploadModal"><i class="fa fa-plus"></i> ADD PAYMENT</button>
<div class="table-responsive">
<table class="table table-bordered table-hover datatable">
    <thead class="table-primary">
        <tr>
            <th scope="col">Date</th>
            <th scope="col">Description</th>
            <th scope="col">Debit</th>
            <th scope="col">Credit</th>
            <th scope="col">Balance</th>
            <th scope="col">Action</th>
        </tr>
    </thead>

    <tbody>
        <?php
        if (!empty($payments)) {
            foreach ($payments as $key => $payment) {
                //print_r($value);
                ?>  
                <tr id="row_<?php echo $payment['id']; ?>">
                    <td><?php echo date('d M, Y', strtotime($payment['created_at'])) ?></td>
                    <td><?php echo $payment['description']?></td>
                    <td><?php echo $payment["debit_amount"];?></td>
                    <td><?php echo $payment["credit_amount"] ?></td>

                    <td><?php echo $payment['balance']; ?></td>
                    <td class="text-center">
                        <a data-val="Category"  data-id="<?php echo $payment['id']; ?>"  href="<?php echo base_url(); ?>admin/patients/deleteOpdPatientScan/<?php echo $payment['patient_id']; ?>/<?php echo $payment['id']; ?>" class="on-default remove-row delete_item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                        <a href="#" onclick="viewDetail_scan('<?php echo $payment['id'] ?>', '<?php echo $payment["patient_id"]; ?>')" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Print" >
                            <i class="fa fa-print"></i>
                        </a>


                    </td>
                </tr>
            <?php
            }
        }
        ?> 

    </tbody> 
</table>
</div>

<!-- Modal -->
<div id="uploadModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-xl">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">ADD PAYMENT</h4>
            </div>
            <form id="form_lab" method='post' action='' enctype="multipart/form-data">
                <div class="modal-body">
                    <!-- Form -->

                    <div class="row">
                        <div class="col-md-12" style="color:red"><p id="error"></p></div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Payment Mode</label> <small class="req"> *</small>
                                <select name="payment_mode" class="form-control" required="">
                                    <option value="">Select Payment</option>
                                    <option value="Cash">Cash</option>
                                    <option value="POS">POS</option>
                                </select>
                                <input type="hidden" value="<?php echo $patients[0]['id'] ?>" name="patient_id" class="form-control" id="patient_id" />
                                
                            </div>
                        </div>
                        <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Price(Rs.)</label><small class="req"> *</small> 
                                    <input type="number" name="price" class="form-control" id="price" required="" />                                
                                </div>
                            </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>By Doctor</label>
                                <select name="doctor_id" id="doctor_id" class="form-control" required>
                                    <option value="">Select Doctor</option>
                                    <?php foreach ($doctors as $dkey => $dvalue) { ?>
                                        <option value="<?php echo $dvalue->id ?>"><?php echo $dvalue->name; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Description</label> 
                                <textarea name="description" class="form-control"></textarea>
                                                                
                            </div>
                        </div>
                         
                    </div>


                </div>
                <div class="modal-footer float-right">
                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary" id="submit_btn" value='Save' id='btn_upload'>Save changes</button>
                </div>
            </form>
        </div>

    </div>
</div>
<!--<button id="open-popup">Open popup</button>-->

<div id="my-popup" class="mfp-hide white-popup">
  Inline popup
</div>
 
<!--<link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/magnific-popup.css">
<script src="<?php echo base_url(); ?>assets/admin/js/jquery.magnific-popup.js"></script>-->
<script>

    $(document).ready(function () {
        //$('#submit_btn').click(function () {
          $("#form_lab").submit(function (event) {
    // submit modal form of create & edit 
            event.preventDefault();   
            var fd = new FormData($('#form_lab')[0]);
             
            fd.append('csrf_test_name', csrf_token);

            // AJAX request
            $.ajax({
                url: '<?php echo base_url(); ?>admin/patients/add_payment',
                type: 'post',
                data: fd,
                dataType: 'json',
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {

                    if (data.status == "fail") {
                       // var message = "";
                        //$.each(data.error, function (index, value) {
                        //    message += value;
                        ///});
                        //toastr.error(message);
                        window.location.reload(true);
                        //errorMsg(message);
                    } else {
                       // successMsg(data.message);
                        window.location.reload(true);
                    }
                },
                error: function () {
                    //  alert("Fail")
                }
            });
        });
    });
    
  
    function getscanprice(a)
    {
        var res = a.split("-");
        $("#scan_price").val(res[1]);
    }
   

function showOpdPatientScan(id){
//$('#open-popup').click(function( event ) {
    event.preventDefault();
    var items = [];
    $.ajax({
             url: '<?php echo base_url(); ?>admin/patients/get_xraysReportImage',
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

