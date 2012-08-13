<h2>Viewing #<?php echo $email->id; ?></h2>

<p>
	<strong>Template id:</strong>
	<?php echo $email->template_id; ?></p>
<p>
	<strong>Send began:</strong>
	<?php echo $email->send_began; ?></p>
<p>
	<strong>Send end:</strong>
	<?php echo $email->send_end; ?></p>
<p>
	<strong>Subject:</strong>
	<?php echo $email->subject; ?></p>
<p>
	<strong>Body:</strong>
	<?php echo $email->body; ?></p>
<p>
	<strong>Success:</strong>
	<?php echo $email->success; ?></p>
<p>
	<strong>Fails:</strong>
	<?php echo $email->fails; ?></p>
<p>
	<strong>Bounces:</strong>
	<?php echo $email->bounces; ?></p>
<p>
	<strong>Unsubscribes:</strong>
	<?php echo $email->unsubscribes; ?></p>

<?php echo Html::anchor('email/edit/'.$email->id, 'Edit'); ?> |
<?php echo Html::anchor('email', 'Back'); ?>