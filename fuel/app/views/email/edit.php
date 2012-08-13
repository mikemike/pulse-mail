<h2>Editing Email</h2>
<br>

<?php echo render('email/_form'); ?>
<p>
	<?php echo Html::anchor('email/view/'.$email->id, 'View'); ?> |
	<?php echo Html::anchor('email', 'Back'); ?></p>
