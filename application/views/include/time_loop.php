<?php if (empty($times)): ?>
	<p>Schedule not available</p>
<?php else: ?>
	<p class="pick-date">Pick Appointment Time For  <span><?php echo month_show($date) ?></span></p>
	<?php foreach ($times as $time): ?>
		<?php $check = check_time($time->time, $date) ?>
		<div class="btn-group" data-aos="fade-in">
		    <label class="btn btn-light-primary btn-sm time_btn <?php if($check == TRUE){echo 'disabled';} ?>">
		      <input type="radio" class="time_inp" value="<?php echo $time->time ?>" name="time" autocomplete="off"> <?php echo $time->time ?>
		    </label>
		</div>
	<?php endforeach ?>

<?php endif ?>