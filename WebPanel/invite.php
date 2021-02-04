<?php
include 'includes/config.php';
include 'includes/header.php';
?>
<style type="text/css">
table.sample {
	border-width: 1px;
	border-spacing: ;
	border-style: outset;
	border-color: gray;
	border-collapse: separate;
	background-color: white;
}
table.sample th {
	border-width: 1px;
	padding: 1px;
	border-style: solid;
	border-color: gray;
	background-color: rgb(255, 250, 250);
	-moz-border-radius: ;
}
table.sample td {
	border-width: 1px;
	padding: 1px;
	border-style: solid;
	border-color: gray;
	background-color: rgb(255, 250, 250);
	-moz-border-radius: ;
}
</style>

<?php


  // Daca e setata o valoare pt. variabila $pg,
  // Variabila devinita cand e accesat un link din meniu
  if (isset($pg)) {
    // Include fisierul in care e continutul
	include('pagini/'.$pg.'.php');
  }
  else {
if(!isset($_GET['email']))
{
		$_GET['email'] = '';
}
if(!isset($_GET['user']))
{
		$_GET['user'] = '';
}
echo "<title> Email de bun venit</title>";
echo "<b><font color='#FFFFFF'>Pentru a iti chema prietenii pe SA-MP ARENA completeaza campurile de mai jos.<font><br></b>";
$email = $_GET['email'];
$user = $_GET['user'];
if(strlen($email) < 3 || strlen($user) < 3)
{
	echo "<form name='form1' method='get' action='invite.php'>";
	echo "<table id='loginstyle'><tr><td colspan='1'><font color='#FFFFFF' size='2'>User:</td>";
	echo "<td width='294'><input name='user' type='text' id='user' maxlength='60'></td></tr>";
	echo "<tr><td colspan='1'><font color='#FFFFFF' size='2'>Email:</font></td>";
	echo "<td width='294'><input name='email' type='text' id='email' maxlength='60'></td></tr>";
	echo "<tr><td></td><td><input type='submit' name='Submit' value='Trimite'></td></tr>";
	echo "</table></form>";
}
else
{
		$message = "Respectele Mele,$user \n\n Doresc sa te invit pe comunitatea noastra,o comunitate care vrea sa continue ceea ce a lasat in urma 4WD,adica server-ul de SA:MP.Server-ul RPG.RealG.Ro detine gamemode-ul Real Gaming cu update-uri si conturile vechi,cu aceasta ocazie invitandu-te sa rejoci alaturi de vechii prieteni. \n Sper ca vei reveni alaturi de noi pe Real Gaming,exact asa cum a fost lasata de 4WD,cu baza de date, sa fim din nou toti împreuna! \n\n Stima si respect, \n Alin \n Viziteaza site-ul nostru: http://www.samparena.ro";
		mail($email, "Bine ai venit pe SA-MP ARENA,$user", $message, 'From: welcome@samparena.ro');
		header("location index.php");
}


include("includes/footer.php");
  }
?>