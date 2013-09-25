<div id="content">
	<h1>Register</h1>
	<p>Please enter all the information below. If you do not have a team, use your full name your the input field labeled "Team Name".</p>

	<div id="submissionForm">
		<!-- <form class="register"> -->
		<?php
			$attributes = array('class' => 'register');
			echo form_open('/asl_project/user/register', $attributes);
		?>

			<!-- ## Team Name ## -->
			<div class="subFormSection">
				<h2>Team Info</h2>
				<p>If you are fishing solo, use your full name.</p>
				<?php echo form_label('Team Name', 'team_name'); ?>
				<?php 
					$options = 'placeholder="Team Sharks"';
					echo form_input('team_name', '', $options); 
				?>
				<?php echo form_error('team_name');?>
			</div>

			<!-- ## Angler Names and Age ## -->
			<div class="subFormSection">
				<h2>Angler Info</h2>
				<p>Please enter your full name and correct age. This will help the program separate junior anglers from adult anglers.</p>
				<!-- Captain -->
				<ul>
					<li class="anglerName"><?php echo form_label('Team Captain', 'angler_1'); ?></li>
					<li class="anglerAge"><?php echo form_label('Age', 'angler_1_age'); ?></li>
				</ul>
				<ul class="anglerInput">
					<li class="anglerName">
						<?php 
							$options = 'placeholder="John Smith"';
							echo form_input('angler_1', '', $options); 
						?>
						<?php echo form_error('angler_1');?>
					</li>
					<li class="anglerAge">
						<?php 
							$options = 'placeholder="25"';
							echo form_input('angler_1_age', '', $options); 
						?>
						<?php echo form_error('angler_1_age');?>
					</li>
				</ul>

				<!-- Angler 2 -->
				<ul>
					<li class="anglerName"><?php echo form_label('Angler 2', 'angler_2'); ?></li>
					<li class="anglerAge"><?php echo form_label('Age', 'angler_2_age'); ?></li>
				</ul>
				<ul class="anglerInput">
					<li class="anglerName">
						<?php 
							$options = 'placeholder="John Doe"';
							echo form_input('angler_2', '', $options); 
						?>
						<?php echo form_error('angler_2');?>
					</li>
					<li class="anglerAge">
						<?php 
							$options = 'placeholder="26"';
							echo form_input('angler_2_age', '', $options); 
						?>
						<?php echo form_error('angler_2_age');?>
					</li>
				</ul>

				<!-- Angler 3 -->
				<ul>
					<li class="anglerName"><?php echo form_label('Angler 3', 'angler_3'); ?></li>
					<li class="anglerAge"><?php echo form_label('Age', 'angler_3_age'); ?></li>
				</ul>
				<ul class="anglerInput">
					<li class="anglerName">
						<?php 
							$options = 'placeholder="Jane Doe"';
							echo form_input('angler_3', '', $options); 
						?>
						<?php echo form_error('angler_3');?>
					</li>
					<li class="anglerAge">
						<?php 
							$options = 'placeholder="23"';
							echo form_input('angler_3_age', '', $options); 
						?>
						<?php echo form_error('angler_3_age');?>
					</li>
				</ul>

				<!-- Angler 4 -->
				<ul>
					<li class="anglerName"><?php echo form_label('Angler 4', 'angler_4'); ?></li>
					<li class="anglerAge"><?php echo form_label('Age', 'angler_4_age'); ?></li>
				</ul>
				<ul class="anglerInput">
					<li class="anglerName">
						<?php 
							$options = 'placeholder="Bob Rogers"';
							echo form_input('angler_4', '', $options); 
						?>
						<?php echo form_error('angler_4');?>
					</li>
					<li class="anglerAge">
						<?php 
							$options = 'placeholder="30"';
							echo form_input('angler_4_age', '', $options); 
						?>
						<?php echo form_error('angler_4_age');?>
					</li>
				</ul>

				<!-- Angler 5 -->
				<ul>
					<li class="anglerName"><?php echo form_label('Angler 5', 'angler_5'); ?></li>
					<li class="anglerAge"><?php echo form_label('Age', 'angler_5_age'); ?></li>
				</ul>
				<ul class="anglerInput">
					<li class="anglerName">
						<?php 
							$options = 'placeholder="Mike Smith"';
							echo form_input('angler_5', '', $options); 
						?>
						<?php echo form_error('angler_5');?>
					</li>
					<li class="anglerAge">
						<?php 
							$options = 'placeholder="18"';
							echo form_input('angler_5_age', '', $options); 
						?>
						<?php echo form_error('angler_5_age');?>
					</li>
				</ul>
			</div>

			<!-- ## Username & Password ## -->
			<div class="subFormSection">
				<h2>Login Info</h2>
				<p>Please select a username and password that is easier to remember. Most anglers are delirious towards the end of the tournament when they submit their catches.</p>
				<?php echo form_label('Username', 'username'); ?>
				<?php 
					$options = 'placeholder="Username"';
					echo form_input('username', '', $options); 
				?>
				<?php echo form_error('username');?>

				<?php echo form_label('Password', 'password'); ?>
				<?php echo form_password('password'); ?>
				<?php echo form_error('password');?>
			</div>

			<!-- ## Submit Button ## -->
			<?php echo form_submit('register', 'Register'); ?>

		<?php echo form_close(); ?>
	</div>

</div><!-- #content -->
</div><!-- #pageWrapper -->