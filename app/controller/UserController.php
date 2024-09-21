<?php
require_once '../model/UserModel.php';

class UserController {
    private $userModel;

    public function __construct() {
        $this->userModel = new UserModel();
    }

    public function registerUser($nome, $email, $senha) {
        // Verifica se o usuário já existe
        if ($this->userModel->userExists($email)) {
            return "Erro: Usuário com este e-mail já existe.";
        }

        // Se não existir, cria o usuário
        if ($this->userModel->createUser($nome, $email, $senha)) {
            return "Parabéns, cadastrado com sucesso!";
        } else {
            return "Erro ao cadastrar usuário.";
        }
    }
}
?>
