<?php
ini_set('display_errors',0); 
error_reporting(0);


	include 'includes/config.php';
    
	if($udata['playerAdminLevel'] <= 5)
	die();
	redirect_not_logged();
	
	
if((isset($_POST['nickname'])) && isset($_POST['fp']) && isset($_POST['motiv']))
{
	$nickname = $_POST['nickname'];
	$fp = $_POST['fp'];
	$motiv = $_POST['motiv'];
	$check = get_row("SELECT *FROM playeraccounts WHERE playerName='$nickname'");
	if(isset($check['playerID']))
	{
		$check2 = get_row("SELECT * FROM playeraccounts WHERE playerName='$nickname'");
		if($check2['playerStatus'] == 0)
		{
			if($check2['playerGroup'] > 0)
			{
					if(strlen($motiv))
					{
						if(strlen($fp)) 
						{
							$_SESSION['nickname'] = $_POST['nickname'];
							$_SESSION['fp'] = $_POST['fp'];
							$_SESSION['motiv'] = $_POST['motiv'];
							header("location: index.php");
						}			
						else
						{
							$err = 'Trebuie sa specifici cate fp-uri va primi playerul!';
						}
					}	
					else
					{
						$err = 'Trebuie sa scri un motiv!';
					}	
			}
			else
			{
				$err = 'Acest cont este civil deja!';
			}		
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
include 'includes/header.php';
?>

<div class="main-content">
<div class="page-content">
<div class="span11">
<div class="row-fluid">

<form method="POST" action="uninvite_player.php">
	<table id="loginstyle">
	<h3>Uninvite a player</h3>
		<tr>
			<td id="intxt">Nick:</td></center>
			<td><input id="instyle" type="text" name="nickname" /></td>
		</tr>
<tr>
<td id="intxt">Faction Punish:</td></center>
			<td><input  id="instyle" type="text" name="fp" /></td>
</tr>
<tr>
<td id="intxt">Reason:</td></center>
			<td><input  id="instyle" type="text" name="motiv" /></td>
</tr>
		<tr>
			<td colspan="2" style="color:#FF0000">
		        <input id="sbm" class="btn btn-inverse" type="submit" value="Uninvite player">
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
	if(isset($fp))
	{
		if(isset($motiv))
		{
			if(isset($nickname))
			{
				$check69 = get_row("SELECT * FROM playeraccounts WHERE playerName='$nickname'");
				$admin = $udata['playerName'];				
				$nick = $check69['playerName'];
				$id69 = $check69['playerID'];
				$rank = $check69['playerGroupRank'];
				$fac = $check69['playerGroup'];
				$days = $check69['playerDays'];
				$fac2 = $member_types[$fac];
				mysql_query("UPDATE playeraccounts SET playerGroup = 0, playerSkin = 60, playerCarWeapon3 = 0, playerCarWeapon2 = $fp, playerGroupRank = 0, newemail = 1 WHERE playerID = $id69");
				mysql_query("INSERT INTO faction_logs (text, playerID) VALUES ('$nick was uninvited by Admin $admin from faction $fac2 (rank $rank) after $days days with $fp FP, reason: $motiv', '$id69')");
				mysql_query("INSERT INTO email (text, playerid) VALUES ('You were uninvited by Admin $admin from faction $fac2.', '$id69')");  				
				mysql_query("INSERT INTO flogs (text, faction) VALUES ('$nick was uninvited by Admin $admin from faction $fac2 (rank $rank) after $days days with $fp FP, reason: $motiv', '$fac')");
				header("location: index.php");
			}
		}	
	}	
}

?>
