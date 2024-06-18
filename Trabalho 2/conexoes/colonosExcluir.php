<?php
    require_once 'conexaoBanco.php';

    if ($_SERVER["REQUEST_METHOD"] == 'GET') {
        $id = $_GET['id'];
        $sql = "DELETE FROM colonos WHERE idColono = $id";
        $conexao->query($sql);
        header("Location: ../colonoVisualizacao.php");
    }
    $conexao->close();
?>