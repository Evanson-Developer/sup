<?php
header("Content-type: text/html; charset=ISO-8859-1");
require_once('include/inc_db.php');
require_once('control_login.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Solve Quiz and Unlock Content</title>
<script type="text/javascript">

 var img_QeU = '<?php echo path_img ?>';
</script>
<?php
echo read_dir_js('lib/js/'); /*--> this is a function (see include/inc_function.php) that provide to invoke in dom all js file in js directory */
?>
<script type="text/javascript" src="lib/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="lib/ckeditor/adapters/jquery.js"></script>
<meta http-equiv="Content-Language" content="en">
<link rel="stylesheet" type="text/css" href="css/ui/jquery-ui.css" />
<link rel="stylesheet" type="text/css" href="css/style_index.css" />
<link rel="stylesheet" type="text/css" href="css/flexigrid.css" />
<!--[if IE]>
<link rel="stylesheet" type="text/css" href="css/flexigrid_IE.css" />
<![endif]-->
</head>
<body>
<div align="center">
<br/><br/>
<table border="0" width="800px" cellspacing="0" cellpadding="0" id="tab_flex">
	<tr>
		<td align="center" valign="top">				
                <table border="0" width="100%" id="table_scroll" cellspacing="0" cellpadding="0">
					<tr>
						<td align="left" valign="top">&nbsp;</td>
					</tr>
				</table>	
		</td>
	</tr>
</table>
<table border="0" width="800px" cellspacing="0" cellpadding="0" id="tab_add_new" class="like_flexigrid" style="display:none">
	<tr>
		<td align="left" valign="top">				
           	
		</td>
	</tr>	
</table>
<br/><br/>
</div>
<!-- ----------------------- ADVANCED SEARCH ------------------ 
 HOW ADD A INPUT FOR A ADVANCED SEARCH:
  <input type="text" name="name_r" value="" abbr_r="name userid" id="name_r" size="22" />
  EXPLANATION:
   - NAME -- > NAME OF FIELD TO GET REQUEST
   - ABBR_R -- > LOOK INTO var model IN JAVASCRIPT ON TOP, IN THIS CASE THIS PARM GIVE AN HIGHLIGHT CLASS (SEE CSS) TO CELL OF NAME AND USERID FOR EACH WORD THAT YOU SEARCH
     N.B. TO PLAY ADVANCED SEARCH SEE "JSON_LIST.PHP" FILE IN THIS DIRECTORY
-->
<div id="advanced_search">
<div class="container_advanced_search">
<form id="form_ad_search">
<table border="0" width="100%">
	<tr>
		<td>
		 <label>Name</label><br/>
		 <input type="text" name="name_r" value="" abbr_r="name" id="name_r" size="22" /><br/><br/>
		 <table border="0" width="100%" cellspacing="0" cellpadding="0">
	      <tr>
		   <td align="left" valign="top" colspan="2">Creation Date (<?php echo date_format ?>)</td>
	      </tr>
	      <tr>
		   <td align="left" valign="top">
             From<br/>
		     <input type="text" name="creation_date_from_r" value="" id="creation_date_from_r" class="date<?php echo str_replace('/','',date_format)?>" style="width:70px" />		   
		   </td>
		   <td align="left" valign="top">
		     To<br/>
		     <input type="text" name="creation_date_to_r" value="" id="creation_date_to_r" class="date<?php echo str_replace('/','',date_format)?>" style="width:70px" />		   		   
		   </td>
	      </tr>
	     </table>	
<br/>	     
		 <input type="checkbox" name="active_r" class="buttonizza" id="active_r" /><label for="active_r">Active</label>
		 <input type="checkbox" name="not_active_r" class="buttonizza" id="not_active_r" /><label for="not_active_r">Inactive</label>
		 <br/>		 
          <div>  
		      <button class="buttonizza a_search"><img src="img/search.png" alt="" style="vertical-align:middle;margin-right:2px;" /> Search</button>		      
		      <button class="buttonizza a_reset"><img src="img/reset.png" alt="" style="vertical-align:middle;margin-right:2px" /> Reset</button>
		      <button class="buttonizza a_close"><img src="img/no.png" alt="" style="vertical-align:middle;margin-right:2px" /> Close</button>
		  </div> 
		  <div style="clear:both"></div><br/><br/>		 		  		  		  	  	  
		</td>
	</tr>
</table>
</form>
</div>
</div>
<div class="advanced_search_shadow"></div>
<!-- ----------------------- END ADVANCED SEARCH ------------------ -->

</body>
</html>