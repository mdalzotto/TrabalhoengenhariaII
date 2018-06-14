<?php include_once ('../View/header.php'); ?>

<div class="row mt-3">

    <div class="col-xl-4 col-sm-6 mb-3">
        <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fa fa-fw fa fa-users"></i>
                </div>
                <div class="mr-5"><h3>Clientes</h3></div>
                <div class="mr-5"><p><?php foreach ($qtdCliente as $qtdClientes) if($qtdClientes['qtd'] <> 1){echo $qtdClientes['qtd'] .' clientes cadastrados.';}else{echo $qtdClientes['qtd'] .' cliente cadastrado.';}  ?></p></div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="../Controller/clienteController.php">
                <span class="float-left">Veja mais</span>
                <span class="float-right">
                    <i class="fa fa-angle-right"></i>
                  </span>
            </a>
        </div>
    </div>

    <div class="col-xl-4 col-sm-6 mb-3">
        <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fa fa-fw fa-shopping-cart"></i>
                </div>
                <div class="mr-5"><h3>Produtos</h3></div>
                <div class="mr-5"><p><?php foreach ($qtdProduto as $qtdProdutos) if($qtdProdutos['qtd'] <> 1){echo $qtdProdutos['qtd'] .' produtos cadastrados.';}else{echo $qtdProdutos['qtd'] .' produto cadastrado.';}  ?></p></div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="../Controller/produtoController.php">
                <span class="float-left">Veja mais</span>
                <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
        </div>
    </div>

    <div class="col-xl-4 col-sm-6 mb-3">
        <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fa fa-fw fa-user"></i>
                </div>
                <div class="mr-5"><h3>Usuários</h3></div>
                <div class="mr-5"><p><?php foreach ($qtdUsuario as $qtdUsuarios) if($qtdUsuarios['qtd'] <> 1){echo $qtdUsuarios['qtd'] .' usuários cadastrados.';}else{echo $qtdUsuarios['qtd'] .' usuário cadastrado.';}  ?></p></div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="../Controller/usuarioController.php">
                <span class="float-left">Veja mais</span>
                <span class="float-right">
                            <i class="fa fa-angle-right"></i>
                          </span>
            </a>
        </div>
    </div>


<!--                <div class="col-xl-3 col-sm-6 mb-3">-->
<!--                    <div class="card text-white bg-danger o-hidden h-100">-->
<!--                        <div class="card-body">-->
<!--                            <div class="card-body-icon">-->
<!--                                <i class="fa fa-fw fa-support"></i>-->
<!--                            </div>-->
<!--                            <div class="mr-5">Base</div>-->
<!--                        </div>-->
<!--                        <a class="card-footer text-white clearfix small z-1" href="../Controller/usuarioController.php">-->
<!--                            <span class="float-left">Veja mais</span>-->
<!--                            <span class="float-right">-->
<!--                    <i class="fa fa-angle-right"></i>-->
<!--                  </span>-->
<!--                        </a>-->
<!--                    </div>-->
<!--                </div>-->
</div>
<?php include_once ('../View/footer.php'); ?>