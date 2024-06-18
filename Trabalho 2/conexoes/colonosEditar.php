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

                    $sql = "SELECT * FROM colonos WHERE idColono = $id";

                    $colono = $conexao->query($sql);

                    $sql = "SELECT idAssentamento, nome FROM Assentamentos";

                    $assentamentos = $conexao->query($sql);

                    $conexao->close();

                    while($row = $colono->fetch_assoc()){
                        $nome = $row['nome'];
                        $cargo = $row['cargo'];
                        $dataNascimento = $row['dataNascimento'];
                        $sexo = $row['sexo'];
                        $assentamento = $row['fk_Assentamentos_idAssentamento'];
                    }

                    echo "<h1 class='text-center mt-3'>Colono: $nome </h1>";
                ?>
                <form action="colonosEditar2.php" method="post">
                    <label class="form-label fs-2" for="id">ID</label>
                    <input class="form-control bg-success bg-opacity-50 fontFalloutInput border border-success" name="id" id="id" type="text" required readonly value="<?php echo $id ?>">                    
                    <label class="form-label fs-2" for="Nome">Nome do colono</label>
                    <input class="form-control bg-success bg-opacity-50 fontFalloutInput border border-success" name="nome" id="nome" type="text" required value="<?php echo $nome ?>">
                    <label class="form-label fs-2" for="cargo">Cargo</label>
                    <input class="form-control bg-success bg-opacity-50 fontFalloutInput border border-success" name="cargo" id="cargo" type="text" required value="<?php echo $cargo ?>">
                    <label class="form-label fs-2" for="dataNascimento">Data de nascimento</label>
                    <input class="form-control bg-success bg-opacity-50 fontFalloutInput border border-success" name="dataNascimento" id="dataNascimento" type="date" required value="<?php echo $dataNascimento ?>">
                    <label class="form-label fs-2" for="sexo">Sexo</label>
                    <select class="form-select bg-success bg-opacity-50 fontFalloutInput border border-success" name="sexo" id="sexo" required value="<?php echo $sexo ?>">
                        <option class="text-dark" value="M">Masculino</option>
                        <option class="text-dark" value="F">Femino</option>
                    </select>
                    <label class="form-label fs-2" for="assentamento">Assentamento</label>
                    <select class="form-select bg-success bg-opacity-50 fontFalloutInput border border-success" name="assentamento" id="assentamento" value="<?php echo $nomeAssentamento ?>">
                        <?php
                            foreach ($assentamentos as $row) {
                                $idAssentamento = $row['idAssentamento'];
                                $nome = $row['nome'];
                                echo "<option value=\"$idAssentamento\">$nome</option>";
                            }
                        ?>
                    </select>
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