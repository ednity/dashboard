<div class="row-fluid">
	<div class="span9">
		<h2><?php  echo __('Post');?></h2>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
			<dd>
				<?php echo h($post['Post']['id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Body'); ?></dt>
			<dd>
				<?php echo h($post['Post']['body']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Created'); ?></dt>
			<dd>
				<?php echo h($post['Post']['created']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Modified'); ?></dt>
			<dd>
				<?php echo h($post['Post']['modified']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('User'); ?></dt>
			<dd>
				<?php echo $this->Html->link($post['User']['id'], array('controller' => 'users', 'action' => 'view', $post['User']['id'])); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Group'); ?></dt>
			<dd>
				<?php echo $this->Html->link($post['Group']['id'], array('controller' => 'groups', 'action' => 'view', $post['Group']['id'])); ?>
				&nbsp;
			</dd>
		</dl>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('Edit %s', __('Post')), array('action' => 'edit', $post['Post']['id'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('Delete %s', __('Post')), array('action' => 'delete', $post['Post']['id']), null, __('Are you sure you want to delete # %s?', $post['Post']['id'])); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Posts')), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Post')), array('action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Users')), array('controller' => 'users', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('User')), array('controller' => 'users', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Groups')), array('controller' => 'groups', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Group')), array('controller' => 'groups', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Comments')), array('controller' => 'comments', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Comment')), array('controller' => 'comments', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Polls')), array('controller' => 'polls', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Poll')), array('controller' => 'polls', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Postfiles')), array('controller' => 'postfiles', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Postfile')), array('controller' => 'postfiles', 'action' => 'add')); ?> </li>
		</ul>
		</div>
	</div>
</div>

<div class="row-fluid">
	<div class="span9">
		<h3><?php echo __('Related %s', __('Comments')); ?></h3>
	<?php if (!empty($post['Comment'])):?>
		<table class="table">
			<tr>
				<th><?php echo __('Id'); ?></th>
				<th><?php echo __('Post Id'); ?></th>
				<th><?php echo __('User Id'); ?></th>
				<th><?php echo __('Body'); ?></th>
				<th><?php echo __('Created'); ?></th>
				<th><?php echo __('Modified'); ?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($post['Comment'] as $comment): ?>
			<tr>
				<td><?php echo $comment['id'];?></td>
				<td><?php echo $comment['post_id'];?></td>
				<td><?php echo $comment['user_id'];?></td>
				<td><?php echo $comment['body'];?></td>
				<td><?php echo $comment['created'];?></td>
				<td><?php echo $comment['modified'];?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('controller' => 'comments', 'action' => 'view', $comment['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('controller' => 'comments', 'action' => 'edit', $comment['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'comments', 'action' => 'delete', $comment['id']), null, __('Are you sure you want to delete # %s?', $comment['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php endif; ?>

	</div>
	<div class="span3">
		<ul class="nav nav-list">
			<li><?php echo $this->Html->link(__('New %s', __('Comment')), array('controller' => 'comments', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="row-fluid">
	<div class="span9">
		<h3><?php echo __('Related %s', __('Polls')); ?></h3>
	<?php if (!empty($post['Poll'])):?>
		<table class="table">
			<tr>
				<th><?php echo __('Id'); ?></th>
				<th><?php echo __('Title'); ?></th>
				<th><?php echo __('Body'); ?></th>
				<th><?php echo __('User Id'); ?></th>
				<th><?php echo __('Post Id'); ?></th>
				<th><?php echo __('Show User'); ?></th>
				<th><?php echo __('Progress'); ?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($post['Poll'] as $poll): ?>
			<tr>
				<td><?php echo $poll['id'];?></td>
				<td><?php echo $poll['title'];?></td>
				<td><?php echo $poll['body'];?></td>
				<td><?php echo $poll['user_id'];?></td>
				<td><?php echo $poll['post_id'];?></td>
				<td><?php echo $poll['show_user'];?></td>
				<td><?php echo $poll['progress'];?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('controller' => 'polls', 'action' => 'view', $poll['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('controller' => 'polls', 'action' => 'edit', $poll['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'polls', 'action' => 'delete', $poll['id']), null, __('Are you sure you want to delete # %s?', $poll['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php endif; ?>

	</div>
	<div class="span3">
		<ul class="nav nav-list">
			<li><?php echo $this->Html->link(__('New %s', __('Poll')), array('controller' => 'polls', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="row-fluid">
	<div class="span9">
		<h3><?php echo __('Related %s', __('Postfiles')); ?></h3>
	<?php if (!empty($post['Postfile'])):?>
		<table class="table">
			<tr>
				<th><?php echo __('Id'); ?></th>
				<th><?php echo __('Post Id'); ?></th>
				<th><?php echo __('File Name'); ?></th>
				<th><?php echo __('Save Name'); ?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($post['Postfile'] as $postfile): ?>
			<tr>
				<td><?php echo $postfile['id'];?></td>
				<td><?php echo $postfile['post_id'];?></td>
				<td><?php echo $postfile['file_name'];?></td>
				<td><?php echo $postfile['save_name'];?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('controller' => 'postfiles', 'action' => 'view', $postfile['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('controller' => 'postfiles', 'action' => 'edit', $postfile['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'postfiles', 'action' => 'delete', $postfile['id']), null, __('Are you sure you want to delete # %s?', $postfile['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php endif; ?>

	</div>
	<div class="span3">
		<ul class="nav nav-list">
			<li><?php echo $this->Html->link(__('New %s', __('Postfile')), array('controller' => 'postfiles', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
