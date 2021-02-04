<?php
include 'includes/config.php';

include 'includes/header.php';


$tmp = array();
foreach($member_types as $id => $member){
	if($id > 0){
		$tmp[] = '<a class="active" href="members.php?f='.$id.'">'.$member.'</a>';
	}
} ?>

<div class="main-content">
<div class="page-content">
<div class="row-fluid">
<div class="span12">
<div class="tabbable tabs-right">
										<ul class="nav nav-tabs" id="myTab4">
											<li>
												<a style="display:none;" data-toggle="tab" href="#home4"><?php echo implode($tmp); ?></a>
											</li>

										</ul>


<?php 
$f = isset($_GET['f']) ? $_GET['f'] : 1;
if($f==0)$f=1;
else if($f > 11)$f=1;
else if($f < 0)$f=1;

?>
							
										<div class="tab-content">
																				
									
											<div id="home4" class="tab-pane">
										<?php $query = mysql_query("SELECT * FROM players WHERE Member ='$f' ORDER BY Rank DESC"); 		while($row = mysql_fetch_array($query)):
		?>
	
		<tr>
			<td height="10px" width="100px"><div align="center"><b><font size="2"><a href="cont.php?id=<?=$row['ID']?>"><font color='#1a1a1a'><?=$row['Name']?></a></font></font></b></div></td>
			<td><div align="center"><b><font size="2">Rank: <?=$row['Rank']?></font></b></div></td>
			<td><div align="center"><b><font size="2">Avertizari: <?=$row['FWarns']?>/3</font></b></div></td>
			<td><div align="center"><b><font size="2">Ultima conectare: <?=$row['LastLogin']?></font></b></div></td>
		</tr>
	
       <?php endwhile; ?>
											</div>

											
<h4><?php echo $member_types[$f]; ?></h4>

	<table class="table table-condensed">
	<thead>
	<tr style="background: none;border-top: 1px solid #DADADA;">
	<th style="font-weight: lighter;
color: #000; line-height: 31px;"> Membri</th>
	<th style="font-weight: lighter;
color: #000; line-height: 31px;"> Rank</th>
	<th style="font-weight: lighter;
color: #000; line-height: 31px;"> Avertizari </th>
	<th style="font-weight: lighter;
color: #000; line-height: 31px;"> Ultima conectare </th>
	</tr>
	</thead>

		<?php
		$query = mysql_query("SELECT * FROM players WHERE Member ='$f' ORDER BY Rank DESC");
		while($row = mysql_fetch_array($query)):
		?>
		<tbody>
		<tr>
			<td style="line-height: 31px;"><a href="cont.php?id=<?=$row['ID']?>"><?=$row['Name']?></a></td>
			<td><?=$row['Rank']?></td>
			<td><?=$row['FWarns']?>/3</td>
			<td><?=$row['LastLogin']?></td>
		</tr>
		</tbody>

       <?php endwhile; ?>
	</table>

<?php
$x = mysql_query('SELECT COUNT(ID) as total FROM players WHERE Member='.$f);
$x = mysql_fetch_array($x);
?>
<br />
<span class="text-inverse">Totalul membrilor ce apartin acestei factiuni: <b><?php echo $x['total']; ?></b>
</div>
</div>
</div>
