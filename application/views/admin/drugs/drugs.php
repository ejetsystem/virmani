<style>
    .table>thead>tr>th,.table>tbody>tr>th {
        font-weight: bold;
        white-space: nowrap;                
    }
    .table-bordered>tbody>tr>th,.table-bordered>tbody>tr>td {
        border: 1px solid #ccc;
    }
</style>

<div class="content-wrapper">
    <!-- Main content -->
    <section class="content container">
        <div class="box list_area">
            <div class="box-header with-border">
                <?php if (isset($page_title) && $page_title == "Edit"): ?>
                    <h3 class="box-title"><?php echo trans('edit') ?> <a href="<?php echo base_url('admin/drugs') ?>" class="pull-right btn btn-light-secondary btn-sm mt-15"><i class="fa fa-angle-left"></i> va</a></h3>
                    <?php else: ?>
                        <h3 class="box-title"><?php echo trans('drugs') ?> </h3>
                    <?php endif; ?>

                    <div class="box-tools pull-right">
                        <a href="<?php echo base_url('clinic-admin/add-drug'); ?>" class="pull-right btn btn-light-secondary btn-sm mt-20"><i class="fa fa-plus"></i> <?php echo trans('create-new') ?></a>
                    </div>
                </div>

                <div class="box-body">

                    <div class="col-md-12 col-sm-12 col-xs-12 scroll table-responsive">
                        <table class="table datatable table-hover <?php if (count($drugs) > 10) { echo 'datatable';} ?>" id="dg_table">
                            <thead>
                                <tr class="success table-info">
                                    <th>#</th>
                                    <th><?php echo 'Name'; ?></th>
                                    <th><?php echo 'Company' ?></th>
                                    <th><?php echo 'Composition' ?></th>
                                    <th><?php echo 'Category' ?></th>
                                    <th><?php echo 'Group' ?></th>
                                    <th><?php echo 'Unit' ?></th>
                                    <th><?php echo 'Available Qty' ?></th>
                                    <th><?php echo 'Stock' ?></th>
                                    <th><?php echo 'Bad Stock' ?></th>
                                    <th><?php echo 'Action' ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($drugs as $drug):
                                    ?>
                                    <tr id="row_<?php echo html_escape($drug->id); ?>">

                                        <td><?= $i; ?></td>
                                        <td><?php echo html_escape($drug->medicine_name); ?></td>
                                        <td><?php echo $drug->medicine_company; ?></td>

                                        <td><?php echo $drug->medicine_composition; ?></td>
                                        <td><?php echo $drug->medicine_category_id; ?></td>
                                        <td><?php echo $drug->medicine_group; ?></td>
                                        <td><?php echo $drug->unit; ?></td>
                                        <td><?php echo $drug->medicine_company; ?></td>
                                        <td><button onclick="openStockModal(<?php echo $drug->id;?>)" class="btn btn-primary" data-toggle="modal" data-target="#add_stock_modal">Add</button></td>
                                        <td><button onclick="openBadStockModal(<?php echo $drug->id;?>)" class="btn btn-primary" data-toggle="modal" data-target="#add_bad_stock_modal">Add</button></td>
                                        <td class="actions" width="22%">


                                            <a href="<?php echo base_url('clinic-admin/drugs/edit/' . html_escape($drug->id)); ?>" class="on-default edit-row" data-placement="top" title="<?php echo trans('edit') ?>"><i class="fa fa-edit"></i></a> &nbsp; 
                                            <a href="<?php echo base_url('clinic-admin/drugs/view-drug/' . html_escape($drug->id)); ?>" class="on-default edit-row" data-placement="top" title="<?php echo trans('view') ?>"><i class="fa fa-eye"></i></a>
                                            <a data-val="Category" data-id="<?php echo html_escape($drug->id); ?>" href="<?php echo base_url('clinic-admin/drugs/delete/' . html_escape($drug->id)); ?>" class="on-default remove-row delete_item" data-toggle="tooltip" data-placement="top" title="<?php echo trans('delete') ?>"><i class="fa fa-trash-o"></i></a> &nbsp;
                                        </td>
                                    </tr>

                                    <?php $i++;
                                endforeach;
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


            <!-- The Modal -->
            <div class="modal fade" id="add_stock_modal">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <form method="post" class="validate-form" action="<?php echo base_url('admin/drugs/addStock')?>" role="form" novalidate="">
                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">  
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Add Stock</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <input type="hidden" name="medicine_id" id="medicine_id" value="">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Batch No</label>
                                <span class="text-danger">*</span> 
                                <input type="text" name="batch_no" required class="form-control">
                            </div>
                        </div> 
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Expiry Date</label>
                                <span class="text-danger">*</span> 
                                <input type="month" id="expiry" required name="expiry_date" class="form-control">
                            </div>
                        </div> 
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Inward Date</label>
                                <span class="text-danger">*</span> 
                                <input type="date" id="inward_date" required name="inward_date" class="form-control">
                            </div>
                        </div> 
                    </div>

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Packing Qty</label>
                                <span class="text-danger">*</span> 
                                <input type="text" name="packing_qty" required class="form-control">
                            </div>
                        </div> 
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Purchase Rate (Rs.)</label>

                                <input type="text" name="purchase_rate_packing" class="form-control">
                            </div>
                        </div> 
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Quantity</label>
                                <span class="text-danger">*</span> 
                                <input type="text" name="quantity" required class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>MRP (Rs.)</label>
                                <span class="text-danger">*</span> 
                                <input type="text" name="mrp" required class="form-control">
                                <span class="text-danger"></span>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Sale Price (Rs.)</label>
                                <span class="text-danger">*</span> 
                                <input name="sale_rate" type="text" required class="form-control">
                            </div>
                        </div> 
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Batch Amount (Rs.)</label>

                                <input type="text" name="amount" class="form-control">
                                <span class="text-danger"></span>
                            </div>
                        </div>
                    </div>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button class="btn btn-primary btn-lg" type="submit" name="add_stock" value="Add_stock">Add Stock</button>
                                <p type="button" class="btn btn-danger btn-lg mt-25" data-dismiss="modal">Close</p>
                            </div>

                        </form>
                    </div>
                </div>
            </div>



            <!-- The Modal -->
            <div class="modal fade" id="add_bad_stock_modal">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <form method="post" class="validate-form" action="<?php echo base_url('admin/drugs/addBadStock')?>" role="form" novalidate="">
                            <input type="hidden" name="bad_medicine_id" id="bad_medicine_id" value="">
                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">  
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Add Bad Stock</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Batch No</label>
                                        <small class="req"> *</small> 
                                        <select name="batch_no" onchange="getExpire(this.value)" id="batch_stock_no" class="form-control" autocomplete="off">
                                            <option value="">Select</option>
                                        </select>
                                    </div>
                                </div> 
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Expiry Date</label>
                                        <small class="req"> *</small> 
                                        <input type="text" id="batch_expire" name="expiry_date" class="form-control">
                                        <span class="text-danger"></span>
                                    </div>
                                </div> 
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Outward Date</label>
                                        <small class="req"> *</small> 
                                        <input type="date" name="inward_date" value="22/03/2022" class="form-control date">
                                        <span class="text-danger"></span>
                                    </div>
                                </div> 
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Qty</label>
                                        <small class="req"> *</small> 
                                        <input type="text" name="packing_qty" class="form-control">
                                        <input type="hidden" name="pharmacy_id" id="pharmacy_stock_id" class="form-control" value="140">
                                        <input type="hidden" name="available_quantity" id="batch_available_qty" class="form-control">
                                        <input type="hidden" name="medicine_batch_id" id="medicine_batch_id" class="form-control">
                                        <span class="text-danger"></span>
                                    </div>
                                </div> 
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Note</label>
                                        <textarea name="note" class="form-control "></textarea>
                                    </div>
                                </div> 

                            </div>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button class="btn btn-primary btn-lg" type="submit" name="add_bad_stock" value="Add_bad_stock">Add Bad Stock</button>
                                <p type="button" class="btn btn-danger btn-lg mt-25" data-dismiss="modal">Close</p>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

<script>
    
    function openStockModal(id){
        $("#medicine_id").val(id);
    }

    function openBadStockModal(id){
        $("#bad_medicine_id").val(id);
        var post_data = {
            'id' :id,
          'csrf_test_name' : csrf_token
        };
        $.ajax({
            url: base_url+"admin/drugs/getBatch/",
            type: "Post",
            data: post_data,
            success: function (data) {
                $("#batch_stock_no").html(data);
            }
        });        
    }

    function getExpire(id){
        var post_data = {
            'id' :id,
          'csrf_test_name' : csrf_token
        };
        $.ajax({
            url: base_url+"admin/drugs/getExpire/",
            type: "Post",
            data: post_data,
            success: function (data) {
                $("#batch_expire").val(data);
            }
        });        
    }

    
</script>

<!-- <script>
function viewDetail(id) {
// alert(id);
$.ajax({
url: '<?php echo base_url(); ?>admin/drugs/getDetails',
type: "POST",
data: {pharmacy_id: id, 'csrf_test_name': csrf_token},
//dataType: 'json',
success: function (data) {
$('#viewModal .modal-body').html(data);

$("#viewModal").modal('show');
},
});
}
</script> -->
