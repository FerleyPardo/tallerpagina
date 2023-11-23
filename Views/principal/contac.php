<?php include_once 'Views/template-principal/header.php'; ?>

    <!-- Start Content Page -->
    <div class="container-fluid bg-light py-5">
        <div class="col-md-6 m-auto text-center">
            <h1 class="h1">Contactanos</h1>
            <p>
                Mas sobre nosotros o mayores informes.
            </p>
        </div>
    </div>

    <!-- Start Contact -->
    <div class="container py-5">
        <div class="row py-5">
            <form class="col-md-9 m-auto" method="post" role="form">
                <div class="row">
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputNombre">Nombre</label>
                        <input type="text" class="form-control mt-1" id="Nombre" name="Nombre" placeholder="Nombre">
                    </div>
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputEmail">Email</label>
                        <input type="email" class="form-control mt-1" id="email" name="email" placeholder="Email">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="inputTexto">Texto</label>
                    <input type="text" class="form-control mt-1" id="Texto" name="Texto" placeholder="Texto">
                </div>
                <div class="mb-3">
                    <label for="inputMensaje">Mensaje</label>
                    <textarea class="form-control mt-1" id="Mensaje" name="Mensaje" placeholder="Mensaje" rows="8"></textarea>
                </div>
                <div class="row">
                    <div class="col text-end mt-2">
                        <button type="submit" class="btn btn-success btn-lg px-3">HABLEMOS</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- End Contact -->

    <?php include_once 'Views/template-principal/footer.php'; ?>

</body>

</html>