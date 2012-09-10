<?php
include "kernel/_load.php";
/* Get all users */
if (!empty($user)){
		$load = "kernel/html/beg.php";
}
else {
	switch ($woot){
		case "":
			$load =  "kernel/html/home.php";
			break;    
			
		case "submit":
			$load = "kernel/html/submit.php";
			break;
		
		case "about":
			$load = "kernel/html/about.php";
			break;
		
		case "go":
			include "kernel/html/go.php";
			break;
		
		case "sitemap.xml":
			include "kernel/sitemap.php";
			exit();
		
		default:
			$load = "kernel/html/error.php";
			break;
		}
}

	include "kernel/html/header.php";

if (file_exists($load)){
	include ($load);
}

include "kernel/html/footer.php";