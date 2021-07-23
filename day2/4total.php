<?php

$moviesList = file_get_contents('./films.json');
$movies = json_decode($moviesList, true);
        
foreach ($movies as $rows => $row)
{
    
    $penonton[] = $row['viewers']; 
    
}

echo "Total penonton : " . array_sum($penonton);

?>
