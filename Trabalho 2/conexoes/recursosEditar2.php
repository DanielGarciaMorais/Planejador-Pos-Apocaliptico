<?php
    require_once 'conexaoBanco.php';

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $idItem = $_POST['id'];
        $nome = $_POST['nome'];
        $valor = $_POST['valor'];
        $peso = $_POST['peso'];

        $sql = "UPDATE items SET nome = '$nome', valor = '$valor', peso = '$peso' WHERE idItem = $idItem";

        if($conexao->query($sql)){
            header("Location: ../recursosVisualizacao.php");
        }
    }
    $conexao->close();
?>