</div>

<div>
    <div class="col-sm-12">
        <p id="ret"></p>
    </div>
</div>

</div>

<footer class="sticky-footer">
    <div class="container">
        <div class="text-center">
            <small>Copyright © Your Website 2018</small>
        </div>
    </div>
</footer>

<a class="scroll-to-top rounded" href="#page-top">
    <i class="fa fa-angle-up"></i>
</a>

<div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Você tem certeza que deseja sair?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Selecione "Sair" se você tiver certeza que deseja sair, para terminar sua sessão
                atual, caso contrario clique em cancelar.
            </div>
            <div class="modal-footer">
                <a class="btn btn-success" href="../Controller/baseController.php?rota=logout">Sair</a>
                <button class="btn btn-danger" type="button" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>

<script src="<?= APP_PATH ?>/vendor/jquery/jquery.min.js"></script>
<script src="<?= APP_PATH ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= APP_PATH ?>/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="<?= APP_PATH ?>/vendor/datatables/jquery.dataTables.js"></script>
<script src="<?= APP_PATH ?>/vendor/datatables/dataTables.bootstrap4.js"></script>
<script src="<?= APP_PATH ?>/js/sb-admin.min.js"></script>
<script src="<?= APP_PATH ?>/js/scripts.php"></script>
<script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>

<script src="<?= APP_PATH ?>/js/sb-admin-datatables.min.js"></script>
<!--<script src="js/sb-admin-charts.min.js"></script>-->
</div>
</body>

</html>