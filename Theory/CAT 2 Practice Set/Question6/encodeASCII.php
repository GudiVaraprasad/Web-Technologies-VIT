<?php

$userInput = "‰ŽœØHelloÿWorld¶œÅØÿ";

echo "Actual Input - ".$userInput."<br><br>";

$userInput = filter_var($userInput, FILTER_SANITIZE_ENCODED, FILTER_FLAG_ENCODE_LOW);
$userInput = filter_var($userInput, FILTER_SANITIZE_ENCODED, FILTER_FLAG_ENCODE_HIGH);

echo "After encoding characters with ASCII value <32 and > 127 - ".$userInput;
?>