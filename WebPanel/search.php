<?php
include 'includes/config.php';
if(isset($_POST['username'])){
	$username = sec($_POST['username']);
	
	$check = get_row("SELECT ID FROM players WHERE Name='$username'");
	if(isset($check['ID']))
	{
		$id = $check['ID'];
		header("location: cont.php?id=$id");
	}
	else
	{
		$err = 'Username incorect';
	}
}

include 'includes/header.php';

?>
<div class="main-content">
<div class="page-content">
<div class="row-fluid">
<div class="span12">
<div class="alert alert-block alert-info">
									<button type="button" class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>

									<i class="ace-icon fa fa-check green"></i>

									<li>Pentru a reclama un player intra pe profilul lui si apasa pe butonul 'Reclama jucator'.</li>
									<li>Pentru a trimite un email unui player intra pe profilul lui si apara pe butonul 'Trimite e-mail'.</li>
								</div>
</div>
</div>
</div>
</div>
<form method="POST" action="search.php">
	<table id="loginstyle">
	<center>
		<tr>
			<center><label id="intxt">Nume jucator:</label></center>
			<center><input id="instyle" type="text" name="username" ></center>
		</tr>
		<br/>

		<?php if(isset($err)): ?>
		<tr>
				<center><?=$err?></center>
			</td>
		</tr>
		<?php endif; ?>
	</center>
</form>
<center><input class="btn btn-inverse" type="submit" value="Search"></center>