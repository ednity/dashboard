<div class="row-fluid">
	<div class="span9">
		<?php echo $this->BootstrapForm->create('User', array('class' => 'form-horizontal'));?>
			<fieldset>
				<legend><?php echo __('Add %s', __('User')); ?></legend>
				<?php
				echo $this->BootstrapForm->input('username', array(
					'required' => 'required',
					'helpInline' => '<span class="label label-important">' . __('Required') . '</span>&nbsp;')
				);
				echo $this->BootstrapForm->input('password', array(
					'required' => 'required',
					'helpInline' => '<span class="label label-important">' . __('Required') . '</span>&nbsp;')
				);
				echo $this->BootstrapForm->input('email', array(
					'required' => 'required',
					'helpInline' => '<span class="label label-important">' . __('Required') . '</span>&nbsp;')
				);
				echo $this->BootstrapForm->input('firstname', array(
					'required' => 'required',
					'helpInline' => '<span class="label label-important">' . __('Required') . '</span>&nbsp;')
				);
				echo $this->BootstrapForm->input('lastname', array(
					'required' => 'required',
					'helpInline' => '<span class="label label-important">' . __('Required') . '</span>&nbsp;')
				);
				echo $this->BootstrapForm->input('category');
				echo $this->BootstrapForm->input('grade', array(
					'required' => 'required',
					'helpInline' => '<span class="label label-important">' . __('Required') . '</span>&nbsp;')
				);
				echo $this->BootstrapForm->input('photo_file_name');
				echo $this->BootstrapForm->input('gender');
				echo $this->BootstrapForm->input('school');
				echo $this->BootstrapForm->input('valid');
				echo $this->BootstrapForm->input('phone');
				echo $this->BootstrapForm->input('Group');
				?>
				<?php echo $this->BootstrapForm->submit(__('Submit'));?>
			</fieldset>
		<?php echo $this->BootstrapForm->end();?>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Users')), array('action' => 'index'));?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Answers')), array('controller' => 'answers', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('Answer')), array('controller' => 'answers', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Comments')), array('controller' => 'comments', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('Comment')), array('controller' => 'comments', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Forum Answers')), array('controller' => 'forum_answers', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('Forum Answer')), array('controller' => 'forum_answers', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Forum Comments')), array('controller' => 'forum_comments', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('Forum Comment')), array('controller' => 'forum_comments', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Forum Questions')), array('controller' => 'forum_questions', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('Forum Question')), array('controller' => 'forum_questions', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Pollchoices')), array('controller' => 'pollchoices', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('Pollchoice')), array('controller' => 'pollchoices', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Polls')), array('controller' => 'polls', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('Poll')), array('controller' => 'polls', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Posts')), array('controller' => 'posts', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('Post')), array('controller' => 'posts', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Questions')), array('controller' => 'questions', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('Question')), array('controller' => 'questions', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Quiz Attempts')), array('controller' => 'quiz_attempts', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('Quiz Attempt')), array('controller' => 'quiz_attempts', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Quizzes')), array('controller' => 'quizzes', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('Quiz')), array('controller' => 'quizzes', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Groups')), array('controller' => 'groups', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('Group')), array('controller' => 'groups', 'action' => 'add')); ?></li>
		</ul>
		</div>
	</div>
</div>