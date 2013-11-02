<div class="row">
		<h2>ユーザ一覧</h2>

		<table class="table table-condensed">
			<tr>
				<th><?php echo $this->BootstrapPaginator->sort('id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('name');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('username');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('email');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('gender', '性別');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('school', '学校');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('phone', '電話番号');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('created', '登録日');?></th>
			</tr>
		<?php foreach ($users as $user): ?>
			<tr>
				<td><?php echo h($user['User']['id']); ?>&nbsp;</td>
				<td><?php echo h($user['User']['name']); ?>&nbsp;</td>
				<td><?php echo h($user['User']['username']); ?>&nbsp;</td>
				<td><?php echo h($user['User']['email']); ?>&nbsp;</td>
				<td><?php echo h($user['User']['gender']); ?>&nbsp;</td>
				<td><?php echo h($user['User']['school']); ?>&nbsp;</td>
				<td><?php echo h($user['User']['phone']); ?>&nbsp;</td>
				<td><?php echo date('Y-m-d', strtotime($user['User']['created'])); ?>&nbsp;</td>
			</tr>
		<?php endforeach; ?>
		</table>

		<?php echo $this->BootstrapPaginator->pagination(); ?>
</div>
