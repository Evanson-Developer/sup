<?php
/*******************************************
************** WARNING!!! *******************
** if you want change this file be sure    **
** save it in UTF-8 because there are      **
** some special chars like polish language **
*********************************************
*********************************************/
/*
 This file will contain some public function
*/
/* create $_SERVER['DOCUMENT_ROOT'] variable */
if (! defined("BASE_PATH")) define('BASE_PATH',
isset($_SERVER['DOCUMENT_ROOT']) ? $_SERVER['DOCUMENT_ROOT'] :
substr($_SERVER['PATH_TRANSLATED'],0,
-1*strlen($_SERVER['SCRIPT_NAME'])));
$_SERVER['DOCUMENT_ROOT']=BASE_PATH;

/* read js files 
 This function read all file js name in specifi folder and put them in dom as script file
 so you have add simple a file in folder to add it in dom of all page ;-)
 N.B. the files will be put in alphabetical order (e.g. 01_a.js,02_b.js,a.js etc...)
 to exclude one or more file from this function you have to valorize $arr_exclude variable 
 (e.g. 
  read_dir_js('your_dir','02_b,a') 
  with this you load only "01_a.js" file
  assumind that in your folder there are these files 
  1) 01_a.js
  2) 02_b.js
  3) a.js 
*/
 
 function read_dir_js($dir,$arr_exclude = null){
  $arr_js = array();
  $result = '';
  $arr_excludex = '';
  if ($arr_exclude != null) $arr_excludex = explode(',',$arr_exclude);
  if (is_dir($dir)) {
    if ($dir_handle = opendir($dir)) {
        while (($file = readdir($dir_handle)) !== false) {
            if((!is_dir($file))&($file!=".")&($file!="..")){
              if ($arr_exclude != null){
                if(!in_array($file,$arr_excludex))
                $arr_js[] = $dir.$file;
              }else{
                $arr_js[] = $dir.$file;
              }
            }
        }
        closedir($dir_handle);
    }
    sort($arr_js);
    foreach($arr_js as $js){
     $result .= '<script type="text/javascript" src="'.$js.'"></script>';
    }    
    return $result;
  }
 } 

	   
/* Functon to replace in a string the key of an array with it's value ($array variable must be an array) */	   
function replaceKeyVal($str,$array) { 
   return str_replace(array_keys($array), array_values($array), $str);    
} 
/* Functon to replace in a string the value of an array with it's key ($array variable must be an array) */
function replaceKeyValViceversa($str,$array) { 
   return str_replace(array_values($array), array_keys($array), $str);    
}

/* function to replace special chars */	 
function replaceSpecial($str){
/* define a variable to parse a special chars array */
$array_special = array(
		   "Ą" => "&#260;",
		   "Ć" => "&#262;",
		   "Ę" => "&#280;",
		   "Ł" => "&#321;",
		   "Ń" => "&#323;",
		   "Ó" => "&#211;",
		   "Ś" => "&#346;",
		   "Ź" => "&#377;",
		   "Ż" => "&#379;",
		   "ą" => "&#261;",
		   "ć" => "&#263;",
		   "ę" => "&#281;",
		   "ł" => "&#322;",
		   "ń" => "&#324;",
		   "ó" => "&#243;",
		   "ś" => "&#347;",
		   "ź" => "&#378;",
		   "ż" => "&#380;"	   
		 );
 return replaceKeyVal($str,$array_special);
}
/* function to replace viceversa special chars for read entities in an not html place */	 
function replaceSpecialViceversa($str){
/* define a variable to parse a special chars array */
$array_special = array(
		   "Ą" => "&#260;",
		   "Ć" => "&#262;",
		   "Ę" => "&#280;",
		   "Ł" => "&#321;",
		   "Ń" => "&#323;",
		   "Ó" => "&#211;",
		   "Ś" => "&#346;",
		   "Ź" => "&#377;",
		   "Ż" => "&#379;",
		   "ą" => "&#261;",
		   "ć" => "&#263;",
		   "ę" => "&#281;",
		   "ł" => "&#322;",
		   "ń" => "&#324;",
		   "ó" => "&#243;",
		   "ś" => "&#347;",
		   "ź" => "&#378;",
		   "ż" => "&#380;"	   
		 );
 return replaceKeyValViceversa($str,$array_special);
}

/* formatting numbers */
function num_formatt($string){
 return number_format($string,2,',','.');
}

/* formatting string to utf_decode and duble quot for database*/
function str_db($string){
 $string = replaceSpecial($string);
 return utf8_decode(str_replace('"','&quot;',$string));
}

/* count total record of a DB table */
/* Uncomment this for wordpress use and comment the next equal function
function countRec($record,$table,$where) {
global $wpdb;
$sql = "SELECT * FROM $table $where";
$results = $wpdb->get_results($sql);
   return count($results);
}*/

function countRec($record,$table,$where) {
$sql = "SELECT count($record) FROM $table $where";
$result = execute($sql);
  while ($row = mysql_fetch_array($result)) {
   return $row[0];
  }
}

