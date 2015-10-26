<?php
require_once('inc_functions.php');
require_once('inc_paths.php');
$script_namen = explode('/',$_SERVER["SCRIPT_NAME"]);
/****************** control for wizaard ***************/
if(
  ($path_stored_quizzes == '' || 
  $admin_email == '' || 
  $hostname == '' || 
  $username == '' || 
  $password == '' || 
  $db == '') && end($script_namen) != 'wizard.php'
  ){
  header('location:wizard/wizard.php');
}

/* ********************** database connection *************************************/
function execute($rsql) {
	$conn = mysql_connect(hostname,username,password) or die ("Error: could not connect to database");
	$db = mysql_select_db(db);
	$result = mysql_query($rsql) or die (mysql_error()); 
	return $result;
	mysql_close($conn);
}
?>