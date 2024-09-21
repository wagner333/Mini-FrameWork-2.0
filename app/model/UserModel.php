<?php
require "../core/database.php"; // Inclua seu arquivo de conexão com o banco de dados

class UserModel {
    private $db;

    public function __construct() {
        $this->db = conectarMongoDB(); // Conexão com o MongoDB
    }

    // Verifica se o usuário já existe
    public function userExists($email) {
        return $this->db->usuarios->findOne(['email' => $email]) !== null;
    }

    // Cria um novo usuário
    public function createUser($nome, $email, $senha) {
        try {
            $this->db->usuarios->insertOne([
                'nome' => $nome,
                'email' => $email,
                'senha' => password_hash($senha, PASSWORD_DEFAULT)
            ]);
            return true; // Retorna verdadeiro se o usuário foi criado com sucesso
        } catch (Exception $e) {
            echo "Erro ao cadastrar usuário: " . $e->getMessage();
            return false; // Retorna falso em caso de erro
        }
    }
}
?>
