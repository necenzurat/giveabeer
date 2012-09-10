<?php
 /**********************************************************************
  * 
  * For mor info look at the *.txt files
  *	
  * load.php - the load file let`s load all things (file to be included)
  * 
  **********************************************************************/

/* time is money */

 	$query_time = explode(' ',microtime());
	$start_time = $query_time[1].substr($query_time[0],1);

/* Load all other files */

	include "config.php";
	include "functions.php";	

// Let`s DO it... the connection of course
	DoConnect(); 

/* Menu shit */
$woot = mysql_real_escape_string($_SERVER['QUERY_STRING']);

$done = explode("/", $woot);
if ($done[1] == "done"){
$woot = $done[0];
}

$check = query ("SELECT * FROM beggers where user= '$woot'");
$check = mysql_fetch_array($check);
$user = $check[0];

