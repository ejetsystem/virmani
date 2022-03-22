<div class="content-wrapper">
<!-- Main content -->
<section class="content container">
<div class="box add_area d-block">
<div class="box-header with-border" >
<h2 class="box-title">Medicine Details</h2>

<div class="pull-right">
<a href="<?php echo base_url('clinic-admin/drugs');?>" class="pull-right btn btn-light-secondary btn-sm"><i class="fa fa-angle-left"></i> Back </a>
</div>
</div>

<div class="box-body">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 paddlr">
<div class="row">
<div class="col-lg-2 col-md-2 col-sm-4">
<img id="medicine_image" src="<?php echo base_url("uploads/medicine/".$drug['medicine_image']); ?>" style="width:100px;height: 100px;" />
</div>    
<div class="col-lg-10 col-md-10 col-sm-8 table-responsive">
<table class="table mb0 table-striped table-bordered examples">
<tr>
<th></th>
<td></td>
<th width="15%">Medicine Name</th>
<td width="35%"><span id='medicine_names'><?php echo $drug['medicine_name'] ?></span></td>
<th width="15%">Medicine Ctegory</th>
<td width="35%"><span id="medicine_category_ids"><?php echo $drug['medicine_category_id'] ?></span>
</td>
</tr>

<tr>
<th></th>
<td></td>
<th width="15%">Brand Name</th>
<td width="35%"><span id='medicine_brand_ids'><?php echo $drug['medicine_brand_id'] ?></span></td>
<th width="15%">Basic Salt</th>
<td width="35%"><span id="medicine_basic_salts"><?php echo $drug['basic_salt'] ?></span>
</td>
</tr>

<tr>
<th></th>
<td></td>
<th width="15%">Medicine Company</th>
<td width="35%"><span id='medicine_companys'><?php echo $drug['medicine_company'] ?></span></td>
<th width="15%">Medicine composition</th>
<td width="35%"><span id="medicine_compositions"><?php echo $drug['medicine_composition'] ?></span>
</td>

</tr>
<tr>
<th></th>
<td></td>
<th width="15%">Medicine Group</th>
<td width="35%"><span id='medicine_groups'><?php echo $drug['medicine_group'] ?></span></td>
<th width="15%">Unit</th>
<td width="35%"><span id="units"><?php echo $drug['unit'] ?></span>
</td>

</tr>
<tr>
<th></th>
<td></td>
<th width="15%">Min level</th>
<td width="35%"><span id='min_levels'><?php echo $drug['min_level'] ?></span></td>
<th width="15%">Re-order Level</th>
<td width="35%"><span id="reorder_levels"><?php echo $drug['reorder_level'] ?></span>
</td>

</tr>
<tr>                                  <th></th>
<td></td>
<th width="15%"><?php echo "vat (%)" ?></th>
<td width="35%"><span id='vat'><?php echo $drug['vat'] ?></span></td>
<th width="15%">Unit/Packing</th>
<td width="35%"><span id="unit_packings"><?php echo $drug['unit_packing'] ?></span>
</td>

</tr>
<tr>
<th></th>
<td></td>
<th width="15%">Supplier</th>
<td width="35%"><span id='suppliers'><?php echo $drug['supplier'] ?></span></td>
<th width="15%">VAT a/c</th>
<td width="35%"><span id="vat_acs"><?php echo $drug['vat_ac'] ?></span>
</td>
</tr>
</table>
</div>
</div>            
</div><!--./col-md-12-->       
</div><!--./row-->
<div id="tabledata" class="mt-20">
<?php  //$currency_symbol = $this->customlib->getSchoolCurrencyFormat();    ?>
<div class="nav-tabs-custom border0" id="tabs">
<ul class="nav nav-tabs">
<li class="active">
<a href="#current_stock"  data-toggle="tab" aria-expanded="true">Stock</a>
</li>
<li class="">
<a href="#bad_stock"  data-toggle="tab" aria-expanded="true">Bad Stock</a>
</li>
</ul>    
<div class="tab-content">

