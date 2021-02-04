<?php
include 'includes/config.php';
redirect_not_logged();
include 'includes/header.php';
if(isset($_POST['sbm'])){
$mail = sec($_POST['mail']);
$tskin = "UPDATE playeraccounts SET playerEmail = '$mail' WHERE playerName = '$username'";
mysql_query($tskin);
header('location: index.php');
}
?>

<div class="main-content">
<div class="page-content">
<div class="span12">
<div class="row-fluid">

<div class="span12">
 
		<div class="page-header">
		<h1>Schimba-ti adresa de email</h1>
		</div>
        <table id="loginstyle">
		<tr>
			<label for="email">New email:</label><input name="mail" type="text" value="" id="instyle">
			
		</tr>
		<tr>
		   <td colspan="3" style="color:#FF0000;font-weight:bold;">		
			</td>
		</tr>
		</table>
	</form>

<input class="btn btn-inverse" name="sbm" type="submit" value="Set mail">	
 
</div>
	
	
</div>
</div>
</div>
</div>
