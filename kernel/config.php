<?php
 /**********************************************************************
  * 
  * For mor info look at the *.txt files
  *	
  * config.php - enter vars for the db server
  * 
  **********************************************************************/


/**
 * Set up the vars to connect whit.
 *
 * @param string $dbserver
 * @param string $dbuser
 * @param string $dbpassword
 * @param string $dbname
 */

$dbhost = "localhost";						/* server host... 99% always "localhost"*/  

$dbuser = "";							/* server username 	*/

$dbpassword = "";					/* server password	*/

$dbname = "giveabeer";					  		/* the database */


/**	
 * Set some things
 */

// if you are developing coment these
// if you have done dev-ing uncoment these

// no ugly errors must be see */
//	error_reporting(0);

// so we can do large things */
	set_time_limit (0); 



