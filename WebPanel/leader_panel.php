<?php
include 'includes/config.php';
redirect_not_logged();

if(isset($_GET['X']) && $udata['Leader'] > 0)
{
	$id = (int)$_GET['X'];
	mysql_query('UPDATE groups SET groupAplication = 0 WHERE groupID='.$id);
	$eroare = 'Ai inchis aplicarile pentru factiunea la care esti lider.';
}

if(isset($_GET['X2']) && $udata['Leader'] > 0)
{
	$id = (int)$_GET['X2'];
	mysql_query('UPDATE groups SET groupAplication = 1 WHERE groupID='.$id);
	$eroare = 'Ai deschis aplicarile pentru factiunea la care esti lider.';
	
}

include 'includes/header.php';
?>


<div class="main-content">
<div class="page-content">
<div class="row-fluid">
<div class="span12">

<?php if($udata['Leader'] > 0): ?>

<div class="row-fluid">
<div class="span12">
 
<h3>Setari factiune</h3>



<ul>

<?php
$group = $udata['Leader'];
?>

<?php $query = mysql_query("SELECT * from groups WHERE groupID = '$group'"); 
while($dnn=mysql_fetch_array($query)) { ?>

<?php if($dnn['groupAplication']=="1") { ?>

<li><a href="?X=<?=$udata['Leader']?>">Inchide aplicarile</a></li>	
 
 <?php } ?>
 
<?php if($dnn['groupAplication']=="0") { ?>
			
<li><a href="?X2=<?=$udata['Leader']?>">Deschide aplicarile</a></li>			

<?php } ?>
<?php } ?>
</ul>

<hr>
<?php

$da = $udata['Leader'];

?>
<?php
$new2 = mysql_query("SELECT COUNT(id) as total FROM faction_complaints WHERE status = 0 and factionid = '$da'");
$new2 = mysql_fetch_array($new2);
?>
Faction complaints: <a href="fcomplaints.php?f=<?=$udata['Leader']?>"><?=$new2['total']?> reclamatii in asteptare</a><br> 
<?php
$new = mysql_query("SELECT COUNT(id) as total FROM aplications WHERE factionid = '$da' and status = 0");
$new = mysql_fetch_array($new);
?>
Faction applications: <a href="aplications.php?f=<?=$udata['Leader']?>"><?=$new['total']?> aplicari in asteptare</a><br>
 
</div> 
</div>


<?php endif; ?>

<?php if(isset($eroare)): ?>
			<br />
				<font color="#FF0000" size="3"><b><center><?=$eroare?></center></b></font>
<?php endif; ?>

</div>
</div>
</div>
</div>