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
                    <h1 class="text-center mt-3">Editor de assentamentos</h1>
                </div>
                <?php
                    require_once '../conexoes/conexaoBanco.php';

                    $id = $_GET['id'];

                    $sql = "SELECT * FROM Assentamentos WHERE idAssentamento = $id";

                    $assentamento = $conexao->query($sql);

                    $conexao->close();

                    while($row = $assentamento->fetch_assoc()){
                        $nome = $row['nome'];
                        $agua = $row['agua'];
                        $alimento = $row['alimento'];
                        $defesa = $row['defesa'];
                        $quantColonos = $row['quantColonos'];
                    }

                    echo "<h1 class='text-center mt-3'>Assentamento: $nome</h1>";
                ?>

                <form action="assentamentosEditar2.php" method="post">
                    <label class="form-label fs-2" for="id">ID</label>
                    <input class="form-control bg-success bg-opacity-50 fontFalloutInput border border-success" name="id" id="id" type="text" required readonly value="<?php echo $id; ?>">
                    <label class="form-label fs-2" for="nome">Nome do assentamento</label>
                    <input class="form-control bg-success bg-opacity-50 fontFalloutInput border border-success" name="nome" id="nome" type="text" required value="<?php echo $nome; ?>">
                    <label class="form-label fs-2" for="agua">Água</label>
                    <input class="form-control bg-success bg-opacity-50 fontFalloutInput border border-success" name="agua" id="agua" type="number" min="0" required value="<?php echo $agua; ?>">
                    <label class="form-label fs-2" for="alimento">Alimento</label>
                    <input class="form-control bg-success bg-opacity-50 fontFalloutInput border border-success" name="alimento" id="alimento" type="number" min="0" required value="<?php echo $alimento; ?>">
                    <label class="form-label fs-2" for="defesa">Defesa</label>
                    <input class="form-control bg-success bg-opacity-50 fontFalloutInput border border-success" name="defesa" id="defesa" type="number" min="0" required value="<?php echo $defesa; ?>">
                    <label class="form-label fs-2" for="quantColonos">Quantidade de colonos</label>
                    <input class="form-control bg-success bg-opacity-50 fontFalloutInput border border-success" name="quantColonos" id="quantColonos" type="number" min="0" required value="<?php echo $quantColonos; ?>">
                    <button class="btn btn-success bg-success bg-opacity-75 shadow mt-5 fontFallout" type="submit">ENVIAR FORMULARIO</button>
                    <button class="btn btn-success bg-success bg-opacity-75 shadow mt-5 fontFallout" type="reset">LIMPAR FORMULARIO</button>
                </form>
            <div class="col-1"></div>
        </div>
    </div>
    <?php
    include '../basicos/footer.php';
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>