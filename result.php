<?php
$name = $_POST['name'];
$message = $_POST['message'];
$flate = '  ///message: ';
$flat = '   name: ';
$fp = fopen("messages/messages.txt", "a");
fwrite($fp,$flat.$name.$flate.$message );
fclose($fp);
header('Location: /feedback.html');
?>