<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Reddit+Mono:wght@200..900&display=swap" rel="stylesheet" />
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <title>Xhopii</title>
</head>

<body>
  <header>
    <section class="logos">
      <section class="logo"><img src="./img/logo.png" /></section>
      <section class="letras">
        <h1>Xhopii</h1>
      </section>
    </section>
    <?php
    if (isset($_SESSION['logado']) != "Sim") {
    ?>
      <section class="sair"><a href="login.php">Entrar</a></section>
    <?php
    } else {
    ?>
      <section class="sair"><a href="./processamento/processamento.php">Sair</a></section>
    <?php
    }
    ?>
  </header>
  <nav>
    <ul>
      <li><a href="./home.php">Home</a></li>
      <li><a href="./cadastroCliente.php">Cadastro Cliente</a></li>
      <li><a href="./cadastroFuncionarios.php">Cadastro Funcionário</a></li>
      <li><a href="./cadastroProduto.php">Cadastro Produto</a></li>
      <li><a href="./verClientes.php">Ver Clientes</a></li>
      <li><a href="./verFuncionarios.php">Ver Funcionários</a></li>
      <li><a href="./verProdutos.php">Ver Produtos</a></li>
    </ul>
  </nav>

  <section class="carouselArrumar">
    <section id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
      <section class="carousel-inner">
        <section class="carousel-item active">
          <img src="./img/carousel-1.jpg" class="d-block w-70" />
        </section>
        <section class="carousel-item">
          <img src="./img/carousel-2.jpg" class="d-block w-70" />
        </section>
        <section class="carousel-item">
          <img src="./img/carousel-3.jpg" class="d-block w-70" />
        </section>
      </section>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </section>
  </section>

  <section class="imagemCompra">
    <img src="./img/home-promocao.png" />
  </section>
  <section class="letrasDia">
    <p>Descobertas do dia</p>
    <hr />
  </section>
  <section class="wrapperTudo">
    <section class="wrapper">
      <a href="./produto.php">
        <section class="imagemRoupas">
          <img src="./img/produto1.png" />
          <p>Camisa Desenvolvedor Front-End CSS</p>
          <section class="baixo">
            <p class="preco">R$ 59,90</p>
            <p class="disponiveis">171 disponíveis</p>
          </section>
        </section>
      </a>
      <a href="./produto.php">
        <section class="imagemRoupas">
          <img src="./img/produto1.png" />
          <p>Camisa Desenvolvedor Front-End CSS</p>
          <section class="baixo">
            <p class="preco">R$ 59,90</p>
            <p class="disponiveis">171 disponíveis</p>
          </section>
        </section>
      </a>
      <a href="./produto.php">
        <section class="imagemRoupas">
          <img src="./img/produto1.png" />
          <p>Camisa Desenvolvedor Front-End CSS</p>
          <section class="baixo">
            <p class="preco">R$ 59,90</p>
            <p class="disponiveis">171 disponíveis</p>
          </section>
        </section>
      </a>
      <a href="./produto.php">
        <section class="imagemRoupas">
          <img src="./img/produto1.png" />
          <p>Camisa Desenvolvedor Front-End CSS</p>
          <section class="baixo">
            <p class="preco">R$ 59,90</p>
            <p class="disponiveis">171 disponíveis</p>
          </section>
        </section>
      </a>
      <a href="./produto.php">
        <section class="imagemRoupas">
          <img src="./img/produto1.png" />
          <p>Camisa Desenvolvedor Front-End CSS</p>
          <section class="baixo">
            <p class="preco">R$ 59,90</p>
            <p class="disponiveis">171 disponíveis</p>
          </section>
        </section>
      </a>
      <a href="./produto.php">
        <section class="imagemRoupas">
          <img src="./img/produto1.png" />
          <p>Camisa Desenvolvedor Front-End CSS</p>
          <section class="baixo">
            <p class="preco">R$ 59,90</p>
            <p class="disponiveis">171 disponíveis</p>
          </section>
        </section>
      </a>
      <a href="./produto.php">
        <section class="imagemRoupas">
          <img src="./img/produto1.png" />
          <p>Camisa Desenvolvedor Front-End CSS</p>
          <section class="baixo">
            <p class="preco">R$ 59,90</p>
            <p class="disponiveis">171 disponíveis</p>
          </section>
        </section>
      </a>
      <a href="./produto.php">
        <section class="imagemRoupas">
          <img src="./img/produto1.png" />
          <p>Camisa Desenvolvedor Front-End CSS</p>
          <section class="baixo">
            <p class="preco">R$ 59,90</p>
            <p class="disponiveis">171 disponíveis</p>
          </section>
        </section>
      </a>
      <a href="./produto.php">
        <section class="imagemRoupas">
          <img src="./img/produto1.png" />
          <p>Camisa Desenvolvedor Front-End CSS</p>
          <section class="baixo">
            <p class="preco">R$ 59,90</p>
            <p class="disponiveis">171 disponíveis</p>
          </section>
        </section>
      </a>
      <a href="./produto.php">
        <section class="imagemRoupas">
          <img src="./img/produto1.png" />
          <p>Camisa Desenvolvedor Front-End CSS</p>
          <section class="baixo">
            <p class="preco">R$ 59,90</p>
            <p class="disponiveis">171 disponíveis</p>
          </section>
        </section>
      </a>
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