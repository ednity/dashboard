<nav class="navbar navbar-default" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <?php echo $this->Html->link('Dashboard', array('controller' => 'posts', 'action' => 'index'), array('class' => 'navbar-brand')); ?>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
      <li><?php echo $this->Html->link('投稿一覧', array('controller' => 'posts', 'action' => 'index')); ?></li>
      <li><?php echo $this->Html->link('コメント一覧', array('controller' => 'comments', 'action' => 'index')); ?></li>
      <li><?php echo $this->Html->link('ユーザ一覧', array('controller' => 'users', 'action' => 'index')); ?></li>
      <li><?php echo $this->Html->link('グループ一覧', array('controller' => 'groups', 'action' => 'index')); ?></li>
    </ul>
  </div><!-- /.navbar-collapse -->
</nav>
