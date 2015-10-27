 <?php 
error_reporting(0);
$e_name = ''; $e_group = ''; $e_leader = ''; $e_phone = ''; $e_email = ''; $e_number = ''; $e_questions = ''; $e_captcha = ''; 
$name = ''; $group = ''; $leader = ''; $phone = ''; $email = ''; $email2 = ''; $number = ''; $questions = ''; $captcha = ''; 
$mail_msg = '';
  
if(isset($_POST['SubmitYour'])){
      
	  if(isset($_POST['name']) && !empty($_POST['name'])){
	     $_POST['name'] = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
		 if(!empty($_POST['name'])){
			$name = $_POST['name'];
		 }
		 else{
			$e_name = 'Name Required';
		 }
      }
	  else{
			$e_name = 'Name Required';
		 }
		 
	  if(isset($_POST['group']) && !empty($_POST['group'])){
	     $_POST['group'] = filter_var($_POST['group'], FILTER_SANITIZE_STRING);
		 if(!empty($_POST['group'])){
			$group = $_POST['group'];
		 }
		 else{
			$e_group = 'Field Required';
		 }
      }
	  else{
			$e_group = 'Field Required';
		 }
		 
	  if(isset($_POST['leader']) && !empty($_POST['leader'])){
	     $_POST['leader'] = filter_var($_POST['leader'], FILTER_SANITIZE_STRING);
		 if(!empty($_POST['leader'])){
			$leader = $_POST['leader'];
		 }
		 else{
			$e_leader = 'Field Required';
		 }
      }
	  else{
			$e_leader = 'Field Required';
		 }
		 
	  if(isset($_POST['phone']) && !empty($_POST['phone'])){
	     if(is_numeric($_POST['phone']) && strlen($_POST['phone']) == 10){
			$phone = $_POST['phone'];
		 }
		 else{
			$e_phone = 'Enter Only Numbers & Ten Numbers Required';
		 }
      }
	  else{
			$e_phone = 'Field Required';
		 }
	  
	  if(isset($_POST['email']) && !empty($_POST['email'])){
	     if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
			if(isset($_POST['email2']) && !empty($_POST['email2'])){
	           $email2 = filter_var($_POST['email2'], FILTER_VALIDATE_EMAIL);
			}
			  if($_POST['email'] == $email2){
					$email = $_POST['email'];  
			  }
			  else{
				$e_email = 'Email Adresses dont Match';  
			  }
		 }
		 else{
			$e_email = 'Enter a Valid Email Address';
		 }
      }
	  else{
			$e_email = 'Field Required';
		 }
	  
	  
	  
	  
	  if(isset($_POST['number']) && !empty($_POST['number'])){
		  if(is_numeric($_POST['number'])){
			$number = $_POST['number'];
		 }
		 else{
			$e_number = 'Only Numbers Required';
		 }
	  }
	  else{
			$e_number = 'Field Required';
		 }
	  
	  if(isset($_POST['questions']) && !empty($_POST['questions'])){
	     $_POST['questions'] = filter_var($_POST['questions'], FILTER_SANITIZE_STRING);
		 if(!empty($_POST['questions'])){
			$questions = $_POST['questions'];
		 }
		 else{
			$e_questions = 'Field Required';
		 }
      }
	  else{
			$e_questions = 'Field Required';
		 }
	  
	  if(isset($_POST['g-recaptcha-response'])){
          $captcha=$_POST['g-recaptcha-response'];
        }
      if(!$captcha){
          $e_captcha = 'Please check the the captcha form';
          
      }
        $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6Lemqw8TAAAAADe9mKdZ_zlbcXYPSGj4rRwCHREV&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);
        
    if($response.success==false){
		$e_captcha = 'Please check the the captcha form';
    }
	else{
        $e_captcha = 'Captcha Vaildation Failed, Please try again';
     }
