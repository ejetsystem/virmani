<footer class="main-footer">
  <div class="pull-right d-none d-sm-inline-block">
    <div class="version">Version: <?php echo html_escape($settings->version) ?></div>
  </div>
  <a href="<?php echo base_url() ?>"><?php echo html_escape($settings->copyright) ?></a>
</footer>

<?php include'js_msg_list.php'; ?>

<?php $success = $this->session->flashdata('msg'); ?>
<?php $error = $this->session->flashdata('error'); ?>
<input type="hidden" id="success" value="<?php echo html_escape($success); ?>">
<input type="hidden" id="error" value="<?php echo html_escape($error);?>">
<input type="hidden" id="base_url" value="<?php echo base_url(); ?>">


<!-- Custom js -->
<script src="<?php echo base_url() ?>assets/admin/js/admin.js?var=<?php echo settings()->version ?>&time=<?=time();?>"></script>
<script src="<?php echo base_url() ?>assets/admin/js/toast.js"></script>
<script src="<?php echo base_url() ?>assets/admin/js/bootstrap-tagsinput.min.js"></script>
<script src="<?php echo base_url()?>assets/admin/js/sweet-alert.min.js"></script>
<!-- Datatables-->
<script src="<?php echo base_url() ?>assets/admin/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/js/dataTables.bootstrap.js"></script>
<script src="<?php echo base_url() ?>assets/admin/js/validation.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url() ?>assets/admin/js/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/plugins/ckeditor/ckeditor.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url() ?>assets/admin/js/fastclick.js"></script>
<script src="<?php echo base_url() ?>assets/admin/js/template.js"></script>
<script src="<?php echo base_url() ?>assets/admin/js/bootstrap-datepicker.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/js/demo.js"></script>
<script src="<?php echo base_url() ?>assets/admin/js/printThis.js"></script>
<!-- select 2 -->
<script src="<?php echo base_url() ?>assets/admin/js/select2.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/js/bootstrap4-toggle.min.js"> </script>
<script src="<?php echo base_url() ?>assets/front/js/aos.js"></script>
<script src="<?php echo base_url() ?>assets/admin/js/bootstrap-switch.min.js"></script>
<!-- <script src="<?php echo base_url() ?>assets/admin/js/timepicki.js"></script> -->
<script src="<?php echo base_url() ?>assets/admin/js/lightbox.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/js/croppie.min.js"></script>

<script src="<?php echo base_url();?>assets/admin/js/patients.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/magnific-popup.css">
<script src="<?php echo base_url(); ?>assets/admin/js/jquery.magnific-popup.js"></script>
<!-- Modal for Add Appointment -->
  <div id="add-appointment-modal" class="modal fade " role="dialog">
    <div class="modal-dialog modal-dialog2 modal-lg" style="min-width: 70%">
      <div class="modal-content">
        <div class="modal-header">
          <h3><?php echo trans('add-appointment'); ?></h3>
          <button type="button" id="close-modal" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">&nbsp;</h4>
        </div>
        <div class="modal-body" id="render-patient-page">
          <?php echo $this->load->view('admin/appointments/add_appointment_page',$data=array(),TRUE);?>
          
        </div>
      </div>
    </div>
  </div>


