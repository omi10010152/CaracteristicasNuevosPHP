
<?php // PHP 8.4+
// Clase anónima utilizada como un 'builder'
$message = new class('Mundo') {
    private string $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function greet(): string {
        return "Hola, " . $this->name . "!";
    }
}->greet(); // Acceso al método sin los paréntesis de la instanciación

echo $message . "\n";
assert($message === 'Hola, Mundo!');

// Salida Esperada:
// HOla, mundo!
?>