<?php
require_once '/home/wagner/Downloads/Mini-FrameWork/app/model/UserModel.php';

class UserController {
    private $userModel;

    public function __construct() {
        $this->userModel = new UserModel();
    }

    public function registerUser($nome, $email, $senha) {
        
        if ($this->userModel->userExists($email)) {
            return "Erro: Usuário com este e-mail já existe.";
        }

       
        if ($this->userModel->createUser($nome, $email, $senha)) {
            return "Parabéns, cadastrado com sucesso!";
        } else {
            return "Erro ao cadastrar usuário.";
        }
    }

   public function login($email, $senha){
    if($this->userModel->login($email, $senha)){
        return"login realizado";

    }else{
        return "Erro ao logar";
        
    }

   }
}
?>
