<?php
include 'includes/config.php';
redirect_not_logged();

$co = isset($_GET['co']) ? $_GET['co'] : 1;
if($co==0)$co=1;

$numepl = $udata['playerName'];
$idpl = $udata['playerID'];
$group = $udata['playerGroup'];

if(isset($_GET['X']) && $udata['playerGroupRank'] >= 6)
{
	$id = (int)$_GET['X'];
	mysql_query('UPDATE complaints SET status = 1 WHERE id='.$id);
	$query3 = mysql_query('SELECT * from complaints WHERE id='.$id); 
	while($row2=mysql_fetch_array($query3)) {
	
		$player2 = $row2['creatorid'];
		$player = $row2['againstid'];
	}
	$query69 = mysql_query('SELECT * from playeraccounts WHERE playerID='.$player); 
	while($row69=mysql_fetch_array($query69)) {
	
		$nume = $row69['playerName'];
	}
	mysql_query('UPDATE playeraccounts SET newemail = 1 WHERE playerID='.$player);
	
	$query5 = mysql_query('SELECT * from complaints WHERE id='.$id); 
	while($row5=mysql_fetch_array($query5)) {
	
	$agid = $row5['creatorid'];
	
	}
	$query4 = mysql_query('SELECT * from playeraccounts WHERE playerID='.$agid); 
	while($row3=mysql_fetch_array($query4)) {
		
		$nf = $row3['playerName'];
	
	}
	mysql_query("INSERT INTO email (text, playerid) VALUES ('Reclamatia la factiune creata de $nf a fost inchisa.', '$player')");
	mysql_query("INSERT INTO email (text, playerid) VALUES ('Reclamatia facuta lui $nume a fost inchisa.', '$player2')");
	header("location: fcomplaints.php?f=$group");
}

if(isset($_GET['X2']) && $udata['playerGroupRank'] >= 6)
{
	$id = (int)$_GET['X2'];
	mysql_query('UPDATE complaints SET status = 0 WHERE id='.$id);
	$query3 = mysql_query('SELECT * from complaints WHERE id='.$id); 
	while($row2=mysql_fetch_array($query3)) {
	
		$player2 = $row2['creatorid'];
		$player = $row2['againstid'];
	}
	$query69 = mysql_query('SELECT * from playeraccounts WHERE playerID='.$player); 
	while($row69=mysql_fetch_array($query69)) {
	
		$nume = $row69['playerName'];
	}
	mysql_query('UPDATE playeraccounts SET newemail = 1 WHERE playerID='.$player);
	
	$query5 = mysql_query('SELECT * from complaints WHERE id='.$id); 
	while($row5=mysql_fetch_array($query5)) {
	
	$agid = $row5['creatorid'];
	
	}
	$query4 = mysql_query('SELECT * from playeraccounts WHERE playerID='.$agid); 
	while($row3=mysql_fetch_array($query4)) {
		
		$nf = $row3['playerName'];
	
	}
	mysql_query("INSERT INTO email (text, playerid) VALUES ('Reclamatia la factiune creata de $nf a fost redeschisa.', '$player')");
	mysql_query("INSERT INTO email (text, playerid) VALUES ('Reclamatia facuta lui $nume a fost redeschisa.', '$player2')");
	header("location: fcomplaints.php?f=$group");
	
}

if(isset($_GET['X3']) && $udata['playerAdminLevel'] >= 1)
{
	$id = (int)$_GET['X3'];
	mysql_query('UPDATE complaints SET status = 1 WHERE id='.$id);
	$query3 = mysql_query('SELECT * from complaints WHERE id='.$id); 
	while($row2=mysql_fetch_array($query3)) {
	
		$player2 = $row2['creatorid'];
		$player = $row2['againstid'];
	}
	$query69 = mysql_query('SELECT * from playeraccounts WHERE playerID='.$player); 
	while($row69=mysql_fetch_array($query69)) {
	
		$nume = $row69['playerName'];
	}
	mysql_query('UPDATE playeraccounts SET newemail = 1 WHERE playerID='.$player);
	
	$query5 = mysql_query('SELECT * from complaints WHERE id='.$id); 
	while($row5=mysql_fetch_array($query5)) {
	
	$agid = $row5['creatorid'];
	
	}
	$query4 = mysql_query('SELECT * from playeraccounts WHERE playerID='.$agid); 
	while($row3=mysql_fetch_array($query4)) {
		
		$nf = $row3['playerName'];
	
	}
	mysql_query("INSERT INTO email (text, playerid) VALUES ('Reclamatia creata de $nf a fost inchisa.', '$player')");
	mysql_query("INSERT INTO email (text, playerid) VALUES ('Reclamatia facuta lui $nume a fost inchisa.', '$player2')");
	header("location: complaints.php");
}

