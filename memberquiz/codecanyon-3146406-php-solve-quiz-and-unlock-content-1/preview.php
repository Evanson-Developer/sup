<?php
include('include/inc_db.php');
include('control_login.php');

?>
<body style="padding-top:50px;margin:0px; background:url(<?php echo path_img ?>/background/bg_texture.jpg);background-attachment: fixed;">
 <div style="width:500px;margin:0px auto;"><?php include(path_stored_quizzes.'/'.$_GET['id'].'/'.$_GET['code'].'.php'); ?></div>
</body>