if(!empty($name)&& !empty($group)&& !empty($leader)&& !empty($phone)&& !empty($email)&& !empty($email2) && !empty($number)&& !empty($questions)&& !empty($captcha))
  {
	   //$from = 'From: ken@standuprentals.net';
      
    $sssto = 'jarodsu@gmail.com	'; 
	
    $subject = 'Group Inquiry';
	
	$headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: ". $email . "\r\n";
    		
    $body = "Inquiry Person: ".$name." \n
	         Group Name: ".$email." \n
	         Group Leader: ".$leader." \n
	         Phone number: ".$phone." \n
	         Email: ".$email." \n
	         Trip Date: ".$date." \n
	         Trip Time: ".$time." \n
	         Number of Participants: ".$number." \n
	         Additional Question: ".$questions."";
	 if (mail($to,$subject,$body,$headers)) { 
        $mail_msg = 'Your message has been sent!';
		$name = ''; $group = ''; $leader = ''; $phone = ''; $email = ''; $email2 = ''; $date = ''; $time = ''; $number = ''; $questions = ''; $captcha = ''; 
     } 	
	 else{
		$mail_msg = 'Something went wrong, go back and try again!'; 
	 }
  }  
  
   /*//$from = 'From: ken@standuprentals.net';
    //$from = 'evansonmwakio@gmail.com';   
    $to = 'jarodsu@gmail.com	'; 
	$to = 'evansonmwakio@gmail.com';
    $subject = 'Group Inquiry';
	
	$headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: ". $email . "\r\n";
    		
    $body = "Inquiry Person: ".$name." \n
	Group Name: ".$email." \n
	Group Leader: ".$leader." \n
	Phone number: ".$phone." \n
	Email: ".$email." \n
	Trip Date: ".$date." \n
	Trip Time: ".$time." \n
	Number of Participants: ".$number." \n
	Additional Question: ".$questions."";
	 if (mail($to,$subject,$body,$headers)) { 

     } */	 
     
}
	
	
	function err_msg($err){
		if(isset($err) && !empty($err)){
			$err_mg = '<span class="val_errors">'.$err. '* </span><br> ';
			echo $err_mg;
		}
	}
	
	function input_filler($value){
		if(isset($value) && !empty($value)){
			$value_mg = 'value="'.$value. '"';
			echo $value_mg;
		}
	}
	
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/standuptemp.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Stand Up Rentals</title>
<!-- InstanceEndEditable -->
<meta name="description" content="Stand Up Rentals - Stand Up Paddleboarding in Long Beach, California " />
<meta name="keywords" content="Standuprentals, stand up paddle boarding, stand up paddle board long beach, stand up paddleboarding long beach, stand up paddleboarding los angeles, stand up paddleboarding long beach, stand up paddle board rental, stand up paddle board rental long beach, stand up rentals, standup rentals, stand up rental, stand up paddleboard, stand up rental long beach, long beach stand up paddleboard rental, paddleboard rental, paddleboard rental long beach, paddleboard rental los angeles, stand up rentals long beach,
standuprentals long beach, paddleboard long beach, paddleboard los angeles" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/shadowbox.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.4.4.min.js" type="text/javascript"></script>
<script src="js/shadowbox/shadowbox.js" type="text/javascript"></script>
<script src="js/flickrshow-7.2.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Shadows+Into+Light|Varela+Round' rel='stylesheet' type='text/css'>
<script src="//use.edgefonts.net/kaffeesatz.js"></script>
<script type="text/javascript">
Shadowbox.init();
</script>
<style>
 .val_errors{ color: #ff0000;}
 .g-recaptcha{margin-left: 10px;}
</style>
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
<div class="wrapper">

	<div id="top">
    	<a href="index.html" id="logo"></a>
        <p id="slogan">Stand up - for a better view!</p>
         <div id="menu">
        	<ul>
           		<li><a href="index.html">Home</a></li>
            	<li><a href="rentals.html">Rentals</a></li>
                <li><a href="membership.html">Speed Pass Members</a></li>
                <li><a href="groups.html">Groups</a></li>
                <li><a href="storage.php">Personal Board Storage</a></li>
                <li><a href="dolphinadventure.html">Ultimate Dolphin Adventure</a></li>
                <li><a href="info.html">Hours and Info</a></li>
            </ul>
        </div>
    </div><!--top-->


	<div id="body">

    <!--start of body region-->
	<!-- InstanceBeginEditable name="EditRegion3" -->
	
    	
	 <div id="groupsfeature"></div>
    
    <a name="becomemember" id="becomemember"></a><h3>Group Rates - Team Building - SUP Company or Birthday Parties</h3>
    

    
	<p>Stand Up Paddling can be a great team building recreation, especially when it is done right. We have enough quality equipment and instructors to do your entire team! Everyone learns a new skill, has fun together and we help provide you with a photo for your wall or yearbook!
</p>

<div class="roundbox" style="margin-top:25px;">
    <div class="roundtop"></div>
    <div class="round-content">
    
    <p><span style="font-weight:bold;">Group Rate</span></p>
    
    <p><span class="bluerates" style="margin-left:0px; padding-left:0px;">$25</span> <span style="vertical-align:top">FOR 2 HOURS (2 HOURS MININUM)</span></p>
    
    <div class="roundbox-line" style="margin-top:10px; margin-bottom:25px;"></div>
    
    <p style="font-size:13px;"><b>Requires 20 or more participants; 19 or fewer in the party does not qualify for our group rate.</b><br /><br />  Group may divide with kayakers as a group… in other worlds, if some within the group would like to kayak and others Stand Up Paddling, they will qualify for the group rate and may launch simultaneous if the choose to do so! Kayak “Group Rate” is only $6 per hour with a two-hour minimal, or $12 for two hours.<br /><br />
This rate includes all standards and procedures of the individual rates as explained on the “<a href="rentals.html" target="_blank">Rentals</a>” page.<br /><br />
The group rate requires that everyone knows how to swim (for any of our activities), show up at the same time and have a group leader deliver single payment for the group. 
</p>
   

    </div><!--round-content-->
    <div class="roundbottom"></div>
    </div><!--roundbox-->

<div class="linebreak"></div>
	
   <h3>Signup Form</h3>
	  <?php echo $mail_msg; ?>
    	<form id="form2" name="form1" method="post" action="groups.php">
    
  
	<p>Name of person inquiring:&nbsp;<?php err_msg($e_name); ?><input type="text" name="name" <?php input_filler($name); ?> style="width:100px;" class="formField" /></p>
    <p>School, Team, Organization or Company Name:&nbsp; <?php err_msg($e_group); ?><input type="text" name="group" <?php input_filler($group); ?>  style="width:120px;" class="formField" id="phone"  /></p>
    <p>Group Leader:&nbsp;<?php err_msg($e_leader); ?><input type="text" name="leader" <?php input_filler($leader); ?>  style="width:120px;" class="formField" id="phone"  /></p>
    <p>Phone Number: &nbsp;<?php err_msg($e_phone); ?><input type="text" name="phone" <?php input_filler($phone); ?>  maxlength="10" style="width:120px;" class="formField" id="phone"  /></p>
    <p><?php err_msg($e_email); ?>Email Address:&nbsp;<input type="text" name="email" <?php input_filler($email); ?>  class="formField" /> &nbsp;&nbsp;Confirm Email Address: <input type="text" name="email2" <?php input_filler($email); ?>  class="formField" /><br /><span style="font-size:12px; font-style:italic;">(Email addresses is for information re: new rules, Dolphin Adventures, Advanced Classes and Special Hours...)</span></p>
    <p>Approximate Number of Participants:&nbsp;<?php err_msg($e_number); ?><input type="text" name="number" <?php input_filler($number); ?>  maxlength="10" style="width:120px;" class="formField" id="phone"  /></p>
    <p>Questions?&nbsp;<?php err_msg($e_questions); ?><input type="text" name="questions" <?php input_filler($questions); ?> style="width:120px;" class="formField" id="phone"  /></p>
    <!-- <p><label>*What is 6 times 3? (Anti-spam)</label><input name="human" placeholder="Type Here"></p> -->
	<?php err_msg($e_captcha); ?>
	<div class="g-recaptcha" data-sitekey="6Lemqw8TAAAAAAemCoRJ-KCE76rYC2FXagBp2eWx"></div>
	
     <p><input name="SubmitYour" type="submit" value="Sign Up Confirmation" /></p>



<div class="linebreak"></div>


 <h5>All participants must know how to swim and be in good physical condition. <b><u>California Aquatics does not discriminate on the basis of disability</u></b>.</h5>

	
	
	
	<!-- InstanceEndEditable -->
    <!--end of body region-->
    
    </div><!--body-->
    
</div><!--wrapper-->

<div id="footer">
<div id="footerbg"><p class="footertext">COPYRIGHT © 2012 STANDUPRENTALS.NET</p></div>
</div><!--footer-->
<script type="text/javascript"> Cufon.now(); </script>
</body>
<!-- InstanceEnd --></html>
