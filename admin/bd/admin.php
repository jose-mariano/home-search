<?php

require_once('conexao.php');

function pegarModeradorPorCpf ($cpf){
    $conexao = conexaoMysql();

    if ($conexao)
    {
        $sql = "select * from tbl_moderadores where cpf_moderador = '{$cpf}';";

        $select = mysqli_query($conexao, $sql);

        return mysqli_fetch_assoc($select);
    }
    
    return false;

}

?>