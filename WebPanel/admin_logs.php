<?php
include 'includes/config.php';

include 'includes/header.php';

if($udata['AdminLevel'] <= 5)
	die();

?>
<div class="main-content">
<div class="page-content">
<div class="span11">
<div class="row-fluid">


<div class="widget-box ">
<div class="widget-header widget-header-flat widget-header-small">
<h4 class="lighter smaller">
<i class="icon-rss red"></i>
Ultimele actiuni ale administratorilor
</h4>
</div>
<div class="widget-body">
<div class="widget-main no-padding">
<div class="dialogs">


<?php $q = mysql_query('SELECT * from adminlog order by entryID desc'); ?>
<?php while($dnn2 = mysql_fetch_array($q)) { ?>

<div class="itemdiv dialogdiv" style="padding-bottom:0px;">

<div class="user">
<?php

$id = $udata['ID'];
$check = get_row("SELECT Skin FROM players WHERE ID='$id'")

?>
<img alt="Avatar" src="images/Skin_small/<?php echo $check['Skin']; ?>.png">

</div>
<div class="body">
<div class="time">
<i class="icon-time"></i>
<span class="green">
<?php echo $dnn2['entryTime']; ?>
</span>
</div>
<div class="text">
<?php echo $dnn2['value']; ?>

</div>

</div>
</div>
<?php } ?>
</div>
</div> 
</div> 
</div> 
<br>
</div>

</div> 
</div> 
</div>

</div><!-- row -->

</div><!-- page -->
</div><!-- main -->
