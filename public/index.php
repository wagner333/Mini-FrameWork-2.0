<?php


require_once '../vendor/autoload.php'; // Autoload do Composer
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../'); // Carrega o .env
$dotenv->load(); // Carrega as variáveis de ambiente

require_once '../core/App.php'; // Incluindo o núcleo da aplicação
require_once '../router/routes.php'; // Incluindo as rotas

$app = new App(); // Instanciando a aplicação
$app->run(); // Executando a aplicação
?>
