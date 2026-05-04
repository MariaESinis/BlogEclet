<?php
session_start();
if(!(isset($_SESSION['logado']))){
    $_SESSION['logado']=0;
}
?>
<!DOCTYPE html>

<html>

 

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Éclet</title>
    <link rel="stylesheet" type="text/css" href="Style.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="Glider.js-master/">

    <style>

        @import url(https://fonts.googleapis.com/css2?family=Tenor+Sans&display=swap);

       

        .material-symbols-outlined {

            font-variation-settings:

                'FILL' 0,

                'wght' 400,

                'GRAD' 0,

                'opsz' 24;

        }

        * {box-sizing: border-box}

            body {margin:0}

            .mySlides {display: none}

            img {vertical-align: sub;}

            .slideshow-container {

              max-width: 1000px;

              position: relative;

              margin: auto;

            }

            .prev, .next {

              cursor: pointer;

              position: absolute;

              top: 50%;

              width: auto;

              padding: 16px;

              margin-top: -22px;

              color: white;

              font-weight: bold;

              font-size: 22px;

              transition: 0.6s ease;

              border-radius: 0 3px 3px 0;

              user-select: none;

            }

            .next {

            margin-right: 0px;

              right: 0;

              border-radius: 3px 0 0 3px;

            }

            .prev{

                margin-left: -78em;

            }

            .prev:hover, .next:hover {

              background-color: rgb(22, 20, 20);

              opacity: 0.5;

              color: #717171;

              margin-right: 30em;

            }

            .dot {

              cursor: pointer;

              height: 10px;

              width: 10px;

              margin: 0 2px;

              background-color: #bbb;

              border-radius: 50%;

              display: inline-block;

              transition: background-color 0.6s ease;

            }

            .active, .dot:hover {

              background-color: #717171;

            }

            .fade {

              animation-name: fade;

              animation-duration: 1.5s;

            }

            @keyframes fade {

              from {opacity: .4}

              to {opacity: 1}

            }

            @media only screen and (max-width: 300px) {

              .prev, .next,.text {font-size: 11px}

            }

    </style>

</head>

 

<body>


    <div class="header">

        <p class="texto_header">Consulte nosso portal de notícias para ficar dentro sobre tudo no mundo da moda! | <a href="#noticias" class="ancora_header"> Clique aqui</a></p>

    </div>

   

    <div class="menu">
        <div class="login" style="margin-left:27%">
            <a href="AreaUser.php" class="ancora_login" target="_self">
                <span class="material-symbols-outlined">
                    person
                </span>
                <p class="texto_login">Perfil</p>
            </a>
        </div>
        <a href="Inicial_logado.php"><img src="Imagens/logo-s.fundo.png" style="margin-left:33%" class="imagem_logo"></a>
        <div class="deslogar" style="margin-left:1%">
            <a href="deslogarE.php" class="ancora_login" target="_self">
                <span class="material-symbols-outlined" title="LogOut">
                    logout
                </span>
            </a>
        </div>
    </div>
            
    <div class="linha-fina"></div>
    <div class="menu2">

        <div class="configurar_categorias">

            <div class="dropdown">
                <button class="dropbtn">ESTILOS</button>
                <div class="dropdown-content">
                    <a href="Clássico_logaddo.html" style="color: rgb(160, 156, 156); font-family:nunito; font-size:85%">CLÁSSICO</a>
                    <a href="Criativo_logado.html" style="color: rgb(160, 156, 156); font-family:nunito; font-size:85%">CRIATIVO</a>
                    <a href="Elegante_logado.html" style="color: rgb(160, 156, 156); font-family:nunito; font-size:85%">ELEGANTE</a>
                    <a href="Esportivo_logado.html" style="color: rgb(160, 156, 156); font-family:nunito; font-size:85%">ESPORTIVO</a>
                    <a href="Dramático_logado.html" style="color: rgb(160, 156, 156); font-family:nunito; font-size:85%" >MODERNO</a>
                    <a href="Romântico_logado.html" style="color: rgb(160, 156, 156); font-family:nunito; font-size:85%">ROMÂNTICO</a>
                    <a href="Sensual_logado.html" style="color: rgb(160, 156, 156); font-family:nunito; font-size:85%">SENSUAL</a>
                </div>
            </div>

            <a href="Tecidos_logado.html" class="Tecidos"  target="_self"> TECIDOS </a>

            <a href="Planos_logado.html" class="Planos"  target="_self"> PLANOS </a>

            <a href="Sustentabilidade_logado.html" class="Susten" target="_self"> SUSTENTABILIDADE </a>

            <a href="SobreNós_logado.html" class="SobNos"  target="_self"> SOBRE NÓS</a>

           

        </div>

    </div>

    <div class="container"><!--Div do carousel inteiro-->

 

      <button class="arrow-left control" aria-label="next">❮</button><!--Seta da esquerda-->

 

      <button class="arrow-right control" aria-label="previous">❯</button><!--Seta da direita-->

 

      <div class="galerry-wrapper"><!--Div da barra de rolagem-->

 

          <div class="gallery"><!--Div das imagens-->

 

              <img src="Imagens/carrossel/Img1.png"  class="item current-item">

 

              <img src="Imagens/carrossel/Design sem nome (15)a.png"  class="item">

 

              <img src="Imagens/carrossel/img3.png" class="item">

 

             

 

             

 

          </div>

 

      </div>

 

  </div>

 

  <script>

 

      const controls = document.querySelectorAll('.control');//Traz as duas arrows de uma vez

 

      let currentItem = 0;//Vê quem é o current Item

 

      const items = document.querySelectorAll('.item') //puxa os itens(pode ser items ali ó)

 

      const maxItems = items.length; //Pega a quantidade de items

 

      controls.forEach(control => {

 

          control.addEventListener('click',() =>{ //Nessa linha adiciona um evento de click

 

          const isLeft = control.classList.contains('arrow-left');//Nessa linha ele diz: click esquerda = true

 

          if(isLeft){

 

              currentItem -= 1;

 

          }else{

 

              currentItem += 1;

 

          }

 

          if(currentItem >= maxItems){//If para ele fazer um carousel infinito e voltar para a primeira imagem

 

              currentItem = 0;

 

          }

 

          if(currentItem < 0){//If para ele fazer um carousel infinito e voltar para a última imagem

 

              currentItem = maxItems - 1; //Coloca -1 por conta que começa no 0

 

          }

 

          console.log("control",isLeft, currentItem);

 

          items.forEach(item => item.classList.remove('current-item')); //Remove a opacidade

 

 

 

          items[currentItem].scrollIntoView({

 

              inline: "center",//tenta centralizar o elemneto quando clica na seta

 

              behavior: "smooth",//tenta centralizar de um jeito smooth

 

          });

 

          items[currentItem].classList.add("current-item");//Muda o current item

 

      });

 

      });

 

  </script>

<div class="bloco-categorias">

    <div class="categorias">

        <div class="blococirculo">

            <div class="circulo" style="margin-left: 4%;">

                <a href="" class="texto_categorias">

                    <img src="Imagens/estilo-categ/classico.jpg">

                    <div style="margin-top: 4%;">Clássico</div>

                </a>

            </div>

        </div>

        <div class="blococirculo">

            <div class="circulo" style="margin-left: 4%;">

                <a href="" class="texto_categorias">

                    <img src="Imagens/estilo-categ/creative.jpg">

                    <div style="margin-top: 4%;">Criativo</div>

                </a>

            </div>

        </div>

        <div class="blococirculo">

            <div class="circulo" style="margin-left: 4%;">

                <a href="" class="texto_categorias">

                    <img src="Imagens/estilo-categ/7b35af8bc0710b1b6047556ce786f54f.jpg">

                    <div style="margin-top: 4%;">Elegante</div>

                </a>

            </div>

        </div>

        <div class="blococirculo">

            <div class="circulo" style="margin-left: 4%;">

                <a href="" class="texto_categorias">

                    <img src="Imagens/estilo-categ/sport.jpg">

                    <div style="margin-top: 4%;">Esportivo</div>

                </a>

            </div>

        </div>

        <div class="blococirculo">

            <div class="circulo" style="margin-left: 4%;">

                <a href="" class="texto_categorias">

                    <img src="Imagens/estilo-categ/modern.jpg">

                    <div style="margin-top: 4%;">Moderno</div>

                </a>

            </div>

        </div>

        <div class="blococirculo">

            <div class="circulo" style="margin-left: 4%;">

                <a href="" class="texto_categorias">

                    <img src="Imagens/estilo-categ/romantico.jpg">

                    <div style="margin-top: 4%;">Romântico</div>

                </a>

            </div>

        </div>

        <div class="blococirculo">

            <div class="circulo" style="margin-left: 4%;">

                <a href="" class="texto_categorias">

                    <img src="Imagens/estilo-categ/sensual.jpg">

                    <div style="margin-top: 4%;">Sensual</div>

                </a>

            </div>

        </div>
    </div>

</div>

    <div class="noticias" id="noticias">

        <h1 class="tit-noticias"> Notícias do mundo da moda</h1>

        <div class="noticias-bloco" id="noticias">

            <div class="bloco1">

                <a href="" class="texto_noticias">

                    <img src="Imagens/ParisFashionWeek/th.jpg" alt="">

                    <p>PARIS FASHION WEEK 2023: OS DESTAQUES E TENDÊNCIA DE MODA</p>

                </a>

            </div>

            <div class="bloco2">

                <a href="" class="texto_noticias">

                    <img src="Imagens/CoresVibrantes/Cores-Vibrantes-e-uma-das-Principais-tendencias-da-moda-verao-2024-1120x630.jpg" alt="">

                    <p>CORES VIBRANTES SERÁ TENDENCIA EM 2024</p>

                </a>

            </div>

            <div class="bloco3">

                <a href="">

                    <img src="Imagens/verde_teste.png" alt="">

                </a>

            </div>

            <a href="">

                <p class="texto">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>

            </a>

            <div class="bloco4">

                <a href="" class="texto_noticias">

                    <img src="Imagens/rosa_teste.jpeg" alt="">

                    <p lass="texto_noticias">Texto de teste</p>

                </a>

            </div>

            <div class="bloco5">

                <a href="" class="texto_noticias">

                    <img src="Imagens/rosa_teste.jpeg" alt="">

                    <p lass="texto_noticias">Texto de teste</p>

                </a>

            </div>

            <div class="bloco6">

                <a href="" class="texto_noticias">

                    <img src="Imagens/rosa_teste.jpeg" alt="">

                    <p>Texto de teste</p>

                </a>

            </div>

            <div class="bloco7">

                <a href="" class="texto_noticias">

                    <img src="Imagens/rosa_teste.jpeg" alt="">

                    <p>Texto de teste</p>

                </a>

            </div>

            <div class="bloco8">

                <a href="" class="texto_noticias">

                    <img src="Imagens/rosa_teste.jpeg" alt="">

                    <p>Texto de teste</p>

                </a>

            </div>

            <div class="bloco9">

                <a href="" class="texto_noticias">

                    <img src="Imagens/rosa_teste.jpeg" alt="">

                    <p>Texto de teste</p>

                </a>

            </div>

        </div>

    </div>

        <footer>

            <div>Produção por: Ana Clara Romero - Gabriel Henrique Matias - Maria Eduarda Sinis - 2ºB 2023</div>

            <div class="footer-texto-2">Esse site foi criado apenas para fins educacionais, qualquer compra não será efetuada, e dados salvos não seram utilizados</div>

        </footer>

 

</body>

 

</html>