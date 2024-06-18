<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planejador Pós-Apocalíptico</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <?php
    include '../basicos/header.php';
    ?>
    <div class="container">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <div>
                    <h1 class="text-center mt-3">Editor de colonos</h1>
                </div>
                <?php
                    require_once '../conexoes/conexaoBanco.php';

                    $id = $_GET['id'];

                    $sql = "SELECT * FROM items WHERE idItem = $id";

                    $item = $conexao->query($sql);

                    $conexao->close();

                    while($row = $item->fetch_assoc()){
                        $nome = $row['nome'];
                        $peso = $row['peso'];
                        $valor = $row['valor'];
                    }

                    echo "<h1 class='text-center mt-3'>Item: $nome </h1>";
                ?>
                <form action="recursosEditar2.php" method="post">
                    <label class="form-label fs-2" for="nome">ID</label>
                    <input class="form-control bg-success bg-opacity-50 fontFalloutInput border border-success" name="id" id="id" type="text" required readonly value="<?php echo $id; ?>">
                    <label class="form-label fs-2" for="nome">Nome do recurso</label>
                    <input class="form-control bg-success bg-opacity-50 fontFalloutInput border border-success" name="nome" id="nome" type="text" required value="<?php echo $nome; ?>">
                    <label class="form-label fs-2" for="valor">Valor</label>
                    <input class="form-control bg-success bg-opacity-50 fontFalloutInput border border-success" name="valor" id="valor" type="number" required value="<?php echo $valor; ?>">
                    <label class="form-label fs-2" for="peso">Peso</label>
                    <input class="form-control bg-success bg-opacity-50 fontFalloutInput border border-success" name="peso" id="peso" type="number" required value="<?php echo $peso; ?>">
                    <button class="btn btn-success bg-success bg-opacity-75 shadow mt-5 fontFallout" type="submit">ENVIAR FORMULARIO</button>
                    <button class="btn btn-success bg-success bg-opacity-75 shadow mt-5 fontFallout" type="reset">LIMPAR FORMULARIO</button>
                </form>
            </div>
            <div class="col-1"></div>
        </div>
    </div>
    <?php
    include '../basicos/footer.php';
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>