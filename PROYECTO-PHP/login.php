<?php

$errors = [];

if ($_POST) {
    // Lee los usuarios que hay en la base.
    $usuarios = get_users();

    // Busca el usuario logueado si corresponde, sino retorna 'false'.
    $usuario = search_user($usuarios, $_POST['email'], $_POST['password']);

    // Si existe el usuario...
    if ($usuario) {
        // Inicia sesion y guarda en $_SESSION todos los datos del usuario logueado.
        session_start();
        $_SESSION['usuario'] = $usuario;    // Le asigna a $_SESSION['usuario] el valor de usuario (que devolvio la funcion de busqueda).
        header('location: ?action=perfilUs'); // Envia entonces al perfil de ESE usuario.
    } else {
        $error = "Los datos son incorrectos :(";
    }

}
// Para formularios input o boton al hacer clic en el, recarga la pagina
// <input type="button" value="Recargar página" onClick="location.reload();" style="width: 200px; height: 30px; background: #6699FF; color: #ffffff; cursor: pointer; border: 0px;"/>

// Se puede agregar las clases id-valid e id-invalid dentro del input junto a form-control
// para marcar en verde o rojo (correcto o incorrecto).
// Se puede agregar un parrafo en caso de ser error, debajo del DIV.INPUT como el siguiente:
// <div class="col-sm-3">
// <small id="passwordHelp" class="text-danger">
// Must be 8-20 characters long.
// </small>      
// </div>

?>


<div class="container" id="login">

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
          <button type="submit" class="btn btn-outline-success my-2 my-sm-0">Search</button>
        </form>
      </nav>
    </section>
  </header>

  <div class="form-login">
    <form action="?action=login" class="formulario" method="post">

      <div class="form-group">
        <label for="email">Email :</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="Email" required autofocus>
        <p class="text-danger"><?= $errors['email'] ?? '' ?></p>
      </div>
      <div class="form-group">
        <label for="password">Password :</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
        <p class="text-danger"><?= $errors['password'] ?? '' ?></p>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-outline-success my-2 my-sm-0">Log in</button>
        <a class="olvido-pass" href="#">Olvidaste tu contraseña?</a>
      </div>
      <div class="form-group">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="remember" id="remember">
          <label class="form-check-label" for="gridCheck">
            <i>Recordarme</i>
          </label>
        </div>
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
