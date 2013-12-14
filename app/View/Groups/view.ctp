<div class="row">
	<div class="col-sm-9">
		<h2><?php  echo __('Group');?></h2>
		<table class="table">
			<thead>
				<tr>
					<th>ID</th>
					<th>グループ名</th>
					<th>グループコード</th>
					<th>人数</th>
				</tr>
			</thead>
			<tboy>
				<tr>
					<td><?php echo h($group['Group']['id']); ?></td>
					<td><?php echo h($group['Group']['groupname']); ?></td>
					<td><?php echo h($group['Group']['groupcode']); ?></td>
					<td><?php echo $users_num;?></td>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="col-sm-3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li><?php echo $this->Html->link('グループ編集', array('action' => 'edit', $group['Group']['id'])); ?> </li>
			<li><?php echo $this->Html->link('グループ一覧', array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link('ユーザ一覧', array('controller' => 'users', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link('投稿一覧', array('controller' => 'posts', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link('クイズ一覧', array('controller' => 'quizzes', 'action' => 'index')); ?> </li>
		</ul>
		</div>
	</div>
</div>

<div class="row-fluid">
	<div class="span9">
		<h3><?php echo __('Related %s', __('Forum Answers')); ?></h3>
	<?php if (!empty($group['ForumAnswer'])):?>
		<table class="table">
			<tr>
				<th><?php echo __('Id'); ?></th>
				<th><?php echo __('Body'); ?></th>
				<th><?php echo __('Created'); ?></th>
			</tr>
		<?php foreach ($group['ForumAnswer'] as $forumAnswer): ?>
			<tr>
				<td><?php echo $forumAnswer['id'];?></td>
				<td><?php echo $forumAnswer['body'];?></td>
				<td><?php echo $forumAnswer['created'];?></td>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php endif; ?>

	</div>
</div>
<div class="row-fluid">
	<div class="span9">
		<h3><?php echo __('Related %s', __('Forum Comments')); ?></h3>
	<?php if (!empty($group['ForumComment'])):?>
		<table class="table">
			<tr>
				<th><?php echo __('Id'); ?></th>
				<th><?php echo __('User Id'); ?></th>
				<th><?php echo __('Group Id'); ?></th>
				<th><?php echo __('Forum Answer Id'); ?></th>
				<th><?php echo __('Body'); ?></th>
				<th><?php echo __('Created'); ?></th>
				<th><?php echo __('Modified'); ?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($group['ForumComment'] as $forumComment): ?>
			<tr>
				<td><?php echo $forumComment['id'];?></td>
				<td><?php echo $forumComment['user_id'];?></td>
				<td><?php echo $forumComment['group_id'];?></td>
				<td><?php echo $forumComment['forum_answer_id'];?></td>
				<td><?php echo $forumComment['body'];?></td>
				<td><?php echo $forumComment['created'];?></td>
				<td><?php echo $forumComment['modified'];?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('controller' => 'forum_comments', 'action' => 'view', $forumComment['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('controller' => 'forum_comments', 'action' => 'edit', $forumComment['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'forum_comments', 'action' => 'delete', $forumComment['id']), null, __('Are you sure you want to delete # %s?', $forumComment['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php endif; ?>

	</div>
</div>
<div class="row-fluid">
	<div class="span9">
		<h3><?php echo __('Related %s', __('Forum Questions')); ?></h3>
	<?php if (!empty($group['ForumQuestion'])):?>
		<table class="table">
			<tr>
				<th><?php echo __('Id'); ?></th>
				<th><?php echo __('Title'); ?></th>
				<th><?php echo __('Body'); ?></th>
				<th><?php echo __('Created'); ?></th>
			</tr>
		<?php foreach ($group['ForumQuestion'] as $forumQuestion): ?>
			<tr>
				<td><?php echo $forumQuestion['id'];?></td>
				<td><?php echo $forumQuestion['title'];?></td>
				<td><?php echo $forumQuestion['body'];?></td>
				<td><?php echo $forumQuestion['created'];?></td>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php endif; ?>

	</div>
</div>
<div class="row-fluid">
	<div class="span9">
		<h3><?php echo __('Related %s', __('Posts')); ?></h3>
	<?php if (!empty($group['Post'])):?>
		<table class="table">
			<tr>
				<th><?php echo __('Id'); ?></th>
				<th><?php echo __('Body'); ?></th>
				<th><?php echo __('Created'); ?></th>
				<th><?php echo __('Modified'); ?></th>
				<th><?php echo __('User Id'); ?></th>
				<th><?php echo __('Group Id'); ?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($group['Post'] as $post): ?>
			<tr>
				<td><?php echo $post['id'];?></td>
				<td><?php echo $post['body'];?></td>
				<td><?php echo $post['created'];?></td>
				<td><?php echo $post['modified'];?></td>
				<td><?php echo $post['user_id'];?></td>
				<td><?php echo $post['group_id'];?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('controller' => 'posts', 'action' => 'view', $post['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('controller' => 'posts', 'action' => 'edit', $post['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'posts', 'action' => 'delete', $post['id']), null, __('Are you sure you want to delete # %s?', $post['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php endif; ?>

	</div>
</div>
<div class="row-fluid">
	<div class="span9">
		<h3><?php echo __('Related %s', __('Quizzes')); ?></h3>
	<?php if (!empty($group['Quiz'])):?>
		<table class="table">
			<tr>
				<th><?php echo __('Id'); ?></th>
				<th><?php echo __('Title'); ?></th>
				<th><?php echo __('Time'); ?></th>
				<th><?php echo __('Question Count'); ?></th>
				<th><?php echo __('Due Date'); ?></th>
			</tr>
		<?php foreach ($group['Quiz'] as $quiz): ?>
			<tr>
				<td><?php echo $quiz['id'];?></td>
				<td><?php echo $quiz['title'];?></td>
				<td><?php echo $quiz['time'];?></td>
				<td><?php echo $quiz['question_count'];?></td>
				<td><?php echo $quiz['due_date'];?></td>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php endif; ?>

	</div>
</div>

