<?php
    require_once 'conexaoBanco.php';

    if($conexao->connect_error){
        echo "ERRO!";
        die;
    }

    $sql = "SELECT * FROM items";

    $items = $conexao->query($sql);

    if ($items->num_rows > 0) {
        while($row = $items->fetch_assoc()) {
            echo "<tr>";
            echo "<td class='bg-success bg-opacity-50'><span class='fontFallout fs-5'>" . $row["idItem"] . "</span></td>";
            echo "<td class='bg-success bg-opacity-50'><span class='fontFallout fs-5'>" . $row["nome"] . "</span></td>";
            echo "<td class='bg-success bg-opacity-50'><span class='fontFallout fs-5'>" . $row["peso"] . "</span></td>";
            echo "<td class='bg-success bg-opacity-50'><span class='fontFallout fs-5'>" . $row["valor"] . "</span></td>";
            echo "</tr>";
        }
    }

    $conexao->close();
?>