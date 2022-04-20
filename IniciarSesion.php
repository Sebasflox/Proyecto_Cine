<?php include "shared/header.php" ?>


      <main>
        <h1 class="text-center mt-5">Iniciar Sesión</h1>
    
        <form class="w-40 m-auto" id="formularioL" action="">
            <div class="mb-3">
                <label class="form-label" for="">Cedula</label>
                <input class="form-control" type="text" name="usr" id="usr" placeholder="Cedula">
            </div>
            <div class="mb-3">
                <label class="form-label" for="">Contraseña</label>
                <input class="form-control" type="password" name="pass" id="pass" placeholder="Contraseña">
            </div>
            <div class="mb-3 d-grid gap-2">
                <input class="btn btn-dark" type="submit"  name = "iniciar_sesion" id="iniciar_sesion" value="Iniciar Sesión">
            </div>
            <div class="mb-3 d-grid gap-2">
                <center style="font-size: x-large">¿No tienes cuienta? </center>
                <center>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</center>
                <a class="btn btn-outline-dark" href="registrarse.php">Registrarse</a>
            </div>
            <p style="font-size: x-large">.</p>
        </form>
    </main>

    <?php include "shared/footer.php" ?>


    