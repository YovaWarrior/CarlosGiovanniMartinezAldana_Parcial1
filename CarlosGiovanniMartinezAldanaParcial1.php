<?php
// Programa 1: Ciclo while para sumar números impares en $a y números pares en $b en un rango de 0 a 50
$a = 0; // Variable para sumar los números impares
$b = 0; // Variable para sumar los números pares
$num = 0; // Variable para iterar sobre los números

while ($num <= 50) {
    if ($num % 2 == 0) {
        // Si el número es par, se suma a la variable $b
        $b += $num;
    } else {
        // Si el número es impar, se suma a la variable $a
        $a += $num;
    }
    $num++; // Incrementa el número para pasar al siguiente
}

echo "La suma de los números impares es: " . $a . "\n";
echo "La suma de los números pares es: " . $b . "\n";

// Programa 2: Ciclo for que incrementa de 3 en 3 hasta llegar al primer número impar después de 30
$primer_impar_despues_de_30 = 0;

// Encuentra el primer número impar después de 30
for ($i = 31; $i <= 100; $i += 2) {
    $primer_impar_despues_de_30 = $i;
    break; // Rompe el ciclo después de encontrar el primer número impar
}

echo "\nEl primer número impar después de 30 es: " . $primer_impar_despues_de_30 . "\n";

// Ciclo que incrementa de 3 en 3 hasta llegar al primer número impar después de 30
for ($num = 0; $num <= $primer_impar_despues_de_30; $num += 3) {
    echo $num . " ";
}
?>