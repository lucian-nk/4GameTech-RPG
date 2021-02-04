<?php 


function sec($s)
{
   return mysql_real_escape_string($s);
}
function get_row($q)
{
     $pq = mysql_query($q);
	 if($pq === FALSE) {
    die(mysql_error()); // TODO: better error handling
}
	 
	 $p = mysql_fetch_array($pq);
	 return $p;
}
?>