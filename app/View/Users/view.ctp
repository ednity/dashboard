<div class="row-fluid">
	<div class="span9">
		<h2><?php  echo __('User');?></h2>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
			<dd>
				<?php echo h($user['User']['id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Username'); ?></dt>
			<dd>
				<?php echo h($user['User']['username']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Password'); ?></dt>
			<dd>
				<?php echo h($user['User']['password']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Email'); ?></dt>
			<dd>
				<?php echo h($user['User']['email']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Firstname'); ?></dt>
			<dd>
				<?php echo h($user['User']['firstname']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Lastname'); ?></dt>
			<dd>
				<?php echo h($user['User']['lastname']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Created'); ?></dt>
			<dd>
				<?php echo h($user['User']['created']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Category'); ?></dt>
			<dd>
				<?php echo h($user['User']['category']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Grade'); ?></dt>
			<dd>
				<?php echo h($user['User']['grade']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Photo File Name'); ?></dt>
			<dd>
				<?php echo h($user['User']['photo_file_name']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Gender'); ?></dt>
			<dd>
				<?php echo h($user['User']['gender']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('School'); ?></dt>
			<dd>
				<?php echo h($user['User']['school']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Valid'); ?></dt>
			<dd>
				<?php echo h($user['User']['valid']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Phone'); ?></dt>
			<dd>
				<?php echo h($user['User']['phone']); ?>
				&nbsp;
			</dd>
		</dl>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('Edit %s', __('User')), array('action' => 'edit', $user['User']['id'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('Delete %s', __('User')), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Users')), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('User')), array('action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Answers')), array('controller' => 'answers', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Answer')), array('controller' => 'answers', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Comments')), array('controller' => 'comments', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Comment')), array('controller' => 'comments', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Forum Answers')), array('controller' => 'forum_answers', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Forum Answer')), array('controller' => 'forum_answers', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Forum Comments')), array('controller' => 'forum_comments', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Forum Comment')), array('controller' => 'forum_comments', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Forum Questions')), array('controller' => 'forum_questions', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Forum Question')), array('controller' => 'forum_questions', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Pollchoices')), array('controller' => 'pollchoices', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Pollchoice')), array('controller' => 'pollchoices', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Polls')), array('controller' => 'polls', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Poll')), array('controller' => 'polls', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Posts')), array('controller' => 'posts', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Post')), array('controller' => 'posts', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Questions')), array('controller' => 'questions', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Question')), array('controller' => 'questions', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Quiz Attempts')), array('controller' => 'quiz_attempts', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Quiz Attempt')), array('controller' => 'quiz_attempts', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Quizzes')), array('controller' => 'quizzes', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Quiz')), array('controller' => 'quizzes', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Groups')), array('controller' => 'groups', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Group')), array('controller' => 'groups', 'action' => 'add')); ?> </li>
		</ul>
		</div>
	</div>
</div>

<div class="row-fluid">
	<div class="span9">
		<h3><?php echo __('Related %s', __('Answers')); ?></h3>
	<?php if (!empty($user['Answer'])):?>
		<table class="table">
			<tr>
				<th><?php echo __('Id'); ?></th>
				<th><?php echo __('User Id'); ?></th>
				<th><?php echo __('Question Id'); ?></th>
				<th><?php echo __('Answer'); ?></th>
				<th><?php echo __('Created'); ?></th>
				<th><?php echo __('Modified'); ?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($user['Answer'] as $answer): ?>
			<tr>
				<td><?php echo $answer['id'];?></td>
				<td><?php echo $answer['user_id'];?></td>
				<td><?php echo $answer['question_id'];?></td>
				<td><?php echo $answer['answer'];?></td>
				<td><?php echo $answer['created'];?></td>
				<td><?php echo $answer['modified'];?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('controller' => 'answers', 'action' => 'view', $answer['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('controller' => 'answers', 'action' => 'edit', $answer['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'answers', 'action' => 'delete', $answer['id']), null, __('Are you sure you want to delete # %s?', $answer['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php endif; ?>

	</div>
	<div class="span3">
		<ul class="nav nav-list">
			<li><?php echo $this->Html->link(__('New %s', __('Answer')), array('controller' => 'answers', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="row-fluid">
	<div class="span9">
		<h3><?php echo __('Related %s', __('Comments')); ?></h3>
	<?php if (!empty($user['Comment'])):?>
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
		<?php foreach ($user['Comment'] as $comment): ?>
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
		<h3><?php echo __('Related %s', __('Forum Answers')); ?></h3>
	<?php if (!empty($user['ForumAnswer'])):?>
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
		<?php foreach ($user['ForumAnswer'] as $forumAnswer): ?>
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
	<?php if (!empty($user['ForumComment'])):?>
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
		<?php foreach ($user['ForumComment'] as $forumComment): ?>
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
	<?php if (!empty($user['ForumQuestion'])):?>
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
		<?php foreach ($user['ForumQuestion'] as $forumQuestion): ?>
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
		<h3><?php echo __('Related %s', __('Pollchoices')); ?></h3>
	<?php if (!empty($user['Pollchoice'])):?>
		<table class="table">
			<tr>
				<th><?php echo __('Id'); ?></th>
				<th><?php echo __('User Id'); ?></th>
				<th><?php echo __('Poll Id'); ?></th>
				<th><?php echo __('Choice Id'); ?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($user['Pollchoice'] as $pollchoice): ?>
			<tr>
				<td><?php echo $pollchoice['id'];?></td>
				<td><?php echo $pollchoice['user_id'];?></td>
				<td><?php echo $pollchoice['poll_id'];?></td>
				<td><?php echo $pollchoice['choice_id'];?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('controller' => 'pollchoices', 'action' => 'view', $pollchoice['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('controller' => 'pollchoices', 'action' => 'edit', $pollchoice['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'pollchoices', 'action' => 'delete', $pollchoice['id']), null, __('Are you sure you want to delete # %s?', $pollchoice['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php endif; ?>

	</div>
	<div class="span3">
		<ul class="nav nav-list">
			<li><?php echo $this->Html->link(__('New %s', __('Pollchoice')), array('controller' => 'pollchoices', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="row-fluid">
	<div class="span9">
		<h3><?php echo __('Related %s', __('Polls')); ?></h3>
	<?php if (!empty($user['Poll'])):?>
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
		<?php foreach ($user['Poll'] as $poll): ?>
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
		<h3><?php echo __('Related %s', __('Posts')); ?></h3>
	<?php if (!empty($user['Post'])):?>
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
		<?php foreach ($user['Post'] as $post): ?>
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
		<h3><?php echo __('Related %s', __('Questions')); ?></h3>
	<?php if (!empty($user['Question'])):?>
		<table class="table">
			<tr>
				<th><?php echo __('Id'); ?></th>
				<th><?php echo __('User Id'); ?></th>
				<th><?php echo __('Quiz Id'); ?></th>
				<th><?php echo __('Title'); ?></th>
				<th><?php echo __('Type'); ?></th>
				<th><?php echo __('Order'); ?></th>
				<th><?php echo __('Choices'); ?></th>
				<th><?php echo __('Correct'); ?></th>
				<th><?php echo __('Hint'); ?></th>
				<th><?php echo __('Weight'); ?></th>
				<th><?php echo __('Valid'); ?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($user['Question'] as $question): ?>
			<tr>
				<td><?php echo $question['id'];?></td>
				<td><?php echo $question['user_id'];?></td>
				<td><?php echo $question['quiz_id'];?></td>
				<td><?php echo $question['title'];?></td>
				<td><?php echo $question['type'];?></td>
				<td><?php echo $question['order'];?></td>
				<td><?php echo $question['choices'];?></td>
				<td><?php echo $question['correct'];?></td>
				<td><?php echo $question['hint'];?></td>
				<td><?php echo $question['weight'];?></td>
				<td><?php echo $question['valid'];?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('controller' => 'questions', 'action' => 'view', $question['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('controller' => 'questions', 'action' => 'edit', $question['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'questions', 'action' => 'delete', $question['id']), null, __('Are you sure you want to delete # %s?', $question['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php endif; ?>

	</div>
	<div class="span3">
		<ul class="nav nav-list">
			<li><?php echo $this->Html->link(__('New %s', __('Question')), array('controller' => 'questions', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="row-fluid">
	<div class="span9">
		<h3><?php echo __('Related %s', __('Quiz Attempts')); ?></h3>
	<?php if (!empty($user['QuizAttempt'])):?>
		<table class="table">
			<tr>
				<th><?php echo __('Id'); ?></th>
				<th><?php echo __('Quiz Id'); ?></th>
				<th><?php echo __('User Id'); ?></th>
				<th><?php echo __('Attempt'); ?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($user['QuizAttempt'] as $quizAttempt): ?>
			<tr>
				<td><?php echo $quizAttempt['id'];?></td>
				<td><?php echo $quizAttempt['quiz_id'];?></td>
				<td><?php echo $quizAttempt['user_id'];?></td>
				<td><?php echo $quizAttempt['attempt'];?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('controller' => 'quiz_attempts', 'action' => 'view', $quizAttempt['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('controller' => 'quiz_attempts', 'action' => 'edit', $quizAttempt['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'quiz_attempts', 'action' => 'delete', $quizAttempt['id']), null, __('Are you sure you want to delete # %s?', $quizAttempt['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php endif; ?>

	</div>
	<div class="span3">
		<ul class="nav nav-list">
			<li><?php echo $this->Html->link(__('New %s', __('Quiz Attempt')), array('controller' => 'quiz_attempts', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="row-fluid">
	<div class="span9">
		<h3><?php echo __('Related %s', __('Quizzes')); ?></h3>
	<?php if (!empty($user['Quiz'])):?>
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
		<?php foreach ($user['Quiz'] as $quiz): ?>
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
		<h3><?php echo __('Related %s', __('Groups')); ?></h3>
	<?php if (!empty($user['Group'])):?>
		<table class="table">
			<tr>
				<th><?php echo __('Id'); ?></th>
				<th><?php echo __('Groupname'); ?></th>
				<th><?php echo __('Groupcode'); ?></th>
				<th><?php echo __('Admin Id'); ?></th>
				<th><?php echo __('Subject'); ?></th>
				<th><?php echo __('Grade'); ?></th>
				<th><?php echo __('Lock'); ?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($user['Group'] as $group): ?>
			<tr>
				<td><?php echo $group['id'];?></td>
				<td><?php echo $group['groupname'];?></td>
				<td><?php echo $group['groupcode'];?></td>
				<td><?php echo $group['admin_id'];?></td>
				<td><?php echo $group['subject'];?></td>
				<td><?php echo $group['grade'];?></td>
				<td><?php echo $group['lock'];?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('controller' => 'groups', 'action' => 'view', $group['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('controller' => 'groups', 'action' => 'edit', $group['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'groups', 'action' => 'delete', $group['id']), null, __('Are you sure you want to delete # %s?', $group['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php endif; ?>

	</div>
	<div class="span3">
		<ul class="nav nav-list">
			<li><?php echo $this->Html->link(__('New %s', __('Group')), array('controller' => 'groups', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
