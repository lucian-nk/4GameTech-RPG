<?php
include 'includes/config.php';
redirect_not_logged();

$fac = $udata['Leader'];
$idpl = $udata['ID'];
if(isset($_GET['X']) && $udata['Leader'] >= 1)
{
	$id = (int)$_GET['X'];
	mysql_query('UPDATE aplications SET status = 1 WHERE id='.$id);
	$query3 = mysql_query('SELECT * from aplications WHERE id='.$id); 
	while($row2=mysql_fetch_array($query3)) {
	
	
		$player = $row2['playerid'];
	}
	
	$query4 = mysql_query('SELECT * from groups WHERE groupID='.$fac); 
	while($row3=mysql_fetch_array($query4)) {
		
		$nf = $row3['groupName'];
	
	}
	mysql_query("INSERT INTO email (text, playerid) VALUES ('Your aplication for $nf has been accepted.', '$player')");	
	mysql_query('UPDATE players SET newemail = 1 WHERE ID='.$player);

	header("location: aplications.php?f=$fac");
	
}

if(isset($_GET['X2']) && $udata['Rank'] >= 6)
{
	$id = (int)$_GET['X2'];
	mysql_query('UPDATE aplications SET status = 3 WHERE id='.$id);
	$query3 = mysql_query('SELECT * from aplications WHERE id='.$id); 
	while($row2=mysql_fetch_array($query3)) {
	
	
		$player = $row2['playerid'];
	}
	$query4 = mysql_query('SELECT * from groups WHERE groupID='.$fac); 
	while($row3=mysql_fetch_array($query4)) {
		
		$nf = $row3['groupName'];
	
	}
	mysql_query("INSERT INTO email (text, playerid) VALUES ('Your aplication for $nf has been rejected.', '$player')");
	mysql_query('UPDATE players SET newemail = 1 WHERE ID='.$player);
	header("location: aplications.php?f=$fac");
	
}

include 'includes/header.php';

$a = isset($_GET['a']) ? $_GET['a'] : 1;
if($a < 1)$a=1;

?>


<div class="main-content">
<div class="page-content">
<div class="row-fluid">
<div class="span12">
 
 <?php $query = mysql_query("SELECT * from aplications WHERE id = '$a'"); 
	while($new1=mysql_fetch_array($query)) { ?>
	
<?php

$f = $new1['factionid'];
?>
 <?php $query = mysql_query("SELECT * from groups WHERE groupID = '$f'"); 
	  while($dnn=mysql_fetch_array($query)) { ?>


<div class="page-header">
<h1>Aplicarea jucatorului <?php echo htmlentities($new1['name']); ?> la factiunea <?php echo htmlentities($dnn['groupName']); ?></h1>
</div>
<?php } ?>

<div id="feed" class="tab-pane">
<div class="profile-feed row-fluid">
<div class="span5">

<?php
$aproove = $new1['status'];
?>
<?php if($aproove=="0") { ?>

<b>Status:</b> Nou<br>
 
 <?php } ?>
 
<?php if($aproove=="1") { ?>
			
<b>Status:</b> Acceptat pentru teste<br>			

<?php } ?>

<?php if($aproove=="2") { ?>
			
<b>Status:</b> Invitat<br>			

<?php } ?>


<?php if($aproove=="3") { ?>
			
<b>Status:</b> Respins<br>			

<?php } ?>

<b>Creata la:</b> <?php echo htmlentities($new1['time']); ?><br>
<hr>

<?php

$group = $new1['factionid'];
?>
<?php if($udata['Leader'] == "$group") { ?>

<a href="?X=<?=$new1['id']?>"><button class="btn btn-success">Acceptat pentru teste</button></a> <br> <br>
 
 
<a href="?X2=<?=$new1['id']?>"><button class="btn btn-danger">Respins</button></a> <br>


<hr>
 <?php } ?>
<h4>Istoric Factiuni</h4>
<hr>

<?php

$name = $new1['name'];

?>

<div id="feed" class="tab-pane">

<?php $q = mysql_query("SELECT * from players WHERE Name = '$name'"); ?>
<?php while($dnn3 = mysql_fetch_array($q)) { ?>

<?php
$idul = $dnn3['ID'];
$skin = $dnn3['Skin'];
?>

<?php $q = mysql_query("SELECT * from factionlogs WHERE Player = '$idul' order by Player DESC"); ?>
<?php while($dnn2 = mysql_fetch_array($q)) { ?>





<div class="profile-feed row-fluid">
<div class="span12">

<div class="profile-activity clearfix ">





<div class="pull-left">
<img src="images/Skin_small/<?php echo $skin;?>.png">
</div>


<?php echo $dnn2['Text']; ?>
<div class="time">
<i class="icon-time bigger-110"></i>
<?php echo $dnn2['time']; ?>
</div>
</div>

</div>

</div>
<?php } ?>
<?php } ?>
</div>

</div>

<div class="span7">

<?php $q = mysql_query("SELECT * from players WHERE ID = '$idul'"); 
 while($dnn4 = mysql_fetch_array($q)) { ?>


<div class="profile-activity clearfix">
<div>
<span class="span4">
Nickname:
</span>
<span class="text-info span8">
<a href="cont.php?id=<?php echo $dnn4['ID']; ?>"><?php echo htmlentities($new1['name']); ?></a>
</span>
</div>
</div>
<div class="profile-activity clearfix">
<div>
<span class="span4">
Nivel:
</span>
<span class="text-info span8">
nivel <?php echo htmlentities($dnn4['Level']); ?><br><?php echo htmlentities($dnn4['HoursPlayed']); ?> ore jucate
</span>
</div>
</div>
<div class="profile-activity clearfix">
<div>
<span class="span4">
Data de intregistrare:
</span>
<span class="text-info span8">
<?php echo htmlentities($dnn4['RegistrationDate']); ?>
</span>
</div>
</div>
<div class="profile-activity clearfix">
<div>
<span class="span4">
Avertizari:
</span>
<span class="text-info span8">
<?php echo htmlentities($dnn4['Warns']); ?>/3
</span>
</div>
</div>

<?php } ?>
<div class="profile-activity clearfix">
<div>
<span class="span4">Varsta reala:</span> <span class="text-info span8"><?php echo htmlentities($new1['intrebarea1']); ?></span>
</div>
</div>
<div class="profile-activity clearfix">
<div>
<span class="span4">Cat timp petreci zilnic pe SA:MP?:</span> <span class="text-info span8"><?php echo htmlentities($new1['intrebarea2']); ?></span>
</div>
</div>
<div class="profile-activity clearfix">
<div>
<span class="span4">Esti de acord sa stai minim 14 zile in factiune pentru a nu primi Faction Punish cand iesi din factiune?:</span> <span class="text-info span8"><?php echo htmlentities($new1['intrebarea3']); ?></span>
</div>
</div>
<div class="profile-activity clearfix">
<div>
<span class="span4">Ultima factiune si motivul pentru care ai iesit:</span> <span class="text-info span8"><?php echo htmlentities($new1['intrebarea4']); ?></span>
</div>
</div>
<div class="profile-activity clearfix">
<div>
<span class="span4">De ce doresti sa te alaturi acestei factiuni?</span> <span class="text-info span8"><?php echo htmlentities($new1['intrebarea5']); ?></span>
</div>
</div>
<div class="profile-activity clearfix">
<div>
<span class="span4">Alte precizari?</span> <span class="text-info span8"><?php echo htmlentities($new1['intrebarea6']); ?></span>
</div>
</div>

</div>
</div>
<br>
 
<?php } ?>
 
 
 
</div> 
</div>
</div>
</div>
</div>
