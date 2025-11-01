
```php
<?php // PHP 8.3+
class AppSettings
{
    const VERSION = '1.0';
    const ENVIRONMENT = 'production';
}

$settingName = 'VERSION';
$currentVersion = AppSettings::{$settingName};

echo "Configuración: " . $settingName . " = " . $currentVersion . "\n";
assert($currentVersion === '1.0');

// Salida Esperada:
// Configuración: VERSION = 1.0
?>
