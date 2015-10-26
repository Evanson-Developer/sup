<?php
 session_start();
 $user = ($_POST['nome']);
 $password = ($_POST['password']);
 If ($password == 'admin' && $user == 'admin'){
   $_SESSION['logged'] = true;
   $_SESSION['temp'] = $user;
   echo 'ok';
 }
?>