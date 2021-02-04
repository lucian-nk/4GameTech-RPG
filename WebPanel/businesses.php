<?php
include 'includes/config.php';
redirect_not_logged();
error_reporting();

$rows_per_page = 20;


if(isset($_POST['get_player_rank'])){
	if(empty($_POST['get_player_rank'])){
		echo '<font size="2">The field is empty</font>';
	}else{
		$z=sec($_POST['get_player_rank']);
		$a=mysql_query("SELECT id FROM banuri WHERE Nume='$z'") or die(mysql_error());
		if(mysql_num_rows($a) > 0){
			echo '<font size="2">'.htmlentities($_POST['get_player_rank']).' is a banned account</font>';
		}else{
			// ca mai es chiu elu stie doar de un chiueri pe rand..f**ul in gura de zdreanta
			mysql_query('SET @rownum := 0;');

			// siacu ne facem damblaua
			$a = get_row("
				SELECT rank, PlayerLevel, id FROM 
				(
					SELECT @rownum := @rownum +1 AS rank, PlayerLevel, Name, id
					FROM players ORDER BY PlayerLevel DESC, Respect DESC, Name ASC
				) as result WHERE Name='$z'
			");
			if(isset($a['rank'])){
				$to_page = ceil($a['rank'] / $rows_per_page);
				echo '<font size="2">'.htmlentities($_POST['get_player_rank']).' e pe locul '.($a['rank']).'</font>';
				
				if($a['PlayerLevel'] >= 3){
					echo ' <font size="2">[<a href="top.php?p='.$to_page.'&h='.$a['id'].'">detalii</a>]</font>';
				}else{
					echo ' <font size="2">[detalii doar peste level 3]</font>';
				}
			}else{
				echo '<font size="2">Nickname invalid</font>';
			}
		}
	}
	die();
}

include 'includes/header.php';
$search = isset($_GET['search']) ? sec($_GET['search']) : '';
$clean_search = isset($_GET['search']) ? stripslashes($_GET['search']) : '';


$s = '';
if(!empty($search)){
	$s = "Name='$search' &&";
}

$total_rows = get_row("SELECT COUNT(id) as total FROM players WHERE $s PlayerLevel >= 3");
$total_rows = $total_rows['total'];

$total_pages = ceil($total_rows/$rows_per_page);
$page = isset($_GET['p']) ? $_GET['p'] : 0;

if($page < 1)
	$page = 1;

if($page > $total_pages)
	$page = $total_pages > 0 ? $total_pages : 1;



$h = 0;
if(isset($_GET['h'])){
	$h = (int)$_GET['h'];
}

?>
<div class="search-box">
	Cauta:
	<input type="hidden" id="cpage" value="<?=$page?>" />
	<input type="text" id="input-search" value="<?=$clean_search?>" />
	<input type="submit" value="Search" id="search-btn" />
	<div class="result"></div>
</div>
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

<div class="pagination">
	<?php
	if($total_pages > 1){
		if($page <= 4){
			for($i=1;$i<=$page+2;$i++){
				if($i < $total_pages){
					echo '<a href="'.mklink($i, $search).'">'.$i.'</a>';
				}
			}
			if($total_pages > 3){
				echo '...';
				echo '<a href="'.mklink($total_pages, $search).'">'.$total_pages.'</a>';
			}
		}else if($total_pages - 2 > $page){
			echo '<a href="'.mklink(1, $search).'">1</a>';
			echo '...';
			for($i=$page-1;$i<=$page+2;$i++){
				echo '<a href="'.mklink($i, $search).'">'.$i.'</a>';
			}
			echo '...';
			echo '<a href="'.mklink($total_pages, $search).'">'.$total_pages.'</a>';
		}else{
			echo '<a href="?p=1">1</a>';
			echo '...';
			for($i=$page-1;$i<$total_pages;$i++){
				echo '<a href="'.mklink($i, $search).'">'.$i.'</a>';
			}
			echo '<a href="'.mklink($total_pages, $search).'">'.$total_pages.'</a>';
		}
	}
	?>
</div>

<table class="table-bans">
<tr>
		<th>#</th>
                <th>Name</th>
		<th>Level</th>
		<th>Respect</th>
		<th>Hours On</th>
		<th>Faction</th>
		<th>Rank</th>
                <th>Job</th>
		<th>Warn(s)</th>
		
</tr>
<?php
function get_member_type($l, $m){
	global $member_types;
	
	
	if($l > 0){
		$x = $member_types[$l];
	}else{
		$x = $member_types[$m];
	}

	if($l > 0){
		$x .= '(Leader)';
	}
	
	return $x;

}
       	$NUMARUCAREESTE = (($page-1)*$rows_per_page);
	$NUMARUCAREESTE++;
	$query = mysql_query("SELECT * FROM players WHERE $s PlayerLevel >= 3 ORDER BY PlayerLevel DESC, Respect DESC, Name ASC LIMIT ".(($page-1)*$rows_per_page).', '.$rows_per_page);
	while($row = mysql_fetch_array($query)):
$job = $row['Job'];


?>
		<tr <?php if($h == $row['id']) echo 'class="highlight"'; ?>>
			<td><?php echo $NUMARUCAREESTE++; ?></td>
			<td><?=$row['Name']?> <?=$status1_types[$row['Status']]?></td>
			<td><?=$row['PlayerLevel']?></td>
			<td><?=$row['Respect']?>/<?=$row['PlayerLevel']*3 + 3?></td>
			<td><?=$row['ConnectedTime']?></td>
               <td><?php echo get_member_type($row['Leader'], $row['Member']); ?></td>
			<td><?=$row['Rank']?></td>
  <?php if($job == 1) { echo '<td>Detectiv</td>'; }
        else if($job == 2) { echo '<td>Avocat</td>'; }
        else if($job == 3) { echo '<td>Prostituata</td>'; }
        else if($job == 4) { echo '<td>Dealer de Droguri</td>'; }
        else if($job == 5) { echo '<td>Spargator de masini</td>'; }
        else if($job == 6) { echo '<td>Reporter TV</td>'; }
        else if($job == 7) { echo '<td>Mecanic</td>'; }
        else if($job == 8) { echo '<td>Bodyguard</td>'; }
        else if($job == 9) { echo '<td>Dealer de Arme</td>'; }
        else if($job == 10) { echo '<td>Dealer de Masini</td>'; }
	else if($job == 12) { echo '<td>Boxer</td>'; }
        else if($job == 15) { echo '<td>Vanzator de Ziare</td>'; }
        else if($job == 16) { echo '<td>Camionagiu</td>';}
        else if($job == 17) { echo '<td>Fermier</td>'; }
        else if($job == 18) { echo '<td>Gunoier</td>'; }
        else if($job == 20) { echo '<td>Maturator</td>'; }
        else if($job == 21) { echo '<td>Maturator de Strada</td>'; }
        else { echo '<td>None</td>'; }	?>		

<td><?=$row['Warnings']?></td>

		</tr>
	<?php endwhile; ?>
	
	<?php
	if(mysql_num_rows($query) == 0)
		echo '<tr><td colspan="9"><em>No results...</em></td></tr>';
	?>
</table>

<div class="pagination">
	<?php
	if($total_pages > 1){
		if($page <= 4){
			for($i=1;$i<=$page+2;$i++){
				if($i < $total_pages){
					echo '<a href="'.mklink($i, $search).'">'.$i.'</a>';
				}
			}
			if($total_pages > 3){
				echo '...';
				echo '<a href="'.mklink($total_pages, $search).'">'.$total_pages.'</a>';
			}
		}else if($total_pages - 2 > $page){
			echo '<a href="'.mklink(1, $search).'">1</a>';
			echo '...';
			for($i=$page-1;$i<=$page+2;$i++){
				echo '<a href="'.mklink($i, $search).'">'.$i.'</a>';
			}
			echo '...';
			echo '<a href="'.mklink($total_pages, $search).'">'.$total_pages.'</a>';
		}else{
			echo '<a href="?p=1">1</a>';
			echo '...';
			for($i=$page-1;$i<$total_pages;$i++){
				echo '<a href="'.mklink($i, $search).'">'.$i.'</a>';
			}
			echo '<a href="'.mklink($total_pages, $search).'">'.$total_pages.'</a>';
		}
	}
	?>
		
</table>
</div>


<?php include 'includes/footer.php'; ?>