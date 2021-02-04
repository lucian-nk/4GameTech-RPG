<?php
include 'includes/config.php';

include 'includes/header.php';

if($udata['playerAdminLevel'] <= 5)
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
Last admin actions
</h4>
</div>
<div class="widget-body">
<div class="widget-main no-padding">
<div class="dialogs">



<?php $q = mysql_query('SELECT * from faction_logs order by id desc'); ?>
<?php while($dnn2 = mysql_fetch_array($q)) { ?>

<div class="itemdiv dialogdiv" style="padding-bottom:0px;">

<div class="user">
<?php

$id = $dnn2['playerID'];
$check = get_row("SELECT playerSkin FROM playeraccounts WHERE playerID ='$id'")

?>
<img alt="" src="images/Skin_small/<?php echo $check['playerSkin']; ?>.png">

</div>
<div class="body">

<div class="time">
<i class="icon-time"></i>
<span class="green">
<?php echo $dnn2['time']; ?>
</span>
</div>

<div class="text">
<?php echo $dnn2['Text']; ?>
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
