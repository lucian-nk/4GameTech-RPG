<?php
include 'includes/config.php';
include 'includes/header.php';
?>
<div class="main-content">
<div class="page-content">
<div class="row-fluid">

<h4>Administratori</h4>
<table class="table table-condensed">
<tbody>
<tr class="success">
<td>Status</td>
<td style="width: 137px;">Nume</td>
<td>Level Admin</td>
<td>Info</td>
<td>Ultima conectare</td>
</tr>
<?php $query = mysql_query('SELECT * from players WHERE AdminLevel > 0 order by AdminLevel desc'); 
	  while($dnn=mysql_fetch_array($query)) { ?>
<tr> 
<td> 
<?php if($dnn['Status']=="1") { ?><span class="badge badge-success">online</span><?php } ?>
<?php if($dnn['Status']=="2") { ?><span class="badge badge-warning">sleeping</span><?php }?>
<?php if($dnn['Status']=="0") { ?><span class="badge badge-important">offline</span><?php } ?>
</td>
<td><a href="cont.php?id=<?=$dnn['ID']?>"><font color='#1a1a1a'><?=$dnn['Name']?></a></font></td>
<td>
<?php echo htmlentities($dnn['AdminLevel']); ?>
</td>
<td>

<?php if($dnn['Name']=="NilaValorosu") { ?><span class="label label-inverse arrowed-in-right"><i class="icon-cog"></i>Scripter & fondator</span><span class="label label-purple arrowed-in-right"><i class="icon-comments white"></i> support </span><?php } ?>
<?php if($dnn['Name']=="Mojo") { ?><span class="label label-inverse arrowed-in-right"><i class="icon-cog"></i>Fondator</span> <span class="label label-purple arrowed-in-right"><?php } ?>
<?php if($dnn['Name']=="7") { ?> <span class="label label-inverse arrowed-in-right"><i class="icon-cog"></i>Manager</span><?php } ?>
<?php if($dnn['Name']=="6") { ?>  <span class="label label-yellow arrowed-in-right"><i class="icon-shield black"></i> scam complaints &amp; account security moderator</span><?php } ?>
<?php if($dnn['Name']=="5") { ?>  <span class="label label-purple arrowed-in-right"><i class="icon-comments white"></i> support </span><?php } ?>
</td>

</td>
<td><?php echo htmlentities($dnn['LastLogin']); ?></td>
</tr>
<?php } ?>

</tbody></table>

<h4>Helpers</h4>
<table class="table table-condensed">
<tbody>
<tr class="success">
<td style="width: 143px;">Status</td>
<td >Name</td>
<td>Helper level</td>
<td>Ultima conectare</td>
</tr>
<?php $query = mysql_query('SELECT * from players WHERE HelperLevel > 0 order by HelperLevel desc'); 
	  while($dnn=mysql_fetch_array($query)) { ?>
<tr> 
<td> 
<?php if($dnn['Status']=="1") { ?><span class="badge badge-success">online</span><?php } ?>
<?php if($dnn['Status']=="2") { ?><span class="badge badge-warning">sleeping</span><?php }?>
<?php if($dnn['Status']=="0") { ?><span class="badge badge-important">offline</span><?php } ?>
</td>
<td><a href="cont.php?id=<?=$dnn['playerID']?>"><font color='#1a1a1a'><?=$dnn['Name']?></a></font></td>
<td>
<?php echo htmlentities($dnn['HelperLevel']); ?>
</td>

<td><?php echo htmlentities($dnn['LastLogin']); ?></td>
</tr>
<?php } ?>

</tbody></table> 


<h4>Lideri</h4>
<table class="table table-condensed">
<tbody>
<tr class="success">
<td style="width: 143px;">Status</td>
<td>Nume</td>
<td>Lider Factiune</td>
<td>Ultima conectare</td>
</tr>
<?php $query = mysql_query('SELECT * from players WHERE Rank="7" order by Leader asc'); 
	  while($dnn=mysql_fetch_array($query)) { ?>
<tr> 
<td> 
<?php if($dnn['Status']=="1") { ?><span class="badge badge-success">online</span><?php } ?>
<?php if($dnn['Status']=="2") { ?><span class="badge badge-warning">sleeping</span><?php }?>
<?php if($dnn['Status']=="0") { ?><span class="badge badge-important">offline</span><?php } ?>
</td>
<td><a href="cont.php?id=<?=$dnn['ID']?>"><font color='#1a1a1a'><?=$dnn['Name']?></a></font></td>
<td>
<?php $member_types = array(
	'Civil',
	'Police Department',
	'F.B.I',
	'Guvern',
	'News Reporters',
	'Taxi Cab Company',
	'Tow Truck Comany',
	'Hitman Agency',
	'Grove Street',
	'Southern Pimps',
	'The Tsar Bratva',
	'Vietnamese Boys'
);
?>
<?=$member_types[$dnn['Leader']]?>
</td>
</td>
<td><?php echo htmlentities($dnn['LastLogin']); ?></td>
</tr>
<?php } ?>

</tbody></table>

<!-- do not affect this divs, or your design will fuck up -->
</div>
</div>
</div>
<!-- do not affect this divs, or your design will fuck up -->