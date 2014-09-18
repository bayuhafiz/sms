<?php
include ( "lib/NexmoMessage.php" );

$msg = new NexmoMessage('6e4d6866', '2af8f65e');
$txt = $msg->inboundText();

echo $txt;
?>