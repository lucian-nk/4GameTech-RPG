<?php

include("include/connection.php");
$rs = mysql_query('SELECT playerEmail FROM playeraccounts');
while(list($email) = mysql_fetch_row($rs))
{
    if($email != "")
	{
		$message = "Doresc sa te invit pe comunitatea noastra! Server-ul nostru de samp detine un gamemode bine stabilit, care este updatat zilnic. Cu aceasta ocazie invitandu-te sa joci alaturi de noi. \n Sper ca vei veni alaturi de noi pe server! \n\n Stima si respect, \n iStorm.";
		mail($email, "Twister samp server", $message, 'From: welcome@twisterrpg.ro');
	}
}

?>