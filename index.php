<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">

</head>

<body>

    
    <main>

        <form method="POST" action="logica.php">

            <label>Nome</label>
            <input type="text" name="nome" placeholder="Digite o seu nome" required>

            <label>Telefone</label>
            <input type="telefone" name="telefone" placeholder="Digite o seu telefone" required>

            <label>E-mail</label>
            <input type="email" name="email" placeholder="Digite o seu e-mail" required>

            <label>Mensagem</label>
            <textarea name="mensagem" placeholder="Digite aqui sua mensagem..."></textarea>

            <button type="submit">Enviar</button>

            <?php
            if (isset($_SESSION['msg']))
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);

            ?>


        </form>
        
    </main>
    
</body>

</html>