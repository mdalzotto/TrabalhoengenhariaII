<?php include_once ('../View/header.php'); ?>

    <div class="col-sm-12 mt-3">

        <div class="mb-3">
            <a tabindex="0" class="" role="button" data-toggle="popover" data-trigger="focus" title="Esta com duvida para preencher algum campo?" data-content="Preencha os campos ">Precisa de ajuda</a>
        </div>

        <form method="post" action="<?php echo $acaoForm ?>">
            <?php if(isset($produto)){ ?>
                    <input type="hidden" class="form-control" id="id"
                           name="id" value="<?php if(isset($produto['id'])) echo $produto['id']; ?>">
            <?php    } ?>

        <div class="form-row">
            <div class="form-group col-md-2">
                <label>Ativo <span data-toggle="tooltip" title="Campo obrigatorio"> &nbsp;<i  class="text-danger">*</i>&nbsp;</span></label>
                <select type="text" class="form-control" id="ativo" name="ativo" required>
                    <?php echo '<option value="1" ' . (isset($produto['ativo']) ? ($produto['ativo'] == 1 ? 'selected' : '') : '') . ' >Sim</option>
                                <option value="0" ' . (isset($produto['ativo']) ? ($produto['ativo'] == 0 ? 'selected' : '') : '') . ' >Não</option>
                        </select> '; ?>
            </div>

            <div class="form-group col-md-6">
                <label>Nome <span data-toggle="tooltip" title="Campo obrigatorio"> &nbsp;<i  class="text-danger">*</i>&nbsp;</span></label>
                <?php echo '<input value="' . (isset($produto['nome']) ? $produto['nome'] : "") . '" type="text" class="form-control" id="nome" name="nome" placeholder="Nome de produto" autocomplete="off" required>'; ?>
            </div>
            <div class="form-group col-md-4">
                <label>Apelido do produto <span data-toggle="tooltip" title="Campo obrigatorio"> &nbsp;<i  class="text-danger">*</i>&nbsp;</span></label>
                <?php echo '<input value="' . (isset($produto['apelido_produto']) ? $produto['apelido_produto'] : "") . '"id="apelido" name="apelido" class="form-control" placeholder="Apelido de produto" autocomplete="off" required>'; ?>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Valor <span data-toggle="tooltip" title="Campo obrigatorio"> &nbsp;<i  class="text-danger">*</i>&nbsp;</span></label>

                <?php echo '<input value="' . (isset($produto['valor']) ? $produto['valor'] : "") . '" type="text" class="form-control" id="valor" name="valor" placeholder="1,99" autocomplete="off" required>'; ?>
            </div>
            <div class="form-group col-md-6">
                <label>Codigo de barras</label>
                <?php echo '<input value="' . (isset($produto['cod_barras']) ? $produto['cod_barras'] : "") . '" type="text" class="form-control" id="cod_barras" name="cod_barras" placeholder="789654654654" autocomplete="off">'; ?>
            </div>
            <div class="form-group col-md-6">
                <label>Icms Origem <span data-toggle="tooltip" title="Campo obrigatorio"> &nbsp;<i  class="text-danger">*</i>&nbsp;</span></label>
                <select type="text" class="form-control" id="icms" name="icms" required>
                    <?php foreach ($icm as $icmes) {
                        echo ' <option value="' . $icmes['id'] . '" ' . (isset($produto['icms_id']) ? ($produto['icms_id'] == $icmes['id'] ? 'selected' : '') : '') . '> ' . $icmes['codigo_icms_origem'] . " - " . $icmes['desc_icms_origem'] . ' </option>';
                    } ?>
                </select>
            </div>
        </div>


            <div class="form-row">
                <h3>Estoque</h3>
            </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Quantidade <span data-toggle="tooltip" title="Campo obrigatorio"> &nbsp;<i  class="text-danger">*</i>&nbsp;</span></label>
                <?php echo '<input value="' . (isset($produto['qtd_estoque']) ? $produto['qtd_estoque'] : "") . '" type="text" class="form-control" id="qtd" name="qtd" placeholder="99" autocomplete="off" required>'; ?>
            </div>
            <div class="form-group col-md-6">
                <label>Quantidade minima <span data-toggle="tooltip" title="Campo obrigatorio"> &nbsp;<i  class="text-danger">*</i>&nbsp;</span></label>
                <?php echo ' <input value="' . (isset($produto['qtd_estoque_min']) ? $produto['qtd_estoque_min'] : "") . '" type="text" class="form-control" id="qtd_min" name="qtd_min" placeholder="0" autocomplete="off"required>'; ?>
            </div>
        </div>

            <div class="form-row">
                <h3>Dados adicionais</h3>
            </div>

        <div class="form-row">

            <div class="form-group col-md-3">
                <label> Código personalizado</label>
                <?php echo '<input value="' . (isset($produto['cod_personalizado']) ? $produto['cod_personalizado'] : "") . '" type="text" class="form-control" id="cod_personalizado" name="cod_personalizado" placeholder="123" autocomplete="off" >'; ?>
            </div>
            <div class="form-group col-md-3">
                <label>Local no estoque</label>
                <?php echo '<input value="' . (isset($produto['local']) ? $produto['local'] : "") . '"id="local_estoque" name="local_estoque" class="form-control" placeholder="Pratileira 01" autocomplete="off">'; ?>
            </div>
        </div>

        <?php echo ' <button type="submit" class="btn btn-success">' . (isset($produto['id']) ? "Salvar" : "Adicionar") . '</button>'; ?>
        <a class="btn btn-danger text-light" href="produtoController.php?rota=listar">Cancelar</a>
        </form>

    </div>


<?php include_once ('../View/footer.php'); ?>