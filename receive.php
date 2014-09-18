<?php
include ( "lib/NexmoAccount.php" );
include ( "lib/NexmoMessage.php" );

$sms = new NexmoAccount('6e4d6866', '2af8f65e');
	if ($sms->inboundText()) {
         $sms->reply('You said: ' . $sms->text);
    }
?>
     