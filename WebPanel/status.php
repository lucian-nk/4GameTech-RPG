<?php
include 'includes/config.php';
include 'includes/header.php';
?>
<form name="form" action="status.php" method="get">
  Cauta jucator:<br />
  <input type="text" name="user" />
  <br><input type="submit" value="Cauta" /><br>
<?php
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
	if($text == 'a' || $text == 'A') return 1;
	if($text == 'q' || $text == 'Q') return 1;
	if($text == 'w' || $text == 'W') return 1;
	if($text == 'e' || $text == 'E') return 1;
	if($text == 'r' || $text == 'R') return 1;
	if($text == 't' || $text == 'T') return 1;
	if($text == 'y' || $text == 'Y') return 1;
	if($text == 'u' || $text == 'U') return 1;
	if($text == 'i' || $text == 'I') return 1;
	if($text == 'o' || $text == 'O') return 1;
	if($text == 'p' || $text == 'P') return 1;
	if($text == 's' || $text == 'S') return 1;
	if($text == 'd' || $text == 'D') return 1;
	if($text == 'f' || $text == 'F') return 1;
	if($text == 'g' || $text == 'G') return 1;
	if($text == 'h' || $text == 'H') return 1;
	if($text == 'j' || $text == 'J') return 1;
	if($text == 'k' || $text == 'K') return 1;
	if($text == 'l' || $text == 'L') return 1;
	if($text == 'z' || $text == 'Z') return 1;
	if($text == 'x' || $text == 'X') return 1;
	if($text == 'c' || $text == 'C') return 1;
	if($text == 'v' || $text == 'V') return 1;
	if($text == 'b' || $text == 'B') return 1;
	if($text == 'n' || $text == 'N') return 1;
	if($text == 'm' || $text == 'M') return 1;
	if($text == '@' || $text == '.') return 1;
	if($text == '[' || $text == '_' || $text == ']') return 1;
	if($text == '(' || $text == ')') return 1;
	if($text == '1' || $text == '2') return 1;
	if($text == '3' || $text == '4') return 1;
	if($text == '5' || $text == '6') return 1;
	if($text == '7' || $text == '8') return 1;
	if($text == '9' || $text == '0') return 1;
	else	return 0;
}
	if(isset($_GET['user']))
	{
		$name = mysql_real_escape_string($_GET['user']);
		if(isok($name))
		{
			$sql = "SELECT * FROM `players` WHERE Name='$name'";
			$result = mysql_query($sql);
			$rows = mysql_num_rows($result);
			if($rows == 0)
			{
				echo 'Acest nume nu exista!';
			}
			else
			{
				$row = mysql_fetch_array($result);
				$id = $row['id'];
				echo "<br><br><img src='http://9play.ro/rpg/userbar.php?id=$id'>";
				echo "<br><br><img src='http://9play.ro/rpg/userbarid-$id.png'>";
				$FORUMCODE = "[img]http://9play.ro/rpg/userbarid-$id.png[/img]";
				$HTMLCODE = "<img src='http://9play.ro/rpg/userbarid-$id.png'>";
				echo '<br>Forum code <input type="text" value="'.$FORUMCODE.'" style="width:350px"><br>';
				echo 'Html code <input type="text" value="'.$HTMLCODE.'" style="width:350px">';
			}
		}
	
	}

include 'includes/footer.php'; ?>