<?php

$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'kurumin_dev';

$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

////if ($conexao->connect_errno)
 //{
   //echo "Erro.";
//}
//else
//{
 //   echo "Conexãp efetuada com sucesso.";
//} 


//<?php
//if (isset($_POST['submit'])) {
 //   print_r($_POST['nome']);
 //   print_r($_POST['email']);
   // print_r($_POST['telefone']);
//}
?>