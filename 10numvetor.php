<?php
$vetor[] = 0;
$menor = 0;
$maior = 0;
$pares = 0;
$impares = 0;
    echo "Digite um valor: \n";
for ($i = 0; $i <10; $i++){
    $valor = (int)readline("digite o valor ". $i +1 . ": " );
    $vetor[] = $valor;
    switch ($valor){
    case $valor < 0: $menor++; break;
    case $valor > 0: $maior++; break;
}
    switch ($valor){
    case $valor % 2 == 0: $pares++; break;
    case $valor % 2 != 0: $impares++; break;}
}


echo $menor . " negativos \n";
echo $maior . " positivos \n";
echo $pares . " pares \n";
echo $impares . " impares \n";