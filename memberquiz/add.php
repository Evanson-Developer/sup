<?php
header("Content-type: text/html; charset=ISO-8859-1");
include('include/inc_db.php');
include('control_login.php');
$rand_cod = random_cod(8);
$error_alert = '';

$sql = "select name from quizzes where name = '".str_db($_POST['name'])."'";
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
  $record = 'name,code,type,random_question,random_num,steppize,';
  $record .= 'min_answer_option,email_quiz,email_subject,email_receiver,email_content,';
  $record .= 'creation_date,content,error_content,title_visible,min_answer,status';
  $val = "'".str_db($_POST['name'])."',";
  $val .= "'".str_db($rand_cod)."',";  
  $val .= "'".str_db($_POST['type'])."',";
  $val .= "'".$randomize."',";  
  $val .= "'".str_db($_POST['number_random'])."',";
  $val .= "'".$steppize."',";  
  $val .= "'".$active_min_answer."',";
  $val .= "'".$send_mail."',";  
  $val .= "'".str_db($_POST['admin_email_subject'])."',";
  $val .= "'".str_db($_POST['admin_email'])."',";
  $val .= "'".replaceSpecial($_POST['result_message'])."',";    
  $val .= "'".date('Y-m-d')."',";
  $val .= "'".replaceSpecial($_POST['quiz_content'])."',";
  $val .= "'".replaceSpecial($_POST['cont_error'])."',";
  $val .= "'".$visible."',";
  $val .= "'".str_db($_POST['min_answer'])."',";
  $val .= "'".$status."'";
  
    $sql = " insert into quizzes (";
    $sql .= $record;
    $sql .= ") VALUES (";
    $sql .=  $val;
    $sql .=  ")";     
    execute($sql);  
     $last_id = mysql_insert_id();
     Mkdir(path_stored_quizzes.'/'.$last_id, 0755, true);
     copy(path_rel_sfw.'/get_code.php', path_stored_quizzes.'/'.$last_id.'/'.$rand_cod.'.php');
replace_line_in_file(path_stored_quizzes.'/'.$last_id.'/'.$rand_cod.'.php',"{include}","require_once('".path_rel_sfw."/include/inc_db.php');");    
replace_line_in_file(path_stored_quizzes.'/'.$last_id.'/'.$rand_cod.'.php',"{sql_replace}","$"."sqli = 'select * from quizzes where code = \"".$rand_cod."\"';");
/*******************************************************************/     

     foreach($_POST as $key => $val){
      if (substr($key,0,9) == 'question_'){  
        $record = 'id_quiz,questions';      
        $valu = "'".str_db($last_id)."',";
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
        $valu .= "'".str_db($last_id)."',";
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