<div class="tab-pane active" id="current_stock">   
<div class="table-responsive">
<table class="table table-striped table-bordered table-hover example" id="detail" cellspacing="0" width="100%" >
<thead>
<tr>
<th>Inward Date</th>
<th>Batch no</th>
<th>Expire Date</th>
<th class="text-right">Packing Qty(Rs)</th>
<th class="text-right">Purchase Rate (Rs)</th>
<th class="text-right">Batch Amount (Rs)</th>
<th class="text-right">Quantity</th>
<th class="text-right">MRP (Rs)</th>
<th class="text-right">Sale Price (Rs)</th>
<th class="text-right">Action</th>
</tr>
</thead>
<tbody>
<?php
$count = 1;
foreach ($all_stock as $detail) {
?>
<tr id="row_<?php echo html_escape($detail->id); ?>">
<td><?php echo date('Y-m-d', strtotime($detail->inward_date)); ?></td>
<td ><?php echo $detail->batch_no ?></td>
<td><?php echo $detail->expiry_date ?></td>
<td class="text-right"><?php echo $detail->packing_qty ?></td>
<td class="text-right"><?php echo $detail->purchase_rate_packing ?></td>
<td class="text-right"><?php echo $detail->amount; ?></td>
<td class="text-right"><?php echo $detail->quantity ?></td>
<td class="text-right"><?php echo $detail->mrp; ?> </td>
<td class="text-right"><?php echo $detail->sale_rate; ?></td>
<td class="text-right">
<a data-val="Category" data-id="<?php echo html_escape($detail->id); ?>" href="<?php echo base_url('admin/drugs/deleteStock/' . html_escape($detail->id)); ?>" class="on-default remove-row delete_item" data-toggle="tooltip" data-placement="top" title="<?php echo trans('delete') ?>"><i class="fa fa-trash-o"></i></a> &nbsp;
</td>
</tr>
<?php
$count++;
}
?>
</tbody>
</table>
</div>
</div>

<div class="tab-pane" id="bad_stock">  
<div class="table-responsive">
<table class="table table-striped table-bordered table-hover example" cellspacing="0" width="100%" >
<thead>
<tr>
<th>Outward Date</th>
<th>Batch no</th>
<th>Expire Date</th>
<th class="text-right">Quantity</th>
<th class="text-right">Action</th>
</tr>
</thead>
<tbody>
<?php
$count = 1;

// if(!empty($badstockresult)){
foreach ($all_bad_stock  as $stockdetail) {
?>
<tr id="row_<?php echo html_escape($stockdetail->id); ?>" role="row" class="odd">
<td><?php echo date('Y-m-d', strtotime($stockdetail->outward_date)); ?></td>
<td ><?php echo $stockdetail->batch_no ?></td>
<td><?php echo $stockdetail->expiry_date ?></td>
<td class="text-right"><?php echo $stockdetail->quantity ?></td>
<td class="text-right">
<a data-val="Category" data-id="<?php echo html_escape($stockdetail->id); ?>" href="<?php echo base_url('admin/drugs/deleteBadStock/' . html_escape($stockdetail->id)); ?>" class="on-default remove-row delete_item" data-toggle="tooltip" data-placement="top" title="<?php echo trans('delete') ?>"><i class="fa fa-trash-o"></i></a> &nbsp;
</td>
</tr>
<?php
} //}
?>
</tbody>
</table>
</div>
</div>

</div>
</div>
</div>
</div>

</div>
</div> 
</section>
</div> 
<script type="text/javascript">

$(document).ready(function () {

$("#detail").DataTable({

dom: "Bfrtip",

buttons: [

{

extend: 'copyHtml5',

text: '<i class="fa fa-files-o"></i>',

titleAttr: 'Copy',

title: $('.download_label').html(),

exportOptions: {

columns: ':visible'

}

},

{

extend: 'excelHtml5',

text: '<i class="fa fa-file-excel-o"></i>',

titleAttr: 'Excel',



title: $('.download_label').html(),

exportOptions: {

columns: ':visible'

}

},

{

extend: 'csvHtml5',

text: '<i class="fa fa-file-text-o"></i>',

titleAttr: 'CSV',

title: $('.download_label').html(),

exportOptions: {

columns: ':visible'

}

},

{

extend: 'pdfHtml5',

text: '<i class="fa fa-file-pdf-o"></i>',

titleAttr: 'PDF',

title: $('.download_label').html(),

exportOptions: {

columns: ':visible'

}

},

{

extend: 'print',

text: '<i class="fa fa-print"></i>',

titleAttr: 'Print',

title: $('.download_label').html(),

customize: function (win) {

$(win.document.body)

.css('font-size', '10pt');



$(win.document.body).find('table')

.addClass('compact')

.css('font-size', 'inherit');

},

exportOptions: {

columns: ':visible'

}

},

{

extend: 'colvis',

text: '<i class="fa fa-columns"></i>',

titleAttr: 'Columns',

title: $('.download_label').html(),

postfixButtons: ['colvisRestore']

},

]

});

});
</script>