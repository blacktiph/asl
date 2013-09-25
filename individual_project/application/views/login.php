<div id="content">
	<div id="submissionForm">

		<?php
			$attributes = array('class' => 'login');
			echo form_open('/asl_project/user/login', $attributes);
		?>
			<ul class="upperLogin">
				<h1>Login</h1>
				<p>Please use the login information provided to you at the Anglers Meeting.</p>
				<?php echo form_label('Username', 'username'); ?>
				<?php 
					$options = 'placeholder="Username"';
					echo form_input('username', '', $options); 
				?>
				<?php echo form_error('username');?>

				<?php echo form_label('Password', 'password'); ?>
				<?php echo form_password('password'); ?>
				<?php echo form_error('password');?>
			</ul>

			<ul class="lowerLogin">
				<li>
					<?php 
						$options = 'id="loginButton"';
						echo form_submit('login', 'Login', $options);
					?>
				</li>
				<li><a href="/asl_project/user/register">Register</a></li>
			</ul>
		<?php echo form_close(); ?>
	</div>

</div><!-- #content -->
</div><!-- #pageWrapper -->