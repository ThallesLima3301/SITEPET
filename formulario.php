<?php

   if(isset($_POST['submit'])) {

    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $sexo = $_POST['sexo'];
    $telefone = $_POST['telefone'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,senha,sexo,telefone)
    VALUES ('$nome','$email','$senha','$sexo','$telefone')");

    header('Location: login.php');

}

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Responsivo</title>
    <link rel="stylesheet" href="./assets/css/LoginStyles.css">
    <script src="https://kit.fontawesome.com/bc25939c34.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">

</head>
<body>
    
    <div class="container">
        <div class="img">
            <img src="./assets/login_img/account.svg">
        </div>

        <div class="login-container">
            <form action="formulario.php" method="POST">
                <img class="avatar" src="./assets/login_img/profile.svg">
                <h2>Faça seu registro</h2>
                <div class="input-div um">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div>
                        <h5>Nome</h5>
                        <input type="text" class="input" name="nome" type="text" required>
                    </div>
                </div>

                <h2></h2>
                <div class="input-div dois">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div>
                        <h5>E-mail</h5>
                        <input type="text" name="email" class="input" type="text" required>
                    </div>
                </div>

                <div class="input-div dois">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div>
                        <h5>Senha</h5>
                        <input type="password" name="senha" class="input" type="password" required>
                    </div>
                </div>

                <div class="input-div dois">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div>
                        <h5>Sexo</h5>
                        <input type="text" name="sexo" class="input" type="text" required>
                    </div>
                </div>

                <div class="input-div dois">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div>
                        <h5>Telefone</h5>
                        <input type="text" name="telefone" class="input" type="text" required>
                    </div>
                </div>

                <input type="submit" class="btn" name="submit" value="Registrar">

            </form>
        </div>
    </div>

    <script type="text/javascript" src="./assets/js/login.js"></script>
                
</body>
</html>