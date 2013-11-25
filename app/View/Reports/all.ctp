<div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <?php foreach ($groups as $group):?>
        <div class="col-lg-4">
          <img class="img-circle" data-src="holder.js/140x140" alt="Generic placeholder image">
          <h2><?php echo $group['Group']['groupname'];?></h2>
          <h4>
            コード：<span class="label label-danger"><?php echo $group['Group']['groupcode'];?></span>
            人数：<span class="label label-info">10人</span></small>
          </h4>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      <?php endforeach; ?>
      </div><!-- /.row -->
