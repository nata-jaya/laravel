<?php
/* test palindrom */
echo "test palindrom <br/>";

$kalimat[] = 'Kasur ini rusak';
$kalimat[] = 'Makan sate kambing';
$kalimat[] = 'Ira hamil lima hari';
$kalimat[] = 'Ibu Ratna antar ubi';

foreach ($kalimat as $key => $value) {
    $cleanSentence = strtolower(str_replace(' ','',$value));
    $reverse_kalimat = strrev($cleanSentence);
    $status = $cleanSentence == $reverse_kalimat ? 'true': 'false';
    $hasil[] = "$value : $status" ;
}

foreach($hasil as $key => $value) {
    echo "$value <br/>";
}
?>