<h2>Editing List_member</h2>
<br>

<?php echo render('list\members/_form'); ?>
<p>
	<?php echo Html::anchor('list/members/view/'.$list_member->id, 'View'); ?> |
	<?php echo Html::anchor('list/members', 'Back'); ?></p>
