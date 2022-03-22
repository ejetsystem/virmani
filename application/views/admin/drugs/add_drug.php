
<div class="content-wrapper">

  <!-- Main content -->
  <section class="content container">

    <div class="box add_area <?php if(isset($page_title) && $page_title == "Add Drug"){echo "d-block";}else{echo "hide";} ?>">
      <div class="box-header with-border" >
       <h2 class="box-title">Add Medicine Details</h2>

       <div class="pull-right">
          <a href="<?php echo base_url('clinic-admin/drugs');?>" class="pull-right btn btn-light-secondary btn-sm"><i class="fa fa-angle-left"></i> Back </a>
      </div>
      </div>

      <div class="box-body">
        <form id="cat-form" method="post" enctype="multipart/form-data" class="validate-form" action="<?php echo base_url('admin/drugs/add')?>" role="form" novalidate>
            <input type="hidden" name="id" value="">
          <!-- csrf token -->
          <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
            <div class="row">
                <div class="col-md-3">
                  <div class="form-group" style="margin-top: 5%;">
                    <div class="avatar-upload text-center">
                      <div class="avatar-edit">
                        <input type='file' name="medicine_image" id="imageUpload" accept=".png, .jpg, .jpeg" />
                         
                        <label for="imageUpload"></label>
                      </div>
                      <div class="avatar-preview">
                        <div id="imagePreview" style="background-image: url(<?php echo base_url($staff[0]['thumb']); ?>);">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label><?php echo ('Medicine Name') ?> <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" required name="medicine_name" id="medicine_name" value="" >
                      </div>
                    </div>
                    <div class="col-md-4">
                       <div class="form-group">
                          <label><?php echo ('Medicine Category') ?> <span class="text-danger">*</span></label>
                          <select class="form-control" required name="medicine_category_id" id="medicine_category_id">
                            <option>Select</option>
                            <?php foreach($medicine_category as $mcategory){?>
                            <option value="<?php echo $mcategory->id?>"><?php echo $mcategory->medicine_category?></option>
                            <?php }?>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                            <label><?php echo ('Brand Name') ?> <span class="text-danger">*</span></label>
                            <select class="form-control" required name="medicine_brand_id" id="medicine_brand_id"  onchange="getsalt(this.value)">
                              <option>Select</option>
                              <?php foreach($medicine_brand as $mbrand){?>
                                <option value="<?php echo $mbrand->id?>"><?php echo $mbrand->medicine_brand?></option>
                             <?php }?>
                            </select>
                          </div>                    
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-4">
                     <div class="form-group">
                         <label><?php echo ('Medicine Company') ?> <span class="text-danger">*</span></label>
                         <input type="text" class="form-control" required name="medicine_company" id="medicine_company" value="" >
                       </div>

                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                          <label><?php echo ('Basic Salt') ?> <span class="text-danger">*</span></label>
                          <input type="text" class="form-control" required name="basic_salt" id="basic_salt" value="" >
                      </div>
                    </div>
                    <div class="col-md-4">
                       <div class="form-group">
                          <label><?php echo ('Form') ?> <span class="text-danger">*</span></label>
                          <input type="text" class="form-control" required name="form" id="form" value="" >
                        </div>
                    </div>
                  </div>
                </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                  <label><?php echo ('Medicine Composition') ?> <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" required name="medicine_composition" id="medicine_composition" value="" >
                </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                  <label><?php echo ('Medicine Group') ?> <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" required name="medicine_group" id="medicine_group" value="" >
                </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                  <label><?php echo ('Supplier') ?></label>
                  <input type="text" class="form-control"  name="supplier" id="supplier" value="" >
                </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                  <label><?php echo ('Unit') ?> <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" required name="unit" id="unit" value="" >
                </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                  <label><?php echo ('Min Level') ?> </label>
                  <input type="text" class="form-control"  name="min_level" id="min_level" value="" >
                </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                  <label><?php echo ('Re-Order Level') ?> </label>
                  <input type="text" class="form-control"  name="reorder_level" id="reorder_level" value="" >
                </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                  <label><?php echo ('VAT (%)') ?> </label>
                  <input type="text" class="form-control"  name="vat" id="vat" value="" >
                </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                  <label><?php echo ('Unit/Packing ') ?><span class="text-danger">*</span></label>
                  <input type="text" class="form-control" required name="unit_packing" id="unit_packing" value="" >
                </div>
            </div>
          </div> 
          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                  <label><?php echo ('VAT A/C') ?></label>
                  <input type="text" class="form-control" name="vat_ac" id="vat_ac" value="" >
                </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                  <label><?php echo ('Description') ?></label>
                  <textarea class="form-control" name="description" id="description"></textarea>
                </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                  <label><?php echo ('Safety Alerts') ?> </label>
                  <textarea class="form-control" name="safety_alerts" id="safety_alerts"></textarea>
                </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                  <label><?php echo ('Bactrology') ?> </label>
                  <textarea class="form-control" name="bactrology" id="bactrology"></textarea>
                </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                  <label><?php echo ('Note') ?> </label>
                  <textarea class="form-control" name="note" id="note"></textarea>
                </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
              <button type="submit" class="btn btn-primary pull-left pl-4 pr-4 mr-4"><?php echo "Save"; ?></button> <button type="submit" class="btn btn-danger pull-left pl-4 pr-4 ml-4"><?php echo "Cancel"; ?></button></div>
            <div class="col-md-4"></div>
          </div>
        </form>
      </div>
    </div>
  </section>
</div>


<script>
    function getbatchnolist(id, selectid = '') {
                var div_data = "";
                $("#batch_stock_no").html("<option value=''><?php echo $this->lang->line('select') ?></option>");
                $.ajax({
                    type: "POST",
                    url: base_url + "admin/pharmacy/getBatchNoList",
                    data: {'medicine': id},
                    dataType: 'json',
                    success: function (res) {
                        console.log(res);
                        $.each(res, function (i, obj)
                        {
                            var sel = "";
                            if (obj.batch_no == selectid) {
                                sel = "selected";
                            }
                            div_data += "<option " + sel + " value='" + obj.batch_no + "'>" + obj.batch_no + "</option>";
                        });
                        $('#batch_stock_no').append(div_data);
                    }
                });
            }
    function getExpire(batch_no) {
                //var batch_no = $("#batch_expire").val();
                $.ajax({
                    type: "POST",
                    url: base_url + "admin/pharmacy/getExpiryDate",
                    data: {'batch_no': batch_no},
                    dataType: 'json',
                    success: function (data) {
                        if (data != null) {
                            $('#batch_expire').val(data.expiry_date);
                            $('#batch_available_qty').val(data.available_quantity);
                            $('#medicine_batch_id').val(data.id);
                        }
                    }
                });
            }
function getsalt(a)
            {
                 $.ajax({
                    type: "POST",
                    url: base_url + "admin/drugs/getSalt",
                    data: {'brand_id': a, 'csrf_test_name': csrf_token,},
                    dataType: 'json',
                    success: function (data) {
                        if (data != null) {
                            $('#basic_salt').val(data.basic_salt);
                            $('#medicine_company').val(data.company_name);
                        }
                    }
                });
            }
</script>
