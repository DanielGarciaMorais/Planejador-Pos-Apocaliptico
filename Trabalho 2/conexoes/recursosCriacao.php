<?php
    require_once 'conexaoBanco.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome = $_POST['nome'];
        $valor = $_POST['valor'];
        $peso = $_POST['peso'];
    
        $sql = "INSERT INTO items (valor, nome, peso) VALUES ('$valor', '$nome', '$peso')";
    
        if($conexao->query($sql)){
            header("Location: ../recursosVisualizacao.php");
        }
    }
    $conexao->close();
?>