/* delete a not empty directory */
function deleteDirectory($dir) {
    if (!file_exists($dir)) return true;
    if (!is_dir($dir)) return unlink($dir);
    foreach (scandir($dir) as $item) {
        if ($item == '.' || $item == '..') continue;
        if (!deleteDirectory($dir.'/'.$item)) return false;
    }
    return rmdir($dir);
}

/* delete all files in a directory */
function emptyDirectory($dir) {
    if (!file_exists($dir)) return true;
    if (!is_dir($dir)) return unlink($dir);
    foreach (scandir($dir) as $item) {
        if ($item == '.' || $item == '..') continue;
        if (!deleteDirectory($dir.'/'.$item)) return false;
    }
}

/* delete all files with no extension in array ($exts must be a string comma separated e.g.: jpg,bmp,gif -> this extension will be not deleted) */
function emptyDirectory_ext($dir,$exts) {
    if (!file_exists($dir)) return true;
    if (!is_dir($dir)) return unlink($dir);
    foreach (scandir($dir) as $item) {
        $not_ext = implode(',',$exts);
        $ext = implode('.',$item);
        $ext_file = end($ext);
        if ($item == '.' || $item == '..' || !in_array($ext_file,$not_ext)) continue;
        if (!deleteDirectory($dir.'/'.$item)) return false;
    }
}

/* format date for DB */
function conv_date_db($data){
  $array_d_format = explode('/',date_format);
  $array_date = explode ('/', $data);
  $final_array = array(substr($array_d_format[0],0,1) => $array_date[0],substr($array_d_format[1],0,1) => $array_date[1],substr($array_d_format[2],0,1) => $array_date[2] );
  foreach($final_array as $key => $val){
   if(strtolower($key) == 'd') $d = $val;
   if(strtolower($key) == 'm') $m = $val;
   if(strtolower($key) == 'y') $y = $val;
  } 
  return "$y/$m/$d";
}

/* language for date and time */
function isWin(){
  $sys = strtoupper(PHP_OS); 
    if(substr($sys,0,3) == "WIN"){
        return TRUE;
    }
    return FALSE;
}
$localString = "it_IT"; 
if(isWin()){
    $localString = "ita_ITA";
} 
setlocale(LC_TIME, $localString);

/* format date for view */
function view_date($data){
  $array_d_format = explode('/',date_format);
  $f_dat = (strtolower(substr($array_d_format[0],0,1)) == 'd' || strtolower(substr($array_d_format[0],0,1)) == 'm') ? strtolower(substr($array_d_format[0],0,1)) : strtoupper(substr($array_d_format[0],0,1));
  $f_dat .= '/';
  $f_dat .= (strtolower(substr($array_d_format[1],0,1)) == 'd' || strtolower(substr($array_d_format[1],0,1)) == 'm') ? strtolower(substr($array_d_format[1],0,1)) : strtoupper(substr($array_d_format[1],0,1));
  $f_dat .= '/';
  $f_dat .= (strtolower(substr($array_d_format[2],0,1)) == 'd' || strtolower(substr($array_d_format[2],0,1)) == 'm') ? strtolower(substr($array_d_format[2],0,1)) : strtoupper(substr($array_d_format[2],0,1));
  return date($f_dat,strtotime($data));
}

/* this function will replace a line in a file if it equals the $text_to_replace parameter else,if $text_to_replace = null, it will delete the line */
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

/* GET IP ADDRESS */
function getIpAddress() {
return (empty($_SERVER['HTTP_CLIENT_IP'])?(empty($_SERVER['HTTP_X_FORWARDED_FOR'])?
$_SERVER['REMOTE_ADDR']:$_SERVER['HTTP_X_FORWARDED_FOR']):$_SERVER['HTTP_CLIENT_IP']);
}

/* calc max upload size */
function getMaxUploadSize(){
$max_upload = (int)(ini_get('upload_max_filesize'));
$max_post = (int)(ini_get('post_max_size'));
$memory_limit = (int)(ini_get('memory_limit'));
$upload_mb = min($max_upload, $max_post, $memory_limit);
return $upload_mb*1048576; // in Byte
}

/* get current url */
function selfURL(){
 $pageURL = 'http';
 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;  
}

/* get site root url (absolute root path) */
function get_root_url(){
	$domain = $_SERVER['HTTP_HOST'];
	$protocol_array = explode('/',$_SERVER['SERVER_PROTOCOL']);
	$protocol = strtolower($protocol_array[0]);
	$path = str_replace( basename($_SERVER['SCRIPT_FILENAME']), '', $_SERVER['PHP_SELF'] );
	$url = $protocol.'://'.$domain;
	return $url;
}

/* 
 Get a random code
 $random_length variable is the code length, it it null or blank the code length will be 10
*/
 function random_cod($random_length = null){
   if($random_length != null){
    $r_num = $random_length;
   }else{
    $r_num = 10;
   }
   return substr(md5(rand(0, 1000000)), 0, $r_num);
 }
?>