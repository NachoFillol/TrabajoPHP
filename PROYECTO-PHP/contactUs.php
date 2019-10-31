<div class="container" id="contactUs">

  <header>
    <section class="barra-inicio" id="contactUs">
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
      <nav>
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
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </nav>
    </section>
  </header>

  <div class="form-contactUs">
    <form action="?action=home" class="formulario" method="post">

      <div class="form-group">
        <label for="inputEmail">Email :</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="Email" required autofocus>
      </div>
      <div class="form-group">
        <label for="inputName">Nombre Completo :</label>
        <input type="text" name="fullname" id="fullname" class="form-control" placeholder="Nombre Completo" required>
      </div>
      <div class="form-group">
        <label for="inputOrder">Orden Nº :</label>
        <input type="text" name="order" id="order" class="form-control" placeholder="Orden Nº" required>
      </div>
      <div class="form-group">
        <label for="inputReason">Razón del Contacto ?</label>
        <select class="form-control" name="reason" id="reason" required>
          <option value="orden">Mi Orden</option>
          <option value="postOrden">Post Orden</option>
          <option value="pago">Pagos</option>
          <option value="devolver">Devolver o Cancelar Orden</option>
          <option value="daniado">Producto Dañado</option>
        </select>
      </div>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">Tu Mensaje</span>
        </div>
        <textarea name="textarea" id="textarea" class="form-control" aria-label="With textarea"></textarea>
      </div>
      <div class="contenedor-login">
        <button type="submit" class="btn btn-outline-success my-2 my-sm-0">Enviar</button>
      </div>
    </form>
  </div>

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
        <a href="?action=home"> oldschoolstore.com.ar </a>
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
