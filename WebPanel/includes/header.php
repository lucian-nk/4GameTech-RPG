<!DOCTYPE html> 
<?php include('style_includes.php');?>
<html>
	<head>
		<meta charset="utf-8">
		<title>4GameTech RPG - Panel</title>
		<script src="http://code.jquery.com/jquery-1.7.min.js"></script>
	</head>
	<body>
				
				<?php if($logged_in): $total_rows = get_row("SELECT COUNT(ID) as total FROM players WHERE AdminLevel > 0 && Status > 0");
	$total_admin_rows = $total_rows['total']; $total_rows = get_row("SELECT COUNT(ID) as total FROM players WHERE HelperLevel > 0 && Status > 0");
	$total_asistent_rows = $total_rows['total']; $total_rows = get_row("SELECT COUNT(ID) as total FROM players WHERE PremiumAccount > 0 && Status > 0");
	$total_donator_rows = $total_rows['total'];?>
					
					<div class="navbar">
			<div class="navbar-inner">
				<div class="container-fluid">
					<a href="index.php" class="brand">
						<small>
							<i class="icon-bug"></i>
							4GameTech Panel
						</small>
					</a><!--/.brand-->

					<ul class="nav ace-nav pull-right">

<li class="purple">
<a data-toggle="dropdown" class="dropdown-toggle" href="#" id="loadnotifications">
<i class="icon-envelope"></i>
<?php
$id = $udata['players'];
?>
<?php
$hitman = mysql_query("SELECT COUNT(ID) as total FROM email WHERE playerid = $id");
$hitman = mysql_fetch_array($hitman);

?>
<span class="badge badge-grey"><?=$hitman['total']?></span>

</a>
<ul class="pull-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close" id="notifications"><li>


