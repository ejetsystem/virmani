
<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">

    <div class="row">
      <div class="col-md-12">
        <div class="box add_area">
          <div class="box-header with-border">
            <h3 class="box-title"><?php echo trans('appointments') ?> </h3>

            <div class="box-tools pull-right">
              <!-- <button class="btn btn-light-primary btn-sm pull-right mt-15 mr-5 ml-10" data-toggle="modal" data-target=".bd-example-modal-xl"> <i class="flaticon-medical mr-1"></i> Add Patient</button> -->
              
              <a href="javascript:void(0);" data-toggle="modal" data-target="#add-appointment-modal" class="btn btn-light-primary btn-sm pull-right mt-15 mr-5 ml-10"><i class="flaticon-medical mr-1"></i> <?php echo trans('add-appointment') ?> </a>
              <!-- <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#add-appointment-modal"><?php echo trans('appointment') ?></a> -->

              <a href="<?php echo base_url('clinic-admin/appointment/all_list') ?>" class="btn btn-light-primary btn-sm pull-right mt-15"><i class="flaticon-calendar mr-1"></i> <?php echo trans('list-by-date') ?> </a>
            </div>

          </div>

          <div class="box-body table-responsive">

            <table class=" table table-bordered <?php if(isset($appointments) && count($appointments) >= 2){echo "datatable";} ?>">
              <thead>
                <tr>
                  <th>#</th>
                  <th><?php echo trans('serial-no') ?></th>
                  <th><?php echo trans('patient-info') ?></th>
                  <th><?php echo trans('schedule-info') ?></th>
                  <th><?php echo trans('consultation-type') ?></th>
                  <th><?php echo trans('action') ?></th>
                </tr>
              </thead>
              <tbody>
                <?php $i=1; foreach ($appointments as $amp): ?>
                <tr id="row_<?php echo html_escape($amp->id); ?>">

                  <td><?= $i; ?></td>
                  <td><?php echo html_escape($amp->serial_id); ?></td>
                  <td>
                    <p class="mb-0"><?php echo html_escape($amp->name); ?> (<?php echo html_escape($amp->mr_number); ?>)</p>
                    <p class="mb-0"><?php echo html_escape($amp->mobile); ?></p>
                    <p><?php echo html_escape($amp->email); ?></p>
                  </td>

                  <td>
                    <label class="badge badge-primary-soft brd-20"><i class="fa fa-calendar"></i> <?php echo my_date_show($amp->date); ?></label><br>
                    <label class="badge badge-primary-soft brd-20"><i class="fa fa-clock-o"></i> <?php echo date('h:i A',strtotime($amp->start_time))." ".date('h:i A',strtotime($amp->end_time)); ?></label>
                  </td>

                  <td>
                    <?php if ($amp->type == 'online'): ?>
                      <label class="badge badge-danger-soft brd-20"><i class="fa fa-circle"></i> <?php echo trans('online') ?> </label>
                      <?php else: ?>
                        <label class="badge badge-secondary-soft brd-20"><i class="fa fa-circle"></i> <?php echo trans('offline') ?></label>
                      <?php endif ?>
                    </td>

                    <td class="actions" width="15%">
                      <a style="cursor: pointer;" onclick="view_event('<?php echo html_escape($amp->id); ?>')" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="<?php echo trans('edit') ?>"><i class="fa fa-pencil"></i></a> &nbsp; &nbsp;

                      <a data-val="experience" data-id="<?php echo html_escape($amp->id); ?>" href="<?php echo base_url('clinic-admin/appointment/delete/'.html_escape($amp->id));?>" class="on-default remove-row delete_item" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash-o"></i></a>
                    </td>
                  </tr>

                  <?php $i++; endforeach; ?>
                </tbody>
              </table>

            </div>  

          </div>

        </div>
      </div>

    </section>
  </div>





<!--  -->