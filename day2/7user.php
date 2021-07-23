<?php

$listUsers = file_get_contents('./emails.json');
$users = json_decode($listUsers, true);
        
foreach ($users as $rows => $row)
{
    $email = $row['email'];
    $pattern = '/([^@]+)/';
    preg_match($pattern, $email, $matches);    
    $username[] = 'Email : '. $row['email'] . " Username : " . $matches[0] . "<br />"; 
}

foreach ($username as $key => $value)
{
    echo $value;
}
?>