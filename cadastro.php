<?php
    if (isset($_POST['submit'])) 
    {
        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone']; 
        $genero = $_POST['genero']; 
        

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,senha,telefone,genero) VALUES ('$nome','$email','$senha','$telefone','$genero')");
    }
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Formulário</title> 
    
    <style>
        a.login-button {
            display: inline-block; 
            padding: 10px 20px; 
            background-color: #4CAF50; 
            color: white; 
            text-decoration: none; 
            border: none; 
            border-radius: 5px;
            cursor: pointer; 
            transition: background-color 0.3s; 
            }

            
            a.login-button:hover {
            background-color: #3e8e41;
            }
    </style>
</head>

<body>
<a href="login.php" class="login-button">Login</a>
    
    <div class="container">
        <div class="form-image">
            <img src="assets/img//undraw_shopping_re_3wst.svg" alt="">
        </div>
        <div class="form">
            <form action="#" method="POST"> <!-- Adicionei method="POST" para enviar os dados -->
                <div class="form-header">
                    <div class="title">
                        <h1>Cadastre-se</h1>
                    </div>
                    <!-- <div class="login-button">
                        <button><a href="login.php">Entrar</a></button>
                    </div> -->
                    <style>
                        .logo-container {
                            text-align: center; /* Center the logo horizontally */
                            margin: 20px auto; /* Add margin for spacing */
                        }

                        .logo-container img {
                            width: 90px;
                            height: auto; /* Maintain aspect ratio */
                        }
                    </style>

                    <div class="logo-container">
                        <img src="https://cdn.pixabay.com/photo/2021/03/27/06/31/code-6127616_1280.png" alt="Logo do Site">
                    </div>


                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label for="nome">Nome</label>
                        <input id="nome" type="text" name="nome" placeholder="Digite seu primeiro nome" required>
                    </div>

                    <!-- <div class="input-box">
                        <label for="lastname">Sobrenome</label>
                        <input id="lastname" type="text" name="lastname" placeholder="Digite seu sobrenome" required>
                    </div> -->
                    <div class="input-box">
                        <label for="email">E-mail</label>
                        <input id="email" type="email" name="email" placeholder="Digite seu e-mail" required>
                    </div>

                    <div class="input-box">
                        <label for="senha">Senha</label>
                        <input id="senha" type="password" name="senha" placeholder="Digite sua senha" required>
                    </div>

                    <div class="input-box">
                        <label for="telefone">Celular</label>
                        <input id="telefone" type="tel" name="telefone" placeholder="(xx) xxxx-xxxx" required>
                    </div>


                    <!-- <div class="input-box">
                        <label for="confirmPassword">Confirme sua Senha</label>
                        <input id="confirmPassword" type="password" name="confirmPassword" placeholder="Digite sua senha novamente" required>
                    </div> -->

                </div>

                <div class="genero-inputs">
                    <div class="genero-title">
                        <h6>Gênero</h6>
                    </div>

                    <div class="genero-group">
                        <div class="genero-input">
                            <input id="female" type="radio" name="genero" value="Feminino"> <!-- Adicionei value para cada opção -->
                            <label for="female">Feminino</label>
                        </div>

                        <div class="genero-input">
                            <input id="male" type="radio" name="genero" value="Masculino"> <!-- Adicionei value para cada opção -->
                            <label for="male">Masculino</label>
                        </div>

                        <div class="genero-input">
                            <input id="others" type="radio" name="genero" value="Outros"> <!-- Adicionei value para cada opção -->
                            <label for="others">Outros</label>
                        </div>

                        <div class="gender-input">
                            <input id="none" type="radio" name="genero" value="Prefiro não dizer"> <!-- Adicionei value para cada opção -->
                            <label for="none">Prefiro não dizer</label>
                        </div>
                    </div>
                </div>

                <div class="continue-button">
                    <button type="submit" name="submit">Criar Conta</button> <!-- Adicionei type="submit" e name="submit" -->
                </div>
            </form>
        </div>
    </div>
</body>

</html>

