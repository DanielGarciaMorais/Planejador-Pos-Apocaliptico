<?php
    //Essa conexão está só sendo usada para testar, futuramente será 'arrumada'...

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $database = "ppa";

    $conexao = new mysqli($servidor, $usuario, $senha, $database);

    if($conexao->connect_error){
        echo "ERRO!";
        die;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome = $_POST['nome'];
        $cargo = $_POST['cargo'];
        $dataNascimento = $_POST['dataNascimento'];
        $sexo = $_POST['sexo'];
    
        $sql = "INSERT INTO Colonos (nome, cargo, dataNascimento, sexo) VALUES ('$nome', '$cargo', '$dataNascimento', '$sexo')";
    
        if($conexao->query($sql)){
            header("Location: /Trabalho 2/cadastrarColono.php");
        }
    
        $conexao->close();
    }
?>