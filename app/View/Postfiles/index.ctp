<div class="row">
		<h2>ファイル一覧</h2>

		<table class="table table-condensed">
			<tr>
				<th><?php echo $this->BootstrapPaginator->sort('id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('post_id', '投稿');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('file_name', 'ファイル');?></th>
			</tr>
		<?php foreach ($postfiles as $postfile): ?>
			<tr>
				<td><?php echo h($postfile['Postfile']['id']); ?>&nbsp;</td>
				<td>
					<?php echo $this->Html->link($postfile['Post']['body'], array('controller' => 'posts', 'action' => 'view', $postfile['Post']['id'])); ?>
				</td>
				<td><?php echo h($postfile['Postfile']['file_name']); ?>&nbsp;</td>
			</tr>
		<?php endforeach; ?>
		</table>

		<?php echo $this->BootstrapPaginator->pagination(); ?>
</div>
