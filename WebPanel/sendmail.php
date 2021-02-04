<?php
include 'includes/config.php';
redirect_not_logged();

$id = isset($_GET['id']) ? $_GET['id'] : 1;
if($id==0)$id=1;

$idpl = $udata['playerID'];

if(isset($_POST['text']))
{
	$text = mysql_real_escape_string($_POST['text']);
	mysql_query("INSERT INTO email (playerid, text, creator) VALUES ('$id','$text','$idpl')");
	mysql_query("UPDATE playeraccounts SET newemail = 1 WHERE playerID = $id");
	header("location: email.php");
	
}

include 'includes/header.php';
?>

<div class="main-content">
<div class="page-content">
<div class="row-fluid">
<div class="span12">
 <div class="alert alert-block alert-info">
									<button type="button" class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>

									<i class="ace-icon fa fa-check green"></i>

									<li>Pentru trimite un email ai nevoie de minim 5 ore jucate pe server.</li>
								</div>
<?php if($udata['playerHours'] >= 5) { ?>
<div class="row-fluid">
<div class="span4">
<h4>Player to send email</h4>
<ul>
<?php $query = mysql_query("SELECT * from playeraccounts WHERE playerID = $id"); 
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

</div>
<div class="span8">
<h4>Trimite un email</h4>
<form method="POST" accept-charset="UTF-8"><input name="text" type="hidden" value="FyVxObeEWBSX2RI62f4sf0V0ND4yrQZCL6VbQWk6">
<label for="text">Email text:</label>
<textarea class="span10" rows="3" name="text" cols="50" id="text" required></textarea>
<br>
<input class="btn btn-small btn-success" type="submit" value="Send email">
</form>
</div>
</div>
<?php } ?>
<?php } ?>
</div> 
</div> 
</div>
</div>