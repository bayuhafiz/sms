<?php
include ( "lib/NexmoAccount.php" );
include ( "lib/NexmoMessage.php" );
include ( "lib/NexmoReceipt.php" );

	$sms = new NexmoMessage('6e4d6866', '2af8f65e');
    $sms->sendText( '+6287759940070', 'MyApp', 'Hello world!' );

    $receipt = new NexmoReceipt();
     if ($receipt->exists()) {
         switch ($receipt->status) {
             case $receipt::STATUS_DELIVERED:
                 echo "The message was delivered to the handset!";
                 break;
             
             case $receipt::STATUS_FAILED:
             case $receipt::STATUS_EXPIRED:
                 echo "The message failed to be delivered";
                 break;
         }
     }
?>

