<?php
ini_set('display_errors',0); 
error_reporting(0);


	include 'includes/config.php';
    include 'includes/header.php';
	if($udata['playerAdminLevel'] <= 0)
	die();
	redirect_not_logged();
	
	
if((isset($_POST['nickname'])))
{
	$nickname = $_POST['nickname'];
	$check = get_row("SELECT playerID FROM playeraccounts WHERE playerName='$nickname'");
	if(isset($check['playerID']))
	{
		$check2 = get_row("SELECT playerStatus FROM playeraccounts WHERE playerName='$nickname'");
		if($check2['playerStatus'] == 0)
		{
			$_SESSION['nickname'] = $_POST['nickname'];
		}
		else
		{
			$err = 'Acel cont este online!';
		}
	}
	else
	{
		$err = 'Acel cont nu exista!';
	}
}
?>

<div class="main-content">
<div class="page-content">
<div class="span11">
<div class="row-fluid">

<form method="POST" action="unban.php">
	<table id="loginstyle">
	<h3>Unban a player</h3>
		<tr>
			<td id="intxt">Nick:</td></center>
			<td><input id="instyle" type="text" name="nickname" /></td>
		</tr>
		<tr>
			<td colspan="2" style="color:#FF0000">
		        <input id="sbm" class="btn btn-inverse" type="submit" value="Unban player">
			</td>
		</tr>
		<?php if(isset($err)): ?>
		<tr>
			<td colspan="2" style="color:#FF0000;font-weight:bold;">
				<?=$err?>
			</td>
		</tr>
		<?php endif; ?>
	</table>
</form>


<!-- do not affect this divs, or your design will fuck up -->
</div>
</div>
</div>
</div>
<!-- do not affect this divs, or your design will fuck up -->

<?php


if(!isset($err))
{
	if(isset($nickname))
	{
		$admin = $udata['playerName'];
		mysql_query("UPDATE playeraccounts SET playerBanned = 0 WHERE playerName = '$nickname'");
		mysql_query("DELETE from bans where playerNameBanned = '$nickname'");
		mysql_query("INSERT INTO adminlog (value) VALUES ('AdmPanel: $nickname has been unbanned by $admin.')");
	}
}

?>