if(isset($_GET['X4']) && $udata['playerAdminLevel'] >= 1)
{
	$id = (int)$_GET['X4'];
	mysql_query('UPDATE complaints SET status = 0 WHERE id='.$id);
	$query3 = mysql_query('SELECT * from complaints WHERE id='.$id); 
	while($row2=mysql_fetch_array($query3)) {
	
		$player2 = $row2['creatorid'];
		$player = $row2['againstid'];
	}
		$query69 = mysql_query('SELECT * from playeraccounts WHERE playerID='.$player); 
	while($row69=mysql_fetch_array($query69)) {
	
		$nume = $row69['playerName'];
	}
	mysql_query('UPDATE playeraccounts SET newemail = 1 WHERE playerID='.$player);
	
	$query5 = mysql_query('SELECT * from complaints WHERE id='.$id); 
	while($row5=mysql_fetch_array($query5)) {
	
	$agid = $row5['creatorid'];
	
	}
	$query4 = mysql_query('SELECT * from playeraccounts WHERE playerID='.$agid); 
	while($row3=mysql_fetch_array($query4)) {
		
		$nf = $row3['playerName'];
	
	}
	mysql_query("INSERT INTO email (text, playerid) VALUES ('Reclamatia creata de $nf a fost redeschisa.', '$player')");
	mysql_query("INSERT INTO email (text, playerid) VALUES ('Reclamatia facuta lui $nume a fost redeschisa.', '$player2')");
	header("location: complaints.php");
	
}
if(isset($_POST['comment']))
{
	$comm = mysql_real_escape_string($_POST['comment']);
	$run = mysql_query("INSERT INTO complaintscomments (complaintid, text, name, playerid) VALUES ('$co','$comm','$numepl','$idpl')");
	header("location: viewcomplaint.php?co=$co");
}
include 'includes/header.php';
?>

<div class="main-content">
<div class="page-content">
<div class="row-fluid">
<div class="span12">
 
<div class="row-fluid">
<div class="span4">


