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
function createRandomPassword()
{
    $chars = "abcdefghijkmnopqrstuvwxyz023456789";
    srand((double)microtime()*1000000);
    $i = 0;
    $pass = '' ;
    while ($i <= 7) {

        $num = rand() % 33;

        $tmp = substr($chars, $num, 1);

        $pass = $pass . $tmp;

        $i++;

    }
    return $pass;
}
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
echo "<title> Recuperare parola</title>";
echo "<b><font color='#FFFFFF'>Pentru a iti recupera parola completeaza campurile de mai jos.<font><br></b>";
$email = $_GET['email'];
$user = $_GET['user'];
if(strlen($email) < 3 || strlen($user) < 3)
{
	echo "<form name='form1' method='get' action='mail.php'>";
	echo "<table id='loginstyle'><tr><td colspan='1'><font color='#FFFFFF' size='2'>User:</td>";
	echo "<td width='294'><input name='user' type='text' id='user' maxlength='60'></td></tr>";
	echo "<tr><td colspan='1'><font color='#FFFFFF' size='2'>Email:</font></td>";
	echo "<td width='294'><input name='email' type='text' id='email' maxlength='60'></td></tr>";
	echo "<tr><td></td><td><input type='submit' name='Submit' value='Trimite'></td></tr>";
	echo "</table></form>";
}
else
{
	$sql = "SELECT * FROM players WHERE LOWER(Name) = LOWER('$user') and LOWER(Email) = LOWER('$email')";
	$result = mysql_query($sql);
	$rows = mysql_num_rows($result);
	if($rows)
	{
	    $passcont = createRandomPassword();
		$sql = "UPDATE players SET Password = SHA1('$passcont') WHERE Name = '$user'";
	    $resultnew = mysql_query($sql);
	    $message = "Hello, \n\n Username: $user \n\n Password: $passcont \n\n Visit our website: http://www.realg.ro";
		mail($email, 'Parola cont', $message, 'From: noreply@realg.ro');
		echo "<font color='#FFFFFF'>Un email continand datele contului dumneavoastra a fost trimis pe adresa de email.";
		echo "<br> Email-ul va ajunge in maxim 5 minute.</font>";
	}
	else
	{
		$sql = "SELECT * FROM players WHERE LOWER(Name) = LOWER('$user') and LOWER(Email) = LOWER('$email')";
		$resultt = mysql_query($sql);
		$rowss = mysql_num_rows($resultt);
		if($rowss==0)
		{
		   echo "<b><font color='#FFFFFF'>User sau e-mail gresit.<br></font></b>";
		   echo "<form name='form1' method='get' action='mail.php'>";
	           echo "<table id='loginstyle'><tr><td colspan='1'><font color='#FFFFFF' size='2'>User:</font></td>";
	           echo "<td width='294'><input name='user' type='text' id='user' maxlength='60'></td></tr>";
	           echo "<tr><td colspan='1'><font color='#FFFFFF' size='2'>Email:</font></td>";
	           echo "<td width='294'><input name='email' type='text' id='email' maxlength='60'></td></tr>";
	           echo "<tr><td></td><td><input type='submit' name='Submit' value='Trimite'></td></tr>";
	           echo "</table></form>";
		}
		
	}
}


include("includes/footer.php");
  }
?>