<?php
include 'includes/config.php';
include 'includes/header.php';
?>
<div class="main-content">
<div class="page-content">
<div class="row-fluid">

<table class="table table-condensed">
<tbody>
<tr class="success">
<td style="width: 137px;">Nume</td>
<td>Data</td>
<td>Ora</td>
<td>Motiv</td>
<td>Sanctionat de</td>
</tr>

<?php $query = mysql_query('SELECT * from bans order by ID desc');
	while($dnn=mysql_fetch_array($query)) { ?>
<tr>
<?php $n = $dnn['Name']; $row2=get_row("SELECT * FROM players WHERE Name = '$n'"); ?>
<td><a href="cont.php?id=<?=$row2['ID']?>"><font color='#1a1a1a'><?=$dnn['Name']?></a></font></td>
<td>
<?php echo htmlentities($dnn['BanD']); ?>/<?php echo htmlentities($dnn['BanM']); ?>/<?php echo htmlentities($dnn['BanY']); ?>
</td>
<td>
<?php echo htmlentities($dnn['BanH']); ?>:00
</td>
<td>
<?php echo htmlentities($dnn['Reason']); ?>

</td>

</td>
<td><?php echo htmlentities($dnn['Admin']); ?></td>
</tr>
<?php } ?>

</tbody></table>
<!-- do not affect this divs, or your design will fuck up -->
</div>
</div>
</div>
<!-- do not affect this divs, or your design will fuck up -->