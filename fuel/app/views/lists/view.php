<h2>Viewing #<?php echo $list->id; ?></h2>

<p>
	<strong>List id:</strong>
	<?php echo $list->list_id; ?></p>
<p>
	<strong>User id:</strong>
	<?php echo $list->user_id; ?></p>
<p>
	<strong>List name:</strong>
	<?php echo $list->list_name; ?></p>

<?php echo Html::anchor('lists/edit/'.$list->id, 'Edit'); ?> |
<?php echo Html::anchor('lists', 'Back'); ?>