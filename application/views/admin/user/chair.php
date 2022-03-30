
<div class="content-wrapper">

  <!-- Main content -->
  <section class="content container">

    <div class="box add_area <?php if(isset($page_title) && $page_title == "Edit"){echo "d-block";}else{echo "hide";} ?>">
      <div class="box-header with-border">
        <?php if (isset($page_title) && $page_title == "Edit"): ?>
          <h3 class="box-title"><?php echo trans('edit') ?></h3>
        <?php else: ?>
          <h3 class="box-title">Add New Chair </h3>
        <?php endif; ?>

        <div class="box-tools pull-right">
          <?php if (isset($page_title) && $page_title == "Edit"): ?>
            <a href="<?php echo base_url('clinic-admin/chairs') ?>" class="pull-right btn btn-light-primary btn-sm mt-15"><i class="fa fa-angle-left"></i> <?php echo trans('back') ?></a>
          <?php else: ?>
            <a href="#" class="text-right btn btn-light-secondary btn-sm cancel_btn"><i class="fa fa-bars"></i> All Chair</a>
          <?php endif; ?>
        </div>
      </div>

      <div class="box-body">
        <form id="cat-form" method="post" enctype="multipart/form-data" class="validate-form" action="<?php echo base_url('clinic-admin/chairs/add')?>" role="form" novalidate>

           

          <div class="form-group">
              <label><?php echo trans('doctor') ?></label>
              <select class="selectfield textfield--grey col-sm-12 select2" name="doctor_id" required style="width: 100%">
                  <option value=""><?php echo trans('select') ?></option>
                  <?php foreach ($doctors as $doctor): ?>
                      <option value="<?php echo html_escape($doctor['id']); ?>" <?php if($doctor['id'] == $chair->id){echo 'selected';}else{echo '';}?> >
                          <?php echo html_escape($doctor['name']); ?>
                      </option>
                  <?php endforeach ?>
              </select>
          </div>

          <div class="form-group">
            <label>Chair <?php echo trans('name') ?> <span class="text-danger">*</span></label>
            <input type="text" class="form-control" required name="name" value="<?php echo html_escape($chair->name); ?>" >
          </div>
 

          <div class="form-group">
            <label><?php echo trans('appointment-limit') ?></label>
            <input type="number" class="form-control" name="appoinment_limit" value="<?php echo html_escape($chair->appoinment_limit); ?>" >
          </div>

          <div class="form-group">
            <label><?php echo trans('address') ?></label>
            <textarea class="form-control" name="address" rows="6"><?php echo html_escape($chair->address); ?></textarea>
          </div>
            
            <div class="form-group">
              <label><?php echo trans('status') ?></label>
              <select class="selectfield textfield--grey col-sm-12 form-control" name="status" required style="width: 100%">
                  <option value=""><?php echo trans('select') ?></option>
                 
                      <option value="1" <?php if($chair->status == '1'){echo 'selected';}else{echo '';}?> >
                          Active
                      </option>
                      <option value="0" <?php if($chair->status == '0'){echo 'selected';}else{echo '';}?> >
                          Inactive
                      </option>
                  
              </select>
          </div>

          <input type="hidden" name="id" value="<?php echo html_escape($chair->id); ?>">
          <!-- csrf token -->
          <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">

       
          <div class="row m-t-30">
            <div class="col-sm-12">
              <?php if (isset($page_title) && $page_title == "Edit"): ?>
                <button type="submit" class="btn btn-primary pull-left"><i class="ficon flaticon-check"></i> <?php echo trans('save-changes') ?></button>
              <?php else: ?>
                <button type="submit" class="btn btn-primary pull-left"><i class="ficon flaticon-check"></i> <?php echo trans('save') ?></button>
              <?php endif; ?>
            </div>
          </div>

        </form>

      </div>

    </div>


    <?php if (isset($page_title) && $page_title != "Edit"): ?>

    <div class="box list_area">
      <div class="box-header with-border">
        <?php if (isset($page_title) && $page_title == "Edit"): ?>
          <h3 class="box-title"><?php echo trans('edit') ?> <a href="<?php echo base_url('clinic-admin/chairs') ?>" class="pull-right btn btn-light-secondary btn-sm"><i class="fa fa-angle-left"></i> <?php echo trans('back') ?></a></h3>
        <?php else: ?>
          <h3 class="box-title">All Chair</h3>
        <?php endif; ?>

        <div class="box-tools pull-right">
         <a href="#" class="pull-right btn btn-light-secondary btn-sm add_btn"><i class="fa fa-plus"></i> Add New Chair</a>
        </div>
      </div>

      <div class="box-body p-0">
        
        <div class="col-md-12 col-sm-12 col-xs-12 scroll table-responsive">
            <table class="table table-hover datatable">
                <thead>
                    <tr class="success table-info">
                        <th>#</th>
                        <th>Chair name</th>
                        <th>Doctor name</th>
                        <th>address</th>
                        <th><?php echo trans('appointment-limit') ?></th>
                        <th><?php echo trans('status') ?></th>
                        <th><?php echo trans('action') ?></th>
                    </tr>
                </thead>
                <tbody>
                  <?php $i=1; foreach ($chairs as $chair): ?>
                    <tr id="row_<?php echo html_escape($chair->id); ?>">
                        
                        <td><?= $i; ?></td>
                        
                        <td>
                            <h3 class="mt-0 mb-0"><?php echo html_escape($chair->name); ?></h3>
                             
                        </td>
                        <td><?php echo html_escape($chair->doctor_name); ?></td>
                        <td><?php echo html_escape($chair->address); ?></td>
                        <td><?php echo html_escape($chair->appoinment_limit); ?></td>
                        <td>
                          <?php if ($chair->status == 1): ?>
                            <span class="badge brd-20 badge-success-soft" disabled data-toggle="tooltip" data-placement="top" title="Set Stataus"><i class="ficon flaticon-check"></i> Active</span>
                          <?php else: ?>
                            <span class="badge brd-20 badge-fail-soft" disabled data-toggle="tooltip" data-placement="top" title="Set Stataus"><i class="ficon flaticon-check"></i> Inactive</span>
                          <?php endif ?>
                        </td>
                        
                        <td class="actions" width="12%">
                          <a href="<?php echo base_url('clinic-admin/chairs/edit/'.md5($chair->id));?>" class="on-default edit-row" data-placement="top" title="<?php echo trans('edit') ?>"><i class="fa fa-pencil"></i></a> &nbsp; 

                          <!--<a data-val="Category" data-id="<?php echo html_escape($chair->id); ?>" href="<?php echo base_url('clinic-admin/chairs/delete/'.html_escape($chair->id));?>" class="on-default remove-row delete_item" data-toggle="tooltip" data-placement="top" title="<?php echo trans('delete') ?>"><i class="fa fa-trash-o"></i></a> &nbsp;-->
                        </td>
                    </tr>
                    
                  <?php $i++; endforeach; ?>
                </tbody>
            </table>
        </div>

      </div>

    </div>
    <?php endif; ?>

  </section>
</div>
