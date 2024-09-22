<?php
require_once "/home/wagner/Downloads/Mini-FrameWork/app/controller/UserController.php";
session_start();
$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $_SESSION['email'] = $email ;
    $userController = new UserController();
    $message = $userController->login($email, $senha);
    header("Location: /");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>logar  Usuário</title>
</head>
<body>
    <h1>Cadastro de Usuário</h1>
    <?php if ($message): ?>
        <p><?php echo $message; ?></p>
    <?php endif; ?>
    <form action="" method="POST">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required>
        <br>
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>
