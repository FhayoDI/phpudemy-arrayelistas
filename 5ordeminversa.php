<?php
$vetor[] = 0;
$num = 0;
for ($i = 0 ; $i < 10; $i++){
    $num = readline("Digite os números: ");
    $vetor[] = $num;
}
$invertervetor = array_reverse($vetor);
foreach ($invertervetor as $valor){
echo $valor . "\n";
}