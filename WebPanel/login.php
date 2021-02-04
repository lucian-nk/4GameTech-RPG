<?php
include 'includes/config.php';
if(isset($_POST['username']) && isset($_POST['password'])){
	$username = mysql_real_escape_string($_POST['username']);
	$password = mysql_real_escape_string($_POST['password']);
	
	$check = get_row("SELECT ID FROM players WHERE Name='$username' && Password='$password'");
	if(isset($check['ID']))
	{
		$_SESSION['username'] = $_POST['username'];
		$_SESSION['password'] = $_POST['password'];
		mysql_query("UPDATE players SET rpgon=1 WHERE Name='$username'");
		$id = $check['ID'];
		header("location: index.php");
	}
	else
	{
		$err = 'Username sau parola incorecte';
	}
}

include 'includes/header.php';

?>

<div class="main-content">
<div class="page-content">
<div class="row-fluid">
<div class="span12">
<center>
<form method="POST" action="login.php">
	
	<h2>4GameTech RPG - Panel login</h2>
		
			Username:<br />
			<input type="text" id="username" name="username" /><br />
			Password:<br /> 
			<input  id="password" type="password" name="password" /><br />
			<br />
			<input class="btn btn-inverse btn-large" type="submit" value="Login"><br /><br />
			
	
		<?php if(isset($err)): ?>
	
		
				<span class="text-error"><?=$err?></span>
			
		
		<?php endif; ?>
	</table>
</form>
</center>
</div><!-- this div closes span12-->
</div><!-- this div close row fluid -->
</div><!-- this div close page content-->
</div><!-- this div close main content-->
