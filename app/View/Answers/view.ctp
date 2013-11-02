<div class="row-fluid">
	<div class="span9">
		<h2><?php  echo __('Answer');?></h2>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
			<dd>
				<?php echo h($answer['Answer']['id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('User'); ?></dt>
			<dd>
				<?php echo $this->Html->link($answer['User']['id'], array('controller' => 'users', 'action' => 'view', $answer['User']['id'])); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Question'); ?></dt>
			<dd>
				<?php echo $this->Html->link($answer['Question']['title'], array('controller' => 'questions', 'action' => 'view', $answer['Question']['id'])); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Answer'); ?></dt>
			<dd>
				<?php echo h($answer['Answer']['answer']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Created'); ?></dt>
			<dd>
				<?php echo h($answer['Answer']['created']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Modified'); ?></dt>
			<dd>
				<?php echo h($answer['Answer']['modified']); ?>
				&nbsp;
			</dd>
		</dl>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('Edit %s', __('Answer')), array('action' => 'edit', $answer['Answer']['id'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('Delete %s', __('Answer')), array('action' => 'delete', $answer['Answer']['id']), null, __('Are you sure you want to delete # %s?', $answer['Answer']['id'])); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Answers')), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Answer')), array('action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Users')), array('controller' => 'users', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('User')), array('controller' => 'users', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Questions')), array('controller' => 'questions', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Question')), array('controller' => 'questions', 'action' => 'add')); ?> </li>
		</ul>
		</div>
	</div>
</div>

