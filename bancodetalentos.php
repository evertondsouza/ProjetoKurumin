<?php
    if (isset($_POST['submit'])) 
    {
        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone']; 
        $endereco = $_POST['endereco'];
        $deficiencia = $_POST['deficiencia'];
        $acessibilidade = $_POST['acessibilidade'];
        $experiencia = $_POST['experiencia'];
        $instituicao_ensino = $_POST['instituicao_ensino'];
        $curso_area_estudo = $_POST['curso_area_estudo'];
        $grau_obtido = $_POST['grau_obtido'];
        $periodo_estudo = $_POST['periodo_estudo'];
        $habilidades = $_POST['habilidades'];
        $disponibilidade = $_POST['disponibilidade'];
        $outras_informacoes = $_POST['outras_informacoes'];
        

        $result = mysqli_query($conexao, "INSERT INTO banco_de_talentos(nome,email,telefone,endereco,deficiencia,acessibilidade,experiencia,instituicao_ensino,curso_area_estudo,grau_obtido,periodo_estudo,habilidades,disponibilidade,outras_informacoes) VALUES ('$nome','$email','$telefone','$endereco','$deficiencia','$acessibilidade','$experiencia','$instituicao_ensino','$curso_area_estudo','$grau_obtido','$periodo_estudo','$habilidades','$disponibilidade','$outras_informacoes')");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Banco de Talentos</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: url('https://cdn.pixabay.com/photo/2016/11/28/10/48/child-1864718_960_720.jpg') no-repeat center center fixed;
            background-size: cover;
        }

        .container {
            width: 100%;
            height: auto;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow-x: hidden; /* Removendo a barra de rolagem horizontal */
        }

        .form {
            width: 90%;
            max-width: 1200px; /* Aumentando a largura máxima do contêiner */
            background-color: rgba(255, 255, 255, 0.8);
            padding: 3rem;
            border-radius: 10px;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, .212);
        }

        .form-header {
            margin-bottom: 3rem;
        }

        .input-group {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            padding: 1rem 0;
        }

        .input-box {
            width: calc(50% - 1rem); /* Definindo largura de 50% com espaço entre as colunas */
            margin-bottom: 1rem;
        }

        .input-box label {
            display: block; /* Garantindo que o label ocupe toda a largura da caixa */
            margin-bottom: 0.5rem; /* Adicionando um pequeno espaço abaixo do label */
        }

        .input-box input,
        .input-box textarea {
            width: 100%;
            padding: 0.8rem;
            border: none;
            border-radius: 10px;
            box-shadow: 1px 1px 6px #0000001c;
            resize: none;
            height: auto; /* Ajustando a altura para automática */
        }

        .continue-button {
            width: 100%;
            text-align: center;
            margin-top: 2rem;
        }

        .continue-button button {
            border: none;
            background-color: #1e90ff;
            padding: 0.62rem 1.5rem;
            border-radius: 5px;
            cursor: pointer;
            color: white;
            font-size: 1rem;
        }

        .continue-button button:hover {
            background-color: #0c7cec;
        }

        .termos {
            margin-top: 1rem;
            display: flex;
            align-items: center;
        }

        .termos input[type="checkbox"] {
            margin-right: 0.5rem;
        }

        @media screen and (max-width: 768px) {
            .input-box {
                width: 100%; /* Alterado para ocupar toda a largura */
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="form">
            <form action="#" method="POST">
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <div class="form-header">
                    <div class="title">
                        <h1>Cadastre-se no Banco de Talentos</h1>
                    </div>
                </div>
                <div class="input-group">
                    <div class="input-box">
                        <label for="nome">Nome Completo</label>
                        <input id="nome" type="text" name="nome" placeholder="Digite seu nome completo" required>
                    </div>
                    <div class="input-box">
                        <label for="email">Endereço de E-mail</label>
                        <input id="email" type="email" name="email" placeholder="Digite seu endereço de e-mail" required>
                    </div>
                    <div class="input-box">
                        <label for="telefone">Número de Telefone</label>
                        <input id="telefone" type="tel" name="telefone" placeholder="(xx) xxxx-xxxx" required>
                    </div>
                    <div class="input-box">
                        <label for="endereco">Endereço</label>
                        <input id="endereco" type="text" name="endereco" placeholder="Digite seu endereço" required>
                    </div>
                    <div class="input-box">
                        <label for="deficiencia">Tipo de Deficiência</label>
                        <input id="deficiencia" type="text" name="deficiencia" placeholder="Digite seu tipo de deficiência" required>
                    </div>
                    <div class="input-box">
                        <label for="acessibilidade">Acessibilidade</label>
                        <textarea id="acessibilidade" name="acessibilidade" rows="3" placeholder="Descreva suas necessidades de acessibilidade"></textarea>
                    </div>
                    <div class="input-box">
                        <label for="experiencia">Experiência Profissional</label>
                        <textarea id="experiencia" name="experiencia" rows="3" placeholder="Descreva sua experiência profissional anterior"></textarea>
                    </div>
                    <div class="input-box">
                        <label for="instituicao_ensino">Instituição de Ensino</label>
                        <textarea id="instituicao_ensino" name="instituicao_ensino" rows="3" placeholder="Descreva sua instituição de ensino"></textarea>
                    </div>
                    <div class="input-box">
                        <label for="curso_area_estudo">Curso/Area de Estudo</label>
                        <textarea id="curso_area_estudo" name="curso_area_estudo" rows="3" placeholder="Descreva seu curso/área de estudo"></textarea>
                    </div>
                    <div class="input-box">
                        <label for="grau_obtido">Grau Obtido</label>
                        <textarea id="grau_obtido" name="grau_obtido" rows="3" placeholder="Descreva o grau obtido"></textarea>
                    </div>
                    <div class="input-box">
                        <label for="periodo_estudo">Período de Estudo</label>
                        <textarea id="periodo_estudo" name="periodo_estudo" rows="3" placeholder="Descreva o período de estudo"></textarea>
                    </div>
                    <div class="input-box">
                        <label for="habilidades">Habilidades e Competências</label>
                        <textarea id="habilidades" name="habilidades" rows="3" placeholder="Liste suas principais habilidades e competências"></textarea>
                    </div>
                    <div class="input-box">
                        <label for="disponibilidade">Disponibilidade</label>
                        <textarea id="disponibilidade" name="disponibilidade" rows="3" placeholder="Indique sua disponibilidade para trabalhar"></textarea>
                    </div>
                    <div class="input-box">
                        <label for="outras_informacoes">Outras Informações</label>
                        <textarea id="outras_informacoes" name="outras_informacoes" rows="3" placeholder="Há algo mais que gostaria de compartilhar?"></textarea>
                    </div>
                </div>
                <div class="continue-button">
                    <button type="submit" name="submit">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>

