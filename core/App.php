<?php
// core/App.php

class App {
    public function run() {
        $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        gerenciarRotas($url); // Chamando a função de gerenciamento de rotas
    }
}
?>
