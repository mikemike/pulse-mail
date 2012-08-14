<h2>Viewing #<?php echo $list_member->id; ?></h2>

<p>
	<strong>Member id:</strong>
	<?php echo $list_member->member_id; ?></p>
<p>
	<strong>List id:</strong>
	<?php echo $list_member->list_id; ?></p>
<p>
	<strong>Email:</strong>
	<?php echo $list_member->email; ?></p>
<p>
	<strong>First name:</strong>
	<?php echo $list_member->first_name; ?></p>
<p>
	<strong>Last name:</strong>
	<?php echo $list_member->last_name; ?></p>
<p>
	<strong>Company:</strong>
	<?php echo $list_member->company; ?></p>

<?php echo Html::anchor('list/members/edit/'.$list_member->id, 'Edit'); ?> |
<?php echo Html::anchor('list/members', 'Back'); ?>