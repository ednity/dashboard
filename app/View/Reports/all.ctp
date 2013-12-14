<div class="container marketing">

<div class="jumbotron">
<table class="table">
<thead>
<tr>
  <th>ユーザ数</th>
  <th>グループ数</th>
  <th>投稿数</th>
</tr>
</thead>
<tbody>
  <tr>
    <th><?php echo $users_num;?></th>
    <th><?php echo $groups_num;?></th>
    <th><?php echo $posts_num;?></th>
  </tr>
</tbody>
</table>
</div>

<hr>

  <!-- Three columns of text below the carousel -->
<div class="row">
<?php foreach ($groups as $group):?>
<div class="col-sm-2 well well-sm">
<h4><?php echo $group['Group']['groupname'] ? $group['Group']['groupname'] : "<span class='label label-danger'>name is empty.</span>";?></h4>
コード：<span><?php echo $group['Group']['groupcode'];?></span>
<p><?php echo $this->Html->link('クラス詳細', array('controller' => 'groups', 'action' => 'view', $group['Group']['id']), array('class' => 'btn btn-default')); ?></p>
</div><!-- /.col-lg-4 -->
<?php endforeach; ?>
</div><!-- /.row -->

</div>
