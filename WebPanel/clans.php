<?php
include 'includes/config.php';
include 'includes/header.php';
?>

<div class="main-content">
<div class="page-content">
<div class="span11">
<div class="row-fluid">


									<ul class="nav nav-tabs" id="myTab4">
											<li>
												<a style="display:none;" data-toggle="tab" href="#home4"><?php echo implode($tmp); ?></a>
											</li>

										</ul>
<?php 
$c = isset($_GET['c']) ? $_GET['c'] : 1;
if($c==0)$c=1;

?>




<div class="tab-content">
																				
									
											<div id="home4" class="tab-pane">
										<?php $query = mysql_query("SELECT * FROM players WHERE playerClan ='$c' ORDER BY CRank DESC"); 		while($row = mysql_fetch_array($query)):
		?>
	
		<tr>
			<td height="10px" width="100px"><div align="center"><b><font size="2"><a href="cont.php?id=<?=$row['playerID']?>"><font color='#1a1a1a'><?=$row['Name']?></a></font></font></b></div></td>
			<td><div align="center"><b><font size="2">Rank: <?=$row['CRank']?></font></b></div></td>
			<td><div align="center"><b><font size="2">Last login: <?=$row['LastLogin']?></font></b></div></td>
		</tr>
	
       <?php endwhile; ?>
											</div>

		<?php
		$samp = mysql_query("SELECT * FROM clans WHERE clanID = '$c'");
		while($aaa = mysql_fetch_array($samp)):
		?>

				
<h4><?php echo $aaa['clanName']; ?></h4>
       <?php endwhile; ?>
	<table class="table table-condensed">
	<thead>
	<tr style="background: none;border-top: 1px solid #DADADA;">
	<th style="font-weight: lighter;
color: #000; line-height: 31px;"> Name</th>
	<th style="font-weight: lighter;
color: #000; line-height: 31px;"> Rank</th>
	<th style="font-weight: lighter;
color: #000; line-height: 31px;"> Last Login </th>
	</tr>
	</thead>

		<?php
		$query = mysql_query("SELECT * FROM playeraccounts WHERE playerClan ='$c' ORDER BY playerClanRank DESC");
		while($row = mysql_fetch_array($query)):
		?>
		<tbody>
		<tr>
			<td style="line-height: 31px;"><a href="cont.php?id=<?=$row['playerID']?>"><?=$row['playerName']?></a></td>
			<td><?=$row['playerClanRank']?></td>
			<td><?=$row['playerLastLogin']?></td>
		</tr>
		</tbody>

       <?php endwhile; ?>
	</table>

<?php
$x = mysql_query('SELECT COUNT(playerID) as total FROM playeraccounts WHERE playerClan='.$c);
$x = mysql_fetch_array($x);
?>
<br />
<span class="text-inverse">Total members: <b><?php echo $x['total']; ?></b>
</div>
</div>
</div>

<!-- do not affect this divs, or your design will fuck up -->
</div>
</div>
</div>
</div>
<!-- do not affect this divs, or your design will fuck up -->