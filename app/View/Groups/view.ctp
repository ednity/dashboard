<div class="row-fluid">
	<div class="span9">
		<h2><?php  echo __('Group');?></h2>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
			<dd>
				<?php echo h($group['Group']['id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Groupname'); ?></dt>
			<dd>
				<?php echo h($group['Group']['groupname']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Groupcode'); ?></dt>
			<dd>
				<?php echo h($group['Group']['groupcode']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('User'); ?></dt>
			<dd>
				<?php echo $this->Html->link($group['User']['id'], array('controller' => 'users', 'action' => 'view', $group['User']['id'])); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Subject'); ?></dt>
			<dd>
				<?php echo h($group['Group']['subject']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Grade'); ?></dt>
			<dd>
				<?php echo h($group['Group']['grade']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Lock'); ?></dt>
			<dd>
				<?php echo h($group['Group']['lock']); ?>
				&nbsp;
			</dd>
		</dl>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('Edit %s', __('Group')), array('action' => 'edit', $group['Group']['id'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('Delete %s', __('Group')), array('action' => 'delete', $group['Group']['id']), null, __('Are you sure you want to delete # %s?', $group['Group']['id'])); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Groups')), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Group')), array('action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Users')), array('controller' => 'users', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('User')), array('controller' => 'users', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Forum Answers')), array('controller' => 'forum_answers', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Forum Answer')), array('controller' => 'forum_answers', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Forum Comments')), array('controller' => 'forum_comments', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Forum Comment')), array('controller' => 'forum_comments', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Forum Questions')), array('controller' => 'forum_questions', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Forum Question')), array('controller' => 'forum_questions', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Posts')), array('controller' => 'posts', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Post')), array('controller' => 'posts', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Quizzes')), array('controller' => 'quizzes', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Quiz')), array('controller' => 'quizzes', 'action' => 'add')); ?> </li>
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
				<th><?php echo __('User Id'); ?></th>
				<th><?php echo __('Group Id'); ?></th>
				<th><?php echo __('Forum Question Id'); ?></th>
				<th><?php echo __('Body'); ?></th>
				<th><?php echo __('Created'); ?></th>
				<th><?php echo __('Modified'); ?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($group['ForumAnswer'] as $forumAnswer): ?>
			<tr>
				<td><?php echo $forumAnswer['id'];?></td>
				<td><?php echo $forumAnswer['user_id'];?></td>
				<td><?php echo $forumAnswer['group_id'];?></td>
				<td><?php echo $forumAnswer['forum_question_id'];?></td>
				<td><?php echo $forumAnswer['body'];?></td>
				<td><?php echo $forumAnswer['created'];?></td>
				<td><?php echo $forumAnswer['modified'];?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('controller' => 'forum_answers', 'action' => 'view', $forumAnswer['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('controller' => 'forum_answers', 'action' => 'edit', $forumAnswer['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'forum_answers', 'action' => 'delete', $forumAnswer['id']), null, __('Are you sure you want to delete # %s?', $forumAnswer['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php endif; ?>

	</div>
	<div class="span3">
		<ul class="nav nav-list">
			<li><?php echo $this->Html->link(__('New %s', __('Forum Answer')), array('controller' => 'forum_answers', 'action' => 'add'));?> </li>
		</ul>
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
	<div class="span3">
		<ul class="nav nav-list">
			<li><?php echo $this->Html->link(__('New %s', __('Forum Comment')), array('controller' => 'forum_comments', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="row-fluid">
	<div class="span9">
		<h3><?php echo __('Related %s', __('Forum Questions')); ?></h3>
	<?php if (!empty($group['ForumQuestion'])):?>
		<table class="table">
			<tr>
				<th><?php echo __('Id'); ?></th>
				<th><?php echo __('User Id'); ?></th>
				<th><?php echo __('Group Id'); ?></th>
				<th><?php echo __('Title'); ?></th>
				<th><?php echo __('Body'); ?></th>
				<th><?php echo __('View Count'); ?></th>
				<th><?php echo __('Category'); ?></th>
				<th><?php echo __('Img'); ?></th>
				<th><?php echo __('Created'); ?></th>
				<th><?php echo __('Modified'); ?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($group['ForumQuestion'] as $forumQuestion): ?>
			<tr>
				<td><?php echo $forumQuestion['id'];?></td>
				<td><?php echo $forumQuestion['user_id'];?></td>
				<td><?php echo $forumQuestion['group_id'];?></td>
				<td><?php echo $forumQuestion['title'];?></td>
				<td><?php echo $forumQuestion['body'];?></td>
				<td><?php echo $forumQuestion['view_count'];?></td>
				<td><?php echo $forumQuestion['category'];?></td>
				<td><?php echo $forumQuestion['img'];?></td>
				<td><?php echo $forumQuestion['created'];?></td>
				<td><?php echo $forumQuestion['modified'];?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('controller' => 'forum_questions', 'action' => 'view', $forumQuestion['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('controller' => 'forum_questions', 'action' => 'edit', $forumQuestion['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'forum_questions', 'action' => 'delete', $forumQuestion['id']), null, __('Are you sure you want to delete # %s?', $forumQuestion['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php endif; ?>

	</div>
	<div class="span3">
		<ul class="nav nav-list">
			<li><?php echo $this->Html->link(__('New %s', __('Forum Question')), array('controller' => 'forum_questions', 'action' => 'add'));?> </li>
		</ul>
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
	<div class="span3">
		<ul class="nav nav-list">
			<li><?php echo $this->Html->link(__('New %s', __('Post')), array('controller' => 'posts', 'action' => 'add'));?> </li>
		</ul>
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
				<th><?php echo __('User Id'); ?></th>
				<th><?php echo __('Question Count'); ?></th>
				<th><?php echo __('Group Id'); ?></th>
				<th><?php echo __('Due Date'); ?></th>
				<th><?php echo __('Valid'); ?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($group['Quiz'] as $quiz): ?>
			<tr>
				<td><?php echo $quiz['id'];?></td>
				<td><?php echo $quiz['title'];?></td>
				<td><?php echo $quiz['time'];?></td>
				<td><?php echo $quiz['user_id'];?></td>
				<td><?php echo $quiz['question_count'];?></td>
				<td><?php echo $quiz['group_id'];?></td>
				<td><?php echo $quiz['due_date'];?></td>
				<td><?php echo $quiz['valid'];?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('controller' => 'quizzes', 'action' => 'view', $quiz['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('controller' => 'quizzes', 'action' => 'edit', $quiz['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'quizzes', 'action' => 'delete', $quiz['id']), null, __('Are you sure you want to delete # %s?', $quiz['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php endif; ?>

	</div>
	<div class="span3">
		<ul class="nav nav-list">
			<li><?php echo $this->Html->link(__('New %s', __('Quiz')), array('controller' => 'quizzes', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="row-fluid">
	<div class="span9">
		<h3><?php echo __('Related %s', __('Users')); ?></h3>
	<?php if (!empty($group['User'])):?>
		<table class="table">
			<tr>
				<th><?php echo __('Id'); ?></th>
				<th><?php echo __('Username'); ?></th>
				<th><?php echo __('Password'); ?></th>
				<th><?php echo __('Email'); ?></th>
				<th><?php echo __('Firstname'); ?></th>
				<th><?php echo __('Lastname'); ?></th>
				<th><?php echo __('Created'); ?></th>
				<th><?php echo __('Category'); ?></th>
				<th><?php echo __('Grade'); ?></th>
				<th><?php echo __('Photo File Name'); ?></th>
				<th><?php echo __('Gender'); ?></th>
				<th><?php echo __('School'); ?></th>
				<th><?php echo __('Valid'); ?></th>
				<th><?php echo __('Phone'); ?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($group['User'] as $user): ?>
			<tr>
				<td><?php echo $user['id'];?></td>
				<td><?php echo $user['username'];?></td>
				<td><?php echo $user['password'];?></td>
				<td><?php echo $user['email'];?></td>
				<td><?php echo $user['firstname'];?></td>
				<td><?php echo $user['lastname'];?></td>
				<td><?php echo $user['created'];?></td>
				<td><?php echo $user['category'];?></td>
				<td><?php echo $user['grade'];?></td>
				<td><?php echo $user['photo_file_name'];?></td>
				<td><?php echo $user['gender'];?></td>
				<td><?php echo $user['school'];?></td>
				<td><?php echo $user['valid'];?></td>
				<td><?php echo $user['phone'];?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'users', 'action' => 'delete', $user['id']), null, __('Are you sure you want to delete # %s?', $user['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php endif; ?>

	</div>
	<div class="span3">
		<ul class="nav nav-list">
			<li><?php echo $this->Html->link(__('New %s', __('User')), array('controller' => 'users', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
