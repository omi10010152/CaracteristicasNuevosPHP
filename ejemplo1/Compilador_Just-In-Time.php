<?php // PHP 8.0+ con JIT activado
function fibonacci(int $n): int
{
    if ($n <= 1) {
        return $n;
    }
    return fibonacci($n - 1) + fibonacci($n - 2);
}

$start = microtime(true);
$result = fibonacci(35); // Un cálculo recursivo intensivo
$end = microtime(true);

echo "Resultado de Fibonacci(35): " . $result . "\n";
echo "Tiempo de ejecución: " . ($end - $start) . " segundos\n";

// Salida Esperada o Aserción Simple:
// Resultado de Fibonacci(35): 9227465
// El tiempo de ejecución será notablemente menor que en PHP 7.x
?>