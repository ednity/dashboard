<div class="row-fluid">
	<div class="span9">
		<?php echo $this->BootstrapForm->create('Post', array('class' => 'form-horizontal'));?>
			<fieldset>
				<legend><?php echo __('Add %s', __('Post')); ?></legend>
				<?php
				echo $this->BootstrapForm->input('body');
				echo $this->BootstrapForm->input('user_id', array(
					'required' => 'required',
					'helpInline' => '<span class="label label-important">' . __('Required') . '</span>&nbsp;')
				);
				echo $this->BootstrapForm->input('group_id', array(
					'required' => 'required',
					'helpInline' => '<span class="label label-important">' . __('Required') . '</span>&nbsp;')
				);
				?>
				<?php echo $this->BootstrapForm->submit(__('Submit'));?>
			</fieldset>
		<?php echo $this->BootstrapForm->end();?>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Posts')), array('action' => 'index'));?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Users')), array('controller' => 'users', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('User')), array('controller' => 'users', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Groups')), array('controller' => 'groups', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('Group')), array('controller' => 'groups', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Comments')), array('controller' => 'comments', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('Comment')), array('controller' => 'comments', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Polls')), array('controller' => 'polls', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('Poll')), array('controller' => 'polls', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Postfiles')), array('controller' => 'postfiles', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('Postfile')), array('controller' => 'postfiles', 'action' => 'add')); ?></li>
		</ul>
		</div>
	</div>
</div>