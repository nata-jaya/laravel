<?php

$inputSentence = "Hari ini saya ingin pergi ke pasar";

$cencoredWord = array('saya', 'pasar');

$cleanSentence = str_replace($cencoredWord, "****", strtolower($inputSentence));
echo "$inputSentence <br />";
echo "setelah di sensor menjadi : ";
echo "$cleanSentence";

?>