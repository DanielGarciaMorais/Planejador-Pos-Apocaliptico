<form action="./conexoes/recursosCriacao.php" method="post">
    <label class="form-label fs-2" for="nome">Nome do recurso</label>
    <input class="form-control bg-success bg-opacity-50 fontFalloutInput border border-success" name="nome" id="nome" type="text" required>
    <label class="form-label fs-2" for="valor">Valor</label>
    <input class="form-control bg-success bg-opacity-50 fontFalloutInput border border-success" name="valor" id="valor" type="number" required>
    <label class="form-label fs-2" for="peso">Peso</label>
    <input class="form-control bg-success bg-opacity-50 fontFalloutInput border border-success" name="peso" id="peso" type="number" required>
    <button class="btn btn-success bg-success bg-opacity-75 shadow mt-5 fontFallout" type="submit">ENVIAR FORMULARIO</button>
    <button class="btn btn-success bg-success bg-opacity-75 shadow mt-5 fontFallout" type="reset">LIMPAR FORMULARIO</button>
</form>