<?
$user = mysql_real_escape_string($_POST['user']);
$mail = $_POST['mail'];
echo "<br /><br /><br /><br />";

$reserved = array("about", "go", "submit", "back", "god");
if (in_array($user, $reserved)) {
     echo "<strong>Sorry, the name $user is reserved, please try another.</strong>";
     $error = 1;
}


if (!validate_username($user)){
   echo ("<strong>Invalid username or empty please try again. </strong>");
$error = 1;
}

if(!preg_match('/^([0-9a-zA-Z]([-.\w]*[0-9a-zA-Z])*@([0-9a-zA-Z][-\w]*[0-9a-zA-Z]\.)+[a-zA-Z]{2,9})$/',$mail)){
			   echo ('<strong>Invalid email proved, the email must be in valid email format (such as name@domain.tld).</strong>');
			   $error = 1;
			 }
if ($error){
echo "<br /><br /><a href=\".\">Click here to return</a>"; 
}




    
if (!$error){
	$unique = query ("SELECT * FROM beggers where user= '$user'");
	$unique = mysql_fetch_assoc($unique);
	if (!$unique == FALSE){ 
		echo "<br><strong>The username already exists</strong><br /><br /><a href=\".\">Click here to return and select another one</a>";
	}
	else {
		query ("INSERT INTO `beggers` (`user`, `mail`, `beers`) 
							   VALUES ('$user', '$mail', '0')");
	echo "<br /><br /><br /><h1>congratz,</h1> now you can beg online <strong><a href='$user'>here</a></strong>";
	
	}}
	
echo "<br /><br /><br /><br /><br /><br /><br />";