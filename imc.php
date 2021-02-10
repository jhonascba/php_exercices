<?php

$peso = 70;
$altura = 1.80;
$imc = $peso / ($altura ** 2);
$imc = number_format($imc, 2);

echo "Seu IMC é igual a $imc" . PHP_EOL;

if ($imc < 17) {
    echo "Muito abaixo do peso";
} else if ($imc < 18.5) {
    echo "Abaixo do peso";
} else if ($imc < 25) {
    echo "Peso normal";
} else if ($imc < 30) {
    echo "Acima do peso";
} else if ($imc < 35) {
    echo "Obesidade nível I";
} else if ($imc < 40) {
    echo "Obesidade nível II (severa)";
} else {
    echo "Obesidade nível III (mórbida)";
}
