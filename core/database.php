<?php
// core/database.php

require_once '../vendor/autoload.php'; // Certifique-se de que o autoload do Composer está incluído

function conectarMongoDB() {
    $host = $_ENV['DB_HOST'] ?? '127.0.0.1'; // Valor padrão
    $port = $_ENV['DB_PORT'] ?? '27017'; // Valor padrão
    $dbName = $_ENV['DB_NAME'] ?? 'seu_banco_de_dados'; // Valor padrão

    try {
        $client = new MongoDB\Client("mongodb://$host:$port");
        return $client->$dbName; // Retorna a instância do banco de dados
    } catch (MongoDB\Driver\Exception\Exception $e) {
        echo "Erro na conexão: " . $e->getMessage();
        exit();
    }
}
?>
