<?php
    include ( "lib/NexmoMessage.php" );

    // Step 1: Declare new NexmoMessage.
    $no = $_POST['phone_no'];
    $txt = $_POST['sms_body'];

    $nexmo_sms = new NexmoMessage('6e4d6866', '2af8f65e');

    // Step 2: Use sendText( $to, $from, $message ) method to send a message. 
    $info = $nexmo_sms->sendText( $no, 'Clr-bld/sms-service', $txt );

    // Step 3: Display an overview of the message
    echo $nexmo_sms->displayOverview($info);

    // Done!

?>