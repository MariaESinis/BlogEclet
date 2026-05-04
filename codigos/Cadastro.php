<?php
@include('conexaoEclet.php');
if (!empty($_POST)) {
    $cpf = $_POST['CPF'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $datanasc = $_POST['DataNasc'];
    $senhaCripto = base64_encode($senha);
    $query = "INSERT INTO cadastro(cpf, nome, email, senha, nascimento) VALUES ('$cpf', '$nome', '$email', '$senhaCripto', '$datanasc')";
    if (mysqli_query($con, $query)) {
        echo  "<script>alert('Cadastro realizado com sucesso')</script>";
        
        echo "<script>window.location.href='Login.html'</script>";
        
    } else {
        $mensagem = 'Erro na inserção de dados: ' . mysqli_error($con);
    }
}


    // Exibir a mensagem de aviso, se existir
    if (isset($mensagem)) {
        echo "<script>alert('$mensagem');</script>";
    }
    ?>
</div>
</body>
</html>