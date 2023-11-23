<?php include_once 'Views/template-principal/header.php'; ?>



    <!-- Start Banner Hero -->
    <div id="template-mo-ciclo_rar-hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#template-mo-ciclo_rar-hero-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#template-mo-ciclo_rar-hero-carousel" data-bs-slide-to="1" class="active"></li>
            <li data-bs-target="#template-mo-ciclo_rar-hero-carousel" data-bs-slide-to="2" class="active"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="<?php echo BASE_URL; ?>assets/img/prom_03.png" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="h1 text-success"><b></b> </h1>
                                <h3 class="h2">Calidad y Economia</h3>
                                <p>
                                    contamos con la mejor calidad y con los precios mas bajos de todo el mercado 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="<?php echo BASE_URL; ?>assets/img/bici.png" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1"></h1>
                                <h3 class="h2">Facilidad de Financiacion</h3>
                                <p>
                                    Contar con nosotros es contar con la tranquilidad de tener a tu disposición una amplia 
                                    gama de opciones de financiamiento que te permitirán alcanzar tus objetivos de manera
                                     sencilla y conveniente. ¡Confía en nosotros y haz tus sueños realidad!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="<?php echo BASE_URL; ?>assets/img/bici3.png" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1"></h1>
                                <h3 class="h2">Facilidad para Adquirir Productos</h3>
                                <p>
                                    Con nosotros, la comodidad está a tu alcance. 
                                    En un solo lugar, podrás adquirir todo lo que necesitas. 
                                    Ya sea que estés buscando productos, servicios o soluciones para tus necesidades,
                                     nuestra amplia gama de ofertas te garantiza la conveniencia de encontrarlo todo aquí. 
                                     Desde productos de alta calidad hasta asesoramiento experto, 
                                     estamos comprometidos a brindarte una experiencia integral y satisfactoria.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-ciclo_rar-hero-carousel" role="button" data-bs-slide="prev">
            <i class="fas fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-ciclo_rar-hero-carousel" role="button" data-bs-slide="next">
            <i class="fas fa-chevron-right"></i>
        </a>
    </div>
    <!-- End Banner Hero -->


    <!-- Start Categories of The Month -->
    <section class="container py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Ofertas Del Mes</h1>
                <p>
                    los productos aqui mostrados pueden variar dependiendo de su 
                    disponibilidad en bodega.
                </p>
            </div>
        </div>
        <div class="row">
            <?php foreach ($data['categorias'] as $categoria) { ?>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="<?php echo BASE_URL; ?>assets/img/Bicicleta-Naranja.jpg" class="rounded-circle img-fluid border"></a>
                <h5 class="text-center mt-3 mb-3"><?php echo $categoria['categoria']; ?></h5>
            </div>
            <?php } ?>
        </div>
    </section>
    <!-- End Categories of The Month -->


    <!-- Start Featured Product -->
    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Productos destacados</h1>
                    <p>
                       Validos unica y exclusivamente asta final de mes o al agotar existencia.
                    </p>
                </div>
            </div>
            <div class="row">
                <?php foreach ($data['nuevosproductos'] as $producto) { ?>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="<?php echo BASE_URL . 'principal/detail/' . $producto['id']; ?>">
                            <img src="<?php echo $producto['imagen']; ?>" class="card-img-top" alt="<?php echo $producto['nombre']; ?>">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                </li>
                                <li class="text-muted text-right"><?php echo MONEDA . ' ' . $producto['precio']; ?></li>
                            </ul>
                            <a href="<?php echo BASE_URL . 'principal/detail/' . $producto['id']; ?>" class="h2 text-decoration-none text-dark"><?php echo $producto['nombre']; ?></a>
                            <p class="card-text">
                            <?php echo $producto['descripcion']; ?>
                            </p>
                            <p class="text-muted">Reviews (24)</p>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- End Featured Product -->

    <?php include_once 'Views/template-principal/footer.php'; ?>

</body>

</html>