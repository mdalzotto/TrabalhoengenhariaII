<?php include_once('../View/header.php'); ?>

    <div class="mt-1">
        <div class="col-sm-12">

            <div class="row">
                <div class="ml-3 mt-3 mb-3">
                    <a class="btn btn-success margin1" href="produtoController.php?rota=novo"><i class="fa fa-plus"></i>
                        Adicionar Produto</a>
                </div>
                <div class="mt-3 mb-3 ml-1">
                    <a class="btn btn-effect-ripple btn-danger dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)"
                       aria-expanded="false"> <i class="fa fa-cog"></i>&nbsp;&nbsp;Opções
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu dropdown-menu-right opcoes">
                        <li>
                            <?php if (strpos($pagina, 'inativos')) { ?>
                                <a href="produtoController.php">
                                    <i class="fa fa-toggle-on pull-right"></i>
                                    Visualizar ativos
                                </a>
                            <?php } else { ?>
                                <a href="produtoController.php?rota=inativos">
                                    <i class="fa fa-toggle-off pull-right"></i>
                                    Visualizar inativos
                                </a>
                            <?php } ?>
                        </li>
                    </ul>
                </div>


            </div>

            <table class="table table-hover table-striped">
                <thead>
                <tr>
                    <th scope="col">Código de barras</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Ações</th>
                </tr>
                </thead>
                <tbody>

                <?php
                    if (!empty($dados)) {
                        foreach ($dados as $produto) {
                            echo '<tr>';
                            echo '<td width="20%">' . (($produto['cod_barras'] != null) ? $produto['cod_barras'] : "Não informado") . '</td>';
                            echo '<td width="25%">' . $produto['nome'] . '</td>';
                            echo '<td width="15%">' . $produto['qtd_estoque'] . '</td>';
                            echo '<td width="20%">R$ ' . $produto['valor'] . '</td>';
                            echo '<td width="20%">

                        <a class="btn btn-sm btn-success text-center margin1" href="produtoController.php?rota=buscar&id=' . $produto['id'] . '">
                            <span data-toggle="tooltip" title="Alterar"> &nbsp;<i class="fa fa-pencil"></i>&nbsp;</span>
                        </a>

                        <a class="btn btn-sm btn-danger text-center margin1" href="produtoController.php?rota=deletar&id=' . $produto['id'] . '">
                            <span data-toggle="tooltip" title="Deletar"> &nbsp;<i class="fa fa-close"></i>&nbsp;</span>
                        </a>
                    </td>';
                            echo '</tr>';
                        }
                    } else {
                        echo '<tr><td colspan="5" align="center">Nenhum registro encontrado</td></tr>';
                    }
                ?>
                </tbody>
            </table>
        </div>
    </div>

<?php include_once('../View/footer.php'); ?>