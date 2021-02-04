<?php
include 'includes/config.php';
if($udata['playerAdminLevel'] <= 5)
	die();
	
if(isset($_GET['X']) && $udata['playerAdminLevel'] > 5)
{
	$id = (int)$_GET['X'];
	mysql_query('UPDATE playeraccounts SET playerClan = 0, playerClanRank = 0 WHERE playerClan='.$id);
	mysql_query('DELETE from clans WHERE clanID='.$id);
	
}

include 'includes/header.php';
?>
<div class="main-content">
<div class="page-content">
<div class="span11">
<div class="row-fluid">


<h3>Manage clans</h3>

<table class="table table-striped table-bordered">
<thead>
<tr>
<th class="center">ID</th>
<th>Name</th>
<th class="hidden-100">Tag</th>
<th class="hidden-100">Members</th>
<th class="hidden-100">Delete clan</th>
</tr>
</thead>
<?php $query = mysql_query('SELECT * from clans order by clanID asc'); 
	  while($dnn=mysql_fetch_array($query)) { ?>
<tbody>
<tr>
<td class="center"><?php echo htmlentities($dnn['clanID']); ?></td>
<td>
<a href="clani.php?c=<?php echo htmlentities($dnn['clanID']); ?>"><?php echo htmlentities($dnn['clanName']); ?></a>
</td>
<?php

$membrii = mysql_query('SELECT COUNT(playerID) as total FROM playeraccounts WHERE playerClan ='.$dnn['clanID']);
$membrii = mysql_fetch_array($membrii);
?>
<td class="hidden-100"><?php echo htmlentities($dnn['clanTag']); ?></td>
<td><?=$membrii['total']?>/100</a></font></td>
<td><a href="?X=<?=$dnn['clanID']?>"><button class="btn btn-mini btn-danger">Delete clan</button></a></td>

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