
<div class="content-wrapper">

  <!-- Main content -->
  <section class="content container">

    <div class="box add_area <?php if(isset($page_title) && $page_title == "Add Drug"){echo "d-block";}else{echo "hide";} ?>">
      <div class="box-header with-border" style="background-image: linear-gradient(to right, #2178e3,#c91a2b);">
       <h2 class="text-white">Add Medicine Details</h2>
      </div>

      <div class="box-body">
        <form id="cat-form" method="post" enctype="multipart/form-data" class="validate-form" action="<?php echo base_url('admin/drugs/add')?>" role="form" novalidate>
          <div class="row">
                <div class="col-md-3">
                  <div class="form-group" style="margin-top: 5%;">
                    <div class="avatar-upload text-center">
                      <div class="avatar-edit">
                        <input type='file' name="photo" id="imageUpload" accept=".png, .jpg, .jpeg" />
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
                        <input type="text" class="form-control" required name="name" id="name" value="" >
                      </div>
                    </div>
                    <div class="col-md-4">
                       <div class="form-group">
                          <label><?php echo ('Medicine Category') ?> <span class="text-danger">*</span></label>
                          <select class="form-control" required name="medicine_category" id="medicine_category" value="">
                            <option>Select</option>
                            <option value="">Medicine category1</option>
                            <option value="">Medicine category2</option>
                            <option value="">Medicine category3</option>
                            <option value="">Medicine category4</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                            <label><?php echo ('Brand Name') ?> <span class="text-danger">*</span></label>
                            <select class="form-control" required name="brand_name" id="brand_name" value="">
                              <option>Select</option>
                              <option value="">Brand Name 1</option>
                              <option value="">Brand Name 2</option>
                              <option value="">Brand Name 3</option>
                              <option value="">Brand Name 4</option>
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
                  <input type="text" class="form-control" required name="supplier" id="supplier" value="" >
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
                  <input type="text" class="form-control" required name="min_level" id="min_level" value="" >
                </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                  <label><?php echo ('Re-Order Level') ?> </label>
                  <input type="text" class="form-control" required name="re_order_level" id="re_order_level" value="" >
                </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                  <label><?php echo ('VAT (%)') ?> </label>
                  <input type="text" class="form-control" required name="vat" id="vat" value="" >
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
                  <input type="text" class="form-control" required name="vat_ac" id="vat_ac" value="" >
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
                  <textarea class="form-control" name="safety_alert" id="safety_alert"></textarea>
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
