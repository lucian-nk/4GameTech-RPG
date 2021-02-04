<?php
ini_set('display_errors',1); 
error_reporting(E_ALL);

include 'includes/config.php'; 


redirect_not_logged();
if($udata['AdminLevel'] < 1)
	die();

include 'includes/header.php';



$name = (isset($_GET['name'])) ? sec($_GET['name']) : '';
$ip = (isset($_GET['ip'])) ? sec($_GET['ip']) : '';

function v($key){
	return isset($_GET[$key]) ? htmlentities($_GET[$key]) : '';
}
?>

<center><form method="GET" action="connectlog.php">
      Nume: <input id="instyle" type="text" name="name" value="<?php echo v('name'); ?>" />
	<br />
	IP: <input id="instyle" type="text" name="ip" value="<?php echo v('ip'); ?>" />
	
	<br />
	<br />
	<input type="submit" name="sbm" value="Cauta" />
</form>
</center>
<?php
$w = '';
if(isset($_GET['name']) || isset($_GET['ip'])){
	$w = array();
	if(strlen($_GET['name']) > 0){
		$w[] = "Nume='$name'";
	}
	
	if(strlen($_GET['ip']) > 0){
		$w[] = "IP='$ip'";
	}

	if(count($w) > 0){
		$w = 'WHERE '.implode('&&', $w);
	}else
		$w = '';
}


if(!empty($w)){
	echo '<table class="table-bans">';
	echo '<tr>
		<th>Nume</th>
		<th>IP</th>
		<th>Data</th>
		<th>Tip</th>
	</tr>';

	$query = mysql_query('SELECT * FROM ConnectLog '.$w.' ORDER BY id DESC') or die(mysql_error());
	while($row = mysql_fetch_array($query, MYSQL_ASSOC)){
		echo '<tr>
			<td>'.$row['Nume'].'</td>
			<td>'.$row['IP'].'</td>
			<td>'.$row['Data'].'</td>
			<td>'.$row['Tip'].'</td>
		</tr>';
	}

	if(mysql_num_rows($query) == 0){

		echo '<tr>
			<td colspan="4">Nu exista log-uri pentru acest utilizator.</td>
		</tr>';

	}

	echo '</table>';
	
}else{

	$search = '';
	$total_rows = get_row("SELECT COUNT(id) as total FROM ConnectLog ORDER BY id DESC");
	$total_rows = $total_rows['total'];

	$rows_per_page = 20;
	$last = ceil($total_rows/$rows_per_page);
	$pagenum = isset($_GET['pagenum']) ? $_GET['pagenum'] : 0;

	if($pagenum < 1)
		$pagenum = 1;

	if($pagenum > $last)
		$pagenum = $last > 0 ? $last : 1;




	echo '<table class="table-bans">';
	echo '<tr>
		<th>Nume</th>
		<th>Ip</th>
		<th>Data</th>
		<th>Tip</th>
	</tr>';

	$query = mysql_query('SELECT * FROM ConnectLog ORDER BY id DESC LIMIT '.(($pagenum-1)*$rows_per_page).', '.$rows_per_page) or die(mysql_error());
	while($row = mysql_fetch_array($query, MYSQL_ASSOC)){
	        $n = $row['Nume'];
	        $in = $row['IP'];
		echo "<tr>
			<td><a href='?name=$n&ip=&sbm=Cauta'><font color=white>".$row['Nume']."</a></font></td>
			<td><a href='?name=&ip=$in&sbm=Cauta'>".$row['IP']."</a></td>
			<td>".$row['Data']."</td>
			<td>".$row['Tip']."</td>
		</tr>";
	}
	echo '</table>';

		echo '<div class = "pagination">';
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
echo "</div>";
}

include 'includes/footer.php';
?>