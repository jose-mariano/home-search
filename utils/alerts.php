<?php

function mensagemSucesso($texto){
    echo ("<script>
            alert('{$texto}');
            window.location.href = 'gerenciamentoCategorias.php';
          </script>");
}

function mensagemErro($texto){
    echo ("<script>
            alert('{$texto}');
            window.history.back();
        </script>");
}

?>