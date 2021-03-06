<?php

    //import do arquivo de conexão com o BD
    require_once('conexao.php');
    require_once("utils/alerts.php");

    function inserirAnuncio (
        $titulo_anuncio,            
        $tipo_anuncio,              
        $valor_anuncio,          
        $cep_anuncio,               
        $rua_anuncio,             
        $numero_casa_anuncio,       
        $bairro_anuncio,       
        $numero_quartos_anuncio,   
        $numero_banheiros_anuncio,
        $imagem_anuncio,         
        $data_criacao_anuncio,      
        $disponibilidade_anuncio,
        $cidade_anuncio,
        $descricao_anuncio,
        $id_anunciante,
        $categoria_anuncio,
        $complemento_anuncio = '',
        $numero_vagas_anuncio = 0
    )
    {
        $conexao = conexaoMysql();

        if($conexao){

            $sql = "insert into tbl_anuncios
                (
                titulo_anuncio,
                tipo_anuncio, 
                valor_anuncio,
                cep_anuncio,
                rua_anuncio, 
                numero_casa_anuncio,
                complemento_anuncio,
                bairro_anuncio,
                numero_quartos_anuncio,
                numero_banheiros_anuncio,
                numero_vagas_anuncio,
                imagem_anuncio,
                data_criacao_anuncio,
                disponibilidade_anuncio,
                cidade_anuncio,
                descricao_anuncio,
                fk_anunciante,
                fk_categoria_anuncio
                )
                values('". $titulo_anuncio ."', '". $tipo_anuncio ."', '". $valor_anuncio ."',
                    '". $cep_anuncio ."', '". $rua_anuncio ."', '". $numero_casa_anuncio ."',
                    '". $complemento_anuncio ."', '". $bairro_anuncio ."',
                    '". $numero_quartos_anuncio ."','". $numero_banheiros_anuncio ."', '". $numero_vagas_anuncio ."',
                    '". $imagem_anuncio ."', '". $data_criacao_anuncio ."',
                    '". $disponibilidade_anuncio ."', '". $cidade_anuncio ."', '". $descricao_anuncio ."',
                    '". $id_anunciante ."', '". $categoria_anuncio ."')";
       
            if (mysqli_query($conexao, $sql))
                echo ("<script>
                alert('Anuncio cadastrado com sucesso!');
                window.location = 'anunciante.php';
                </script>");
            else 
                mensagemErro("Erro ao cadastrar anúncio");
               //echo(mysqli_error($conexao));
         }
     }

     function atualizarAnuncio (
        $id_anuncio,
        $id_anunciante,
        $titulo_anuncio,            
        $tipo_anuncio,              
        $valor_anuncio,          
        $cep_anuncio,               
        $rua_anuncio,             
        $numero_casa_anuncio,       
        $bairro_anuncio,       
        $numero_quartos_anuncio,  
        $numero_banheiros_anuncio, 
        $imagem_anuncio,         
        $data_criacao_anuncio,      
        $disponibilidade_anuncio,
        $cidade_anuncio,
        $descricao_anuncio,
        $categoria_anuncio,
        $complemento_anuncio = '',
        $numero_vagas_anuncio = 0
    )
    {
        $conexao = conexaoMysql();

        if($conexao){

            $sql = " UPDATE tbl_anuncios SET
            titulo_anuncio = '{$titulo_anuncio}',
            tipo_anuncio = '{$tipo_anuncio}',
            valor_anuncio = '{$valor_anuncio}',
            cep_anuncio = '{$cep_anuncio}',
            rua_anuncio = '{$rua_anuncio}',
            numero_casa_anuncio = '{$numero_casa_anuncio}',
            complemento_anuncio = '{$complemento_anuncio}',
            bairro_anuncio = '{$bairro_anuncio}',
            numero_quartos_anuncio = '{$numero_quartos_anuncio}',
            numero_banheiros_anuncio = '{$numero_banheiros_anuncio}',
            numero_vagas_anuncio = '{$numero_vagas_anuncio}',
            imagem_anuncio = '{$imagem_anuncio}',
            data_criacao_anuncio = '{$data_criacao_anuncio}',
            disponibilidade_anuncio = '{$disponibilidade_anuncio}',
            cidade_anuncio = '{$cidade_anuncio}',
            descricao_anuncio = '{$descricao_anuncio}',
            fk_categoria_anuncio = '{$categoria_anuncio}'
            WHERE id_anuncio = {$id_anuncio} AND fk_anunciante = {$id_anunciante};";
       
            if (mysqli_query($conexao, $sql))
                echo ("<script>
                alert('Anuncio atualizado com sucesso!');
                window.location = 'anunciante.php';
                </script>");
            else 
                mensagemErro("Erro ao atualizar anúncio");
         }
    }

    function listarAnuncios (){
        $conexao = conexaoMysql();

        if ($conexao)
        {
            $sql = "select * from tbl_anuncios order by data_criacao_anuncio desc;";

            $select = mysqli_query($conexao, $sql);

            return $select;
        }
        
        return array();

    }

    function listarAnunciosPorFiltro($tipo_anuncio="", $categoria_anuncio=""){
        $conexao = conexaoMysql();
        if ($conexao)
        {
            $sql = "select * from tbl_anuncios ";
            $tipo_anuncio_diferente_vazio = $tipo_anuncio != "" ;
            $categoria_anuncio_diferente_vazio = $categoria_anuncio != "" ;

            if ($tipo_anuncio_diferente_vazio || $categoria_anuncio_diferente_vazio){
                $sql .= "where ";

                if ($tipo_anuncio_diferente_vazio){
                    $sql .= "tipo_anuncio = '{$tipo_anuncio}' ";
                }

                    if ($categoria_anuncio_diferente_vazio){
                        if ($tipo_anuncio_diferente_vazio) {
                            $sql .= "AND ";
                        } 
                      
                        $sql .= "fk_categoria_anuncio = '{$categoria_anuncio}' ";
                    }
            }

            $sql .= "order by data_criacao_anuncio desc; ";

            $select = mysqli_query($conexao, $sql);

            return $select;
        }
        
        return array();
    }

    function listarAnunciosPorAnunciante ($id_anunciante){
        $conexao = conexaoMysql();

        if ($conexao)
        {
            $sql = "select * from tbl_anuncios where fk_anunciante = {$id_anunciante} order by data_criacao_anuncio desc;";

            $select = mysqli_query($conexao, $sql);

            return $select;
        }
        
        return array();

    }

    function pegarAnuncioPorId ($id){
        $conexao = conexaoMysql();

        if ($conexao)
        {
            $sql = "select * from tbl_anuncios where id_anuncio = {$id};";

            $select = mysqli_query($conexao, $sql);

            return mysqli_fetch_assoc($select);
        }
        
        return false;

    }
    
    function listarAnunciosPorCategoria ($id_categoria){
        $conexao = conexaoMysql();

        if ($conexao)
        {
            $sql = "select * from tbl_anuncios where categoria_anuncio = id_categoria order by data_criacao_anuncio desc;";

            $select = mysqli_query($conexao, $sql);

            return $select;
        }
        
        return array();

    }

    function excluirAnuncio($id_anunciante, $id_anuncio){
        $conexao = conexaoMysql();

        if ($conexao)
        {
            $sql = "DELETE FROM tbl_anuncios WHERE id_anuncio = {$id_anuncio} AND fk_anunciante = {$id_anunciante};";

            if (mysqli_query($conexao, $sql))
                echo ("<script>
                alert('Anuncio excluido com sucesso!');
                window.location = 'anunciante.php';
                </script>");
            else 
                mensagemErro("Erro ao excluir anúncio");
        }
        
    }
?>