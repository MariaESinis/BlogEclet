<?php
// SESSION
session_start();
//session_start sempre na primeira linha do código
include('conexaoEclet.php');
if(!empty($_POST)){
 $email = $_POST['email'];
 $senha = $_POST['senha'];   
 $senhaCripto = base64_encode($senha);
 $busca = mysqli_query($con, "SELECT * FROM cadastro WHERE email = '$email' AND senha = '$senhaCripto'");
 $contagem = mysqli_num_rows($busca);
 if($contagem<1){
    // não acertou email e/ou senha
    $_SESSION['logado']=0;
  
    echo  "<script>alert('Confira se as informações estão corretas')</script>";
    echo "<script>window.location.href='Login.html'</script>";
 }else{
    //login e senha corretos :)
    echo "olá";
    $_SESSION['logado']=1;
    $resultado = mysqli_fetch_array($busca);
    $_SESSION['cpf'] = $resultado[0];
    

    $_SESSION['cadastro']=$resultado[1];
    echo "<script>window.location.href='Inicial_logado.php'</script>";
 }
}
?>