<?php
$input = 8;

/*
if ($input % 2 == 0) {
    echo "Genap";
}
else {
    echo "Ganjil";
}
*/

$cek = $input % 2 == 0 ? 'Genap':'Ganjil';
echo $cek;
?>