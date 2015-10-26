<?php 
require_once('../include/inc_db.php');
if($path_stored_quizzes != '' &&
  $admin_email != '' &&
  $hostname != '' &&
  $username != '' && 
  $password != '' && 
  $db != ''
  ){
  header('location:../login.php');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//IT" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Login</title>
<?php
echo read_dir_js('../lib/js/'); /*--> this is a function (see include/inc_function.php) that provide to invoke in dom all js file in js directory */
?>

<meta http-equiv="Content-Language" content="en">
<link rel="stylesheet" type="text/css" href="../css/ui/jquery-ui.css" />
<link rel="stylesheet" type="text/css" href="../css/style_index.css" />
<script type="text/javascript">
$(function(){
 $('#b_path').focus();
 $('button').button();
 $('#wizard').submit(function(){
 $.ajax({
   type:"POST",
   url: 'check_wizard.php',
   data:$(this).serialize(),
   beforeSend: function(){
     $('.controllo_errori').html('<img src="../img/loader.gif" />  Wait....');
   },
   success: function(data){
     if(data == 'ok'){     
       window.open('../login.php', '_self', null);       
     }else{
     /*var offset = $('.round').offset()
     , w_login = $('.round').width();
      $('.round').css({'position':'absolute','width':w_login+'px','top':offset.top+'px','left':offset.left+'px'})
      .animate({left:'-=50'},'fast')
      .animate({left:'+=50'},'fast')
      .animate({left:'-=50'},'fast')
      .animate({left:'+=50'},'fast',function(){
        $(this).css({'position':''});
      });  */   
      $('.controllo_errori').html('<span class="errore_login" style="padding-right:10px"><img src="../img/warning_message.png" alt="" style="vertical-align:middle;margin-right:5px;" /> '+data+' </span>');
     }
   }
 });
return false
 });
}); 
</script>
</head>
<body>
<table border="0" width="100%" height="100%" cellspacing="0" cellpadding="0">
	<tr>
		<td class="td_corpo" align="center" valign="top" >
		
		  <table border="0" cellspacing="0" cellpadding="0" width="80%">
		    <tr>
			  <td>
			  <div  style="margin-top:10px;"></div>
			   <form id="wizard">			   
			    <div class="round">
			     <div style="border:1px solid #999">
			      <table border="0" width="100%" cellspacing="0" cellpadding="0" style="background:#fff">
			        <tr>
				      <td colspan="4"><div class="title_login">Wizard</div></td>
			        </tr>
			        <tr>
				      <td colspan="4" style="height:40px;padding:10px" class="controllo_errori" align="left">&nbsp;</td>
			        </tr>
			        
			        <tbody>
			        <tr>
                      <td style="width:20px" align="left">&nbsp;</td>
				      <td align="left" style="width:30%"><span class="terzo_carattere">Quizzes's archive path (write and read permission)</span></td>				      
				      <td style="width:20px" align="left">&nbsp;</td>
				      <td align="left"><?php echo get_root_url()?>/<input type="text" name="store" id="store" class="required" value="" /></td>
			        </tr>
			        <tr>
			          <td align="left" colspan="4" style="height:10px;">&nbsp;</td>
			        </tr>			        
			        <tr>
                      <td style="width:20px" align="left">&nbsp;</td>
				      <td align="left" style="width:30%"><span class="terzo_carattere">Your E-mail address</span></td>				      
				      <td style="width:20px" align="left">&nbsp;</td>
				      <td align="left"><input type="text" name="email" id="email" class="email required" value="" /></td>
			        </tr>	
			        <tr>
			          <td align="left" colspan="4" style="height:10px;">&nbsp;</td>
			        </tr>				        		        
			        <tr>
                      <td align="center" colspan="4">Database data connection<br/><hr/></td>
			        </tr>	
			        <tr>
                      <td style="width:20px" align="left">&nbsp;</td>
				      <td align="left" style="width:30%"><span class="terzo_carattere">Host Name</span></td>				      
				      <td style="width:20px" align="left">&nbsp;</td>
				      <td align="left"><input type="text" name="host" id="host" class="required" value="" /></td>
			        </tr>	
			        <tr>
			          <td align="left" colspan="4" style="height:10px;">&nbsp;</td>
			        </tr>	
			        <tr>
                      <td style="width:20px" align="left">&nbsp;</td>
				      <td align="left" style="width:30%"><span class="terzo_carattere">User Name</span></td>				      
				      <td style="width:20px" align="left">&nbsp;</td>
				      <td align="left"><input type="text" name="user" id="user" class="required" value="" /></td>
			        </tr>	
			        <tr>
			          <td align="left" colspan="4" style="height:10px;">&nbsp;</td>
			        </tr>	
			        <tr>
                      <td style="width:20px" align="left">&nbsp;</td>
				      <td align="left" style="width:30%"><span class="terzo_carattere">Password</span></td>				      
				      <td style="width:20px" align="left">&nbsp;</td>
				      <td align="left"><input type="password" name="pass" id="pass" class="required" value="" /></td>
			        </tr>	
			        <tr>
			          <td align="left" colspan="4" style="height:10px;">&nbsp;</td>
			        </tr>
			        <tr>
                      <td style="width:20px" align="left">&nbsp;</td>
				      <td align="left" style="width:30%"><span class="terzo_carattere">Database Name</span></td>				      
				      <td style="width:20px" align="left">&nbsp;</td>
				      <td align="left"><input type="text" name="db_name" id="db_name" class="required" value="" /><br/><strong>*the sctipt will create the database if it not exists</strong></td>
			        </tr>	
			        <tr>
			          <td align="left" colspan="4" style="height:10px;"></td>
			        </tr>				        
					        				        			        		        		        		        
			        <tr>
                      <td style="width:20px" align="left">&nbsp;</td>
				      <td align="left" colspan="3"><button type="submit" >SAVE</button></td>				      
			        </tr>			        
			       </tbody>
			        <tr>
				      <td colspan="4" style="height:10px" align="left"><br/></td>
			        </tr>			       
			      </table>
			      </div>
			    </div>
			   </form>
			  </td>
		    </tr>
	      </table>		  
		</td>
	</tr>
</table>
</body>
</html>