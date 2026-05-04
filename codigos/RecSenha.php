<?php
include('conexaoEclet.php');
if (!empty($_POST)) {
  $CPF = $_POST['CPF'];
  $senhaNova = $_POST['SenhaNova'];

  // Verifica se o CPF existe na base de dados
  $buscaCPF = mysqli_query($con, "SELECT CPF FROM cadastro WHERE CPF = '$CPF'");
  $busca = mysqli_fetch_array($buscaCPF);
  if ($busca['CPF'] == $CPF) {
    // Atualiza a senha criptografada na base de dados
    $senhaCripto = base64_encode($senhaNova);
    mysqli_query($con, "UPDATE cadastro SET senha = '$senhaCripto' WHERE cpf = '$busca[CPF]'");
    echo "<script>alert('Senha redefinida com sucesso')</script>";
  } else {
    echo "<script>alert('CPF não encontrado')</script>";
  }
}
?>
<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    @import url(https://fonts.googleapis.com/css2?family=Tenor+Sans&display=swap);
    @import url(https://fonts.googleapis.com/css2?family=Questrial&display=swap);
    @import url(https://fonts.googleapis.com/css2?family=Nunito:wght@100;200;300;400;500;600;800;900&display=swap);
    @import url(https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;600;800;900&display=swap);

    body {
      background: #c2e4c4;
    }

    .content {
      width: 450px;
      height: auto;
      margin: 0 auto;
      padding: 30px;
    }

    .nav-pills {
      width: 450px;
    }

    .nav-item {
      width: 50%;
    }

    .nav-pills .nav-link {
      font-weight: bold;
      padding-top: 13px;
      text-align: center;
      background: #343436;
      color: #fff;
      border-radius: 30px;
      height: 100px;
    }

    .nav-pills .nav-link.active {
      background: #fff;
      color: #000;
    }

    .tab-content {
      position: absolute;
      width: 450px;
      height: 21em;
      margin-top: 13%;
      background: #fff;
      color: #000;
      border-radius: 30px;
      z-index: 1000;
      box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.4);
      padding: 30px;
      margin-bottom: 50px;
    }

    .tab-content button {
      border-radius: 15px;
      width: 100px;
      margin: 0 auto;
      float: right;
      margin-top: 7%;
    }

    .bloco1 {
      margin-top: 2%;
    }

    .bloco2 {
      margin-top: 4%;
    }

    .form-control.is-invalid2,
    .was-validated .form-control:invalid {
      border-color: #bcbcbc;
      padding-right: calc(1.5em + 0.75rem);
      background-image: url(data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23dc3545' viewBox='0 0 12 12'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e);
      background-repeat: no-repeat;
      background-position: right calc(0.375em + 0.1875rem) center;
      background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
    }

    .btnX {
      color: black;
      font-size: 190%;
      font-family: 'Questrial', sans-serif;
      position: relative;
      float: right;
      margin-right: 1%;
      margin-top: 0.5%;
      text-decoration: none;
    }

    .btnX:hover {
      color: #87a384;
      text-decoration: none;
    }

    .RecSenha {
      font-family: 'Roboto', sans-serif;
      font-size: 1.2rem;
      font-weight: 400;
      line-height: 1.5;
    }

    #requisitosSenha {
      position: absolute;
      background: rgb(245, 255, 247);
      padding: 8px;
      border: 1px solid #769476;
      border-radius: 5px;
      font-size: 12px;
      width: 150px;
      font-family: 'Nunito', sans-serif;
      display: block;
      visibility: hidden;
    }
  </style>
</head>

<body>
  <a href="Inicial.html" class="btnX"> X</a>
  <div class="content">
    <div class="tab-content">
      <div id="login" class="container tab-pane active">
        <form method="post">
          <label class="RecSenha"> Recuperar senha </label>
          <div class="bloco1">
            <label for="TextoCpf">CPF*</label>
            <input type="CPF" class="form-control is-invalid2" id="CPF" name="CPF" placeholder="CPF">
            <small id="emailHelp" class="form-text text-muted">Não compartilharemos nenhum tipo de informação.</small>
          </div>
          <div class="bloco2">
            <label for="textoSenha">Nova Senha</label>
            <img src="Imagens/btn/error.svg" style="width: 15px;" onmouseover="mostrarRequisitosSenha()" onmouseout="esconderRequisitosSenha()">
            <input type="password" class="form-control is-invalid2" id="SenhaNova" name="SenhaNova" placeholder="NovaSenha">
            <div id="requisitosSenha">
              <label for="senha1" class="num"> • Pelo menos um número</label><br>
              <label for="senha1" class="mais"> • Uma letra maiúscula </label><br>
              <label for="senha1" class="esp"> • Um caractere especial (ex: @, #, $, %, ^, &amp;, +, =) </label>
              <label for="senha1" class="qtd"> • Mínimo de 8 caracteres </label>
            </div>
          </div>
          <button type="submit" class="btn btn-primary" id="btnCadastro" disabled>Redefinir</button>
        </form>
      </div>
    </div>
  </div>

  <script>
    function mostrarRequisitosSenha() {
      var requisitosSenha = document.getElementById("requisitosSenha");
      requisitosSenha.style.display = "block";
      requisitosSenha.style.visibility = "visible";
    }

    function esconderRequisitosSenha() {
      var requisitosSenha = document.getElementById("requisitosSenha");
      requisitosSenha.style.display = "none";
      requisitosSenha.style.visibility = "hidden";
    }

    function validarSenha() {
      var mai = document.querySelector('.mais');
      var num = document.querySelector('.num');
      var esp = document.querySelector('.esp');
      var qtd = document.querySelector('.qtd');
      var senhaInput = document.getElementById('SenhaNova');
      var btnCadastro = document.getElementById('btnCadastro');

      const maiuscula = /[A-Z]/;
      const numero = /[0-9]/;
      const especiais = /[!@#\$%\^&\*\(\)_\+\-=\.\,:\u003C>\|\~]/;
      var senha = senhaInput.value;

      var m = false;
      var n = false;
      var e = false;
      var t = false;

      if (maiuscula.test(senha)) {
        m = true;
        mai.style.color = 'green';
      } else {
        m = false;
        mai.style.color = 'red';
      }
      if (numero.test(senha)) {
        n = true;
        num.style.color = 'green';
      } else {
        n = false;
        num.style.color = 'red';
      }
      if (especiais.test(senha)) {
        e = true;
        esp.style.color = 'green';
      } else {
        e = false;
        esp.style.color = 'red';
      }
      if (senha.length >= 8) {
        t = true;
        qtd.style.color = 'green';
      } else {
        t = false;
        qtd.style.color = 'red';
      }

      if (m && n && e && t) {
        btnCadastro.removeAttribute('disabled');
      } else {
        btnCadastro.setAttribute('disabled', 'disabled');
      }
    }

    document.getElementById('SenhaNova').addEventListener('input', validarSenha);
  </script>
</body>
</html>