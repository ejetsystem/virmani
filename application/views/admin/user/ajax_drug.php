<label class="control-label p-0" for="example-input-normal"><?php echo trans('drugs') ?> <span class="text-danger">*</span></label>
<div class="d_flexs align-spaces">
	<div class="flex-between">
		<div class="col-lg-4">
			<select class="form-control select2 drugs w90" name="drugs[]">
				<option value=""><?php echo trans('select-drug') ?></option>
				<?php 
                                foreach ($drugs as $drug): ?>
					<option <?php if(isset($item['drug_id']) && $item['drug_id'] == $drug->id){echo "selected";} ?> value="<?php echo html_escape($drug->id); ?>">
						<?php echo html_escape($drug->medicine_name); ?>
					</option>
				<?php endforeach ?>
			</select>
		</div>

		<div class="col-lg-4 mt-0">
			<label>Patient</label>
			<select class="form-control select2" name="patient_id">
				<option value=""><?php echo trans('select-patient') ?></option>
				<?php  
				foreach($patients as $pat){
				?>
				<option value="<?php echo $pat->id; ?>"><?php echo $pat->name; ?></option>
				<?php  
				}	
				?>
			</select>
		</div>

		

		<div>
			<?php if (isset($p) && $p == 0): ?>
				<button type="button" title="Add new drug group" class="btn btn-light-primary add_field_button drug_btn"><i class="fa fa-plus-circle"></i> <?php echo trans('add-new-item') ?></button>
			<?php elseif (isset($p) && $p != 0): ?>
				<button type="button" class="btn btn-light-danger remove_field_group" data-id="<?= $p ?>"><i class="fa fa-trash"></i> <?php echo trans('remove-group') ?></button>
			<?php elseif (empty($p)): ?>
				<button type="button" title="Add new drug group" class="btn btn-light-primary add_field_button drug_btn"><i class="fa fa-plus-circle"></i> <?php echo trans('add-new-item') ?></button>
			<?php endif ?>
		</div>
	</div> 
</div>