<font face="Tahoma, Geneva, sans-serif" size="2">
<script language="javascript">
 function printpage()
  {
   window.print();
  }
</script>
<?php
/* VARIABLES */
$firstname = $_POST['firstname']; 
$lastname = $_POST['lastname']; 
$guardian = $_POST['guardian'];
$age = $_POST['age'];
$email = $_POST['email']; 
$addy = $_POST['addy']; 
$phone = $_POST['phone'];
$minorname = $_POST['minorname']; 
$minorage = $_POST['minorage']; 
$relation = $_POST['relation'];
$party_name = $_POST['party_name'];
$minor_yes_no = $_POST['minor_yes_no'];
$minor1 = $_POST['minor1']; 
$minor2 = $_POST['minor2']; 
$minor3 = $_POST['minor3'];
$today = date("m/j/Y");
/* QUIZ */
$choice1 = $_POST['choice1']; 
$choice2 = $_POST['choice2']; 
$choice3 = $_POST['choice3']; 
$choice4 = $_POST['choice4']; 
$choice5 = $_POST['choice5'];
$choice6 = $_POST['choice6']; 
$choice7 = $_POST['choice7']; 
$choice8 = $_POST['choice8']; 
$choice9 = $_POST['choice9'];
$choice10 = $_POST['choice10']; 
$choice11 = $_POST['choice11']; 
$choice12 = $_POST['choice12'];
$choice13 = $_POST['choice13']; 
$choice14 = $_POST['choice14']; 
$choice15 = $_POST['choice15']; 
$choice16 = $_POST['choice16'];
$choice17 = $_POST['choice17']; 
$choice18 = $_POST['choice18']; 
$choice19 = $_POST['choice19']; 
$choice20 = $_POST['choice20'];
$choice21 = $_POST['choice21'];
$choice22 = $_POST['choice22']; 
$choice23 = $_POST['choice23']; 
$choice24 = $_POST['choice24'];
$choice25 = $_POST['choice25']; 
$choice26 = $_POST['choice26']; 
$choice27 = $_POST['choice27']; 
$choice28 = $_POST['choice28'];
$choice29 = $_POST['choice29']; 
$choice30 = $_POST['choice30']; 
$choice31 = $_POST['choice31']; 
$choice32 = $_POST['choice32'];
/* choice 33 */
$choice33a = $_POST['choice33a'];
$choice33b = $_POST['choice33b'];
$choice33c = $_POST['choice33c'];
$choice33d = $_POST['choice33d'];
$choice33e = $_POST['choice33e'];
$choice33f = $_POST['choice33f'];
$choice33g = $_POST['choice33g'];
$choice33 = $choice33a.$choice33b.$choice33c.$choice33d.$choice33e.$choice33f.$choice33g;
/* END OF CHOICE 33*/ 
$choice34 = $_POST['choice34']; 
$choice35 = $_POST['choice35']; 
$choice36 = $_POST['choice36'];
$choice37 = $_POST['choice37']; 
$choice38 = $_POST['choice38']; 
$choice39 = $_POST['choice39']; 
$choice40 = $_POST['choice40'];
/* Conditions */
if (
$choice1=='A' &&
$choice2=='False' &&
$choice3=='True' &&
$choice4=='False' &&
$choice5=='6feet' &&
$choice6=='True' &&
$choice7=='Yes' &&
$choice8=='True' &&
$choice9=='True' &&
$choice10=='True' &&
$choice11=='False' &&
$choice12=='No' &&
$choice14=='Hero' &&
$choice15=='True' &&
$choice16=='True' &&
$choice17=='Right' &&
$choice18=='True' &&
$choice19=='False' &&
$choice20=='True' && 
$choice21=='True' && 
$choice22=='False' && 
$choice23=='True' && 
$choice24=='True' &&
$choice25=='False' &&
$choice26=='False' &&
$choice28=='No' &&
$choice30=='False' && 
$choice31=='True' && 
$choice32=='True' &&
$choice33=='G' &&
$choice34=='True' &&
$choice35=='True' &&
$choice36=='Yes' &&
$choice39=='True' &&
$choice40=='True'
)
{
echo "<p style=\"font-weight:bold; font-size:15px; text-align:center;\"><b><u>$firstname $lastname</u> has officially passed the Rules of the Road Test with 100%!</b></p><br />";
echo "Date: <b>$today</b>&nbsp;&nbsp;&nbsp;Email Address: <b>$email</b>&nbsp;&nbsp;&nbsp;Phone Number: <b>$phone</b> <br />";
echo "Mailing Address: <b>$addy</b> <br />";
echo "
<h3>Participant Agreement, Release and Acknowledgment of Risk</h3>
<p style=\"text-align:justify; font-size:12px;\">In consideration of the services of Stand Up Rentals, California Aquatics, the City of Long Beach, any agents, owners, officers, volunteers, participants, employees, groupies and any entity acting in any capacity on their behalf (hereinafter collectively referred to as \"the concessionaire's\"), <b>I do hereby release and discharge the concessionaire's from liability</b>, on behalf of myself, my children, my parents, my heirs, assigns, personal representative and estate as follows: <b>I acknowledge that Stand Up Paddling entails known and unanticipated risks, which could result in physical or emotional injury, paralysis, death</b>, or damage to myself, to property, or to third parties. I understand that such risks cannot be eliminated without jeopardizing essential qualities of the activity. The risks include, among other things, capsizing, drowning, hit by watercraft, attack by giant killer sharks, jellyfish sting, sunburn, an incredibly bunched undergarment, sandy feet & more. Also, <b>\"the concessionaire's\" have difficult jobs. They seek safety but are not infallible. They may be ignorant of a participant's fitness or abilities or just ignorant altogether. They may give inadequate warnings or instructions, and the equipment being used might malfunction.  I agree and to accept and assume all of the risks existing in this activity.</b> My participation is purely voluntary, and I elect to participate in spite of the risks. <b>I hereby voluntarily release, forever discharge, and agree to indemnify and hold harmless \"the concessionaire's\" as listed herein from any and all claims, demands, or causes of action, which are in any way connected with my participation in this activity or my use of \"the concessionaire's\" equipment or facilities, including any such claims which allege negligent acts or omissions of \"the concessionaire's\".</b> Should \"the concessionaire's\" or anyone acting on their behalf be required to incur attorney's fees and costs to enforce this agreement, I agree to indemnify and hold them harmless for all such fees and costs. <b>I certify that I have adequate insurance to cover any injury or damage I may cause or suffer while participating, or else I agree to bear the costs of such injury or damage to myself an all for who I am signing on their behalf.  I HAVE NO MEDICAL OR PHYSICAL CONDITIONS THAT COULD INTERFERE WITH MY SAFTEY IN THIS ACTIVITY</b> and I am willing to assume - and bear costs of - all risks that may be created, directly or indirectly, by any such condition whether I know about it or not. By signing this document, I acknowledge that if anyone is hurt or property is damaged during my participation in this activity, I may be found in a court of law to have waived my right to maintain a lawsuit against California Aquatics or the City of Long Beach, its agents, officers, employees, volunteers and any other persons acting in any capacity on their behalf, on the basis of any claim from which I have released them herein. <b>I have had sufficient opportunity to read the entire document, watched the Rules of the Road safety video & agree to be bound by the terms & follow the rules. I understand that ALL PARTICIPANTS MUST BE VERY GOOD SWIMMERS & USE LIFEJACKETS</b> in accordance with the laws. I further agree to indemnify and hold harmless \"the concessionaire's\" from claims brought by, or on behalf of Minors (under 18), and which are in any way connected with such use or participation by any Minors.  <b>My signature qualifies my understanding to supervise ALL persons using equipment for which I have signed and assumed responsibility.  I agree to pay for any damage done to any board, boat properties.  My signature acknowledges that I agree to permit this to be a PERMANENT release for any activity now and future with concessionaire, including but not limited to future rentals, advanced training, Catalina Trips, Dolphin Adventures & any charter boat operators working with included programs.</b></p>
<p><b>Print Name</b> __________________________  <b>18+ Signature:</b> __________________________________</p>
<p><u>DO NOT WRITE BELOW THIS LINE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u></p>
Certifying Instructor & Date: ________________/____/____  Verifying Instructor & Date ________________/____/____ <br />
";
switch ($minor_yes_no)
{
case "Yes":
  echo "<br /><br />
<center><b>UNDER 18: PARENT OR RESPONSIBLE PARTY MUST SIGN PLEASE READ VERY CAREFULLY!</b></center><br />
<p>My son or daughter must participate with me only. <b>$minor1</b> Initial Here ______________________</p>
<p>My son or daughter may participate with anyone 18 or older.  <b>$minor2</b> Initital Here ____________________ </p>
<p>My so or daughter is a responsible paddler with great aquatic skills, exceptionally mature and safe judgment, superb health and may participate in these activities alone and unsupervised and may walk up to rent at anytime without my being present. <b>$minor3</b> Initial Here ______________________</p>

<p style=\"text-align:justify;\">I give the concessionaire the right, <u>but not the responsibility</u>, to restrict my son/daughter from participation in accordance to any slight reservation that may occur at the moment by the concessionaire including but not limited to weather conditions, traffic, attitude of the minor or minors company or any other slight supervision considerations. I also agree that the membership will be revoked without benefit of refund in the event my son or daughter does not abide any safety rule. </p>

<p style=\"text-align:justify;\">My signature hereby grants permission for my son or daughter full participation and I assume full responsibility in accordance with any involvement with any of the Stand Up Paddling activities events offered by California Aquatics or the City of Long Beach now or in the future. My signature is meant to include all future participation in any activities provided through the concessionaire and charters, and serves as a clarification that I have given 100% consideration of consequences. I understand the word \"concessionaire\" as used in all signed agreements and whom it releases from liability.</p>

<p style=\"text-align:justify;\">The written quiz was taken and passed by my son or daughter and we have reviewed each rule in detail.  I am 100% confident that he or she will abide by all safety rules.</p>

Name of Minor: <b>$firstname $lastname</b> <br /> 
Age: <b>$minorage</b> <br />                            
Responsible Party Name: <b>$party_name</b> <br />
Relation to Minor: <b>$relation</b> <br /><br />
Responsible Party Signature  _______________________________    Date ____/____/____<br /><br />
";
  break;
case "No":
  echo "<br />";
  break;
default:
  echo "<br />";
}
}
else {
echo "Sorry. You did no answer all the question correctly. Please watch video #4 and take the test again.<br />";
}
echo "
<form>
 <input type=\"button\" value=\"Print\" onclick=\"printpage();\">
</form>
"
?>
</font>

