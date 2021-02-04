<?php
include 'includes/config.php';
if($udata['playerAdminLevel'] <= 5)
	die();

if(isset($_GET['X']) && $udata['playerAdminLevel'] > 5)
{
	$id = (int)$_GET['X'];
	$fwarnuri = get_row('SELECT * FROM playeraccounts WHERE playerID='.$id);
	if($fwarnuri['playerStatus'] == 0)
	{
		mysql_query('DELETE from playeraccounts WHERE playerID='.$id); 
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
<div class="span11">
<div class="row-fluid">
<h3>Accounts</h3>

<table class="table-bans">
<table class="table table-condensed">
<tbody>
<tr class="success">
<td>Status</td>
<td>Name</td>
<td>Level</td>
<td>Faction</td>
<td>Rank</td>
<td>Played hours</td>
<td>Last login</td>
<td>Delete account</td>
</tr>
<?php
	$query = mysql_query('SELECT * FROM playeraccounts WHERE playerLevel > -1 ORDER BY playerID ASC');
	while($row = mysql_fetch_array($query, MYSQL_ASSOC)):
	?>
	<tr>
		<td> 
		<?php if($row['playerStatus']=="1") { ?><span class="badge badge-success">online</span><?php } ?>
		<?php if($row['playerStatus']=="2") { ?><span class="badge badge-warning">sleeping</span><?php }?>
		<?php if($row['playerStatus']=="0") { ?><span class="badge badge-important">offline</span><?php } ?>
		</td>
		<td><b><font size="2"><a href="cont.php?id=<?=$row['playerID']?>"><font color='#1a1a1a'><?=$row['playerName']?></a></font></td>
		
		
		
		
		<td><b><?=$row['playerLevel']?></a></font></td>
		<td><b><font size="2"><?=$member_types[$row['playerGroup']]?></font></b></td>
		<?php if($row['playerGroupRank']>0) { ?><td><b><?php echo htmlentities($row['playerGroupRank']); ?></b></td><?php }?>
		<?php if($row['playerGroupRank']<1) { ?><td><b>None</b></td><?php } ?>
		<td><b><?=$row['playerHours']?></a></font></td>
		<td><b><?=$row['playerLastLogin']?></a></font></td>
		<td class="center"><a href="?X=<?=$row['playerID']?>"><button class="btn btn-mini btn-danger">Delete account</button></td></td>
	</tr>
	<?php endwhile; ?>
</table>
<?php if(isset($eroare)): ?>
			<br />
		<font color="#FF0000" size="3"><b><center><?=$eroare?></center></b></font>
<?php endif; ?>

<?php
$x = mysql_query('SELECT COUNT(playerID) as total FROM playeraccounts');
$x = mysql_fetch_array($x);
?><div style="font-size:12px;font-weight: bold;"><?='Total accounts: '.$x['total'];?></div>

<!-- do not affect this divs, or your design will fuck up -->
</div>
</div>
</div>
</div>
<!-- do not affect this divs, or your design will fuck up -->