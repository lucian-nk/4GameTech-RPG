<?php
include 'includes/config.php';
error_reporting(-1);


include 'includes/header.php';
 if (!(isset($_GET['pagenum']))) 
 { 
	$pagenum = 1; 
 } 
//$pagenum = (int)$_GET['pagenum'];

 //Edit $data to be your query 

 $data = mysql_query("SELECT * FROM businesses") or die(mysql_error()); 

 $rows = mysql_num_rows($data); 

 

 //This is the number of results displayed per page 

$rows_per_page= 1000; 

 

 //This tells us the page number of our last page 

 $last = ceil($rows/$rows_per_page); 

 

 //this makes sure the page number isn't below one, or more than our maximum pages 

 if ($pagenum < 1) 

 { 

 $pagenum = 1; 

 } 

 elseif ($pagenum > $last) 

 { 

 $pagenum = $last; 

 } 

 $biz_types = array
(
	0,
	'24/7',
	'Clothing Store',
	'Bar',
	'Sex Shop',
	'None',
	'Gym',
	'Restaurant',
	'Bank',
	'CNN',
	'Gas Stations',
	'Pns',
	'Gun Shop',
	'Car Rent'
);

 //This sets the range to display in our query 

 $max = 'limit ' .($pagenum - 1) * $rows_per_page .',' .$rows_per_page; 

$h = 0;
if(isset($_GET['h'])){
	$h = (int)$_GET['h'];
}

?>

<div class="main-content">
<div class="page-content">
<div class="span12">
<div class="row-fluid">
 
<table class="table table-bordered table-condensed">
<tbody><tr class="info">
<td style="width: 1px;">ID</td>
<td>Owner</td>
<td>Price</td>
<td>Biz fee</td>
<td>Map</td>
</tr>
<?php $query = mysql_query('SELECT * FROM businesses ORDER BY businessID ASC'); 
	  while($dnn=mysql_fetch_array($query)) { ?>
<tr>
<td style="text-align:center;">
<?php echo htmlentities($dnn['businessID']); ?>
</td>

<td>
<?php echo htmlentities($dnn['businessOwner']); ?>
</td>

<?php if($dnn['businessPrice']>0) { ?><td><span class="text-success">$<?php echo htmlentities($dnn['businessPrice']); ?></span></td><?php }?>
<?php if($dnn['businessPrice']<1) { ?><td><span class="text-error">not for sale</span></td><?php }?>

<?php if($dnn['businessEnterPrice']>0) { ?><td><span class="text-info">$<?php echo htmlentities($dnn['businessEnterPrice']); ?></span></td><?php }?>
<?php if($dnn['businessEnterPrice']<1) { ?><td><span class="text-success">Free entrance</span></td><?php } ?>


<td><a href="map.php?x=<?php echo htmlentities($dnn['businessExteriorX']); ?>&y=<?php echo htmlentities($dnn['businessExteriorY']); ?>"><i class="icon-map-marker"></i> display on map</a></td>
<?php } ?>
</tr></tbody></table>
 
 
<!-- do not affect this divs, or your design will fuck up -->
</div>
</div>
</div>
</div>
<!-- do not affect this divs, or your design will fuck up -->
