<?php
include 'includes/config.php';
$ziua = date('j', time());
$luna = date('m', time());
$anu = date('Y', time());
$ora = date('G');
$minut = 1* date('i');
if(isset($_GET['X']) && $udata['playerGroupRank'] > 6)
{
	$id = (int)$_GET['X'];
	$fwarnuri = get_row('SELECT * FROM playeraccounts WHERE playerID='.$id);
	if($fwarnuri['playerStatus'] == 0)
	{
	    $lead = $udata['playerGroupRank'];
		$numepl = $fwarnuri['playerName'];
		mysql_query('UPDATE playeraccounts SET playerGroup=0, playerGroupRank=0, playerCarWeapon3=0, playerCarWeapon2=0, playerSkin=60 WHERE playerID='.$id);
	}
	else
	{
		$eroare = 'Acel player este online!';
	}
	
}

if(isset($_GET['X1']) && $udata['playerGroupRank'] > 6)
{
	$id = (int)$_GET['X1'];
	$fwarnuri = get_row('SELECT * FROM players WHERE playerID='.$id);
	if($fwarnuri['playerStatus'] == 0)
	{
		mysql_query('UPDATE playeraccounts SET playerGroup=0, playerGroupRank=0, playerCarWeapon3=0, playerCarWeapon2=20, playerSkin=60 WHERE playerID='.$id);
	}
	else
	{
		$eroare = 'Acel player este online!';
	}
}

if(isset($_GET['FW']) && $udata['playerGroupRank'] > 6)
{
	$id = (int)$_GET['FW'];
	$fwarnuri = get_row('SELECT * FROM playeraccounts WHERE playerID='.$id);
	if($fwarnuri['playerStatus'] == 0)
	{
		if($fwarnuri['playerCarWeapon3'] <= 2)
		{
			mysql_query('UPDATE playeraccounts SET playerCarWeapon3=playerCarWeapon3+1 WHERE playerID='.$id);
		}
	}
	else
	{
		$eroare = 'Acel player este online!';
	}
}
if(isset($_GET['FWm']) && $udata['playerGroupRank'] > 6)
{
	$id = (int)$_GET['FWm'];
	$fwarnuri = get_row('SELECT * FROM playeraccounts WHERE playerID='.$id);
	if($fwarnuri['playerStatus'] == 0)
	{
		if($fwarnuri['playerCarWeapon3'] > 0)
		{
			mysql_query('UPDATE playeraccounts SET playerCarWeapon3=playerCarWeapon3-1 WHERE playerID='.$id);
		}
	}
	else
	{
		$eroare = 'Acel player este online!';
	}
}

if(isset($_GET['R1']) && $udata['playerGroupRank'] > 6)
{
	$id = (int)$_GET['R1'];
	$rank = get_row('SELECT * FROM playeraccounts WHERE playerID='.$id);
	if($rank['playerStatus'] == 0)
	{
	    $rankacum = $rank['playerGroupRank'] + 1;
		if($rank['playerGroupRank'] < 6)
		{
			mysql_query('UPDATE playeraccounts SET playerGroupRank=playerGroupRank+1 WHERE playerID='.$id);
		}
	}
	else
	{
		$eroare = 'Acel player este online!';
	}
}

if(isset($_GET['R2']) && $udata['playerGroupRank'] > 6)
{
	$id = (int)$_GET['R2'];
	$rank = get_row('SELECT * FROM playeraccounts WHERE playerID='.$id);
	if($rank['playerStatus'] == 0)
	{
	    $rankacum = $rank['playerGroupRank'] - 1;
		if($rank['playerGroupRank'] > 1)
		{
			mysql_query('UPDATE playeraccounts SET playerGroupRank=playerGroupRank-1 WHERE playerID='.$id);
		}
	}
	else
	{
		$eroare = 'Acel player este online!';
	}
}
if(isset($_POST['makeleader']) && $_POST['makeleader'] > 0){	$faction = $udata['playerGroup'];	$name = isset($_POST['makeleader_name']) && !empty($_POST['makeleader_name']) ? sec($_POST['makeleader_name']) : '';	if($faction > 0 && !empty($name))	{		$query = mysql_query("SELECT playerID FROM playeraccounts WHERE playerName='$name' && playerGroup=0 && playerGroupRank=0 LIMIT 1");		if(mysql_num_rows($query) > 0)		{			$data = mysql_fetch_array($query, MYSQL_ASSOC);			if($faction > 0) { mysql_query('UPDATE playeraccounts SET playerGroup='.$faction.',playerGroupRank=1,playerSkin='.$udata['playerSkin'].' WHERE playerID='.$data['playerID']); }		$lead_msg = '"'.stripslashes($name).'" a fost adaugat ca membru in factiunea "'.$member_types[$faction].'".';		}		else		{			$lead_err = 1;			$lead_msg = '"'.stripslashes($name).'" nu a fost gasit sau are factiune.';		}	}}
include 'includes/header.php';
?>
<div class="main-content">
<div class="page-content">
<div class="row-fluid">
<div class="span12">

