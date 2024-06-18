<?php
    require_once 'conexaoBanco.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $idAssentamento = $_POST['id'];
        $nome = $_POST['nome'];
        $agua = $_POST['agua'];
        $alimento = $_POST['alimento'];
        $defesa = $_POST['defesa'];
        $quantColonos = $_POST['quantColonos'];

        $sql = "UPDATE assentamentos SET nome = '$nome', agua = $agua, alimento = $alimento, defesa = $defesa, quantColonos = $quantColonos WHERE idAssentamento = $idAssentamento";
        
        if($conexao->query($sql)){
            header("Location: ../assentamentoVisualizacao.php");
        }
    }
    $conexao->close();
?>