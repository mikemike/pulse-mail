<?php echo Form::open(array('class' => 'form-stacked')); ?>

	<fieldset>
		<div class="clearfix">
			<?php echo Form::label('Template id', 'template_id'); ?>

			<div class="input">
				<?php echo Form::input('template_id', Input::post('template_id', isset($email) ? $email->template_id : ''), array('class' => 'span6')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Send began', 'send_began'); ?>

			<div class="input">
				<?php echo Form::input('send_began', Input::post('send_began', isset($email) ? $email->send_began : ''), array('class' => 'span6')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Send end', 'send_end'); ?>

			<div class="input">
				<?php echo Form::input('send_end', Input::post('send_end', isset($email) ? $email->send_end : ''), array('class' => 'span6')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Subject', 'subject'); ?>

			<div class="input">
				<?php echo Form::input('subject', Input::post('subject', isset($email) ? $email->subject : ''), array('class' => 'span6')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Body', 'body'); ?>

			<div class="input">
				<?php echo Form::textarea('body', Input::post('body', isset($email) ? $email->body : ''), array('class' => 'span10', 'rows' => 8)); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Success', 'success'); ?>

			<div class="input">
				<?php echo Form::input('success', Input::post('success', isset($email) ? $email->success : ''), array('class' => 'span6')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Fails', 'fails'); ?>

			<div class="input">
				<?php echo Form::input('fails', Input::post('fails', isset($email) ? $email->fails : ''), array('class' => 'span6')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Bounces', 'bounces'); ?>

			<div class="input">
				<?php echo Form::input('bounces', Input::post('bounces', isset($email) ? $email->bounces : ''), array('class' => 'span6')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Unsubscribes', 'unsubscribes'); ?>

			<div class="input">
				<?php echo Form::input('unsubscribes', Input::post('unsubscribes', isset($email) ? $email->unsubscribes : ''), array('class' => 'span6')); ?>

			</div>
		</div>
		<div class="actions">
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn primary')); ?>

		</div>
	</fieldset>
<?php echo Form::close(); ?>