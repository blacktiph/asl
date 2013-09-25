<?php
$sharkSpecies = array(
	'blacknose' => 'blacknose',
	'blacktip' => 'blacktip',
	'bull' => 'bull',
	'dusky' => 'dusky',
	'hammerhead' => 'hammerhead',
	'lemon' => 'lemon',
	'mako' => 'mako',
	'sandbar' => 'sandbar',
	'silky' => 'silky',
	'spinner' => 'spinner',
	'sand_tiger' => 'sand tiger',
	'tiger' => 'tiger',
);
?>

<div id="content">
	<h1>Submit Entry</h1>
	<p>Please enter exact numbers. Measurements must be accurate to the 1/8th of an inch. If you do not have a team, enter your full name.</p>

	<div id="submissionForm">
		<?php
			$attributes = array('class' => 'register');
			echo form_open_multipart('/asl_project/submit/addEntry', $attributes);
		?>
			<!-- ## Team & Angler ## -->
			<div class="subFormSection">
				<h2>Team Info</h2>
				<p>Please enter your correct team name and full name of the angler who caught the fish. If you are fishing solo, use full name</p>
				
				<?php echo form_label('Team Name', 'team_name'); ?>
				<?php 
					$options = 'placeholder="Team Sharks"';
					echo form_input('team_name', '', $options); 
				?>
				<?php echo form_error('team_name');?>

				<?php echo form_label('Angler Name', 'angler_name'); ?>
				<?php
					$options = 'placeholder="John Smith"';
					echo form_input('angler_name', '', $options);
				?>
				<?php echo form_error('angler_name');?>

				<?php echo form_label('Shark Species', 'shark_species'); ?>
				<?php echo form_dropdown('shark_species', $sharkSpecies); ?>
				<?php echo form_error('shark_species');?>
			</div>

			<!-- ## Angler Names and Age ## -->
			<div class="subFormSection">
				<h2>Measurements</h2>
				<p>Make sure that your measurements are accurate to the 1/8th of an inch. Tournament Organizers may alter the measurement entered at their discretion of the photo analysis.</p>

				<!-- Overall | Closeup -->
				<?php echo form_label('Overall Measurement', 'overall'); ?>
				<?php 
					$options = 'placeholder="78.25"';
					echo form_input('overall', '', $options);
				?>
				<?php echo form_error('overall');?>

				<!-- Fork Length -->
				<?php echo form_label('Fork Measurement', 'fork'); ?>
				<?php 
					$options = 'placeholder="69.6"';
					echo form_input('fork', '', $options);
				?>
				<?php echo form_error('fork');?>

				<!-- Girth Length -->
				<?php echo form_label('Girth Measurement', 'girth'); ?>
				<?php
					$options = 'placeholder="42.3"';
					echo form_input('girth', '', $options); 
				?>
				<?php echo form_error('girth');?>
			</div>

			<div class="subFormSection">
				<h2>Photos</h2>
				<p>Upload the photo of the shark that you caught.</p>

				<!-- Angler Photo -->
				<?php echo form_label('Angler Photo', 'angler_photo'); ?>
				<?php echo form_upload('angler_photo'); ?>
				<div class="error_msg">
					<?php
						if(empty($this->upload)) {
							// echo '<div class="error_msg">Image is missing</div>';
						}
						else {
							echo $this->upload->display_errors();
						}
					?>
				</div>
			</div>

			<!-- ## Submit Button ## -->
			<?php echo form_submit('submit', 'Submit'); ?>

		<?php echo form_close(); ?>
	</div>

</div><!-- #content -->
</div><!-- #pageWrapper -->