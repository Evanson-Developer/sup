<?php
header("Content-type: text/html; charset=ISO-8859-1");
require_once('include/inc_db.php');
require_once('control_login.php');
         $sql = 'select * from quizzes where id = '.$_POST['id'];
         $rs_result = execute($sql);
         $rs = mysql_fetch_array($rs_result);        
$question_num = countRec('id','questions','where id_quiz ='.$_POST['id']); 
?>
<div class="obj_title"><img src="ico.png" alt="" style="margin-right:5px;vertical-align:middle" />EDIT QUIZ</div>
<div class="buttons_barr">
  <span class="back_list"><img src="<?php echo path_img ?>/back.png" alt=""/>Return To List</span>
  <span class="add_new_item"><img src="<?php echo path_img ?>/add.png" alt=""/>New Quiz</span>
</div>
<!-- end of buttons bar -->
<script type="text/javascript">
jQuery(function($){
<?php
if($question_num == 1){
?>
$('.delete_input:first').css('display','none');
<?php 
}else{
?>
setTimeout(function(){$('.delete_input:first').css('display','');},500);
<?php 
}
?> 
$('.postbuttonizza').addClass('buttonizza').removeClass('.postbuttonizza');
});
</script>
<div class="container_flexigrid">
<form id="add_new_file">
<input type="hidden" name="id" value="<?php echo $rs['id'] ?>" />
<table border="0" width="100%" cellspacing="0" cellpadding="0">
	<tr>
		<td align="left" valign="top">
          <div class="obj_title">            
            Your Content     
          </div>
          <div style=" 
            border:1px solid #ccc;background:#dedede;
           -webkit-border-bottom-right-radius: 4px;
           -webkit-border-bottom-left-radius: 4px;
           -moz-border-radius-bottomright: 4px;
           -moz-border-radius-bottomleft: 4px;
           border-bottom-right-radius: 4px;
           border-bottom-left-radius: 4px;padding:10px;">		
           <textarea name="quiz_content" id="quiz_content"><?php echo $rs['content'] ?></textarea>
         </div>	
		</td>
	</tr>
</table>
<div class="orizzontal"></div>
<table border="0" width="100%" cellspacing="0" cellpadding="0">
	<tr>
		<td align="left" valign="top">
<div id="general_input_container" style="border:1px solid #f9f9f9;background:#dedede;-moz-border-radius: 6px;-webkit-border-radius: 6px;border-radius: 6px;padding:10px;">
  Add Questions<br/><br/>
  <?php 
         $i=1;
         $sql_que = 'select * from questions where id_quiz = '.$rs['id'].' order by id asc';
         $rs_result_que = execute($sql_que);
         while ($rs_que  = mysql_fetch_array($rs_result_que)) {
         $ii = 1;
  ?>  
  <div class="input_container">
  <div class="up_div" style="border:1px solid #cccccc;margin-bottom:5px;padding:10px;position:relative;background:#f9f9f9;-moz-border-radius: 6px;-webkit-border-radius: 6px;border-radius: 6px;" >    
         <div style="position:absolute;right:5px;top:5px;" title="Delete Question"><img src="<?php echo path_img ?>/no.png" alt="" class="delete_input" style="cursor:pointer;"/></div>
		  <table border="0" width="100%" cellspacing="0" cellpadding="0">
			<tr>
				<td align="left" valign="center" width="230px">				
				  Your Question<br/>
                  <input type="text" rel="question" alt="question" name="<?php echo 'question_'.$i ?>" id="<?php echo 'question_'.$i ?>" value="<?php echo $rs_que['questions'] ?>" style="width:95%;" class="required" />     
                  <script type="text/javascript">
                   jQuery(function($){
                    $.ajax({
                     type:'POST',
                     url:'answers.php',
                     data:({id_question:'<?php echo $rs_que["id"] ?>',num:'<?php echo $i ?>'}),
                     success:function(data){
                      $('#question_<?php echo $i ?>').closest('.input_container').find('.answer_area').html(data);
                       $('#question_<?php echo $i ?>').closest('.input_container').find('.right_answare').click(function(){
                          $('#question_<?php echo $i ?>').closest('.input_container').find('.right_answare').not(this).button('destroy').button();
                       });                      
                     }
                    });
                   });
                  </script>
                  <br/><br/><div class="text_answer">Your Answers<hr/></div>  
                  <div class="answer_area"></div>           	
                  <br/><br/>
                  <div class="postbuttonizza add_answer" style="text-align:center;"><img src="<?php echo path_img ?>/add.png" alt="" style="vertical-align:middle;margin-right:5px" />Add Answer</div>
				</td>																				
			</tr>
			<tr>
				<td align="left" valign="top" colspan="4" height="20px">&nbsp;</td>						
			</tr>
		  </table>
  </div>        
  </div>
  <?php
    $i++;
   }
  ?>   
  <div style="clear:both;" class="clearboth"></div>
