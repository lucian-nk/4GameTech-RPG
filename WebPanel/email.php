<?php
include 'includes/config.php';
redirect_not_logged();
include 'includes/header.php';
?>
<div class="main-content">
<div class="page-content">
<div class="row-fluid">
<div class="span12">					

					<div class="page-content-area">
						<div class="page-header">
							<h1>
								Your emails
							</h1>
						</div><!-- /.page-header -->

						<div class="rowHA">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="rowHA">
									<div class="col-xs-2">
										<div class="tabbable">
										<ul style="list-style-type: none;">
											<li class="li-new-mail pull-right">
													<a href="search.php" data-target="write">
															<span class="btn btn-success">
															<i class="icon-envelope bigger-130"></i>
															<span class="bigger-110">Send email</span>
															</span>
														
													</a>
												</li><!-- /.li-new-mail -->
											<br>
											</ul>
											<ul class="inbox-tabs nav nav-tabs padding-16 tab-size-bigger tab-space-1">
											

												<li class="active">
													<a data-toggle="tab" href="#inbox">
														<i class="icon-inbox bigger-130"></i>
														<span class="bigger-110">Inbox</span>
													</a>
												</li>

												<li>
													<a data-toggle="tab" href="#sent">
														<i class="icon-location-arrow bigger-130"></i>
														<span class="bigger-110">Sent</span>
													</a>
												</li>

												

												
											</ul>
											
											<div class="tab-content no-border padding-0">
												<div id="sent" class="tab-pane">
												
													<div class="message-list-container">																							
																										
													<?php

													$t = $udata['playerID'];
													?>
													<?php $query = mysql_query("SELECT * from email where creator = $t order by id desc"); 
														  while($dnn=mysql_fetch_array($query)) { ?>
														  
													<div class="profile-activity clearfix">
													<div>
													<i class="icon-envelope pull-left icon-3x"></i>
													<?php echo htmlentities($dnn['text']); ?>
													<div class="time">
													<i class="icon-time bigger-110"></i>
													<?php echo htmlentities($dnn['time']); ?>
													<?php

													$t2 = $dnn['playerid'];
													?>
													</div>
														<?php $query4 = mysql_query("SELECT * from playeraccounts where playerID = $t2"); 
														while($dnn2=mysql_fetch_array($query4)) { ?>
														Email sent to: <a href="cont.php?id=<?php echo htmlentities($dnn2['playerID']); ?>"><b><?php echo htmlentities($dnn2['playerName']); ?></a></b>
														<?php } ?>
													</div>
													</div>
													<?php } ?>
													</div>

												</div>		
												<div id="inbox" class="tab-pane in active">
																	
													
													<div class="message-list-container">																							
																										
													<?php

													$t = $udata['playerID'];
													?>
													<?php $query = mysql_query("SELECT * from email where playerid = '$t' and creator != $t order by id desc"); 
														  while($dnn=mysql_fetch_array($query)) { ?>
														  
													<div class="profile-activity clearfix">
													<div>
													<i class="icon-envelope pull-left icon-3x"></i>
													<?php echo htmlentities($dnn['text']); ?>
													<div class="time">
													<i class="icon-time bigger-110"></i>
													<?php echo htmlentities($dnn['time']); ?>
													
													</div>
													<?php

													$t2 = $dnn['creator'];
													?>
														<?php if($t2 >= 1) { ?>
														<?php $query4 = mysql_query("SELECT * from playeraccounts where playerID = $t2"); 
														while($dnn2=mysql_fetch_array($query4)) { ?>
														
														Email from: <a href="cont.php?id=<?php echo htmlentities($dnn2['playerID']); ?>"><b><?php echo htmlentities($dnn2['playerName']); ?></a></b>
														<?php } ?>
														<?php } ?>
														<?php if($t2 == 0) { ?>
														Email from: <a href=""><b>AdmBot</b></a>
														<?php } ?>
													</div>
													</div>
													<?php } ?>
													</div>
																										
	
												</div>								
											</div><!-- /.tab-content --> 								
											</div><!-- /.tabbable -->
									</div><!-- /.col -->
								</div><!-- /.row -->

							

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content-area -->
				</div>
<!-- do not affect this divs, or your design will fuck up -->
</div>
</div>
</div>