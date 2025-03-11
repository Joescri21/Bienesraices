<?php 

    require 'includes/funciones.php';
    incluirTemplate('header');
    $texto = false;
?>

    <main class="contenedor seccion">
        <h1>Conoce sobre nosotros</h1>

        <section class="contenido-nosotros">
            <article class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="imagen/webp">
                    <source srcset="build/img/nosotros.jpg" type="imagen/jpg">
                    <img  loading="lazy" src="build/img/nosotros.jpg" alt="Sobre nosotros">
                </picture>
            </article>
            <article class="texto-nosotros">
                <blockquote>
                    25 años de Experiencia
                </blockquote>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                when an unknown printer took a galley of type and scrambled it to make a type specimen book. And more recently with desktop publishing 
                software like Aldus PageMaker including versions of Lorem Ipsum.</p>

                <p>Nullam blandit molestie nunc commodo laoreet. Sed mollis est quis urna bibendum fermentum. Nullam quam odio, volutpat non diam ultrices, suscipit hendrerit tortor. 
                Aenean ipsum nunc, gravida et velit bibendum, faucibus cursus velit. Proin ut tempor nulla. Aenean eget velit vel metus aliquet pellentesque sit amet sit amet tellus.
                Integer turpis quam, pellentesque eu bibendum sit amet, mollis ac nisl. Donec elementum ac nunc quis interdum. Aliquam vel erat feugiat, tincidunt mauris vel, pulvinar purus.
                Nulla tincidunt auctor lacus vel elementum. Suspendisse eget convallis enim. Vivamus facilisis varius vulputate.</p>
            </article>
        </section>
        <section>|
            <h1>Más sobre nosotros</h1>

            <div class="iconos-nosotros">
                <article class="icono">
                    <img src="build/img/icono1.svg" alt="Icono de seguridad" loading="lazy">
                    <h3>Seguridad</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Ut magnam laborum repellat mollitia, dolorem earum qui illum 
                    accusamus alias? Tenetur odio minus saepe officia quod doloribus soluta tempora dolores laboriosam?</p>
                </article>
                <article class="icono">
                    <img src="build/img/icono2.svg" alt="Icono de precio" loading="lazy">
                    <h3>Precio</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Ut magnam laborum repellat mollitia, dolorem earum qui illum 
                    accusamus alias? Tenetur odio minus saepe officia quod doloribus soluta tempora dolores laboriosam?</p>
                </article>
                <article class="icono">
                    <img src="build/img/icono3.svg" alt="Icono de tiempo" loading="lazy">
                    <h3>Tiempo</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Ut magnam laborum repellat mollitia, dolorem earum qui illum 
                    accusamus alias? Tenetur odio minus saepe officia quod doloribus soluta tempora dolores laboriosam?</p>
                </article>
            </div>
        </section>
    </main>
    
<?php 
    incluirTemplate('footer');
?>