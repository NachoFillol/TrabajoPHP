<?php
// Inicio un array vacio.
$errors = [];

if ($_POST) {

    // Verifica si el email tiene el formato correcto
    if (! filter_var($_POST['email1'], FILTER_VALIDATE_EMAIL)) {
      $errors['email1'] = "El email no es valido !";
    }
    // Verifica que coincidan las 2 contraseñas
    if ($_POST['password'] !== $_POST['password_confirmation']) {
        $errors['password'] = "No coinciden las contraseñas !";
    }

    // Si no hay errores, continua...
    if (empty($errors)) {

        // Leo los usuarios que hay en la base
        $usuarios = get_users();

        // Cuento cantidad de usuarios previos
        $id = count($usuarios);

        // Establece el formato del array guardado
        $usuario = [
            'id' => $id,
            'firstname' => $_POST['fname'],
            'lastname' => $_POST['lname'],
            'email1' => $_POST['email1'],
            'email2' => $_POST['email2'],
            'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
            'address1' => $_POST['address1'],
            'address2' => $_POST['address2'],
            'city' => $_POST['city'],
            'state' => $_POST['state'],
            'zip' => $_POST['zip'],
            'user' => $_POST['user'],
            'avatar' => upload('avatar'),
        ];

        // Agregar al array.
        $usuarios[] = $usuario;

        // Guarda los usuarios.
        save_users($usuarios);

        // Redirecciona a login.php
        redirect('login');
    }
    
}
?>


<div class="container" id="registro">

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

  <div class="form-register">
    <form action="" class="formulario" method="post" enctype="multipart/form-data">

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputFName">Nombre :</label>
          <input type="text" name="fname" id="fname" class="form-control" placeholder="Nombre" required autofocus>
        </div>
        <div class="form-group col-md-6">
          <label for="inputLName">Apellido :</label>
          <input type="text" name="lname" id="lname" class="form-control" placeholder="Apellido" required>
        </div>
        <div class="form-group col-md-6">
          <label for="inputEmail1">Email Principal :</label>
          <input type="email" name="email1" id="email1" class="form-control" placeholder="Email" required>
          <small class="text-danger"><?= $errors['email1'] ?? '' ?></small>
        </div>
        <div class="form-group col-md-6">
          <label for="inputEmail2">Email Alternativo :</label>
          <input type="email" name="email2" id="email2" class="form-control" placeholder="Email Alternativo">
        </div>
        <div class="form-group col-md-6">
          <p>
            <label for="inputPassword">Password :</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Password" 
            pattern="[a-zA-Z0-9]{4,10}" title="El password debe tener entre 4 y 10 caracteres de longitud, 
            donde cada carácter puede ser una letra mayúscula, minúscula o un dígito" required>
          </p>
          <small class="text-danger"><?= $errors['password'] ?? '' ?></small>
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword_Confirmation">Confirmacion Password :</label>
          <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Confirmar Password" required>
        </div>
      </div>
      <div class="form-group">
        <label for="inputAddress1">Direccion :</label>
        <input type="text" name="address1" id="address1" class="form-control" placeholder="1234 Main St">
      </div>
      <div class="form-group">
        <label for="inputAddress2">Direccion 2 :</label>
        <input type="text" name="address2" id="address2" class="form-control" placeholder="Apartment, studio, or floor">
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputCity">Ciudad :</label>
          <input type="text" name="city" id="city" class="form-control">
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
          <input type="text" name="zip" id="zip" class="form-control">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputUser">Usuario :</label>
          <input type="text" name="user" id="user" class="form-control">
        </div>
        <div class="form-group col-md-6" id="avatar-file">
          <label for="">Subi tu Avatar :</label>
          <input type="file" name="avatar" accept="image/*">
        </div>
      </div>
      <div class="form-group">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="remember" id="remember">
          <label class="form-check-label" for="gridCheck">
            <i>Recordarme</i>
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="accept" id="accept">
          <label class="form-check-label" for="gridCheck">
            <i>Acepto las condiciones y términos</i>
          </label>
        </div>
      </div>
      <!-- <button type="submit" class="btn btn-primary">Enviar</button> -->
      <div class="register-boton">
        <input type="image" src="img/img.register/PRESSSTAR.png" alt="press start" class="form-btn">
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
