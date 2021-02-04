<?php
include 'includes/config.php';
include 'includes/header.php';

if($udata['AdminLevel'] <= 0)
	die();
	
?>


<div class="main-content">
<div class="page-content">
<div class="span12">
<div class="row-fluid">

<?php if($udata['AdminLevel'] >= 6): ?>

<h3>Management</h3>
<span class="clearfix"></span>
<td>Fa click aici pentru a vedea lista actiunilor:</td></br></br>

									
<div class="btn-group">
	<button class="btn btn-success">Lista</button>
										<button data-toggle="dropdown" class="btn btn-success dropdown-toggle">
											<span class="caret"></span>
										</button>
					

				<ul class="dropdown-menu">
					<li>
						<a href="manage_accounts.php">Administrare conturi</a>
					</li>				   

					<li>
						<a href="manage_leaders.php">Administrare lideri</a>
					</li>

					<li class="divider"></li>

					<li>
						<a href="manage_groups.php">Administrare Factiuni</a>
					</li>
					

					<li>
						<a href="manage_clans.php">Administrare Clanuri</a>
					</li>
					
					<li class="divider"></li>
					<li>
						<a href="admin_logs.php">Vezi logurile administratorilor</a>
					</li>

					<li>
						<a href="factions_logs.php">Vezi ultimele actiuni</a>
					</li>						
					
					<li class="divider"></li>
					<li>
						<a href="uninvite_player.php">Da afara un jucator</a>
					</li>	
					
				</ul>
			</div>

</br>			

<?php endif; ?>

<div class="page-header">
</div>

<?php if($udata['AdminLevel'] >= 1): ?>

<h3>Management Jucatori</h3>
<span class="clearfix"></span>
<td>Fa click aici pentru a vedea lista actiunilor:</td></br></br>

									
														<div class="btn-group">
	<button class="btn btn-info">Lista</button>
										<button data-toggle="dropdown" class="btn btn-info dropdown-toggle">
											<span class="caret"></span>
										</button>
					

				<ul class="dropdown-menu">


					<li>
						<a href="ban.php">Baneaza jucatori</a>
					</li>

					<li>
						<a href="unban.php">Debaneaza jucatori</a>
					</li>
					<li class="divider"></li>
				    <li>
						<a href="jail.php">Baga jucatori in inchisoare</a>
					</li>
					
					<li>
						<a href="unjail.php">Scoate jucatori din inchisoare</a>
					</li>
					
					<li class="divider"></li>

					<li>
						<a href="warn.php">Averizeaza jucatori</a>
					</li>
					
					<li>
						<a href="unwarn.php">Sterge avertizarile jucatorilor</a>
					</li>
					
				</ul>
			</div>

</br>	


<?php endif; ?>

</div>
</div>
</div>
</div>