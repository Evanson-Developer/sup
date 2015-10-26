<?php 
session_start();
if(IsSet($_SESSION['logged'])){
header('location:index.php'); 
}
require_once('include/inc_db.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//IT" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Login</title>
<?php
echo read_dir_js('lib/js/'); /*--> this is a function (see include/inc_function.php) that provide to invoke in dom all js file in js directory */
?>

<meta http-equiv="Content-Language" content="en">
<link rel="stylesheet" type="text/css" href="css/ui/jquery-ui.css" />
<link rel="stylesheet" type="text/css" href="css/style_index.css" />
<script type="text/javascript">
$(function(){
 $('#nome').focus();
 $('button').button();
 $('#login').submit(function(){
 $.ajax({
   type:"POST",
   url: 'check.php',
   data:$(this).serialize(),
   beforeSend: function(){
     $('.controllo_errori').html('<img src="img/loader.gif" />  Wait....');
   },
   success: function(data){
     if(data == 'ok'){     
       window.open('login.php', '_self', null);       
     }else{
     var offset = $('.round').offset()
     , w_login = $('.round').width();
      $('.round').css({'position':'absolute','width':w_login+'px','top':offset.top+'px','left':offset.left+'px'})
      .animate({left:'-=50'},'fast')
      .animate({left:'+=50'},'fast')
      .animate({left:'-=50'},'fast')
      .animate({left:'+=50'},'fast',function(){
        $(this).css({'position':''});
      });     
      $('.controllo_errori').html('<span class="errore_login" style="padding-right:10px"><img src="img/warning_message.png" alt="" style="vertical-align:middle;margin-right:5px;" /> ERROR!! Wrong UserID and/or Password </span>');
      $('#password').val('');
      $('input:first').focus();
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
		<td class="td_corpo" align="center">
		
		  <table border="0" cellspacing="0" cellpadding="0">
		    <tr>
			  <td>
			   <form id="login">			   
			    <div class="round">
			     <div style="border:1px solid #999">
			      <table border="0" width="100%" cellspacing="0" cellpadding="0" style="background:#fff">
			        <tr>
				      <td colspan="7"><div class="title_login">LOGIN</div></td>
			        </tr>
			        <tr>
				      <td colspan="7" style="height:40px;padding:10px" class="controllo_errori" align="left">&nbsp;</td>
			        </tr>
			        
			        <tbody>
			        <tr>
			          <td style="width:20px" align="left">&nbsp;</td>
				      <td align="left"><span class="terzo_carattere">UserID</span></td>			          				      
				      <td style="width:20px" align="left">&nbsp;</td>
				      <td colspan="2" align="left"><input type="text" name="nome" id="nome" value="" /></td>
				      <td align="left">&nbsp;</td>
				      <td style="width:20px" align="left">&nbsp;</td>
			        </tr>
			        <tr>
			          <td align="left" colspan="7" style="height:10px;">&nbsp;</td>
			        </tr>
			        <tr>
                      <td style="width:20px" align="left">&nbsp;</td>
				      <td align="left"><span class="terzo_carattere">Password</span></td>				      
				      <td style="width:20px" align="left">&nbsp;</td>
				      <td align="left"><input type="password" name="password" id="password" value="" /></td>
				      <td style="width:20px" align="left">&nbsp;</td>
				      <td align="left"></td>
				      <td style="width:20px" align="left">&nbsp;</td>
			        </tr>
			        <tr>
                      <td style="width:20px" align="left">&nbsp;</td>
				      <td align="left" colspan="3"></td>				      
				      <td style="width:20px" align="left">&nbsp;</td>
				      <td align="left"><button type="submit" >LOGIN</button></td>
				      <td style="width:20px" align="left">&nbsp;</td>
			        </tr>
			       </tbody>
			        <tr>
				      <td colspan="7" style="height:10px" align="left"><br/></td>
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