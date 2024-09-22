<?php
session_start();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Página Inicial</title>
</head>
<body>
    <header>
        <?php if (isset($_SESSION['email'])): ?>
            <p>Bem-vindo, <?php echo htmlspecialchars($_SESSION['email']); ?>!</p>
        <?php endif; ?>
        <a href="/logout">sair agora</a>
    </header>   
</body>
</html>
