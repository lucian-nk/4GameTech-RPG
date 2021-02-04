<?php
include 'includes/config.php';
if($udata['playerAdminLevel'] <= 5)
	die();
	
$faction = array(
		0 => "Civilian", 
		1 => "LSPD",
		2 => "F.B.I",
		3 => "National Guard",
		4 => "Paramedic Department",
		5 => "LVPD",
		6 => "The Russian Mafia",
		7 => "Grove Street",
		8 => "Los Aztecas",
		9 => "The Rifa",
		10 => "Balas",
		11 => "Los Vagos",
		12 => "Hitman Agency",
		13 => "School Instructors",
		14 => "Taxi Company",
		15 => "News Reporters",
		);
if(isset($_GET['X']) && $udata['playerAdminLevel'] > 5)
{
	$id = (int)$_GET['X'];
	$fwarnuri = get_row('SELECT * FROM playeraccounts WHERE playerID='.$id);
	if($fwarnuri['playerStatus'] == 0)
	{	
		$nick = $fwarnuri['playerName'];
		$fac = $fwarnuri['playerGroup'];
		$admin = $udata['playerName'];
		$fac2 = $member_types[$fac];
		mysql_query('UPDATE playeraccounts SET playerGroup =0, playerSkin=60, playerCarWeapon3=0, playerGroupRank=0 WHERE playerID='.$id);
		mysql_query("INSERT INTO faction_logs (text, playerID) VALUES ('$nick was uninvited by admin $admin from faction $fac2 (rank 7) without FP.', '$id')");  
		mysql_query("INSERT INTO flogs (text, faction) VALUES ('$nick was uninvited by Admin $admin from faction $fac2 (rank 7) without FP.', '$fac')");
	}
	else
	{
		$eroare = 'Acel player este online!';
	}
	
}

if(isset($_GET['X1']) && $udata['playerAdminLevel'] > 5)
{
	$id = (int)$_GET['X1'];
	$fwarnuri = get_row('SELECT * FROM playeraccounts WHERE playerID='.$id);
	if($fwarnuri['playerStatus'] == 0)
	{
		mysql_query('UPDATE playeraccounts SET playerGroup=0, playerGroupRank=0, playerSkin=60, playerCarWeapon2=40, playerCarWeapon3=0 WHERE playerID='.$id);
		mysql_query("INSERT INTO flogs (text, faction) VALUES ('$nick was uninvited by Admin $admin from faction $fac2 (rank 7) with 40 FP.', '$fac')");
	}
	else
	{
		$eroare = 'Acel player este online!';
	}
}

include 'includes/header.php';
?>
<div class="main-content">
<div class="page-content">
<div class="span12">
<div class="row-fluid">
<h3>Leaders</h3>


<a href="uninvite_player.php"><button class="btn btn-inverse">Remove from leaders!</button></a></br>
</br>
<table class="table-bans">
<table class="table table-condensed">
<tbody>
<tr class="success">
<td>Status</td>
<td>Name</td>
<td>Faction</td>
<td>Level</td>
<td>Hours</td>
<td>Last online</td>
</tr>
<?php
	$query = mysql_query('SELECT * FROM playeraccounts WHERE playerGroupRank > 6 ORDER BY playerGroup ASC');
	while($row = mysql_fetch_array($query, MYSQL_ASSOC)):
	?>
	<tr>
		<td> 
		<?php if($row['playerStatus']=="1") { ?><span class="badge badge-success">online</span><?php } ?>
		<?php if($row['playerStatus']=="2") { ?><span class="badge badge-warning">sleeping</span><?php }?>
		<?php if($row['playerStatus']=="0") { ?><span class="badge badge-important">offline</span><?php } ?>
		</td>
		<td><b><font size="2"><a href="cont.php?id=<?=$row['playerID']?>"><font color='#1a1a1a'><?=$row['playerName']?></a></font>
		<td><b><font size="2"><?=$member_types[$row['playerGroup']]?></font></b></td>
		<td><b><font size="2"><?=$row['playerLevel']?></font></b></td>
		<td><b><font size="2"><?=$row['playerHours']?></font></b></td>
		<td><b><font size="2"><?=$row['playerLastLogin']?></font></b></td>
		<!--<td><b><font size="2"><a href="?X=<?=$row['playerID']?>">X</font></b></a></td>
		<td><b><font size="2"><a href="?X1=<?=$row['playerID']?>"><font color="#FF0000">X</font></b></a></td>-->
	</tr>
	<?php endwhile; ?>
</table>
<?php if(isset($eroare)): ?>
			<br />
		<font color="#FF0000" size="3"><b><center><?=$eroare?></center></b></font>
<?php endif; ?>

<?php
$x = mysql_query('SELECT COUNT(playerID) as total FROM playeraccounts WHERE playerGroupRank > 6');
$x = mysql_fetch_array($x);
?><div style="font-size:12px;font-weight: bold;"><?='Total leaders: '.$x['total'];?></div>

<!-- do not affect this divs, or your design will fuck up -->
</div>
</div>
</div>
</div>
<!-- do not affect this divs, or your design will fuck up -->