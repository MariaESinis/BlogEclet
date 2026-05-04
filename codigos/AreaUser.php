<?php
session_start();
include('conexaoEclet.php');

if (isset($_SESSION['logado']) && $_SESSION['logado'] == 1) {

    $cpf = $_SESSION['cpf'];

    $busca = mysqli_query($con, "SELECT * FROM cadastro WHERE CPF = '$cpf'");


    if (mysqli_num_rows($busca) > 0) {
        $resultado = mysqli_fetch_array($busca);
    } else {
        echo "<script>window.location.href=('Inicial.php')</script>";
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Éclet</title>
    <link rel="stylesheet" type="text/css" href="Style.AreaUser.css" />
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <style>
       
    .material-symbols-outlined {
        font-variation-settings:
        'FILL' 0,
        'wght' 400,
        'GRAD' 0,
        'opsz' 24
        }
    </style>
</head>

<body>
    <div class="header">

        <p class="texto_header">Consulte nosso portal de notícias para ficar dentro sobre tudo no mundo da moda! | <a href="#noticias" class="ancora_header"> Clique aqui</a></p>

    </div>



    <div class="menu">
        <a href="Inicial_logado.php"><img src="Imagens/logo-s.fundo.png" class="imagem_logo"></a>
        
    </div>
    
    
    <div class="linha-fina"></div>

    <div class="menu2">

        <div class="configurar_categorias">
        <div class="dropdown">
                <button class="dropbtn">ESTILOS</button>
                <div class="dropdown-content">
                    <a href="Clássico_logado.html" style="color: rgb(160, 156, 156); font-family:nunito; font-size:85%">CLÁSSICO</a>
                    <a href="Criativo_logado.html" style="color: rgb(160, 156, 156); font-family:nunito; font-size:85%">CRIATIVO</a>
                    <a href="Elegante_logado.html" style="color: rgb(160, 156, 156); font-family:nunito; font-size:85%">ELEGANTE</a>
                    <a href="Esportivo_logado.html" style="color: rgb(160, 156, 156); font-family:nunito; font-size:85%">ESPORTIVO</a>
                    <a href="Dramático_logado.html" style="color: rgb(160, 156, 156); font-family:nunito; font-size:85%" >MODERNO</a>
                    <a href="Romântico_logado.html" style="color: rgb(160, 156, 156); font-family:nunito; font-size:85%">ROMÂNTICO</a>
                    <a href="Sensual_logado.html" style="color: rgb(160, 156, 156); font-family:nunito; font-size:85%">SENSUAL</a>
                </div>
            </div>

            <a href="Tecidos_logado.html" class="Tecidos" target="_self"> TECIDOS </a>

            <a href="Planos_logado.html" class="Planos" target="_self"> PLANOS </a>

            <a href="Sustentabilidade_logado.html" class="Susten" target="_self"> SUSTENTABILIDADE </a>

            <a href="SobreNós_logado.html" class="SobNos" target="_self"> SOBRE NÓS</a>



        </div>

    </div>
    <form action="#" method="POST">

        <div class="info_pessoal">
            <h1 class="Titl"> Dados pessoais</h1>
            <label class="categoria"> Nome: </label> <input type="text" name="Nome" style="margin-left:10.2%;margin-top:3%;" value=<?php echo $resultado[1]; ?>> <br>
            <label class="categoria"> Email: </label><input type="text" name="Email" style="margin-left:10.8%;margin-top:2.5%;" value=<?php echo $resultado[2]; ?>> <br>
            <label class="categoria"> CPF: </label><input type="text" name="cpf" style="margin-left:12.7%;margin-top:2.5%;" value=<?php echo $resultado[0]; ?> disabled> <br>
            <label class="categoria"> Telefone: </label><input type="text" name="Tel" style="margin-left:6.8%;margin-top:2.5%;" value=<?php echo $resultado[4]; ?>> <br>
            <label class="categoria"> Data de Nasc: </label><input type="text" name="DataNasc" style="margin-left:0.5%;margin-top:2.5%;" value=<?php echo $resultado[7]; ?>> <br>
        </div>

        <div class="info_compra">
            <h1 class="Titl2"> Informações de compra </h1>
            <label class="categoria1"> CEP: </label><input type="text"  name="CEP" style="margin-left:15%; margin-top:3%;" value=<?php echo $resultado[5]; ?>><br>
            <label class="categoria1"> Complemento: </label> <input type="text" name="Complemento" style="margin-left:2%;margin-top:2.5%;" value=<?php echo $resultado[6]; ?>>
        </div>
        <div class="linha4"></div>
        <div class="info_pag">
            <h1 class="Titl2"> Informações de pagamento </h1>
            <label class="categoria1"> Número de cartão: </label><input type="text" name="info_pag" style="margin-top: 3%;" value=<?php echo $resultado[8]; ?>></p>
        </div>
        <input type="submit" value="Salvar Edição" class="Salvar_Edicao">
        
    </form>

    <footer>
        <div>Produção por: Ana Clara Romero - Gabriel Henrique Matias - Maria Eduarda Sinis - 2ºB 2023</div>
        <div class="footer-texto-2">Esse site foi criado apenas para fins educacionais, qualquer compra não será efetuada, e dados salvos não seram utilizados</div>
    </footer>


</body>

</html>
<?php
if (!empty($_POST)) {
    $cpf = $_SESSION['cpf'];
    $nome = $_POST['Nome'];
    $email = $_POST['Email'];
    $telefone = $_POST['Tel'];
    $datanasc = $_POST['DataNasc'];
    $cep = $_POST['CEP'];
    $complemento = $_POST['Complemento'];
    $info_pag = $_POST['info_pag'];

    if ($cep == "") {
        $cep = "Preencha este campo";
    } else {
        mysqli_query($con, "UPDATE cadastro set cep='$cep'");
    };

    if ($complemento == "") {
        $complemento = "Preencha este campo";
    } else {
        mysqli_query($con, "UPDATE cadastro set complemento='$complemento'");
    };

    if ($info_pag == "") {
        $info_pag = "Preencha este campo";
    } else {
        mysqli_query($con, "UPDATE cadastro set pagamento='$info_pag'");
    };

    mysqli_query($con, "UPDATE cadastro set nome = '$nome', email = '$email', telefone = '$telefone', nascimento = ' $datanasc' WHERE cpf = '$cpf'");
    echo "<script>alert('Dados alterados com sucesso')</script>";
    echo "<script>window.location.href=('AreaUser.php')</script>";
};
?>