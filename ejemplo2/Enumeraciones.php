
```php
<?php // PHP 8.1+
enum TrafficLight: string
{
    case RED = 'Stop';
    case YELLOW = 'Caution';
    case GREEN = 'Go';
}

function getAction(TrafficLight $light): string
{
    return $light->value;
}

$action = getAction(TrafficLight::RED);
assert($action === 'Stop');
echo "Acción: " . $action . "\n";

// Salida Esperada:
// Acción: Stop
?>