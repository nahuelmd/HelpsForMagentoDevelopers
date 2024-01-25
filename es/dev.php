#!/usr/bin/env php
<?php
echo "Iniciando el proceso de limpieza y compilación...\n";

// Definir comandos
$commands = [
    'rm -rf generated/*',
    'rm -rf pub/static/* var/view_preprocessed/*',
    'php -d memory_limit=1024M bin/magento setup:di:compile'
];

// Ejecutar cada comando
foreach ($commands as $command) {
    echo "Ejecutando: $command\n";
    exec($command);
}

echo "\n";
echo "Proceso completado.\n";
