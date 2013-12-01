<?php if (isset($users_num)): ?>
<!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="item active">
      <img data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" alt="First slide">
      <div class="container">
        <div class="carousel-caption">
          <h1>登録ユーザの総数</h1>
          <br>
          <p><?php echo $users_num; ?></p>
          <br>
	  <p><?php echo $this->Html->link('index', array('controller' => 'users', 'action' => 'index'), array('class' => 'btn btn-lg btn-primary'));?></p>
        </div>
      </div>
    </div>
    <div class="item">
      <img data-src="holder.js/900x500/auto/#666:#6a6a6a/text:Second slide" alt="Second slide">
      <div class="container">
        <div class="carousel-caption">
          <h1>作成されたグループの総数</h1>
          <br>
          <p><?php echo $groups_num; ?></p>
          <br>
          <p><a class="btn btn-lg btn-primary" href="#" role="button">index</a></p>
        </div>
      </div>
    </div>
    <div class="item">
      <img data-src="holder.js/900x500/auto/#555:#5a5a5a/text:Third slide" alt="Third slide">
      <div class="container">
        <div class="carousel-caption">
          <h1>タイムラインへの投稿の総数</h1>
          <br>
          <p><?php echo $posts_num; ?></p>
          <br>
          <p><a class="btn btn-lg btn-primary" href="#" role="button">index</a></p>
        </div>
      </div>
    </div>
  </div>
  <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
</div><!-- /.carousel -->
<?php endif; ?>

