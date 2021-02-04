<?php
include 'includes/config.php';
error_reporting();

$rows_per_page = 20;


if(isset($_POST['get_player_rank'])){
	if(empty($_POST['get_player_rank'])){
		echo '<font size="2">The field is empty</font>';
	}else{
		$z=sec($_POST['get_player_rank']);
		$a=mysql_query("SELECT ID FROM bans WHERE Name='$z'") or die(mysql_error());
		if(mysql_num_rows($a) > 0){
			echo '<font size="2">'.htmlentities($_POST['get_player_rank']).' este un cont banat</font>';
		}else{
			mysql_query('SET @rownum := 0;');

			$a = get_row("
				SELECT Rank, Level, ID FROM 
				(
					SELECT @rownum := @rownum +1 AS Rank, Level, Name, ID
					FROM players ORDER BY Level DESC, Age DESC, Name ASC
				) as result WHERE Name='$z'
			");
			if(isset($a['Rank'])){
				$to_page = ceil($a['Rank'] / $rows_per_page);
				echo '<font size="2">'.htmlentities($_POST['get_player_rank']).' este pe locul '.($a['Rank']).'</font>';
				
				if($a['Level'] >= 3){
					echo ' <font size="2">[<a href="top.php?pagenum='.$to_page.'&h='.$a['id'].'">detalii</a>]</font>';
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

$total_rows = get_row("SELECT COUNT(ID) as total FROM players WHERE $s Level >= 3");
$total_rows = $total_rows['total'];

$rows_per_page = 20;
	$last = ceil($total_rows/$rows_per_page);
	$pagenum = isset($_GET['pagenum']) ? $_GET['pagenum'] : 0;

	if($pagenum < 1)
		$pagenum = 1;

	if($pagenum > $last)
		$pagenum = $last > 0 ? $last : 1;


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

<div class="main-content">
<div class="page-content">
<div class="span12">
<div class="row-fluid">
 
<h2>Top jucatori</h2>
<table class="table table-hover">
<tbody><tr class="info table-bordered">
<td>Nume</td>
<td>Level</td>
<td>Ore jucate</td>
<td>Puncte de respect</td>
</tr>
<?php $query = mysql_query("SELECT * FROM players WHERE Level >= 2 ORDER BY HoursPlayed DESC LIMIT 100");
	  while($dnn=mysql_fetch_array($query)) { ?>
<tr>
<td><a href="cont.php?id=<?=$dnn['ID']?>"><font color='#1a1a1a'><?=$dnn['Name']?></a></font></td>
<td><?php echo htmlentities($dnn['Level']); ?></td>
<td><?php echo htmlentities($dnn['HoursPlayed']); ?></td>
<td><?php echo htmlentities($dnn['Age']); ?></td><td>
</td></tr><tr>
</tr><tr>
</td></tr><tr>
</tr><tr>
</td></tr><tr>

<?php } ?>
</tr></tbody></table>
  
<!-- do not affect this divs, or your design will fuck up -->
</div>
</div>
</div>
</div>
<!-- do not affect this divs, or your design will fuck up -->
