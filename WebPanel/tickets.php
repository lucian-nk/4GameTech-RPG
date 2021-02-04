<?php
include 'includes/config.php';
redirect_not_logged();
include 'includes/header.php';
 ?>
<?php
$id = $udata['ID'];
?>
<div class="main-content">
<div class="page-content">
<div class="row-fluid">
<div class="span12">



<div class="pull-left control-group">
<a href="newticket.php" class="btn btn-danger">Creeaza Tichet</a><br>	
</div>
<br>
<table id="sample-table-1" class="table table-striped table-bordered table-hover">
<thead>
<tr>
<th>Titlu</th>
<th>
<i class="icon-time bigger-110 hidden-480"></i>
Data
</th>

<th class="hidden-480">Status</th>
<th>
<i class="icon-search"></i>
Vezi
</th>
</tr>
</thead>
<tbody>


<?php if($udata['AdminLevel']>= 1) { ?>

<?php $query = mysql_query('SELECT * from tickets order by id desc'); 
	  while($dnn=mysql_fetch_array($query)) { ?>
	  
	  
<tr>

<td>
<b><?php echo htmlentities($dnn['name']); ?></b>
</td>
<td>
<b><?php echo htmlentities($dnn['time']); ?></b>
</td>
</td>
<td>
<?php if($dnn['status']=="0") { ?>
<b><span style='color: #1a1a1a;'>Deschis.</span></b>
<?php } ?>
<?php if($dnn['status']=="1") { ?>
<b><span style='color: #1a1a1a;'>Inchis.</span></b>
<?php } ?>
</td>
<td>
<b><a href="viewticket.php?t=<?php echo htmlentities($dnn['id']); ?>">Click</a></b>
</td>

</tr>
<?php } ?>
<?php } ?>

<?php if($udata['AdminLevel']== 0) { ?>	  
<tr>
<?php $query = mysql_query("SELECT * from tickets WHERE ID = '$id' order by id desc"); 
	  while($dnn=mysql_fetch_array($query)) { ?>
<td>
<b><?php echo htmlentities($dnn['name']); ?></b>
</td>
<td>
<b><?php echo htmlentities($dnn['time']); ?></b>
</td>
</td>
<td>
<?php if($dnn['status']=="0") { ?>
<b><span style='color: #1a1a1a;'>Deschis.</span></b>
<?php } ?>
<?php if($dnn['status']=="1") { ?>
<b><span style='color: #1a1a1a;'>Inchis.</span></b>
<?php } ?>
</td>
<td>
<b><a href="viewticket.php?t=<?php echo htmlentities($dnn['id']); ?>">Click</a></b>
</td>

</tr>
<?php } ?>
<?php } ?>


</tbody>
</table>

												
</div>
</div>									
</div>
</div>