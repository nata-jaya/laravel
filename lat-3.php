<?php
/* test palindrom */

//$kalimat = 'Kasur ini rusak';
$kalimat = 'Makan sate kambing';

$cleanSentence = strtolower(str_replace(' ','',$kalimat));
$reverse_kalimat = strrev($cleanSentence);

echo "\$cleanSentence : $cleanSentence <br/>";
echo "\$reverse_kalimat : $reverse_kalimat <br/>";

$palindrom = $cleanSentence == $reverse_kalimat ? 'true': 'false';

echo "is $kalimat palindrom: $palindrom";


?>