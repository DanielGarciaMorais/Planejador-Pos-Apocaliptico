<?php
    //Essa conexão está só sendo usada para testar, futuramente será 'arrumada'...

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $database = "ppa";

    $conexao = new mysqli($servidor, $usuario, $senha, $database);

    if($conexao->connect_error){
        echo "ERRO!";
        die;
    }

    $sql = "SELECT * FROM colonos";

    $colonos = $conexao->query($sql);

    if ($colonos->num_rows > 0) {
        while($row = $colonos->fetch_assoc()) {
            echo "<tr>";
            echo "<td class='bg-success bg-opacity-50'><span class='fontFallout fs-5'>" . $row["idColono"] . "</span></td>";
            echo "<td class='bg-success bg-opacity-50'><span class='fontFallout fs-5'>" . $row["nome"] . "</span></td>";
            echo "<td class='bg-success bg-opacity-50'><span class='fontFallout fs-5'>" . $row["dataNascimento"] . "</span></td>";
            echo "<td class='bg-success bg-opacity-50'><span class='fontFallout fs-5'>" . $row["sexo"] . "</span></td>";
            echo "</tr>";
        }
    }

    $conexao->close();
?>