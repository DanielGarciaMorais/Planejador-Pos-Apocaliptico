<?php
    require_once 'conexaoBanco.php';

    if ($_SERVER["REQUEST_METHOD"] == 'GET') {
        $id = $_GET['id'];
        $sql = "DELETE FROM Items WHERE idItem = $id";
        $conexao->query($sql);
        header("Location: ../recursosVisualizacao.php");
    }
    $conexao->close();
?>