<?php if($udata['playerGroupRank'] == 7): ?>
	<h4>Leader panel</h4>
<table class="table table-condensed">
<tbody>
<tr class="success">
<td style="width: 143px;">Status</td>
<td >Name</td>
<td>Rank</td>
<td>Faction Warns</td>
<td>Last Login</td>
<td>Uninvite 0 FP</td>
<td>Uninvite 20 FP</td>
</tr>
<?php $query = mysql_query('SELECT * FROM playeraccounts WHERE playerGroup='.$udata['playerGroup'].' ORDER BY playerGroupRank DESC'); 
	  while($dnn=mysql_fetch_array($query)) { ?>
<tr> 
<td> 
<?php if($dnn['playerStatus']=="1") { ?><span class="badge badge-success">online</span><?php } ?>
<?php if($dnn['playerStatus']=="2") { ?><span class="badge badge-warning">sleeping</span><?php }?>
<?php if($dnn['playerStatus']=="0") { ?><span class="badge badge-important">offline</span><?php } ?>
</td>
<td><a href="cont.php?id=<?=$dnn['playerID']?>"><font color='#1a1a1a'><?=$dnn['playerName']?></a></font></td>
<td>
<b><font size="2"><a href="?R1=<?=$dnn['playerID']?>"><img src="http://i.imgur.com/o4DT8.png"/></a> <?=$dnn['playerGroupRank']?> <a href="?R2=<?=$dnn['playerID']?>"><img src="http://i.imgur.com/ukQW2.png" /></a></font></b>
</td>
<td>

<b><font size="2"><a href="?FW=<?=$dnn['playerID']?>"><img src="http://i.imgur.com/o4DT8.png"/></a> <?=$dnn['playerCarWeapon3']?> <a href="?FWm=<?=$dnn['playerID']?>"><img src="http://i.imgur.com/ukQW2.png" /></a></font></b>

</td>

</td>
<td><?php echo htmlentities($dnn['playerLastLogin']); ?></td>
<td><b><font size="2"><a href="?X=<?=$dnn['playerID']?>">X</b></a></td>
<td><b><font size="2"><a href="?X1=<?=$dnn['playerID']?>"><font color="#FF0000">X</font></b></a></td>
</tr>
<?php } ?>

</tbody></table> 
	<?php endif; ?>
	<?php if(isset($eroare)): ?>
			<br />
				<font color="#FF0000" size="3"><b><center><?=$eroare?></center></b></font>



<?php endif; ?>





 <?php if($udata['playerGroupRank'] > 6): ?>
<br /><font color="#FF0000">Instructiuni de utilizare:</font><br />

<br /><font color="#4C9300">- Langa Rank sunt doua sageti, una rosie, una verde, dand click pe cea verde poti
da rank up, dand click pe cea rosie poti da rank down.
<br />- In dreapta sunt doua X-uri, unul rosu, unul verde, pe cel verde poti da afara
pe cineva fara FPunish, si pe cel rosu il poti da afara cu maxim FPunish.
<br />- In dreapta mai sunt doua butoane, ambele FW, unul rosu, unul verde, pe cel rosu poti da 
FWarn-uri si odata ce ajunge la 3 este demis cu 5 FP, si pe cel verde poti da FWarn down.</font>
					<?php endif; ?>


</div>
</div>
</div>
</div>