<?php $query = mysql_query("SELECT * from email WHERE playerid = $id order by id desc limit 5"); 
	  while($dnn=mysql_fetch_array($query)) { ?>
	  
<li>
<a href="email.php">


<i class="btn btn-xs no-hover btn-grey icon-comment"></i>

<span class="msg-body">

<span class="msg-title">
<?php echo htmlentities($dnn['text']); ?>
</span>

</span>

</a>

</li>
<?php } ?>
<li>
<a href="email.php">
Vezi toate e-mailurile
<i class="icon-arrow-right"></i>
</a>
</li>
</ul>
</li>
						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
							<?php $q = mysql_query('SELECT Skin from players WHERE Name="'.$udata['Name'].'"'); ?>
							<?php while($dnn2=mysql_fetch_array($q)) { ?>
							<img class="nav-user-photo" src="images/Skin_small/<?php echo $dnn2['Skin']; ?>.png" style="height: 36px;" alt="iStorm.'s Avatar">
							<?php } ?>
								<span class="user-info">
								<small>Salut,</small>
								<?php echo htmlentities($udata['Name']); ?>
								
								
								</span>

								<i class="icon-caret-down"></i>
							</a>

							<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-closer">
							
									


								<li>
									<a href="cont.php?id=<?=$udata['ID']?>">
										<i class="green icon-user"></i>
										Profil
									</a>
								</li>
								<li>
									<a href="mysettings.php">
										<i class="orange icon-wrench"></i>
										 Setari
									</a>
								</li>
								<li class="divider"></li>

								<li>
									<a href="?logout">
										<i class="blue icon-off"></i>
										Deconectare
									</a>
								</li>
							</ul>
						</li>
					</ul><!--/.ace-nav-->
				</div><!--/.container-fluid-->
			</div><!--/.navbar-inner-->
		</div>

		<div class="main-container container-fluid">
			<a class="menu-toggler" id="menu-toggler" href="#">
				<span class="menu-text"></span>
			</a>

			<div class="sidebar" id="sidebar">
				

				<ul class="nav nav-list">
					<li>
						<a href="index.php">
							<i class="icon-home"></i>
							<span class="menu-text">Pagina Principala</span> 
						</a>
					</li>
					<li>
						<a href="http://forum.4gametech.com">
							<i class="icon-external-link"></i>
							<span class="menu-text">Forum</span> 
						</a>
					</li>
					<li>
						<a href="samp://93.114.82.183:7777">
							<i class="icon-gamepad"></i>
							<strong><span class="menu-text">Server SA:MP</span></strong>
						</a>
					</li>
					<?php if($udata['Leader'] >= 1): ?>
					<li>
						<a href="leader_panel.php">
							<i class="icon-double-angle-right"></i> 
							<span class="menu-text">Panel Lider</span>
						</a>
					</li>
					<?php endif; ?>
					<li>
						<a href="cont.php?id=<?=$udata['ID']?>">
							<i class="icon-smile"></i>
							<span class="menu-text">Profil</span>
						</a>
					</li>
					
					<li>
						<a href="online.php">
							<i class="icon-user"></i> 
							<span class="menu-text">Jucatori Online</span>
						</a>
					</li>
					<li>
						<a href="chat.php">
							<i class="icon-bullhorn"></i>
							<span class="menu-text">Chat</span>
						</a>
					</li>
					<li>
						<a href="staff.php">
							<i class="icon-android"></i>
							<span class="menu-text">Staff Online</span>
							<?php $a = mysql_query('SELECT ID from players WHERE AdminLevel > 0 and Status > 0');
								  $h = mysql_query('SELECT ID from players WHERE HelperLevel > 0 and Status > 0');
								  $admins = mysql_num_rows($a);
								  $helpers = mysql_num_rows($h); 
								  $staff = $admins + $helpers; 
								  
								  $a2 = mysql_query('SELECT ID from players WHERE AdminLevel > 0');
								  $h2 = mysql_query('SELECT ID from players WHERE HelperLevel > 0');
								  $admins2 = mysql_num_rows($a2);
								  $helpers2 = mysql_num_rows($h2);
								  $totalstaff = $admins2 + $helpers2;
							?>
							<span class="badge badge-yellow"><?php echo $staff; ?> / <?php echo $totalstaff; ?></span>
						</a>
					</li>
					<?php if($udata['AdminLevel'] >= 1): ?>
					<li>
						<a href="adminpanel.php">
							<i class="icon-cog"></i> 
							<span class="menu-text">Panel Admin</span>
						</a>
					</li>
					<?php endif; ?>
					<li>
						<a href="search.php">
							<i class="icon-search"></i> 
							<span class="menu-text">Cauta</span>
						</a>
					</li>
					<li>
					<a href="complaints.php">
					<?php 
					
						$unban = mysql_query('SELECT id from rpg_complaints WHERE status = 0');
						$unbantotal = mysql_num_rows($unban);
					?>
					<i class="icon-legal"></i>
					<span class="menu-text"> Reclamatii </span>
					<span class="badge badge-yellow"><?php echo $unbantotal; ?></span>
					</a>
					</li>
					<li>
					<a href="faq.php">
					<i class="icon-question"></i>
					<span class="menu-text"> Intrebari Frecvente </span>
					</a>
					</li>
					<li>
					<a href="bugs.php">
					<i class="icon-exclamation"></i>
					<span class="menu-text"> Raporteaza Buguri </span>
					</a>
					</li>
					<li>
						<a href="tickets.php">
							<i class="icon-ticket"></i>
							<span class="menu-text"> Tichete </span>
						</a>
					</li>
					<li>
					<a href="unbanrequest.php">
					<i class="icon-tasks"></i>
					<?php 
					
						$unban = mysql_query('SELECT id from unbans WHERE status = 0');
						$unbantotal = mysql_num_rows($unban);
					?>
					<span class="menu-text"> Cereri debanare </span> <span class="badge badge-yellow"><?php echo $unbantotal; ?></span>
					</a>
					</li>
					<li>
						<a href="banlist.php">
							<i class="icon-frown"></i> 
							<span class="menu-text">Ban-uri</span>
						</a>
					</li>
					<li>
					<a href="premium.php">
					<i class="icon-certificate green"></i>
					<span class="menu-text"> Premium </span>
					</a>
					</li>
					
					<li class="">
					
