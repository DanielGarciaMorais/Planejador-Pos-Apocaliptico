<?php
    require_once 'conexaoBanco.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if($_POST['nome'] == null || $_POST['valor'] == null || $_POST['peso'] == null){
            //O individo que conseguiu chegar a fazer essa façanha, merece esse presente ( ͡° ͜ʖ ͡°)
            header("Location: https://www.youtube.com/watch?v=dQw4w9WgXcQ");
        }else{
            $nome = $_POST['nome'];
            $valor = $_POST['valor'];
            $peso = $_POST['peso'];
        
            $sql = "INSERT INTO items (valor, nome, peso) VALUES ('$valor', '$nome', '$peso')";
        
            if($conexao->query($sql)){
                header("Location: ../recursosVisualizacao.php");
            }
        }
    }
    $conexao->close();
?>