<?php
include 'includes/config.php';
redirect_not_logged();

include 'includes/header.php';



$f = isset($_GET['prod']) ? $_GET['prod'] : 1;
if($f==0)$f=1;
else if($f > 15)$f=1;
else if($f < 0)$f=1;
if($f == 1) $prodprice = 3;
if($f == 2) $prodprice = 4;
if($f == 3) $prodprice = 5;
if($f == 4) $prodprice = 5;
if($f == 5) $prodprice = 1;
if($f == 6) $prodprice = 2;
if($f == 7) $prodprice = 2;
if($f == 8) $prodprice = 7;
if($f == 9) $prodprice = 4;
if($f == 10) $prodprice = 8;
if($f == 11) $prodprice = 4;
if($f == 12) $prodprice = 6;
if($f == 13) $prodprice = 4;
if($f == 14) $prodprice = 7;
if($f == 15) $prodprice = 5;
$ids = $udata['id'];
$e = $udata['Euro'] - $prodprice;
if($udata['Euro'] < $prodprice)
{
       echo 'Nu ai destul credit!';
}
if($udata['Euro'] >= $prodprice):
?>

<br />
<br />
<h2><b><?php echo "Plata ta de $prodprice € a fost efectuata cu succes si pachetul $shop_types[$f] va sosi in maxim 24 ore! \n Credit actual: $e €";  mysql_query("UPDATE players SET Euro=$e WHERE id=$ids"); ?></b></h2>

<?php endif; include 'includes/footer.php'; ?>