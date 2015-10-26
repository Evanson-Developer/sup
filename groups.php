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
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
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
	
    	<form id="form2" name="form1" method="post" action="groups.php">
    
  
	<p>Name of person inquiring:&nbsp;<input type="text" name="name" style="width:100px;" class="formField" /></p>
    <p>School, Team, Organization or Company Name:&nbsp;<input type="text" name="group" maxlength="10" style="width:120px;" class="formField" id="phone"  /></p>
    <p>Group Leader:&nbsp;<input type="text" name="leader" maxlength="10" style="width:120px;" class="formField" id="phone"  /></p>
    <p>Phone Number: &nbsp;<input type="text" name="phone" maxlength="10" style="width:120px;" class="formField" id="phone"  /></p>
    <p>Email Address:&nbsp;<input type="text" name="email" class="formField" /> &nbsp;&nbsp;Confirm Email Address: <input type="text" name="email2" class="formField" /><br /><span style="font-size:12px; font-style:italic;">(Email addresses is for information re: new rules, Dolphin Adventures, Advanced Classes and Special Hours...)</span></p>
    <p>Date of Trip:&nbsp;<input type="text" name="date" maxlength="10" style="width:120px;" class="formField" id="phone"  /></p>
    <p>Time of Trip:&nbsp;<input type="text" name="time" maxlength="10" style="width:120px;" class="formField" id="phone"  /></p>
    <p>Approximate Number of Participants:&nbsp;<input type="text" name="number" maxlength="10" style="width:120px;" class="formField" id="phone"  /></p>
    <p>Questions?&nbsp;<input type="text" name="questions" maxlength="10" style="width:120px;" class="formField" id="phone"  /></p>
    <p><label>*What is 6 times 3? (Anti-spam)</label><input name="human" placeholder="Type Here"></p>
     <p><input name="Submit Your" type="submit" value="Sign Up Confirmation" /></p>

 <?php 

$name = $_POST['name'];
$group = $_POST['group'];
$leader = $_POST['leader'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$date = $_POST['date'];
$time = $_POST['time'];
$number = $_POST['number'];
$questions = $_POST['questions'];

    $from = 'From: ken@standuprentals.net'; 
    $to = 'jarodsu@gmail.com	'; 
    $subject = 'Group Inquiry';
    $human = $_POST['human'];
			
    $body = "Inquiry Person: $name\n
	Group Name: $email\n
	Group Leader: $leader\n
	Phone number: $phone\n
	Email: $email\n
	Trip Date: $date\n
	Trip Time: $time\n
	Number of Participants: $number\n
	Additional Question: $questions";
				
    if ($_POST['submit'] && $human == '18') {				 
        if (mail ($to, $subject, $body, $from)) { 
	    echo '<p>Your message has been sent!</p>';
	} else { 
	    echo '<p>Something went wrong, go back and try again!</p>'; 
	} 
    } else if ($_POST['submit'] && $human != '') {
	echo '<p>You answered the anti-spam question incorrectly!</p>';
    }
	
?>

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