<a href="#" class="dropdown-toggle">
<i class="icon-group"></i>
<span class="menu-text"> Factiuni </span>
<b class="arrow icon-angle-down"></b>
</a>
<ul class="submenu" style="display: none;">
<li>
<a href="list.php">
<i class="icon-double-angle-right"></i>
Lista factiuni
<?php
$x = mysql_query('SELECT COUNT(groupID) as total FROM groups WHERE groupAplication = "1"');
$x = mysql_fetch_array($x);

?>
<span class="badge badge-yellow"><?=$x['total']?></span>
</a>
</li>
<li>
<a href="members.php">
<i class="icon-double-angle-right"></i>
Membri
</a>
</li>
<li>
<a href="logs.php">
<i class="icon-double-angle-right"></i>
Loguri
</a>
</li>
<li>
<a href="skins.php">
<i class="icon-double-angle-right"></i>
Skinuri
</a>
</li>
</ul>
</li>

				<li>
<a href="clan.php">
<i class="icon-sitemap"></i>
<span class="menu-text"> Clanuri </span>
</a>
</li>

<li>
<a href="#" class="dropdown-toggle">
<i class="icon-signal"></i>
<span class="menu-text"> Statistici </span>
<b class="arrow icon-angle-down"></b>
</a>
<ul class="submenu">
<li>
<a href="top.php">
<i class="icon-double-angle-right"></i>
Top Jucatori
</a>
</li>
<li>
<a href="houses.php">
<i class="icon-double-angle-right"></i>
Case
</a>
</li>
<li>
<a href="biz.php">
<i class="icon-double-angle-right"></i>
Afaceri
</a>
</li>
</ul>
</li>
					
								
					
					
				</ul><!--/.nav-list-->

				<div class="sidebar-collapse" id="sidebar-collapse">
					<i class="icon-double-angle-left"></i>
				</div>
			</div>
		
				<?php else: ?>
				
				
				<div class="navbar">
			<div class="navbar-inner">
				<div class="container-fluid">
					<a href="#" class="brand">
						<small>
							<i class="icon-android"></i>
							4GameTech RPG - Panel
						</small>
					</a><!--/.brand-->

					<ul class="nav ace-nav pull-right">
						
						<li class="light-blue">
							<a  href="login.php" class="">
									Autentificare
								
							</a>
						</li>
					</ul><!--/.ace-nav-->
				</div><!--/.container-fluid-->
			</div><!--/.navbar-inner-->
		</div>

		<div class="main-container container-fluid">
			<a class="menu-toggler" id="menu-toggler" href="#">
				<span class="menu-text"></span>
			</a>

			<div class="sidebar" id="sidebar">
				

				<ul class="nav nav-list">
					<li>
						<a href="index.php">
							<i class="icon-home"></i>
							<span class="menu-text">Pagina Principala</span> 
						</a>
					</li>
					
					<li>
						<a href="http://forum.4gametech.com">
							<i class="icon-external-link"></i>
							<span class="menu-text">Forum</span> 
						</a>
					</li>
					
					<li>
						<a href="samp://93.114.82.183:7777">
							<i class="icon-gamepad"></i>
							<span class="menu-text">Server SA:MP</span> 
						</a>
					</li>
					
					<li>
						<a href="online.php">
							<i class="icon-user"></i> 
							<span class="menu-text">Jucatori Online</span>
						</a>
					</li>
					<li>
						<a href="chat.php">
							<i class="icon-bullhorn"></i>
							<span class="menu-text">Chat</span>
						</a>
					</li>
					<li>
						<a href="staff.php">
							<i class="icon-android"></i>
							<span class="menu-text">Staff Online</span>
							<?php $a = mysql_query('SELECT ID from players WHERE AdminLevel > 0 and Status > 0');
								  $h = mysql_query('SELECT ID from players WHERE HelperLevel > 0 and Status > 0');
								  $admins = mysql_num_rows($a);
								  $helpers = mysql_num_rows($h); 
								  $staff = $admins + $helpers; 
								  
								  $a2 = mysql_query('SELECT ID from players WHERE AdminLevel > 0');
								  $h2 = mysql_query('SELECT ID from players WHERE HelperLevel > 0');
								  $admins2 = mysql_num_rows($a2);
								  $helpers2 = mysql_num_rows($h2);
								  $totalstaff = $admins2 + $helpers2;
							?>
							<span class="badge badge-yellow"><?php echo $staff; ?> / <?php echo $totalstaff; ?></span>
						</a>
					</li>
					<li>
						<a href="search.php">
							<i class="icon-search"></i> 
							<span class="menu-text">Cauta</span>
						</a>
					</li>
					<li>
					<a href="complaints.php">
					<?php 
					
						$unban = mysql_query('SELECT id from rpg_complaints WHERE status = 0');
						$unbantotal = mysql_num_rows($unban);
					?>
					<i class="icon-legal"></i>
					<span class="menu-text"> Reclamatii </span>
					<span class="badge badge-yellow"><?php echo $unbantotal; ?></span>
					</a>
					</li>
					<li>
					<a href="faq.php">
					<i class="icon-question"></i>
					<span class="menu-text"> Intrebari Frecvente </span>
					</a>
					</li>
					<li>
					<a href="bugs.php">
					<i class="icon-exclamatio"></i>
					<span class="menu-text"> Raporteaza Buguri </span>
					</a>
					</li>
					<li>
						<a href="tickets.php">
							<i class="icon-ticket"></i>
							<span class="menu-text"> Tichete </span>
						</a>
					</li>
					<li>
					<a href="unbanrequest.php">
					<i class="icon-tasks"></i>
					<?php 
					
						$unban = mysql_query('SELECT id from unbans WHERE status = 0');
						$unbantotal = mysql_num_rows($unban);
					?>
					<span class="menu-text"> Cereri debanare </span> <span class="badge badge-yellow"><?php echo $unbantotal; ?></span>
					</a>
					</li>
					<li>
						<a href="banlist.php">
							<i class="icon-frown"></i> 
							<span class="menu-text">Ban-uri</span>
						</a>
					</li>
					<li>
					<a href="premium.php">
					<i class="icon-certificate green"></i>
					<span class="menu-text"> Premium </span>
					</a>
					</li>
					
					<li class="">
					
