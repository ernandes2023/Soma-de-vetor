<?php

echo '<h1 align = center> Soma </h1><br>';

$vetor = [];// criando um vetor vazio e incrementando ele no laço de repetição abaixo 

for ($i=0; $i<1000; $i++) // aqui um for incrementando 1000 posições no vetor
{
    $vetor[] =  ($i+1);// pegando o vetor e a cada volta do laço de repetição incrementando +1 
};

foreach($vetor as $l => $j){

    echo ' Indice:  ' . $l . ' Valor:  ' . $j . '<br>';// Mostrando os dados e seus indices
}

echo '<br> A soma dos valores do array é: ' . array_sum($vetor) . '<br>'; // Somando todos os valores do array

?>