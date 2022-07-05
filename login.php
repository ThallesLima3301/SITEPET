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
            <form action="testLogin.php" method="POST">
                <img class="avatar" src="./assets/login_img/profile.svg">
                <h2>Bem Vindo</h2>
                <div class="input-div um">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div>
                        <h5>E-mail</h5>
                        <input type="text" class="input" name="email" type="text" required>
                    </div>
                </div>

                <h2></h2>
                <div class="input-div dois">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div>
                        <h5>Senha</h5>
                        <input type="password" name="senha" class="input" type="password" required>
                    </div>
                </div>

                <input type="submit" class="btn" name="submit-login" value="Login">

                <a  href="formulario.php">Ainda não tem cadastro?</a> 

            </form>
        </div>
    </div>

    <script type="text/javascript" src="./assets/js/login.js"></script>
                
</body>
</html>