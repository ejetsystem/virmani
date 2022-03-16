
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
         <a href="<?php echo base_url('clinic-admin/add-drug');?>" class="pull-right btn btn-light-secondary btn-sm mt-20"><i class="fa fa-plus"></i> <?php echo trans('create-new') ?></a>
        </div>
      </div>

      <div class="box-body">
        
        <div class="col-md-12 col-sm-12 col-xs-12 scroll table-responsive">
            <table class="table table-hover <?php if(count($drugs) > 10){echo 'datatable';} ?>" id="dg_table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th><?php echo trans('name') ?></th>
                        <th><?php echo trans('details') ?></th>
                        <th><?php echo trans('action') ?></th>
                    </tr>
                </thead>
                <tbody>
                  <?php $i=1; foreach ($drugs as $drug): ?>
                    <tr id="row_<?php echo html_escape($drug->id); ?>">
                        
                        <td><?= $i; ?></td>
                        <td><?php echo html_escape($drug->name); ?></td>
                        <td><?php echo character_limiter($drug->details, 80); ?></td>
                        
                        <td class="actions" width="12%">
                          <a href="<?php echo base_url('clinic-admin/drugs/edit/'.html_escape($drug->id));?>" class="on-default edit-row" data-placement="top" title="<?php echo trans('edit') ?>"><i class="fa fa-pencil"></i></a> &nbsp; 

                          <a data-val="Category" data-id="<?php echo html_escape($drug->id); ?>" href="<?php echo base_url('clinic-admin/drugs/delete/'.html_escape($drug->id));?>" class="on-default remove-row delete_item" data-toggle="tooltip" data-placement="top" title="<?php echo trans('delete') ?>"><i class="fa fa-trash-o"></i></a> &nbsp;
                        </td>
                    </tr>
                    
                  <?php $i++; endforeach; ?>
                </tbody>
            </table>
        </div>

      </div>

      <div class="box-footer">

      </div>
    </div>
    

  </section>
</div>