<a href="#" class="dropdown-toggle">
<i class="icon-group"></i>
<span class="menu-text"> Factiuni </span>
<b class="arrow icon-angle-down"></b>
</a>
<ul class="submenu" style="display: none;">
<li>
<a href="list.php">
<i class="icon-double-angle-right"></i>
Lista factiuni
<?php
$x = mysql_query('SELECT COUNT(groupID) as total FROM groups WHERE groupAplication = "1"');
$x = mysql_fetch_array($x);

?>
<span class="badge badge-yellow"><?=$x['total']?></span>
</a>
</li>
<li>
<a href="members.php">
<i class="icon-double-angle-right"></i>
Membri
</a>
</li>
<li>
<a href="logs.php">
<i class="icon-double-angle-right"></i>
Loguri
</a>
</li>
<li>
<a href="skins.php">
<i class="icon-double-angle-right"></i>
Skins
</a>
</li>
</ul>
</li>

				<li>
<a href="clan.php">
<i class="icon-sitemap"></i>
<span class="menu-text"> Clanuri </span>
</a>
</li>

<li>
<a href="#" class="dropdown-toggle">
<i class="icon-signal"></i>
<span class="menu-text"> Statistici </span>
<b class="arrow icon-angle-down"></b>
</a>
<ul class="submenu">
<li>
<a href="top.php">
<i class="icon-double-angle-right"></i>
Top Jucatori
</a>
</li>
<li>
<a href="houses.php">
<i class="icon-double-angle-right"></i>
Case
</a>
</li>
<li>
<a href="biz.php">
<i class="icon-double-angle-right"></i>
Afaceri
</a>
</li>
</ul>
</li>
					
								
					
					
				</ul><!--/.nav-list-->

				<div class="sidebar-collapse" id="sidebar-collapse"> 
					<i class="icon-double-angle-left"></i>
				</div>
			</div>
				    
					
				<?php endif; ?>
				</ul>
			</div>
			<div id="trance">