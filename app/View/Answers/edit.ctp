<div class="row-fluid">
	<div class="span9">
		<?php echo $this->BootstrapForm->create('Answer', array('class' => 'form-horizontal'));?>
			<fieldset>
				<legend><?php echo __('Edit %s', __('Answer')); ?></legend>
				<?php
				echo $this->BootstrapForm->input('user_id');
				echo $this->BootstrapForm->input('question_id');
				echo $this->BootstrapForm->input('answer');
				echo $this->BootstrapForm->hidden('id');
				?>
				<?php echo $this->BootstrapForm->submit(__('Submit'));?>
			</fieldset>
		<?php echo $this->BootstrapForm->end();?>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Answer.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Answer.id'))); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Answers')), array('action' => 'index'));?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Users')), array('controller' => 'users', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('User')), array('controller' => 'users', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Questions')), array('controller' => 'questions', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('Question')), array('controller' => 'questions', 'action' => 'add')); ?></li>
		</ul>
		</div>
	</div>
</div>