<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Speed Pass Registration Quiz & Waiver of Liability</title>
<link href="../css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://use.typekit.com/prg0kiv.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
</head>

<body>

<div class="wrapper">
<div id="body">

<h3>Speed Pass Registration Quiz & Waiver of Liability</h3>

<p>Complete all questions until passed with 100%.  If you have trouble, answers are available in the #4 Rules of the Road video clip. Print and bring a copy with you to our rental location to register.  We do not collect personal information and email addresses from this website.</p>

<div class="linebreak"></div>

<div id="form">


<?php
require_once('keys.php');

$num = "1";

$question = $question[$num]

echo "<form method=\"post\" action=\"\">";

echo "<label>$question</label>";

	
echo "<li><input type=\"radio\" id=\"$answer2\" value=\"$answer2\" name=\"answers\" />\n";
echo "<label for=\"$answer2\">$answer</label></li>\n";


echo "<input type=\"hidden\" name=\"num\" value=$num; />";
echo "<input type=\"hidden\" name=\"submitter\" value=\"TRUE\" />";
echo "<input type=\"submit\" id=\"submit\" name=\"submit\" value=\"Next Question\" /></form>";

$postedanswer = $_POST['answers'];

if ($postedanswer == $answers[$num]['0']) {
	$num = $num+1;
}
if ($postedanswer == '') {
	echo "Please make a selection";
}
else {
    echo "You are wrong";
}


?>

</form>




</div><!--form-->




</div><!--body-->
</div><!--wrapper-->

</body>
</html>