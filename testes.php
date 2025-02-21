<?php
$vetor = array();
$negativos = 0;
$positivos = 0;
$pares = 0;
$impares = 0;

// Entrada de 10 números
echo "Digite 10 números:\n";
for ($i = 0; $i < 10; $i++) {
    $valor = (int)readline("Digite o número " . ($i + 1) . ": ");
    $vetor[] = $valor;

    // Verificar se o número é negativo ou positivo
    if ($valor < 0) {
        $negativos++;
    } elseif ($valor > 0) {
        $positivos++;
    }

    // Verificar se o número é par ou ímpar
    if ($valor % 2 == 0) {
        $pares++;
    } else {
        $impares++;
    }
}

// Exibindo os resultados
echo "\nResultado:\n";
echo $negativos . " números negativos.\n";
echo $positivos . " números positivos.\n";
echo $pares . " números pares.\n";
echo $impares . " números ímpares.\n";