<?php

require_once('conexao.php');

function pegarAnunciantePorCpf ($cpf){
    $conexao = conexaoMysql();

    if ($conexao)
    {
        $sql = "select * from tbl_anunciantes where cpf_anunciante = '{$cpf}';";

        $select = mysqli_query($conexao, $sql);

        return mysqli_fetch_assoc($select);
    }
    
    return null;

}

?>