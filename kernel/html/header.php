<!DOCTYPE html> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
    <title><?php if ($woot == "") {echo "Give a Beer!";} if ($woot == "about") {echo "About Giveabeer";}  { echo "Give a Beer to $user";}?></title> 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
    <? if ($woot == ""){?><meta name="description" content="Givea A Beer is the most simple way to donate a symbolic money in beer." /><?}?>
    <? if ($user){?><meta name="description" content="Givea A Beer to <?echo $user;?>" /><?}?>    
    <meta name="keywords" content="beer, booze, money, paypal, donate, <?echo $user;?>" /> 
    <link href="http://localhost/giveabeer/gfx/style.css" rel="stylesheet" /> 
    <link href="./favicon.ico" rel="shortcut icon" /> 
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans:regular,bold&subset=latin' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js" ></script>
</head> 
<body onload="document.form.user.focus();">
<div id="header">
    <a href="http://giveabeer.com/" title="Givea A Beer"><img src="gfx/giveabeer.png" alt="Givea A Beer"/></a>
    <a href="/about" title="About" style="float:right">About Give a Beer!</a>
</div>
	<div id="content">