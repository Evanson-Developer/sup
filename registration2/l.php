<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

$questions = array('Question1','Question2','Question3','etc','etc');

$answers = array(
array(0 =>'Question1-CorrectAnswer','Question1-Answer2','Question1-Answer3','Question1-Answer4'),
array(0 => 'Question2-CorrectAnswer','Question2-Answer2','Question2-Answer3','Question2-Answer4'),
array(0 => 'Question3-CorrectAnswer','Question3-Answer2','Question3-Answer3','Question3-Answer4')
);


echo '<form method="POST" action="">';     
		
echo '<p><label class="personal" for="element_3">'.$question.'</label><br />
	<input type="radio" name="choice1" value="A" />'.$choiceA.'<br />
	<input type="radio" name="choice1" value="B" />'.$choiceB'</p>
	<p><input type="submit" value="Submit"></p>
        </form>';
		if ($question=$key) {continue};
        //loop through the answers
        foreach($answers as $key=>$value){
            //if the value is nothing cont to next, removed question key 0
            if($value==''){continue;}else{
                
            }
        }
        echo '';


?>
</body>
</html>