<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to right, rgb(120, 180, 200), rgb(50, 180, 150));
            margin: 0;
            padding: 0;
            /* Adiciona a imagem de fundo */
            background-image: url('https://cdn.pixabay.com/photo/2016/11/28/10/48/child-1864718_960_720.jpg');
            /* Substitua 'caminho/para/sua/imagem-de-fundo.jpg' pelo caminho correto para sua imagem de fundo */
            background-size: cover;
            /* Ajusta a imagem de fundo para cobrir toda a tela */
            background-position: center;
            /* Centraliza a imagem de fundo */
            height: 100vh;
            /* Define a altura do body para 100% da altura da janela de visualização */
            display: flex;
            /* Use flexbox para centralizar o conteúdo verticalmente */
            justify-content: center;
            /* Centralize horizontalmente */
            align-items: center;
            /* Centralize verticalmente */
        }
        div {
            background-color: rgba(0, 0, 0, 0.6);
            padding: 80px;
            border-radius: 15px;
            color: #fff;
            text-align: center;
        }
        input {
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
            margin: 10px 0;
        }
        .inputSubmit {
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            cursor: pointer;
        }
        .inputSubmit:hover {
            background-color: deepskyblue;
        }
        a.voltar-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 20px;
        }
        a.voltar-button:hover {
            background-color: #3e8e41;
        }
    </style>
</head>
<body>
    <div>
        <h1>Login - Kurumin Dev</h1>
        <form action="testelogin.php" method="POST">
            <input type="text" name="email" placeholder="Email">
            <br>
            <input type="password" name="senha" placeholder="Senha">
            <br>
            <input class="inputSubmit" type="submit" name="submit" value="Entrar">
            <br>
            <a href="home.php" class="voltar-button">VOLTAR</a>
        </form>
    </div>
</body>
</html>
