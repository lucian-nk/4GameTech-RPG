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
if(!isset($_GET['user']))
{
		$_GET['user'] = '';
}
echo "<title> Cauta un jucator</title>";
echo "<b><font color='#FFFFFF'>Pentru a afla datele unui jucator completeaza campurile de mai jos.<font><br></b>";
$user = $_GET['user'];
if(strlen($user) < 3)
{
	echo "<form name='form1' method='get' action='cauta.php'>";
	echo "<table id='loginstyle'><tr><td colspan='1'><font color='#FFFFFF' size='2'>User:</td>";
	echo "<td width='294'><input name='user' type='text' id='user' maxlength='60'></td></tr>";
	echo "<tr><td></td><td><input type='submit' name='Submit' value='Trimite'></td></tr>";
	echo "</table></form>";
}
else
{
	$sql = "SELECT * FROM playeraccounts WHERE LOWER(playerName) = LOWER('$user')";
	$result = mysql_query($sql);
	$rows = mysql_num_rows($result);
	$cautare = get_row($sql);
	if($rows)
	{
	    $id=$cautare['id'];
	    header("location: index.php?id=$id");
	}
	else
	{
		$sql = "SELECT * FROM playeraccounts WHERE LOWER(playerName) = LOWER('$user')";
		$resultt = mysql_query($sql);
		$rowss = mysql_num_rows($resultt);
		if($rowss==0)
		{
		   echo "<b><font color='#FFFFFF'>User gresit.<br></font></b>";
		   echo "<form name='form1' method='get' action='cauta.php'>";
	           echo "<table id='loginstyle'><tr><td colspan='1'><font color='#FFFFFF' size='2'>User:</font></td>";
	           echo "<td width='294'><input name='user' type='text' id='user' maxlength='60'></td></tr>";
	           echo "<tr><td></td><td><input type='submit' name='Submit' value='Trimite'></td></tr>";
	           echo "</table></form>";
		}
		else { $id=$cautare['id'];
	    header("location: index.php?id=$id");}
		
	}
}


include("includes/footer.php");
  }
?>