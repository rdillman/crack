<!DOCTYPE html>
<html>
<title><?php echo $title; ?></title>

<?php echo $heading; ?>

<form action="raffleform" method="post">
	<p>Your Name: <input type="text" name="yourname" /><br />
		E-mail: <input type="text" name="email" /></p>
		Address: <input type="text" name="address" /></p>

		<p>Are you a Christian??
			<input type="radio" name="christian" value="Yes" checked="checked" /> Yes
			<input type="radio" name="christian" value="No" /> No
			<input type="radio" name="christian" value="Not sure" /> Not sure</p>
			

<p>Your comments:<br />
<textarea name="comments" rows="10" cols="40"></textarea></p>

<p><input type="submit" value="Enter for your chance to WIN!"></p>
</form>


</html>