<h2>Editing List</h2>
<br>

<?php echo render('lists/_form'); ?>
<p>
	<?php echo Html::anchor('lists/view/'.$list->id, 'View'); ?> |
	<?php echo Html::anchor('lists', 'Back'); ?></p>
