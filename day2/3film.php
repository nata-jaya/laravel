<?php

$moviesList = file_get_contents('./films.json');
$movies = json_decode($moviesList, true);
        
foreach ($movies as $rows => $row)
{
    if ($row['viewers'] > 500)
    {
        $boxMovie[] = $row['title'].' jumlah penontoh :'.$row['viewers']; 
    }
}

echo "Berikut filem dengan penonton di atas 500 orang : <br/>";
foreach ($boxMovie as $key => $value){
    echo "<li>$value</li>";
}
?>
