<html>
<title><?php echo $title; ?></title>

<?php echo $heading; ?>

<div class="buy_form">
	<form action="ticketform" method="post">
		<p>Your Name: <input type="text" name="yourname" /><br />
			E-mail: <input type="text" name="email" /></p>

			<p>Are you a Christian??
				<input type="radio" name="christian" value="Yes" checked="checked" /> Yes
				<input type="radio" name="christian" value="No" /> No
				<input type="radio" name="christian" value="Not sure" /> Not sure</p>

	<p>Your comments:<br />
	<textarea name="comments" rows="10" cols="40"></textarea></p>

	<p><input type="submit" value="Buy it!"></p>
	</form>
</div>

</html>