<div id="content">
	<h1>Submission Successfully Submitted!</h1>

	<ul class="rules_summary" style="margin-left: 20px; margin-bottom: 20px;">
		<li>
			<span class="hbold">Angler Name: </span>
			<?php echo html_escape($angler->angler_name); ?>
		</li>
		<li>
			<span class="hbold">Team Name: </span>
			<?php echo html_escape($angler->team_name); ?>
		</li>
		<li>
			<span class="hbold">Shark Species: </span>
			<?php echo html_escape($angler->shark_species); ?> shark.
		</li>
		<li>
			<span class="hbold">Overall Length: </span>
			<?php echo html_escape($angler->overall); ?> inches.
		</li>
		<li>
			<span class="hbold">Fork Length: </span>
			<?php echo html_escape($angler->fork); ?> inches.
		</li>
		
		<?php 
			if($angler->shark_species == 'blacktip') {
				echo '<li><span class="hbold">Girth Length: </span>' . html_escape($angler->girth) . 'inches</li>';
				echo '<li><span class="hbold">Estimated Weight: </span>' . html_escape($angler->weight) . 'lbs</li>';
			}else {
				echo '';
			}
		?>
	</ul>

	<button type="button"><a href="/asl_project/submit/addEntry" title="Add Another Shark Entry">Add Another Entry</a></button>
</div><!-- #content -->
</div><!-- #pageWrapper -->

</div>