<?php include "shared/header.php" ?>


<main>

    <div id="contenedor-pelicula">
        <div class="col-md-3 info" id="nav-izq">
            <div id="cartelera">

            </div>
            <div id="nav-izq-contenido">
                <div class="col-xs-6 col-sm-6 col-md-5">
                    <h1 class="titulo-datos-pelicula" tabindex="0">Año</h1>
                    <span id="span-año" tabindex="0"></span>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-7">
                    <h1 class="titulo-datos-pelicula" tabindex="0">Duración</h1>
                    <span id="span-duracion" tabindex="0"></span>
                </div>
                <div class="col-xs-12">
                    <h1 class="titulo-datos-pelicula" tabindex="0">Géneros</h1>
                    <span id="span-generos" tabindex="0"></span>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-1 info" id="nav-der" tabindex="0"></div>
        <div class="col-md-3 info contenedor-horarios" id="nav-izq">
            <div id="nav-izq-horarios">
                <div class="col-xs-12 col-md-12">
                    <h1 class="titulo-datos-pelicula" tabindex="0">Horarios Disponibles</h1>
                    <div class="col-xs-12" id="horarios"></div>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-1 info contenedor-trailer" tabindex="0">
            <h2>Trailer</h2>
            <div id="trailer"></div>
        </div>
    </div>
    <div id="contenedor-botones">
        <button>Volver atrás</button>
    </div>
</main>
    <?php include "shared/footer.php" ?>