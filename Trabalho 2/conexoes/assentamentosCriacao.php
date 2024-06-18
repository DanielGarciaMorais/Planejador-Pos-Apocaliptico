<?php
    require_once 'conexaoBanco.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if ($_POST['nome'] == null){
            //O individo que conseguiu chegar a fazer essa façanha, merece esse presente ( ͡° ͜ʖ ͡°)
            header("Location: https://www.youtube.com/watch?v=dQw4w9WgXcQ");
        }else{
            $nome = $_POST['nome'];
            $sql = "INSERT INTO Assentamentos (nome, agua, alimento, defesa, quantColonos) VALUES ('$nome', 0, 0, 0, 0)";
            if($conexao->query($sql)){
                header("Location: ../assentamentoVisualizacao.php");
            }
        }
    }
    $conexao->close();
?>