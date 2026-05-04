<?php
session_start();
$_SESSION['logado']=0;
$_SESSION['cadastro']="";

session_destroy();
echo "<script>window.location.href='Inicial.html'</script>";
?>