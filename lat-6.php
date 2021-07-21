<?php
/*
function bubbleSort($data)
{
    $swapped=true;
    $n=count($data);
    $temp=null;
    while($swapped)//outer loop
    {
        $swapped = false;
        for($i=0; $i<$n-1; $i++)//inner loop
        {
            if( $data[$i]>$data[$i+1]) //swap if the current value is greater the next value. change > to > for descending order
            {
                $temp=$data[$i];
                $data[$i]=$data[$i+1];
                $data[$i+1]=$temp;
                $swapped=true;
            }
        }
    }
 
    return $data;
}
*/

$data = array (4, 2, 100, 143, 94, 7, 10, 55, 9, 48, 36);
echo "Sebelum : " . implode (", ", $data) . "<br/>";
$tukar = true;
$jumlah = count($data);
$temp = null;
do {
    $tuker = false;
    for ($i=0; $i<$jumlah-1;$i++) {
        if ($data[$i]>$data[$i+1]) {
            $temp=$data[$i];
            $data[$i]=$data[$i+1];
            $data[$i+1] = $temp;
            $tuker=true;
        }
    }
} while($tuker);

 
echo "sesudah : " . implode(", ",$data);
?>