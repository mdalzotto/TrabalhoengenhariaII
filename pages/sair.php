<?php
session_start();
session_destroy();
header("location: ../index.php?msg=Você foi desconectado com sucesso&tipo=success");
?>