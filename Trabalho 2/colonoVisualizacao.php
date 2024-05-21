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
    include './basicos/header.php';
    ?>
    <div class="container">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <div>
                    <h1 class="text-center mt-3">Colonos cadastrados</h1>
                </div>
                <table class="table table-bordered border-success">
                <thead>
                    <tr>
                        <th class="bg-success bg-opacity-50"><span class="fontFallout fs-5">ID</span></th>
                        <th class="bg-success bg-opacity-50"><span class="fontFallout fs-5">Nome</span></th>
                        <th class="bg-success bg-opacity-50"><span class="fontFallout fs-5">Data de nascimento</span></th>
                        <th class="bg-success bg-opacity-50"><span class="fontFallout fs-5">Sexo</span></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include "./conexoes/colonosVisualizacao.php";
                    ?>
                </tbody>
            </table>
                </div>
            <div class="col-1"></div>
        </div>
    </div>
    <?php
    include './basicos/footer.php';
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>