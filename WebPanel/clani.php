<?php
include 'includes/config.php';
include 'includes/header.php';
?>
<div class="main-content">
<div class="page-content">
<div class="span11">
<div class="row-fluid">

<?php 
$c = isset($_GET['c']) ? $_GET['c'] : 1;
if($c==0)$c=1;

$membrii = mysql_query('SELECT COUNT(ID) as total FROM players WHERE CMember ='.$c);
$membrii = mysql_fetch_array($membrii);

$e = $c;
?>


<?php $query = mysql_query('SELECT * from clans where ID ='.$c); 
	  while($dnn=mysql_fetch_array($query)) { ?>

	  
<div class="page-header">
<h1>Clanul <?php echo htmlentities($dnn['Name']); ?></h1>
</div>
<div class="row-fluid">
<div class="span3">
<div class="widget-box">
<div class="widget-header widget-header-flat widget-header-small">
<h5>
<i class="icon-info"></i>
Informatii Clan
</h5>
</div>
<div class="widget-body">
<div class="widget-main">
Nume: <?php echo htmlentities($dnn['Name']); ?><br>
Tag: <?php echo htmlentities($dnn['Tag']); ?><br>
<?php } ?>
</div>
</div>
</div>
</br>
<div class="widget-box">
<div class="widget-header widget-header-flat widget-header-small">
<h5>
<i class="icon-info"></i>
Rankuri Clan
</h5>
</div>
<div class="widget-body">
<div class="widget-main">
1 - <?php echo htmlentities($dnn['clanRankName1']); ?><br>
2 - <?php echo htmlentities($dnn['clanRankName2']); ?><br>
3 - <?php echo htmlentities($dnn['clanRankName3']); ?><br>
4 - <?php echo htmlentities($dnn['clanRankName4']); ?><br>
5 - <?php echo htmlentities($dnn['clanRankName5']); ?><br>
6 - <?php echo htmlentities($dnn['clanRankName6']); ?><br>
7 - <?php echo htmlentities($dnn['clanRankName7']); ?><br>
</div>
</div>
</div>
</div>
<div class="span6">
<div class="widget-box">
<div class="widget-header widget-header-flat widget-header-small">
<h5>
<i class="icon-user green"></i>
Membri clan
</h5>
</div>
<div class="widget-body">
<div class="widget-main">
<ul>
<?php $query = mysql_query('SELECT * from players WHERE CMember ='.$e); 
	  while($dnn=mysql_fetch_array($query)) { ?>
<?php if($dnn['Status']=="1") { ?><li><a href="cont.php?id=<?=$dnn['ID']?>"><?=$dnn['Name']?></a>            -            rank <?=$dnn['CRank']?> - online<?php } ?>
<?php if($dnn['Status']=="2") { ?><li><a href="cont.php?id=<?=$dnn['ID']?>"><?=$dnn['Name']?></a>            -            rank <?=$dnn['CRank']?> - sleeping<?php } ?>
<?php if($dnn['Status']=="0") { ?><li><a href="cont.php?id=<?=$dnn['ID']?>"><?=$dnn['Name']?></a>            -            rank <?=$dnn['CRank']?> - offline<?php } ?>
<?php } ?>
</ul>
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

























<!-- do not affect this divs, or your design will fuck up -->
</div>
</div>
</div>
</div>
<!-- do not affect this divs, or your design will fuck up -->