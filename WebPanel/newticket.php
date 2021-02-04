<?php
include 'includes/config.php';
redirect_not_logged();

$idpl = $udata['playerID'];

if(isset($_POST['text']))
{
	if(isset($_POST['titlu']))
	{
		$comm = mysql_real_escape_string($_POST['text']);
		$titlu = mysql_real_escape_string($_POST['titlu']);
		mysql_query("INSERT INTO tickets (name, text, playerid) VALUES ('$titlu','$comm','$idpl')");
		header("location: tickets.php");
	}
}

include 'includes/header.php';
?>
<div class="main-content">
<div class="page-content">
<div class="span11">
<div class="row-fluid">

<div class="span12">
 
<div class="row-fluid">
<div class="span8">
<div class="alert alert-warning">
Daca ai o problema legata de joc sau de forum, poti deschide un ticket, aici pe panel, iar un admin iti va raspunde.
</div>

										
														
<h4>Deschide tichet ajutor</h4>
<hr>


														
<form method="POST" accept-charset="UTF-8"><input name="_token" type="hidden" value="nvKHaxmHIHWdsCr5hM3vB9vHdJVclKLOFlki0mgA">
<label for="name">Titlu ticket: </label>
<textarea class="span10" rows="1" name="titlu" cols="25" id="text" required></textarea>
<label for="text">Detalii despre problema: </label>
<textarea class="span10" rows="5" name="text" cols="50" id="text"  required></textarea>
<br>
<input class="btn btn-small btn-danger" type="submit" value="Deschide tichet">
</form>
</div>
<div class="span4">
<h4>Info</h4>
<ul>
<li>Poate dura pana la 24 de ore pana se va raspunde la ticket.</li>
</ul>
</div>
</div>
 

</div>




</div>
</div>
</div>
</div>
  
