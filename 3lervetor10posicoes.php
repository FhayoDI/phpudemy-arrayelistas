<?php
$vetor[] = 0;
$valor = 0;
$maior = 0;
for ($i = 0; $i <10; $i++){
    $valor = (int)readline ("insira valores positivos: ");
    if ($valor < 0){
        echo "valor invalido";
        exit();
    }
    $vetor[] = $valor;

    if ($valor > $maior){
        $maior = $valor;
    }
}
echo "\nO maior valor é: " . $maior . "\n";
$resultado = array_search($maior,$vetor);
echo "o valor esta no indice $resultado";