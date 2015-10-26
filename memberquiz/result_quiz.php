<?php
header("Content-type: text/html; charset=ISO-8859-1");
include('include/inc_db.php');
require_once('lib/phpMailer/class.phpmailer.php');

$error_alert = '';
 $i = 0;
foreach($_POST['answer_r'] as $val){
 if($val == 1) $i++;
}
$quiz = '';
foreach($_POST['answer_id'] as $val){
  $sql_a = "select * from answers where id = ".$val;
  $result_a = execute($sql_a);	
  while ($results_a = mysql_fetch_array($result_a)) {
   $id_question = $results_a['id_question'];
  }
  $sql_b = "select * from questions where id = ".$id_question;
  $result_b = execute($sql_b);	
  while ($results_b = mysql_fetch_array($result_b)) {
   $quiz .= '<div style="background:#00CCFF;color:#000000;padding:3px;margin-bottom:2px;">'.$results_b['questions'].'</div>';
    $sql_c = "select * from answers where id_question = ".$results_b['id']." order by id asc";
    $result_c = execute($sql_c);	
    while ($results_c = mysql_fetch_array($result_c)) {
     $client_ans = ($results_c['id'] == $val) ? ' <strong>(Client\'s Answer)</strong>' : '';
     $background_c = ($results_c['proper']) ? 'background:#CCFFCC;color:#00C600;' : 'background:#FFDDDD;color:#DD0000;';
     $quiz .= '<div style="'.$background_c.'padding-left:10px;">'.$results_c['answer'].$client_ans.'</div><hr style="padding:0px;margin:0px;"/>';
    }
    $quiz .= '<br/><br/>';      
  }

}

$sql = "select * from quizzes where id = ".$_POST['id_quiz'];
$result = execute($sql);	
 while ($results = mysql_fetch_array($result)) {
 $client_name = (isset($_POST['client_name']) ? $_POST['client_name'] : '');
 $client_mail = (isset($_POST['client_email']) ? $_POST['client_email'] : '');
  $arr_replace = array(
   '{total_questions}' => $_POST['total_questions'],
   '{client_name}' => $client_name,
   '{client_email}' => $client_mail,
   '{id_quiz}' => $results['id'],
   '{title_quiz}' => $results['name'],
   '{score}' => $i,
   '{quiz}' => $quiz,
   '{min_answer}' => $results['min_answer']
  );
  
function send_results_mail($q_name,$q_id,$q_min_answer,$q_email_content,$q_arr_replace,$q_email_receiver,$q_subject){
$client_mail = (isset($_POST['client_email']) ? $_POST['client_email'] : '');
  $message_email = str_replace(array_keys($q_arr_replace), array_values($q_arr_replace), $q_email_content);

  $mail = new PHPMailer();
  $mail->From = $client_mail;
  $mail->FromName = $client_mail;
  $addresses = explode(',',$q_email_receiver);
  foreach($addresses as $val){
    $mail->AddAddress($val);
  }
  $mail->AddReplyTo($client_mail);
  $mail->Sender=$client_mail;
  $mail->IsHTML(true); 
  $mail->Subject = $q_subject;
  $mail->Body = $message_email;
  if($mail->Send()){
    //echo '<span style="color:green;font-weight:bold" class="success_message">Operation successfully!</span>';
  }else{  
    echo '<span style="color:red;font-weight:bold" class="success_message">'.ErrorInfo.'</span>';
  }
}
  
  if($results['min_answer_option']){
    if ($results['min_answer'] <= $i){
      echo $results['content'];
      if($results['email_quiz']) send_results_mail($results['name'],$results['id'],$results['min_answer'],$results['email_content'],$arr_replace,$results['email_receiver'],replaceSpecialViceversa($results['email_subject']));
    }else{
      echo str_replace(array_keys($arr_replace), array_values($arr_replace), $results['error_content']);
    }
  }else{
    echo $results['content'];
    if($results['email_quiz']) send_results_mail($results['name'],$results['id'],$results['min_answer'],$results['email_content'],$arr_replace,$results['email_receiver'],replaceSpecialViceversa($results['email_subject']));
  }
 }
?>
