<?php

$user = mysql_real_escape_string($_POST['who']);
$what = mysql_real_escape_string($_POST['what']);

$check = query("SELECT * FROM beggers where user='$user'");
$check = mysql_fetch_array($check);


if (empty($check)){
	    echo "omfg something wen't wrong, but lucky some elite monkeys are working to fix the problem";
	}


$mail = $check['mail'];
$user = $check['user']; 


if ($what == "beer"){
header("Location: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=$mail&item_name=Give A Beer to $user&amount=3.00&currency_code=USD&no_note=1&no_shipping=1&rm=1&return=http://giveabeer.com/back.php?user=$user&currency_code=USD&bn=PP-DonationsBF:btn_donateCC_LG.gif:NonHosted");
exit();
}

if ($what == "sixpack"){
header("Location: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=$mail&item_name=Give A Six-Pack to $user&amount=10.00&currency_code=USD&no_note=1&no_shipping=1&rm=1&return=http://giveabeer.com/back.php?user=$user&currency_code=USD&bn=PP-DonationsBF:btn_donateCC_LG.gif:NonHosted");
exit();
}

if ($what == "keg"){
header("Location: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=$mail&item_name=Give A Keg to $user&amount=30.00&currency_code=USD&no_note=1&no_shipping=1&rm=1&return=http://giveabeer.com/back.php?user=$user&currency_code=USD&bn=PP-DonationsBF:btn_donateCC_LG.gif:NonHosted");
exit();
}
