<div class="row">
	<h2>投稿一覧</h2>
	<table class="table table-condensed">
		<tr>
			<th><?php echo $this->BootstrapPaginator->sort('id');?></th>
			<th><?php echo $this->BootstrapPaginator->sort('body', '内容');?></th>
			<th><?php echo $this->BootstrapPaginator->sort('user_id', '投稿者');?></th>
			<th><?php echo $this->BootstrapPaginator->sort('group_id', 'グループ');?></th>
			<th><?php echo $this->BootstrapPaginator->sort('created', '投稿日');?></th>
		</tr>
	<?php foreach ($posts as $post): ?>
		<tr>
			<td><?php echo h($post['Post']['id']); ?>&nbsp;</td>
			<td><?php echo h($post['Post']['body']); ?>&nbsp;</td>
			<td>
				<?php echo $this->Html->link($post['User']['name'], array('controller' => 'users', 'action' => 'view', $post['User']['id'])); ?>
			</td>
			<td>
				<?php echo $this->Html->link($post['Group']['groupname'], array('controller' => 'groups', 'action' => 'view', $post['Group']['id'])); ?>
			</td>
			<td><?php echo date('Y-m-d', strtotime($post['Post']['created'])); ?>&nbsp;</td>
		</tr>
	<?php endforeach; ?>
	</table>
	<?php echo $this->BootstrapPaginator->pagination(); ?>
</div>
