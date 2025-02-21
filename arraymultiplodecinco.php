<?php
$arr[] = 0;
for ($i = 0 ; $i < 10 ; $i++) {
    $arr[] = ($i + 1) * 5;
}
foreach ($arr as $valor) {
    echo $valor . " \n";
}
