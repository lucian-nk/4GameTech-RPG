<?php
include 'includes/config.php';
include 'includes/header.php';
?>
<div class="main-content">
<div class="page-content">
<div class="row-fluid">
<div class="span12">
 
<div class="row">
<div class="col-xs-12 center">
<div class="table-responsive" style="margin-left: 30px">
<div class="pull-left control-group">
<a href="createbug.php" class="btn btn-danger">New Bug Report</a>
</div>
<span class="clearfix"></span>
<h4 class="pull-left purple"><i class="icon-search"></i> New bugs</h4>
<span class="clearfix"></span>
<table id="sample-table-1" class="table table-striped table-condensed table-hover">
<thead>
<tr>
<th>Title</th>
<th>User</th>
<th class="span3">
<i class="icon-time bigger-110"></i>
Date
</th>
</tr>
</thead>
<tbody>
 <?php $query = mysql_query("SELECT * from bugs WHERE type = '0'"); 
	  while($a=mysql_fetch_array($query)) { ?>
<tr>
<td>
<a href="viewbug.php?id=<?php echo htmlentities($a['id']); ?>"><?php echo htmlentities($a['title']); ?></a> - <?php echo htmlentities($a['text']); ?>
</td>
<?
$playerid = $a['playerid'];
?>
 <?php $query2 = mysql_query("SELECT * from playeraccounts WHERE playerID = '$playerid'"); 
	  while($a2=mysql_fetch_array($query2)) { ?>
<td><a href="cont.php?id=<?php echo htmlentities($a['playerid']); ?>"><?php echo htmlentities($a2['playerName']); ?></a></td>
<?php } ?>
<td><?php echo htmlentities($a['time']); ?></td>
</tr>
<?php } ?>
</tbody>
</table>
<h4 class="pull-left red"><i class="icon-warning-sign"></i> High priority</h4>
<span class="clearfix"></span>
<table id="sample-table-1" class="table table-striped table-condensed table-hover">
<thead>
<tr>
<th>Title</th>
<th>User</th>
<th class="span3">
<i class="icon-time bigger-110"></i>
Date
</th>
</tr>
</thead>
<tbody>
 <?php $query = mysql_query("SELECT * from bugs WHERE type = '1'"); 
	  while($a=mysql_fetch_array($query)) { ?>
<tr>
<td>
<a href="viewbug.php?id=<?php echo htmlentities($a['id']); ?>"><?php echo htmlentities($a['title']); ?></a> - <?php echo htmlentities($a['text']); ?>
</td>
<?
$playerid = $a['playerid'];
?>
 <?php $query2 = mysql_query("SELECT * from playeraccounts WHERE playerID = '$playerid'"); 
	  while($a2=mysql_fetch_array($query2)) { ?>
<td><a href="cont.php?id=<?php echo htmlentities($a['playerid']); ?>"><?php echo htmlentities($a2['playerName']); ?></a></td>
<?php } ?>
<td><?php echo htmlentities($a['time']); ?></td>
</tr>
<?php } ?>
</tbody>
</table>
<h4 class="pull-left orange"><i class="icon-warning-sign"></i> Medium priority</h4>
<span class="clearfix"></span>
<table id="sample-table-1" class="table table-striped table-condensed table-hover">
<thead>
<tr>
<th>Title</th>
<th>User</th>
<th class="span3">
<i class="icon-time bigger-110"></i>
Date
</th>
</tr>
</thead>
<tbody>
 <?php $query = mysql_query("SELECT * from bugs WHERE type = '2'"); 
	  while($a=mysql_fetch_array($query)) { ?>
<tr>
<td>
<a href="viewbug.php?id=<?php echo htmlentities($a['id']); ?>"><?php echo htmlentities($a['title']); ?></a> - <?php echo htmlentities($a['text']); ?>
</td>
<?
$playerid = $a['playerid'];
?>
 <?php $query2 = mysql_query("SELECT * from playeraccounts WHERE playerID = '$playerid'"); 
	  while($a2=mysql_fetch_array($query2)) { ?>
<td><a href="cont.php?id=<?php echo htmlentities($a['playerid']); ?>"><?php echo htmlentities($a2['playerName']); ?></a></td>
<?php } ?>
<td><?php echo htmlentities($a['time']); ?></td>
</tr>
<?php } ?>
</tbody>
</table>
<h4 class="pull-left green"><i class="icon-warning-sign"></i> Low priority</h4>
<span class="clearfix"></span>
<table id="sample-table-1" class="table table-striped table-condensed table-hover">
<thead>
<tr>
<th>Title</th>
<th>User</th>
<th class="span3">
<i class="icon-time bigger-110"></i>
Date
</th>
</tr>
</thead>
<tbody>
 <?php $query = mysql_query("SELECT * from bugs WHERE type = '3'"); 
	  while($a=mysql_fetch_array($query)) { ?>
<tr>
<td>
<a href="viewbug.php?id=<?php echo htmlentities($a['id']); ?>"><?php echo htmlentities($a['title']); ?></a> - <?php echo htmlentities($a['text']); ?>
</td>
<?
$playerid = $a['playerid'];
?>
 <?php $query2 = mysql_query("SELECT * from playeraccounts WHERE playerID = '$playerid'"); 
	  while($a2=mysql_fetch_array($query2)) { ?>
<td><a href="cont.php?id=<?php echo htmlentities($a['playerid']); ?>"><?php echo htmlentities($a2['playerName']); ?></a></td>
<?php } ?>
<td><?php echo htmlentities($a['time']); ?></td>
</tr>
<?php } ?>
</tbody>
</table>
<h4 class="pull-left blue"><i class="icon-warning-sign"></i> Testing required</h4>
<span class="clearfix"></span>
<table id="sample-table-1" class="table table-striped table-condensed table-hover">
<thead>
<tr>
<th>Title</th>
<th>User</th>
<th class="span3">
<i class="icon-time bigger-110"></i>
Date
</th>
</tr>
</thead>
<tbody>
 <?php $query = mysql_query("SELECT * from bugs WHERE type = '4'"); 
	  while($a=mysql_fetch_array($query)) { ?>
<tr>
<td>
<a href="viewbug.php?id=<?php echo htmlentities($a['id']); ?>"><?php echo htmlentities($a['title']); ?></a> - <?php echo htmlentities($a['text']); ?>
</td>
<?
$playerid = $a['playerid'];
?>
 <?php $query2 = mysql_query("SELECT * from playeraccounts WHERE playerID = '$playerid'"); 
	  while($a2=mysql_fetch_array($query2)) { ?>
<td><a href="cont.php?id=<?php echo htmlentities($a['playerid']); ?>"><?php echo htmlentities($a2['playerName']); ?></a></td>
<?php } ?>
<td><?php echo htmlentities($a['time']); ?></td>
</tr>
<?php } ?>
</tbody>
</table>
<span class="clearfix"></span>
</div> 
</div> 
</div> 
</div> 
</div>
</div> 
</div> 