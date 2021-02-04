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

 $data = mysql_query("SELECT * FROM houses") or die(mysql_error()); 

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
<td>Detinator</td>
<td>Pret</td>
<td>Map</td>
</tr>
<?php $query = mysql_query('SELECT * FROM houses ORDER BY ID ASC'); 
	  while($dnn=mysql_fetch_array($query)) { ?>
<tr>
<td style="text-align:center;">
<?php echo htmlentities($dnn['ID']); ?>
</td>

<td>
<?php echo htmlentities($dnn['Owner']); ?>
</td>

<?php if($dnn['Owned']<1) { ?><td><span class="text-success">$<?php echo htmlentities($dnn['Value']); ?></span></td><?php }?>
<?php if($dnn['Owned']>0) { ?><td><span class="text-error">nu este de vanzare</span></td><?php }?>


<td><a href="map.php?x=<?php echo htmlentities($dnn['EntranceX']); ?>&y=<?php echo htmlentities($dnn['EntranceY']); ?>"><i class="icon-map-marker"></i> vezi pe mapa</a></td>
<?php } ?>
</tr></tbody></table>
 
 
</div>
</div>
</div>
</div>