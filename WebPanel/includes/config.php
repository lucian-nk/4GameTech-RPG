<?php
ob_start();
session_start();
include 'connection.php';
include 'functions.php';

$logged_in = 0;
if(isset($_SESSION['username']) && isset($_SESSION['password'])){
	$username = sec($_SESSION['username']);
	$password = sec($_SESSION['password']);
	
	$udata = get_row("SELECT * FROM players WHERE Name='$username' && Password='$password'");
	if(isset($udata['ID'])){
	    $logged_in = 1;
		if(isset($_GET['logout'])){
			unset($_SESSION['username']);
			unset($_SESSION['password']);
            mysql_query("UPDATE players SET rpgon=0 WHERE Name='$username'"); 
			header('location: index.php');
		}
	}
}
function redirect_not_logged()
{
    $username = sec($_SESSION['username']);
    $password = sec($_SESSION['password']);
	
    $udata = get_row("SELECT * FROM players WHERE Name='$username' && Password='$password'");
    $id = $udata['ID'];
    $q = mysql_query("SELECT * FROM `players` WHERE ID = $id");
	while($row = mysql_fetch_array($q))
	{
	     $rpg = $row['rpgon'];
	}
	if($rpg == 0) 
	{	
	echo " Not Logged In "; 
	header('location: index.php');
	}
	
}
// vars
$member_types = array(
	'Civilian',
	'Los Santos Police Department',
	'F.B.I',
	'National Guard',
	'Paramedic Department',
	'Guvernment',
	'The Russian Mafia',
	'Grove Street',
	'Los Aztecas',
	'The Rifa',
	'Ballas',
	'Los Vagos',
	'Hitman Agency',
	'School Instructors',
	'Taxi Company',
	'News Reporters',
	'Las Barrancas Taxi Company',
	'Las Barrancas Paramedic Department'
);
$shop_types = array(0,
	'Bullet',
	'Cheetah',
	'FCR-900',
	'Clear 10FP',
	'Golden Account',
	'Infernus',
	'Change Nick',
	'Turismo',
	'Clear 1 Warn',
);
$rank = array(

	'Civil',
	'Rank 1',
	'Rank 2',
	'Rank 3',
	'Rank 4',
	'Rank 5',
	'Rank 6',
	'Leader'
);

$account_types = array(
	'No',
	'Yes' 
);

$status_types = array(
	'<font color="#FF0000">Offline</font>',
	'<font color="#0DFF00">Online</font>',
	'<font color="#FEC300">Sleep</font>'
);

$status1_types = array(
	'<font color="#FF0000">&#8226</font>',
	'<font color="#0DFF00">&#8226</font>',
	'<font color="#0DFF00">&#8226</font>'
);
$ban_type = array(0, 'N', 'I');
$admins56 = array(0, 'Trial Admin', 'Junior Admin', 'General Admin', 'Head Admin', 'Lead Admin', 'Manager');
$helpers56 = array(0, 'Trial Helper', 'Helper', 'Lead Helper');

?>