<form action="./conexoes/colonosCriacao.php" method="post">
    <?php
        require_once 'conexoes/conexaoBanco.php';
        
        $sql = "SELECT idAssentamento, nome FROM Assentamentos";

        $assentamentos = $conexao->query($sql);
        
        $conexao->close();
    ?>


    <label class="form-label fs-2" for="Nome">Nome do colono</label>
    <input class="form-control bg-success bg-opacity-50 fontFalloutInput border border-success" name="nome" id="nome" type="text" required>
    <label class="form-label fs-2" for="cargo">Cargo</label>
    <input class="form-control bg-success bg-opacity-50 fontFalloutInput border border-success" name="cargo" id="cargo" type="text" required>
    <label class="form-label fs-2" for="dataNascimento">Data de nascimento</label>
    <input class="form-control bg-success bg-opacity-50 fontFalloutInput border border-success" name="dataNascimento" id="dataNascimento" type="date" required>
    <label class="form-label fs-2" for="sexo">Sexo</label>
    <select class="form-select bg-success bg-opacity-50 fontFalloutInput border border-success" name="sexo" id="sexo" required>
        <option class="text-dark" value="M">Masculino</option>
        <option class="text-dark" value="F">Femino</option>
    </select>
    <label class="form-label fs-2" for="assentamento">Assentamento</label>
    <select class="form-select bg-success bg-opacity-50 fontFalloutInput border border-success" name="assentamento" id="assentamento">
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