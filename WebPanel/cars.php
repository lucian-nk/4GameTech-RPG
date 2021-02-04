<?php
include 'includes/config.php';
redirect_not_logged();
error_reporting();

include 'includes/header.php';


if (!(isset($_GET['pagenum']))) 

 { 

 $pagenum = 1; 

 } 

 
$pagenum = (int)$_GET['pagenum'];
 //Here we count the number of results 

 //Edit $data to be your query 

 $data = mysql_query("SELECT *  FROM vehicles WHERE Value > 2 && Own > 0") or die(mysql_error()); 

 $rows = mysql_num_rows($data); 

 

 //This is the number of results displayed per page 

$rows_per_page= 20; 

 

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

if(isset($_GET['own']) && $udata['AdminLevel'] == 7){
	$id = (int)$_GET['own'];
	$query = mysql_query('SELECT Own FROM vehicles WHERE id='.$id) or die(mysql_error());
	$data = mysql_fetch_array($query, MYSQL_ASSOC);

	if($data['Own'] == 1){
		$type = 0;
	}else{
		$type = 1;
	}

	mysql_query('UPDATE vehicles SET Own='.$type.' WHERE id='.$id);
}
$h = 0;
if(isset($_GET['h'])){
	$h = (int)$_GET['h'];
}

?>
<script type="text/javascript">
function take_Search(){
	$.post('top.php', {get_player_rank:$('#input-search').val()}, function(data){
		$('.search-box .result').html(data);
	});
}
$(document).ready(function(){
	$('#search-btn').click(function(){
		take_Search();

		return false;
	});
	$('#input-search').keyup(function(e){
		if(e.keyCode == 13){
			take_Search();
		}
	});
});
/*
function dosearch(){
	var is = $('#input-search');
	if(is.val().length > 0){
		window.location.href = '?search='+is.val();
	}else{
		alert('Completeaza numele pe care vrei sa il cauti');
	}	}
$('#search-btn').click(function(){
	dosearch();
});
$('#input-search').keyup(function(e){
	if(e.keyCode == 13)
		dosearch();
});
*/
</script>


<table class="table-bans">
<tr>
		<th>#</th>
		<?php if($udata['AdminLevel'] >= 5): ?>
         <th>ID</th>
		 <?php endif; ?>
		<th>Owner</th>
		<th>Description</th>
		<th>License</th>
		<th>KM</th>
        <th>Value</th>
		<?php if($udata['AdminLevel'] >= 5): ?>
		<th>Own</th>
                  <?php endif; ?>
		
</tr>
<?php

       	$NUMARUCAREESTE = (($pagenum-1)*$rows_per_page);
	$NUMARUCAREESTE++;
	$query = mysql_query("SELECT * FROM vehicles WHERE Value > 2 && Own > 0 ORDER BY KM DESC LIMIT ".(($pagenum-1)*$rows_per_page).', '.$rows_per_page);
	while($row = mysql_fetch_array($query)):

?>
		<tr <?php if($h == $row['id']) echo 'class="highlight"'; ?>>
			<td><?php echo $NUMARUCAREESTE++; ?></td>
			<?php if($udata['AdminLevel'] >= 5): ?>
			<td><?=$row['id']?> </td>
			<?php endif; ?>
			<?php $n = $row['Owner']; $row2=get_row("SELECT * FROM players WHERE Name = '$n'"); ?>
			<td><a href="cont.php?id=<?=$row2['id']?>"><font color='#FFFFFF'><?=$row['Owner']?></a></font></td>
			<td><?=$row['Description']?></td>
			<td><?=$row['Num']?></td>
			<td><?=$row['KM']?></td>
			<td><?=number_format($row['Value']);?></td>	
			<?php if($udata['AdminLevel'] == 7): ?>
			<td><a href="?own=<?=$row['id']?>"><?php echo $row['Own']; ?></td>
                         <?php endif; ?>

		</tr>
	<?php endwhile; ?>
	
	<?php
	if(mysql_num_rows($query) == 0)
		echo '<tr><td colspan="9"><em>No results...</em></td></tr>';
	?>
</table>

<div class = "pagination">
<?php
 if ($pagenum > 0) {
   // show << link to go back to page 1
   echo " <a href='{$_SERVER['PHP_SELF']}?pagenum=1'><<</a> ";
   // get previous page num
   $prevpage = $pagenum - 1;
   // show < link to go back to 1 page
   echo " <a href='{$_SERVER['PHP_SELF']}?pagenum=$prevpage'><</a> ";
} // end if
$range = 3;
// loop to show links to range of pages around current page
for ($x = ($pagenum - $range); $x < (($pagenum + $range)  + 1); $x++) {
   // if it's a valid page number...
   if (($x > 0) && ($x <= $last)) {
      // if we're on current page...
      if ($x == $pagenum) {
         // 'highlight' it but don't make a link
         echo " <a href='{$_SERVER['PHP_SELF']}?pagenum=$x'><b>$x</b></a> ";
      // if not current page...
      } else {
         // make it a link
         echo " <a href='{$_SERVER['PHP_SELF']}?pagenum=$x'>$x</a> ";
      } // end else
   } // end if 
} // end for
if ($pagenum != $last) {
   // get next page
   $nextpage = $pagenum + 1;
    // echo forward link for next page 
   echo " <a href='{$_SERVER['PHP_SELF']}?pagenum=$nextpage'>></a> ";
   // echo forward link for lastpage
   echo " <a href='{$_SERVER['PHP_SELF']}?pagenum=$last'>>></a> ";
} // end if
?>   
</div>


<?php include 'includes/footer.php'; ?>