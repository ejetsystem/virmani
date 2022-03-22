<?php //print_r($drug);?>
<div class="modal-body pt0 pb0">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 paddlr">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-4">
                    <img id="medicine_image" src="#" style="width:100px;height: 100px;" />
                </div>    
                <div class="col-lg-10 col-md-10 col-sm-8 table-responsive">
                    <table class="table mb0 table-striped table-bordered examples">
                        <tr>
                            <th></th>
                            <td></td>
                            <th width="15%">Medicine Name</th>
                            <td width="35%"><span id='medicine_names'><?php echo $drug['medicine_name']?></span></td>
                            <th width="15%">Medicine Ctegory</th>
                            <td width="35%"><span id="medicine_category_ids"><?php echo $drug['medicine_category_id']?></span>
                            </td>
                        </tr>

                        <tr>
                            <th></th>
                            <td></td>
                            <th width="15%">Brand Name</th>
                            <td width="35%"><span id='medicine_brand_ids'><?php echo $drug['medicine_brand_id']?></span></td>
                            <th width="15%">Basic Salt</th>
                            <td width="35%"><span id="medicine_basic_salts"><?php echo $drug['basic_salt']?></span>
                            </td>
                        </tr>

                        <tr>
                            <th></th>
                            <td></td>
                            <th width="15%">Medicine Company</th>
                            <td width="35%"><span id='medicine_companys'><?php echo $drug['medicine_company']?></span></td>
                            <th width="15%">Medicine composition</th>
                            <td width="35%"><span id="medicine_compositions"><?php echo $drug['medicine_composition']?></span>
                            </td>

                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <th width="15%">Medicine Group</th>
                            <td width="35%"><span id='medicine_groups'><?php echo $drug['medicine_group']?></span></td>
                            <th width="15%">Unit</th>
                            <td width="35%"><span id="units"><?php echo $drug['unit']?></span>
                            </td>

                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <th width="15%">Min level</th>
                            <td width="35%"><span id='min_levels'><?php echo $drug['min_level']?></span></td>
                            <th width="15%">Re-order Level</th>
                            <td width="35%"><span id="reorder_levels"><?php echo $drug['reorder_level']?></span>
                            </td>

                        </tr>
                        <tr>                                  <th></th>
                            <td></td>
                            <th width="15%"><?php echo "vat (%)" ?></th>
                            <td width="35%"><span id='vat'><?php echo $drug['vat']?></span></td>
                            <th width="15%">Unit/Packing</th>
                            <td width="35%"><span id="unit_packings"><?php echo $drug['unit_packing']?></span>
                            </td>

                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <th width="15%">Supplier</th>
                            <td width="35%"><span id='suppliers'><?php echo $drug['supplier']?></span></td>
                            <th width="15%">VAT a/c</th>
                            <td width="35%"><span id="vat_acs"><?php echo $drug['vat_ac']?></span>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>            
        </div><!--./col-md-12-->       
    </div><!--./row-->
    <div id="tabledata">

    </div> 
</div>