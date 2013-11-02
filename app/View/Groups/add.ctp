<div class="row-fluid">
	<div class="span9">
		<?php echo $this->BootstrapForm->create('Group', array('class' => 'form-horizontal'));?>
			<fieldset>
				<legend><?php echo __('Add %s', __('Group')); ?></legend>
				<?php
				echo $this->BootstrapForm->input('groupname', array(
					'required' => 'required',
					'helpInline' => '<span class="label label-important">' . __('Required') . '</span>&nbsp;')
				);
				echo $this->BootstrapForm->input('groupcode', array(
					'required' => 'required',
					'helpInline' => '<span class="label label-important">' . __('Required') . '</span>&nbsp;')
				);
				echo $this->BootstrapForm->input('admin_id');
				echo $this->BootstrapForm->input('subject', array(
					'required' => 'required',
					'helpInline' => '<span class="label label-important">' . __('Required') . '</span>&nbsp;')
				);
				echo $this->BootstrapForm->input('grade', array(
					'required' => 'required',
					'helpInline' => '<span class="label label-important">' . __('Required') . '</span>&nbsp;')
				);
				echo $this->BootstrapForm->input('lock');
				echo $this->BootstrapForm->input('Quiz');
				echo $this->BootstrapForm->input('User');
				?>
				<?php echo $this->BootstrapForm->submit(__('Submit'));?>
			</fieldset>
		<?php echo $this->BootstrapForm->end();?>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Groups')), array('action' => 'index'));?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Users')), array('controller' => 'users', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('User')), array('controller' => 'users', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Forum Answers')), array('controller' => 'forum_answers', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('Forum Answer')), array('controller' => 'forum_answers', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Forum Comments')), array('controller' => 'forum_comments', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('Forum Comment')), array('controller' => 'forum_comments', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Forum Questions')), array('controller' => 'forum_questions', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('Forum Question')), array('controller' => 'forum_questions', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Posts')), array('controller' => 'posts', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('Post')), array('controller' => 'posts', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Quizzes')), array('controller' => 'quizzes', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('Quiz')), array('controller' => 'quizzes', 'action' => 'add')); ?></li>
		</ul>
		</div>
	</div>
</div>