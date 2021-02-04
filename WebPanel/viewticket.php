<?php
include 'includes/config.php';
redirect_not_logged();

$t = isset($_GET['t']) ? $_GET['t'] : 1;
if($t==0)$t=1;

$numepl = $udata['playerName'];
$idpl = $udata['playerID'];


if(isset($_GET['X']) && $udata['playerAdminLevel'] >= 5)
{
	$id = (int)$_GET['X'];
	mysql_query('UPDATE tickets SET status = 1 WHERE id='.$id);
	$query3 = mysql_query('SELECT * from tickets WHERE id='.$id); 
	while($row2=mysql_fetch_array($query3)) {
	
	
		$player = $row2['playerid'];
	}
	mysql_query('UPDATE playeraccounts SET newemail = 1 WHERE playerID='.$player);
	
	mysql_query("INSERT INTO email (text, playerid) VALUES ('Ticketul deschis de tine a fost inchis.', '$player')");
	
	header("location: tickets.php");
	
}

if(isset($_GET['X2']) && $udata['playerAdminLevel'] >= 5)
{
	$id = (int)$_GET['X2'];
	mysql_query('UPDATE tickets SET status = 0 WHERE id='.$id);
	$query3 = mysql_query('SELECT * from tickets WHERE id='.$id); 
	while($row2=mysql_fetch_array($query3)) {
	
	
		$player = $row2['playerid'];
	}
	mysql_query('UPDATE playeraccounts SET newemail = 1 WHERE playerID='.$player);
	
	mysql_query("INSERT INTO email (text, playerid) VALUES ('Ticketul deschis de tine a fost redeschis.', '$player')");
	header("location: tickets.php");
	
}

if(isset($_POST['comment']))
{
	$comm = mysql_real_escape_string($_POST['comment']);
	$run = mysql_query("INSERT INTO ticketcomments (ticketid, text, name, playerid) VALUES ('$t','$comm','$numepl','$idpl')");
	header("location: viewticket.php?t=$t");
}
include 'includes/header.php';
?>

<div class="main-content">
<div class="page-content">
<div class="span11">
<div class="row-fluid">

																				
<div class="row-fluid">

<div class="span12">
 
<div class="row-fluid">
<div class="span6">

<?php $query = mysql_query("SELECT * from tickets where id = '$t'"); 
	  while($dnn=mysql_fetch_array($query)) { ?>
	  
<?php if($udata['playerAdminLevel']>= 1 || $udata['playerID'] == $dnn['playerid']) { ?>	 
 
<h4>Ticket status</h4>
<hr>

	  
<?php echo htmlentities($dnn['text']); ?>
<br>
<hr>
Ticket title: <b><?php echo htmlentities($dnn['name']); ?></b><br>


<?php
$status = $dnn['status'];

?>

<?php if($status=="0") { ?>

Ticket status: <b>Open.</b><br>
 
 <?php } ?>
 <?php if($status=="1") { ?>

Ticket status: <b>Closed.</b><br>
 
 <?php } ?>


Created at: <b><?php echo htmlentities($dnn['time']); ?></b><br>
<hr>

<?php
$ida = $dnn['playerid'];
?>
 <?php $query = mysql_query("SELECT * from playeraccounts WHERE playerID = '$ida'"); 
	while($new1=mysql_fetch_array($query)) { ?>
	
<b>Nickname:</b> <a href="cont.php?id=<?php echo htmlentities($new1['playerID']); ?>"><?php echo htmlentities($new1['playerName']); ?></a><br>
<b>Level:</b> <?php echo htmlentities($new1['playerLevel']); ?><br>
<b>Faction:</b> <?php echo htmlentities($new1['playerGroup']); ?>
<br>
<b>Hours played:</b> <?php echo htmlentities($new1['playerHours']); ?><br>
<b>Email:</b> <?php echo htmlentities($new1['playerEmail']); ?><br>
<b>Premium points:</b> <?php echo htmlentities($new1['playerCarWeapon5']); ?><br>
<hr>

<?php } ?>

<?php if($udata['playerAdminLevel']>="5") { ?>

<a href="?X=<?=$dnn['id']?>"><button class="btn btn-danger">Close ticket!</button></a>

<br> <br>

<a href="?X2=<?=$dnn['id']?>"><button class="btn btn-success">Open ticket!</button></a>

<br> <br>

<?php } ?>

</div>
<div class="span6">
<h4>Comments</h4>
<hr>
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
<?php $query = mysql_query("SELECT * from ticketcomments where ticketid = '$t'"); 
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
<?php if($da < 6 && $da != 0) { ?> 
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
<?php } ?>
</div>
</div>
<?php } ?>
<!-- do not affect this divs, or your design will fuck up -->
</div>
</div>
</div>
<!-- do not affect this divs, or your design will fuck up -->
