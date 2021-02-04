<?php
include 'includes/config.php';

include 'includes/header.php';


$tmp = array();
foreach($member_types as $id => $member){
	if($id > 0){
		$tmp[] = '<a class="active" href="logs.php?f='.$id.'">'.$member.'</a>';
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
else if($f > 17)$f=1;
else if($f < 0)$f=1;

?>
							
<div class="tab-content">

											
<h4><?php echo $member_types[$f]; ?></h4>

	<table class="table info">

		<?php
		$query = mysql_query("SELECT * FROM flogs WHERE faction ='$f' order by id desc");
		while($row = mysql_fetch_array($query)):
		?>
		<tr>
			<td><?=$row['time']?></td>
			<td><?=$row['text']?></td>
		</tr>

       <?php endwhile; ?>
	</table>
</div>
</div>
</div>
</div>
</div>
</div>
