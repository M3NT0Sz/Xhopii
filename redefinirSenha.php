<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Reddit+Mono:wght@200..900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <title>Xhopii</title>
  </head>
  <body>
    <header class="header4">
      <section class="logo"><img src="./img/logo.png" /></section>
      <section class="letras"><h1>Xhopii</h1></section>
      <section class="senha"><p>Redefinir senha</p></section>
      <section class="ajuda"><p>Precisa de ajuda?</p></section>
    </header>
    <section class="redefinirTudo">
      <section class="redefinirSenha">
        <section class="i">
          <a href="./home.php"><i class="bx bx-arrow-back"></i></a>
        </section>
        <section class="redef">
          <form method="post" action="./processamento/processamento.php" class="redefinir">
            <p>Redefinir Senha</p>
            <input type="email" name="inputEmail" placeholder="Email" />
            <button>Enviar</button>
          </form>
        </section>
      </section>
    </section>
    <footer>
      <section class="footerCima">
        <section class="textos">
          <h1>Atendimento ao cliente</h1>
          <a href="#">Central de Ajuda</a>
          <a href="#">Como Comprar</a>
          <a href="#">Métodos de Pagamento</a>
          <a href="#">Garantia Xhopii</a>
          <a href="#">Devolução e Reembolso</a>
          <a href="#">Fale Conosco</a>
          <a href="#">Ouvidoria</a>
        </section>
        <section class="textos">
          <h1>Sobre A Xhopii</h1>
          <a href="#">Sobre Nós</a>
          <a href="#">Politicas Xhopii</a>
          <a href="#">Politica de Privacidade</a>
          <a href="#">Programa de Afiliados da Xhopii</a>
          <a href="#">Seja um Entregador Xhopii</a>
          <a href="#">Ofertas Relâmpago</a>
          <a href="#">Xhopii Blog</a>
          <a href="#">Impresa</a>
        </section>
        <section class="textos">
          <h1>Pagamento</h1>
          <section class="imagens">
            <img src="./img/pix.png" alt="" />
            <img src="./img/boleto.png" alt="" />
            <img src="./img/americanExpress.png" alt="" />
            <img src="./img/visa.png" alt="" />
            <img src="./img/masterCard.png" alt="" />
            <img src="./img/hiperCard.png" alt="" />
            <img src="./img/elo.png" alt="" />
          </section>
        </section>
        <section class="textos">
          <h1>Siga-nos</h1>
          <a href="#"><i class="bx bxl-instagram-alt"></i>Instagram</a>
          <a href="#"><i class="bx bxl-twitter"></i>Twitter</a>
          <a href="#"><i class="bx bxl-facebook-square"></i>Facebook</a>
          <a href="#"><i class="bx bxl-youtube"></i>YouTube</a>
          <a href="#"><i class="bx bxl-linkedin-square"></i>Linkedin</a>
        </section>
        <section class="textos">
          <h1>Atendimento ao cliente</h1>
          <img src="./img/qr-code.png" alt="" />
          <img src="./img/googlePlay.png" alt="" />
          <img src="./img/appStore.png" alt="" />
        </section>
      </section>
      <section class="footerBaixo">
        <hr />
        <p>&copy; 2023 Xhoppi. Todos os direitos acadêmicos reservados</p>
      </section>
    </footer>
  </body>
</html>
