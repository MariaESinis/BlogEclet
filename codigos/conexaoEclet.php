<?php
$con = mysqli_connect("localhost","root","","eclet");
if(!$con){
    die("Erro de Conexão: ".mysqli_connect_error());
}   
//mysqli_connect (endereco_servidor,usuario_servidor,senha_servidor,banco_de_dados)
?>