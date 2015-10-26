<?php
require_once('../include/inc_config.php');
if($path_stored_quizzes != '' &&
  $admin_email != '' &&
  $hostname != '' &&
  $username != '' && 
  $password != '' && 
  $db != ''
  ){
  header('location:../login.php');
}
function replace_line_in_file($filename,$string_replace, $text_to_replace = null)
{
  // split the string up into an array
  $file_array = array();
 
  $file = fopen($filename, 'rt');
  if($file)
  {
    while(!feof($file))
    {
      $val = fgets($file);
      if(is_string($val))
        array_push($file_array, $val);
    }
    fclose($file);
  }
 
  // delete from file
  for($i = 0; $i < count($file_array); $i++)
  {
    if(strstr($file_array[$i], $string_replace))
    {
      if($file_array[$i] == $string_replace . "\n"){ 
       if($text_to_replace){
        $file_array[$i] = $text_to_replace. "\n";
       }else{
        $file_array[$i] = '';
       }
      }
      if($file_array[count($file_array)-1] == $string_replace){ 
       if($text_to_replace){
        $file_array[count($file_array)-1] = $text_to_replace;
       }else{
        $file_array[count($file_array)-1] = '';
       }
      }      
    }
  }
 
  // write it back to the file
  $file_write = fopen($filename, 'wt');
  if($file_write)
  {
    fwrite($file_write, implode("", $file_array));
    fclose($file_write);
  }
}
/***************************************************************************************/
if (! defined("BASE_PATH")) define('BASE_PATH',
isset($_SERVER['DOCUMENT_ROOT']) ? $_SERVER['DOCUMENT_ROOT'] :
substr($_SERVER['PATH_TRANSLATED'],0,
-1*strlen($_SERVER['SCRIPT_NAME'])));
$_SERVER['DOCUMENT_ROOT']=BASE_PATH;

if($path_stored_quizzes != '' &&
  $admin_email != '' &&
  $hostname != '' &&
  $username != '' && 
  $password != '' && 
  $db != ''
  ){
  header('location:../login.php');
  exit();
}

 /*************************************************/
 if(isset($_POST['store']) && $_POST['store'] != ''){
  if(!is_dir($_SERVER['DOCUMENT_ROOT'].'/'.$_POST['store'])){
    echo 'Quizzes\'s archive path not exists!';
    exit();
  }
  if(!is_writable($_SERVER['DOCUMENT_ROOT'].'/'.$_POST['store'])) {
   echo 'Quizzes\'s archive path must be writable!';
   exit();
  }
 }else{
  echo 'Wrong Quizzes\'s archive path!';
  exit();
 }
 /**************************************************/
 if(!isset($_POST['email']) || $_POST['email'] == '' ){
  echo 'E-mail required!';
  exit();
 }
 /**************************************************/
 if(!isset($_POST['host']) || $_POST['host'] == ''){
  echo 'Host name can\'t be empty!';
  exit();
 }
 /**************************************************/
 if(!isset($_POST['user']) || $_POST['user'] == ''){
  echo 'DB user can\'t be empty!';
  exit();
 } 
 /**************************************************/
 if(!isset($_POST['pass']) || $_POST['pass'] == ''){
  echo 'DB password can\'t be empty!';
  exit();
 } 
 /**************************************************/
 if(!isset($_POST['db_name']) || $_POST['db_name'] == ''){
  echo 'DB name can\'t be empty!';
  exit();
 } 
 /**************************************************/
 if(isset($_POST['host']) && 
    $_POST['host']!= '' && 
    isset($_POST['user']) &&
    $_POST['user'] != '' && 
    isset($_POST['pass']) &&
    $_POST['pass'] != '' &&
    isset($_POST['db_name']) &&
    $_POST['db_name'] != ''){
    $connection = @mysql_connect($_POST['host'], $_POST['user'], $_POST['pass']);     	
 	$erroredb= mysql_error();
 	if($erroredb != ''){
 	 echo $erroredb; 
 	 exit();
 	}	
    $sql = "CREATE DATABASE IF NOT EXISTS ".$_POST['db_name']." DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci";
    @mysql_query($sql,$connection); 
    mysql_select_db($_POST['db_name'],$connection);  	
    $sql = "CREATE TABLE IF NOT EXISTS answers (
      id bigint(20) NOT NULL AUTO_INCREMENT,
      id_question bigint(20) NOT NULL,
      id_quiz bigint(20) NOT NULL,
      answer longtext NOT NULL,
      proper tinyint(1) NOT NULL,
      UNIQUE KEY id (id)
    )";
    @mysql_query($sql,$connection); 
    $sql = "CREATE TABLE IF NOT EXISTS questions (
      id bigint(20) NOT NULL AUTO_INCREMENT,
      id_quiz bigint(20) NOT NULL,
      questions longtext NOT NULL,
      UNIQUE KEY id (id)
    )";
    @mysql_query($sql,$connection); 
    $sql = "CREATE TABLE IF NOT EXISTS quizzes (
      id bigint(20) NOT NULL AUTO_INCREMENT,
      code varchar(8) NOT NULL,
      name varchar(250) NOT NULL,
      creation_date datetime NOT NULL,
      status tinyint(1) NOT NULL,
      title_visible tinyint(1) NOT NULL,
      min_answer int(11) NOT NULL,
      content longtext NOT NULL,
      error_content longtext NOT NULL,
      type varchar(13) NOT NULL,
      random_question tinyint(1) NOT NULL,
      random_num int(11) NOT NULL,
      steppize tinyint(1) NOT NULL,
      min_answer_option tinyint(1) NOT NULL,
      email_quiz tinyint(1) NOT NULL,
      email_subject varchar(250) NOT NULL,
      email_receiver varchar(250) NOT NULL,
      email_content longtext NOT NULL,
      UNIQUE KEY id (id)
    )";
    @mysql_query($sql,$connection);         	
  @mysql_close($connection);
 }

$sfw_path1 = (substr(dirname($_SERVER['REQUEST_URI']),0,1) == '/') ? substr(dirname($_SERVER['REQUEST_URI']),1) : dirname($_SERVER['REQUEST_URI']);
$sfw_path = str_replace('/wizard','',$sfw_path1);
$filename = $_SERVER['DOCUMENT_ROOT'].'/'.$sfw_path.'/include/inc_config.php';

replace_line_in_file($filename,'$sfw_path = \'\';','$sfw_path = \''.$sfw_path.'\';');
replace_line_in_file($filename,'$hostname = \'\';','$hostname = \''.$_POST['host'].'\';');
replace_line_in_file($filename,'$username = \'\';','$username = \''.$_POST['user'].'\';');
replace_line_in_file($filename,'$password = \'\';','$password = \''.$_POST['pass'].'\';');
replace_line_in_file($filename,'$db = \'\';','$db = \''.$_POST['db_name'].'\';');
replace_line_in_file($filename,'$path_stored_quizzes = \'\';','$path_stored_quizzes = \''.$_POST['store'].'\';');
replace_line_in_file($filename,'$admin_email = \'\';','$admin_email = \''.$_POST['email'].'\';');
echo 'ok';
?>