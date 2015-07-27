<?
    include "../GCMPushMessage.php";

    $apiKey = "YOUR GOOGLE API SERVER KEY";

    $title = "The title to send";
    $message = "The message to send";

    $gcpm = new GCMPushMessage($apiKey);
    $response = $gcpm->send($message, array("title" => $title));

?>