<h2>Listing List_members</h2>
<br>
<?php if ($list_members): ?>
<table class="zebra-striped">
	<thead>
		<tr>
			<th>Member id</th>
			<th>List id</th>
			<th>Email</th>
			<th>First name</th>
			<th>Last name</th>
			<th>Company</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($list_members as $list_member): ?>		<tr>

			<td><?php echo $list_member->member_id; ?></td>
			<td><?php echo $list_member->list_id; ?></td>
			<td><?php echo $list_member->email; ?></td>
			<td><?php echo $list_member->first_name; ?></td>
			<td><?php echo $list_member->last_name; ?></td>
			<td><?php echo $list_member->company; ?></td>
			<td>
				<?php echo Html::anchor('list/members/view/'.$list_member->id, 'View'); ?> |
				<?php echo Html::anchor('list/members/edit/'.$list_member->id, 'Edit'); ?> |
				<?php echo Html::anchor('list/members/delete/'.$list_member->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No List_members.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('list/members/create', 'Add new List member', array('class' => 'btn success')); ?>

</p>
