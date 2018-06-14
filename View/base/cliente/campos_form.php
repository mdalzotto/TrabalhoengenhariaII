<?php include_once('../View/header.php'); ?>

    <div class="col-sm-12 mt-3">

        <div class="mb-3">
            <a tabindex="0" class="" role="button" data-toggle="popover" data-trigger="focus" title="Esta com duvida para preencher algum campo?" data-content="Preencha os campos ">Precisa de ajuda</a>
        </div>

        <form method="post" action="<?php echo $acaoForm ?>">
            <?php if (isset($cliente)) { ?>
                <input type="hidden" class="form-control" id="id"
                       name="id" value="<?php if (isset($cliente['id'])) echo $cliente['id']; ?>">
            <?php } ?>

            <div class="form-row">
                <div class="form-group col-md-3">
                    <label>Ativo <span data-toggle="tooltip" title="Campo obrigatorio"> &nbsp;<i class="text-danger">*</i>&nbsp;</span></label>
                    <select type="text" class="form-control" id="ativo" name="ativo" required>
                        <?php echo '<option value="1" ' . (isset($cliente['ativo']) ? ($cliente['ativo'] == 1 ? 'selected' : '') : '') . ' >Sim</option>
                                    <option value="0" ' . (isset($cliente['ativo']) ? ($cliente['ativo'] == 0 ? 'selected' : '') : '') . ' >Não</option>
                        </select> '; ?>
                </div>

                <div class="form-group col-md-3">
                    <label>Tipo <span data-toggle="tooltip" title="Campo obrigatorio"> &nbsp;<i class="text-danger">*</i>&nbsp;</span></label>
                    <select type="text" class="form-control" id="tipoPessoa" name="tipo" required>
                        <?php echo '<option value="1" ' . (isset($cliente['tipo']) ? ($cliente['tipo'] == 1 ? 'selected' : '') : '') . ' >Física</option>
                                    <option value="0" ' . (isset($cliente['tipo']) ? ($cliente['tipo'] == 0 ? 'selected' : '') : '') . ' >Jurídica</option>
                        </select> '; ?>
                </div>

            </div>

            <div class="form-row tipoFisico">
                <div class="form-group col-md-6">
                    <label>Nome <span data-toggle="tooltip" title="Campo obrigatorio"> &nbsp;<i class="text-danger">*</i>&nbsp;</span></label>
                    <input value="<?php if (isset($cliente['nome'])) echo $cliente['nome'] ?>" type="text"
                           class="form-control" id="nome" name="nome" placeholder="Seu nome completo"
                           autocomplete="off" required>
                </div>
                <div class="form-group col-md-3">
                    <label>Cpf</label>
                    <input value="<?php if (isset($cliente['cpf'])) echo $cliente['cpf'] ?>" type="text"
                           class="form-control" id="cpf" name="cpf"
                           placeholder="123.456.789-01" autocomplete="off">
                </div>

                <div class="form-group col-md-3">
                    <label>Rg</label>
                    <input value="<?php if (isset($cliente['rg'])) echo $cliente['rg'] ?>" type="text"
                           class="form-control" id="rg" name="rg"
                           placeholder="123456879" autocomplete="off">
                </div>
                <div class="form-group col-md-4">
                    <label>Data de nascimento</label>
                    <input value="<?php if (isset($cliente['data_nascimento'])) echo $cliente['data_nascimento'] ?>" type="date"
                           class="form-control" id="data_nascimento" name="data_nascimento" placeholder=""
                           autocomplete="off">
                </div>
            </div>

            <div class="form-row tipoJuridico">
                <div class="form-group col-md-3">
                    <label>Cnpj</label>
                    <input value="<?php if (isset($cliente['cnpj'])) echo $cliente['cnpj'] ?>" id="cnpj"
                           name="cnpj" class="form-control"
                           placeholder="12.345.678/9012-34" autocomplete="off">
                </div>

                <div class="form-group col-md-6">
                    <label>Razão Social <span data-toggle="tooltip" title="Campo obrigatorio"> &nbsp;<i class="text-danger">*</i>&nbsp;</span></label>
                    <input value="<?php if (isset($cliente['razao_social'])) echo $cliente['razao_social'] ?>" type="text"
                           class="form-control" id="razao_social" name="razao_social" placeholder="Razão social de sua empresa"
                           autocomplete="off" required>
                </div>

                <div class="form-group col-md-3">
                    <label>Nome Fantasia <span data-toggle="tooltip" title="Campo obrigatorio"> &nbsp;<i class="text-danger">*</i>&nbsp;</span></label>
                    <input value="<?php if (isset($cliente['fantasia'])) echo $cliente['fantasia'] ?>" type="text"
                           class="form-control" id="fantasia" name="fantasia"
                           placeholder="Nome fantasia de sua empresa" autocomplete="off" required>
                </div>

                <div class="form-group col-md-3">
                    <label>Inscrição estadual <span data-toggle="tooltip" title="Campo obrigatorio"> &nbsp;<i class="text-danger">*</i>&nbsp;</span></label>
                    <input value="<?php if (isset($cliente['ie'])) echo $cliente['ie'] ?>" id="ie"
                           name="ie" class="form-control"
                           placeholder="123.456.789.012" autocomplete="off" required>
                </div>

            </div>

            <div class="form-row">
                <h3>Dados adicionais</h3>
            </div>

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>Telefone</label>
                    <input value="<?php if (isset($cliente['telefone'])) echo $cliente['telefone'] ?>" type="text"
                           class="form-control" id="telefone" name="telefone" placeholder="(DDD) 12345-6789" autocomplete="off">
                </div>

                <div class="form-group col-md-4">
                    <label>E-mail</label>
                    <input value="<?php if (isset($cliente['email'])) echo $cliente['email'] ?>" id="email"
                           name="email" class="form-control" placeholder="email@dominio.com" autocomplete="off"
                    >
                </div>
            </div>

            <div class="form-row">
                <h3>Endereço</h3>
            </div>

            <div class="form-row">

                <div class="form-group col-md-4">
                    <label>Cep <span data-toggle="tooltip" title="Campo obrigatorio"> &nbsp;<i class="text-danger">*</i>&nbsp;</span> </label>
                    <input value="<?php if (isset($cliente['cep'])) echo $cliente['cep'] ?>" type="text"
                           class="form-control" id="cep" name="cep" placeholder="12345-678"
                           autocomplete="off" required>
                </div>

                <div class="form-group col-md-5">
                    <label>Endereço <span data-toggle="tooltip" title="Campo obrigatorio"> &nbsp;<i class="text-danger">*</i>&nbsp;</span></label>
                    <input value="<?php if (isset($cliente['endereco'])) echo $cliente['endereco'] ?>" type="text"
                           class="form-control" id="endereco" name="endereco" placeholder="Rua das flores"
                           autocomplete="off" required>
                </div>

                <div class="form-group col-md-3">
                    <label>Numero <span data-toggle="tooltip" title="Campo obrigatorio"> &nbsp;<i class="text-danger">*</i>&nbsp;</span></label>
                    <input value="<?php if (isset($cliente['numero'])) echo $cliente['numero'] ?>" type="text"
                           class="form-control" id="numero" name="numero" placeholder="123"
                           autocomplete="off" required>
                </div>

                <div class="form-group col-md-4">
                    <label>Bairro <span data-toggle="tooltip" title="Campo obrigatorio"> &nbsp;<i class="text-danger">*</i>&nbsp;</span></label>
                    <input value="<?php if (isset($cliente['bairro'])) echo $cliente['bairro'] ?>" type="text"
                           class="form-control" id="bairro" name="bairro" placeholder="Central"
                           autocomplete="off" required>
                </div>

                <div class="form-group col-md-4">
                    <label>Complemento</label>
                    <input value="<?php if (isset($cliente['complemento'])) echo $cliente['complemento'] ?>" type="text"
                           class="form-control" id="complemento" name="complemento" placeholder="Casa"
                           autocomplete="off">
                </div>

                <div class="form-group col-md-4">
                    <label>Cidade <span data-toggle="tooltip" title="Campo obrigatorio"> &nbsp;<i class="text-danger">*</i>&nbsp;</span></label>
                    <select type="text" class="form-control" id="cidade" name="cidade" required>
                        <option value="">Informe sua cidade</option>
                        <?php foreach ($cidades as $cidade) {
                            echo ' <option value="' . $cidade['id'] . '" ' . (isset($cliente['cidade_id']) ? ($cliente['cidade_id'] == $cidade['id'] ? 'selected' : '') : '') . '> ' . $cidade['nome'] . " - " . $cidade['uf'] . ' </option>';
                        } ?>
                    </select>
                </div>

            </div>

            <?php echo ' <button type="submit" class="btn btn-success">' . (isset($cliente['id']) ? "Salvar" : "Adicionar") . '</button>'; ?>
            <a class="btn btn-danger text-light" href="clienteController.php?rota=listar">Cancelar</a>
        </form>

    </div>


<?php include_once('../View/footer.php'); ?>