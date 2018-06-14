<?php include_once ('../View/header.php'); ?>

    <div class="mt-1">
    <div class="col-sm-12">

        <div class="row">
            <a class="btn btn-success m-3" href="usuarioController.php?rota=novo"><i class="fa fa-plus"></i> Adicionar usuário</a>
        </div>

        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Nome de usuario</th>
                <th scope="col">E-mail</th>
                <th scope="col">Permissão</th>
                <th scope="col">Ações</th>
            </tr>
            </thead>
            <tbody>

            <?php
            if (!empty($usuarios)) {
                foreach ($usuarios as $usuario) {
                    echo '<tr>';
                    echo '<td width="25%">' . $usuario['nome'] . '</td>';
                    echo '<td width="20%">' . $usuario['usuario'] . '</td>';
                    echo '<td width="30%">' . $usuario['email'] . '</td>';
                    echo '<td width="10%">' . $usuario['permissao'] . '</td>';
                    echo '<td width="20%">
                        <a class="btn btn-sm btn-primary text-center margin1" href="usuarioController.php?rota=senha&id=' . $usuario['id'] . '">
                            <span data-toggle="tooltip" title="Alterar senha"> &nbsp;<i class="fa fa-key"></i>&nbsp;</span>
                        </a>
                        
                         <a class="btn btn-sm btn-success text-center margin1" href="usuarioController.php?rota=buscar&id=' . $usuario['id'] . '">
                            <span data-toggle="tooltip" title="Alterar"> &nbsp;<i class="fa fa-pencil"></i>&nbsp;</span>
                        </a>

                        <a class="btn btn-sm btn-danger text-center margin1" href="usuarioController.php?rota=deletar&id=' . $usuario['id'] . '">
                            <span data-toggle="tooltip" title="Deletar"> &nbsp;<i class="fa fa-close"></i>&nbsp;</span>
                        </a>
                    </td>';
                    echo '</tr>';
                }
            } else {
                echo '<tr><td colspan="4" align="center">Nenhum registro encontrado</td></tr>';
            }
            ?>
            </tbody>
        </table>
        </div>
    </div>








<!--        <div class="col-sm-12">-->
<!---->
<!--            <div class="row">-->
<!--                <a class="btn btn-success m-3" href="produtoController.php?rota=novo"><i class="fa fa-plus"></i> Adicionar Produto</a>-->
<!--            </div>-->
<!---->
<!--            <table class="table table-hover table-striped">-->
<!--                <thead>-->
<!--                <tr>-->
<!--                    <th scope="col">Nome</th>-->
<!--                    <th scope="col">Quantidade</th>-->
<!--                    <th scope="col">Valor</th>-->
<!--                    <th scope="col">Ações</th>-->
<!--                </tr>-->
<!--                </thead>-->
<!--                <tbody>-->
<!---->
<!--                < ?php-->
<!--                if (!empty($dados)) {-->
<!--                    foreach ($dados as $user) {-->
<!--                        echo '<tr>';-->
<!--                        echo '<td width="45%">' . $user['nome'] . '</td>';-->
<!--                        echo '<td width="15%">' . $user['qtd_estoque'] . '</td>';-->
<!--                        echo '<td width="20%">R$ ' . $user['valor'] . '</td>';-->
<!--                        echo '<td width="20%">-->
<!--                        <a class="btn btn-sm btn-primary text-center margin1" href="produtoController.php?rota=detalhes&id=' . $user['id'] . '">-->
<!--                            <span data-toggle="tooltip" title="Detalhes"> &nbsp;<i class="fa fa-info"> </i>&nbsp;</span>-->
<!--                        </a>-->
<!---->
<!--                        <a class="btn btn-sm btn-success text-center margin1" href="produtoController.php?rota=buscar&id=' . $user['id'] . '">-->
<!--                            <span data-toggle="tooltip" title="Alterar"> &nbsp;<i class="fa fa-pencil"></i>&nbsp;</span>-->
<!--                        </a>-->
<!---->
<!--                        <a class="btn btn-sm btn-danger text-center margin1" href="produtoController.php?rota=deletar&id=' . $user['id'] . '">-->
<!--                            <span data-toggle="tooltip" title="Deletar"> &nbsp;<i class="fa fa-close"></i>&nbsp;</span>-->
<!--                        </a>-->
<!--                    </td>';-->
<!--//-->
<!---->
<!--                        echo '</tr>';-->
<!--                    }-->
<!--                } else {-->
<!--                    echo '<tr><td colspan="4" align="center">Nenhum registro encontrado</td></tr>';-->
<!--                }-->
<!--                ?>-->
<!--                </tbody>-->
<!--            </table>-->
<!--    </div>-->

    <!--fimconteudo------------------------------->
<?php include_once ('../View/footer.php'); ?>