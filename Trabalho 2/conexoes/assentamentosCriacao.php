<?php
    require_once 'conexaoBanco.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome = $_POST['nome'];
    
        $sql = "INSERT INTO Assentamentos (nome, agua, alimento, defesa, quantColonos) VALUES ('$nome', 0, 0, 0, 0)";
    
        if($conexao->query($sql)){
            header("Location: ../assentamentoVisualizacao.php");
        }
    }
    $conexao->close();
?>