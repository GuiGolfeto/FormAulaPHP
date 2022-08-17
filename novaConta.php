<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style/index.css" />
    <title>Register Form</title>
  </head>
  <body>
    <?php
      $nameUser = $_POST['nameUser'];
      $emailUser = $_POST['emailUser'];
      $passwordUser = $_POST['passwordUser'];
      $celUser = $_POST['celUser'];
      $nascUser = $_POST['nascUser'];

      echo $nameUser;
      echo "<br>";
      echo $emailUser;
      echo "<br>";
      echo $passwordUser;
      echo "<br>";
      echo $celUser;
      echo "<br>";
      echo $nascUser;
    ?>
    <form action="" method="post" name="formRegister" id="formRegister" enctype="multipart/form-data">
      <div class="container">
        <div class="section-one">
          <div class="social-links">
            <div class="facebook">
              <span>Registrar com o facebook</span>
              <div class="icon">
                <a href="https://www.facebook.com" target="_blank" rel="noopener noreferrer"><img src="./assets/facebookLogo.svg" alt="Facebook Logo" /></a>
              </div>
            </div>
            <div class="twitter">
              <div class="icon">
                <a href="https://www.linkedin.com/" target="_blank" rel="noopener noreferrer"><img src="./assets/linkedinLogo.svg" alt="Twitter Logo" /></a>
              </div>
              <span>Registrar com Linkedin</span>
            </div>
          </div>
          <div class="main-form">
            <input type="text" name="nameUser" id="nameUser" placeholder="Nome Completo" required>
            <input type="email" name="emailUser" id="emailUser" placeholder="Email" required />
            <input type="password" name="passwordUser" id="passwordUser" placeholder="Senha" required />
            <input type="tel" name="celUser" id="celUser" placeholder="Celular com ddd" required>
            <input type="date" name="nascUser" id="nascUser" required>
          </div>
        </div>
        <div class="section-two">
            <a href="#"><button type="submit">Criar Nova Conta</button></a>
            <a href="index.html" class="voltarLogin"><span>Voltar para Login</span></a>
        </div>
      </div>
    </form>
  </body>
</html>
