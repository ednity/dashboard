<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Le styles -->
	<?php echo $this->Html->css('bootstrap.min'); ?>
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Le fav and touch icons -->
	<!--
	<link rel="shortcut icon" href="/ico/favicon.ico">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="/ico/apple-touch-icon-57-precomposed.png">
	-->
	<?php
	echo $this->fetch('meta');
	echo $this->fetch('css');
	?>
</head>

<body>

	<?php echo $this->element('common/gnav'); ?>

	<div class="container">

		<?php echo $this->Session->flash(); ?>

		<?php echo $this->fetch('content'); ?>

	</div> <!-- /container -->

	<!-- Le javascript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<?php echo $this->Html->script('bootstrap.min.js'); ?>
	<?php echo $this->Html->script('common'); ?>
	<?php echo $this->fetch('script'); ?>
</body>
</html>