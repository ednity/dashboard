<div class="row-fluid">
	<div class="span9">
		<?php echo $this->BootstrapForm->create('Postfile', array('class' => 'form-horizontal'));?>
			<fieldset>
				<legend><?php echo __('Add %s', __('Postfile')); ?></legend>
				<?php
				echo $this->BootstrapForm->input('post_id', array(
					'required' => 'required',
					'helpInline' => '<span class="label label-important">' . __('Required') . '</span>&nbsp;')
				);
				echo $this->BootstrapForm->input('file_name', array(
					'required' => 'required',
					'helpInline' => '<span class="label label-important">' . __('Required') . '</span>&nbsp;')
				);
				echo $this->BootstrapForm->input('save_name', array(
					'required' => 'required',
					'helpInline' => '<span class="label label-important">' . __('Required') . '</span>&nbsp;')
				);
				?>
				<?php echo $this->BootstrapForm->submit(__('Submit'));?>
			</fieldset>
		<?php echo $this->BootstrapForm->end();?>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Postfiles')), array('action' => 'index'));?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Posts')), array('controller' => 'posts', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('Post')), array('controller' => 'posts', 'action' => 'add')); ?></li>
		</ul>
		</div>
	</div>
</div>