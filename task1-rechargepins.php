<?php

$num= [0,1,2,3,4,5,6,7,8,9];
for ($i=0; $i < 2600 ; $i++) { 
    if ($i%13 > 0) {
        echo $num[rand(0, 9)];
    } else {
        echo "<br>";
    }
}

?>