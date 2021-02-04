<?php
include 'includes/config.php';
redirect_not_logged();
include 'includes/header.php';

?>

<?php

	$nume = $udata['playerName'];
	$premium = $udata['playerCarWeapon5'];
	$pp = $premium - 30;
	mysql_query("UPDATE playeraccounts SET playerBanned = 0 WHERE playerName = '$nume'");
	mysql_query("DELETE from bans where playerNameBanned = '$nume'");
	mysql_query("UPDATE playeraccounts SET playerCarWeapon5= '$pp' WHERE playerName = '$nume'");

?>



<?php if($udata['playerBanned'] == 0 && $udata['playerCarWeapon5']  < 30): ?>

<center>
<h4>You are not banned or you don't have enought premium points!</h4>
</center>

<?php endif; ?>


