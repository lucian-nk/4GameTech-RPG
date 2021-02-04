<?php
include 'includes/connection.php';
header("Content-type: " . image_type_to_mime_type(IMAGETYPE_PNG));
function isok($text)
{
	$ok = 1;
	for($i = 0;$i<strlen($text);$i++)
		if(!ischar($text[$i]))
			$ok = 0;
	if($ok == 1)
		return 1;
	else
		return 0;
}	
function ischar($text)
{
	if($text == '1' || $text == '2') return 1;
	if($text == '3' || $text == '4') return 1;
	if($text == '5' || $text == '6') return 1;
	if($text == '7' || $text == '8') return 1;
	if($text == '9' || $text == '0') return 1;
	else	return 0;
}
	
	    $userid = 1;
		$im = imagecreatefrompng('stats1.png');
		$sql = "SELECT * FROM `players` WHERE ID='$userid' ";
		$result = mysql_query($sql);
		while($row = mysql_fetch_array($result))
		{
			$status = $row['Status'];
			$nume =$row['Name'];
			$level = $row['Level'];
			$factionid =$row['Leader'] + $row['Member'];
			$leader = $row['Leader'];
			$number =$row['PhoneNumber'];
			$warn = $row['Warns'];
			$rank = $row['Rank'];
			$job = $row['Job'];
 			$hours = $row['HoursPlayed'];
		}
		$font ='GOTHICB.TTF';
		$stsname = "NULL";
		$white = imagecolorallocate($im, 255, 255, 255);
		if($status == 1)
		{
			$stsname = "Online";
		}
		else
		{
			$stsname = "Offline";
		}
		$swarn = $warn . "/3";
		imagefttext($im, 7.28 , 0, 68.5, 10, $white, $font, $stsname);
		imagefttext($im, 7.28 , 0, 87.5, 20.8, $white, $font, $nume);
		imagefttext($im, 7.28 , 0, 164.5, 10, $white, $font, $level);
		imagefttext($im, 7.28 , 0, 327.5, 11, $white, $font, $hours);
		imagefttext($im, 7.28 , 0, 399.5, 11.5, $white, $font, $swarn);
		imagefttext($im, 7.28 , 0, 409.5, 20.3, $white, $font, $number);
		$sjob = "Null";
		if($job == 1) $sjob = "Detectiv";
		else if($job == 2) $sjob = "Avocat";
		else if($job == 3) $sjob = "Prostituata";
		else if($job == 4) $sjob = "Dealer de Droguri";
		else if($job == 5) $sjob = "Spargator de masini";
		else if($job == 6) $sjob = "Reporter TV";
		else if($job == 7) $sjob = "Mecanic";
		else if($job == 8) $sjob = "Bodyguard";
		else if($job == 9) $sjob = "Dealer de Arme";
		else if($job == 10) $sjob = "Dealer de Masini";
		else if($job == 12) $sjob = "Boxer";
		else if($job == 15) $sjob = "Vanzator de Ziare";
		else if($job == 16) $sjob = "Camionagiu";
		else if($job == 17) $sjob = "Fermier";
		else if($job == 20) $sjob = "Maturator";
		else if($job == 21) $sjob = "Maturator de Strada";
		else $sjob = "Somer";
		imagefttext($im, 7.28 , 0, 297, 20.3, $white, $font, $sjob);
		if($factionid == 1) $faction = "Politia Romana";
		else if($factionid == 2) $faction = "SRI";
		else if($factionid == 3) $faction = "Armata Romana";
		else if($factionid == 4) $faction = "SMURD";
		else if($factionid == 5) $faction = "Rromii";
		else if($factionid == 6) $faction = "Taxi";
		else if($factionid == 7) $faction = "School Instructor";
		else if($factionid == 8) $faction = "Hitman";
		else if($factionid == 9) $faction = "News Reporter";
		else if($factionid == 10) $faction = "Remorcari Auto";
		else if($factionid == 11) $faction = "Clanul Sadoveanu";
		else if($factionid == 12) $faction = "Clanul Capone";
		else if($factionid == 13) $faction = "Clanu Duduianu";
		else if($factionid == 14) $faction = "Clanul Corsicanu";
		else if($factionid == 15) $faction = "Clanul Tobosaru";
		else if($factionid == 16) $faction = "Clanul Camataru";
		else $faction = "Civil";
		imagefttext($im, 7.28, 0, 179, 20.9, $white, $font, $faction);
		imagepng($im);
		imagedestroy($im);
?>

