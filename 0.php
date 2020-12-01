<?php
$to = "yo7963@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: ykmujawdiya@gmail.com" . "\r\n" .
"CC: 1234@gmail.com";

mail($to,$subject,$txt,$headers);
?>