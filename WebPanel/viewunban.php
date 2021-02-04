<?php
include 'includes/config.php';
redirect_not_logged();

$u = isset($_GET['u']) ? $_GET['u'] : 1;
if($u==0)$u=1;

$numepl = $udata['playerName'];
$idpl = $udata['playerID'];


if(isset($_GET['X']) && $udata['playerAdminLevel'] >= 5)
{
	$id = (int)$_GET['X'];
	mysql_query('UPDATE unbans SET status = 1 WHERE id='.$id);
	$query3 = mysql_query('SELECT * from unbans WHERE id='.$id); 
	while($row2=mysql_fetch_array($query3)) {
	
	
		$player = $row2['playerid'];
	}
	mysql_query('UPDATE playeraccounts SET newemail = 1 WHERE playerID='.$player);
	header("location: unbanrequest.php");
	
}

if(isset($_GET['X2']) && $udata['playerAdminLevel'] >= 5)
{
	$id = (int)$_GET['X2'];
	mysql_query('UPDATE unbans SET status = 2 WHERE id='.$id);
	$query3 = mysql_query('SELECT * from unbans WHERE id='.$id); 
	while($row2=mysql_fetch_array($query3)) {
	
	
		$player = $row2['playerid'];
	}
	mysql_query('UPDATE playeraccounts SET newemail = 1 WHERE playerID='.$player);
	header("location: unbanrequest.php");
	
}

if(isset($_GET['X3']) && $udata['playerAdminLevel'] >= 5)
{
	$id = (int)$_GET['X3'];
	mysql_query('UPDATE unbans SET status = 0 WHERE id='.$id);
	$query3 = mysql_query('SELECT * from unbans WHERE id='.$id); 
	while($row2=mysql_fetch_array($query3)) {
	
	
		$player = $row2['playerid'];
	}
	mysql_query('UPDATE playeraccounts SET newemail = 1 WHERE playerID='.$player);
	header("location: unbanrequest.php");
	
}




if(isset($_POST['comment']))
{
	$comm = mysql_real_escape_string($_POST['comment']);
	$run = mysql_query("INSERT INTO unbancomments (unbanid, text, name, playerid) VALUES ('$u','$comm','$numepl','$idpl')");
	header("location: viewunban.php?u=$u");
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

<?php $query = mysql_query("SELECT * from unbans where id = '$u'"); 
	  while($dnn=mysql_fetch_array($query)) { ?>


<?php

$nume = $dnn['name'];

?>

	<?php $query = mysql_query("SELECT * FROM playeraccounts WHERE playerName ='$nume'");
	while($row = mysql_fetch_array($query)): ?>
		
		
<h4>Unban request</h4>
Nickname: <b><?=$row['playerName']?></b><br>
Level: <b><?=$row['playerLevel']?></b><br>
Faction: <b><?=$row['playerGroup']?></b><br>
Hours played: <b><?=$row['playerHours']?></b>

<hr>
<?=$dnn['text']?><br>
<hr>


<?php

$aproove = $dnn['status'];
$a = $row['playerBanned'];

?>

		
Unban request status:

<?php if($aproove=="0") { ?>

<b><span style='color: #1a1a1a;'>Awaiting to aprooval.</span></b>
 
 <?php } ?>
 
<?php if($aproove=="1") { ?>
			
<b><span style='color: #1a1a1a;'>Closed and aprooved.</span></b>			

<?php } ?>

<?php if($aproove=="2") { ?>
			
<b><span style='color: #1a1a1a;'>Closed and rejected.</span></b>			

<?php } ?>

<br>

Ban status:

<?php if($a=="0") { ?>

<b>Player not banned.</b>
 
 <?php } ?>
 
<?php if($a=="1") { ?>
			
<b>Player banned.</b>			

<?php } ?>


<hr>
<?php if($udata['playerAdminLevel']>="5") { ?>

<a href="?X=<?=$dnn['id']?>"><button class="btn btn-success">Close and aproove!</button></a>

<br> <br>

<a href="?X2=<?=$dnn['id']?>"><button class="btn btn-danger">Close and reject!</button></a>

<br> <br>

<a href="?X3=<?=$dnn['id']?>"><button class="btn btn-default">Open request!</button></a>

<br> <br>

<?php } ?>
<?php endwhile; ?>
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
<?php $query = mysql_query("SELECT * from unbancomments where unbanid = '$u'"); 
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
<?php if($da == 5) { ?> 
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

<?php if($open=="2") { ?>
			
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
<?php } ?>	
</div>
</div>

<!-- do not affect this divs, or your design will fuck up -->
</div>
</div>
<!-- do not affect this divs, or your design will fuck up -->
