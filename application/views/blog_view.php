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
		<?php echo img(base_url() . 'images/prayer.gif', TRUE); ?>
	</div>
	<div class="demon">
		<?php echo img(base_url() . 'images/demon.gif', TRUE); ?>
	</div>

	<!-- # Links to Buy / Raffel	 -->
	<div class="main_buy">
		<!-- <a href="<?php site_url('buy_ticket')?>">Buy</a> -->
		<a href="<?php echo site_url('buy')?>">Buy</a>
	</div>

	<div class="main_raffel">
		<a href="<?php echo site_url('raffle')?>">Raffle</a>
	</div>
	
</body>
</html>