<h2>Listing Lists</h2>
<br>
<?php if ($lists): ?>
<table class="zebra-striped">
	<thead>
		<tr>
			<th>List id</th>
			<th>User id</th>
			<th>List name</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($lists as $list): ?>		<tr>

			<td><?php echo $list->list_id; ?></td>
			<td><?php echo $list->user_id; ?></td>
			<td><?php echo $list->list_name; ?></td>
			<td>
				<?php echo Html::anchor('lists/view/'.$list->id, 'View'); ?> |
				<?php echo Html::anchor('lists/edit/'.$list->id, 'Edit'); ?> |
				<?php echo Html::anchor('lists/delete/'.$list->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Lists.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('lists/create', 'Add new List', array('class' => 'btn success')); ?>

</p>
