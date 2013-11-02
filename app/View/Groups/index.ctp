<div class="row">
		<h2>グループ一覧</h2>

		<table class="table table-condensed">
			<tr>
				<th><?php echo $this->BootstrapPaginator->sort('id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('groupname', 'グループ名');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('groupcode', 'グループコード');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('admin_id', '管理者');?></th>
			</tr>
		<?php foreach ($groups as $group): ?>
			<tr>
				<td><?php echo h($group['Group']['id']); ?>&nbsp;</td>
				<td><?php echo h($group['Group']['groupname']); ?>&nbsp;</td>
				<td><?php echo h($group['Group']['groupcode']); ?>&nbsp;</td>
				<td>
					<?php echo $this->Html->link($group['User']['name'], array('controller' => 'users', 'action' => 'view', $group['User']['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>

		<?php echo $this->BootstrapPaginator->pagination(); ?>
</div>
