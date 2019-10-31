<div class="container" id="index">

<header>
  <section class="barra-inicio">
    <img src="img/logo.png" alt="Old School Store" id="logo">
    <nav>
      <ul>
        <li><img class="isDisabled" src="img/avatar/account-100.png" alt="avatar" id="avatar"></li>
        <li><a class="isDisabled" href="?action=perfilUs">Mi Perfil</a></li>
        <li><a class="isDisabled" href="#">Mis Compras<i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
        <li><a href="?action=login">Abrir Cuenta</a></li>
        <li><a href="?action=registro">Crear Cuenta</a></li>
      </ul>
    </nav>
  </section>

  <section class="categorias-inicio">
    <nav class="navBuscador">
      <ul>
        <li><a href="?action=contactUs">Contactanos</a></li>
        <li><a href="#">Lo mas vendido</a></li>
        <li><a href="#">Proximos lanzamientos</a></li>
        <li><a href="#">Ofertas</a></li>
        <li><a href="#">Categorias</a></li>
      </ul>
    </nav>
    <nav class="navbar">
      <form class="form-inline" action="" method="get">
        <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
        <button type="submit" class="btn btn-outline-success my-2 my-sm-0">Search</button>
      </form>
    </nav>
  </section>
</header>

<section class="destacados">
  <h2><mark>Productos Destacados</mark></h2>
  <div class="bd-example">
    <div class="row justify-content-center">
      <div class="col-12 col-md-11 col-lg-8 ">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/ejemplo1.png" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>SEGA Mega Drive</h5>
                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/ejemplo2.png" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Atari</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/ejemplo3.png" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Camara Polaroid</h5>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </section>

    <section class="stock">

      <h4> <mark>Productos en stock </mark> </h4>

      <article class="stock-productos">
        <h5>Computadoras</h5>
        <a href="#"><img src="img/computadora.png" alt=""></a>
      </article>

      <article class="stock-productos">
        <h5>Portatiles</h5>
        <a href="#"><img src="img/portatil.png" alt=""></a>
      </article>

      <article class="stock-productos">
        <h5>Celulares</h5>
        <a href="#"><img src="img/celular.png" alt=""></a>
      </article>

      <article class="stock-productos">
        <h5>Memorias Externas</h5>
        <a href="#"><img src="img/memoriaexterna.png" alt=""></a>
      </article>

      <article class="stock-productos">
        <h5>Camaras</h5>
        <a href="#"><img src="img/camaras.png" alt=""></a>
      </article>

      <article class="stock-productos">
        <h5>Realidad Virtual</h5>
        <a href="#"><img src="img/realidadvirtual.png" alt=""></a>
      </article>

      <article class="stock-productos">
        <h5>Consolas</h5>
        <a href="consolas.php"><img src="img/consola.png" alt=""></a>
      </article>

      <article class="stock-productos">
        <h5>Audio</h5>
        <a href="#"><img src="img/audio.png" alt=""></a>
      </article>

    </section>


    <section class="frecuentes">

      <h4> <mark>Preguntas frecuentes</mark> </h4>

      <article class="frecuentes-tips">
        <div class="">
          <img src="img/tarjetas.png" alt="">
        </div>
        <h6>¿Como pago el producto?</h6>
        <p>Los productos los podes pagar con tarjetas de débito y crédito. Hay varios descuentos y promociones según el banco que tengas.</p>
      </article>

      <article class="frecuentes-tips">
        <div class="">
          <img src="img/envios.png" alt="">
        </div>
        <h6>¿Como enviamos el producto?</h6>
        <p>Después de comprar tu pedido, nos contactamos con vos para coordinar la entrega del producto. ¡Si vivis en Capital la entrega es en el día!</p>
      </article>

      <article class="frecuentes-tips">
        <div class="">
          <img src="img/seguridad.png" alt="">
        </div>
        <h6>¿Es seguro el sitio?</h6>
        <p>Mas de 200.000 ventas no avalan. Somos un sitio seguro, que dispone de productos originales y con garantía.</p>
      </article>

    </section>


    <section class="contacto">

      <div class="mensaje-newsletter">
        <p> ¡Queremos seguir conectados! Ingresa tu e-mail y recibí semanalmente en tu correo las mejores ofertas retro que tenemos para vos. </p>
      </div>
      <div class="correo">
        <form action="" method="post">
          <div class="input-group flex-nowrap">
            <div class="input-group-prepend">
              <span class="input-group-text" id="addon-wrapping">@</span>
            </div>
            <input type="email" name="newsletter" id="newsletter" class="form-control" placeholder="Email" aria-label="Newsletter" aria-describedby="addon-wrapping">
            <button class="btn btn-outline-success" type="submit">Enviar</button>
          </div>
        </form>
      </div>

    </section>


      <section class="pie-pagina">

        <article>
          <h5>Servicios al cliente</h5>
          <ul>
            <li> <a href="#"> Centro de ayuda </a></li>
            <li> <a href="#"> Reembolso de dinero </a></li>
            <li> <a href="#"> Términos y Políticas </a></li>
            <li> <a href="#"> Disputa abierta </a></li>
          </ul>
        </article>

        <article>
          <h5>Sobre Nosotros</h5>
          <ul>
            <li> <a href="#"> Nuestra historia </a></li>
            <li> <a href="#"> Como comprar </a></li>
            <li> <a href="#"> Entregas y pagos </a></li>
            <li> <a href="#"> Ofertas semanales </a></li>
          </ul>
        </article>

        <article>
          <h5>Contactanos</h5>
          <ul>
            <li> <strong>Telefono:</strong> <a href="tel:+5412344321"> +54 1234-4321 </a></li>
            <li> <strong>Direccion:</strong> <a href="https://goo.gl/maps/5xoGKZzoD6cZ9G4e9" target="_blank"> Segurola y Habana, Buenos Aires. </a></li>
            <li> <strong>Email:</strong> <a href="mailto:info@oldschoolstore.com.ar?subject=Consulta"> info@oldschoolstore.com.ar </a></li>
          </ul>
        </article>

      </section>


      <footer>

        <div class="left-footer">
          <!-- Sin contenido, para dividir el footer en 3 -->
        </div>

        <div class="center-footer">

          <div class="social-area">
            <a class="facebook" href="https://www.facebook.com/" rel="nofollow" target="_blank"><i class="fab fa-facebook"></i></a>
            <a class="twitter" href="https://www.twitter.com/" rel="nofollow" target="_blank"><i class="fab fa-twitter"></i></a>
            <a class="instagram" href="https://www.instagram.com/" rel="nofollow" target="_blank"><i class="fab fa-instagram"></i></a>
          </div>

          <div class="derechos">
            <a href="index.html"> oldschoolstore.com.ar </a>
            <p>©2019 Todos los derechos reservados. </p>
          </div>

        </div>

        <div class="right-footer">
          <a href="?action=home"> <i class="fas fa-arrow-circle-up"></i> </a>
        </div>

      </footer>

    </div>
  </div>
</div>

