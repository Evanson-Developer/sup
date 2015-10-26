<?php
header("Content-type: text/html; charset=ISO-8859-1");
include('include/inc_db.php');
include('control_login.php');

$error_alert = '';

$sql = "select name from quizzes where id <> '".$_POST['id']."' and name = '".str_db($_POST['name'])."'";
$rs_result = execute($sql);
$rs = mysql_fetch_array($rs_result);
 if($rs){
  $error_alert .= 'This Quiz Already Exists!<br/>';
 }
 
 if($_POST['status'] == 'on'){
  $status = 1;
 }else{
  $status = 0;
 } 
 if($_POST['visible'] == 'on'){
  $visible = 1;
 }else{
  $visible = 0;
 }  

 if(isset($_POST['stepize_form'])){
  $steppize = 1;
 }else{
  $steppize = 0;
 } 
 if(isset($_POST['randomize_questions'])){
  $randomize = 1;
 }else{
  $randomize = 0;
 }  
 if(isset($_POST['active_min_answer'])){
  $active_min_answer = 1;
 }else{
  $active_min_answer = 0;
 } 
 if($_POST['type'] == 'questionnaire') $active_min_answer = 0;
 if(isset($_POST['send_mail'])){
  $send_mail = 1;
 }else{
  $send_mail = 0;
 } 
  
 if($error_alert != ''){
  echo '<div class="error_alert">'.$error_alert.'</div>';
  exit();
 }else{   
/*****************************************/

  $val = "name = '".str_db($_POST['name'])."',"; 
  $val .= "min_answer = '".str_db($_POST['min_answer'])."',";
  $val .= "type = '".str_db($_POST['type'])."',"; 
  
  $val .= "random_question = '".$randomize."',";
  $val .= "random_num = '".str_db($_POST['number_random'])."',";
  $val .= "steppize = '".$steppize."',";
  $val .= "min_answer_option = '".$active_min_answer."',";
  $val .= "email_quiz = '".$send_mail."',";
  $val .= "email_subject = '".str_db($_POST['admin_email_subject'])."',";
  $val .= "email_receiver = '".str_db($_POST['admin_email'])."',";
  $val .= "email_content = '".replaceSpecial($_POST['result_message'])."',";
  
  $val .= "content = '".replaceSpecial($_POST['quiz_content'])."',"; 
  $val .= "error_content = '".replaceSpecial($_POST['cont_error'])."',"; 
  $val .= "title_visible = '".$visible."',";
  $val .= "status = '".$status."'";
  $sql = "update quizzes set ".$val." where id = '".$_POST['id']."'";
  execute($sql);
/*******************************************/ 
$sql = "delete from questions where id_quiz = ".$_POST['id'];
execute($sql);
$sql = "delete from answers where id_quiz = ".$_POST['id'];
execute($sql);  
/*******************************************/ 

     foreach($_POST as $key => $val){
      if (substr($key,0,9) == 'question_'){  
        $record = 'id_quiz,questions';      
        $valu = "'".str_db($_POST['id'])."',";
        $valu .= "'".str_db($val)."'";   
        $sql = " insert into questions (";
        $sql .= $record;
        $sql .= ") VALUES (";
        $sql .=  $valu;
        $sql .=  ")";     
        execute($sql); 
        $last_id_question = mysql_insert_id();   
        $arr_question = explode('_',$key);              
        $question_num = end($arr_question);
      }  
      if (substr($key,0,8) == 'answare_'){
       $record = 'id_question,id_quiz,answer,proper';
       $arr_answer = explode('_',$key);
       $answer_quest_num = end($arr_answer);
       $answer_num = $arr_answer[1];
      }
        if(isset($_POST['right_question_'.$question_num]) && $_POST['right_question_'.$question_num] == 'answare_'.$answer_num.'_question_'.$question_num){
          $proper = 1;
        }else{
          $proper = 0;
        } 
      if (substr($key,0,8) == 'answare_'){  
       if($answer_quest_num == $question_num){       
        $valu = "'".str_db($last_id_question)."',";
        $valu .= "'".str_db($_POST['id'])."',";
        $valu .= "'".str_db($val)."',";
        $valu .= "'".str_db($proper)."'";  
        $sql = " insert into answers (";
        $sql .= $record;
        $sql .= ") VALUES (";
        $sql .=  $valu;
        $sql .=  ")";     
        execute($sql); 
       }       
      }        	
     }       	         
 }
?>
