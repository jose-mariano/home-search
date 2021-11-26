<?php

// Configuração para estabelecer o padrão de regionalidade no php
date_default_timezone_set('America/Sao_Paulo');

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