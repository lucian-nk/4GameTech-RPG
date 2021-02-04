<?php
include 'includes/config.php';
redirect_not_logged();
include 'includes/header.php';
?>
<?

$numepl = $udata['playerName'];
$idpl = $udata['playerID'];
$id = isset($_GET['id']) ? $_GET['id'] : 1;
if($id==0)$id=1;

if(isset($_POST['comment']))
{
	$comm = mysql_real_escape_string($_POST['comment']);
	$run = mysql_query("INSERT INTO bugscomments (bugid, text, name, playerid) VALUES ('$id','$comm','$numepl','$idpl')");
	header("location: viewbug.php?id=$id");
}
?>
<div class="main-content">
<div class="page-content">
<div class="row-fluid">
<div class="span12">
  <?php $query = mysql_query("SELECT * from bugs WHERE id = '$id'"); 
	  while($a=mysql_fetch_array($query)) { ?>
<div class="row-fluid">
<div class="span6">

<h4><?php echo htmlentities($a['title']); ?></h4>
<hr>
<?php echo htmlentities($a['text']); ?>
<hr>
<?php if($a['type']==0) { ?>
Bug status: <b>New bug</b><br>
<?php } ?>
<?php if($a['type']==1) { ?>
Bug status: <b>High priority</b><br>
<?php } ?>
<?php if($a['type']==2) { ?>
Bug status: <b>Medium priority</b><br>
<?php } ?>
<?php if($a['type']==3) { ?>
Bug status: <b>Low priority</b><br>
<?php } ?>
<?php if($a['type']==4) { ?>
Bug status: <b>Testing required</b><br>
<?php } ?>
Created at: <b><?php echo htmlentities($a['time']); ?></b><br>
<hr>
<?
$playerid = $a['playerid'];
?>
 <?php $query2 = mysql_query("SELECT * from playeraccounts WHERE playerID = '$playerid'"); 
	  while($a2=mysql_fetch_array($query2)) { ?>
Nickname: <a href="cont.php?id=<?php echo htmlentities($a2['playerID']); ?>"><?php echo htmlentities($a2['playerName']); ?></a><br>
Level: <?php echo htmlentities($a2['playerLevel']); ?><br>
Faction: <?php echo htmlentities($a2['playerGroup']); ?><br>
Hours played: <?php echo htmlentities($a2['playerHours']); ?>
<?php } ?>
<hr>
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
<?php $query = mysql_query("SELECT * from bugscomments where bugid = '$id'"); 
	  while($area=mysql_fetch_array($query)) { ?>
<div class="itemdiv dialogdiv">
<?php

$idu = $area['playerid'];
$check = get_row("SELECT * FROM playeraccounts WHERE playerID='$idu'")

?>

<div class="user">
<img alt="Avatar" src="images/Skin_small/<?php echo $check['playerSkin']; ?>.png">
</div>
<div class="body ">
<div class="time">
<i class="icon-time"></i>
<span class="green">
25.01.2014, 11:28
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
<span class="pull-right">
</span>
</p>
</div>
</div>
</div>
<?php } ?>
</div>
<?php

$open = $a['type'];

?>


<?php if($open=="0") { ?>


<form class="form-horizontal" method="POST" style="margin: 0 15px 20px 60px;"> 
<h5>Leave a reply</h5>
<textarea class="input-block-level" placeholder="Add comment..." name="comment"></textarea>
<br><br>
<input type="submit" name="submit" class="btn btn-small btn-danger" value="Post">
</form>

 <?php } ?>
 
<?php if($open>="1") { ?>
			
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
<?php } ?>
</div> 
</div> 
</div>
</div>