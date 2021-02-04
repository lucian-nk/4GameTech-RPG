<?php
include 'includes/config.php';

include 'includes/header.php';



?>
<div class="main-content">
<div class="breadcrumbs" id="breadcrumbs">
<script type="text/javascript">
						try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
					</script>
<ul class="breadcrumb">
<li>
<i class="icon-home home-icon"></i>
<a href="#">Acasa</a>
</li>
<li class="active"><i class="icon-angle-right"></i>
Pagina principala
</li>
</ul>

<div class="nav-search" id="nav-search">
<span class="input-icon">
<input type="text" placeholder="Search ..." name="username" id="username" class="nav-search-input" autocomplete="on"> 
<i class="icon-search nav-search-icon"></i>
</span>

</form>

</div> 
</div>
<div class="page-content">

<div class="row-fluid">

<div class="span8">
<div class="infobox-container">
<div class="infobox infobox-green">
<div class="infobox-icon">
<i class="icon-user"></i>
</div>
<div class="infobox-data">
<?php $query = mysql_query('SELECT ID from players WHERE Status > 0'); $num_rows = mysql_num_rows($query);  ?>
<span class="infobox-data-number"><?php echo $num_rows; ?></span>
<div class="infobox-content"><a href="online.php">Jucatori online</a></div>
</div>
</div>
<div class="infobox infobox-blue">
<div class="infobox-icon">
<i class="icon-user"></i>
</div>
<div class="infobox-data">
<?php $query2 = mysql_query('SELECT ID from players WHERE Banned > 0'); $num_rows = mysql_num_rows($query2); ?>
<span class="infobox-data-number"><?php echo $num_rows; ?></span>
<div class="infobox-content"><a href="banlist.php">Jucatori Suspendati</a></div>
</div>
</div>
<div class="infobox infobox-pink  ">
<div class="infobox-icon">
<i class="icon-user"></i>
</div>
<div class="infobox-data">
<?php $query3 = mysql_query('SELECT ID from players'); $num_rows = mysql_num_rows($query3);?>
<span class="infobox-data-number"><?php echo $num_rows; ?></span>
<div class="infobox-content">Jucatori întregistrați</div>
</div>
</div>
<div class="infobox infobox-red  ">
<div class="infobox-icon">
<i class="icon-shield"></i>
</div>
<div class="infobox-data">
<?php 
$q1 = mysql_query('SELECT ID from players WHERE AdminLevel > 0');
$q2 = mysql_query('SELECT ID from players WHERE HelperLevel > 0');
$admins = mysql_num_rows($q1);
$helpers = mysql_num_rows($q2);
$staff = $admins + $helpers; ?>
<span class="infobox-data-number"><?php echo $staff; ?></span>
<div class="infobox-content">Staff</div>
</div>
</div>
<div class="infobox infobox-orange  ">
<div class="infobox-icon">
<i class="icon-home"></i>
</div>
<div class="infobox-data">
<?php $query2 = mysql_query('SELECT ID from houses'); 
	  $houses = mysql_num_rows($query2); ?>
<span class="infobox-data-number"><?php echo $houses; ?></span>
<div class="infobox-content">Case</div>
</div>
</div>
<div class="infobox infobox-purple  ">
<div class="infobox-icon">
<i class="icon-glass"></i>
</div>
<div class="infobox-data">
<?php $query3 = mysql_query('SELECT ID from business'); 
	  $businesses = mysql_num_rows($query3); ?>
<span class="infobox-data-number"><?php echo $businesses; ?></span>
<div class="infobox-content">Afaceri</div>
</div>
</div>
</div>
<br>
<div class="widget-box ">
<div class="widget-header widget-header-flat widget-header-small">
<h4 class="lighter smaller">
<i class="icon-rss red"></i>
Ultimele actiuni
</h4>
</div>
<div class="widget-body">
<div class="widget-main no-padding">
<div class="dialogs">



<?php $q = mysql_query('SELECT * from factionlogs order by id desc LIMIT 15'); ?>
<?php while($dnn2 = mysql_fetch_array($q)) { ?>

<div class="itemdiv dialogdiv" style="padding-bottom:0px;">

<div class="user">
<?php

$id = $dnn2['Player'];
$check = get_row("SELECT Skin FROM players WHERE ID='$id'")

?>
<img alt="Avatar Jucator" src="images/Skin_small/<?php echo $check['Skin']; ?>.png">

</div>
<div class="body">




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

<div class="span4">
<div class="widget-box">
<div class="widget-header widget-header-flat widget-header-small">
<h5>
<i class="icon-thumbs-up"></i>
Facebook
</h5>
</div>
<div class="widget-body">
<div class="widget-main">
<div class="hr hr8 hr-double"></div>
<div class="clearfix">
<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fgroups%2Fbugget%2F&amp;width=292&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:292px; height:290px;" allowTransparency="true"></iframe></div>
</div> 
</div> 
</div> 
<br>
<div class="widget-box">
<div class="widget-header widget-header-flat widget-header-small">
<h5>
<i class="icon-rss orange"></i>
Actualizari server
</h5>
</div>
<div class="widget-body">
<div class="widget-main" id="updates">
<div class="hr hr8 hr-double"></div>
<div class="clearfix">
<b>Changelogurile le puteti gasi pe forum</b><br>
</div>
</div> 
</div> 
</div> 
</div>

</div><!-- row -->

</div><!-- page -->
</div><!-- main -->
