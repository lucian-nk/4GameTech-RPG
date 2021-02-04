<?php
include 'includes/config.php';
include 'includes/header.php';

$lspd = mysql_query('SELECT COUNT(ID) as total FROM players WHERE Member = 1');
$lspd = mysql_fetch_array($lspd);

$fbi = mysql_query('SELECT COUNT(ID) as total FROM players WHERE Member = 2');
$fbi = mysql_fetch_array($fbi);

$ng = mysql_query('SELECT COUNT(ID) as total FROM players WHERE Member = 3');
$ng = mysql_fetch_array($ng);

$para = mysql_query('SELECT COUNT(ID) as total FROM players WHERE Member = 4');
$para = mysql_fetch_array($para);

$lvpd = mysql_query('SELECT COUNT(ID) as total FROM players WHERE Member = 5');
$lvpd = mysql_fetch_array($lvpd);

$rus = mysql_query('SELECT COUNT(ID) as total FROM players WHERE Member = 6');
$rus = mysql_fetch_array($rus);

$grove = mysql_query('SELECT COUNT(ID) as total FROM players WHERE Member = 7');
$grove = mysql_fetch_array($grove);

$aztec = mysql_query('SELECT COUNT(ID) as total FROM players WHERE Member = 8');
$aztec = mysql_fetch_array($aztec);

$rifa = mysql_query('SELECT COUNT(ID) as total FROM players WHERE Member = 9');
$rifa = mysql_fetch_array($rifa);

$balas = mysql_query('SELECT COUNT(ID) as total FROM players WHERE Member = 10');
$balas = mysql_fetch_array($balas);

$vagos = mysql_query('SELECT COUNT(ID) as total FROM players WHERE Member = 11');
$vagos = mysql_fetch_array($vagos);

?>

<div class="main-content">
<div class="page-content">
<div class="row-fluid">
 
<div class="page-header">
<h1>Lista factiuni</h1>
</div>
<table class="table table-striped table-bordered">
<thead>
<tr>
<th class="center">ID</th>
<th>Nume</th>
<th class="hidden-480">Membri</th>
<th class="hidden-480">Optiuni</th>
<th class="hidden-100">Status aplicari</th>
<th class="center">Nivel minim</th>
</tr>
</thead>
<?php $query = mysql_query('SELECT * from groups order by groupID asc'); 
	  while($dnn=mysql_fetch_array($query)) { ?>
<tbody>
<tr>
<td class="center"><?php echo htmlentities($dnn['groupID']); ?></td>
<td>
<?php echo htmlentities($dnn['groupName']); ?>
</td>
<td class="hidden-480">
<?php if($dnn['groupID']=="1") { ?> <?=$lspd['total']?> <?php } ?> 
<?php if($dnn['groupID']=="2") { ?> <?=$fbi['total']?> <?php } ?>
<?php if($dnn['groupID']=="3") { ?> <?=$ng['total']?> <?php } ?> 
<?php if($dnn['groupID']=="4") { ?> <?=$para['total']?> <?php } ?> 
<?php if($dnn['groupID']=="5") { ?> <?=$lvpd['total']?> <?php } ?>
<?php if($dnn['groupID']=="6") { ?> <?=$rus['total']?> <?php } ?> 
<?php if($dnn['groupID']=="7") { ?> <?=$grove['total']?> <?php } ?> 
<?php if($dnn['groupID']=="8") { ?> <?=$aztec['total']?> <?php } ?> 
<?php if($dnn['groupID']=="9") { ?> <?=$rifa['total']?> <?php } ?>
<?php if($dnn['groupID']=="10") { ?> <?=$balas['total']?> <?php } ?> 
<?php if($dnn['groupID']=="11") { ?> <?=$vagos['total']?> <?php } ?> 

 / <?php echo htmlentities($dnn['groupSlots']); ?>
</td>
<td>
<a href="members.php?f=<?php echo htmlentities($dnn['groupID']); ?>">Membri</a> / <a href="logs.php?f=<?php echo htmlentities($dnn['groupID']); ?>">Loguri</a> / <a href="aplications.php?f=<?php echo htmlentities($dnn['groupID']); ?>">Aplicari</a> / <a href="fcomplaints.php?f=<?php echo htmlentities($dnn['groupID']); ?>">Reclamatii</a>
</td>
<td>

<?php if($dnn['groupAplication']=="1"){ ?>

<a href="apply.php?f=<?php echo htmlentities($dnn['groupID']); ?>"><button class="btn btn-small btn-success">Aplica!</button></a>

<?php } ?>

<?php if($dnn['groupAplication']=="0") { ?>

<span class="text-error">Aplicari inchise</span>


<?php } ?>




</td>
<td>
<center><?php echo htmlentities($dnn['levelminim']); ?><center>
</td>
</tr>
<?php } ?>
</tbody>
</table>
 
 



<!-- do not affect this divs, or your design will fuck up -->
</div>
</div>
</div>
<!-- do not affect this divs, or your design will fuck up -->