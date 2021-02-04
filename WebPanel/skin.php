<?php
include 'includes/config.php';
if($udata['playerGroup'] > 0)
	die();
include 'includes/header.php';

if(isset($_POST['sbm']))
{

	$skin = $_POST['playerSkin'];

	if ($skin > 0 && $skin < 300)
	{
		$tskin = "UPDATE playeraccounts SET playerSkin = '$skin' WHERE playerName = '$username'";
		mysql_query($tskin);
		header('location: index.php');
	}
}
?>
	<h1>Change skin (1-299)</h1>
        For a list of all skins, <a href="http://wiki.sa-mp.com/wiki/Skins:All" target="_blank">click here.</a><br>
            <form method="POST" action="skin.php">
               <table id="loginstyle">
		<tr>
			<td id="intxt">ID-ul skin-ului:</td></center>
			<td><input id="instyle" type="text" name="skin" /></td>
			
		</tr>
		<tr>
			<td colspan="2" style="color:#FF0000">
		        <input name="sbm" type="submit" value="Set skin">
			</td>
		</tr>
		<tr>
		   <td colspan="3" style="color:#FF0000;font-weight:bold;">		
			</td>
		</tr>
		</table>
	</form>
	
<?php
include 'includes/footer.php';
?>
