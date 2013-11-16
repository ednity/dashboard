<div class="row">
	<div class="col-9">
		<h2><?php echo __('List %s', __('Answers'));?></h2>

		<p>
			<?php echo $this->BootstrapPaginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?>
		</p>

		<table class="table">
			<tr>
				<th><?php echo $this->BootstrapPaginator->sort('id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('user_id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('question_id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('answer');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('created');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('modified');?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($answers as $answer): ?>
			<tr>
				<td><?php echo h($answer['Answer']['id']); ?>&nbsp;</td>
				<td>
					<?php echo $this->Html->link($answer['User']['name'], array('controller' => 'users', 'action' => 'view', $answer['User']['id'])); ?>
				</td>
				<td>
					<?php echo $this->Html->link($answer['Question']['title'], array('controller' => 'questions', 'action' => 'view', $answer['Question']['id'])); ?>
				</td>
				<td><?php echo h($answer['Answer']['answer']); ?>&nbsp;</td>
				<td><?php echo h($answer['Answer']['created']); ?>&nbsp;</td>
				<td><?php echo h($answer['Answer']['modified']); ?>&nbsp;</td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('action' => 'view', $answer['Answer']['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $answer['Answer']['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $answer['Answer']['id']), null, __('Are you sure you want to delete # %s?', $answer['Answer']['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>

		<?php echo $this->BootstrapPaginator->pagination(); ?>
	</div>
	<div class="col-3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('Answer')), array('action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Users')), array('controller' => 'users', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('User')), array('controller' => 'users', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Questions')), array('controller' => 'questions', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Question')), array('controller' => 'questions', 'action' => 'add')); ?> </li>
		</ul>
		</div>
	</div>
</div>
