<?php
include 'includes/config.php';
include 'includes/header.php';

$f = $udata['Name'];



$id = isset($_GET['id']) ? (int)$_GET['id'] : $udata['ID'];
$q=mysql_query("SELECT * FROM players WHERE ID=$id"); 
while($playerdata = mysql_fetch_array($q)):
 
 
$name = $playerdata['Name'];
$skin =$playerdata['Skin'];

function get_member_type($l, $m)
{
	global $member_types;
	$x = $member_types[$m];
	
	return $x;

}
$job_types = array
(
	'None',
	'Arms Dealer',
	'Detective',
	'Mechanic',
	'Fisherman',
	'Drugs Dealer',
	'Pizza Boy',
	'Farmer'	
);
$name = $playerdata['Name'];
 ?>
 
<div class="main-content">
<div class="page-content">
<div class="row-fluid">
<div class="span12">
														<?php if($playerdata['Banned']=="1") { ?>
														<!--This player is permanent banned!-->
														<div class="alert alert-error">
														<?php $query = mysql_query('SELECT * FROM bans'); 
														while($dnn=mysql_fetch_array($query)) { ?>

														
														<?php if($dnn['Name'] == $playerdata['Name'])
														{ ?>
														<b>Acest cont a fost sanctionat.</b><br><br>
														De: <b><?php echo htmlentities($dnn['Admin']); ?></b> pe data de <b><?php echo htmlentities($dnn['BanY, BanM, BanD, BanH']); ?></b>, motiv: <b><?php echo htmlentities($dnn['Reason']); ?></b>.<br>
														Contul este sanctionat permanent. </b><br><br>
														<?php } ?>
														<?php } ?>
																</div>
													
														<?php } ?>

								<div id="user-profile-2" class="user-profile row-fluid">
									<div class="tabbable">
										<div id="user-profile-2" class="user-profile row-fluid">
										<div class="tabbable">
										<ul class="nav nav-tabs padding-18">
										<li class="active">
										<a data-toggle="tab" href="#home">
										<i class="green icon-user bigger-120"></i>
										Profil
										</a>
										</li>
										<li>
										<a data-toggle="tab" href="#feed">
										<i class="orange icon-rss bigger-120"></i>
										
										Istoric Factiuni
										</a>
										</li>
										<li>
										</li>
										</ul>
									
										<div class="tab-content no-border padding-24">

