<div class="row">
		<h2>コメント一覧</h2>

		<table class="table table-condensed">
			<tr>
				<th><?php echo $this->BootstrapPaginator->sort('id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('body', 'コメント内容');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('post_id', 'コメントがついた投稿の内容');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('user_id', 'コメントした人');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('created', 'コメントした日');?></th>
			</tr>
		<?php foreach ($comments as $comment): ?>
			<tr>
				<td><?php echo h($comment['Comment']['id']); ?>&nbsp;</td>
				<td><?php echo h($comment['Comment']['body']); ?>&nbsp;</td>
				<td>
					<?php echo $this->Html->link($comment['Post']['body'], array('controller' => 'posts', 'action' => 'view', $comment['Post']['id'])); ?>
				</td>
				<td>
					<?php echo $this->Html->link($comment['User']['name'], array('controller' => 'users', 'action' => 'view', $comment['User']['id'])); ?>
				</td>
				<td><?php echo date('Y-m-d', strtotime($comment['Comment']['created'])); ?>&nbsp;</td>
			</tr>
		<?php endforeach; ?>
		</table>
		<?php echo $this->BootstrapPaginator->pagination(); ?>
</div>
