<?php
@include('conexaoEclet.php');
if(!empty($_POST)){
$cpf = $_POST['cpf'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$telefone = $_POST['telefone'];
$cep = $_POST['cep'];
$complemento = $_POST['complemento'];
$senhaCripto = base64_encode($senha);
mysqli_query($con,"INSERT INTO cadastro(cpf,nome,email,senha,telefone,cep,complemento)VALUES ('$cpf','$nome','$email','$senhaCripto','$telefone','$cep','$complemento')");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <style>
        .material-symbols-outlined {
          font-variation-settings:
          'FILL' 0,
          'wght' 400,
          'GRAD' 0,
          'opsz' 48
        }
        .botao{
            background-color: transparent;
            border:none;
            cursor:pointer;
            position: relative;
            top:8px;
            
        }
        </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <form method="POST" action="#">
        Nome:<input type="text" id="nome" name="nome" required/><br>
        Tel:<input type="text" id="telefone" name="telefone" required/><br>
        CPF:<input type="text" id="cpf" name="cpf" required/><br>
        E-mail:<input type="text" id="email" name="email" required/><br>
        CEP:<input type="text" id="cep" name="cep" required/><br>
        Complementos:<input type="text" id="complemento" name="complemento" required/><br>
        Senha:<input type="password" id="senha" onkeyup="validarSenha()" name="senha">
        <button type="button" class="botao" onmouseover="verSenha()" onmouseout="esconderSenha()">
            <span class="material-symbols-outlined">
                visibility
                </span>
        </button><br>
        <input type="submit" value="Gravar"/>
    </form>
    <script>
        // escopo local --> vale somente dentro da function
       // escopo global --> vale em qualquer lugar do código
        function verSenha(){
            var senha = document.getElementById('senha');
            senha.type="text";
        }
        function esconderSenha(){
            var senha = document.getElementById('senha');
            senha.type='password';
        }
        function validarSenha(){

            var btn = document.getElementById ('btn');
            var senha = document.getElementById('senha').value;
            if (maiuscula.test(senha)){
        }
    }
    </script>
</body>
</html>