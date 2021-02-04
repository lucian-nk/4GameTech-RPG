<?php
include 'includes/config.php';
redirect_not_logged();
include 'includes/header.php';



$f = isset($_GET['f']) ? $_GET['f'] : 1;
if($f==0)$f=1;


?>
 
 
<div class="main-content">

<div class="page-content">
<div class="row-fluid">
<div class="span13">

<div class="col-xs-12 center">
<div class="table-responsive" style="margin-left: 30px">

<table id="sample-table-1" class="table table-striped table-bordered table-hover">
<thead>
<tr>
<th>Title</th>
<th>Created By</th>
<th>
<i class="icon-time bigger-110 hidden-480"></i>
Date
</th>
<th class="hidden-480">Status</th>
</tr>
</thead>
<?php $query = mysql_query("SELECT * from complaints WHERE factionid  = '$f' order by id desc"); 
	  while($dnn=mysql_fetch_array($query)) { ?>
<tbody>
<tr>
<td>
<?php

$idplayer = $dnn['againstid'];
?>
<?php $query3 = mysql_query("SELECT * from playeraccounts WHERE playerID = '$idplayer'"); 
	  while($row2=mysql_fetch_array($query3)) { ?>
	  

<a href="viewcomplaint.php?co=<?php echo htmlentities($dnn['id']); ?>"><?php echo htmlentities($row2['playerName']); ?> - <?php echo htmlentities($dnn['motiv']); ?> </a>


</td>

<?php } ?>

<td>

<?php

$playerid = $dnn['creatorid'];
?>
<?php $query2 = mysql_query("SELECT * from playeraccounts WHERE playerID = '$playerid'"); 
	  while($row=mysql_fetch_array($query2)) { ?>
	  
<?php echo htmlentities($row['playerName']); ?>



</td>

<?php } ?>
<td><?php echo htmlentities($dnn['time']); ?></td>
<td>
<?php if($dnn['status']=="0") { ?>
Open.
<?php } ?>
<?php if($dnn['status']=="1") { ?>
Closed.
<?php } ?>
</td>

</tr
</tbody>
<?php } ?>
</table>
</div> 
</div> 
</div> 
 
</div> 
</div> 
 
</div>
