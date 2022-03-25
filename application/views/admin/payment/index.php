
<div class="content-wrapper">

  <!-- Main content -->
  <section class="content container">
    <?php if (isset($page_title) && $page_title != "Edit"): ?>

      <div class="box list_area">
        <div class="box-header with-border">
          <?php if (isset($page_title) && $page_title == "Edit"): ?>
            <h3 class="box-title">Edit patients <a href="<?php echo base_url('admin/patients') ?>" class="pull-right btn btn-light-primary mt-15 btn-sm"><i class="fa fa-angle-left"></i> <?php echo trans('back') ?></a></h3>
            <?php else: ?>
              <h3 class="box-title"><?php echo trans('all-payment-history') ?> </h3>
            <?php endif; ?>
          </div>

          <div class="box-body">

            <div class="col-md-12 col-sm-12 col-xs-12 scroll table-responsive">
              <table class="table table-hover datatable">
                <thead>
                  <tr class="success table-info">
                    <th>#</th>
                    <th> <?php echo 'Date'; ?> </th>
                    <th> <?php echo 'Doctor Name'; ?> </th>
                    <th> <?php echo 'Description'; ?> </th>
                    <th> <?php echo 'Amount'; ?> </th>
                    <th> <?php echo 'Work Done'; ?> </th>
                    <th> <?php echo 'Action'; ?> </th>
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
                        <th><?php echo $ph->balance ?></th>
                        <th><a href="#" onclick="openModalWorkDone(<?php echo $ph->id ?>,<?php echo $ph->workdone_id ?>)" class="on-default view-row" data-placement="top" title="<?php echo trans('edit') ?>"><i class="fa fa-eye"></i></a> &nbsp;</th>
                        <th>
                          <!-- <a data-val="Category"  data-id="<?php echo $ph->description; ?>"  href="<?php echo base_url(); ?>admin/patients/deleteOpdPatientScan/<?php echo $ph->description; ?>/<?php echo $payment['id']; ?>" class="on-default remove-row delete_item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a> -->
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


  <!-- The Modal -->
  <div class="modal fade" id="add_stock_modal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Work Done</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <center>
            <table class="table table-striped w-75">
              <tr>
                <th width="20%">Tooth Name</th>
                <th width="10%"> : </th>
                <th><span id="tooth_name">Data info</span></th>
                <th></th>
                <th></th>
              </tr>

              <tr>
                <th width="20%">Work Done</th>
                <th width="10%"> : </th>
                <th><span id="work_done">Data info</span></th>
                <th></th>
                <th></th>
              </tr>

              <tr>
                <th width="20%">Treatement Code</th>
                <th width="10%"> : </th>
                <th><span id="treatment_code">Data info</span></th>
                <th></th>
                <th></th>
              </tr>

              <tr>
                <th width="20%">Doctor</th>
                <th width="10%"> : </th>
                <th><span class="text-capitalize" id="doctor_name">Data info</span></th>
                <th></th>
                <th></th>
              </tr>

              <tr>
                <th width="20%">Note & Diagnosis</th>
                <th width="10%"> : </th>
                <th><span id="note_diagnosis">Data info</span></th>
                <th></th>
                <th></th>
              </tr>


            </table>
          </center>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <p type="button" class="pull-right btn btn-danger btn-lg mt-25" data-dismiss="modal">Close</p>
        </div>
      </div>
    </div>
  </div>


  <script>
    function openModalWorkDone(payment_id,workdone_id){
      var post_data = {
        'payment_id' :payment_id,
        'workdone_id' :workdone_id,
        'csrf_test_name' : csrf_token
      };
      $.ajax({
        url: base_url+"admin/report/getWorkDone",
        type: "POST",
        data: post_data,
        success: function (data) {
          console.log(data);
          $("#tooth_name").text(data.print_tooth_name);
          $("#work_done").text(data.workdone_date);
          $("#treatment_code").text(data.workdoneon);
          $("#doctor_name").text(data.doctor_name);
          $("#note_diagnosis").text(data.notesdiagnosis);
          $("#add_stock_modal").modal("show");
        }
      });
    }
  </script>