<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/standuptemp.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Stand Up Rentals - Board Storage</title>
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
	
	 <div id="storage"></div>
    
<h3>Personal Waterfront Board Storage</h3>

<p>Own a piece of the beach!  Store your board 10 yards from the water with total access!  We have personal waterfront storage with individual board lock-up, biometric fingerprint high security access that records precise date and time of who enters, security cameras, rubber floors and walls for total in-door board protection!  Now you can paddle whenever you want, not just when we're open!
</p>

<p>There are limited spaces available. Email or call us if you are interested so we can show you the site. The location: <a rel="shadowbox;title=Location of Mother's Beach on Apian Way;width=650;height=500" title="Mother's Beach on Apian Way" href="https://maps.google.com/maps?q=Mother's+Beach&amp;ie=UTF8&amp;hl=en&amp;hq=Mother's+Beach&amp;hnear=Los+Angeles,+California&amp;t=m&amp;cid=16405266725860137447&amp;ll=33.763879,-118.121052&amp;spn=0.035677,0.051413&amp;z=14&amp;iwloc=A&amp;output=embed">Mother's Beach on Apian Way. (Map)</a></p>


	<div class="roundbox" style="margin-top:25px;">
    <div class="roundtop"></div>
    <div class="round-content">
    
    <p><span style="font-weight:bold">Personal Waterfront Board Storage</span></p>
    
    <p><span class="bluerates" style="margin-left:0px; padding-left:0px;">$30</span>per month</p>
    
    <div class="roundbox-line" style="margin-top:10px; margin-bottom:10px;"></div>
 
    <p style="font-size:13px; font-weight:bold">To sign up, email <a href="mailto:storage@standuprentals.net"> storage@standuprentals.net</a> or call (562) 397-0999 for information.</p>
    
    <div class="roundbox-line" style="margin-top:10px; margin-bottom:10px;"></div>
    
    <p><span style="font-weight:bold;">Pay Your Board Storage Subscription</span></p>
    
    <p style="font-size:13px;">To sign up for board storage:<br /><br /> (1) Read and agree to the <strong><a href="files/Board_Storage_Contract_2012.pdf" target="_blank">Terms and Conditions</a></strong>; (2) Pay for your monthly subscription below, (3) Print out a copy of the <strong><a href="files/Board_Storage_Contract_2012.pdf" target="_blank">Terms and Conditions</a></strong> and (4) print, scan and email to <a href="mailto:storage@standuprentals.net">storage@standuprentals.net</a> and bring it with you when you visit our location</p>
    
    <div class="roundbox-line" style="margin-top:10px; margin-bottom:20px;"></div>

     
     <p style="margin-top:20px;"><span style="font-weight:bold;">INDIVIDUAL BAY LOCKUP</span></p>
            
    <div style="height:45px; width:100%; padding-left:75px; margin-top:10px;">
    
<?php
require_once 'anet_php_sdk/AuthorizeNet.php'; // Include the SDK you downloaded in Step 2
$api_login_id = '579wYfN3';
$transaction_key = '9W25seDyUQn262kx';
$amount = "30";
$fp_timestamp = time();
$fp_sequence = "003" . time(); // Enter an invoice or other unique number.
$fingerprint = AuthorizeNetSIM_Form::getFingerprint($api_login_id,
$transaction_key, $amount, $fp_sequence, $fp_timestamp)
?>

<form method='post' action="https://secure.authorize.net/gateway/transact.dll">

<input type='hidden' name="x_login" value="<?php echo $api_login_id?>" />
<input type='hidden' name="x_fp_hash" value="<?php echo $fingerprint?>" />
<input type='hidden' name="x_amount" value="<?php echo $amount?>" />
<input type='hidden' name="x_fp_timestamp" value="<?php echo $fp_timestamp?>" />
<input type='hidden' name="x_fp_sequence" value="<?php echo $fp_sequence?>" />
<input type='hidden' name="x_version" value="3.1">
<input type='hidden' name="x_show_form" value="payment_form">
<input type='hidden' name="x_test_request" value="false" />
<input type='hidden' name="x_method" value="cc">
<input type='hidden' name="x_description" value="Monthly Subscription of Board Storage ($30 Private Bay).">
<input type='submit' value="$30 Private Bay" class="storage-pay">

</form>

<?php
require_once 'anet_php_sdk/AuthorizeNet.php'; // Include the SDK you downloaded in Step 2
$api_login_id = '579wYfN3';
$transaction_key = '9W25seDyUQn262kx';
$amount = "35";
$fp_timestamp = time();
$fp_sequence = "002" . time(); // Enter an invoice or other unique number.
$fingerprint = AuthorizeNetSIM_Form::getFingerprint($api_login_id,
$transaction_key, $amount, $fp_sequence, $fp_timestamp)
?>

<form method='post' action="https://secure.authorize.net/gateway/transact.dll">

<input type='hidden' name="x_login" value="<?php echo $api_login_id?>" />
<input type='hidden' name="x_fp_hash" value="<?php echo $fingerprint?>" />
<input type='hidden' name="x_amount" value="<?php echo $amount?>" />
<input type='hidden' name="x_fp_timestamp" value="<?php echo $fp_timestamp?>" />
<input type='hidden' name="x_fp_sequence" value="<?php echo $fp_sequence?>" />
<input type='hidden' name="x_version" value="3.1">
<input type='hidden' name="x_show_form" value="payment_form">
<input type='hidden' name="x_test_request" value="false" />
<input type='hidden' name="x_method" value="cc">
<input type='hidden' name="x_description" value="Monthly Subscription of Board Storage ($30 Private Bay Plus $5 Insurance).">
<input type='submit' value="$30 Private Bay Plus $5 Insurance" class="storage-pay">

</form>
    
     </div>    
  
     <div class="roundbox-line" style="margin-top:10px; margin-bottom:10px;"></div>
     
      <p><span style="font-weight:bold">Security</span></p>
     
      <p style="font-size:13px;">Upon clicking one of the payment options, you will be redirected to a secure payment form hosted on Authorize.net (A Subsidiary of Cybersource Coporation), the leading payment gateway provider on the Internet. Authorize.net's secure server software uses industry-standard Secure Socket Layer (SSL) encryption technology. SSL encodes your personal information, including credit card number, name, and address, as it travels over the Internet so that all transactions are secure.</p>
     
    
    </div><!--round-content-->
    <div class="roundbottom"></div>
    </div><!--roundbox-->

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
