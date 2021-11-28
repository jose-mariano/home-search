<?php

require_once('conexao.php');
require_once('utils/alerts.php');

function pegarAnunciantePorCpf ($cpf){
    $conexao = conexaoMysql();

    if ($conexao)
    {
        $sql = "select * from tbl_anunciantes where cpf_anunciante = '{$cpf}';";

        $select = mysqli_query($conexao, $sql);

        return mysqli_fetch_assoc($select);
    }
    
    return false;

}

function inserirAnunciante ($nome, $email, $senha, $cpf, $celular){
    $conexao = conexaoMysql();

    if ($conexao)
    {
        $sql = "INSERT INTO tbl_anunciantes(nome_anunciante, email_anunciante, senha_anunciante, cpf_anunciante, celular_anunciante) VALUES ('{$nome}', '{$email}', '{$senha}', '{$cpf}', '{$celular}');";

        if (mysqli_query($conexao, $sql))
            mensagemSucesso("Cadastro efetuado com sucesso!");
        else 
            mensagemErro("Erro ao efetuar cadastro");
    }

}

function listarAnunciantes (){
    $conexao = conexaoMysql();

    if ($conexao)
    {
        $sql = "select * from tbl_anunciantes order by nome_anunciante;";

        $select = mysqli_query($conexao, $sql);

        return $select;
    }
    
    return array();

}

function excluirAnunciosDoAnunciante($id){
    $conexao = conexaoMysql();

    if ($conexao)
    {
        $sql = "DELETE FROM tbl_anuncios WHERE fk_anunciante = {$id};";

        if (!mysqli_query($conexao, $sql)){
            mensagemErro("Erro ao excluir anuncios");
            exit;
        }
    }
    
}

function excluirAnunciante($id){
    $conexao = conexaoMysql();

    if ($conexao)
    {
        excluirAnunciosDoAnunciante($id);
        $sql = "DELETE FROM tbl_anunciantes WHERE id_anunciante = {$id};";

        if (mysqli_query($conexao, $sql))
            mensagemSucesso("Anunciante excluído com sucesso!");
        else 
            mensagemErro("Erro ao excluir Anunciante");
    }
    
}

?>