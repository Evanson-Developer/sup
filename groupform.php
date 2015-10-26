<?php
//form data
$name = $_POST['name'];
$group = $_POST['group'];
$leader = $_POST['leader'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$date = $_POST['date'];
$time = $_POST['time'];
$number = $_POST['number'];
$questions = $_POST['questions'];
$human = $_POST['human'];
$to = 'ken@standuprentals.net';//<== update the email address
$subject = "Group Inquiry";
$headers = "From: ken@standuprentals.net";
$body = "
Inquiry Person: $name 
Group Name: $group
Name: $email
Group Leader: $leader
Phone number: $phone
Email: $email
Trip Date: $date
Trip Time: $time
Number of Participants: $number
Additional Question: $questions
";
 if (mail("ken@standuprentals.net","Group Inquiry",$body,$headers)) { 
   echo '<p>Your message has been sent!</p>';
} else { 
   echo '<p>Something went wrong, go back and try again!</p>'; 
}     

     
?>