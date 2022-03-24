<?php  
if(isset($doctors) && count($doctors)>0){
	?>
	<div class="content-wrapper">
		<!-- Main content -->
		<section class="content container">
			<div class="row">
				<div class="col-md-4">
					<div class="box list_area">
						<div class="box-header with-border">
							<div class="row">
								<div class="col-md-5">
									<center>
										<img class="profile-user-img img-responsive" src="<?php echo base_url($doctors['doctors']->thumb); ?>" alt="User profile picture" style="width:100px;height: 100px;border-radius: 50%;outline:3px solid lightgrey;outline-offset: 5px;">
									</center>
								</div>

								<div class="col-md-7 pt-25">
									<h3 class="profile-username"><?php echo $doctors['doctors']->name; ?></h3> 
									<div class="editviewdelete-icon">
										<a style="margin-right :10px;font-size: 18px;" href="#" class="change_password text-green" data-toggle="modal" data-target="#change_password_doctor"> <i class="fa fa-key"></i></a>

										<a style="margin-right :10px;font-size: 18px;" href="<?php echo base_url('clinic-admin/doctor/edit/').$doctors['doctors']->id;?>" data-toggle="tooltip" title="" class="text-light" data-original-title="Edit"><i class="fa fa-pencil"></i></a>

										<?php  
										if($doctors['doctors']->is_delete==0){
											?>
											<a style="margin-right :10px;font-size: 18px;" href="<?php echo base_url('clinic-admin/registration/disable/staff/').$doctors['doctors']->id;?>" class="text-red" data-toggle="tooltip" title="" onclick="return confirm('Are you sure you want to Delete this Record?');" data-original-title="Disable"> <i class="fa fa-trash"></i></a>
											<?php
										}
										else{
											?>
											<a style="margin-right :10px;font-size: 18px;" href="<?php echo base_url('clinic-admin/registration/enable/staff/').$doctors['doctors']->id;?>" class="text-red" data-toggle="tooltip" title="" onclick="return confirm('Are you sure you want to Delete this Record?');" data-original-title="Disable"> <i class="fa fa-trash"></i></a>
											<?php
										}
										?>

									</div>
								</div>

							</div>
						</div>
						<div class="box-body">
							<p><?php echo $doctors['doctors']->id; ?></p>
							<p class="text-capitalize"><?php echo $doctors['doctors']->role; ?></p>

							<!-- The Modal -->
							<div class="modal fade" id="change_password_doctor">
								<div class="modal-dialog">
									<div class="modal-content">
										<form action="<?php echo base_url('clinic-admin/registration/change-password/doctors'); ?>" method="post">
											<input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
											<input type="hidden" name="id" value="<?php echo $doctors['doctors']->id; ?>">
											<!-- Modal Header -->
											<div class="modal-header">
												<h4 class="modal-title">Change Password</h4>
												<button type="button" class="close" data-dismiss="modal">&times;</button>
											</div>

											<!-- Modal body -->
											<div class="modal-body">
												<div class="form-group">
													<label for="password">Password</label>
													<input type="password" class="form-control" name="new_pass" id="pass" autocomplete="off">
												</div>
												<div class="form-group">
													<label for="pwd">Confirm Password</label>
													<input type="password" class="form-control" name="confirm_pass" id="pwd">
												</div>
											</div>

											<!-- Modal footer -->
											<div class="modal-footer">
												<button type="submit" class="btn btn-primary" name="save" value="save">Save</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>	
				</div>

				<div class="col-md-8">
					<div class="box list_area">
						<div class="box-header with-border">
							<div class="pull-right">
								<a href="<?php echo base_url('clinic-admin/registered-staff'); ?>" class="btn btn-light-primary">Back</a>
							</div>
						</div>
						<div class="box-body">
							<div id="tabledata" class="mt-20">
								<?php  //$currency_symbol = $this->customlib->getSchoolCurrencyFormat();    ?>
								<div class="nav-tabs-custom border0" id="tabs">
									<ul class="nav nav-tabs">
										<li class="active">
											<a href="#profile"  data-toggle="tab" aria-expanded="true">Profile</a>
										</li>
										<li class="">
											<a href="#payroll"  data-toggle="tab" aria-expanded="true">Payroll</a>
										</li>
										<li class="">
											<a href="#leaves"  data-toggle="tab" aria-expanded="true">Leaves</a>
										</li>
										<li class="">
											<a href="#attendance"  data-toggle="tab" aria-expanded="true">Attendance</a>
										</li>
										<li class="">
											<a href="#document"  data-toggle="tab" aria-expanded="true">Document</a>
										</li>
										<li class="">
											<a href="#timeline"  data-toggle="tab" aria-expanded="true">Timeline</a>
										</li>
									</ul>    
									<div class="tab-content">

										<!-- For Profile -->
										<div class="tab-pane active" id="profile">   

											<div class="tshadow mb25 bozero">

												<div class="table-responsive around102 pt0">
													<table class="table table-hover table-striped tmb0">
														<tbody>
															<tr>
																<th width="24%">Gender</th>
																<td width="1%"><strong>:</strong></td>
																<td width="25%" style="border-right: 1px solid #ddd;"><?php echo $doctors['doctors']->gender; ?></td>
																<th width="24%">Date Of Birth</th>
																<td width="1%"><strong>:</strong></td>
																<td width="25%"><?php echo $doctors['doctors']->dob; ?></td>
															</tr>
															<tr>
																<th width="24%">Age</th>
																<td width="1%"><strong>:</strong></td>
																<td width="25%" style="border-right: 1px solid #ddd;"><?php echo $doctors['doctors']->dob; ?></td>
																<th width="24%">Marital Status</th>
																<td width="1%"><strong>:</strong></td>
																<td width="25%"><?php echo $doctors['doctors']->marital_status; ?></td>
															</tr>
															<tr>
																<th width="24%">Blood Group</th>
																<td width="1%"><strong>:</strong></td>
																<td width="25%" style="border-right: 1px solid #ddd;"><?php echo $doctors['doctors']->blood_group; ?></td>
																<th width="24%">Qualification</th>
																<td width="1%"><strong>:</strong></td>
																<td width="25%"><?php echo $doctors['doctors']->qualification; ?></td>
															</tr>                                           
															<tr>
																<th width="24%">Specialization</th>
																<td width="1%"><strong>:</strong></td>
																<td width="25%" style="border-right: 1px solid #ddd;"><?php echo $doctors['doctors']->speciality; ?></td>
																<th width="24%">GST Number</th>
																<td width="1%"><strong>:</strong></td>
																<td width="25%"><?php echo $doctors['doctors']->gst_number; ?></td>
															</tr>
															<tr>
																<th width="24%">Phone 1</th>
																<td width="1%"><strong>:</strong></td>
																<td width="25%" style="border-right: 1px solid #ddd;"><?php echo $doctors['doctors']->phone1; ?></td>                                                
																<th width="24%">Phone 2</th>
																<td width="1%"><strong>:</strong></td>
																<td width="25%"><?php echo $doctors['doctors']->phone2; ?></td>
															</tr>
															<tr>
																<th width="24%">Phone 3</th>
																<td width="1%"><strong>:</strong></td>
																<td width="25%" style="border-right: 1px solid #ddd;"><?php echo $doctors['doctors']->phone3; ?></td>
																<th width="24%">Phone 4</th>
																<td width="1%"><strong>:</strong></td>
																<td width="25%"><?php echo $doctors['doctors']->phone4; ?></td>
															</tr>
															<tr>
																<th width="24%">Email 1</th>
																<td width="1%"><strong>:</strong></td>
																<td width="25%" style="border-right: 1px solid #ddd;"><?php echo $doctors['doctors']->email; ?></td>
																<th width="24%">Email 2</th>
																<td width="1%"><strong>:</strong></td>
																<td width="25%"><?php echo $doctors['doctors']->email2; ?></td>
															</tr>
														</tbody>
													</table>
												</div> 
												<hr>

												<!-- For Address -->
												<h4 class="form_title">Address </h4>
												<div class="tshadow mb25 bozero">
													<div class="table-responsive around102 pt0">  
														<table class="table table-hover table-striped tmb0"><tbody>
															<tr>
																<th width="40%">Address (R)</th>
																<td width="1%"><strong>:</strong></td>
																<td width="59%"><?php echo $doctors['doctors']->address_r; ?></td>
															</tr>
															<tr>
																<th>Address (O)</th>
																<td width="1%"><strong>:</strong></td>
																<td><?php echo $doctors['doctors']->address_o; ?></td>
															</tr>
															<tr>
																<th>Address (Other if living away from city)</th>
																<td width="1%"><strong>:</strong></td>
																<td><?php echo $doctors['doctors']->address_other; ?></td>
															</tr>
															<tr>
																<th>PAN Number</th>
																<td width="1%"><strong>:</strong></td>
																<td><?php echo $doctors['doctors']->pan_number; ?></td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>

											<hr>

											<!-- For Vaccination -->
											<h4 class="form_title">Vaccination Information</h4>
											<div class="table-responsive around10 pt0">
												<table class="table table-striped table-bordered table-hover">
													<thead>
														<tr class="success table-info">
															<th>Vaccination Type</th>
															<th>Vaccination Date</th>
															<th>Reminder Date for Next</th>
															<th>Remarks</th>
															<th>Medical History</th>
														</tr>
													</thead>
													<tbody>
														<?php  
														if(isset($doctors['vaccination']) && count($doctors['vaccination'])>0){
															foreach($doctors['vaccination'] as $key=>$vac){
																?>
																<tr>
																	<td><?php echo $vac->vaccination_type ?></td>
																	<td><?php echo $vac->vaccination_date ?></td>
																	<td><?php echo $vac->reminder_date_for_next ?></td>
																	<td><?php echo $vac->vaccination_remarks ?></td>
																	<td><?php echo $vac->medical_history ?></td>
																</tr>
																<?php		
															}
														}
														else{
															?>
															<tr><th colspan="5">Data Not Found</th></tr>
															<?php
														}
														?>

													</tbody>
												</table>
											</div>

											<hr>


											<!-- For Insurance Information -->
											<h4 class="form_title">Insurance Information</h4>
											<div class="table-responsive around10 pt0">
												<table class="table  table-striped table-bordered table-hover">
													<thead>
														<tr class="success table-info">
															<th>Insurance</th>
															<th>Insurance Date	</th>
															<th>Renewal Date</th>
															<th>Amount Insured</th>
															<th>Amount Paid</th>
															<th>Allow Notifications</th>
															<th>Remark</th>
														</tr>
													</thead>
													<tbody>
														<?php  
														if(isset($doctors['insurance_details']) && count($doctors['insurance_details'])>0){
															foreach($doctors['insurance_details'] as $key=>$ins){
																?>
																<tr>
																	<td><?php echo $ins->insurance ?></td>
																	<td><?php echo $ins->insurance_date ?></td>
																	<td><?php echo $ins->renewal_date ?></td>
																	<td><?php echo $ins->amount_insured ?></td>
																	<td><?php echo $ins->amount_paid ?></td>
																	<td><?php echo ($ins->allow_notifications==1) ? 'Yes' : '--' ?></td>
																	<td><?php echo $ins->insurance_remarks ?></td>
																</tr>
																<?php		
															}
														}
														else{
															?>
															<tr><th colspan="7">Data Not Found</th></tr>
															<?php
														}
														?>

													</tbody>
												</table>
											</div>
											<hr>	

											<!-- For bank_details Information -->
											<h4 class="form_title">Bank Information</h4>
											<div class="table-responsive around10 pt0">
												<table class="table  table-striped table-bordered table-hover">
													<thead>
														<tr class="success table-info">
															<th>Bank Name</th>
															<th>Bank Account Number</th>
															<th>IFSC Code</th>
															<th>Remarks</th>
														</tr>
													</thead>
													<tbody>
														<?php  
														if(isset($doctors['bank_details']) && count($doctors['bank_details'])>0){
															foreach($doctors['bank_details'] as $key=>$bnk){
																?>
																<tr>
																	<td><?php echo $bnk->bank_name ?></td>
																	<td><?php echo $bnk->bank_account_number ?></td>
																	<td><?php echo $bnk->ifsc_code ?></td>
																	<td><?php echo $bnk->bank_remarks ?></td>
																</tr>
																<?php		
															}
														}
														else{
															?>
															<tr><th colspan="4">Data Not Found</th></tr>
															<?php
														}
														?>

													</tbody>
												</table>
											</div>

										</div>

									</div>

									<div class="tab-pane" id="payroll">

									</div>

									<div class="tab-pane" id="leaves">

									</div>

									<div class="tab-pane" id="attendance">

									</div>

									<div class="tab-pane" id="document">

									</div>

									<div class="tab-pane" id="timeline">

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>	
			</div>

		</div>
	</section>
</div>
<?php
}
elseif(isset($staff) && count($staff)>0){
	?>
	<div class="content-wrapper">
		<!-- Main content -->
		<section class="content container">
			<div class="row">
				<div class="col-md-4">
					<div class="box list_area">
						<div class="box-header with-border">
							<div class="row">
								<div class="col-md-5">
									<center>
										<img class="profile-user-img img-responsive" src="<?php echo base_url($staff['staff'][0]['thumb']); ?>" alt="User profile picture" style="width:100px;height: 100px;border-radius: 50%;outline:3px solid lightgrey;outline-offset: 5px;">
									</center>
								</div>

								<div class="col-md-7 pt-25">
									<h3 class="profile-username"><?php echo $staff['staff'][0]['name']; ?></h3> 
									<div class="editviewdelete-icon">

										<a style="margin-right :10px;font-size: 18px;" href="#" class="change_password text-green" data-toggle="modal" data-target="#change_password_staff"> <i class="fa fa-key"></i></a>

										<a style="margin-right :10px;font-size: 18px;" href="<?php echo base_url('clinic-admin/staff/edit/').$staff['staff'][0]['id'];?>" data-toggle="tooltip" title="" class="text-light" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
										<?php  

										if($staff['staff'][0]['is_deleted']==0){
											?>
											<a style="margin-right :10px;font-size: 18px;" href="<?php echo base_url('clinic-admin/registration/disable/staff/').$staff['staff'][0]['id'];?>" class="text-red" data-toggle="tooltip" title="" onclick="return confirm('Are you sure you want to Delete this Record?');" data-original-title="Disable"> <i class="fa fa-trash"></i></a>
											<?php
										}
										else{
											?>
											<a style="margin-right :10px;font-size: 18px;" href="<?php echo base_url('clinic-admin/registration/enable/staff/').$staff['staff'][0]['id'];?>" class="text-red" data-toggle="tooltip" title="" onclick="return confirm('Are you sure you want to Delete this Record?');" data-original-title="Disable"> <i class="fa fa-trash"></i></a>
											<?php
										}

										?>
									</div>
								</div>

							</div>
						</div>
						<div class="box-body">
							<p><?php echo $staff['staff'][0]['id']; ?></p>
							<p class="text-capitalize"><?php echo $staff['staff'][0]['role']; ?></p>
							<p class="text-capitalize"><?php echo $staff['staff'][0]['department']; ?></p>
							<p class="text-capitalize"><?php echo $staff['staff'][0]['designation']; ?></p>

							<!-- The Modal -->
							<div class="modal fade" id="change_password_staff">
								<div class="modal-dialog">
									<div class="modal-content">
										<form action="<?php echo base_url('clinic-admin/registration/change-password/staffs'); ?>" method="post">
											<input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
											<input type="hidden" name="id" value="<?php echo $staff['staff'][0]['id']; ?>">
											<!-- Modal Header -->
											<div class="modal-header">
												<h4 class="modal-title">Change Password</h4>
												<button type="button" class="close" data-dismiss="modal">&times;</button>
											</div>

											<!-- Modal body -->
											<div class="modal-body">
												<div class="form-group">
													<label for="password">Password</label>
													<input type="password" class="form-control" name="new_pass" id="pass" autocomplete="off">
												</div>
												<div class="form-group">
													<label for="pwd">Confirm Password</label>
													<input type="password" class="form-control" name="confirm_pass" id="pwd">
												</div>
											</div>

											<!-- Modal footer -->
											<div class="modal-footer">
												<button type="submit" class="btn btn-primary" name="save" value="save">Save</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>	
				</div>

				<div class="col-md-8">
					<div class="box list_area">
						<div class="box-header with-border">
							<div class="pull-right">
								<a href="<?php echo base_url('clinic-admin/registered-staff'); ?>" class="btn btn-light-primary">Back</a>
							</div>
						</div>
						<div class="box-body">
							<div id="tabledata" class="mt-20">
								<div class="nav-tabs-custom border0" id="tabs">
									<ul class="nav nav-tabs">
										<li class="active">
											<a href="#profile"  data-toggle="tab" aria-expanded="true">Profile</a>
										</li>
										<li class="">
											<a href="#payroll"  data-toggle="tab" aria-expanded="true">Payroll</a>
										</li>
										<li class="">
											<a href="#leaves"  data-toggle="tab" aria-expanded="true">Leaves</a>
										</li>
										<li class="">
											<a href="#attendance"  data-toggle="tab" aria-expanded="true">Attendance</a>
										</li>
										<li class="">
											<a href="#document"  data-toggle="tab" aria-expanded="true">Document</a>
										</li>
										<li class="">
											<a href="#timeline"  data-toggle="tab" aria-expanded="true">Timeline</a>
										</li>
									</ul>    
									<div class="tab-content">

										<!-- For Profile -->
										<div class="tab-pane active" id="profile">   

											<div class="tshadow mb25 bozero">
												<div class="table-responsive around102 pt0">
													<table class="table table-hover table-striped tmb0">
														<tbody>
															<tr>
																<th width="24%">Phone</th>
																<td width="1%"><strong>:</strong></td>
																<td width="25%" style="border-right: 1px solid #ddd;"><?php echo $staff['staff'][0]['phone']; ?></td>
																<th width="24%">Email</th>
																<td width="1%"><strong>:</strong></td>
																<td width="25%"><?php echo $staff['staff'][0]['email']; ?></td>
															</tr>
															<tr>
																<th width="24%">Gender</th>
																<td width="1%"><strong>:</strong></td>
																<td width="25%" style="border-right: 1px solid #ddd;"><?php echo $staff['staff'][0]['gender']; ?></td>
																<th width="24%">Marital Status</th>
																<td width="1%"><strong>:</strong></td>
																<td width="25%"><?php echo $staff['staff'][0]['marital_status']; ?></td>
															</tr>
															<tr>
																<th width="24%">Blood Group</th>
																<td width="1%"><strong>:</strong></td>
																<td width="25%" style="border-right: 1px solid #ddd;"><?php echo $staff['staff'][0]['blood_group']; ?></td>
																<th width="24%">Date Of Birth</th>
																<td width="1%"><strong>:</strong></td>
																<td width="25%"><?php echo $staff['staff'][0]['dob']; ?></td>
															</tr>
															<tr>
																<th width="24%">Father Name</th>
																<td width="1%"><strong>:</strong></td>
																<td width="25%" style="border-right: 1px solid #ddd;"><?php echo $staff['staff'][0]['father']; ?></td>
																<th width="24%">Mother Name</th>
																<td width="1%"><strong>:</strong></td>
																<td width="25%"><?php echo $staff['staff'][0]['mother']; ?></td>
															</tr>
															<tr>
																<th width="24%">Qualification</th>
																<td width="1%"><strong>:</strong></td>
																<td width="25%" style="border-right: 1px solid #ddd;"><?php echo $staff['staff'][0]['qualification']; ?></td>
																<th width="24%">Work Experience</th>
																<td width="1%"><strong>:</strong></td>
																<td width="25%"><?php echo $staff['staff'][0]['work_experience']; ?></td>
															</tr>
															<tr>
																<th width="24%">Specialization</th>
																<td width="1%"><strong>:</strong></td>
																<td width="25%" style="border-right: 1px solid #ddd;"><?php echo $staff['staff'][0]['specialization']; ?></td>
																<th width="24%">Note</th>
																<td width="1%"><strong>:</strong></td>
																<td width="25%"><?php echo $staff['staff'][0]['note']; ?></td>
															</tr>
														</tbody>
													</table>
												</div> 
												<hr>

												<!-- For Address -->
												<h4 class="form_title">Address </h4>
												<div class="tshadow mb25 bozero">   
													<div class="table-responsive around102 pt0">  
														<table class="table table-hover table-striped tmb0"><tbody>
															<tr>
																<th width="40%">Current Address</th>
																<td width="1%"><strong>:</strong></td>
																<td width="59%"><?php echo $staff['staff'][0]['current_address']; ?></td>
															</tr>
															<tr>
																<th width="40%">Permanent Address</th>
																<td width="1%"><strong>:</strong></td>
																<td width="59%"><?php echo $staff['staff'][0]['permanent_address']; ?></td>
															</tr>
															<tr>
																<th width="40%">PAN Number</th>
																<td width="1%"><strong>:</strong></td>
																<td width="59%"><?php echo $staff['staff'][0]['pan']; ?></td>
															</tr>
															<tr>
																<th width="40%">GST Number</th>
																<td width="1%"><strong>:</strong></td>
																<td width="59%"><?php echo $staff['staff'][0]['gst']; ?></td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>

											<hr>

											<!-- For bank_details Information -->
											<h4 class="form_title">Bank Information</h4>
											<div class="table-responsive around10 pt0">
												<table class="table  table-striped table-bordered table-hover">
													<thead>
														<tr class="success table-info">
															<th>Bank Name</th>
															<th>Bank Account Number</th>
															<th>IFSC Code</th>
															<th>Remarks</th>
														</tr>
													</thead>
													<tbody>
														<?php  
														if(isset($staff['bank_details']) && count($staff['bank_details'])>0){
															foreach($staff['bank_details'] as $key=>$bnk){
																?>
																<tr>
																	<td><?php echo $bnk->bank_name ?></td>
																	<td><?php echo $bnk->bank_account_number ?></td>
																	<td><?php echo $bnk->ifsc_code ?></td>
																	<td><?php echo $bnk->remarks ?></td>
																</tr>
																<?php		
															}
														}
														else{
															?>
															<tr><th colspan="4">Data Not Found</th></tr>
															<?php
														}
														?>

													</tbody>
												</table>
											</div>

											<hr>

											<!-- For Vaccination -->
											<h4 class="form_title">Vaccination Information</h4>
											<div class="table-responsive around10 pt0">
												<table class="table  table-striped table-bordered table-hover">
													<thead>
														<tr class="success table-info">
															<th>Vaccination Type</th>
															<th>Vaccination Date</th>
															<th>Reminder Date for Next</th>
															<th>Remarks</th>
															<th>Medical History</th>
														</tr>
													</thead>
													<tbody>
														<?php  
														if(isset($staff['vaccination']) && count($staff['vaccination'])>0){
															foreach($staff['vaccination'] as $key=>$vac){
																?>
																<tr>
																	<td><?php echo $vac->vaccination_type ?></td>
																	<td><?php echo $vac->vaccination_date ?></td>
																	<td><?php echo $vac->reminder_date_for_next ?></td>
																	<td><?php echo $vac->remarks ?></td>
																	<td><?php echo $vac->medical_history ?></td>
																</tr>
																<?php		
															}
														}
														else{
															?>
															<tr><th colspan="5">Data Not Found</th></tr>
															<?php
														}
														?>

													</tbody>
												</table>
											</div>

											<hr>


											<!-- For Insurance Information -->
											<h4 class="form_title">Insurance Information</h4>
											<div class="table-responsive around10 pt0">
												<table class="table  table-striped table-bordered table-hover">
													<thead>
														<tr class="success table-info">
															<th>Insurance</th>
															<th>Insurance Date	</th>
															<th>Renewal Date</th>
															<th>Amount Insured</th>
															<th>Amount Paid</th>
															<th>Allow Notifications</th>
															<th>Remark</th>
														</tr>
													</thead>
													<tbody>
														<?php  
														if(isset($staff['insurance_details']) && count($staff['insurance_details'])>0){
															foreach($staff['insurance_details'] as $key=>$ins){
																?>
																<tr>
																	<td><?php echo $ins->insurance ?></td>
																	<td><?php echo $ins->insurance_date ?></td>
																	<td><?php echo $ins->renewal_date ?></td>
																	<td><?php echo $ins->amount_insured ?></td>
																	<td><?php echo $ins->amount_paid ?></td>
																	<td><?php echo ($ins->allow_notifications==1) ? 'Yes' : '--' ?></td>
																	<td><?php echo $ins->remarks ?></td>
																</tr>
																<?php		
															}
														}
														else{
															?>
															<tr><th colspan="7">Data Not Found</th></tr>
															<?php
														}
														?>

													</tbody>
												</table>
											</div>

										</div>

									</div>

									<div class="tab-pane" id="payroll">

									</div>

									<div class="tab-pane" id="leaves">

									</div>

									<div class="tab-pane" id="attendance">

									</div>

									<div class="tab-pane" id="document">

									</div>

									<div class="tab-pane" id="timeline">

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>	
			</div>

		</div>
	</section>
</div>	
<?php
}
else{
	?>
	<?php
}
?>