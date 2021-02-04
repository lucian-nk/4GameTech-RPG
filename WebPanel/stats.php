<title>4GameTech RPG</title>
<?php
include 'includes/header.php';
include 'includes/connection.php';
?>

<?php
	$var = @$_GET['username'] ;
  $trimmed = trim($var);

// check for a search parameter
if (!isset($var))
  {
  echo "<p>Nu ai introdus nici un nume.</p>";
  exit;
  }
 $query = "SELECT * FROM `players` WHERE LOWER(Name) = LOWER('$trimmed') LIMIT 1";
 $result = mysql_query($query);
 $numrows = mysql_num_rows($result);

// If we have no results, offer a google search as an alternative

if ($numrows == 0)
{
  echo "<p>Acest jucator nu este inregistrat in baza nostra de date... </p>";
}
else
{
    while($row = mysql_fetch_array($result))
	{
		$idd =$row['id'];
	}

$BBC = "[img]http://panel.4gametech.com/userid-$idd.png[/img]";
?>
<?php
echo 'HTML Code: ';
?>
<br />
<?php
$HTMLCODE = "<img src='http://panel.4gametech.com/userbar.php?userid=$idd'>";
echo '<input type="text" value="'.$HTMLCODE.'" style="width:350px">';
?>
<br />
<?php
echo 'Forum Code: ';
?>
<br />
<?php
echo '<input type="text" value="'.$BBC.'" style="width:350px">';
	echo "<img src='http://panel.4gametech.com/userbar.php?userid=$idd'>";
	echo "<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />";
}
?>

<?php
include 'includes/footer.php';
?>