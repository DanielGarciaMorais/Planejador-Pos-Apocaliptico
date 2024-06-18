<?php
    require_once 'conexaoBanco.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if($_POST['nome'] == null || $_POST['cargo'] == null || $_POST['dataNascimento'] == null || $_POST['sexo'] == null || $_POST['assentamento'] == null){
            //O individo que conseguiu chegar a fazer essa façanha, merece esse presente ( ͡° ͜ʖ ͡°)
            header("Location: https://www.youtube.com/watch?v=dQw4w9WgXcQ");
        }else{
            $nome = $_POST['nome'];
            $cargo = $_POST['cargo'];
            $dataNascimento = $_POST['dataNascimento'];
            $sexo = $_POST['sexo'];
            $assentamento = $_POST['assentamento'];
        
            $sql = "INSERT INTO Colonos (nome, cargo, dataNascimento, sexo, fk_Assentamentos_idAssentamento) VALUES ('$nome', '$cargo', '$dataNascimento', '$sexo', '$assentamento')";
        
            if($conexao->query($sql)){
                header("Location: ../colonoVisualizacao.php");
            }
        }
    }
    $conexao->close();
?>