<?php

$num= [0,1,2,3,4,5,6,7,8,9];
for ($i=0; $i < 3200 ; $i++) { 
    if ($i%16 > 0) {
        echo $num[rand(0, 9)];
    } else {
        echo "<br>";
    }
}

?>
