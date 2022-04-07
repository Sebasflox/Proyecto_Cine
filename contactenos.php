<?php include "shared/header.php" ?>

    <h2 class="alinear">Conoce nuestra ubicacion:</h2>
    <div class="margenes" >
        <g2><iframe class="api" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62879.67874083695!2d-84.14836490157617!3d9.935628376782923!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0e342c50d15c5%3A0xe6746a6a9f11b882!2zU2FuIEpvc8Op!5e0!3m2!1ses!2scr!4v1644726131955!5m2!1ses!2scr" width="1900" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe></g2>
    </div>

    <main>

        <div class="row api margenes">

            <div class="col-6 ">
            <div class=" row g-3">
                <p class="titulo">Contact Us</p>
                <p>Nuestra empresa se compromete a atenter <br> las necesitades de nuestros usuarios <br> por eso llena nuestro formulario y pronto te estaremos <br> contactando.</p>
                <p>Nuestra información de contacto <br> se encuentra acá abajo.</p>
                <br>
                <p><b>Email:</b> <a href="index.html">FernandoIndustries@ferintento.co</a></p>
                <p><b>Telefono:</b> <a href="index.html">+506 8181 1818</a></p>
            </div>
            </div>

            <div class="col-6 ">
                <section id="Registro">
                    <form method="get" action="" class="margenes api">
                
                        <div class="col-6 align-items-center">
                            <div class="mb-3">
                                <input type="text" class="form-control" id="correo" name="correo " placeholder="Correo Electronico">
                            </div>
                            <div class="mb-3">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Motivo</option>
                                    <option value="1">Queja</option>
                                    <option value="2">Consulta</option>
                                    <option value="3">Devolución</option>
                                  </select>
                            </div>
                            <div class="mb-3">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Cine situado</option>
                                    <option value="1">Moravia</option>
                                    <option value="2">Cartago</option>
                                    <option value="3">Desamparados</option>
                                  </select>
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" name="descripcion" id="descripcion" cols="30" rows="10" placeholder="¿Cómo podemos ayudar?"></textarea>  
                            </div>
                        </div>
                    </form>
                </section>
                <button type="submit" class="btn btn-primary" >Enviar</button>
            </div>
        </div>
    </main>

    <?php include "shared/footer.php" ?>