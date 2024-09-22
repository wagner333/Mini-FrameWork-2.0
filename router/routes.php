<?php
// router/routes.php

$rotas = [
    '/' => 'home',
    '/sobre' => 'sobre',
    '/login' => 'login',
    '/cadastro' => 'cadastro',
    '/logout' => 'logout'
];

function cadastro(){
     require '../app/views/cadastro.php';
}

function home() {
    require '../app/views/home.php'; // Carrega a view da página inicial
}

function sobre() {
    require '../app/views/sobre.php'; // Carrega a view da página sobre
}

function login() {
    require '../app/views/login.php'; // Carrega a view da página de contato
}
function logout() {
    require '../app/views/logout.php'; // Carrega a view da página de contato
}

function gerenciarRotas($url) {
    global $rotas;

    if (array_key_exists($url, $rotas)) {
        $acao = $rotas[$url];
        call_user_func($acao);
    } else {
        header("HTTP/1.0 404 Not Found");
        echo "404 - Página não encontrada.";
        exit();
    }
}
?>
 