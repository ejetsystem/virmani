
<div class="content-wrapper">

  <!-- Main content -->
  <section class="content container">
    <?php if (isset($page_title) && $page_title != "Edit"): ?>

      <div class="box list_area">
        <div class="box-header with-border">
          <?php if (isset($page_title) && $page_title == "Edit"): ?>
            <h3 class="box-title">Edit patients <a href="<?php echo base_url('admin/patients') ?>" class="pull-right btn btn-light-primary mt-15 btn-sm"><i class="fa fa-angle-left"></i> <?php echo trans('back') ?></a></h3>
            <?php else: ?>
              <h3 class="box-title"><?php echo trans('all-patients') ?> </h3>
            <?php endif; ?>

            <div class="box-tools pull-right">
              <a href="#" class="pull-right btn btn-light-secondary btn-sm mt-10"><i class="fa fa-plus"></i> <?php echo "Add Payment" ?></a>
            </div>
          </div>

          <div class="box-body">

            <div class="col-md-12 col-sm-12 col-xs-12 scroll table-responsive">
              <table class="table table-hover datatable">
                <thead>
                  <tr class="success table-info">
                    <th>#</th>
                    <th><?php echo "Date"; ?></th>
                    <th><?php echo "Doctor Name"; ?></th>
                    <th><?php echo "Description"; ?></th>
                    <th><?php echo "Debit"; ?></th>
                    <th><?php echo "Credit"; ?> </th>
                    <th><?php echo "Balance"; ?></th>
                    <th><?php echo "Action"; ?></th>
                  </tr>
                </thead>
                <tbody>
                  <?php  
                    if(count($payment_history) > 0){
                      $i = 1;
                      foreach($payment_history as $key=>$ph){
                  ?>

                  <tr id="row_<?php echo $ph->description; ?>">
                    <th><?php echo ++$key; ?></th>
                    <th><?php echo date('d M, Y', strtotime($ph->created_at)) ?></th>
                    <th><?php echo $ph->doctor_name ?></th>
                    <th><?php echo $ph->description ?></th>
                    <th><?php echo $ph->debit_amount ?></th>
                    <th><?php echo $ph->credit_amount ?></th>
                    <th><?php echo $ph->balance ?></th>
                    <th>
                      <a data-val="Category"  data-id="<?php echo $ph->description; ?>"  href="<?php echo base_url(); ?>admin/patients/deleteOpdPatientScan/<?php echo $ph->description; ?>/<?php echo $payment['id']; ?>" class="on-default remove-row delete_item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                        <a href="#" onclick="viewDetail_scan('<?php echo $ph->description ?>', '<?php echo $ph->description; ?>')" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Print" >
                            <i class="fa fa-print"></i>
                        </a>
                    </th>
                  </tr>

                  <?php      
                      }
                    }
                  ?>
                </tbody>
              </table>
            </div>

          </div>

        </div>
      <?php endif; ?>

    </section>
  </div>