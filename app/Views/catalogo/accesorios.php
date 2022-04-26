
<div class="catalogo">
<br>
<div class="container">
    <div class="row">
<br><br>
<div class="col-12 col-sm-12 col-md-4 col-lg-3">
<br>
<ul class="list-group list-group-flush">
  <li class="list-group-item list-group-item-info"><a class="btn" href="<?php echo base_url(); ?>/public/catalogo">Catálogo</a></li>
  <li class="list-group-item list-group-item-info"><a class="btn" href="<?php echo base_url(); ?>/public/catalogoDama">Linea Femenina</a></li>
  <li class="list-group-item list-group-item-info"><a class="btn" href="<?php echo base_url(); ?>/public/catalogoCaballero">Linea Masculina</a></li>
  <li class="list-group-item list-group-item-info"><a class="btn" href="<?php echo base_url(); ?>/public/catalogoInfantil">Linea Infantil</a></li>
  <li class="list-group-item list-group-item-info"><a class="btn" href="<?php echo base_url(); ?>/public/catalogoDeportiva">Linea Deportiva</a></li>
  <li class="list-group-item list-group-item-info"><a class="btn" href="<?php echo base_url(); ?>/public/catalogoLentes">Lentes de Contacto</a></li>
  <li class="list-group-item list-group-item-info active"><a class="btn" href="<?php echo base_url(); ?>/public/catalogoAccesorios">Accesorios</a></li>
</ul>
<br>
</div>

<div class="col-12 col-sm-12 col-md-8 col-lg-9">
<div class="row">

<?php foreach ($Lente as $lente): ?>

    <?php if( $lente['descripcion'] == "accesorios"):?>
        <div class="col-sm-4">
        <div class="card" category="<?= $lente['descripcion']?>">
        <img src="<?= $lente['imagen']?>" class="card-img-top" alt="..." height="170px">
            <div class="card-body" >
            <h5 class="card-title"><?= $lente['descripcion']?></h5>
            <p class="card-text"><?= $lente['valor']?></p>
            <a href="#" class="btn btn-primary">comprar</a>
            </div>
        </div>
        </div>
    <?php endif; ?>  
<?php endforeach; ?>  
  
</div>

</div>
<br><br>
    </div>
</div>





<div class="container">
<div class="row">

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://irp-cdn.multiscreensite.com/b75554cb/MOBILE/jpg/86782-por-tus-ojos-optica-banner7ba6.jpg?v=7.3.45002" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://irp-cdn.multiscreensite.com/b75554cb/MOBILE/jpg/86782-por-tus-ojos-optica-banner7ba6.jpg?v=7.3.45002" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://irp-cdn.multiscreensite.com/b75554cb/MOBILE/jpg/86782-por-tus-ojos-optica-banner7ba6.jpg?v=7.3.45002" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</div>
</div>
</div>