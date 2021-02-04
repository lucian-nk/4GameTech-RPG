<?php
include 'includes/config.php';
redirect_not_logged();
include 'includes/header.php';
 ?>
 
<?php

$aproove = $udata['Aproove'];
?> 
<div class="main-content">
<div class="page-content">
<div class="row-fluid">
<div class="span12">



<?php if($udata['playerBanned']=="1") { ?>
<div class="pull-left control-group">
<a href="createunban.php" class="btn btn-danger">New Unban Request</a><br>	
</div>
<br>
<?php } ?>
<table id="sample-table-1" class="table table-striped table-bordered table-hover">
<thead>
<tr>
<th>Name</th>
<th>
<i class="icon-time bigger-110 hidden-480"></i>
Date
</th>

<th class="hidden-480">Status</th>
<th>
<i class="icon-search"></i>
View
</th>
</tr>
</thead>
<?php $query = mysql_query('SELECT * from unbans order by id desc'); 
	  while($dnn=mysql_fetch_array($query)) { ?>
<tbody>
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
<b><span style='color: #1a1a1a;'>Awaiting to aprooval.</span></b>
<?php } ?>
<?php if($dnn['status']=="1") { ?>
<b><span style='color: #1a1a1a;'>Closed and aprooved.</span></b>
<?php } ?>
<?php if($dnn['status']=="2") { ?>
<b><span style='color: #1a1a1a;'>Closed and rejected.</span></b>
<?php } ?>
</td>
<td>
<b><a href="viewunban.php?u=<?php echo htmlentities($dnn['id']); ?>">Click here</a></b>
</td>
</tr>

<?php } ?>
</tbody>
</table>

												
</div>
</div>									
</div>
</div>