<?php
    require_once 'conexaoBanco.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome = $_POST['nome'];
        $cargo = $_POST['cargo'];
        $dataNascimento = $_POST['dataNascimento'];
        $sexo = $_POST['sexo'];
    
        $sql = "INSERT INTO Colonos (nome, cargo, dataNascimento, sexo) VALUES ('$nome', '$cargo', '$dataNascimento', '$sexo')";
    
        if($conexao->query($sql)){
            header("Location: ../colonoVisualizacao.php");
        }
    }
    $conexao->close();
?>