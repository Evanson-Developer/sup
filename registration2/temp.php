<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>

<?php
session_start();
echo '<h2>ONLINE QUIZ</h2>';


//Scores
if($_SERVER['REQUEST_METHOD']=='GET' && isset($_GET['scores'])){
    echo 'Basic output for scores';
    echo '<pre>';
    print_r($_SESSION['answers']);
    echo '</pre>';
    unset($_SESSION['answers']);
    unset($_SESSION['question']);
}


//Session question/array is set
if(isset($_SESSION['question']) && isset($_SESSION['questions_array'])){

    //Handle prev question post
    if($_SERVER['REQUEST_METHOD']=='POST'){
        //process prev question
        $_SESSION['answers'][$_SESSION['question']-1]=(0+$_POST['answer']);
    }

    if($_SESSION['question'] < $_SESSION['total_question']){
        $q=$_SESSION['question'];
        //EDIT - Shuffle answers for output
        //Hold the question into a var
        $question = $_SESSION['questions_array'][$q][0];
        //unset the question from the array
        unset($_SESSION['questions_array'][$q][0]);
        //put all the pos answers into a new array
        $answers = $_SESSION['questions_array'][$q];
        //shuffle the answers
        shuffle($answers);


        echo '<form method="POST" action="">
              <h3>'.$question.'</h3>';
        //loop through the answers
        foreach($answers as $key=>$value){
            //if the value is nothing cont to next, removed question key 0
            if($value==''){continue;}else{
                echo '<p><input type="radio" value="'.$value.'" name="answer">'.$value.'</p>';
            }
        }
        echo '<p><input type="submit" value="Submit"></p>
        </form>';

    }else{
        //Quiz Complete
        echo 'Test Complete <a href="'.basename($_SERVER["SCRIPT_FILENAME"]).'?scores=1">Check scores</a>';
    }

    //Assign next question to session
    $_SESSION['question']++;
}else{

    //Pages first load so show quiz index
    $_SESSION['question']=0;
    get_questions();
?>
    <ul>
        <li><a href='<?=basename($_SERVER["SCRIPT_FILENAME"]);?>'>Take quiz</a></li>
    </ul>
    <?php
}

//Function to put questions in session
function get_questions(){
    $file = fopen('data.txt', 'r');
    $array = array();
    while ($line = fgetcsv($file,1000,',')) {
        $array[] = $line;
    }
    fclose($file);
    $_SESSION['questions_array']=$array;
    $_SESSION['total_question']=count($array);
    return;
}
?>

</body>
</html>