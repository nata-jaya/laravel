<?php

$listBill = file_get_contents('./bill.json');
$bill = json_decode($listBill, true);
        
foreach ($bill as $rows => $row)
{
    $total[] = $row['price'] * $row['qty']; 
    
}

echo "Total Belanja : " . array_sum($total);

?>