<div id="feed" class="tab-pane">
<?php $q = mysql_query("SELECT * from factionlogs where ID = $id order by id DESC"); ?>
<?php while($dnn2 = mysql_fetch_array($q)) { ?>
<div class="profile-feed row-fluid">
<div class="span6">
<div class="profile-activity clearfix ">


<div class="pull-left">
<img src="images/Skin_small/<?php echo $skin;?>.png">
</div>
<?php echo $dnn2['Text']; ?>
<div class="time">
<i class="icon-time bigger-110"></i>
<?php echo $dnn2['Date']; ?>
</div>
</div>

</div>

</div>
<?php } ?>
</div>
											
											
											<div id="home" class="tab-pane in active"> 
												<div class="row-fluid">
													<div class="span3 center">

														<span class="profile-picture">
															<img src='bigskins/<?php echo $skin;?>.png' style="height:300px;"></br>
															
														</span>

														<div class="space space-4"></div>

														<span class="width-50 label label-inverse arrowed-in arrowed-in-right">
															
														<?php if($playerdata['Status']=="0") { ?>
														<i class="icon-circle smaller-80 red"></i>
														Offline
														<?php } ?>
														
														<?php if($playerdata['Status']=="1") { ?>
														<i class="icon-circle smaller-80 green"></i>
														Online
														<?php } ?>
														
														<?php if($playerdata['Status']=="2") { ?>
														<i class="icon-circle smaller-80 green"></i>
														Doarme
														<?php } ?>
															
														</span>
														<div class="space space-4"></div>
														<?php if($udata['AdminLevel']<="0" && $udata['ID'] != $playerdata['ID']) { ?>
														<a class="btn btn-danger btn-small" href="createcomplaint.php?id=<?=$playerdata['ID']?>">
															Reclama jucator
														</a>
														<?php } ?>
														<?php if($udata['ID'] == $playerdata['ID'] && $playerdata['Status'] > 0) { ?>
														<a class="btn btn-info btn-small" href="deconnect.php?id=<?=$playerdata['ID']?>">
															Deconecteaza-te de pe joc
														</a>
														<?php } ?>
														<br>
														<br>
														<?php if($udata['ID'] != $playerdata['ID'])
														{ ?>
													
															<a href="sendmail.php?id=<?=$playerdata['ID']?>" data-target="write">
															<span class="btn btn-success">
															<i class="icon-envelope bigger-130"></i>
															<span class="bigger-110">Trimite e-mail</span>
															</span>
														
															</a>
											
														<?php } ?>
													</div><!--/span-->

													<div class="span9">
														<h4 class="blue">
															
															<span class="middle"><?=$playerdata['Name']?></span><br />
															
															<?php if($playerdata['Name']=="[GF]Lucian50") { ?> 
															<span class="label label-inverse arrowed-in-right"><i class="icon-cog white"></i> Owner & Scripter </span><br/><span class="label label-purple arrowed-in-right white"><i class="icon-ticket white"></i> support</span></br>	
															<?php } ?>													
															
															<?php if(($playerdata['AdminLevel']> 0)) { ?> 
															<span class="label label-success arrowed-in-right"><i class="icon-shield white"></i> Administrator </span><br /> 
															<?php } ?>
												
															
															<?php if(($playerdata['HelperLevel']<6) && ($playerdata['HelperLevel']> 0)) { ?> 
															<span class="label label-purple arrowed-right"><i class="icon-question-sign white"></i> Helper </span><br />
															<?php } ?> 
															
															<?php if($playerdata['Rank']=="7") { ?> 
															<span class="label label-purple arrowed-right"><i class="icon-group white"></i> Lider Factiune </span><br />
															<?php } ?> 
															
															<?php if($playerdata['PremiumAccount']>0) { ?>
															<span class="label label-important arrowed-right"><i class="icon-star white"></i> Premium </span><br />
															<?php } ?>
															
															<?php if($playerdata['CLeader']==1) { ?>
															<span class="label label-danger arrowed-in-right"><i class="icon-group white"></i> <a href="clani.php?c=<?=$playerdata['CLeader']; ?>" style="color: #FFF">Clan owner</a></span>
															<?php } ?>
														
														</h4>

														<div class="profile-user-info">
															<div class="profile-info-row">
																<div class="profile-info-name"> Factiune </div>
																<div class="profile-info-value">
																	 <?=get_member_type($playerdata['Member'], $playerdata['Leader'])?>  
																	 <?php if($playerdata['Rank']>0) { ?>, rank <?=$playerdata['Rank']; ?><?php } ?> 
																</div>
															</div>
															<?php if($playerdata['CLeader'] > 1): ?>
															
																<div class="profile-info-row">
																	<div class="profile-info-name"> Clan </div>
																	<div class="profile-info-value">
																	<?php
																	
																		$clanid = $playerdata['CLeader'];
																	?>
																	<?php $query = mysql_query("SELECT * from clans WHERE CLeader = '$id'"); 
																			while($dnn=mysql_fetch_array($query)) { ?>
																		 <?=$dnn['Name']?> <a href="clani.php?c=<?=$dnn['Name']?>"><i class="icon-external-link"></i></a>, Rank <?=$playerdata['CRank']?>
																		 
																		 <?php } ?>
																	</div>
																</div>								
															
															<?php endif; ?>
															<div class="profile-info-row">
																<div class="profile-info-name"> Level </div>
																<div class="profile-info-value">
																	 <?=$playerdata['Level']?>
																</div>
															</div>
															<div class="profile-info-row">
																<div class="profile-info-name"> Ore Jucate </div>
																<div class="profile-info-value">
																	 <?=$playerdata['HoursPlayed']?>
																</div>
															</div>												
																																									
															<div class="profile-info-row">
																<div class="profile-info-name"> Nr Telefon </div>
																<div class="profile-info-value">
																<?php if($playerdata['PhoneNumber']>0) { ?><?php echo $playerdata['PhoneNumber']; ?><?php } ?>
																<?php if($playerdata['PhoneNumber']<1) { ?>Inexistent<?php } ?>
																</div>
															</div>
															
																														
																<?php if($playerdata['ID'] == $udata['ID'] || $udata['AdminLevel'] >= 1): ?>
																	
																	<div class="profile-info-row">
																		<div class="profile-info-name"> Bani </div>
																		<div class="profile-info-value">
																			$<?=number_format($playerdata['Cash']);?>
																		</div>
																	</div>
						
																	<div class="profile-info-row">
																		<div class="profile-info-name"> Materiale </div>
																		<div class="profile-info-value">
																			<?=$playerdata['Materials']?>
																		</div>
																	</div>
																	
																	<div class="profile-info-row">
																		<div class="profile-info-name"> Premium </div>
																		<div class="profile-info-value">
																			<?=$account_types[$playerdata['PremiumAccount']]?> ( <?=$playerdata['Coins']?> premium points ) <a href="premium.php"><i class="btn btn-mini no-hover btn-success icon-plus"></i></a>
																		</div>
																	</div>
																															
																	<div class="profile-info-row">
																		<div class="profile-info-name"> E-mail </div>
																		<div class="profile-info-value">
																			<?=$playerdata['Email']?>
																		</div>
																	</div>
																	
																<?php endif; ?>
															
															<div class="profile-info-row">
																<div class="profile-info-name"> Avertizari </div>
																<div class="profile-info-value">
																	<?=$playerdata['Warns']?>/3
																</div>
															</div>
															
															<div class="profile-info-row">
																<div class="profile-info-name"> Avertizari Factiune </div>
																<div class="profile-info-value">
																	<?=$playerdata['FWarns']?>/3
																</div>
															</div>

															<div class="profile-info-row">
																<div class="profile-info-name"> Punish Factiune </div>
																<div class="profile-info-value">
																	<?=$playerdata['FPunish']?>/20
																</div>
															</div>

															<div class="profile-info-row">
																<div class="profile-info-name"> Job </div>
																<div class="profile-info-value">
																	<?=$job_types[$playerdata['Job']]?></td></tr>
																</div>
															</div>
															
															<?php if($playerdata['Jailed'] >= 1) : ?>
															
															<div class="profile-info-row">
																<div class="profile-info-name"> Arestat </div>
																<div class="profile-info-value">
																	<?=$playerdata['JailTime'] / 60 ?> minute</td></tr>
																</div>
															</div>
															
															<?php endif; ?>
														</div> 
														
													</div><!--/span-->
												</div><!--/row-fluid-->

												<div class="space-20"></div>

												<div class="row-fluid">
													<div class="span6">
														<div class="widget-box transparent">
															<div class="widget-header widget-header-small">
																<h4 class="smaller">
																	<i class="icon-truck bigger-110"></i>
																Vehicule personale
																</h4>
															</div>
															
															<div class="span2">
																<p>
																<b>Vehicul 1</b>
																<!--Adaugata-->
																	<!--Functionala-->
																<?php $query = mysql_query("SELECT * FROM vehicles WHERE Owner ='$name'"); 
																while($dnn=mysql_fetch_array($query)) { ?>
																	<!--Functionala-->															
																<!--Adaugata-->
																
																</p>
																<p><img src="http://weedarr.wdfiles.com/local--files/veh/<?php echo $dnn['Model'];?>.png" alt="masina"></p>
																<p>Odometter: <b><?php echo $dnn['playerCarTrunk1'];?></b> </p>
																<p><a href="map.php?x=<?php echo $dnn['playerCarPosX'];?>&y=<?php echo $dnn['playerCarPosY'];?>"><i class="icon-map-marker"></i> display on map</a></p>
																
																<?php } ?>
																<?php if($dnn['playerCarModel']<1) { ?>Nu detine<?php } ?>
															</div>
															
															<div class="span2">
																<p>
																<b>Vehicle 2</b>
																<?php if($playerdata['playerCarModel2']>0) { ?>
																
																</p>
																<p><img src="http://weedarr.wdfiles.com/local--files/veh/<?php echo $playerdata['playerCarModel2'];?>.png" alt="masina"></p>
																<p>Odometter: <b><?php echo $playerdata['playerCarKM2'];?></b> </p>
																<p><a href="map.php?x=<?php echo $playerdata['playerCarPosX2'];?>&y=<?php echo $playerdata['playerCarPosY2'];?>"><i class="icon-map-marker"></i> display on map</a></p>
																
																<?php } ?>
																<?php if($playerdata['playerCarModel2']<1) { ?>Nu detine<?php } ?>
															</div>
															
															<div class="span2">
																<p>
																<b>Vehicle 3</b>
																<?php if($playerdata['playerCarModel3']>0) { ?>
																
																</p>
																<p><img src="http://weedarr.wdfiles.com/local--files/veh/<?php echo $playerdata['playerCarModel3'];?>.png" alt="masina"></p>
																<p>Odometter: <b><?php echo $playerdata['playerCarKM3'];?></b> </p>
																<p><a href="map.php?x=<?php echo $playerdata['playerCarPosX3'];?>&y=<?php echo $playerdata['playerCarPosY3'];?>"><i class="icon-map-marker"></i> display on map</a></p>
																
																<?php } ?>
																<?php if($playerdata['playerCarModel3']<1) { ?>Nu detine<?php } ?>
															</div>

															<div class="span2">
																<p>
																<b>Vehicle 4</b>
																<?php if($playerdata['playerCarModel4']>0) { ?>
																
																</p>
																<p><img src="http://weedarr.wdfiles.com/local--files/veh/<?php echo $playerdata['playerCarModel4'];?>.png" alt="masina"></p>
																<p>Odometter: <b><?php echo $playerdata['playerCarKM4'];?></b> </p>
																<p><a href="map.php?x=<?php echo $playerdata['playerCarPosX4'];?>&y=<?php echo $playerdata['playerCarPosY4'];?>"><i class="icon-map-marker"></i> display on map</a></p>
																
																<?php } ?>
																<?php if($playerdata['playerCarModel4']<1) { ?>Nu detine<?php } ?>
															</div>																														
																													
															<div class="widget-body">
																<div class="widget-main">
																	
																</div>
															</div>
														</div>
													</div>

														<div class="span2">
														<div class="widget-box transparent">
														<div class="widget-header widget-header-small">
														<h4 class="smaller">
														<i class="icon-home bigger-110"></i>
														
														Casa personala
														</h4>
														</div>
														<div class="widget-body">
														<div class="widget-main">
														<?php $query = mysql_query('SELECT * FROM houses'); 
														while($dnn=mysql_fetch_array($query)) { ?>
														
														<?php if($dnn['Owner'] == $playerdata['Name'])
														{ ?>
															<div class="widget-main">
															ID Casa: <b><?php echo htmlentities($dnn['ID']); ?></b><br>
															Chirie: <b>$<?php echo htmlentities($dnn['Rent']); ?></b><br>
															Pret: <?php if($dnn['Value']>0) { ?><b><td>$<?php echo htmlentities($dnn['Value']); ?></b></br></td><?php }?>
																   <?php if($dnn['Value']<1) { ?><td><b>Nu este de vanzare</b></br></td><?php }?>
															<td><a href="map.php?x=<?php echo htmlentities($dnn['EntranceX']); ?>&y=<?php echo htmlentities($dnn['EntranceY']); ?>"><i class="icon-map-marker"></i> Vezi pe mapa</a></td>
															</div>
															
														<?php } ?>
														<?php } ?>
														<?php if($dnn['Owner'] != $playerdata['Name']) { ?><td><b><p>Acest jucator nu detine o casa</p></b></br></td><?php }?>
														</div>
														</div>
														</div>
														</div>
														<div class="span2">
															<div class="widget-box transparent">
															<div class="widget-header widget-header-small">
															<h4 class="smaller">
															<i class="icon-glass bigger-110"></i>
															Afaceri
															</h4>
															</div>
															<div class="widget-body">
															<div class="widget-main">
															<?php $query = mysql_query('SELECT * FROM business'); 
															while($dnn=mysql_fetch_array($query)) { ?>
															
															<?php if($dnn['Owner'] == $playerdata['Name'])
															{ ?>
																<div class="widget-main">
																ID afacere: <b><?php echo htmlentities($dnn['ID']); ?></b><br>
																Cost de intrare: <b>$<?php echo htmlentities($dnn['EntranceCost']); ?></b><br>
																Pret: <?php if($dnn['Price']>0) { ?><b><td>$<?php echo htmlentities($dnn['Price']); ?></b></br></td><?php }?>
																	   <?php if($dnn['Price']<1) { ?><td><b>Nu este de vanzare</b></br></td><?php }?>
																<td><a href="map.php?x=<?php echo htmlentities($dnn['EntranceX']); ?>&y=<?php echo htmlentities($dnn['EntranceY']); ?>"><i class="icon-map-marker"></i> Vezi pe mapa</a></td>
																</div>
																
															<?php } ?>
															<?php } ?>
															<?php if($dnn['Owner'] != $playerdata['Name']) { ?><td><b><p>Acest jucator nu detine o afacere</p></b></br></td><?php }?>
															</div>
															</div>
															</div>
															</div>
														</div>
													</div>			
												</div>
											</div><!--#home-->										
										</div>
									</div>


				  
				</td> 
				
				<td align="center"><table id="no_border">

                <center>
				
				</tr>
				<?php  endwhile; ?>
			
				</tbody></table>
</div></td></tr></tbody></table></center></td></tr></center></div></div></div></div>


</body>
<?php

?>