<?php
    include('conexaoEclet.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Éclet</title>
    <link rel="stylesheet" type="text/css" href="Style.Planos.css" />
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
        <p class="texto_header">Consulte nosso portal de notícias para ficar dentro sobre tudo no mundo da moda! | <a href="" class="ancora_header"> Clique aqui</a></p>
    </div>
    
    <div class="menu">
        <div class="login">
            <a href="Login.html" class="ancora_login" target="_self">
                <span class="material-symbols-outlined">
                    person
                </span>
                <p class="texto_login">Olá, faça seu login ou cadastre-se.</p>
            </a>
        </div>
        <a href="Inicial.html"><img src="Imagens/logo-s.fundo.png" class="imagem_logo"></a>
        
        
    </div>
    <div class="linha-fina"></div>
    <div class="menu2">
        <div class="configurar_categorias">
            <div class="dropdown">
                <button class="dropbtn">ESTILOS</button>
                    <div class="dropdown-content">
                        <a href="">Estilo 1</a>
                        <a href="">Estilo 2</a>
                        <a href="">Estilo 3</a>
                    </div>
            </div>
            <a href="Tecidos.html" class="Tecidos"  target="_self"> TECIDOS </a>
            <a href="Planos.html" class="Planos"  target="_self"> PLANOS </a>
            <a href="Sustentabilidade.html" class="Susten" target="_self"> SUSTENTABILIDADE </a>
            <a href="SobreNós.html" class="SobNos"  target="_self"> SOBRE NÓS</a>
        </div>
    </div>
            <div class="textosobreplanos">
                <p>Confira nossos planos mensais de roupas e acessórios feitos de materiais reaproveitados</p>
            </div>
            <div class="campoplanos">
                <div class="plano1">
                    <br>
                    <h2 style="font-size: 120%;">PLANO GRATUITO</h2>
                    <br>
                    <p>Plano para você receber no seu email dicas, notícias e tendências sobre o mundo da moda</p>
                    <button type="" class="botaoplanos1">ASSINE</button>
                    
                </div>
                <div class="plano2">
                    <br>
                    <h2 style="font-size: 120%;">PLANO 1</h2>
                    <br>
                    <p>Receba no seu email dicas, notícias e tendências sobre o mundo da moda além de acessórios e peças de roupa reaproveitados</p>
                    <button type="button" class="botaoplanos2">ASSINE</button>
                </div>
                <div class="plano3">
                    <br>
                    <h2 style="font-size: 120%;">PLANO 2</h2>
                    <br>
                    <p>Plano para você receber no seu email dicas, notícias e tendências sobre o mundo da moda e mais acessórios e roupas que o plano anterior</p>
                    <?php
                        /*echo "<a href='Finalizar_compra.php?categoria=".$resultado[0]."'>ASSINAR</a>";*/
                        echo "<a href='Finalizar_compra.php?categoria='Plano Pago - Premium''><button type='button' class='botaoplanos3' name='categoria' >ASSINE</button></a>";
                    ?>
                </div>
            </div>
            <div class="bloco-em-branco"> </div>
            <footer>
                <div>Produção por: Ana Clara Romero - Gabriel Henrique Matias - Maria Eduarda Sinis - 2ºB 2023</div>
                <div class="footer-texto-2">Esse site foi criado apenas para fins educacionais, qualquer compra não será efetuada, e dados salvos não seram utilizados</div>
            </footer> 
    </body>
</html>