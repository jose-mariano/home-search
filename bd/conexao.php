<?php 
/*********************************************************************
*   Objetivo: Arquivo para realizar a conexão com o BD Mysql
*   Data: 17/11/2021
*   Autor: Larissa
**********************************************************************/

function conexaoMysql()
{
    $host = (string) "localhost";
    
    $user = (string) "root";

    $password = (string) "admin";

    $database = (string) "homesearch";
    
    $conexao = (string) null;
    
    if ($conexao = mysqli_connect($host, $user, $password, $database))
    //retorna a conexão se ela for estabelecida com sucesso
        return $conexao;
    else 
        return false;
    
}

?>