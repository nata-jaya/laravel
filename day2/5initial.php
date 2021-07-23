<?php

$listNames = file_get_contents('./names.json');
$names = json_decode($listNames, true);
        
foreach ($names as $rows => $row)
{
    $initials[] = $row['name'] . " First Character : ". substr($row['name'],0,1); 
    
}

echo "Karakter Pertama dari Nama-nama berikut : <br/>";
foreach ($initials as $key => $value){
    echo "<li>$value</li>";
}

?>