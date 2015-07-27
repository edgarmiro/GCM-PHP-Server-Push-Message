<?
    include "../GCMPushMessage.php";

    $apiKey = "YOUR GOOGLE API SERVER KEY";
    $devices = array("YOUR REGISTERED DEVICE ID");

    $title = "The title to send";
    $message = "The message to send";

    $gcpm = new GCMPushMessage($apiKey);
    $gcpm->setDevices($devices);
    $response = $gcpm->send($message, array("title" => $title));

?>