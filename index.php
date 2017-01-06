<?php $cabecalho_title = "Mirror Fashion"; ?>
<?php include("cabecalho.php"); ?>
  <div class="container destaque">
    <section class="busca">
      <h2>Busca</h2>
      <form>
        <input type="search">
        <input type="image" src="img/busca.png">
      </form>
    </section><!-- fim .busca -->

    <section class="menu-departamentos">
      <h2>Departamentos</h2>
      <nav>
        <ul>
          <li>
            <a href="#">Blusas e Camisas</a>
            <ul>
              <li><a href="#">Manga curta</a></li>
              <li><a href="#">Manga comprida</a></li>
              <li><a href="#">Camisa social</a></li>
              <li><a href="#">Camisa casual</a></li>
            </ul>  
          </li>
          <li><a href="#">Calças</a></li>
          <li><a href="#">Saias</a></li>
          <li><a href="#">Vestidos</a></li>
          <li><a href="#">Sapatos</a></li>
          <li><a href="#">Bolsas e Carteiras</a></li>
          <li><a href="#">Acessórios</a></li>
        </ul>
      </nav>
    </section><!-- fim .menu-departamentos -->

    <img src="img/destaque-home.png" alt="Promoção: Big City Night">
    <a href="#" class="pause"></a>
  </div><!-- fim .container .destaque -->
  <div class="container paineis">
    <section class="painel novidades">
      <h2>Novidades</h2>
        <ol>
          <li>
            <a href="produto.php">
              <figure>
                <img src="img/produtos/miniatura1.png">
                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
              </figure>
            </a>
          </li>
          <li>
            <a href="produto.php">
              <figure>
                <img src="img/produtos/miniatura1.png">
                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
              </figure>
            </a>
          </li>
          <li>
            <a href="produto.php">
              <figure>
                <img src="img/produtos/miniatura1.png">
                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
              </figure>
            </a>
          </li>
          <li>
            <a href="produto.php">
              <figure>
                <img src="img/produtos/miniatura1.png">
                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
              </figure>
            </a>
          </li>
          <li>
            <a href="produto.php">
              <figure>
                <img src="img/produtos/miniatura1.png">
                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
              </figure>
            </a>
          </li>
          <li>
            <a href="produto.php">
              <figure>
                <img src="img/produtos/miniatura1.png">
                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
              </figure>
            </a>
          </li>
        </ol>
      </section>
      <section class="painel mais-vendidos">
        <h2>Novidades</h2>
        <ol>
          <li>
            <a href="produto.php">
              <figure>
                <img src="img/produtos/miniatura1.png">
                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
              </figure>
            </a>
          </li>
          <li>
            <a href="produto.php">
              <figure>
                <img src="img/produtos/miniatura1.png">
                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
              </figure>
            </a>
          </li>
          <li>
            <a href="produto.php">
              <figure>
                <img src="img/produtos/miniatura1.png">
                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
              </figure>
            </a>
          </li>
          <li>
            <a href="produto.php">
              <figure>
                <img src="img/produtos/miniatura1.png">
                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
              </figure>
            </a>
          </li>
          <li>
            <a href="produto.php">
              <figure>
                <img src="img/produtos/miniatura1.png">
                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
              </figure>
            </a>
          </li>
          <li>
            <a href="produto.php">
              <figure>
                <img src="img/produtos/miniatura1.png">
                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
              </figure>
            </a>
          </li>
        </ol>
      </section>
  </div>
  <?php include("rodape.php"); ?>

<script type="text/javascript">
  var banners = ["img/destaque-home.png", "img/destaque-home-2.png"];
  var bannerAtual = 0;

  function trocaBanner() {
    bannerAtual = (bannerAtual + 1) % 2;
    document.querySelector('.destaque img').src = banners[bannerAtual];
  }

  var timer = setInterval(trocaBanner, 4000);
  var controle = document.querySelector('.pause');

  controle.onclick = function() {
    if (controle.className == 'pause') {
      clearInterval(timer);
      controle.className = 'play';
    } else {
      timer = setInterval(trocaBanner, 4000);
      controle.className = 'pause';
    }

    return false;
  };
</script>
</body>
</html>