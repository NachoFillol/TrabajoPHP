<!DOCTYPE html>
<html lang="en">
<head>
  <title> OLD SCHOOL STORE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" integrity="sha256-46qynGAkLSFpVbEBog43gvNhfrOj+BmwXdxFgVK/Kvc=" crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

<div class="container" id="index">

<header>
  <section class="barra-inicio">
    <a href="index.php"><img src="img/logo.png" alt="Old School Store" id="logo"></a>
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