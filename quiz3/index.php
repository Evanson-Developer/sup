<?php
session_start();

require("connect.php");

$arr = range(a,z);
$num = range(1,9);

if(!isset($_POST['sno'])){
	$sno=1;
	

$qusid = range(1,52);
$qus = array_rand($qusid);

$_SESSION['qid'] = $qus;

$str = $arr[array_rand($arr)].$num[array_rand($num)].$arr[array_rand($arr)].$arr[array_rand($arr)].$num[array_rand($num)];

$_SESSION['table'] = str_shuffle($str);
mysql_query("create table if not exists ".$_SESSION['table']."(sno int(11) null auto_increment, usrans varchar(11) not null, qid int(11), primary key(sno));") or die(mysql_error());
	
}else{
	$sno=$_POST['sno'];
	$sno++;	
	$ans=$_POST['op'];
	
	$s=$_POST['s'];
	
	$qusid = range(1,52);
	$qus = array_rand($qusid);
	
	mysql_query("insert into ".$_SESSION['table']." values(null, '$ans', '$s');");
	if($sno==11){
	header("Location: results.php");
	}
}
	
?>
<html>
<head>
<title>.:Quiz:.</title>
<link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>
<div id="main">
<?php

$query = mysql_query("select * from qb where sno=$qus") or die(mysql_error());
$fetch = mysql_fetch_assoc($query) or die(mysql_error());

?>
<form name="fm" id="fm" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
<input type="hidden" id="sno" name="sno" value="<?php echo $sno; ?>" />

<?php

echo "<table border='2' cellpadding='15'>";
echo "<tr><td>".$sno."</td><td>".$fetch['question']."</tr></td>";
echo "<tr><td colspan='2'>"."<input type='radio' name='op' id='op' value='a'>".$fetch['a']."</tr></td>";
echo "<tr><td colspan='2'>"."<input type='radio' name='op' id='op' value='b'>".$fetch['b']."</tr></td>";
echo "<tr><td colspan='2'>"."<input type='radio' name='op' id='op' value='c'>".$fetch['c']."</tr></td>";
echo "<tr><td colspan='2'>"."<input type='radio' name='op' id='op' value='d'>".$fetch['d']."</tr></td>";

?>
<tr><td colspan='2'><input type="hidden" name="s" id="s" value="<?php echo $fetch['sno']; ?>"><input type="submit" name="sb" id="sb"/></td></tr>
</table>
</form>
</div>

<footer id="footer">
        <center><p>Copyright &copy; 2011</p>
        <p>Designed And Developed By <a href="http://www.viswanathkeerthi.in/">Viswanath Keerthi</a></p></center>
</footer>

</body>
</html>