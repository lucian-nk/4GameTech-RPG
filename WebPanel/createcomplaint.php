<?php
include 'includes/config.php';
redirect_not_logged();

$id = isset($_GET['id']) ? $_GET['id'] : 1;
if($id==0)$id=1;

$idpl = $udata['playerID'];


$query3 = mysql_query("SELECT * from playeraccounts WHERE playerID = '$id'"); 
while($row2=mysql_fetch_array($query3)) {
	
$factiune = $row2['playerGroup'];
$rank = $row2['playerGroupRank'];
$admin = $row2['playerAdminLevel'];
$helper = $row2['playerHelperLevel'];
} 
if(isset($_POST['links']))
{

$query2 = mysql_query("SELECT * from playeraccounts WHERE playerID = '$idpl'"); 
	  while($row69=mysql_fetch_array($query2)) {
	
$nume = $row69['playerName'];
}	  
	  
	if($admin > 0 || $helper > 0)
	{
		$detalii = mysql_real_escape_string($_POST['desc']);
		$dovezi = mysql_real_escape_string($_POST['links']);
		$motiv = mysql_real_escape_string($_POST['motiv']);
		mysql_query('UPDATE playeraccounts SET newemail = 1 WHERE playerID='.$id);
		mysql_query("INSERT INTO email (text, playerid) VALUES ('$nume ti-a creat o reclamatie pe panel.', '$id')");
		mysql_query("INSERT INTO complaints (detalii, creatorid, againstid, dovezi, motiv) VALUES ('$detalii', '$idpl', '$id', '$dovezi', '$motiv')");
		header("location: complaints.php");	
	}	
	else
	{
		if($rank < 7)
		{
			$detalii = mysql_real_escape_string($_POST['desc']);
			$dovezi = mysql_real_escape_string($_POST['links']);
			$motiv = mysql_real_escape_string($_POST['motiv']);
			
			mysql_query('UPDATE playeraccounts SET newemail = 1 WHERE playerID='.$id);
			mysql_query("INSERT INTO email (text, playerid) VALUES ('$nume ti-a creat o reclamatie la factiune pe panel.', '$id')");
			mysql_query("INSERT INTO complaints (detalii, creatorid, againstid, dovezi, motiv, factionid) VALUES ('$detalii', '$idpl', '$id', '$dovezi', '$motiv', '$factiune')");
			if($group > 0)
			{
				header("location: fcomplaints.php?f=$group");
			}
			else
			{
				header("location: complaints.php");
			}
			
		}
		else
		{
			$detalii = mysql_real_escape_string($_POST['desc']);
			$dovezi = mysql_real_escape_string($_POST['links']);
			$motiv = mysql_real_escape_string($_POST['motiv']);
			mysql_query('UPDATE playeraccounts SET newemail = 1 WHERE playerID='.$id);
			mysql_query("INSERT INTO email (text, playerid) VALUES ('$nume ti-a creat o reclamatie pe panel.', '$id')");
			mysql_query("INSERT INTO complaints (detalii, creatorid, againstid, dovezi, motiv) VALUES ('$detalii', '$idpl', '$id', '$dovezi', '$motiv')");
			header("location: complaints.php");	
		}
	}	
}
include 'includes/header.php';

?>
<div class="main-content">
<div class="page-content">
<div class="row-fluid">
<div class="span12">
 
<div class="row-fluid">
<div class="span4">
<h4>Player reclamat</h4>
<ul>
<?php $query = mysql_query("SELECT * from playeraccounts WHERE playerID = '$id'"); 
	  while($dnn=mysql_fetch_array($query)) { ?>
<li>Nickname: <?php echo htmlentities($dnn['playerName']); ?></li>
<?php
$idg = $dnn['playerGroup'];
?>
<?php if($idg >= 1) { ?>
<?php $query = mysql_query("SELECT * from groups WHERE groupID = '$idg'"); 
	  while($row=mysql_fetch_array($query)) { ?>
<li>Factiune: <?php echo htmlentities($row['groupName']); ?>, rank <?php echo htmlentities($dnn['playerGroupRank']); ?></li>
<?php } ?>
<?php } ?>
<li>Level: <?php echo htmlentities($dnn['playerLevel']); ?></li>
<li>Ore jucate: <?php echo htmlentities($dnn['playerHours']); ?></li>

</ul>
<h4>Info</h4>
<ul>
<li>Inainte de a reclama un player, cititi regulamentul serverului. Daca faceti reclamatie unui lider, cititi si regulamentul liderilor.</li>
<li>Puteti uploada imagini pe site-uri ca <a href="http://imgur.com" target="_blank">imgur.com</a> sau <a href="http://min.us" target="_blank">minus.com</a></li>
</ul>
</div>
<div class="span8">
<h4>Creaza o reclamatie</h4>
<form method="POST" accept-charset="UTF-8"><input name="_token" type="hidden" value="FyVxObeEWBSX2RI62f4sf0V0ND4yrQZCL6VbQWk6">
<label for="motiv">Motiv:</label>
<textarea class="span10" rows="3" name="motiv" cols="50" id="motiv" required></textarea>
<br>
<label for="links">Dovezi (screenshot-uri, video-uri)</label>
<textarea class="span10" rows="3" name="links" cols="50" id="links" required></textarea>
<br>
<label for="desc">Detalii</label>
<textarea class="span10" rows="5" name="desc" cols="50" id="desc" required></textarea>
<br>
<input class="btn btn-small btn-danger" type="submit" value="Post complaint">
</form>
</div>
</div>
 <?php } ?>
</div> 
</div> 
</div>
</div>