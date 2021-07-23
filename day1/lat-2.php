<?php

$angka = 80;
echo "Hasil Ujian Mu dapat : $angka" . PHP_EOL;

if ($angka == 100) {
    echo "dapat A bro";
} else if (($angka <100) && ($angka >= 80)) {
    echo "dapat B";
} else if (($angka <80) && ($angka >= 70)) {
    echo "dapat C";
} else if (($angka <70) && ($angka >= 60)){
    echo "dapat D";
}
else {
    echo "dapat E";
}

?>