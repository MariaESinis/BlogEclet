<?php
session_start();
include('conexaoEclet.php');
// Verifique se o usuário está logado (você pode personalizar essa verificação com base em suas configurações)
if (isset($_SESSION['logado']) && $_SESSION['logado'] == 1) {
    
    unset($_SESSION['logado']);
    unset($_SESSION['email']);


    session_destroy();
    echo "<script>window.location.href='Inicial.html'</script>";
    exit(); 
} 
?>