<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="style.css" type="text/css" />
<title>The Web Acronym Test</title>
</head>
<?php
require_once('function.php');
require_once('answerkey.php');
?>
<body id="splash">
<div id="wrapper">
<div id="quiz">
<h2>Start The Test</h2>
<p>If featuring on the Score Board is of absolutely no interest to you,</p>
<form id="jttt" method="post" action="test.php">
<p><input type="submit" value="Just Take The Test" /></p>
</form>
<p id="helper"></p>
</div><!--quiz-->
</div><!--wrapper-->
</body>
</html>