<?php $query = mysql_query("SELECT * from complaints where id = '$co'"); 
	  while($dnn=mysql_fetch_array($query)) { ?>
	  
<h4>Complaint against</h4>
<hr>
<?php
$idplayer = $dnn['againstid'];
?>
<?php $query2 = mysql_query("SELECT * from playeraccounts WHERE playerID = '$idplayer'"); 
	  while($row=mysql_fetch_array($query2)) { ?>
<img class="nav-user-photo img-circle pull-left" src="avatars/<?php echo htmlentities($row['playerSkin']); ?>.png" alt="Avatar">
<p class="pull-left">
<a href="cont.php?id=<?php echo htmlentities($row['playerID']); ?>"><?php echo htmlentities($row['playerName']); ?></a><br>
Level: <?php echo htmlentities($row['playerLevel']); ?><br>
Faction: <?php echo htmlentities($row['playerGroup']); ?><br>
Hours played: <?php echo htmlentities($row['playerHours']); ?><br>
Warns: <?php echo htmlentities($row['playerVIP']); ?>/3<br>
Faction Warns: <?php echo htmlentities($row['playerCarWeapon3']); ?>/3<br>
Faction Punish: <?php echo htmlentities($row['playerCarWeapon2']); ?>/20<br>
</p>
<?php } ?>
<span class="clearfix"></span>
<hr>
<h4>Complaint status</h4>
<?php if($dnn['status']=="0") { ?>
Status: <b>Open</b><br>
<?php } ?>
<?php if($dnn['status']=="1") { ?>
Status: <b>Closed</b><br>
<?php } ?>
Complaint reason: <b><?php echo htmlentities($dnn['motiv']); ?></b><br>
Creat pe: <b><?php echo htmlentities($dnn['time']); ?></b><br>
<br>
<hr>
<?php if($udata['playerAdminLevel'] >= 1) { ?>

<a href="?X3=<?=$dnn['id']?>"><button class="btn btn-danger">Close complaint!</button></a>

<br> <br>

<a href="?X4=<?=$dnn['id']?>"><button class="btn btn-success">Re-open complaint!</button></a>

<br> <br>

<?php } ?>
<?php if($udata['playerGroupRank'] >= 6 && ($udata['playerGroup'] == $dnn['factionid'])) { ?>

<a href="?X=<?=$dnn['id']?>"><button class="btn btn-danger">Close!</button></a>

<br> <br>

<a href="?X2=<?=$dnn['id']?>"><button class="btn btn-success">Re-open!</button></a>

<br> <br>

<?php } ?>
</div>
<div class="span8">
<h4>Complaints details</h4>
<hr>
<?php

$playerid = $dnn['creatorid'];
?>
<?php $query3 = mysql_query("SELECT * from playeraccounts WHERE playerID = '$playerid'"); 
	  while($row2=mysql_fetch_array($query3)) { ?>
<b>Nickname</b>: <a href="cont.php?id=<?php echo htmlentities($row2['playerID']); ?>"><?php echo htmlentities($row2['playerName']); ?></a><br>
<b>Level</b>: <?php echo htmlentities($row2['playerLevel']); ?><br>
<?php } ?>
<b>Detalii</b>: <?php echo htmlentities($dnn['detalii']); ?><br>
<b>Motiv reclamatie</b>: <?php echo htmlentities($dnn['motiv']); ?>
<br>
<b>Dovezi (screenshot-uri, video-uri)</b>: <?php echo htmlentities($dnn['dovezi']); ?>
<br><br>

<div class="widget-box ">
<div class="widget-header widget-header-flat widget-header-small">
<h4 class="lighter smaller">
<i class="icon-rss red"></i>
Comments
</h4>
</div>

<div class="widget-body">
<div class="widget-main no-padding">
<div class="dialogs">
<?php $query = mysql_query("SELECT * from complaintscomments where complaintid = '$co'"); 
	  while($area=mysql_fetch_array($query)) { ?>
	  
<div class="itemdiv dialogdiv">

<?php

$idu = $area['playerid'];
$check = get_row("SELECT * FROM playeraccounts WHERE playerID='$idu'")

?>

<div class="user">
<img alt="Avatar" src="images/Skin_small/<?php echo $check['playerSkin']; ?>.png">
</div>
<div class="body">
<div class="time">
<i class="icon-time blue"></i>
<span class="green">
<?=$area['time']?>
</span>
</div>
<div class="text">
<p>

<a href = "cont.php?id=<?php echo $check['playerID']; ?>"><b><?=$area['name']?></b></a>
<?php if($area['name']=="iStorm." || $area['name']=="KAPSu") { ?> 
<span class="label label-purple arrowed arrowed-in-right"><i class="icon-gear white"></i> owner</span>
<?php } ?>
<?php
$da = $check['playerAdminLevel'];
?>
<?php if($da > 0 && $da < 6) { ?> 
<span class="label label-success arrowed arrowed-in-right"><i class="icon-shield white"></i> admin</span>
<?php } ?>															

<br>
<?=$area['text']?>
</p>
</div>
</div>
</div>

<?php } ?>
</div>




<?php

$open = $dnn['status'];

?>


<?php if($open=="0") { ?>


<form class="form-horizontal" method="POST" style="margin: 0 15px 20px 60px;"> 
<h5>Leave a reply</h5>
<textarea class="input-block-level" placeholder="Add comment..." name="comment"></textarea>
<br><br>
<input type="submit" name="submit" class="btn btn-small btn-danger" value="Post">
</form>

 <?php } ?>
 
<?php if($open=="1") { ?>
			
<form class="form-horizontal" method="POST" style="margin: 0 15px 20px 60px;" action="#" disabled="">
<h5>Leave a reply</h5>
<textarea class="input-block-level" placeholder="You can't reply to this topic, reason: This topic is closed." name="text" disabled=""></textarea>
<br><br>
<input type="submit" name="submit" class="btn btn-small btn-danger" value="Post" disabled="">
</form>			

<?php } ?>



</div> 
</div> 
</div>
 </div>
</div>
</div>
</div>
</div> 
</div> 
 <?php } ?>
</div>
</div>
<!-- do not affect this divs, or your design will fuck up -->
