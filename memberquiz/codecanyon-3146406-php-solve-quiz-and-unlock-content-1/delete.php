<?php
header("Content-type: text/html; charset=ISO-8859-1");
include('include/inc_db.php');
include('control_login.php');
if($_POST['type'] != 'unique'){
   $box = implode(',',$_POST['box_elimina']); 
}else{  
  $box = $_POST['id'];
}

$sql = 'select * from quizzes where id IN ('.$box.')';
$rs_result = execute($sql);
while ($rs = mysql_fetch_array($rs_result)) {
  deleteDirectory(path_stored_quizzes.'/'.$rs['id']); 
}

$sql = 'delete from quizzes where id IN ('.$box.')';
execute($sql);
$sql = 'delete from questions where id_quiz IN ('.$box.')';
execute($sql);
$sql = 'delete from answers where id_quiz IN ('.$box.')';
execute($sql);
?>
