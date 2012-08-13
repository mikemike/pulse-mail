<h2>Listing Emails</h2>
<br>
<?php if ($emails): ?>
<table class="zebra-striped">
	<thead>
		<tr>
			<th>Template id</th>
			<th>Send began</th>
			<th>Send end</th>
			<th>Subject</th>
			<th>Body</th>
			<th>Success</th>
			<th>Fails</th>
			<th>Bounces</th>
			<th>Unsubscribes</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($emails as $email): ?>		<tr>

			<td><?php echo $email->template_id; ?></td>
			<td><?php echo $email->send_began; ?></td>
			<td><?php echo $email->send_end; ?></td>
			<td><?php echo $email->subject; ?></td>
			<td><?php echo $email->body; ?></td>
			<td><?php echo $email->success; ?></td>
			<td><?php echo $email->fails; ?></td>
			<td><?php echo $email->bounces; ?></td>
			<td><?php echo $email->unsubscribes; ?></td>
			<td>
				<?php echo Html::anchor('email/view/'.$email->id, 'View'); ?> |
				<?php echo Html::anchor('email/edit/'.$email->id, 'Edit'); ?> |
				<?php echo Html::anchor('email/delete/'.$email->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Emails.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('email/create', 'Add new Email', array('class' => 'btn success')); ?>

</p>