</div>	
<br/><button type="button" class="buttonizza add_up"><img src="<?php echo path_img ?>/add.png" alt="" style="vertical-align:middle;margin-right:5px" />Add a Question</button>
	
		</td>
		<td align="left" valign="top" style="width:20px;">&nbsp;</td>
		<td align="left" valign="top" style="width:400px;">
<div class="tab_options">
          <div class="obj_title">  
	       <ul>
		     <li><a href="#tabs-1">General Settings </a></li>
		     <li><a href="#tabs-2">Advanced Settings</a></li>
	       </ul>                                     
          </div>
          <script type="text/javascript">
           jQuery(function($){
            $('.tab_options').tabs();
            $('#randomize_questions').click(function(){
             if($(this).prop('checked') == true){
              $('.random_option').show();
             }else{
              $('.random_option').hide();
             }
            });
            $('#send_mail').click(function(){
              if($(this).prop('checked') == true){
               $('#send_mail_option').slideDown();
              }else{
               $('#send_mail_option').slideUp();
              }            
            });
            $('#type_qui').click(function(){
              $('.QQ_title').html('Quiz');
              $('.quizzable').show();
            });
            $('#type_que').click(function(){
              $('.QQ_title').html('Questionnaire');
              $('.quizzable').hide();
            });     
            $('#active_min_answer').click(function(){
              if($(this).prop('checked') == true){
               $('#options_min').slideDown();
              }else{
               $('#options_min').slideUp();
              }
            });       
           });
          </script>
          <div style=" 
            border:1px solid #ccc;background:#dedede;
           -webkit-border-bottom-right-radius: 4px;
           -webkit-border-bottom-left-radius: 4px;
           -moz-border-radius-bottomright: 4px;
           -moz-border-radius-bottomleft: 4px;
           border-bottom-right-radius: 4px;
           border-bottom-left-radius: 4px;padding:10px;" id="tabs-1">
             <table border="0" width="100%" cellspacing="0" cellpadding="0">
	           <tr>
		         <td>
		           Type<br/>
                   <div class="group_radio" style="margin-top:3px;">
                      <input type="radio" name="type" id="type_qui" value="quiz" <?php echo ($rs['type'] == 'quiz') ? 'class="default_check"' : ''?> /><label for="type_qui">Quiz</label>
                      <input type="radio" name="type" id="type_que" value="questionnaire" <?php echo ($rs['type'] != 'quiz') ? 'class="default_check"' : ''?> /><label for="type_que">Questionnaire</label>
                   </div>  		
		         </td>
		         <td style="width:5px;">&nbsp;</td>
		         <td>
		           Status <img src="<?php echo path_img ?>/info.png" style="margin-left:px;vertical-align:top" title="If Inactive the Quiz/Questionnaire not will be show on your posts/pages" /><br/>
                   <div class="group_radio" style="margin-top:3px;">
                      <input type="radio" name="status" id="status_on" value="on" class="default_check" <?php echo ($rs['status']) ? 'class="default_check"' : ''?> /><label for="status_on">Active</label>
                      <input type="radio" name="status" id="status_off" value="off" <?php echo (!$rs['status']) ? 'class="default_check"' : ''?> /><label for="status_off">Inactive</label>
                   </div> 		
		         </td>
	            </tr>
              </table>             
              <div class="orizzontal"></div>    
              <table border="0" width="100%" cellspacing="0" cellpadding="0">
	            <tr>
		         <td><span class="QQ_title">Quiz</span> Title<br/><input type="text" class="required" value="<?php echo $rs['name'] ?>" name="name" style="width:175px" /></td>
		         <td style="width:5px;">&nbsp;</td>
		         <td>
		           Title Visible on <span class="QQ_title">Quiz</span><br/>
                   <div class="group_radio" style="margin-top:3px;">
                      <input type="radio" name="visible" id="visible_on" value="on" class="default_check" <?php echo ($rs['title_visible']) ? 'class="default_check"' : ''?> /><label for="visible_on">Visible</label>
                      <input type="radio" name="visible" id="visible_off" value="off" <?php echo (!$rs['title_visible']) ? 'class="default_check"' : ''?> /><label for="visible_off">Not Visible</label>
                   </div> 		
		         </td>
	            </tr>
              </table>                        
             <div class="orizzontal"></div> 
              <table border="0" width="100%" cellspacing="0" cellpadding="0">
	            <tr>
		         <td><br/><input type="checkbox" name="randomize_questions" id="randomize_questions" value="1" class="buttonizza"  <?php echo ($rs['random_question']) ? 'checked' : ''?> /><label for="randomize_questions">Randomize Questions</label></td>
		         <td style="width:5px;">&nbsp;</td>
		         <td>
		          <div class="random_option" style="<?php echo ($rs['random_question']) ? '' : 'display:none'?>">
		           Number of Visible Questions <img src="<?php echo path_img ?>/info.png" style="margin-left:px;vertical-align:top" title="Value <= questions number and  >= 1" /><br/>
		           <input type="text" name="number_random" id="number_random" class="number required" value="<?php echo $rs['random_num'] ?>" min="1" style="width:200px;" />
		          </div>
		         </td>
	            </tr>
              </table>    
              <div class="orizzontal"></div>
              <input type="checkbox" name="stepize_form" id="stepize_form" value="1" class="buttonizza" <?php echo ($rs['steppize']) ? 'checked' : ''?> /><label for="stepize_form">Put Quiz in a Step by Step Form</label>                                     
          </div>
          <div style=" 
            border:1px solid #ccc;background:#dedede;
           -webkit-border-bottom-right-radius: 4px;
           -webkit-border-bottom-left-radius: 4px;
           -moz-border-radius-bottomright: 4px;
           -moz-border-radius-bottomleft: 4px;
           border-bottom-right-radius: 4px;
           border-bottom-left-radius: 4px;padding:10px;" id="tabs-2">   
            <div class="quizzable">
                   <input name="active_min_answer" id="active_min_answer" type="checkbox" value="1" class="buttonizza" <?php echo ($rs['min_answer_option']) ? 'checked' : ''?> /><label for="active_min_answer">Active Min. Correct Answers Option</label>
                   <div id="options_min" style="<?php echo ($rs['min_answer_option']) ? '' : 'display:none'?>">
                   <br/>                  
                   Min. Correct Answers To See Content<img src="<?php echo path_img ?>/info.png" style="margin-left:px;vertical-align:top" title="Value <= questions number and  >= 1" /><br/>
                   <input name="min_answer" type="text" value="<?php echo $rs['min_answer'] ?>" class="number required" min="1" style="width:200px" />	  
                   <div class="orizzontal"></div>
                   Failed <span class="QQ_title">Quiz</span> Message<br/>
                   <textarea name="cont_error" id="cont_error"><?php echo $rs['error_content'] ?></textarea> <br/>     
                   {min_answer} = Minimum of correct answers  
                   <br/>
                   {score} = Client score
                   <br/>           
                   {total_questions} = Total Questions in the Quiz 
                   </div> 
              <div class="orizzontal"></div> 
            </div>
              <input type="checkbox" id="send_mail" name="send_mail" class="buttonizza" value="1" <?php echo ($rs['email_quiz']) ? 'checked' : ''?> /><label for="send_mail">Send <span class="QQ_title">Quiz</span> Result via e-mail to Administrator</label>   		         		                     	                      
              <img src="<?php echo path_img ?>/info.png" style="margin-left:px;vertical-align:top" title="This option forces your client to enter his name and email address into the first fields of the form" />
              <br/><br/>
                <div id="send_mail_option" style="<?php echo ($rs['email_quiz']) ? '' : 'display:none'?>">
                   E-mail Subject<br/>
                   <input type="text" class="required" name="admin_email_subject" id="admin_email_subject" value="<?php echo $rs['email_subject'] ?>" style="width:370px;" />  
                   <br/>              
                   E-mail address where receive the results<img src="<?php echo path_img ?>/info.png" style="margin-left:px;vertical-align:top" title="Default: Administrator E-amil<br/>for multiple addresses, separe them by a comma ','" /><br/>
                   <input type="text" class="email required" name="admin_email" id="admin_email" value="<?php echo $rs['email_receiver'] ?>" style="width:370px;" />
                   <div class="orizzontal"></div> 
                   Message To send via E-mail to Administrator<br/>
                   <textarea name="result_message" id="result_message"><?php echo $rs['email_content'] ?></textarea> <br/>     
                   {client_name} = Client Name 
                   <br/>
                   {client_email} = Client E-mail
                   <br/>           
                   {id_quiz} = Quiz ID 
                   <br/>           
                   {title_quiz} = Quiz Title  
                   <br/>           
                   {score} = Client score
                   <br/>           
                   {total_questions} = Total Questions in the Quiz       
                   <br/>
                   {quiz} = Questions and Answers of the Quiz with features                                                          
                </div>                               
           </div>       
          </div>			
		</td>
	</tr>
</table>
 
</form>

 <br/><br/>

</div>
 <div class="save_bar obj_bottom_bar">
   <button type="button" class="buttonizza add_file"><img src="<?php echo path_img ?>/save.png" alt="" style="vertical-align:middle;margin-right:5px" />SAVE</button>
   <!--<button type="button" class="buttonizza preview_c"><img src="<?php echo BRG_URLIMG ?>/preview.png" alt="" style="vertical-align:middle;margin-right:5px" />See Banner Preview</button>-->
   <span style="display:inline-block;float:right" id="result_insert"></span>
 </div>
