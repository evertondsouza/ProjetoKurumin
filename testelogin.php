<?php
    //print_r($_REQUEST); //parametros que vem do formulario
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) //se existir uma variavel submit, ele vai acessar o meu sistema
    {
        include_once('config.php'); //inclui a conexão com o banco de dados
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // print_r('Email: ' . $email); teste de verificação das variaveis
        // print_r('<br>');
        // print_r('Senha: ' . $senha);

         //sql para verificar se os parametros existem no banco de dados abaixo
         $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";

         $result = $conexao->query($sql); //a variavel conexao foi feita no arquivo config.php e vai executar o select acima

        //  print_r($sql);
        //  print_r($result);

        if(mysqli_num_rows($result) < 1) //verifica se o numero de linhas na minha variavel result é maior que 1
        {
           header('location: cadastro.php');

        }
        else
        {
            header('Location: index.html');
        }
        
    }
    else
    {
        header('location: login.php'); //caso contrario, volta para o login
    }
?>