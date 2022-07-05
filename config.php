<?php

    $dbHost = 'localhost';
    $dbUsername = 'root1';
    $dbPassword = '12345';
    $dbName = 'formulario-rodrigo';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    // if($conexao->connect_errno) {
    //     echo "erro";
    // }
    // else {
    //     echo "conexao efeetuada com sucesso";
    // }

?>