<?php
require_once('inc_config.php');
/*
 -----------------------------------
 ------- NO CHANGE IT PLEASE -------
 -----------------------------------
*/ 
define('hostname',$hostname);
define('username',$username);
define('password',$password);
define('db',$db);
define('sfw_path',$sfw_path);
define('path_rel',str_replace('\\','/',$_SERVER['DOCUMENT_ROOT'])); //-> relative path of root
define('path_abs',get_root_url());//-> absolute path of root
 
 if(trim(sfw_path) != ''){
  define('path_abs_sfw',path_abs.'/'.sfw_path);//-> absolute path of software if $sfw_path is empty (it is important for slash)
  define('path_rel_sfw',path_rel.'/'.sfw_path);//-> relative path of software if $sfw_path is empty (it is important for slash)
 }else{
  define('path_abs_sfw',path_abs.sfw_path);//-> absolute path of software
  define('path_rel_sfw',path_rel.sfw_path);//-> relative path of software 
 }
define('path_stored_quizzes',path_rel.'/'.$path_stored_quizzes);
define('path_img',path_abs_sfw.'/'.$path_img_back);
define('admin_email',$admin_email);
define('date_format',$date_format)
?>