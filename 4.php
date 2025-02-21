<?php
$vetorA = array(1,2,3,4,5,6,7,8,9,10);
$vetorC[] = 0;
$b = readline("digite um valor:");
    foreach ($vetorA as $valor){
        $vetorC[] = $valor * $b;
    }
print_r($vetorC);   