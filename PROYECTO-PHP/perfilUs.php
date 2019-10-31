<?php

session_start();

// Lee los usuarios que hay en la base
$usuarios = get_users();

// Selecciono el usuario cuyo id corresponda con el logueado (un array)
// $usuario = $usuarios[$_SESSION['usuario']['id']];

// Si se presiona el boton 'Habilitar Edicion' ($_POST['disabled']) 
// le asigna un valor de '1' a la variable llamada 'disabled' 
$disabled = $_POST['disabled'] ?? 1;


if ($_POST) {
    // Si se presiona el boton 'Enviar' ($_POST['editar'])...
    // Reemplazamos solo el usuario logueado con los nuevos valores del form (POST)
    if ( isset($_POST['editar']) ) {
        // Nombre, Apellido, Email1, Email2
        if ($_SESSION['usuario']['fname'] !== $_POST['fname']) {
          $usuarios[$_SESSION['usuario']['id']]['fname'] = $_POST['fname'];
        }
        if ($_SESSION['usuario']['lname'] !== $_POST['lname']) {
        $usuarios[$_SESSION['usuario']['id']]['lname'] = $_POST['lname'];
        }
        if ($_SESSION['usuario']['email1'] !== $_POST['email1']) {
            $usuarios[$_SESSION['usuario']['id']]['email1'] = $_POST['email1'];
        }
        if ($_SESSION['usuario']['email2'] !== $_POST['email2']) {
          $usuarios[$_SESSION['usuario']['id']]['email2'] = $_POST['email2'];
        }

        // Si el password en el campo input cambia, entonces sobreescribo la password anterior
        if ($_POST['password'] != $_SESSION['usuario']['password']) {
            $usuarios[$_SESSION['usuario']['id']]['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        }

        // Direcciones
        if ($_SESSION['usuario']['address1'] !== $_POST['address1']) {
          $usuarios[$_SESSION['usuario']['id']]['address1'] = $_POST['address1'];
        }
        if ($_SESSION['usuario']['address2'] !== $_POST['address2']) {
        $usuarios[$_SESSION['usuario']['id']]['address2'] = $_POST['address2'];
        }

        // Ciudad, Estado, Cod Postal, Usuario
        if ($_SESSION['usuario']['city'] !== $_POST['city']) {
          $usuarios[$_SESSION['usuario']['id']]['city'] = $_POST['city'];
        }
        if ($_SESSION['usuario']['state'] !== $_POST['state']) {
        $usuarios[$_SESSION['usuario']['id']]['state'] = $_POST['state'];
        }
        if ($_SESSION['usuario']['zip'] !== $_POST['zip']) {
          $usuarios[$_SESSION['usuario']['id']]['zip'] = $_POST['zip'];
        }
        if ($_SESSION['usuario']['user'] !== $_POST['user']) {
        $usuarios[$_SESSION['usuario']['id']]['user'] = $_POST['user'];
        }
        
        // Si se adjunta un nuevo archivo de imagen ('size' != 0), elimina el archivo anterior y sube uno nuevo
        if (! $_FILES['avatar']['size'] == 0) {
            unlink($_SESSION['usuario']['avatar']);
            $usuarios[$_SESSION['usuario']['id']]['avatar'] = upload('avatar');
        }

        // Grabamos la nueva base a json (reemplaza la anterior)
        save_users($usuarios);
        // Desloguea al usuario
        header('location: ?action=logout');

    }

}

?>


<div class="container" id="perfilUs">

  <header>
    <section class="barra-inicio">
      <img src="img/logo.png" alt="Old School Store" id="logo">
      <nav>
        <ul>
          <li><img class="" src="<?= $_SESSION['usuario']['avatar'] ?>" alt="avatar" id="avatar"></li>
          <li><a class="" href="?action=perfilUs">Mi Perfil</a></li>
          <li><a class="" href="#">Mis Compras<i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
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
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </nav>
    </section>
  </header>


  <div class="usuario">

    <div class="usuario-perfil">
      <!-- Si el usuario inicia session, mostrar el siguiente titulo -->
      <?php if( isset($_SESSION['usuario']['email1']) ) : ?>
        <h3>Bienvenido, <?= $_SESSION['usuario']['email1'] ?></h3>
        <h5>Su ID es el Nº <?= $_SESSION['usuario']['id'] ?></h5>

      <?php else : ?>
            <!-- Sino inicia, mostrar... -->
            <h3>Bienvenido, Usuario</h3>
      <?php endif; ?>

      <h6>Editar Perfil</h6>

      <a href=""><img src="<?= $_SESSION['usuario']['avatar'] ?>"></a>
      <!-- <a href="#"><img src="img/usuariomario.png" alt=""></a> -->

    </div>

    <div class="barra-usuario">
      <nav>
        <ul>
          <li><a href="#">Mis Datos </a></li>
          <li><a href="#">Mis Compras</a></li>
          <li><a href="#">Favoritos</a></li>
        </ul>
      </nav>
    </div>

    <div class="datos-usuario">
      <form class="formulario" action="">

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputUser">Usuario :</label>
            <input type="text" name="user" id="user" class="form-control" value="<?= $_SESSION['usuario']['user'] ?>" <?= $disabled ? 'readonly' : '' ?> >
          </div>
          <div class="form-group col-md-6" id="avatar-file">
            <label for="">Cambiá tu Avatar :</label>
            <input type="file" name="avatar" accept=".jpg,.jpeg,.png," disabled>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputName">Nombre :</label>
            <input type="text" name="fname" id="fname" class="form-control" value="<?= $_SESSION['usuario']['firstname'] ?>" <?= $disabled ? 'readonly' : '' ?> >
          </div>
          <div class= "form-group col-md-6">
            <label for="inputLName">Apellido :</label>
            <input type="text" name="lname" id="lname" class="form-control" value="<?= $_SESSION['usuario']['lastname'] ?>" <?= $disabled ? 'readonly' : '' ?> >
          </div>
          <div class="form-group col-md-6">
            <label for="inputEmail4">Email Principal :</label>
            <input type="email" name="email1" id="email1" class="form-control" value="<?= $_SESSION['usuario']['email1'] ?>" <?= $disabled ? 'readonly' : '' ?> >
          </div>
          <div class="form-group col-md-6">
            <label for="inputEmail4">Email Alternativo :</label>
            <input type="email" name="email2" id="email2" class="form-control" value="<?= $_SESSION['usuario']['email2'] ?>" <?= $disabled ? 'readonly' : '' ?> >
          </div>
        </div>
        <div class="form-group">
          <label for="inputAddress">Direccion :</label>
          <input type="text" name="address1" id="address1" class="form-control" value="<?= $_SESSION['usuario']['address1'] ?>" <?= $disabled ? 'readonly' : '' ?> >
        </div>
        <div class="form-group">
          <label for="inputAddress2">Direccion 2 :</label>
          <input type="text" name="address2" id="address2" class="form-control" value="<?= $_SESSION['usuario']['address2'] ?>" <?= $disabled ? 'readonly' : '' ?> >
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputCity">Ciudad :</label>
            <input type="text" name="city" id="city" class="form-control" value="<?= $_SESSION['usuario']['city'] ?>" <?= $disabled ? 'readonly' : '' ?> >
          </div>
          <div class="form-group col-md-4">
            <label for="inputState">Estado :</label>
            <select name="state" id="state" class="form-control">
              <option selected>Choose...</option>
              <option value="Buenos Aires">Buenos Aires</option>
              <option value="Capital Federal">Capital Federal</option>
              <option value="Catamarca">Catamarca</option>
              <option value="Chaco">Chaco</option>
              <option value="Chubut">Chubut</option>
              <option value="Cordoba">Córdoba</option>
              <option value="Corrientes">Corrientes</option>
              <option value="Entre Rios">Entre Ríos</option>
              <option value="Formosa">Formosa</option>
              <option value="Jujuy">Jujuy</option>
              <option value="La Pampa">La Pampa</option>
              <option value="La Rioja">La Rioja</option>
              <option value="Mendoza">Mendoza</option>
              <option value="Misiones">Misiones</option>
              <option value="Neuquen">Neuquén</option>
              <option value="Rio Negro">Río Negro</option>
              <option value="Salta">Salta</option>
              <option value="San Juan">San Juan</option>
              <option value="San Luis">San Luis</option>
              <option value="Santa Cruz">Santa Cruz</option>
              <option value="Santa Fe">Santa Fé</option>
              <option value="Santiago del Estero">Santiago del Estero</option>
              <option value="Tierra del Fuego">Tierra del Fuego</option>
              <option value="Tucuman">Tucumán</option>
            </select>
          </div>
          <div class="form-group col-md-2">
            <label for="inputZip">C.P. :</label>
            <input type="text" name="zip" id="zip" class="form-control" value="<?= $_SESSION['usuario']['zip'] ?>" <?= $disabled ? 'readonly' : '' ?> >
          </div>

        </div>
      </form>
    </div>

    <div class="boton-guardar">
      <?php if (!$disabled): ?>
        <div class="form-group">
            <button name="editar" class="btn btn-primary">Enviar</button>
        </div>
      <?php else: ?>
      <!--  <input type="hidden" name="disabled" value="0"> -->
            <button name="disabled" class="btn btn-warning">Editar</button>
      <?php endif ?>
      <br>
      <br>
      <a href="?action=logout">Cerrar Sesion</a>
    </div>

    <!-- <div class="boton-guardar">
      <button type="submit" class="btn btn-outline-success">Guardar datos</button>
    </div> -->

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
        <a href="index.html"> oldschoolstore.com.ar </a>
        <p>©2019 Todos los derechos reservados. </p>
      </div>

    </div>

    <div class="right-footer">
      <a href="?action=home"> <i class="fas fa-arrow-circle-up"></i> </a>
    </div>

  </footer>

</div>
