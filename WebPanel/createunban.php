<?php
include 'includes/config.php';
redirect_not_logged();

$numepl = $udata['playerName'];
$idpl = $udata['playerID'];

if(isset($_POST['text']))
{
	$comm = mysql_real_escape_string($_POST['text']);
	mysql_query("INSERT INTO unbans (name, text, playerid) VALUES ('$numepl','$comm','$idpl')");
	header("location: unbanrequest.php");
	
}

include 'includes/header.php';
?>

<div class="main-content">
<div class="page-content">
<div class="span11">
<div class="row-fluid">

<div class="span12">
 
 
 <?php if($udata['playerBanned'] == 1) { ?>
<div class="row-fluid">
<div class="span8">
<div class="alert alert-warning">
Daca stii ca ai fost sanctionat corect, nu are rost sa faci cererea de unban. Nu vei fi debanat.
</div>

										
														
<h4>Creaza cerere unban</h4>
<hr>


														
<form method="POST" accept-charset="UTF-8"><input name="_token" type="hidden" value="DGQVbBhJCGkvd17Q9CmXlYKQitkY6aufpAls2BHg">

<?php $query = mysql_query('SELECT * FROM bans'); 
		while($dnn=mysql_fetch_array($query)) { ?>

		
<?php if($dnn['playerNameBanned'] == $udata['playerName'])
	{ ?>
Banat de: <b><?php echo htmlentities($dnn['playerBannedBy']); ?></b><br>
Motiv ban: <b><?php echo htmlentities($dnn['playerBanReason']); ?></b><br>
Data banului: <b><?php echo htmlentities($dnn['playerBanDate']); ?></b><br>
<br>
<?php } ?>
<?php } ?>
<label for="text">Detalii: </label>
<textarea class="span10" rows="5" name="text" cols="50" id="text"></textarea>
<br>
<input class="btn btn-small btn-danger" type="submit" value="Creaza cerere unban">
</form>
</div>
<div class="span4">
<h4>Info</h4>
<ul>
<li>Poate dura pana la 24 de ore pana se va raspunde la cererea de unban</li>
<li>Daca ti s-a raspuns la cererea de unban si ti s-a zis ca banul ramane, nu crea alta.</li>
</ul>
</div>
</div>
 
 
<?php } ?>
<?php if($udata['playerBanned'] == 0) { ?>

<legend><center><b>You are not banned!</b></center></legend>

<?php } ?>
</div>




</div>
</div>
</div>
</div>