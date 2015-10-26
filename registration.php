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
<script type="text/javascript">
function checkEmail(theForm) {
    if (theForm.email.value != theForm.email2.value)
    {
        alert('Your email addresses don\'t match. Please double check');
        return false;
    }
}
</script>
<script src="js/jquery.maskedinput.min.js" type="text/javascript"></script>
<script type="text/javascript">
jQuery(function($){
   $("#phone").mask("(999) 999-9999");
});
</script>
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
	
	 <div id="prepare"><div id="warning"></div></div>
     
     

	<h3>Speed Pass Registration Quiz & Waiver of Liability</h3>
    
    <p>Complete all questions until passed with 100%.  If you have trouble, answers are available in the #4 Rules of the Road video clip. Print and bring a copy with you to our rental location to register.  We do not collect personal information and email addresses from this website.</p>
    
    
    
    
    <div id="form">
    
  
   	<form id="form1" name="form1" method="post" action="process.php" onsubmit="return checkEmail(this);">
    
    <div class="linebreak"></div>
  
	<p>First Name:&nbsp;<input type="text" name="firstname" style="width:100px;" class="formField" />&nbsp;&nbsp;Last Name:&nbsp;<input type="text" name="lastname" style="width:100px;" class="formField" /></p>
    <p>Phone Number: &nbsp;<input type="text" name="phone" maxlength="10" style="width:120px;" class="formField" id="phone"  /></p>
    <p>Email Address: <input type="text" name="email" class="formField" /> &nbsp;&nbsp;Confirm Email Address: <input type="text" name="email2" class="formField" /><br /><span style="font-size:12px; font-style:italic;">(Please fill if you wish to recieve information regarding new rules, dolphin trips and other special offers.)</span></p>
    <p>Mailing Address: Include Street, Number and Apartment #, City, State and Zip Code:<br /><input type="text" name="addy" style="width:500px;" class="formField" /></p>
    
    <div class="linebreak"></div>
    
    <p><b>Are you a parent or responsible party signing for a minor?</b>&nbsp;&nbsp;&nbsp;YES&nbsp;<input name="minor_yes_no" type="radio" value="Yes" />&nbsp;&nbsp;NO&nbsp;<input name="minor_yes_no" type="radio" value="No" /></p>
    
    <script> $(document).ready(function(){
                  $("input[name$='minor_yes_no']").click(function(){
                  var radio_value = $(this).val();
                  if(radio_value=='Yes') {
                    $("#minor-section").show("fast");
                     $("#no_to_agreement").hide("fast");
                  }
                  else if(radio_value=='No') {
                   $("#no_to_agreement").show("fast");
                    $("#minor-section").hide("fast"); 
                   } 
                  });
                  $("#minor-section").hide();
                  $("#no_to_agreement").hide();
                });
                </script>
                
                
    <div id="minor-section">
    
    <p>Age of Minor: <input type="text" name="minorage" style="width:30px;" class="formField" /></p>
    <p>Responsible Party Name: <input type="text" name="party_name" class="formField" /></p>
    <p>Relation to Minor: <input type="text" name="relation" class="formField" /></p>
    
     
    
    <p><label class="personal" for="element_3">My son/daughter may participate with me only.</label><br />
	<input type="radio" name="minor1" value="Yes" />Yes<br />
	<input type="radio" name="minor1" value="No" />No</p>
    
    <p><label class="personal" for="element_3">My son/daughter may participate with anyone 18 or older.</label><br />
	<input type="radio" name="minor2" value="Yes" />Yes<br />
	<input type="radio" name="minor2" value="No" />No</p>
    
    <p><label class="personal" for="element_3"> My son/daughter is a responsible paddler with great aquatic skills, 
    exceptionally mature and safe judgment, and may participate in these activities alone and unsupervised and may
     walk up to rent at anytime without my being present.</label><br />
	<input type="radio" name="minor3" value="Yes" />Yes<br />
	<input type="radio" name="minor3" value="No" />No</p>
    </div><!--minor-section-->
    
    <div class="linebreak"></div>
    
    
	<p><label class="personal" for="element_3">1) The absolute safest policy regarding lifejackets on is?</label><br />
	<input type="radio" name="choice1" value="A" />A) Always wear one<br />
	<input type="radio" name="choice1" value="B" />B) Have one on Board.</p>
    
    <p><label class="personal" for="element_3">2) It is ok for non-swimmers to go paddling as long as 
    they wear a lifejacket.</label><br />
	<input type="radio" name="choice2" value="True" />True<br />
	<input type="radio" name="choice2" value="False" />False</p>
    
    
    <p><label class="personal" for="element_3">3) When leaving or returning to the beach, the safest way 
    is to start and return on your knees.</label><br />
	<input type="radio" name="choice3" value="True" />True<br />
	<input type="radio" name="choice3" value="False" />False</p>
    
    <p><label class="personal" for="element_3">4) Use the paddle as a support in the sand to assist when getting on or off of your board.</label><br />
	<input type="radio" name="choice4" value="True" />True<br />
	<input type="radio" name="choice4" value="False" />False</p>
    
    <p><label class="personal" for="element_3">5) Keep at least how many feet away from other paddlers, 
    vessels and obstacles?</label><br />
	<input type="radio" name="choice5" value="2feet" />2'<br />
	<input type="radio" name="choice5" value="3feet" />3'<br />
    <input type="radio" name="choice5" value="6feet" />6'</p>
    
    <p><label class="personal" for="element_3">6) If you must paddle against too much wind, reduce the 
    resistance by paddling on your knees.</label><br />
	<input type="radio" name="choice6" value="True" />True<br />
	<input type="radio" name="choice6" value="False" />False</p>
    
    <p><label class="personal" for="element_3">7) If you feel like you may fall, or if you get too
     close to paddlers, boats. docks or any hard objects, bring your
	center of gravity closer to the board by dropping low to your knees is a safe standard.</label><br />
	<input type="radio" name="choice7" value="Yes" />Yes<br />
	<input type="radio" name="choice7" value="No" />No</p>
    
    <p><label class="personal" for="element_3">8) The cement stairs at Marina Pacifica should never 
    be used because they are very dangerous!</label><br />
	<input type="radio" name="choice8" value="True" />True<br />
	<input type="radio" name="choice8" value="False" />False</p>
    
    <p><label class="personal" for="element_3">9) Dress appropriately for the weather conditions and to 
    expect a possible fall in the water.</label><br />
	<input type="radio" name="choice9" value="True" />True<br />
	<input type="radio" name="choice9" value="False" />False</p>
    
    <p><label class="personal" for="element_3">10) Do not get off on private docks unless you have 
    an emergency.</label><br />
	<input type="radio" name="choice10" value="True" />True<br />
	<input type="radio" name="choice10" value="False" />False</p>
    
    <p><label class="personal" for="element_3">11) You are not responsible for any damages 
    incurred by you to persons or private property.</label><br />
	<input type="radio" name="choice11" value="True" />True<br />
	<input type="radio" name="choice11" value="False" />False</p>
    
    <p><label class="personal" for="element_3">12) If you ding a board and report it immediately 
    upon returning, do you have to pay for damage?</label><br />
	<input type="radio" name="choice12" value="Yes" />Yes<br />
	<input type="radio" name="choice12" value="No" />No</p>
    
     <p><label class="personal" for="element_3">13) If you think you dinged a board, 
     and you do report it you are a...</label><br />
	<input type="radio" name="choice14" value="Hero" />Hero<br />
	<input type="radio" name="choice14" value="Idiot" />Idiot</p>
    
     <p><label class="personal" for="element_3">14) Never assume or insist on the right of 
     way when approaching other vessels.</label><br />
	<input type="radio" name="choice15" value="True" />True<br />
	<input type="radio" name="choice15" value="False" />False</p>
    
     <p><label class="personal" for="element_3">15) When paddling, pick a side and
     avoid the middle of the channel.</label><br />
	<input type="radio" name="choice16" value="True" />True<br />
	<input type="radio" name="choice16" value="False" />False</p>
    
     <p><label class="personal" for="element_3">16) Whenever possible, authorities prefer 
     that you use what side of the channel?</label><br />
	<input type="radio" name="choice17" value="Left" />Left<br />
	<input type="radio" name="choice17" value="Right" />Right</p>
    
     <p><label class="personal" for="element_3">17) There is danger of getting killed by 
     a propeller if you hang onto a power boat while paddling.</label><br />
	<input type="radio" name="choice18" value="True" />True<br />
	<input type="radio" name="choice18" value="False" />False</p>
    
     <p><label class="personal" for="element_3">18) It is ok to paddle if you only have 
     one or two drinks.</label><br />
	<input type="radio" name="choice19" value="True" />True<br />
	<input type="radio" name="choice19" value="False" />False</p>
    
     <p><label class="personal" for="element_3">19) Never paddle while under the influence 
     of alcohol or drugs.</label><br />
	<input type="radio" name="choice20" value="True" />True<br />
	<input type="radio" name="choice20" value="False" />False</p>
    
     <p><label class="personal" for="element_3">20) Safety (when planning or executing your 
     trip) is first and foremost.</label><br />
	<input type="radio" name="choice21" value="True" />True<br />
	<input type="radio" name="choice21" value="False" />False</p>
    
     <p><label class="personal" for="element_3">21) It is ok to take the rental boards out 
     into the ocean without an instructor.</label><br />
	<input type="radio" name="choice22" value="True" />True<br />
	<input type="radio" name="choice22" value="False" />False</p>
    
     <p><label class="personal" for="element_3">22) It is not ok to even head out through 
     the channel leading out toward the ocean.</label><br />
	<input type="radio" name="choice23" value="True" />True<br />
	<input type="radio" name="choice23" value="False" />False</p>
    
     <p><label class="personal" for="element_3">23) Wind, current and boat traffic can 
     affect your paddling experience and all of these conditions and situations
	should be strongly considered before you decide if it a safe time to paddle.</label><br />
	<input type="radio" name="choice24" value="True" />True<br />
	<input type="radio" name="choice24" value="False" />False</p>
    
     <p><label class="personal" for="element_3">24) It is ok to paddle in the swim-restricted
      areas.</label><br />
	<input type="radio" name="choice25" value="True" />True<br />
	<input type="radio" name="choice25" value="False" />False</p>
    
     <p><label class="personal" for="element_3">25) It is ok to leave your board unattended 
     on a public beach or dock.</label><br />
	<input type="radio" name="choice26" value="True" />True<br />
	<input type="radio" name="choice26" value="False" />False</p>
    
     <p><label class="personal" for="element_3">26) It is ok for me to let someone use the rental
      board that has not been approved by the concessionaire as long as they are under my direction and
       I paid for the rental fee.</label><br />
	<input type="radio" name="choice28" value="Yes" />Yes<br />
	<input type="radio" name="choice28" value="No" />No</p>
    
     <p><label class="personal" for="element_3">27) It is ok to leave the board standing upright
      in a vertical position.</label><br />
	<input type="radio" name="choice30" value="True" />True<br />
	<input type="radio" name="choice30" value="False" />False</p>
    
     <p><label class="personal" for="element_3">28) If you start to fall (and it is too late to get your body low), avoid hitting any hard objects such as your board, your paddle, another board, a boat, dock or any hard object by releasing your paddle and falling away from any hard object.</label><br />
	<input type="radio" name="choice31" value="True" />True<br />
	<input type="radio" name="choice31" value="False" />False</p>
    
     <p><label class="personal" for="element_3">29) If you fall into the water, you should ignore
      the paddle and get onto the board first!</label><br />
	<input type="radio" name="choice32" value="True" />True<br />
	<input type="radio" name="choice32" value="False" />False</p>
    
     <p><label class="personal" for="element_3">30) Boat traffic can obviously affect your 
     paddling experience. Circle the letter that best answers how boats may affect your 
     paddling course and how you will deal with boat traffic...</label><br />
     
     <label><input type="checkbox" name="choice33a" value="A" id="choice33_0" />
       A) Stay out of boat traffic as much as possible</label><br />
     <label><input type="checkbox" name="choice33b" value="B" id="choice33_1" />
       B) Stay out of the middle of channels and canals</label><br />
       <label><input type="checkbox" name="choice33c" value="C" id="choice33_2" />
       C) Pick a side of the channel and use the right side whenever possible</label><br />
       <label><input type="checkbox" name="choice33d" value="D" id="choice33_3" />
       D) Stay out of the waterski area</label><br />
       <label><input type="checkbox" name="choice33e" value="E" id="choice33_4" />
       E) Make it clear to boats what direction you are taking by moving out 
       of oncoming traffic and not insisting on a right of way</label><br />
       <label><input type="checkbox" name="choice33f" value="F" id="choice33_5" />
       F) Stay out of the channel leading out toward the ocean as it is often crowded 
       with boats and increased traffic and wakes make it more difficult and less safe</label><br />
       <label><input type="checkbox" name="choice33g" value="G" id="choice33_5" />
       G) All of the above.</label><br /></p>
    
     <p><label class="personal" for="element_3">31) If it is too windy to paddle on your knees, 
     paddle with your arms prone on your stomach</label><br />
	<input type="radio" name="choice34" value="True" />True<br />
	<input type="radio" name="choice34" value="False" />False</p>
    
     <p><label class="personal" for="element_3">32) I understand that the concessionaire has 
     made it clear that paddlers must wear a quality PFD and no employee, volunteer, assistant
      or worker making any comment adverse to this statement will cause me (or whomever I am 
      signing for) to consider that paddlers' do not need to wear a PFD to be safe.</label><br />
	<input type="radio" name="choice35" value="True" />True<br />
	<input type="radio" name="choice35" value="False" />False</p>
    
     <p><label class="personal" for="element_3">33) I promise to rely on myself & not the 
     concessionaire or anyone at the rental site to check & consider wind , weather and all safety 
     conditions through internet and/or other sources before paddling.</label><br />
	<input type="radio" name="choice36" value="Yes" />Yes<br />
	<input type="radio" name="choice36" value="No" />No</p>
    
    <p><label class="personal" for="element_3">34) A Coast Guard approved INFLATABLE PFD 
    must be worn to be acceptable.</label><br />
	<input type="radio" name="choice39" value="True" />True<br />
	<input type="radio" name="choice39" value="False" />False</p>
    
    <p><label class="personal" for="element_3">35) I am a very good swimmer and have no 
    health problems whatsoever.</label><br />
	<input type="radio" name="choice40" value="True" />True<br />
	<input type="radio" name="choice40" value="False" />False</p>
    
    <p><input name="" type="submit" /></p>
    
    </form>
    
    </div><!--formdiv-->
 
 
 <div class="linebreak"></div>

<h5><a href="info.html" target="_self" style="text-decoration:underline">See Vital Information, Waiver Agreement & Assumption of Risks before enrolling!</a></h5>

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
