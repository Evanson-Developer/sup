<?php
session_start();
?>
<html>
<head>
<title>.:Quiz Results:.</title>
<link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>
<div id="main">
<?php

require("connect.php");


$query = mysql_query("select * from ".$_SESSION['table']) or die(mysql_error());
$cc=0;
while($fetch = mysql_fetch_assoc($query)){
	$query_q = mysql_query("select correctans from qb where sno=".$fetch['sno']);
	$fetch_q = mysql_fetch_assoc($query_q);
	if($fetch['usrans']==$fetch_q['correctans']){
			$cc+=1;
	}
}
if($cc==5){
	echo "You've Passed!";	
}else{
	echo "You've Failed!";
}

echo "<br />";
echo "<br />";
mysql_query("drop table ".$_SESSION['table']) or die("Error is droping!");

echo "<h3><p> Your Score In Exam ".$cc."/10 </p></h3><br />";

echo "<p>If You Want To Write Exam Again <a href='index.php'>Click Here</a>.</p>";

?>
</div>
</body>
</html>