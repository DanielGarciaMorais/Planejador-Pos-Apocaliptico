<?php
    require_once 'conexaoBanco.php';

    if($conexao->connect_error){
        echo "ERRO!";
        die;
    }

    $sql = "SELECT * FROM colonos";

    $colonos = $conexao->query($sql);

    $sql2 = "SELECT idAssentamento, nome FROM Assentamentos";

    $assentamento = $conexao->query($sql2);

    

    if ($colonos->num_rows > 0) {
        while($row = $colonos->fetch_assoc()) {
            echo "<tr>";
            echo "<td class='bg-success bg-opacity-50'><span class='fontFallout fs-5'>" . $row["idColono"] . "</span></td>";
            echo "<td class='bg-success bg-opacity-50'><span class='fontFallout fs-5'>" . $row["nome"] . "</span></td>";
            echo "<td class='bg-success bg-opacity-50'><span class='fontFallout fs-5'>" . $row["cargo"] . "</span></td>";
            echo "<td class='bg-success bg-opacity-50'><span class='fontFallout fs-5'>" . $row["dataNascimento"] . "</span></td>";
            echo "<td class='bg-success bg-opacity-50'><span class='fontFallout fs-5'>" . $row["sexo"] . "</span></td>";
            echo "<td class='bg-success bg-opacity-50'><span class='fontFallout fs-5'>" . $row["fk_Assentamentos_idAssentamento"] . "</span></td>";
            echo "<td class='bg-success bg-opacity-50'><a class='fontFallout fs-5 text-decoration-none' href='./conexoes/colonosEditar.php?id=" . $row["idColono"] . "'>Editar</a></td>";
            echo "<td class='bg-success bg-opacity-50'><a class='fontFallout fs-5 text-decoration-none' href='./conexoes/colonosExcluir.php?id=" . $row["idColono"] . "'>Excluir</a></td>";
            echo "</tr>";
        }
    }

    $conexao->close();
?>