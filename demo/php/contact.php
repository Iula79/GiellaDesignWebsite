<?php

$subject = "Branding";
$contactName = $_GET["name"];
$contactEmail = urldecode($_GET["email"]);
$contactMessage = $_GET["message"];

mail("danny@gielladesign.com", $subject, "Message from: $contactName : ".$contactMessage, "From: $contactEmail\n");

echo "Thank you! We will reply soon!";

?>
