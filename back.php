<?php
include "kernel/_load.php";
$back_user = mysql_real_escape_string($_GET['user']);
$results = query ("UPDATE  `beggers` SET  `beers` =  `beers`+1  WHERE `user` =  '$back_user ' LIMIT 1" );
header("Location: $back_user/done");