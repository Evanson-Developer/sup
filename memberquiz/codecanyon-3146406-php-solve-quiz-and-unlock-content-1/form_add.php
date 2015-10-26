<?php
header("Content-type: text/html; charset=ISO-8859-1");
require_once('include/inc_db.php');
require_once('control_login.php');
?>
<div class="obj_title"><img src="ico.png" alt="" style="margin-right:5px;vertical-align:middle" />NEW QUIZ</div>
<div class="buttons_barr">
  <span class="back_list"><img src="img/back.png" alt=""/>Return To List</span>
</div>
<!-- end of buttons bar -->

<div class="container_flexigrid">
<form id="add_new_file">
<table border="0" width="100%" cellspacing="0" cellpadding="0">
	<tr>
		<td align="left" valign="top">
          <div class="obj_title">            
            Content to show at the end of Quiz/Questionnaire
          </div>
          <div style=" 
            border:1px solid #ccc;background:#dedede;
           -webkit-border-bottom-right-radius: 4px;
           -webkit-border-bottom-left-radius: 4px;
           -moz-border-radius-bottomright: 4px;
           -moz-border-radius-bottomleft: 4px;
           border-bottom-right-radius: 4px;
           border-bottom-left-radius: 4px;padding:10px;">		
           <textarea name="quiz_content" id="quiz_content"></textarea>
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
  <div class="input_container">
  <div class="up_div" style="border:1px solid #cccccc;margin-bottom:5px;padding:10px;position:relative;background:#f9f9f9;-moz-border-radius: 6px;-webkit-border-radius: 6px;border-radius: 6px;" >    
         <div style="position:absolute;right:5px;top:5px;" title="Delete Question"><img src="<?php echo path_img ?>/no.png" alt="" class="delete_input" style="cursor:pointer;"/></div>
		  <table border="0" width="100%" cellspacing="0" cellpadding="0">
			<tr>
				<td align="left" valign="center" width="230px">				
				  Your Question<br/>
                  <input type="text" rel="question" alt="question" style="width:95%;" class="required" />     
                  <br/><br/><div class="text_answer"></div>  
                  <div class="answer_area"></div>           	
                  <br/><br/>
                  <div class="buttonizza add_answer" style="text-align:center;"><img src="<?php echo path_img ?>/add.png" alt="" style="vertical-align:middle;margin-right:5px" />Add Answer</div>
				</td>																				
			</tr>
			<tr>
				<td align="left" valign="top" colspan="4" height="20px">&nbsp;</td>						
			</tr>
		  </table>
  </div>        
  </div>
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
                      <input type="radio" name="type" id="type_qui" value="quiz" class="default_check" /><label for="type_qui">Quiz</label>
                      <input type="radio" name="type" id="type_que" value="questionnaire" /><label for="type_que">Questionnaire</label>
                   </div>  		
		         </td>
		         <td style="width:5px;">&nbsp;</td>
		         <td>
		           Status <img src="<?php echo path_img ?>/info.png" style="margin-left:px;vertical-align:top" title="If Inactive the Quiz/Questionnaire not will be show on your posts/pages" /><br/>
                   <div class="group_radio" style="margin-top:3px;">
                      <input type="radio" name="status" id="status_on" value="on" class="default_check" /><label for="status_on">Active</label>
                      <input type="radio" name="status" id="status_off" value="off" /><label for="status_off">Inactive</label>
                   </div> 		
		         </td>
	            </tr>
              </table>             
              <div class="orizzontal"></div>    
              <table border="0" width="100%" cellspacing="0" cellpadding="0">
	            <tr>
		         <td><span class="QQ_title">Quiz</span> Title<br/><input type="text" class="required" value="" name="name" style="width:175px" /></td>
		         <td style="width:5px;">&nbsp;</td>
		         <td>
		           Title Visible on <span class="QQ_title">Quiz</span><br/>
                   <div class="group_radio" style="margin-top:3px;">
                      <input type="radio" name="visible" id="visible_on" value="on" class="default_check" /><label for="visible_on">Visible</label>
                      <input type="radio" name="visible" id="visible_off" value="off" /><label for="visible_off">Not Visible</label>
                   </div> 		
		         </td>
	            </tr>
              </table>                        
             <div class="orizzontal"></div> 
              <table border="0" width="100%" cellspacing="0" cellpadding="0">
	            <tr>
		         <td><br/><input type="checkbox" name="randomize_questions" id="randomize_questions" value="1" class="buttonizza" /><label for="randomize_questions">Randomize Questions</label></td>
		         <td style="width:5px;">&nbsp;</td>
		         <td>
		          <div class="random_option" style="display:none">
		           Number of Visible Questions <img src="<?php echo path_img ?>/info.png" style="margin-left:px;vertical-align:top" title="Value <= questions number and  >= 1" /><br/>
		           <input type="text" name="number_random" id="number_random" class="number required" value="1" min="1" style="width:200px;" />
		          </div>
		         </td>
	            </tr>
              </table>    
              <div class="orizzontal"></div>
              <input type="checkbox" name="stepize_form" id="stepize_form" value="1" class="buttonizza" /><label for="stepize_form">Put Quiz in a Step by Step Form</label>                                     
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
                   <input name="active_min_answer" id="active_min_answer" type="checkbox" value="1" class="buttonizza"/><label for="active_min_answer">Active Min. Correct Answers Option</label>
                   <div id="options_min" style="display:none">
                   <br/>                  
                   Min. Correct Answers To See Content<img src="<?php echo path_img ?>/info.png" style="margin-left:px;vertical-align:top" title="Value <= questions number and  >= 1" /><br/>
                   <input name="min_answer" type="text" value="1" class="number required" min="1" style="width:200px" />	  
                   <div class="orizzontal"></div>
                   Failed <span class="QQ_title">Quiz</span> Message<br/>
                   <textarea name="cont_error" id="cont_error">
                    <p>Your score is  {score}/{total_questions}</p>
                    <p>Sorry, but the minimum of correct answers must be {min_answer}</p>
                    <p><a href="#" onclick="window.location.reload()">Reload Quiz</a></p>                   
                   </textarea> <br/>     
                   {min_answer} = Minimum of correct answers  
                   <br/>
                   {score} = Client score
                   <br/>           
                   {total_questions} = Total Questions in the Quiz 
                   </div> 
              <div class="orizzontal"></div> 
            </div>
              <input type="checkbox" id="send_mail" name="send_mail" class="buttonizza" value="1" /><label for="send_mail">Send <span class="QQ_title">Quiz</span> Result via e-mail to Administrator</label>   		         		                     	                      
              <img src="<?php echo path_img ?>/info.png" style="margin-left:px;vertical-align:top" title="This option forces your client to enter his name and email address into the first fields of the form" />
              <br/><br/>
                <div id="send_mail_option" style="display:none">
                   E-mail Subject<br/>
                   <input type="text" class="required" name="admin_email_subject" id="admin_email_subject" value="" style="width:370px;" />  
                   <br/>              
                   E-mail address where receive the results<img src="<?php echo path_img ?>/info.png" style="margin-left:px;vertical-align:top" title="Default: Administrator E-amil<br/>for multiple addresses, separe them by a comma ','" /><br/>
                   <input type="text" class="multiemail required" name="admin_email" id="admin_email" value="<?php echo $admin_email ?>" style="width:370px;" />
                   <div class="orizzontal"></div> 
                   Message To send via E-mail to Administrator<br/>
                   <textarea name="result_message" id="result_message">
                     <p><u><strong>A client &nbsp;resolved a Quiz on your Blog:</strong></u></p>
                     <p><strong><span style="background-color:#ffff00;">Client data:</span></strong></p>
                     <p>Name: <span style="color:#ff8c00;">{client_name} </span></p>
                     <p>E-mail: <span style="color:#ff8c00;">{client_email}</span></p>
                     <p><strong><span style="background-color:#ffff00;">Quiz data</span></strong></p>
                     <p>ID: <span style="color:#800000;">{id_quiz}</span></p>
                     <p>Title: <span style="color:#800000;">{title_quiz}</span></p>
                     <p>Score: <span style="color:#800000;">{score}/{total_questions}</span></p>
                     <p><strong><span style="background-color:#ffff00;">The Quiz</span></strong></p>
                     <p>{quiz}</p>                 
                   </textarea> <br/>     
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
   <button type="button" class="buttonizza add_file"><img src="img/save.png" alt="" style="vertical-align:middle;margin-right:5px" />SAVE</button>
   <a href="log_out.php" style="margin-left:20px;" class="buttonizza"><img src="img/logout.png" alt="" style="vertical-align:middle;margin-right:5px" />Log Out</a>
   <span style="display:inline-block;float:right" id="result_insert"></span>
 </div>