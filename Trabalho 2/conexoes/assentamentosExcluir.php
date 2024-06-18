<?php
    require_once 'conexaoBanco.php';

    if ($_SERVER["REQUEST_METHOD"] == 'GET') {
        $id = $_GET['id'];
        $sql = "DELETE FROM assentamentos WHERE idAssentamento = $id";
        $conexao->query($sql);
        header("Location: ../assentamentoVisualizacao.php");
    }
    $conexao->close();
?>