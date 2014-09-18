<?php
include ( "lib/NexmoAccount.php" );
include ( "lib/NexmoMessage.php" );
include ( "lib/NexmoReceipt.php" );

$no = $_POST['phone_no'];
$txt = $_POST['sms_body'];

	$sms = new NexmoMessage('6e4d6866', '2af8f65e');
    $sms->sendText( $no, 'MyApp', $txt );

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

