<?php
session_start();
include('conexaoEclet.php');
if(!(isset($_SESSION['logado']))){
    $_SESSION['logado']=0;
    echo "<script>window.location.href=('Login.html')</script>";
    
}else{
    if (isset($_SESSION['logado']) && $_SESSION['logado'] == 1) {
        $cpf = $_SESSION['cpf'];
        $busca = mysqli_query($con, "SELECT * FROM cadastro WHERE CPF = '$cpf'");
        $busca_assinatura = mysqli_query($con, "SELECT * FROM assinaturas WHERE CPF = '$cpf'");
    
        if (mysqli_num_rows($busca) > 0) {
            $resultado = mysqli_fetch_array($busca);
        }
        $categoria = $_GET['categoria'];
        $busca_produto=mysqli_query($con, "SELECT * FROM produto WHERE categoria = '$categoria'");

        if(!empty($_POST)){
            $nome = $_POST['nome'];
            $cpf = $_SESSION['cpf'];
            $telefone = $_POST['telefone'];
            $email = $_POST['email'];
            $cep = $_POST['CEP'];
            $complemento = $_POST['complemento'];
            $numero_cartao = $_POST['cartao'];
            $plano = $_POST['planos'];

            if($telefone == "") {
                $telefone = "Preencha este campo";
            }else{
                mysqli_query($con, "UPDATE cadastro set telefone='$telefone' WHERE CPF = '$cpf'");
            };
            if ($cep == "") {
                $cep = "Preencha este campo";
            } else {
                mysqli_query($con, "UPDATE cadastro set cep='$cep' WHERE CPF = '$cpf'");
            };
        
            if ($complemento == "") {
                $complemento = "Preencha este campo";
            } else {
                mysqli_query($con, "UPDATE cadastro set complemento='$complemento' WHERE CPF = '$cpf'");
            };
        
            if ($numero_cartao == "") {
                $numero_cartao = "Preencha este campo";
            } else {
                mysqli_query($con, "UPDATE cadastro set pagamento='$numero_cartao' WHERE CPF = '$cpf'");
            };
            
            
            //$cadastro = mysqli_query($con,"UPDATE cadastro set telefone='$telefone', CEP = '$cep', complemento = '$complemento', pagamento = '$numero_cartao' where CPF = '$cpf'");
            if (mysqli_num_rows($busca_assinatura) > 0) {
                $resultado = mysqli_fetch_array($busca_assinatura);
                mysqli_query($con,"UPDATE assinaturas set pagamento = '$numero_cartao', categoria = '$plano' WHERE CPF = '$cpf'");
            }else{
                $resultado = mysqli_fetch_array($busca_assinatura);
                mysqli_query($con,"INSERT INTO assinaturas(nome, CPF, telefone, email, CEP, complemento, pagamento, categoria) VALUES ('$nome', '$cpf', '$telefone', '$email', '$cep', '$complemento', '$numero_cartao', '$plano')");
            };
            
        }
    }
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Finalizar</title>
        <link rel="stylesheet" type="text/css" href="Style.Compra.css" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            @import url(https://fonts.googleapis.com/css2?family=Tenor+Sans&display=swap);
            .material-symbols-outlined {
                font-variation-settings:
                'FILL' 0,
                'wght' 400,
                'GRAD' 0,
                'opsz' 24;

            }
        </style>
    </head>
    <body>
    <div class="header">
        <p class="texto_header">Consulte nosso portal de notícias para ficar dentro sobre tudo no mundo da moda! | <a href="#noticias" class="ancora_header"> Clique aqui</a></p>
    </div>
    
    <div class="menu">
        <div class="login" style="margin-left: 30%; margin-top:-3%;">
            <a href="AreaUser.php" class="ancora_login" target="_self">
                <span class="material-symbols-outlined">
                    person
                </span>
                <p class="texto_login">Perfil</p>
            </a>
        </div>
            <a href="Inicial_logado.php" style="margin-top:-6%;margin-left:5%;"><img src="Imagens/logo-s.fundo.png" class="imagem_logo" style="margin-left: 33%;"></a>
            <div class="deslogar" style="margin-left:1%">
            </div>
    </div>
       

    </div>

    <div class="linha-fina" style="margin-top:-4%;"></div>

    <div class="menu2">

        <div class="configurar_categorias">

            <div class="dropdown">
                <button class="dropbtn">ESTILOS</button>
                <div class="dropdown-content">
                    <a href="Clássico_logaddo.html" style="color: rgb(160, 156, 156); font-family:nunito; font-size:85%">CLÁSSICO</a>
                    <a href="Criativo_logado.html" style="color: rgb(160, 156, 156); font-family:nunito; font-size:85%">CRIATIVO</a>
                    <a href="Dramático_logado.html" style="color: rgb(160, 156, 156); font-family:nunito; font-size:85%" >DRAMÁTICO</a>
                    <a href="Elegante_logado.html" style="color: rgb(160, 156, 156); font-family:nunito; font-size:85%">ELEGANTE</a>
                    <a href="Esportivo_logado.html" style="color: rgb(160, 156, 156); font-family:nunito; font-size:85%">ESPORTIVO</a>
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
        <form action="#" method="POST" class="form">
            <div class="blocobranco"></div>
            <label for="nome" class="label-text"> Nome: </label>
            <input type="text" placeholder="Nome completo" name="nome" id="nome" required style="margin-left: 1.5%; width: 54%;height:6%;"/>
            <br>
            <label for="cpf" class="label-text">  CPF: </label>
            <input type="text" name="cpf" id="cpf" size="20" style="margin-left: 1.5%;width:56%;height:6%;" value="<?php echo $resultado[0];?>" disabled>
            <br>
            <label for="tel" class="label-text"> Telefone: </label>
            <input type="tel" placeholder="+XX(XX)XXXXXXXXX" name="telefone" id="tel" size="20" required style="margin-left: 1.5%; width: 51%;height:6%;"/>
            <br>
            <label for="email" class="label-text"> Email: </label>
            <input type="email" placeholder="Email" name="email" id="email" required style="margin-left: 1.5%; width: 54%;height:6%;"/>
            <br>
            <label for="CEP" class="label-text"> CEP: </label>
            <input type="text" placeholder="CEP" name="CEP" id="cep" required style="margin-left: 1.5%; width: 55.5%;height:6%;"/>
            <br>
            <label for="complemento" class="label-text"> Complemento: </label>
            <input type="text" placeholder="Complemento" name="complemento" id="complemento" required style="margin-left: 1.5%; width: 44.9%;height:6%;"/>
            <br>
            <label for="cartao" class="label-text"> Número do Cartão: </label>
            <input type="password" placeholder="Número do cartão" name="cartao" id="cartao" required style="margin-left: 1.5%; width: 40%;height:6%;"/>
            <br>
            <label for="plano" class="label-text"> Categoria do Plano: </label>
            <select id="planos" name="planos" class="option" style="margin-left: 1%;width: 39.7%; 'Nunito', sans-serif;margin-top:1%;height:6%;" >
                <option value="<?php $categoria;?>"><?php echo $categoria; ?></option>
                <option value="Plano Gratuito - R$00,00" style="font-family:  'Nunito', sans-serif;">Plano Gratuito - R$00,00</option>
                <option value="Plano Pago - Básico - R$90,00"  style="font-family:  'Nunito', sans-serif;">Plano Pago - Básico - R$90,00</option>
                <option value="Plano Pago - Premium - R$160,00"  style="font-family:  'Nunito', sans-serif;">Plano Pago - Premium - R$160,00</option>
            </select>
            <input type="submit" class="btn" value="Finalizar Compra">
        </form>
        <footer>

            <div>Produção por: Ana Clara Romero - Gabriel Henrique Matias - Maria Eduarda Sinis - 2ºB 2023</div>

            <div class="footer-texto-2">Esse site foi criado apenas para fins educacionais, qualquer compra não será efetuada, e dados salvos não seram utilizados</div>

        </footer>
    </body>
</html>