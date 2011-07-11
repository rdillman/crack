<!DOCTYPE html>
<head>
	<title>
		<?php echo $title; ?>
	</title>
	<link rel="stylesheet" type="text/css" href='../css/screen.css' />
</head>
<body>
<h1>
	<?php echo $heading; ?>
</h1>

	 <!-- Time left till rapture -->
	<div id = "days">
		<?php
		$target = mktime(0,0,0,10,21,2011,-1);
		$today = time ();
		$difference =($target-$today);
		$days =(int) ($difference/86400);
		?>
		<p>You only have
		<?php print "$days days";?>
		till the rapture!</p>
	</div>

	<!-- # Angel Picture -->
	<div class="angel">
		<?php echo img(base_url() . 'images/prayer.jpg', TRUE); ?>
	</div>
	<div class="demon">
		<?php echo img(base_url() . 'images/demon.jpg', TRUE); ?>
	</div>

	<!-- # Links to Buy / Raffel	 -->
	<div class="main_buy">
		<?php print( '<a href="buy"> BUY </a>'); ?>
	</div>

	<div class="main_raffel">
		<?php print( '<a href="raffle"> RAFFLE </a>'); ?>
	</div>
	
</body>
</html>