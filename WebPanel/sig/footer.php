			</div>
			<div style="clear:both"></div>	
          </div>
<?php
$x = mysql_query('SELECT COUNT(id) as total FROM players');
$x = mysql_fetch_array($x);
$s = mysql_query('SELECT COUNT(id) as total FROM banuri');
$s = mysql_fetch_array($s);

$n = mysql_query('SELECT Name FROM players ORDER BY id DESC LIMIT 0, 1');
$n = mysql_fetch_array($n);

$z = mysql_query('SELECT COUNT(id) as total FROM players WHERE rpgon > 0');
$z = mysql_fetch_array($z);

$p = mysql_query('SELECT COUNT(id) as total FROM players WHERE Status > 0');
$p = mysql_fetch_array($p);

$ou = mysql_query('SELECT COUNT(id) as total FROM players WHERE Status = 1');
$ou = mysql_fetch_array($ou);
?>

	<div id="footer" class="box">Total accounts: <?=$x['total']?> <i>(<?=$s['total']?> banned)</i> &nbsp&nbsp&nbsp Newest member: <?=$n['Name']?> &nbsp&nbsp&nbsp Players online: <?=$p['total']?>&nbsp&nbsp&nbsp Status: <?php if($ou['total'] > 0) echo '<font color="#0DFF00">Online</font>'; else '<font color="#FF0000">Offline</font>' ?></div>
	</div>
  		<div id="footer" class="box">Copyright (&copy;) GreenTiger 2013-2014</div>
</body>
</html>