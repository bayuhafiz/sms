<?php
include ( "lib/NexmoMessage.php" );

$msg = new NexmoMessage('a6e4d6866', '2af8f65e');
$txt = $msg->inboundText();

echo $txt;
?>