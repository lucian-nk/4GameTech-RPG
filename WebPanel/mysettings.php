<?php
include 'includes/config.php';
redirect_not_logged();
$id = $udata['ID'];
include 'includes/header.php';
?>
<div class="main-content">
<div class="page-content">
<div class="row-fluid">
<div class="span12">

											
									
										<h5 class="green">Parola</h5>
										<form action="changepass.php" method="post"><input type="hidden" name="todo" value="change-password">
										<span class="input-icon">
											<input type="password" name="old_password" placeholder="Current password">
											<i class="icon-lock"></i>
										</span>
										<div class="space-12"></div>
										<span class="input-icon">
											<input type="password" name="password" placeholder="New password">
											<i class="icon-lock"></i>
										</span>
										<div class="space-4"></div>
										<span class="input-icon">
											<input type="password" name="password2" placeholder="Repeat new password">
											<i class="icon-repeat"></i>
										</span>
										<div class="space-4"></div>
										<input type="submit" class="width-25 btn btn-sm btn-info no-border" value="Save Settings">
										</form></div>
										
										<div class="editbox" "="">
										<h5 class="green">E-Mail</h5>
										<form action="changemail.php" method="post"><input type="hidden" name="todo" value="change-email">
										<span class="input-icon">
											<input type="password" name="old_password" placeholder="Current password">
											<i class="icon-lock"></i>
										</span>
										<div class="space-12"></div>
										<span class="input-icon">
											<input type="text" name="newMail" placeholder="New E-Mail">
											<i class="icon-envelope"></i>
										</span>
										<div class="space-4"></div>
										<input type="submit" class="width-25 btn btn-sm btn-info no-border" value="Save Settings">
										</form></div>
										
									
																				
												</div>													
											</div>
										</div>