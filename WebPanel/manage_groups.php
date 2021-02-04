<?php
include 'includes/config.php';
include 'includes/header.php';

$lspd = mysql_query('SELECT COUNT(playerID) as total FROM playeraccounts WHERE playerGroup = 1');
$lspd = mysql_fetch_array($lspd);

$fbi = mysql_query('SELECT COUNT(playerID) as total FROM playeraccounts WHERE playerGroup = 2');
$fbi = mysql_fetch_array($fbi);

$ng = mysql_query('SELECT COUNT(playerID) as total FROM playeraccounts WHERE playerGroup = 3');
$ng = mysql_fetch_array($ng);

$para = mysql_query('SELECT COUNT(playerID) as total FROM playeraccounts WHERE playerGroup = 4');
$para = mysql_fetch_array($para);

$lvpd = mysql_query('SELECT COUNT(playerID) as total FROM playeraccounts WHERE playerGroup = 5');
$lvpd = mysql_fetch_array($lvpd);

$rus = mysql_query('SELECT COUNT(playerID) as total FROM playeraccounts WHERE playerGroup = 6');
$rus = mysql_fetch_array($rus);

$grove = mysql_query('SELECT COUNT(playerID) as total FROM playeraccounts WHERE playerGroup = 7');
$grove = mysql_fetch_array($grove);

$aztec = mysql_query('SELECT COUNT(playerID) as total FROM playeraccounts WHERE playerGroup = 8');
$aztec = mysql_fetch_array($aztec);

$rifa = mysql_query('SELECT COUNT(playerID) as total FROM playeraccounts WHERE playerGroup = 9');
$rifa = mysql_fetch_array($rifa);

$balas = mysql_query('SELECT COUNT(playerID) as total FROM playeraccounts WHERE playerGroup = 10');
$balas = mysql_fetch_array($balas);

$vagos = mysql_query('SELECT COUNT(playerID) as total FROM playeraccounts WHERE playerGroup = 11');
$vagos = mysql_fetch_array($vagos);

$hitman = mysql_query('SELECT COUNT(playerID) as total FROM playeraccounts WHERE playerGroup = 12');
$hitman = mysql_fetch_array($hitman);

$si = mysql_query('SELECT COUNT(playerID) as total FROM playeraccounts WHERE playerGroup = 13');
$si = mysql_fetch_array($si);

$taxi = mysql_query('SELECT COUNT(playerID) as total FROM playeraccounts WHERE playerGroup = 14');
$taxi = mysql_fetch_array($taxi);

$nr = mysql_query('SELECT COUNT(playerID) as total FROM playeraccounts WHERE playerGroup = 15');
$nr = mysql_fetch_array($nr);


if(isset($_GET['X']) && $udata['playerAdminLevel'] > 5)
{
	$id = (int)$_GET['X'];
	mysql_query('UPDATE playeraccounts SET playerGroup = 0, playerGroupRank = 0, playerSkin = 60, playerCarWeapon3 = 0 WHERE playerGroup='.$id);
	mysql_query('DELETE from groups WHERE groupID='.$id);
	
}
?>

<div class="main-content">
<div class="page-content">
<div class="span11">
<div class="row-fluid">
 
<div class="page-header">
<h1>Manage factions</h1>
</div>
<table class="table table-striped table-bordered">
<thead>
<tr>
<th class="center">ID</th>
<th>Name</th>
<th>Rank 1 Name</th>
<th>Rank 2 Name</th>
<th>Rank 3 Name</th>
<th>Rank 4 Name</th>
<th>Rank 5 Name</th>
<th>Rank 6 Name</th>
<th>Rank 7 Name</th>
<th class="hidden-480">Motd</th>
<th class="hidden-480">Members</th>
<th class="hidden-100">Aplications status</th>
<th class="center">Delete faction</th>
</tr>
</thead>
<?php $query = mysql_query('SELECT * from groups order by groupID asc'); 
	  while($dnn=mysql_fetch_array($query)) { ?>
<tbody>
<tr>
<td class="center"><?php echo htmlentities($dnn['groupID']); ?></td>
<td>
<?php echo htmlentities($dnn['groupName']); ?>
</td>

<td>
<?php echo htmlentities($dnn['groupRankName1']); ?>
</td>

<td>
<?php echo htmlentities($dnn['groupRankName2']); ?>
</td>

<td>
<?php echo htmlentities($dnn['groupRankName3']); ?>
</td>

<td>
<?php echo htmlentities($dnn['groupRankName4']); ?>
</td>

<td>
<?php echo htmlentities($dnn['groupRankName5']); ?>
</td>

<td>
<?php echo htmlentities($dnn['groupRankName6']); ?>
</td>

<td>
<?php echo htmlentities($dnn['groupRankName7']); ?>
</td>

<td>
<?php echo htmlentities($dnn['groupMOTD']); ?>
</td>
<td class="hidden-480">
<?php if($dnn['groupID']=="1") { ?> <?=$lspd['total']?> <?php } ?> 
<?php if($dnn['groupID']=="2") { ?> <?=$fbi['total']?> <?php } ?>
<?php if($dnn['groupID']=="3") { ?> <?=$ng['total']?> <?php } ?> 
<?php if($dnn['groupID']=="4") { ?> <?=$para['total']?> <?php } ?> 
<?php if($dnn['groupID']=="5") { ?> <?=$lvpd['total']?> <?php } ?>
<?php if($dnn['groupID']=="6") { ?> <?=$rus['total']?> <?php } ?> 
<?php if($dnn['groupID']=="7") { ?> <?=$grove['total']?> <?php } ?> 
<?php if($dnn['groupID']=="8") { ?> <?=$aztec['total']?> <?php } ?> 
<?php if($dnn['groupID']=="9") { ?> <?=$rifa['total']?> <?php } ?>
<?php if($dnn['groupID']=="10") { ?> <?=$balas['total']?> <?php } ?> 
<?php if($dnn['groupID']=="11") { ?> <?=$vagos['total']?> <?php } ?> 
<?php if($dnn['groupID']=="12") { ?> <?=$hitman['total']?> <?php } ?>  
<?php if($dnn['groupID']=="13") { ?> <?=$si['total']?> <?php } ?>
<?php if($dnn['groupID']=="14") { ?> <?=$taxi['total']?> <?php } ?>
<?php if($dnn['groupID']=="15") { ?> <?=$nr['total']?> <?php } ?>

 / 10
</td>
<td>
<?php if($dnn['groupAplication']=="1") { ?><span class="text-success">Aplications online</span><?php } ?>
<?php if($dnn['groupAplication']=="0") { ?><span class="text-error">Aplications offline</span><?php } ?>
</td>
<td class="center"><a href="?X=<?=$dnn['groupID']?>"><button class="btn btn-mini btn-danger">Delete faction</button></td></td>

</tr>
<?php } ?>
</tbody>
</table>
 
 



<!-- do not affect this divs, or your design will fuck up -->
</div>
</div>
</div>
</div>
<!-- do not affect this divs, or your design will fuck up -->