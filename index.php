<?

    $apiKey = "YOUR GOOGLE API SERVER KEY";
    $devices = array("YOUR REGISTERED DEVICE ID");

    $title = "The title to send";
    $message = "The message to send";

    $gcpm = new GCMPushMessage($apiKey);
    // $gcpm->setDevices($devices); // Don't set devices to send a broadcast
    $response = $gcpm->send($message, array("title" => $title));

?>