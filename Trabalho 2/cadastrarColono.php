<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planejador Pós-Apocalíptico</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <?php
    include 'header.php';
    ?>
    <div class="container">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <div>
                    <h1 class="text-center mt-3">Cadastro de colono</h1>
                </div>
                <form action="conexaoBancoColono.php" method="post">
                    <label class="form-label fs-2" for="Nome">Nome do colono</label>
                    <input class="form-control bg-success bg-opacity-50 fontFalloutInput border border-success" name="nome" id="nome" type="text">
                    <label class="form-label fs-2" for="Nome">Cargo</label>
                    <input class="form-control bg-success bg-opacity-50 fontFalloutInput border border-success" name="cargo" id="cargo" type="text">
                    <label class="form-label fs-2" for="Nome">Data de nascimento</label>
                    <input class="form-control bg-success bg-opacity-50 fontFalloutInput border border-success" name="dataNascimento" id="dataNascimento" type="date">
                    <label class="form-label fs-2" for="sexo">Sexo</label>
                    <select class="form-select bg-success bg-opacity-50 fontFalloutInput border border-success" name="sexo" id="sexo">
                        <option class="text-dark" value="M">Masculino</option>
                        <option class="text-dark" value="F">Femino</option>
                    </select>
                    <button class="btn btn-success shadow mt-5 fontFallout" type="submit">Enviar</button>
                </form>
            </div>
            <div class="col-1"></div>
        </div>
    </div>
    <?php
    include 'footer.php';
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>