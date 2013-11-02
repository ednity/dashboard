<div class="row-fluid">
	<div class="span9">
		<h2><?php  echo __('Postfile');?></h2>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
			<dd>
				<?php echo h($postfile['Postfile']['id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Post'); ?></dt>
			<dd>
				<?php echo $this->Html->link($postfile['Post']['id'], array('controller' => 'posts', 'action' => 'view', $postfile['Post']['id'])); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('File Name'); ?></dt>
			<dd>
				<?php echo h($postfile['Postfile']['file_name']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Save Name'); ?></dt>
			<dd>
				<?php echo h($postfile['Postfile']['save_name']); ?>
				&nbsp;
			</dd>
		</dl>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('Edit %s', __('Postfile')), array('action' => 'edit', $postfile['Postfile']['id'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('Delete %s', __('Postfile')), array('action' => 'delete', $postfile['Postfile']['id']), null, __('Are you sure you want to delete # %s?', $postfile['Postfile']['id'])); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Postfiles')), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Postfile')), array('action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Posts')), array('controller' => 'posts', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Post')), array('controller' => 'posts', 'action' => 'add')); ?> </li>
		</ul>
		</div>
	</div>
</div>

