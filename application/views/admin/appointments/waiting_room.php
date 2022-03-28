
<div class="content-wrapper">
  <!-- Main content -->
  <section class="content container">
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title"><?php echo "Waiting Room" ?></h3>
        <div class="pull-right">
          <a class="btn btn-primary" href="<?php echo base_url('clinic-admin/appointment/chairView'); ?>" title="">Chair View</a>
          <a class="btn btn-primary" href="<?php echo base_url('clinic-admin/appointment/calendar'); ?>" title="">Calendar View</a>
          <a class="btn btn-primary active" href="<?php echo base_url('clinic-admin/appointment/waiting-room'); ?>" title="">Waiting Room</a>
        </div>
      </div>

      <div class="box-body">
        <table class="table table-bordered datatable">
          <thead>
            <tr class="table-info">
              <th>S.No</th>
              <th>Patient Name</th>
              <th>Dentist</th>
              <th>Start Time</th>
              <th>End Time</th>
              <th>Cause/Treatment</th>
              <th>Chair</th>
              <th>Slot</th>
              <th>Action</th>
            </tr>
          </thead>

          <?php  
          if(count($appointments) >0){
            foreach($appointments as $k=>$ap){
          ?>
          <tbody>
            <tr class="<?php echo ($ap->appointment_status==5) ? 'bg-warning' : ''; ?>">
              <th><?php echo ++$k ?></th>
              <th><?php echo $ap->patient_name ?></th>
              <th><?php echo $ap->doctor_name ?></th>
              <th><label class="badge badge-primary-soft brd-20"><i class="fa fa-clock-o"></i> <?php echo date('h:i A',strtotime($ap->start_time)); ?></label></th>
              <th>
                <label class="badge badge-primary-soft brd-20"><i class="fa fa-clock-o"></i> <?php echo date('h:i A',strtotime($ap->end_time)); ?></label>
              </th>
              <th><?php echo $ap->cause ?></th>
              <th><?php echo $ap->chair ?></th>
              <th><?php echo $ap->slot_time ?></th>
              <th>
                <select class="form-control" name="appointment_status" id="appointment_status" onchange="changeAppointmentStatus(this.value,'<?php echo $ap->id ?>')">
                  <option <?php echo ($ap->appointment_status==4) ? 'selected' : ''; ?> value="4">Waiting Status</option>
                  <option <?php echo ($ap->appointment_status==5) ? 'selected' : ''; ?> value="5">Processing</option>
                  <option value="2">Completed</option>
                </select>
              </th>
            </tr>
          </tbody>
          <?php    
            }
          }
          ?>

        </table>
      </div>

    </div>
  </section>
</div>