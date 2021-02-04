<!DOCTYPE html> 
<html>
	<head>
		<title>GreenTiger RPG</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css" />
		<script src="http://code.jquery.com/jquery-1.7.min.js"></script>
	</head>
	<body>
		<div id="header" class="box">
			<img src="images/logo.png" width="600" height="127" />
		</div>
                
		  <div id="content" class="box">
			<div id="nav">
				<ul>
				<?php if($logged_in): ?>
					<li><a href="index.php">Home</a></li>
                                        <li><a href="samp://rpg.greentiger.ro:7777"><strong>Connect SA:MP</a></li></strong>
                                        <li><a href="cars.php">Cars</a></li>
                                        <li><a href="houses.php">Houses</a></li>
                                        <?php if($udata['Leader'] >= 11 || $udata['Member'] >= 11): ?>
					<li><a href="aliante.php">Aliante</a></li>
                                   <?php endif; ?>
                                   <?php if($udata['AdminLevel'] == 7): ?>
					<li><a href="admins_stats.php">Admins</a></li>
                                   <?php endif; ?>
                                   <?php if($udata['AdminLevel'] != 7): ?>
					<li><a href="admins.php">Admins</a></li>
                                   <?php endif; ?>
                                       <?php if($udata['AdminLevel'] == 7): ?>
					<li><a href="sec_stats.php">Asistenti</a></li>
                                   <?php endif; ?>
                                   <?php if($udata['AdminLevel'] != 7): ?>
					<li><a href="secundanti.php">Asistenti</a></li>
                                   <?php endif; ?>
					<li><a href="banlist.php">Ban List</a></li>
					<?php if($udata['AdminLevel'] > 1): ?>
					<li><a href="banoffline.php">Ban Offline</a></li>
					<?php endif; ?>

					<?php if($udata['AdminLevel'] > 3): ?>
					<li><a href="admin_panel.php">Admin Panel</a></li>
					<?php endif; ?>
                                   <?php if($udata['Leader'] > 0): ?>
					<li><a href="leader_panel.php">Leader Panel</a></li>
                                  <?php endif; ?>
					<li><a href="factionsm.php">Factions Members</a></li>
                                        <li><a href="top.php">Top Players</a></li>
                                        <li><a href="online.php">Online</a></li>
					<li><a href="?logout">Logout</a></li>
				<?php else: ?>
					<li><a href="index.php">Login</a></li>
					<li><a href="online.php">Online</a></li>
                                        <li><a href="samp://rpg.greentiger.ro:7777">Connect SA:MP</a></li>
					<li><a href="mail.php">Password Recovery</a></li>
				<?php endif; ?>
				</ul>
			</div>
			<div id="trance">