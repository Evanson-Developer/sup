<?php
header("Content-type: text/html; charset=ISO-8859-1");
include('include/inc_db.php');
include('control_login.php');
              $ii = 1;
         $sql_ans = 'select * from answers where id_question = '.$_POST['id_question'].' order by id asc';
         $rs_result_ans = execute($sql_ans);
         while ($rs_ans = mysql_fetch_array($rs_result_ans)) {
?>
  <div class="ass">
    <br/>
    <span class="answare_num"><?php echo $ii ?>) </span>
    <input type="radio" class="right_answare buttonizza" name="right_question_<?php echo $_POST['num'] ?>" id="right_<?php echo $ii ?>_question_<?php echo $_POST['num'] ?>" <?php echo ($rs_ans['proper'] ? 'checked' : '') ?> value="answare_<?php echo $ii ?>_question_<?php echo $_POST['num'] ?>" />
    <label for="right_<?php echo $ii ?>_question_<?php echo $_POST['num'] ?>">right</label>
    <input type="text" id="answare_<?php echo $ii ?>_question_<?php echo $_POST['num'] ?>" value="<?php echo $rs_ans['answer'] ?>" name="answare_<?php echo $ii ?>_question_<?php echo $_POST['num'] ?>" style="width:70%;" class="required">
    <img src="<?php echo path_img ?>/no.png" alt="" class="delete_answer" style="cursor:pointer;" title="Delete Answer"/>
  </div>
<?php    
$ii++;     
         }
?>