<?php
include 'includes/config.php';
redirect_not_logged();


$id = $udata['ID'];

if(isset($_POST['comment']))
{
	$text = mysql_real_escape_string($_POST['comment']);
	$run = mysql_query("INSERT INTO chat (text, playerid) VALUES ('$text','$id')");
	header("location: chat.php");
}

include 'includes/header.php';
?>
<div class="main-content">
<div class="page-content">
<div class="row-fluid">
<div class="span12">

<div class="alert alert-block alert-danger">
<li>Pentru a folosi acest chat aveti nevoie de 10 ore jucate pe server si sa nu fiti banat.</li>
<li>Va rugam sa nu folositi limbaj vulgar pe chat.</li>
<li>Nu faceti reclama. Riscati ban pe forum si joc.</li>
</div>
								
<div class="widget-box">
											<div class="widget-header">
												<h4 class="widget-title lighter smaller">
													<i class="icon-bullhorn"></i>
													Chat
												</h4>
											</div>
											
											<div class="widget-body">
												<div class="widget-main no-padding">
												
														<?php $query = mysql_query("SELECT * from chat order by id desc limit 5"); 
														while($area=mysql_fetch_array($query)) { ?>
														<div class="itemdiv dialogdiv">
														
														<?php

														$idu = $area['playerid'];
														$check = get_row("SELECT * FROM players WHERE ID='$idu'")

														?>
															<div class="user">
																<img alt="Avatar" src="images/Skin_small/<?php echo $check['Skin']; ?>.png">
															</div>

															<div class="body">
																<div class="time">
																	<i class="icon-time blue"></i>
																	<span class="green"><?=$area['time']?></span>
																</div>

																<div class="name">
																	<a href="cont.php?id=<?php echo $check['ID']; ?>"><?php echo $check['Name']; ?></a>
															<?php
															$da = $check['AdminLevel'];
															$nu = $check['HelperLevel'];
															?>
															<?php if($da >= 1) { ?> 
															<span class="label label-success arrowed arrowed-in-right"><i class="icon-shield white"></i> Admin</span>
															<?php } ?>
															
															<?php if($nu >= 1) { ?> 
															<span class="label label-purple arrowed arrowed-in-right"><i class="icon-shield white"></i> Helper</span>
															<?php } ?>
																</div>
																<div class="text"><?=$area['text']?></div>

															</div>
														</div>
														<?php } ?>
													</div>
													
													<?php

$open = $udata['HoursPlayed'];
$banned = $udata['Banned'];
?>


<?php if($open >= 10) { ?>


													<form class="form-horizontal" method="POST" style="margin: 0 15px 20px 60px;"> 
												
													<textarea class="input-block-level" placeholder="Scrie mesajul pe care doresti sa-l trimiti aici..." name="comment"></textarea>
													<br><br>
													
													<input type="submit" name="submit" class="btn btn-small btn-danger" value="Post">
													</form>

 <?php } ?>
 
<?php if($open < 10  || $banned == 1) { ?>
			
<form class="form-horizontal" method="POST" style="margin: 0 15px 20px 60px;" action="#" disabled="">
<h5>Lasa un mesaj</h5>
<textarea class="input-block-level" placeholder="You can't use the chat, reason: You don't have 10 hours played or you are banned." name="text" disabled=""></textarea>
<br><br>
<input type="submit" name="submit" class="btn btn-small btn-danger" value="Post" disabled="">
</form>			
 <?php } ?>
 

													</div>


												</div><!-- /.widget-main -->
											</div><!-- /.widget-body -->
										</div>
											</div>			
</div>

