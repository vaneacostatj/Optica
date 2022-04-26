<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="https://i.postimg.cc/MTG39nSm/icono-Logo.png">
  <title>Óptica</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/public/assets/css/estilo.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
      <div class="col-12 col-sm-12 col-md-6 col-lg-4">
        <img src="https://i.postimg.cc/L67qXw59/logoblc.png" width="60%" class="img-fluid" alt="Responsive image">
      </div>


      <nav class="navbar navbar-dark justify-content-between">

        <div class="...">
          <form class="form-search">
            <div class="input-group">
              <input class="form-control form-text" maxlength="128" placeholder="Buscar referencia" size="15" type="text" />
              <button class="btn "><i class="fa fa-search ">&nbsp; &nbsp; &nbsp; &nbsp;</i></button>
            </div>
          </form>
        </div>

        <a class="navbar-brand" href="#" style="color:rgb(2, 250, 2)"><i class="fas fa-power-off" style="color:white"></i>&nbsp; Logout &nbsp; </a>
      </nav>

    </div>
    </div>
  </nav>

  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg navbar-dark" id="navbarHome">
        <nav class="navbar navbar-dark justify-content-between">
          <a class="navbar-brand" href="#" style="color:rgb(2, 250, 2)"><i class="far fa-user" style="color:white"></i>&nbsp; Bienvenido &nbsp;</a>
        </nav>

        <div class="container-fluid">
          <a class="navbar-brand" href="<?php echo base_url(); ?>/public">Inicio</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">

              <li class="nav-item" id="espacio">
                <a class="nav-link active" href="<?php echo base_url(); ?>/public/nosotros">Nosotros</a>
              </li>

              <li class="nav-item" id="espacio">
                <a class="nav-link active" aria-current="page" href="<?php echo base_url(); ?>/public/servicios">Servicios</a>
              </li>

              <li class="nav-item" id="espacio">
                <a class="nav-link active" href="<?php echo base_url(); ?>/public/catalogo">Catálogo</a>
              </li>
              <li class="nav-item" id="espacio">
                <a class="nav-link active" href="<?php echo base_url(); ?>/public/contactanos">Contactanos</a>
              </li>

            </ul>
          </div>
        </div>
      </nav>
    </div>
  </nav>
  <br>