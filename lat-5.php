<?php

for ($i=1;$i<=100;$i++)
{
    if (($i % 3 == 0) && ($i % 5 == 0)) {
        echo "<center>Tuing </br></center>";    
    }
    else if ($i % 3 == 0) {
        echo "<center>Ping </br></center>";
    }
    else if ($i % 5 == 0 ) {
        echo "<center>Pong </br></center>";
    }
    else {
        echo "<center>$i </br></center>";
    }
    
}
?>