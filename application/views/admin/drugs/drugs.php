<div class="content-wrapper">
  <!-- Main content -->
  <section class="content container">
      <style>
          .table>thead>tr>th {
    
    white-space: nowrap;
}
      </style>   

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
            <table class="table datatable table-hover <?php if(count($drugs) > 10){echo 'datatable';} ?>" id="dg_table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th><?php echo 'Medicine name';?></th>
                        <th><?php echo 'Medicine company' ?></th>
                        <th><?php echo 'Medicine composition' ?></th>
                        <th><?php echo 'Medicine category' ?></th>
                        <th><?php echo 'Medicine Group' ?></th>
                        <th><?php echo 'Unit' ?></th>
                        <th><?php echo 'Available Qty' ?></th>
                        <th><?php echo 'Add Stock' ?></th>
                        <th><?php echo 'Action' ?></th>
                    </tr>
                </thead>
                <tbody>
                  <?php $i=1; foreach ($drugs as $drug): ?>
                    <tr id="row_<?php echo html_escape($drug->id); ?>">
                        
                        <td><?= $i; ?></td>
                        <td><?php echo html_escape($drug->medicine_name); ?></td>
                        <td><?php echo $drug->medicine_company; ?></td>
                        
                        <td><?php echo $drug->medicine_composition; ?></td>
                        <td><?php echo $drug->medicine_category_id; ?></td>
                        <td><?php echo $drug->medicine_group; ?></td>
                        <td><?php echo $drug->unit; ?></td>
                        <td><?php echo $drug->medicine_company; ?></td>
                        <td><button class="btn btn-primary">Add</button></td>
                        <td class="actions" width="22%">
                            
                              
                          <a href="<?php echo base_url('clinic-admin/drugs/edit/'.html_escape($drug->id));?>" class="on-default edit-row" data-placement="top" title="<?php echo trans('edit') ?>"><i class="fa fa-edit"></i></a> &nbsp; 
                          <a href="javascript:void(0);" onclick="viewDetail('140')" class="on-default edit-row" data-placement="top" title="<?php echo trans('view') ?>"><i class="fa fa-eye"></i></a>
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

<div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-xl" style="width: 100%" role="document">
        <div class="modal-content modal-media-content">
            <div class="modal-header modal-media-header">
                <button type="button" class="close" data-toggle="tooltip" title="<?php echo $this->lang->line('close'); ?>" data-dismiss="modal">&times;</button>

                <div class="modalicon"> 
                    <div id='edit_delete'>
                        <a href="#"  onclick="holdModal('editModal')" data-toggle="modal" title="" data-original-title="<?php echo $this->lang->line('edit'); ?>"><i class="fa fa-pencil"></i></a>

                        <a href="#" data-toggle="tooltip" title="" data-original-title="<?php echo $this->lang->line('delete') ?>"><i class="fa fa-trash"></i></a>
                    </div>
                </div>
                <h4 class="box-title"><?php echo $this->lang->line('medicine') . " " . $this->lang->line('information'); ?></h4> 
            </div>
            <div class="modal-body pt0 pb0">
                 
                 
            </div>
            <div class="box-footer">
                <div class="pull-right paddA10">
                  <!--  <a  onclick="saveEnquiry()" class="btn btn-info pull-right"><?php //echo $this->lang->line('save');   ?></a> -->
                </div>
            </div>
        </div>
    </div>    
</div>

<script>
   function viewDetail(id) {
                // alert(id);
                $.ajax({
                    url: '<?php echo base_url(); ?>admin/drugs/getDetails',
                    type: "POST",
                    data: {pharmacy_id: id,'csrf_test_name': csrf_token},
                    //dataType: 'json',
                    success: function (data) {
                        $('#viewModal .modal-body').html(data);
                       
                       $("#viewModal").modal('show');
                    },
                });
            }
</script>
