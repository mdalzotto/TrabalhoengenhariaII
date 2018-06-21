<?php include_once('../View/header.php'); ?>

    <div class="col-sm-12 mt-3">

        <div class="mb-3">
            <a tabindex="0" class="" role="button" data-toggle="popover" data-trigger="focus" title="Esta com duvida para preencher algum campo?" data-content="Os campos que conterem * devem ser preeenchidos obrigatoriamente, para que o cadastro seja concluido.">Precisa de ajuda <span data-toggle="tooltip" title="" data-original-title="Clique aqui para obter ajuda"> &nbsp;<i class="text-primary"><i class="fa fa-info-circle"></i></i>&nbsp;</span></a>
        </div>

        <form method="post" action="<?php echo $acaoForm ?>" onsubmit="return validasenha()">
            <?php if (isset($usuario)) { ?>
                <input type="hidden" class="form-control" id="id"
                       name="id" value="<?php if (isset($usuario['id'])) echo $usuario['id']; ?>">
            <?php } ?>

            <?php if (!isset($editSenha)) { ?>
                <div class="<?php if (isset($editSenha)) echo 'not-show' ?>">
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-6">
                                <label>Nome<span data-toggle="tooltip" title="Campo obrigatorio"> &nbsp;<i
                                                class="text-danger">*</i>&nbsp;</span></label>
                                <?php echo '<input value="' . (isset($usuario['nome']) ? $usuario['nome'] : "") . '" type="text" class="form-control" id="nome" name="nome" placeholder="Seu nome" autocomplete="off" required>'; ?>
                            </div>
                            <div class="col-md-6">
                                <label>Sobrenome<span data-toggle="tooltip" title="Campo obrigatorio"> &nbsp;<i class="text-danger">*</i>&nbsp;</span></label>
                                <?php echo '<input value="' . (isset($usuario['sobrenome']) ? $usuario['sobrenome'] : "") . '" type="text" class="form-control" id="sobrenome" name="sobrenome" placeholder="Seu sobrenome" autocomplete="off" required>'; ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Email<span data-toggle="tooltip" title="Campo obrigatorio"> &nbsp;<i
                                        class="text-danger">*</i>&nbsp;</span></label>
                        <?php echo '<input value="' . (isset($usuario['email']) ? $usuario['email'] : "") . '" type="email" class="form-control" id="email" name="email" placeholder="Seu email" autocomplete="off" required>'; ?>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-6">
                                <label>Nível de permissão<span data-toggle="tooltip" title="Campo obrigatorio"> &nbsp;<i
                                                class="text-danger">*</i>&nbsp;</span></label>
                                <select type="text" class="form-control" id="permissao" name="permissao" required>
                                    <?php echo '<option value="Usuario" ' . (isset($usuario['permissao']) ? ($usuario['permissao'] == 'Usuario' ? 'selected' : '') : '') . ' >Usuário</option>
                                    <option value="Gerente" ' . (isset($usuario['permissao']) ? ($usuario['permissao'] == 'Gerente' ? 'selected' : '') : '') . ' >Gerente</option>
                                    <option value="Master"  ' . (isset($usuario['permissao']) ? ($usuario['permissao'] == 'Master' ? 'selected' : '') : '') . ' >Master</option>
                        </select> '; ?>
                            </div>
                            <div class="col-md-6">
                                <label>Nome de usuário<span data-toggle="tooltip" title="Campo obrigatorio"> &nbsp;<i
                                                class="text-danger">*</i>&nbsp;</span></label>
                                <?php echo '<input value="' . (isset($usuario['usuario']) ? $usuario['usuario'] : "") . '" type="text" class="form-control" id="usuario" name="usuario" placeholder="Escolha um nome de usuario" autocomplete="off" required>'; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>

            <?php if (!isset($usuario['id']) || isset($editSenha)) { ?>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <label>Senha<span data-toggle="tooltip" title="Campo obrigatorio"> &nbsp;<i
                                            class="text-danger">*</i>&nbsp;</span></label>
                            <input type="password" class="form-control" id="senha" name="senha" placeholder="123"
                                   autocomplete="off" required>
                        </div>
                        <div class="col-md-6">
                            <label>Confirme sua senha<span data-toggle="tooltip" title="Campo obrigatorio"> &nbsp;<i
                                            class="text-danger">*</i>&nbsp;</span></label>
                            <input type="password" class="form-control" id="confirmaSenha"
                                   placeholder="123" autocomplete="off" onblur="validasenha()" required>
                        </div>
                    </div>
                </div>
            <?php } ?>

            <div id="return"></div>


            <?php echo ' <button type="submit" class="btn btn-success">' . (isset($usuario['id']) ? "Salvar" : "Adicionar") . '</button>'; ?>
            <a class="btn btn-danger text-light" href="usuarioController.php?rota=listar">Cancelar</a>
        </form>

    </div>

<?php include_once('../View/footer.php'); ?>