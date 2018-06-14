<?php include_once('../View/header.php'); ?>

    <div class="mt-1">
        <div class="col-sm-12">

            <div class="row">
                <a class="btn btn-success ml-3 mt-3 mb-3" href="clienteController.php?rota=novo"><i class="fa fa-plus"></i> Adicionar Cliente</a>

                <div class="mt-3 mb-3 ml-1">
                    <a class="btn btn-effect-ripple btn-danger dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)"
                       aria-expanded="false"> <i class="fa fa-cog"></i>&nbsp;&nbsp;Opções
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu dropdown-menu-right opcoes">
                        <li>
                            <?php if (strpos($pagina, 'inativos')) { ?>
                                <a href="clienteController.php">
                                    <i class="fa fa-toggle-on pull-right"></i>
                                    Visualizar ativos
                                </a>
                            <?php } else { ?>
                                <a href="clienteController.php?rota=inativos">
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
                    <th scope="col">Nome</th>
                    <th scope="col">Cpf / Cnpj</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Ações</th>
                </tr>
                </thead>
                <tbody>

                <?php
                    if (!empty($dados)) {
                        foreach ($dados as $cliente) {
                            echo '<tr>';
                            echo '<td width="45%">' . ($cliente['nome'] != '' ? $cliente['nome'] : $cliente['razao_social'] . '<br>' . $cliente['fantasia']) . '</td>';
                            echo '<td width="20%">' . ($cliente['cpf'] != '' ? $cliente['cpf'] : ($cliente['cnpj'] != '' ? $cliente['cnpj'] : "Não informado")) . '</td>';
                            echo '<td width="15%">' . ($cliente['telefone'] != '' ? $cliente['telefone'] : "Não informado") . '</td>';
                            echo '<td width="20%">

                        <a class="btn btn-sm btn-success text-center margin1" href="clienteController.php?rota=buscar&id=' . $cliente['id'] . '">
                            <span data-toggle="tooltip" title="Alterar"> &nbsp;<i class="fa fa-pencil"></i>&nbsp;</span>
                        </a>

                        <a class="btn btn-sm btn-danger text-center margin1" href="clienteController.php?rota=deletar&id=' . $cliente['id'] . '">
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

<?php include_once('../View/footer.php'); ?>