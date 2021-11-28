
<?php

require_once("conexao.php");

require_once("utils/alerts.php");

function listarCategorias (){
    $conexao = conexaoMysql();

    if ($conexao)
    {
        $sql = "select * from tbl_categorias order by nome_categoria;";

        $select = mysqli_query($conexao, $sql);

        return $select;
    }
    
    return array();

}

function pegarCategoriaPorId ($id){
    $conexao = conexaoMysql();

    if ($conexao)
    {
        $sql = "select * from tbl_categorias where id_categoria = {$id};";

        $select = mysqli_query($conexao, $sql);

        return mysqli_fetch_assoc($select);
    }
    
    return array();

}

function inserirCategoria($nome){
    $conexao = conexaoMysql();

    if ($conexao)
    {
        $sql = "INSERT INTO tbl_categorias(nome_categoria) VALUES ('{$nome}');";

        if (mysqli_query($conexao, $sql))
            mensagemSucesso("Categoria cadastrada com sucesso!");
        else 
            mensagemErro("Erro ao cadastrar categoria");
    }

    mensagemErro("Erro na conexão com o Banco de Dados");
}

function atualizarCategoria($nomeNovo, $id){
    $conexao = conexaoMysql();

    if ($conexao)
    {
        $sql = "UPDATE tbl_categorias SET nome_categoria = '{$nomeNovo}' WHERE id_categoria = {$id};";

        if (mysqli_query($conexao, $sql))
            mensagemSucesso("Categoria atualizada com sucesso!");
        else 
            mensagemErro("Erro ao atualizar categoria");
    }

    mensagemErro("Erro na conexão com o Banco de Dados");
    
}

function excluirCategoria($id){
    $conexao = conexaoMysql();

    if ($conexao)
    {
        $sql = "DELETE FROM tbl_categorias WHERE id_categoria = {$id};";

        if (mysqli_query($conexao, $sql))
            mensagemSucesso("Categoria excluída com sucesso!");
        else 
            mensagemErro("Erro ao excluir categoria, verifique se essa categoria esta sendo ultilizada !");
    }
    
}

?>