<script type="text/javascript">
  var base_url = $('#base_url').val();
  $uploadCrop = $('#upload-demo').croppie({
    enableExif: true,
    viewport: {
      width: 300,
      height: 300
    },
    boundary: {
      width: 400,
      height: 400
    }
  });

  $('#upload').on('change', function () { 
    var reader = new FileReader();
    reader.onload = function (e) {
      $uploadCrop.croppie('bind', {
        url: e.target.result
      }).then(function(){
        console.log('jQuery bind complete');
      });
    }
    reader.readAsDataURL(this.files[0]);
  });

  $('.upload-result').on('click', function (ev) {

    $uploadCrop.croppie('result', {
      type: 'canvas',
      size: 'viewport'
    }).then(function (resp) {

      var post_data = {
        'image': resp,
        'csrf_test_name' : csrf_token
      };

      $.ajax({
        url: base_url+"admin/profile/upload_avatar",
        type: "POST",
        data: post_data,
        success: function (data) {
          $('.profile-user-img').attr("src", resp);
          $('.crop_area').hide();
          $('.profile_form').show();
        }
      });
    });
  });

  $(document).on("click",".crop_avatar", function () {
    $('.crop_area').show();
    $('.profile_form').hide();
  });

  $(document).on("click",".crop_back", function () {
    $('.crop_area').hide();
    $('.profile_form').show();
  });

  // Start for Vaccination  
  count_vaccination = 1;
  $(".add-more-vaccination").click(function(){
    add_vaccination = `<div class="row" id="delete-vaccination`+count_vaccination+`">
    <div class="col-md-2">
    <div class="form-group">
    <label><?php echo ('Vaccination Type') ?> </label>
    <input type="text" name="vaccination_type[]" id="vaccination_type" class="form-control">
    </div>
    </div>

    <div class="col-md-2">
    <div class="form-group">
    <label><?php echo ('Vaccination Date') ?> </label>
    <input type="date" name="vaccination_date[]" id="vaccination_date" class="form-control">
    </div>
    </div>

    <div class="col-md-3">
    <div class="form-group">
    <label><?php echo ('Reminder Date for Next') ?> </label>
    <input type="date" name="reminder_date_for_next[]" id="reminder_date_for_next" class="form-control">
    </div>
    </div>

    <div class="col-md-2">
    <div class="form-group">
    <label><?php echo ('Remarks') ?></label>
    <input type="text" name="vaccination_remarks[]" id="vaccination_remarks" class="form-control">
    </div>
    </div>

    <div class="col-md-2">
    <div class="form-group">
    <label><?php echo ('Medical History') ?></label>
    <input type="text" name="medical_history[]" id="medical_history" class="form-control">
    </div>
    </div>
    
    <div class="col-md-1" style="margin-top: 13px;">
    <div class="form-group">
    <label></label>
    <p class="btn btn-danger" onclick="deleteVaccination(`+count_vaccination+`)"> Delete</p>
    </div>
    </div>

    </div>`;
    $("#vaccination-container").append(add_vaccination);
    count_vaccination++;
  });

  // Delete function for Vaccination
  function deleteVaccination(id){
    $("#delete-vaccination"+id).remove();
  } 

  // End for Vaccination 


  // Start for Bank Information  
  count_bank = 1;
  $(".add-more-bank").click(function(){
    add_bank = `<div class="row" id="delete-bank`+count_bank+`">
    <div class="col-md-2">
    <div class="form-group">
    <label><?php echo ('Bank Name') ?> </label>
    <input type="" name="bank_name[]" class="form-control">
    </div>
    </div>

    <div class="col-md-3">
    <div class="form-group">
    <label><?php echo ('Bank Account Number') ?> </label>
    <input type="number" name="bank_account_number[]" class="form-control">
    </div>
    </div>

    <div class="col-md-3">
    <div class="form-group">
    <label><?php echo ('IFSC Code') ?> </label>
    <input type="" name="ifsc_code[]" class="form-control">
    </div>
    </div>

    <div class="col-md-2">
    <div class="form-group">
    <label><?php echo ('Remarks') ?></label>
    <input type="" name="bank_remarks[]" class="form-control">
    </div>
    </div> 

    <div class="col-md-1" style="margin-top: 13px;">
    <div class="form-group">
    <label></label>
    <p class="btn btn-danger" onclick="deleteBank(`+count_bank+`)"> Delete</p>
    </div>
    </div>
    </div>`;
    $("#bank-container").append(add_bank);
    count_bank++;
  });

  // Delete function for Bank
  function deleteBank(id){
    $("#delete-bank"+id).remove();
  } 

  // End for Bank



  // Start for Insurance  Information  
  count_insurance = 1;
  $(".add-more-insurance").click(function(){
    add_insurance = `<div class="row" id="insurance-bank`+count_insurance+`">
    <div class="col-md-2">
    <div class="form-group">
    <label><?php echo ('Insurance') ?> </label>
    <input type="" name="insurance[]" class="form-control">
    </div>
    </div>

    <div class="col-md-2">
    <div class="form-group">
    <label><?php echo ('Insurance Date') ?> </label>
    <input type="date" name="insurance_date[]" class="form-control">
    </div>
    </div>

    <div class="col-md-2">
    <div class="form-group">
    <label><?php echo ('Renewal Date') ?> </label>
    <input type="date" name="renewal_date[]" class="form-control">
    </div>
    </div>

    <div class="col-md-2">
    <div class="form-group">
    <label><?php echo ('Amount Insured') ?> </label>
    <input type="number" name="amount_insured[]" class="form-control">
    </div>
    </div> 
    <div class="col-md-2">
    <div class="form-group">
    <label><?php echo ('Amount Paid') ?> </label>
    <input type="number" name="amount_paid[]" class="form-control">
    </div>
    </div> 
    
    <div class="col-md-2">
    <div class="form-group">
    <label><?php echo ('Allow Notifications') ?></label>
    <br>
    <input id="notifications" type="checkbox" value="1" name="allow_notifications[]" class="">
    <label for="notifications"><?php echo ('Yes') ?></label>
    </div>
    </div> 
    
    <div class="col-md-4">
    <div class="form-group">
    <label><?php echo ('Remarks') ?></label>
    <input id="notifications" type="text" name="insurance_remarks[]" class="form-control">
    </div>
    </div> 

    <div class="col-md-1" style="margin-top: 13px;">
    <div class="form-group">
    <label></label>
    <p class="btn btn-danger" onclick="deleteInsurance(`+count_insurance+`)"> Delete</p>
    </div>
    </div>
    </div>`;
    $("#insurance-container").append(add_insurance);
    count_insurance++;
  });

  // Delete function for Insurance 
  function deleteInsurance(id){
    $("#insurance-bank"+id).remove();
  } 

  // End for Insurance 

</script>

<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet" />
<script>
function successMsg(msg) {
     toastr.success(msg);
 }

 function errorMsg(msg) {
     toastr.error(msg);
 }

 function infoMsg(msg) {
     toastr.info(msg);
 }

 function warningMsg(msg) {
     toastr.warning(msg);
 }    
 $('.datepicker').datepicker();
</script>
<?php if (isset($page) && $page == 'Appointment'): ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
  <script>
    $(document).on("focusin",".timepicker", function () {
      $('input.timepicker').timepicker({});
    });
  </script>
<?php endif ?>

<!-- stripe js -->
<?php //$this->load->view('admin/include/stripe-js'); ?>

<!-- admin chart js -->
<?php if (isset($page_title) && $page_title == 'Dashboard'): ?>
  <?php $this->load->view('admin/include/charts'); ?>
<?php endif ?>

<!-- user chart js -->
<?php if (isset($page_title) && $page_title == 'User Dashboard'): ?>
  <?php $this->load->view('admin/include/charts_user'); ?>
<?php endif ?>

<!-- <script>
	$('.timepicker').timepicki();
	
	lightbox.option({
      'resizeDuration': 200,
      'wrapAround': true
    })
  </script> -->

</body>
</html>
