<?php
    require_once 'conexaoBanco.php';

    if($conexao->connect_error){
        echo "ERRO!";
        die;
    }

    $sql = "SELECT * FROM assentamentos";

    $assentamentos = $conexao->query($sql);

    if ($assentamentos->num_rows > 0) {
        while($row = $assentamentos->fetch_assoc()) {
            echo "<tr>";
            echo "<td class='bg-success bg-opacity-50'><span class='fontFallout fs-5'>" . $row["idAssentamento"] . "</span></td>";
            echo "<td class='bg-success bg-opacity-50'><span class='fontFallout fs-5'>" . $row["nome"] . "</span></td>";
            echo "<td class='bg-success bg-opacity-50'><span class='fontFallout fs-5'>" . $row["agua"] . "</span></td>";
            echo "<td class='bg-success bg-opacity-50'><span class='fontFallout fs-5'>" . $row["alimento"] . "</span></td>";
            echo "<td class='bg-success bg-opacity-50'><span class='fontFallout fs-5'>" . $row["defesa"] . "</span></td>";
            echo "<td class='bg-success bg-opacity-50'><span class='fontFallout fs-5'>" . $row["quantColonos"] . "</span></td>";
            echo "<td class='bg-success bg-opacity-50'><a class='fontFallout fs-5 text-decoration-none' href='./conexoes/assentamentosEditar.php?id=" . $row["idAssentamento"] . "'>Editar</a></td>";
            echo "<td class='bg-success bg-opacity-50'><a class='fontFallout fs-5 text-decoration-none' href='./conexoes/assentamentosExcluir.php?id=" . $row["idAssentamento"] . "'>Excluir</a></td>";
            echo "</tr>";
        }
    }

    $conexao->close();
?>