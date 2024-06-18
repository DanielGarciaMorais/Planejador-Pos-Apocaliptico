<?php
    require_once 'conexaoBanco.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if($_POST['nome'] == null || $_POST['cargo'] == null || $_POST['dataNascimento'] == null || $_POST['sexo'] == null || $_POST['assentamento'] == null){
            //O individo que conseguiu chegar a fazer essa façanha, merece esse presente ( ͡° ͜ʖ ͡°)
            header("Location: https://www.youtube.com/watch?v=dQw4w9WgXcQ");
        }else{
            $idColono = $_POST['id'];
            $nome = $_POST['nome'];
            $cargo = $_POST['cargo'];
            $dataNascimento = $_POST['dataNascimento'];
            $sexo = $_POST['sexo'];
            $assentamento = $_POST['assentamento'];

            $sql = "UPDATE colonos SET nome = '$nome', cargo = '$cargo', datanascimento = '$dataNascimento', sexo = '$sexo', fk_Assentamentos_idAssentamento = '$assentamento'  WHERE idColono = $idColono";

            if($conexao->query($sql)){
                header("location: ../colonoVisualizacao.php");
            }
        }







            
    }
    $conexao->close();
?>